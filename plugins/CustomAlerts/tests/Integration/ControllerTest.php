<?php
/**
 * Piwik - free/libre analytics platform
 *
 * @link http://piwik.org
 * @license http://www.gnu.org/licenses/gpl-3.0.html GPL v3 or later
 */

namespace Piwik\Plugins\CustomAlerts\tests\Integration;

use Piwik\Cache as PiwikCache;
use Piwik\Plugin;
use Piwik\Plugins\CustomAlerts\Controller;
use Piwik\SettingsPiwik;
use Piwik\Translate;

class CustomController extends Controller
{
    public function enrichTriggeredAlerts($triggeredAlerts)
    {
        return parent::enrichTriggeredAlerts($triggeredAlerts);
    }
}

/**
 * @group CustomAlerts
 * @group ControllerTest
 * @group Plugins
 */
class ControllerTest extends BaseTest
{
    /**
     * @var CustomController
     */
    private $controller;

    public function setUp()
    {
        parent::setUp();

        // make sure templates will be found
        Plugin\Manager::getInstance()->loadPlugin('CustomAlerts');
        Plugin\Manager::getInstance()->loadPlugin('Morpheus');

        if (class_exists('\Piwik\Cache\PluginAwareStaticCache')) {
            \Piwik\Cache\PluginAwareStaticCache::clearAll(); // TODO remove this one
        } else {
            PiwikCache::flushAll();
        }

        Translate::loadAllTranslations();

        $this->controller = new CustomController();
    }

    public function tearDown()
    {
        parent::tearDown();

        Translate::reset();
    }

    public function test_formatAlerts_asText()
    {
        $alerts = $this->getTriggeredAlerts();

        $host = SettingsPiwik::getPiwikUrl();

        $expected = <<<FORMATTED
MyName1 has been triggered as the metric Visits in report Single Website dashboard decreased more than 5000 from 228.128 to 4493.
>> Edit Alert ${host}index.php?module=CustomAlerts&action=editAlert&idAlert=1&idSite=1&period=week&date=yesterday

MyName2 has been triggered as the metric Visits in report Single Website dashboard decreased more than 5000 from 228.128 to 4493.
>> Edit Alert ${host}index.php?module=CustomAlerts&action=editAlert&idAlert=2&idSite=1&period=week&date=yesterday


FORMATTED;

        $rendered = $this->controller->formatAlerts($alerts, 'text');

        $this->assertEquals($expected, $rendered);
    }

    public function test_formatAlerts_asSms()
    {
        $alerts = $this->getTriggeredAlerts();

        $expected = <<<FORMATTED
MyName1 has been triggered for website Piwik test as the metric Visits in report Single Website dashboard decreased more than 5000 from 228.128 to 4493. MyName2 has been triggered for website Piwik test as the metric Visits in report Single Website dashboard decreased more than 5000 from 228.128 to 4493.
FORMATTED;

        $rendered = $this->controller->formatAlerts($alerts, 'sms');

        $this->assertEquals($expected, $rendered);
    }

    /**
     * @expectedException \Exception
     * @expectedExceptionMessage Unsupported format
     */
    public function test_formatAlerts_ShouldThrowException_IfInvalidFormatGiven()
    {
        $alerts = $this->getTriggeredAlerts();
        $this->controller->formatAlerts($alerts, 'php');
    }

    public function test_formatAlerts_asHtml()
    {
        $alerts = $this->getTriggeredAlerts();

        $host = SettingsPiwik::getPiwikUrl();

        $rendered = $this->controller->formatAlerts($alerts, 'html');

        $expected = <<<FORMATTED
<table style="border-collapse: collapse;width:100%" class="tableForm dataTable entityTable">
    <thead style="background-color:rgb(228,226,215);color:rgb(37,87,146);">
    <tr>
        <th style="padding:6px 6px;text-align: left;">Alert Name</th>
                <th style="padding:6px 6px;text-align: left;">Report</th>
        <th style="padding:6px 6px;text-align: left;">Alert Condition</th>
        <th style="padding:6px 6px;text-align: left;">Alert</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td style="max-width:300px;border-bottom:1px solid rgb(231,231,231);padding:5px 0 5px 6px;"><a href="${host}index.php?module=CustomAlerts&action=editAlert&idAlert=1&idSite=1&period=week&date=yesterday">MyName1</a></td>
                <td style="max-width:300px;border-bottom:1px solid rgb(231,231,231);padding:5px 0 5px 6px;">Single Website dashboard</td>
        <td style="max-width:300px;border-bottom:1px solid rgb(231,231,231);padding:5px 0 5px 6px;">Website is 'Piwik'</td>
        <td style="max-width:300px;border-bottom:1px solid rgb(231,231,231);padding:5px 0 5px 6px;">Visits decreased more than 5000 from 228.128 to 4493</td>
    </tr>

    <tr>
        <td style="max-width:300px;border-bottom:1px solid rgb(231,231,231);padding:5px 0 5px 6px;"><a href="${host}index.php?module=CustomAlerts&action=editAlert&idAlert=2&idSite=1&period=week&date=yesterday">MyName2</a></td>
                <td style="max-width:300px;border-bottom:1px solid rgb(231,231,231);padding:5px 0 5px 6px;">Single Website dashboard</td>
        <td style="max-width:300px;border-bottom:1px solid rgb(231,231,231);padding:5px 0 5px 6px;">Website is 'Piwik'</td>
        <td style="max-width:300px;border-bottom:1px solid rgb(231,231,231);padding:5px 0 5px 6px;">Visits decreased more than 5000 from 228.128 to 4493</td>
    </tr>

    </tbody>
</table>
FORMATTED;

        $this->assertEquals($expected, $rendered);

    }

