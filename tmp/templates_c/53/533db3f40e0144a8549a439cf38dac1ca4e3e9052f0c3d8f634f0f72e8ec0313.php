<?php

/* @Live/getLastVisitsStart.twig */
class __TwigTemplate_e89ebc29b9a86a95da938dc75bb8d4289aa96bcaa6cdba1d73c0339cce0d7a1a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $context["maxPagesDisplayedByVisitor"] = 100;
        // line 3
        echo "
<ul id='visitsLive'>
    ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["visitors"]) ? $context["visitors"] : $this->getContext($context, "visitors")));
        foreach ($context['_seq'] as $context["_key"] => $context["visitor"]) {
            // line 6
            echo "        <li id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["visitor"], "idVisit", array()), "html", null, true);
            echo "\" class=\"visit\">
            <div style=\"display:none;\" class=\"idvisit\">";
            // line 7
            echo twig_escape_filter($this->env, $this->getAttribute($context["visitor"], "idVisit", array()), "html", null, true);
            echo "</div>
            <div title=\"";
            // line 8
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute($context["visitor"], "actionDetails", array())), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Actions")), "html", null, true);
            echo "\" class=\"datetime\">
                <span style=\"display:none;\" class=\"serverTimestamp\">";
            // line 9
            echo $this->getAttribute($context["visitor"], "serverTimestamp", array());
            echo "</span>
                ";
            // line 10
            $context["year"] = twig_date_format_filter($this->env, $this->getAttribute($context["visitor"], "serverTimestamp", array()), "Y");
            // line 11
            echo "                ";
            echo twig_escape_filter($this->env, twig_replace_filter($this->getAttribute($context["visitor"], "serverDatePretty", array()), array((isset($context["year"]) ? $context["year"] : $this->getContext($context, "year")) => " ")), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["visitor"], "serverTimePretty", array()), "html", null, true);
            echo " ";
            if (($this->getAttribute($context["visitor"], "visitDuration", array()) > 0)) {
                echo "<em>(";
                echo $this->getAttribute($context["visitor"], "visitDurationPretty", array());
                echo ")</em>";
            }
            // line 12
            echo "                ";
            if ( !twig_test_empty((($this->getAttribute($context["visitor"], "visitorId", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["visitor"], "visitorId", array()), false)) : (false)))) {
                // line 13
                echo "                  &nbsp;  <a class=\"visits-live-launch-visitor-profile rightLink\" title=\"";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Live_ViewVisitorProfile")), "html", null, true);
                echo " ";
                if ( !twig_test_empty($this->getAttribute($context["visitor"], "userId", array()))) {
                    echo $this->getAttribute($context["visitor"], "userId", array());
                }
                echo "\" data-visitor-id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["visitor"], "visitorId", array()), "html", null, true);
                echo "\">
                        ";
                // line 14
                if ( !twig_test_empty($this->getAttribute($context["visitor"], "userId", array()))) {
                    echo "<br/>";
                }
                // line 15
                echo "                        <img src=\"plugins/Live/images/visitorProfileLaunch.png\"/>
                        ";
                // line 16
                echo (($this->getAttribute($context["visitor"], "userId", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["visitor"], "userId", array()), "")) : (""));
                echo "
                    </a>
                ";
            }
            // line 19
            echo "                <br />

                ";
            // line 21
            if ($this->getAttribute($context["visitor"], "countryFlag", array(), "any", true, true)) {
                echo "&nbsp;<img src=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["visitor"], "countryFlag", array()), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["visitor"], "location", array()), "html", null, true);
                echo ", ";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Provider_ColumnProvider")), "html", null, true);
                echo " ";
                if ($this->getAttribute($context["visitor"], "providerName", array(), "any", true, true)) {
                    echo twig_escape_filter($this->env, $this->getAttribute($context["visitor"], "providerName", array()), "html", null, true);
                }
                echo "\"/>";
            }
            // line 22
            echo "                ";
            if ($this->getAttribute($context["visitor"], "browserIcon", array(), "any", true, true)) {
                echo "&nbsp;<img src=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["visitor"], "browserIcon", array()), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["visitor"], "browser", array()), "html", null, true);
                if ($this->getAttribute($context["visitor"], "plugins", array(), "any", true, true)) {
                    echo ", ";
                    echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Plugins")), "html", null, true);
                    echo ": ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["visitor"], "plugins", array()), "html", null, true);
                }
                echo "\"/>";
            }
            // line 23
            echo "                ";
            if ($this->getAttribute($context["visitor"], "operatingSystemIcon", array(), "any", true, true)) {
                echo "&nbsp;<img src=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["visitor"], "operatingSystemIcon", array()), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["visitor"], "operatingSystem", array()), "html", null, true);
                if ($this->getAttribute($context["visitor"], "resolution", array(), "any", true, true)) {
                    echo ", ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["visitor"], "resolution", array()), "html", null, true);
                }
                echo "\"/>";
            }
            // line 24
            echo "                &nbsp;
                ";
            // line 25
            if ($this->getAttribute($context["visitor"], "visitConverted", array())) {
                // line 26
                echo "                <span title=\"";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_VisitConvertedNGoals", $this->getAttribute($context["visitor"], "goalConversions", array()))), "html", null, true);
                echo "\" class='visitorRank'>
                    <img src=\"";
                // line 27
                echo twig_escape_filter($this->env, $this->getAttribute($context["visitor"], "visitConvertedIcon", array()), "html", null, true);
                echo "\" />
                    <span class='hash'>#</span>
                    ";
                // line 29
                echo twig_escape_filter($this->env, $this->getAttribute($context["visitor"], "goalConversions", array()), "html", null, true);
                echo "
                    ";
                // line 30
                if ($this->getAttribute($context["visitor"], "visitEcommerceStatusIcon", array())) {
                    // line 31
                    echo "
                        <img src=\"";
                    // line 32
                    echo twig_escape_filter($this->env, $this->getAttribute($context["visitor"], "visitEcommerceStatusIcon", array()), "html", null, true);
                    echo "\" title=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["visitor"], "visitEcommerceStatus", array()), "html", null, true);
                    echo "\"/>
                    ";
                }
                // line 34
                echo "                </span>
                ";
            }
            // line 36
            echo "                ";
            if ($this->getAttribute($context["visitor"], "visitorTypeIcon", array())) {
                // line 37
                echo "                    <img src=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["visitor"], "visitorTypeIcon", array()), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_ReturningVisitor")), "html", null, true);
                echo "\"/>
                ";
            }
            // line 39
            echo "
                ";
            // line 40
            if ($this->getAttribute($context["visitor"], "visitIp", array())) {
                echo " <span title=\"";
                if ( !twig_test_empty($this->getAttribute($context["visitor"], "visitorId", array()))) {
                    echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_VisitorID")), "html", null, true);
                    echo ": ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["visitor"], "visitorId", array()), "html", null, true);
                }
                echo "\">
                    IP: ";
                // line 41
                echo twig_escape_filter($this->env, $this->getAttribute($context["visitor"], "visitIp", array()), "html", null, true);
                echo "</span>
                ";
            }
            // line 43
            echo "            <!--<div class=\"settings\"></div>-->
            <span class=\"referrer\">
                ";
            // line 45
            if (($this->getAttribute($context["visitor"], "referrerType", array(), "any", true, true) && ($this->getAttribute($context["visitor"], "referrerType", array()) != "direct"))) {
                // line 46
                echo "                    ";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_FromReferrer")), "html", null, true);
                echo "
                    ";
                // line 47
                if ( !twig_test_empty($this->getAttribute($context["visitor"], "referrerUrl", array()))) {
                    // line 48
                    echo "                        <a href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["visitor"], "referrerUrl", array()), "html", null, true);
                    echo "\" rel=\"noreferrer\"  target=\"_blank\">
                    ";
                }
                // line 50
                echo "                    ";
                if ($this->getAttribute($context["visitor"], "searchEngineIcon", array(), "any", true, true)) {
                    // line 51
                    echo "                        <img src=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["visitor"], "searchEngineIcon", array()), "html", null, true);
                    echo "\" />
                    ";
                }
                // line 53
                echo "                    ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["visitor"], "referrerName", array()), "html", null, true);
                echo "
                    ";
                // line 54
                if ( !twig_test_empty($this->getAttribute($context["visitor"], "referrerUrl", array()))) {
                    // line 55
                    echo "                        </a>
                    ";
                }
                // line 57
                echo "                    ";
                if ( !twig_test_empty($this->getAttribute($context["visitor"], "referrerKeyword", array()))) {
                    echo " - \"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["visitor"], "referrerKeyword", array()), "html", null, true);
                    echo "\"";
                }
                // line 58
                echo "                    ";
                ob_start();
                echo twig_escape_filter($this->env, $this->getAttribute($context["visitor"], "referrerKeyword", array()), "html", null, true);
                $context["keyword"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
                // line 59
                echo "                    ";
                ob_start();
                echo twig_escape_filter($this->env, $this->getAttribute($context["visitor"], "referrerName", array()), "html", null, true);
                $context["searchName"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
                // line 60
                echo "                    ";
                ob_start();
                echo "#";
                echo twig_escape_filter($this->env, $this->getAttribute($context["visitor"], "referrerKeywordPosition", array()), "html", null, true);
                $context["position"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
                // line 61
                echo "                    ";
                if ( !twig_test_empty($this->getAttribute($context["visitor"], "referrerKeywordPosition", array()))) {
                    // line 62
                    echo "                        <span title='";
                    echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Live_KeywordRankedOnSearchResultForThisVisitor", (isset($context["keyword"]) ? $context["keyword"] : $this->getContext($context, "keyword")), (isset($context["position"]) ? $context["position"] : $this->getContext($context, "position")), (isset($context["searchName"]) ? $context["searchName"] : $this->getContext($context, "searchName")))), "html", null, true);
                    echo "' class='visitorRank'>
                            <span class='hash'>#</span> ";
                    // line 63
                    echo twig_escape_filter($this->env, $this->getAttribute($context["visitor"], "referrerKeywordPosition", array()), "html", null, true);
                    echo "
                        </span>
                    ";
                }
                // line 66
                echo "                ";
            } elseif ($this->getAttribute($context["visitor"], "referrerType", array(), "any", true, true)) {
                // line 67
                echo "                    ";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Referrers_DirectEntry")), "html", null, true);
                echo "
                ";
            }
            // line 69
            echo "            </span></div>
            <div id=\"";
            // line 70
            echo twig_escape_filter($this->env, $this->getAttribute($context["visitor"], "idVisit", array()), "html", null, true);
            echo "_actions\" class=\"settings\">
                <span class=\"pagesTitle\" title=\"";
            // line 71
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute($context["visitor"], "actionDetails", array())), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Actions")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Actions")), "html", null, true);
            echo ":</span>&nbsp;
                ";
            // line 72
            $context["col"] = 0;
            // line 73
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["visitor"], "actionDetails", array()));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["action"]) {
                // line 74
                echo "                    ";
                if (($this->getAttribute($context["loop"], "index", array()) <= (isset($context["maxPagesDisplayedByVisitor"]) ? $context["maxPagesDisplayedByVisitor"] : $this->getContext($context, "maxPagesDisplayedByVisitor")))) {
                    // line 75
                    echo "                        ";
                    if ((($this->getAttribute($context["action"], "type", array()) == "ecommerceOrder") || ($this->getAttribute($context["action"], "type", array()) == "ecommerceAbandonedCart"))) {
                        // line 76
                        echo "                            ";
                        ob_start();
                        // line 77
                        if (($this->getAttribute($context["action"], "type", array()) == "ecommerceOrder")) {
                            // line 78
                            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Goals_EcommerceOrder")), "html", null, true);
                        } else {
                            // line 80
                            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Goals_AbandonedCart")), "html", null, true);
                        }
                        // line 82
                        echo "
 - ";
                        // line 83
                        if (($this->getAttribute($context["action"], "type", array()) == "ecommerceOrder")) {
                            // line 84
                            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_ColumnRevenue")), "html", null, true);
                            echo ":";
                        } else {
                            // line 86
                            ob_start();
                            // line 87
                            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_ColumnRevenue")), "html", null, true);
                            $context["revenueLeft"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
                            // line 89
                            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Goals_LeftInCart", (isset($context["revenueLeft"]) ? $context["revenueLeft"] : $this->getContext($context, "revenueLeft")))), "html", null, true);
                            echo ":";
                        }
                        // line 90
                        echo " ";
                        echo call_user_func_array($this->env->getFilter('money')->getCallable(), array($this->getAttribute($context["action"], "revenue", array()), (isset($context["idSite"]) ? $context["idSite"] : $this->getContext($context, "idSite"))));
                        // line 92
                        echo "
 - ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["action"], "serverTimePretty", array()), "html", null, true);
                        // line 93
                        echo "
";
                        // line 94
                        if ( !twig_test_empty($this->getAttribute($context["action"], "itemDetails", array()))) {
                            // line 95
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["action"], "itemDetails", array()));
                            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                                // line 96
                                echo "
# ";
                                echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "itemSKU", array()), "html", null, true);
                                if ( !twig_test_empty($this->getAttribute($context["product"], "itemName", array()))) {
                                    echo ": ";
                                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "itemName", array()), "html", null, true);
                                }
                                if ( !twig_test_empty($this->getAttribute($context["product"], "itemCategory", array()))) {
                                    echo " (";
                                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "itemCategory", array()), "html", null, true);
                                    echo ")";
                                }
                                echo ", ";
                                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Quantity")), "html", null, true);
                                echo ": ";
                                echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "quantity", array()), "html", null, true);
                                echo ", ";
                                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Price")), "html", null, true);
                                echo ": ";
                                echo call_user_func_array($this->env->getFilter('money')->getCallable(), array($this->getAttribute($context["product"], "price", array()), (isset($context["idSite"]) ? $context["idSite"] : $this->getContext($context, "idSite"))));
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                        }
                        // line 99
                        echo "                            ";
                        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
                        // line 100
                        echo "                            <span title=\"";
                        echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : $this->getContext($context, "title")), "html", null, true);
                        echo "\">
