<?php

/* @SegmentEditor/_segmentSelector.twig */
class __TwigTemplate_e6f7cc0a93ec46ef538e79f4d08fbd6ca1e98c7b355da9b9103c657c317289fa extends Twig_Template
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
        // line 1
        echo "<div class=\"SegmentEditor\" style=\"display:none;\">
    <div class=\"segmentationContainer listHtml\" title=\"";
        // line 2
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("SegmentEditor_ChooseASegment")), "html_attr");
        echo ". ";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("SegmentEditor_CurrentlySelectedSegment", (isset($context["segmentDescription"]) ? $context["segmentDescription"] : $this->getContext($context, "segmentDescription")))), "html_attr");
        echo "\">
        <a class=\"title\"><span class=\"icon icon-segment\"></span><span class=\"segmentationTitle\"></span></a>
        <div class=\"dropdown dropdown-body\">
            <div class=\"segmentFilterContainer\">
                <input class=\"segmentFilter\" type=\"text\" value=\"";
        // line 6
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Search")), "html", null, true);
        echo "\"/>
                <span/>
            </div>
            <ul class=\"submenu\">
                <li>";
        // line 10
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("SegmentEditor_SelectSegmentOfVisitors")), "html", null, true);
        echo "
                    <div class=\"segmentList\">
                        <ul>
                        </ul>
                    </div>
                </li>
            </ul>

            ";
        // line 18
        if ((isset($context["authorizedToCreateSegments"]) ? $context["authorizedToCreateSegments"] : $this->getContext($context, "authorizedToCreateSegments"))) {
            // line 19
            echo "                <a class=\"add_new_segment btn\">";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("SegmentEditor_AddNewSegment")), "html", null, true);
            echo "</a>
            ";
        } else {
            // line 21
            echo "                <ul class=\"submenu\">
                <li>
                    ";
            // line 23
            if ((isset($context["isUserAnonymous"]) ? $context["isUserAnonymous"] : $this->getContext($context, "isUserAnonymous"))) {
                // line 24
                echo "                        <span class='youMustBeLoggedIn'>";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("SegmentEditor_YouMustBeLoggedInToCreateSegments")), "html", null, true);
                echo "
                        <br/>&rsaquo; <a href='index.php?module=";
                // line 25
                echo twig_escape_filter($this->env, (isset($context["loginModule"]) ? $context["loginModule"] : $this->getContext($context, "loginModule")), "html", null, true);
                echo "'>";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Login_LogIn")), "html", null, true);
                echo "</a> </span>
                    ";
            }
            // line 27
            echo "                </li>
                </ul>
            ";
        }
        // line 30
        echo "        </div>
    </div>

    <div class=\"initial-state-rows\">";
        // line 33
        echo "<div class=\"segment-add-row initial\"><div>
        <span>+ ";
        // line 34
        echo call_user_func_array($this->env->getFilter('translate')->getCallable(), array("SegmentEditor_DragDropCondition"));
        echo "</span>
    </div></div>
    <div class=\"segment-and\">";
        // line 36
        echo call_user_func_array($this->env->getFilter('translate')->getCallable(), array("SegmentEditor_OperatorAND"));
        echo "</div>
    <div class=\"segment-add-row initial\"><div>
        <span>+ ";
        // line 38
        echo call_user_func_array($this->env->getFilter('translate')->getCallable(), array("SegmentEditor_DragDropCondition"));
        echo "</span>
    </div></div>
    </div>

    <div class=\"segment-row-inputs\">
        <div class=\"segment-input metricListBlock\">
            <select title=\"";
        // line 44
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("SegmentEditor_ChooseASegment")), "html", null, true);
        echo "\" class=\"metricList\">
                ";
        // line 45
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["segmentsByCategory"]) ? $context["segmentsByCategory"] : $this->getContext($context, "segmentsByCategory")));
        foreach ($context['_seq'] as $context["category"] => $context["segmentsInCategory"]) {
            // line 46
            echo "                <optgroup label=\"";
            echo twig_escape_filter($this->env, $context["category"], "html", null, true);
            echo "\">
                    ";
            // line 47
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["segmentsInCategory"]);
            foreach ($context['_seq'] as $context["_key"] => $context["segmentInCategory"]) {
                // line 48
                echo "                        <option data-type=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["segmentInCategory"], "type", array()), "html", null, true);
                echo "\" value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["segmentInCategory"], "segment", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["segmentInCategory"], "name", array()), "html", null, true);
                echo "</option>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['segmentInCategory'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 50
            echo "                </optgroup>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['category'], $context['segmentsInCategory'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "            </select>
        </div>
        <div class=\"segment-input metricMatchBlock\">
            <select title=\"";
        // line 55
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Matches")), "html", null, true);
        echo "\">
                <option value=\"==\">";
        // line 56
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_OperationEquals")), "html", null, true);
        echo "</option>
                <option value=\"!=\">";
        // line 57
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_OperationNotEquals")), "html", null, true);
        echo "</option>
                <option value=\"<=\">";
        // line 58
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_OperationAtMost")), "html", null, true);
        echo "</option>
                <option value=\">=\">";
        // line 59
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_OperationAtLeast")), "html", null, true);
        echo "</option>
                <option value=\"<\">";
        // line 60
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_OperationLessThan")), "html", null, true);
        echo "</option>
                <option value=\">\">";
        // line 61
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_OperationGreaterThan")), "html", null, true);
        echo "</option>
                <option value=\"=@\">";
        // line 62
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_OperationContains")), "html", null, true);
        echo "</option>
                <option value=\"!@\">";
        // line 63
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_OperationDoesNotContain")), "html", null, true);
        echo "</option>
                <option value=\"=^\">";
        // line 64
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_OperationStartsWith")), "html", null, true);
        echo "</option>
                <option value=\"=\$\">";
        // line 65
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_OperationEndsWith")), "html", null, true);
        echo "</option>
            </select>
        </div>
        <div class=\"segment-input metricValueBlock\">
            <input type=\"text\" title=\"";
        // line 69
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Value")), "html", null, true);
        echo "\">
        </div>
        <div class=\"clear\"></div>
    </div>
    <div class=\"segment-rows\">
        <div class=\"segment-row\">
            <a href=\"#\" class=\"segment-close\"></a>
            <a href=\"#\" class=\"segment-loading\"></a>
        </div>
    </div>
    <div class=\"segment-or\">";
        // line 79
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("SegmentEditor_OperatorOR")), "html", null, true);
        echo "</div>
    <div class=\"segment-add-or\"><div>
            ";
        // line 81
        ob_start();
        echo "<span>";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("SegmentEditor_OperatorOR")), "html", null, true);
        echo "</span>";
        $context["orCondition"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 82
        echo "            <a href=\"#\"> + ";
        echo call_user_func_array($this->env->getFilter('translate')->getCallable(), array("SegmentEditor_AddANDorORCondition", (isset($context["orCondition"]) ? $context["orCondition"] : $this->getContext($context, "orCondition"))));
        echo " </a>
        </div>
    </div>
    <div class=\"segment-and\">";
        // line 85
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("SegmentEditor_OperatorAND")), "html", null, true);
        echo "</div>
    <div class=\"segment-add-row\"><div>
            ";
        // line 87
        ob_start();
        echo "<span>";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("SegmentEditor_OperatorAND")), "html", null, true);
        echo "</span>";
        $context["andCondition"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 88
        echo "            <a href=\"#\">+ ";
        echo call_user_func_array($this->env->getFilter('translate')->getCallable(), array("SegmentEditor_AddANDorORCondition", (isset($context["andCondition"]) ? $context["andCondition"] : $this->getContext($context, "andCondition"))));
        echo "</a>
        </div>
    </div>
    <div class=\"segment-element borderedControl expanded\">
        <div class=\"segment-nav\">
            <h4 class=\"visits\">
                <span class=\"icon-segment\"></span><span class=\"available_segments\"><strong>
                <select class=\"available_segments_select\"></select>
            </strong></span></h4>
            <div class=\"scrollable\">
            <ul>
                ";
        // line 99
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["segmentsByCategory"]) ? $context["segmentsByCategory"] : $this->getContext($context, "segmentsByCategory")));
        foreach ($context['_seq'] as $context["category"] => $context["segmentsInCategory"]) {
            // line 100
            echo "                <li data=\"visit\">
                    <a class=\"metric_category\" href=\"#\">";
            // line 101
            echo twig_escape_filter($this->env, $context["category"], "html", null, true);
            echo "</a>
                    <ul style=\"display:none;\">
                        ";
            // line 103
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["segmentsInCategory"]);
            foreach ($context['_seq'] as $context["_key"] => $context["segmentInCategory"]) {
                // line 104
                echo "                            ";
                $context["title"] = $this->getAttribute($context["segmentInCategory"], "name", array());
                // line 105
                echo "                            ";
                if (($this->getAttribute($context["segmentInCategory"], "unionOfSegments", array(), "any", true, true) && $this->getAttribute($context["segmentInCategory"], "unionOfSegments", array()))) {
                    // line 106
                    echo "                                ";
                    $context["title"] = call_user_func_array($this->env->getFilter('translate')->getCallable(), array("SegmentEditor_SegmentXIsAUnionOf", (isset($context["title"]) ? $context["title"] : $this->getContext($context, "title"))));
                    // line 107
                    echo "                                ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["segmentInCategory"], "unionOfSegments", array()));
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
                    foreach ($context['_seq'] as $context["_key"] => $context["unionSegment"]) {
                        // line 108
                        echo "                                    ";
                        $context["title"] = (((isset($context["title"]) ? $context["title"] : $this->getContext($context, "title")) . " ") . $context["unionSegment"]);
                        // line 109
                        echo "                                    ";
                        if ( !$this->getAttribute($context["loop"], "last", array())) {
                            // line 110
                            echo "                                        ";
                            $context["title"] = ((isset($context["title"]) ? $context["title"] : $this->getContext($context, "title")) . ",");
                            // line 111
                            echo "                                    ";
                        }
                        // line 112
                        echo "                                ";
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
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['unionSegment'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 113
                    echo "                            ";
                }
                // line 114
                echo "                            <li data-metric=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["segmentInCategory"], "segment", array()), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : $this->getContext($context, "title")), "html_attr");
                echo "\"><a class=\"ddmetric\" href=\"#\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["segmentInCategory"], "name", array()), "html", null, true);
                echo "</a></li>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['segmentInCategory'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 116
            echo "                    </ul>
                </li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['category'], $context['segmentsInCategory'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 119
        echo "            </ul>
            </div>
            <div class=\"custom_select_search\">
                <a href=\"#\"></a>
                <input type=\"text\" aria-haspopup=\"true\" aria-autocomplete=\"list\" role=\"textbox\" autocomplete=\"off\" class=\"inp ui-autocomplete-input segmentSearch\" value=\"";
        // line 123
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Search")), "html", null, true);
        echo "\" length=\"15\">
            </div>
        </div>
        <div class=\"segment-content\">
            <div class=\"segment-top\" ";
        // line 127
        if ( !(isset($context["isSuperUser"]) ? $context["isSuperUser"] : $this->getContext($context, "isSuperUser"))) {
            echo "style=\"display:none\"";
        }
        echo ">
                ";
        // line 128
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("SegmentEditor_ThisSegmentIsVisibleTo")), "html", null, true);
        echo " <span class=\"enable_all_users\"><strong>
                        <select class=\"enable_all_users_select\">
                            <option selected=\"1\" value=\"0\">";
        // line 130
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("SegmentEditor_VisibleToMe")), "html", null, true);
        echo "</option>
                            <option value=\"1\">";
        // line 131
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("SegmentEditor_VisibleToAllUsers")), "html", null, true);
        echo "</option>
                        </select>
                    </strong></span>

                ";
        // line 135
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("SegmentEditor_SegmentIsDisplayedForWebsite")), "html", null, true);
        echo "<span class=\"visible_to_website\"><strong>
                        <select class=\"visible_to_website_select\">
                            <option selected=\"\" value=\"";
        // line 137
        echo twig_escape_filter($this->env, (isset($context["idSite"]) ? $context["idSite"] : $this->getContext($context, "idSite")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("SegmentEditor_SegmentDisplayedThisWebsiteOnly")), "html", null, true);
        echo "</option>
                            ";
        // line 138
        if ((isset($context["isAddingSegmentsForAllWebsitesEnabled"]) ? $context["isAddingSegmentsForAllWebsitesEnabled"] : $this->getContext($context, "isAddingSegmentsForAllWebsitesEnabled"))) {
            echo "<option value=\"0\">";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("SegmentEditor_SegmentDisplayedAllWebsites")), "html", null, true);
            echo "</option>";
        }
        // line 139
        echo "                        </select>
                    </strong></span>
                ";
        // line 141
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_And")), "html", null, true);
        echo " <span class=\"auto_archive\"><strong>
                        <select class=\"auto_archive_select\">
                            ";
        // line 143
        if ((isset($context["createRealTimeSegmentsIsEnabled"]) ? $context["createRealTimeSegmentsIsEnabled"] : $this->getContext($context, "createRealTimeSegmentsIsEnabled"))) {
            // line 144
            echo "                            <option selected=\"1\" value=\"0\">";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("SegmentEditor_AutoArchiveRealTime")), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_DefaultAppended")), "html", null, true);
            echo "</option>
                            ";
        }
        // line 146
        echo "                            <option ";
        if ( !(isset($context["createRealTimeSegmentsIsEnabled"]) ? $context["createRealTimeSegmentsIsEnabled"] : $this->getContext($context, "createRealTimeSegmentsIsEnabled"))) {
            echo "selected=\"1\"";
        }
        echo " value=\"1\">";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("SegmentEditor_AutoArchivePreProcessed")), "html", null, true);
        echo " </option>
                        </select>
                    </strong></span>

            </div>
            <h3>";
        // line 151
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Name")), "html", null, true);
        echo ": <span  class=\"segmentName\"></span> <a class=\"editSegmentName\" href=\"#\">";
        echo twig_escape_filter($this->env, twig_lower_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Edit"))), "html", null, true);
        echo "</a></h3>
        </div>
        <div class=\"segment-footer\">
            <div piwik-rate-feature title=\"Segment Editor\" style=\"display:inline-block;float: left;margin-top: 2px;margin-right: 10px;\"></div>
            <span class=\"segmentFooterNote\">The Segment Editor was <a class='crowdfundingLink' href='http://crowdfunding.piwik.org/custom-segments-editor/' rel='noreferrer' target='_blank'>crowdfunded</a> with the awesome support of 80 companies and Piwik users worldwide!</span>
            <a class=\"delete\" href=\"#\">";
        // line 156
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Delete")), "html", null, true);
        echo "</a>
            <a class=\"close\" href=\"#\">";
        // line 157
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Close")), "html", null, true);
        echo "</a>
            <button class=\"saveAndApply\">";
        // line 158
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("SegmentEditor_SaveAndApply")), "html", null, true);
        echo "</button>
        </div>
    </div>