    public function test_enrichTriggeredAlerts_shouldEnrichAlerts_IfReportExistsAndMetricIsValid()
    {
        $timestamp = 1389824417;
        $alerts = array(
            array('idsite' => 1, 'period' => 'day', 'ts_triggered' => $timestamp, 'metric' => 'nb_visits', 'report' => 'MultiSites_getAll', 'report_condition' => 'matches_any', 'value_old' => '228.001', 'value_new' => '1.0'),
            array('idsite' => 1, 'period' => 'week', 'ts_triggered' => $timestamp, 'metric' => 'nb_visits', 'report' => 'NotExistingModule_Action', 'report_condition' => 'matches_exactly', 'value_old' => '228.000', 'value_new' => '1.0'),
            array('idsite' => 1, 'period' => 'month', 'ts_triggered' => $timestamp, 'metric' => 'bounce_rate', 'report' => 'Actions_getPageUrls', 'report_condition' => 'matches_exactly', 'value_old' => '228.999', 'value_new' => '1.0'),
            array('idsite' => 1, 'period' => 'day', 'ts_triggered' => $timestamp, 'metric' => 'not_valid', 'report' => 'Actions_getPageUrls', 'report_condition' => 'contains', 'value_old' => '228.001', 'value_new' => '1.01'),
            // no dimension ,
            array('idsite' => 1, 'period' => 'day', 'ts_triggered' => $timestamp, 'metric' => 'nb_visits', 'report' => 'VisitsSummary_get', 'report_condition' => 'matches_any', 'value_old' => '228.001', 'value_new' => '10')
        );

        $enriched = $this->controller->enrichTriggeredAlerts($alerts);


        $alerts[0]['reportName']   = 'All Websites dashboard';
        $alerts[0]['reportMetric'] = 'Visits';
        $alerts[0]['dimension']    = 'Website';
        $alerts[0]['reportConditionName'] = 'matches any';
        $alerts[0]['value_old']    = '228.001';
        $alerts[0]['value_new']    = 1;
        $alerts[0]['siteName']     = 'Piwik test';
        $alerts[0]['ts_triggered'] = 'Tue, Jan 14';
        $this->assertInternalType('int', $alerts[0]['value_new']);
        $alerts[1]['reportName']   = null;
        $alerts[1]['reportMetric'] = null;
        $alerts[1]['dimension']    = null;
        $alerts[1]['reportConditionName'] = null;
        $alerts[1]['value_old']    = 228;
        $alerts[1]['value_new']    = 1;
        $alerts[1]['siteName']     = 'Piwik test';
        $alerts[1]['ts_triggered'] = 'Jan 6 – 12, 2014';
        $this->assertInternalType('int', $alerts[1]['value_old']);
        $this->assertInternalType('int', $alerts[1]['value_new']);
        $alerts[2]['reportName']   = 'Page URLs';
        $alerts[2]['reportMetric'] = 'Bounce Rate';
        $alerts[2]['dimension']    = 'Page URL';
        $alerts[2]['reportConditionName'] = 'is';
        $alerts[2]['value_old']    = '228.999';
        $alerts[2]['value_new']    = '1';
        $alerts[2]['siteName']     = 'Piwik test';
        $alerts[2]['ts_triggered'] = 'Dec 2013';
        $alerts[3]['reportName']   = 'Page URLs';
        $alerts[3]['reportMetric'] = null;
        $alerts[3]['dimension']    = 'Page URL';
        $alerts[3]['reportConditionName'] = 'contains';
        $alerts[3]['value_old']    = '228.001';
        $alerts[3]['value_new']    = '1.01';
        $alerts[3]['siteName']     = 'Piwik test';
        $alerts[3]['ts_triggered'] = 'Tue, Jan 14';
        $alerts[4]['reportName']   = 'Visits Summary';
        $alerts[4]['reportMetric'] = 'Visits';
        $alerts[4]['dimension']    = null;
        $alerts[4]['reportConditionName'] = 'matches any';
        $alerts[4]['value_old']    = '228.001';
        $alerts[4]['value_new']    = 10;
        $alerts[4]['siteName']     = 'Piwik test';
        $alerts[4]['ts_triggered'] = 'Tue, Jan 14';
        $this->assertInternalType('int', $alerts[4]['value_new']);
    
        $this->assertEquals($alerts, $enriched);
    }

    private function buildAlert($id, $name, $period = 'week', $idSite = 1, $siteName = 'Piwik test', $login = 'superUserLogin', $metric = 'nb_visits', $metricCondition = 'decrease_more_than', $metricMatched = 5000, $report = 'MultiSites_getOne', $reportCondition = 'matches_exactly', $reportMatched = 'Piwik')
    {
        return array(
            'idalert' => $id,
            'idsite' => $idSite,
            'name' => $name,
            'period' => $period,
            'login' => $login,
            'report' => $report,
            'report_condition' => $reportCondition,
            'report_matched' => $reportMatched,
            'metric' => $metric,
            'metric_condition' => $metricCondition,
            'metric_matched' => $metricMatched,
            'additional_emails' => array('test5@example.com'),
            'phone_numbers' => array('+1234567890', '232'),
            'email_me' => 1,
            'value_new' => '4493.000',
            'value_old' => '228.128',
            'ts_triggered' => time()
        );
    }

    /**
     * @return array
     */
    private function getTriggeredAlerts()
    {
        return array(
            $this->buildAlert(1, 'MyName1'),
            $this->buildAlert(2, 'MyName2'),
        );
    }

}