\t\t\t\t\t\t        <img class='iconPadding' src=\"";
                        // line 101
                        echo twig_escape_filter($this->env, $this->getAttribute($context["action"], "icon", array()), "html", null, true);
                        echo "\"/>
                                ";
                        // line 102
                        if (($this->getAttribute($context["action"], "type", array()) == "ecommerceOrder")) {
                            // line 103
                            echo "                                    ";
                            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_ColumnRevenue")), "html", null, true);
                            echo ": ";
                            echo call_user_func_array($this->env->getFilter('money')->getCallable(), array($this->getAttribute($context["action"], "revenue", array()), (isset($context["idSite"]) ? $context["idSite"] : $this->getContext($context, "idSite"))));
                            echo "
                                ";
                        }
                        // line 105
                        echo "                            </span>
                        ";
                    } else {
                        // line 107
                        echo "                            ";
                        $context["col"] = ((isset($context["col"]) ? $context["col"] : $this->getContext($context, "col")) + 1);
                        // line 108
                        echo "                            ";
                        if (((isset($context["col"]) ? $context["col"] : $this->getContext($context, "col")) >= 9)) {
                            // line 109
                            echo "                                ";
                            $context["col"] = 0;
                            // line 110
                            echo "                            ";
                        }
                        // line 111
                        echo "                            <a href=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["action"], "url", array()), "html", null, true);
                        echo "\" target=\"_blank\">
                                ";
                        // line 112
                        if (($this->getAttribute($context["action"], "type", array()) == "action")) {
                            // line 114
                            ob_start();
                            // line 115
                            if ( !twig_test_empty($this->getAttribute($context["action"], "pageTitle", array()))) {
                                echo call_user_func_array($this->env->getFilter('rawSafeDecoded')->getCallable(), array($this->getAttribute($context["action"], "pageTitle", array())));
                            }
                            // line 116
                            echo "
";
                            // line 117
                            echo twig_escape_filter($this->env, $this->getAttribute($context["action"], "serverTimePretty", array()), "html", null, true);
                            echo "
";
                            // line 118
                            if ($this->getAttribute($context["action"], "timeSpentPretty", array(), "any", true, true)) {
                                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_TimeOnPage")), "html", null, true);
                                echo ": ";
                                echo $this->getAttribute($context["action"], "timeSpentPretty", array());
                            }
                            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
                            // line 120
                            echo "                                    <img src=\"plugins/Live/images/file";
                            echo twig_escape_filter($this->env, (isset($context["col"]) ? $context["col"] : $this->getContext($context, "col")), "html", null, true);
                            echo ".png\" title=\"";
                            echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : $this->getContext($context, "title")), "html", null, true);
                            echo "\"/>
                                ";
                        } elseif ((($this->getAttribute(                        // line 121
$context["action"], "type", array()) == "outlink") || ($this->getAttribute($context["action"], "type", array()) == "download"))) {
                            // line 122
                            echo "                                    <img class='iconPadding' src=\"";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["action"], "icon", array()), "html", null, true);
                            echo "\"
                                         title=\"";
                            // line 123
                            echo twig_escape_filter($this->env, $this->getAttribute($context["action"], "url", array()), "html", null, true);
                            echo " - ";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["action"], "serverTimePretty", array()), "html", null, true);
                            echo "\"/>
                                ";
                        } elseif (($this->getAttribute(                        // line 124
$context["action"], "type", array()) == "search")) {
                            // line 125
                            echo "                                    <img class='iconPadding' src=\"";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["action"], "icon", array()), "html", null, true);
                            echo "\"
                                         title=\"";
                            // line 126
                            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Actions_SubmenuSitesearch")), "html", null, true);
                            echo ": ";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["action"], "siteSearchKeyword", array()), "html", null, true);
                            echo " - ";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["action"], "serverTimePretty", array()), "html", null, true);
                            echo "\"/>
                                ";
                        } elseif ( !twig_test_empty((($this->getAttribute(                        // line 127
$context["action"], "eventCategory", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["action"], "eventCategory", array()), false)) : (false)))) {
                            // line 128
                            echo "                                    <img  class=\"iconPadding\" src='";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["action"], "icon", array()), "html", null, true);
                            echo "'
                                        title=\"";
                            // line 129
                            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Events_Event")), "html", null, true);
                            echo " ";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["action"], "eventCategory", array()), "html", null, true);
                            echo " - ";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["action"], "eventAction", array()), "html", null, true);
                            echo " ";
                            if ($this->getAttribute($context["action"], "eventName", array(), "any", true, true)) {
                                echo "- ";
                                echo twig_escape_filter($this->env, $this->getAttribute($context["action"], "eventName", array()), "html", null, true);
                            }
                            echo " ";
                            if ($this->getAttribute($context["action"], "eventValue", array(), "any", true, true)) {
                                echo "- ";
                                echo twig_escape_filter($this->env, $this->getAttribute($context["action"], "eventValue", array()), "html", null, true);
                            }
                            echo "\"/>
                                ";
                        } else {
                            // line 131
                            echo "                                    <img class='iconPadding' src=\"";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["action"], "icon", array()), "html", null, true);
                            echo "\"
                                         title=\"";
                            // line 132
                            echo twig_escape_filter($this->env, $this->getAttribute($context["action"], "goalName", array()), "html", null, true);
                            echo " - ";
                            if (($this->getAttribute($context["action"], "revenue", array()) > 0)) {
                                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_ColumnRevenue")), "html", null, true);
                                echo ": ";
                                echo call_user_func_array($this->env->getFilter('money')->getCallable(), array($this->getAttribute($context["action"], "revenue", array()), (isset($context["idSite"]) ? $context["idSite"] : $this->getContext($context, "idSite"))));
                                echo " - ";
                            }
                            echo " ";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["action"], "serverTimePretty", array()), "html", null, true);
                            echo "\"/>
                                ";
                        }
                        // line 134
                        echo "                            </a>
                        ";
                    }
                    // line 136
                    echo "                    ";
                }
                // line 137
                echo "                ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['action'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 138
            echo "                ";
            if ((twig_length_filter($this->env, $this->getAttribute($context["visitor"], "actionDetails", array())) > (isset($context["maxPagesDisplayedByVisitor"]) ? $context["maxPagesDisplayedByVisitor"] : $this->getContext($context, "maxPagesDisplayedByVisitor")))) {
                // line 139
                echo "                    <em>(";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Live_MorePagesNotDisplayed")), "html", null, true);
                echo ")</em>
                ";
            }
            // line 141
            echo "            </div>
        </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['visitor'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 144
        echo "</ul>
<script type=\"text/javascript\">
\$('#visitsLive').on('click', '.visits-live-launch-visitor-profile', function (e) {
    e.preventDefault();
    broadcast.propagateNewPopoverParameter('visitorProfile', \$(this).attr('data-visitor-id'));
    return false;
});
</script>";
    }

    public function getTemplateName()
    {
        return "@Live/getLastVisitsStart.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  578 => 144,  570 => 141,  564 => 139,  561 => 138,  547 => 137,  544 => 136,  540 => 134,  526 => 132,  521 => 131,  502 => 129,  497 => 128,  495 => 127,  487 => 126,  482 => 125,  480 => 124,  474 => 123,  469 => 122,  467 => 121,  460 => 120,  453 => 118,  449 => 117,  446 => 116,  442 => 115,  440 => 114,  438 => 112,  433 => 111,  430 => 110,  427 => 109,  424 => 108,  421 => 107,  417 => 105,  409 => 103,  407 => 102,  403 => 101,  398 => 100,  395 => 99,  369 => 96,  365 => 95,  363 => 94,  360 => 93,  356 => 92,  353 => 90,  349 => 89,  346 => 87,  344 => 86,  340 => 84,  338 => 83,  335 => 82,  332 => 80,  329 => 78,  327 => 77,  324 => 76,  321 => 75,  318 => 74,  300 => 73,  298 => 72,  290 => 71,  286 => 70,  283 => 69,  277 => 67,  274 => 66,  268 => 63,  263 => 62,  260 => 61,  254 => 60,  249 => 59,  244 => 58,  237 => 57,  233 => 55,  231 => 54,  226 => 53,  220 => 51,  217 => 50,  211 => 48,  209 => 47,  204 => 46,  202 => 45,  198 => 43,  193 => 41,  183 => 40,  180 => 39,  172 => 37,  169 => 36,  165 => 34,  158 => 32,  155 => 31,  153 => 30,  149 => 29,  144 => 27,  139 => 26,  137 => 25,  134 => 24,  121 => 23,  106 => 22,  92 => 21,  88 => 19,  82 => 16,  79 => 15,  75 => 14,  64 => 13,  61 => 12,  50 => 11,  48 => 10,  44 => 9,  38 => 8,  34 => 7,  29 => 6,  25 => 5,  21 => 3,  19 => 2,);
    }
}
/* {# some users view thousands of pages which can crash the browser viewing Live! #}*/
/* {% set maxPagesDisplayedByVisitor=100 %}*/
/* */
/* <ul id='visitsLive'>*/
/*     {% for visitor in visitors %}*/
/*         <li id="{{ visitor.idVisit }}" class="visit">*/
/*             <div style="display:none;" class="idvisit">{{ visitor.idVisit }}</div>*/
/*             <div title="{{ visitor.actionDetails|length }} {{ 'General_Actions'|translate }}" class="datetime">*/
/*                 <span style="display:none;" class="serverTimestamp">{{ visitor.serverTimestamp|raw }}</span>*/
/*                 {% set year = visitor.serverTimestamp|date('Y') %}*/
/*                 {{ visitor.serverDatePretty|replace({(year): ' '}) }} - {{ visitor.serverTimePretty }} {% if visitor.visitDuration > 0 %}<em>({{ visitor.visitDurationPretty|raw }})</em>{% endif %}*/
/*                 {% if visitor.visitorId|default(false) is not empty %}*/
/*                   &nbsp;  <a class="visits-live-launch-visitor-profile rightLink" title="{{ 'Live_ViewVisitorProfile'|translate }} {% if visitor.userId is not empty %}{{ visitor.userId|raw }}{% endif %}" data-visitor-id="{{ visitor.visitorId }}">*/
/*                         {% if visitor.userId is not empty %}<br/>{% endif %}*/
/*                         <img src="plugins/Live/images/visitorProfileLaunch.png"/>*/
/*                         {{ visitor.userId|default('')|raw }}*/
/*                     </a>*/
/*                 {% endif %}*/
/*                 <br />*/
/* */
/*                 {% if visitor.countryFlag is defined %}&nbsp;<img src="{{ visitor.countryFlag }}" title="{{ visitor.location }}, {{ 'Provider_ColumnProvider'|translate }} {% if visitor.providerName is defined %}{{ visitor.providerName }}{% endif %}"/>{% endif %}*/
/*                 {% if visitor.browserIcon is defined %}&nbsp;<img src="{{ visitor.browserIcon }}" title="{{ visitor.browser }}{% if visitor.plugins is defined %}, {{ 'General_Plugins'|translate }}: {{ visitor.plugins }}{% endif %}"/>{% endif %}*/
/*                 {% if visitor.operatingSystemIcon is defined %}&nbsp;<img src="{{ visitor.operatingSystemIcon }}" title="{{ visitor.operatingSystem }}{% if visitor.resolution is defined %}, {{ visitor.resolution }}{% endif %}"/>{% endif %}*/
/*                 &nbsp;*/
/*                 {% if visitor.visitConverted %}*/
/*                 <span title="{{ 'General_VisitConvertedNGoals'|translate(visitor.goalConversions) }}" class='visitorRank'>*/
/*                     <img src="{{ visitor.visitConvertedIcon }}" />*/
/*                     <span class='hash'>#</span>*/
/*                     {{ visitor.goalConversions }}*/
/*                     {% if visitor.visitEcommerceStatusIcon %}*/
/* */
/*                         <img src="{{ visitor.visitEcommerceStatusIcon }}" title="{{ visitor.visitEcommerceStatus }}"/>*/
/*                     {% endif %}*/
/*                 </span>*/
/*                 {% endif %}*/
/*                 {% if visitor.visitorTypeIcon %}*/
/*                     <img src="{{ visitor.visitorTypeIcon }}" title="{{ 'General_ReturningVisitor'|translate }}"/>*/
/*                 {% endif %}*/
/* */
/*                 {% if visitor.visitIp %} <span title="{% if visitor.visitorId is not empty %}{{ 'General_VisitorID'|translate }}: {{ visitor.visitorId }}{% endif %}">*/
/*                     IP: {{ visitor.visitIp }}</span>*/
/*                 {% endif %}*/
/*             <!--<div class="settings"></div>-->*/
/*             <span class="referrer">*/
/*                 {% if visitor.referrerType is defined and visitor.referrerType != 'direct' %}*/
/*                     {{ 'General_FromReferrer'|translate }}*/
/*                     {% if visitor.referrerUrl is not empty %}*/
/*                         <a href="{{ visitor.referrerUrl }}" rel="noreferrer"  target="_blank">*/
/*                     {% endif %}*/
/*                     {% if visitor.searchEngineIcon is defined %}*/
/*                         <img src="{{ visitor.searchEngineIcon }}" />*/
/*                     {% endif %}*/
/*                     {{ visitor.referrerName }}*/
/*                     {% if visitor.referrerUrl is not empty %}*/
/*                         </a>*/
/*                     {% endif %}*/
/*                     {% if visitor.referrerKeyword is not empty %} - "{{ visitor.referrerKeyword }}"{% endif %}*/
/*                     {% set keyword %}{{ visitor.referrerKeyword }}{% endset %}*/
/*                     {% set searchName %}{{ visitor.referrerName }}{% endset %}*/
/*                     {% set position %}#{{ visitor.referrerKeywordPosition}}{% endset %}*/
/*                     {% if visitor.referrerKeywordPosition is not empty %}*/
/*                         <span title='{{ 'Live_KeywordRankedOnSearchResultForThisVisitor'|translate(keyword,position,searchName) }}' class='visitorRank'>*/
/*                             <span class='hash'>#</span> {{ visitor.referrerKeywordPosition }}*/
/*                         </span>*/
/*                     {% endif %}*/
/*                 {% elseif visitor.referrerType is defined %}*/
/*                     {{ 'Referrers_DirectEntry'|translate }}*/
/*                 {% endif %}*/
/*             </span></div>*/
/*             <div id="{{ visitor.idVisit }}_actions" class="settings">*/
/*                 <span class="pagesTitle" title="{{ visitor.actionDetails|length }} {{ 'General_Actions'|translate }}">{{ 'General_Actions'|translate }}:</span>&nbsp;*/
/*                 {% set col = 0 %}*/
/*                 {% for action in visitor.actionDetails %}*/
/*                     {% if loop.index <= maxPagesDisplayedByVisitor %}*/
/*                         {% if action.type == 'ecommerceOrder' or action.type == 'ecommerceAbandonedCart' %}*/
/*                             {% set title %}*/
/*                                 {%- if action.type == 'ecommerceOrder' %}*/
/*                                     {{- 'Goals_EcommerceOrder'|translate -}}*/
/*                                 {% else %}*/
/*                                     {{- 'Goals_AbandonedCart'|translate -}}*/
/*                                 {% endif %}*/
/*                                 {{- "\n - " -}}*/
/*                                 {%- if action.type == 'ecommerceOrder' -%}*/
/*                                     {{- 'General_ColumnRevenue'|translate -}}:*/
/*                                   {%- else -%}*/
/*                                     {%- set revenueLeft -%}*/
/*                                         {{- 'General_ColumnRevenue'|translate -}}*/
/*                                     {%- endset -%}*/
/*                                     {{- 'Goals_LeftInCart'|translate(revenueLeft) -}}:*/
/*                                 {%- endif %} {{ action.revenue|money(idSite)|raw -}}*/
/* */
/*                                 {{- "\n - " -}}{{- action.serverTimePretty -}}*/
/*                                 {{- "\n" -}}*/
/*                                 {% if action.itemDetails is not empty -%}*/
/*                                     {% for product in action.itemDetails -%}*/
/*                                         {{- "\n# " -}}{{ product.itemSKU }}{% if product.itemName is not empty %}: {{ product.itemName }}{% endif %}{% if product.itemCategory is not empty %} ({{ product.itemCategory }}){% endif %}, {{ 'General_Quantity'|translate }}: {{ product.quantity }}, {{ 'General_Price'|translate }}: {{ product.price|money(idSite)|raw }}*/
/*                                     {%- endfor %}*/
/*                                 {%- endif %}*/
/*                             {% endset %}*/
/*                             <span title="{{- title -}}">*/
/* 						        <img class='iconPadding' src="{{ action.icon }}"/>*/
/*                                 {% if action.type == 'ecommerceOrder' %}*/
/*                                     {{ 'General_ColumnRevenue'|translate }}: {{ action.revenue|money(idSite)|raw }}*/
/*                                 {% endif %}*/
/*                             </span>*/
/*                         {% else %}*/
/*                             {% set col = col + 1 %}*/
/*                             {% if col >= 9 %}*/
/*                                 {% set col = 0 %}*/
/*                             {% endif %}*/
/*                             <a href="{{ action.url }}" target="_blank">*/
/*                                 {% if action.type == 'action' %}*/
/* {# white spacing matters as Chrome tooltip display whitespaces #}*/
/* {% set title %}*/
/* {% if action.pageTitle is not empty %}{{ action.pageTitle|rawSafeDecoded }}{% endif %}*/
/* */
/* {{ action.serverTimePretty }}*/
/* {% if action.timeSpentPretty is defined %}{{ 'General_TimeOnPage'|translate }}: {{ action.timeSpentPretty|raw }}{% endif %}*/
/* {%- endset %}*/
/*                                     <img src="plugins/Live/images/file{{ col }}.png" title="{{- title -}}"/>*/
/*                                 {% elseif action.type == 'outlink' or action.type == 'download' %}*/
/*                                     <img class='iconPadding' src="{{ action.icon }}"*/
/*                                          title="{{ action.url }} - {{ action.serverTimePretty }}"/>*/
/*                                 {% elseif action.type == 'search' %}*/
/*                                     <img class='iconPadding' src="{{ action.icon }}"*/
/*                                          title="{{ 'Actions_SubmenuSitesearch'|translate }}: {{ action.siteSearchKeyword }} - {{ action.serverTimePretty }}"/>*/
/*                                 {% elseif action.eventCategory|default(false) is not empty %}*/
/*                                     <img  class="iconPadding" src='{{ action.icon }}'*/
/*                                         title="{{ 'Events_Event'|translate }} {{ action.eventCategory }} - {{ action.eventAction }} {% if action.eventName is defined %}- {{ action.eventName }}{% endif %} {% if action.eventValue is defined %}- {{ action.eventValue }}{% endif %}"/>*/
/*                                 {% else %}*/
/*                                     <img class='iconPadding' src="{{ action.icon }}"*/
/*                                          title="{{ action.goalName }} - {% if action.revenue > 0 %}{{ 'General_ColumnRevenue'|translate }}: {{ action.revenue|money(idSite)|raw }} - {% endif %} {{ action.serverTimePretty }}"/>*/
/*                                 {% endif %}*/
/*                             </a>*/
/*                         {% endif %}*/
/*                     {% endif %}*/
/*                 {% endfor %}*/
/*                 {% if visitor.actionDetails|length > maxPagesDisplayedByVisitor %}*/
/*                     <em>({{ 'Live_MorePagesNotDisplayed'|translate }})</em>*/
/*                 {% endif %}*/
/*             </div>*/
/*         </li>*/
/*     {% endfor %}*/
/* </ul>*/
/* <script type="text/javascript">*/
/* $('#visitsLive').on('click', '.visits-live-launch-visitor-profile', function (e) {*/
/*     e.preventDefault();*/
/*     broadcast.propagateNewPopoverParameter('visitorProfile', $(this).attr('data-visitor-id'));*/
/*     return false;*/
/* });*/
/* </script>*/
