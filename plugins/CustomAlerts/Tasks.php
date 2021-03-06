<?php
/**
 * Piwik - free/libre analytics platform
 *
 * @link http://piwik.org
 * @license http://www.gnu.org/licenses/gpl-3.0.html GPL v3 or later
 *
 */
namespace Piwik\Plugins\CustomAlerts;

use Piwik\Site;

class Tasks extends \Piwik\Plugin\Tasks
{
    public function schedule()
    {
        $alerts  = new CustomAlerts();
        $siteIds = $alerts->getSiteIdsHavingAlerts();

        foreach ($siteIds as $idSite) {
            $timezoneForSite = Site::getTimezoneFor($idSite);

            $scheduledTime = $this->daily('runAlertsDaily', $idSite);
            $scheduledTime->setTimezone($timezoneForSite);

            $scheduledTime = $this->weekly('runAlertsWeekly', $idSite);
            $scheduledTime->setTimezone($timezoneForSite);

            $scheduledTime = $this->monthly('runAlertsMonthly', $idSite);
            $scheduledTime->setTimezone($timezoneForSite);
        }
    }

    public function runAlertsDaily($idSite)
    {
        $this->runAlerts('day', $idSite);
    }

    public function runAlertsWeekly($idSite)
    {
        $this->runAlerts('week', $idSite);
    }

    public function runAlertsMonthly($idSite)
    {
        $this->runAlerts('month', $idSite);
    }

    private function runAlerts($period, $idSite)
    {
        $processor = new Processor();
        $processor->processAlerts($period, (int) $idSite);
        $notifier  = new Notifier();
        $notifier->sendNewAlerts($period, (int) $idSite);
    }
}