</div>
<div class=\"segmentListContainer\">
<div class=\"ui-confirm segment-delete-confirm\">
    <h2>";
        // line 164
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("SegmentEditor_AreYouSureDeleteSegment")), "html", null, true);
        echo "</h2>
    <input role=\"yes\" type=\"button\" value=\"";
        // line 165
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Yes")), "html", null, true);
        echo "\"/>
    <input role=\"no\" type=\"button\" value=\"";
        // line 166
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_No")), "html", null, true);
        echo "\"/>
</div>
<div class=\"ui-confirm pleaseChangeBrowserAchivingDisabledSetting\">
    <h2>";
        // line 169
        echo call_user_func_array($this->env->getFilter('translate')->getCallable(), array("SegmentEditor_SegmentNotApplied", (isset($context["nameOfCurrentSegment"]) ? $context["nameOfCurrentSegment"] : $this->getContext($context, "nameOfCurrentSegment"))));
        echo "</h2>
    ";
        // line 170
        ob_start();
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("SegmentEditor_AutoArchivePreProcessed")), "html", null, true);
        $context["segmentSetting"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 171
        echo "    <input role=\"yes\" type=\"button\" value=\"";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Ok")), "html", null, true);
        echo "\"/>
    <p class=\"description\">
        ";
        // line 173
        echo call_user_func_array($this->env->getFilter('translate')->getCallable(), array("SegmentEditor_SegmentNotAppliedMessage", (isset($context["nameOfCurrentSegment"]) ? $context["nameOfCurrentSegment"] : $this->getContext($context, "nameOfCurrentSegment"))));
        echo "
        <br/>
        ";
        // line 175
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("SegmentEditor_DataAvailableAtLaterDate")), "html", null, true);
        echo "
        ";
        // line 176
        if ((isset($context["isSuperUser"]) ? $context["isSuperUser"] : $this->getContext($context, "isSuperUser"))) {
            // line 177
            echo "            <br/> <br/> ";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("SegmentEditor_YouMayChangeSetting", "browser_archiving_disabled_enforce", (isset($context["segmentSetting"]) ? $context["segmentSetting"] : $this->getContext($context, "segmentSetting")))), "html", null, true);
            echo "
        ";
        }
        // line 179
        echo "    </p>
</div>
</div>";
    }

    public function getTemplateName()
    {
        return "@SegmentEditor/_segmentSelector.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  502 => 179,  496 => 177,  494 => 176,  490 => 175,  485 => 173,  479 => 171,  475 => 170,  471 => 169,  465 => 166,  461 => 165,  457 => 164,  448 => 158,  444 => 157,  440 => 156,  430 => 151,  417 => 146,  409 => 144,  407 => 143,  402 => 141,  398 => 139,  392 => 138,  386 => 137,  381 => 135,  374 => 131,  370 => 130,  365 => 128,  359 => 127,  352 => 123,  346 => 119,  338 => 116,  325 => 114,  322 => 113,  308 => 112,  305 => 111,  302 => 110,  299 => 109,  296 => 108,  278 => 107,  275 => 106,  272 => 105,  269 => 104,  265 => 103,  260 => 101,  257 => 100,  253 => 99,  238 => 88,  232 => 87,  227 => 85,  220 => 82,  214 => 81,  209 => 79,  196 => 69,  189 => 65,  185 => 64,  181 => 63,  177 => 62,  173 => 61,  169 => 60,  165 => 59,  161 => 58,  157 => 57,  153 => 56,  149 => 55,  144 => 52,  137 => 50,  124 => 48,  120 => 47,  115 => 46,  111 => 45,  107 => 44,  98 => 38,  93 => 36,  88 => 34,  85 => 33,  80 => 30,  75 => 27,  68 => 25,  63 => 24,  61 => 23,  57 => 21,  51 => 19,  49 => 18,  38 => 10,  31 => 6,  22 => 2,  19 => 1,);
    }
}
/* <div class="SegmentEditor" style="display:none;">*/
/*     <div class="segmentationContainer listHtml" title="{{ 'SegmentEditor_ChooseASegment'|translate|e('html_attr') }}. {{ 'SegmentEditor_CurrentlySelectedSegment'|translate(segmentDescription)|e('html_attr') }}">*/
/*         <a class="title"><span class="icon icon-segment"></span><span class="segmentationTitle"></span></a>*/
/*         <div class="dropdown dropdown-body">*/
/*             <div class="segmentFilterContainer">*/
/*                 <input class="segmentFilter" type="text" value="{{ 'General_Search'|translate }}"/>*/
/*                 <span/>*/
/*             </div>*/
/*             <ul class="submenu">*/
/*                 <li>{{ 'SegmentEditor_SelectSegmentOfVisitors'|translate }}*/
/*                     <div class="segmentList">*/
/*                         <ul>*/
/*                         </ul>*/
/*                     </div>*/
/*                 </li>*/
/*             </ul>*/
/* */
/*             {% if authorizedToCreateSegments %}*/
/*                 <a class="add_new_segment btn">{{ 'SegmentEditor_AddNewSegment'|translate }}</a>*/
/*             {% else %}*/
/*                 <ul class="submenu">*/
/*                 <li>*/
/*                     {% if isUserAnonymous %}*/
/*                         <span class='youMustBeLoggedIn'>{{ 'SegmentEditor_YouMustBeLoggedInToCreateSegments'|translate }}*/
/*                         <br/>&rsaquo; <a href='index.php?module={{ loginModule }}'>{{ 'Login_LogIn'|translate }}</a> </span>*/
/*                     {% endif %}*/
/*                 </li>*/
/*                 </ul>*/
/*             {% endif %}*/
/*         </div>*/
/*     </div>*/
/* */
/*     <div class="initial-state-rows">{# no space here important for jquery #}<div class="segment-add-row initial"><div>*/
/*         <span>+ {{ 'SegmentEditor_DragDropCondition'|translate|raw }}</span>*/
/*     </div></div>*/
/*     <div class="segment-and">{{ 'SegmentEditor_OperatorAND'|translate|raw }}</div>*/
/*     <div class="segment-add-row initial"><div>*/
/*         <span>+ {{ 'SegmentEditor_DragDropCondition'|translate|raw }}</span>*/
/*     </div></div>*/
/*     </div>*/
/* */
/*     <div class="segment-row-inputs">*/
/*         <div class="segment-input metricListBlock">*/
/*             <select title="{{ 'SegmentEditor_ChooseASegment'|translate }}" class="metricList">*/
/*                 {% for category,segmentsInCategory in segmentsByCategory %}*/
/*                 <optgroup label="{{ category }}">*/
/*                     {% for segmentInCategory in segmentsInCategory %}*/
/*                         <option data-type="{{ segmentInCategory.type }}" value="{{ segmentInCategory.segment }}">{{ segmentInCategory.name }}</option>*/
/*                     {% endfor %}*/
/*                 </optgroup>*/
/*                 {% endfor %}*/
/*             </select>*/
/*         </div>*/
/*         <div class="segment-input metricMatchBlock">*/
/*             <select title="{{ 'General_Matches'|translate }}">*/
/*                 <option value="==">{{ 'General_OperationEquals'|translate }}</option>*/
/*                 <option value="!=">{{ 'General_OperationNotEquals'|translate }}</option>*/
/*                 <option value="<=">{{ 'General_OperationAtMost'|translate }}</option>*/
/*                 <option value=">=">{{ 'General_OperationAtLeast'|translate }}</option>*/
/*                 <option value="<">{{ 'General_OperationLessThan'|translate }}</option>*/
/*                 <option value=">">{{ 'General_OperationGreaterThan'|translate }}</option>*/
/*                 <option value="=@">{{ 'General_OperationContains'|translate }}</option>*/
/*                 <option value="!@">{{ 'General_OperationDoesNotContain'|translate }}</option>*/
/*                 <option value="=^">{{ 'General_OperationStartsWith'|translate }}</option>*/
/*                 <option value="=$">{{ 'General_OperationEndsWith'|translate }}</option>*/
/*             </select>*/
/*         </div>*/
/*         <div class="segment-input metricValueBlock">*/
/*             <input type="text" title="{{ 'General_Value'|translate }}">*/
/*         </div>*/
/*         <div class="clear"></div>*/
/*     </div>*/
/*     <div class="segment-rows">*/
/*         <div class="segment-row">*/
/*             <a href="#" class="segment-close"></a>*/
/*             <a href="#" class="segment-loading"></a>*/
/*         </div>*/
/*     </div>*/
/*     <div class="segment-or">{{ 'SegmentEditor_OperatorOR'|translate }}</div>*/
/*     <div class="segment-add-or"><div>*/
/*             {% set orCondition %}<span>{{ 'SegmentEditor_OperatorOR'|translate }}</span>{% endset %}*/
/*             <a href="#"> + {{ 'SegmentEditor_AddANDorORCondition'|translate(orCondition)|raw }} </a>*/
/*         </div>*/
/*     </div>*/
/*     <div class="segment-and">{{ 'SegmentEditor_OperatorAND'|translate }}</div>*/
/*     <div class="segment-add-row"><div>*/
/*             {% set andCondition %}<span>{{ 'SegmentEditor_OperatorAND'|translate }}</span>{% endset %}*/
/*             <a href="#">+ {{ 'SegmentEditor_AddANDorORCondition'|translate(andCondition)|raw }}</a>*/
/*         </div>*/
/*     </div>*/
/*     <div class="segment-element borderedControl expanded">*/
/*         <div class="segment-nav">*/
/*             <h4 class="visits">*/
/*                 <span class="icon-segment"></span><span class="available_segments"><strong>*/
/*                 <select class="available_segments_select"></select>*/
/*             </strong></span></h4>*/
/*             <div class="scrollable">*/
/*             <ul>*/
/*                 {% for category,segmentsInCategory in segmentsByCategory %}*/
/*                 <li data="visit">*/
/*                     <a class="metric_category" href="#">{{ category }}</a>*/
/*                     <ul style="display:none;">*/
/*                         {% for segmentInCategory in segmentsInCategory %}*/
/*                             {% set title = segmentInCategory.name %}*/
/*                             {% if segmentInCategory.unionOfSegments is defined and segmentInCategory.unionOfSegments %}*/
/*                                 {% set title = 'SegmentEditor_SegmentXIsAUnionOf'|translate(title) %}*/
/*                                 {% for unionSegment in segmentInCategory.unionOfSegments %}*/
/*                                     {% set title = title ~ ' ' ~ unionSegment %}*/
/*                                     {% if not loop.last  %}*/
/*                                         {% set title = title ~ ',' %}*/
/*                                     {% endif %}*/
/*                                 {% endfor %}*/
/*                             {% endif %}*/
/*                             <li data-metric="{{ segmentInCategory.segment }}" title="{{ title|e('html_attr') }}"><a class="ddmetric" href="#">{{ segmentInCategory.name }}</a></li>*/
/*                         {% endfor %}*/
/*                     </ul>*/
/*                 </li>*/
/*                 {% endfor %}*/
/*             </ul>*/
/*             </div>*/
/*             <div class="custom_select_search">*/
/*                 <a href="#"></a>*/
/*                 <input type="text" aria-haspopup="true" aria-autocomplete="list" role="textbox" autocomplete="off" class="inp ui-autocomplete-input segmentSearch" value="{{ 'General_Search'|translate }}" length="15">*/
/*             </div>*/
/*         </div>*/
/*         <div class="segment-content">*/
/*             <div class="segment-top" {% if not isSuperUser %}style="display:none"{% endif %}>*/
/*                 {{ 'SegmentEditor_ThisSegmentIsVisibleTo'|translate }} <span class="enable_all_users"><strong>*/
/*                         <select class="enable_all_users_select">*/
/*                             <option selected="1" value="0">{{ 'SegmentEditor_VisibleToMe'|translate }}</option>*/
/*                             <option value="1">{{ 'SegmentEditor_VisibleToAllUsers'|translate }}</option>*/
/*                         </select>*/
/*                     </strong></span>*/
/* */
/*                 {{ 'SegmentEditor_SegmentIsDisplayedForWebsite'|translate }}<span class="visible_to_website"><strong>*/
/*                         <select class="visible_to_website_select">*/
/*                             <option selected="" value="{{ idSite }}">{{ 'SegmentEditor_SegmentDisplayedThisWebsiteOnly'|translate }}</option>*/
/*                             {% if isAddingSegmentsForAllWebsitesEnabled %}<option value="0">{{ 'SegmentEditor_SegmentDisplayedAllWebsites'|translate }}</option>{% endif %}*/
/*                         </select>*/
/*                     </strong></span>*/
/*                 {{ 'General_And'|translate }} <span class="auto_archive"><strong>*/
/*                         <select class="auto_archive_select">*/
/*                             {% if createRealTimeSegmentsIsEnabled %}*/
/*                             <option selected="1" value="0">{{ 'SegmentEditor_AutoArchiveRealTime'|translate }} {{ 'General_DefaultAppended'|translate }}</option>*/
/*                             {% endif %}*/
/*                             <option {% if not createRealTimeSegmentsIsEnabled %}selected="1"{% endif %} value="1">{{ 'SegmentEditor_AutoArchivePreProcessed'|translate }} </option>*/
/*                         </select>*/
/*                     </strong></span>*/
/* */
/*             </div>*/
/*             <h3>{{ 'General_Name'|translate }}: <span  class="segmentName"></span> <a class="editSegmentName" href="#">{{ 'General_Edit'|translate|lower }}</a></h3>*/
/*         </div>*/
/*         <div class="segment-footer">*/
/*             <div piwik-rate-feature title="Segment Editor" style="display:inline-block;float: left;margin-top: 2px;margin-right: 10px;"></div>*/
/*             <span class="segmentFooterNote">The Segment Editor was <a class='crowdfundingLink' href='http://crowdfunding.piwik.org/custom-segments-editor/' rel='noreferrer' target='_blank'>crowdfunded</a> with the awesome support of 80 companies and Piwik users worldwide!</span>*/
/*             <a class="delete" href="#">{{ 'General_Delete'|translate }}</a>*/
/*             <a class="close" href="#">{{ 'General_Close'|translate }}</a>*/
/*             <button class="saveAndApply">{{ 'SegmentEditor_SaveAndApply'|translate }}</button>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* <div class="segmentListContainer">*/
/* <div class="ui-confirm segment-delete-confirm">*/
/*     <h2>{{ 'SegmentEditor_AreYouSureDeleteSegment'|translate }}</h2>*/
/*     <input role="yes" type="button" value="{{ 'General_Yes'|translate }}"/>*/
/*     <input role="no" type="button" value="{{ 'General_No'|translate }}"/>*/
/* </div>*/
/* <div class="ui-confirm pleaseChangeBrowserAchivingDisabledSetting">*/
/*     <h2>{{ 'SegmentEditor_SegmentNotApplied'|translate(nameOfCurrentSegment)|raw }}</h2>*/
/*     {% set segmentSetting %}{{ 'SegmentEditor_AutoArchivePreProcessed'|translate }}{% endset %}*/
/*     <input role="yes" type="button" value="{{ 'General_Ok'|translate }}"/>*/
/*     <p class="description">*/
/*         {{ 'SegmentEditor_SegmentNotAppliedMessage'|translate(nameOfCurrentSegment)|raw }}*/
/*         <br/>*/
/*         {{ 'SegmentEditor_DataAvailableAtLaterDate'|translate }}*/
/*         {% if isSuperUser %}*/
/*             <br/> <br/> {{ 'SegmentEditor_YouMayChangeSetting'|translate('browser_archiving_disabled_enforce', segmentSetting) }}*/
/*         {% endif %}*/
/*     </p>*/
/* </div>*/
/* </div>*/
