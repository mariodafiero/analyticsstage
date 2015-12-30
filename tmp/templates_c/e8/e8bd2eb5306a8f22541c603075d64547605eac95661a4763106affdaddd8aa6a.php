<?php

/* settingsMacros.twig */
class __TwigTemplate_79d47d09329f1a0028d4c3fa2311981c30c0b4f191af0ac83f8b4a484229d3b9 extends Twig_Template
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
        // line 16
        echo "
";
    }

    // line 1
    public function getsingleSetting($__setting__ = null, $__index__ = 0)
    {
        $context = $this->env->mergeGlobals(array(
            "setting" => $__setting__,
            "index" => $__index__,
            "varargs" => func_num_args() > 2 ? array_slice(func_get_args(), 2) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            // line 2
            echo "
    ";
            // line 3
            $context["settingValue"] = $this->getAttribute((isset($context["setting"]) ? $context["setting"] : $this->getContext($context, "setting")), "getValue", array());
            // line 4
            echo "
    <div class=\"form-group\">

        ";
            // line 7
            if ($this->getAttribute((isset($context["setting"]) ? $context["setting"] : $this->getContext($context, "setting")), "introduction", array())) {
                // line 8
                echo "            <p class=\"settingIntroduction\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["setting"]) ? $context["setting"] : $this->getContext($context, "setting")), "introduction", array()), "html", null, true);
                echo "</p>
        ";
            }
            // line 10
            echo "
        ";
            // line 11
            echo $this->getAttribute($this, "field", array(0 => (isset($context["setting"]) ? $context["setting"] : $this->getContext($context, "setting")), 1 => (isset($context["index"]) ? $context["index"] : $this->getContext($context, "index"))), "method");
            echo "

    </div>

";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 17
    public function getfield($__setting__ = null, $__index__ =  -1)
    {
        $context = $this->env->mergeGlobals(array(
            "setting" => $__setting__,
            "index" => $__index__,
            "varargs" => func_num_args() > 2 ? array_slice(func_get_args(), 2) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            // line 18
            echo "
    ";
            // line 19
            if (((isset($context["index"]) ? $context["index"] : $this->getContext($context, "index")) ==  -1)) {
                // line 20
                echo "        ";
                $context["index"] = $this->getAttribute((isset($context["setting"]) ? $context["setting"] : $this->getContext($context, "setting")), "getName", array());
                // line 21
                echo "    ";
            }
            // line 22
            echo "
    ";
            // line 23
            $context["settingValue"] = $this->getAttribute((isset($context["setting"]) ? $context["setting"] : $this->getContext($context, "setting")), "getValue", array());
            // line 24
            echo "
        ";
            // line 25
            if (($this->getAttribute((isset($context["setting"]) ? $context["setting"] : $this->getContext($context, "setting")), "uiControlType", array()) != "checkbox")) {
                // line 26
                echo "            <label>";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["setting"]) ? $context["setting"] : $this->getContext($context, "setting")), "title", array()), "html", null, true);
                echo "</label>
        ";
            }
            // line 28
            echo "
        ";
            // line 29
            if ($this->getAttribute((isset($context["setting"]) ? $context["setting"] : $this->getContext($context, "setting")), "inlineHelp", array())) {
                // line 30
                echo "            <div class=\"form-help\">
                ";
                // line 31
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["setting"]) ? $context["setting"] : $this->getContext($context, "setting")), "inlineHelp", array()), "html", null, true);
                echo "
                ";
                // line 32
                if ((($this->getAttribute((isset($context["setting"]) ? $context["setting"] : $this->getContext($context, "setting")), "defaultValue", array()) && ($this->getAttribute((isset($context["setting"]) ? $context["setting"] : $this->getContext($context, "setting")), "uiControlType", array()) != "checkbox")) && ($this->getAttribute((isset($context["setting"]) ? $context["setting"] : $this->getContext($context, "setting")), "uiControlType", array()) != "radio"))) {
                    // line 33
                    echo "                    <br/>
                    ";
                    // line 34
                    echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Default")), "html", null, true);
                    echo ":
                    ";
                    // line 35
                    if (twig_test_iterable($this->getAttribute((isset($context["setting"]) ? $context["setting"] : $this->getContext($context, "setting")), "defaultValue", array()))) {
                        // line 36
                        echo "                        ";
                        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('truncate')->getCallable(), array(twig_join_filter($this->getAttribute((isset($context["setting"]) ? $context["setting"] : $this->getContext($context, "setting")), "defaultValue", array()), ", "), 50)), "html", null, true);
                        echo "
                    ";
                    } else {
                        // line 38
                        echo "                        ";
                        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('truncate')->getCallable(), array($this->getAttribute((isset($context["setting"]) ? $context["setting"] : $this->getContext($context, "setting")), "defaultValue", array()), 50)), "html", null, true);
                        echo "
                    ";
                    }
                    // line 40
                    echo "                ";
                }
                // line 41
                echo "            </div>
        ";
            }
            // line 43
            echo "
        ";
            // line 44
            if ((($this->getAttribute((isset($context["setting"]) ? $context["setting"] : $this->getContext($context, "setting")), "uiControlType", array()) == "select") || ($this->getAttribute((isset($context["setting"]) ? $context["setting"] : $this->getContext($context, "setting")), "uiControlType", array()) == "multiselect"))) {
                // line 45
                echo "                    <select
                        ";
                // line 46
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["setting"]) ? $context["setting"] : $this->getContext($context, "setting")), "uiControlAttributes", array()));
                foreach ($context['_seq'] as $context["attr"] => $context["val"]) {
                    // line 47
                    echo "            ";
                    echo twig_escape_filter($this->env, $context["attr"], "html_attr");
                    echo "=\"";
                    echo twig_escape_filter($this->env, $context["val"], "html_attr");
                    echo "\"
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['attr'], $context['val'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 49
                echo "                        name=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["setting"]) ? $context["setting"] : $this->getContext($context, "setting")), "getKey", array()), "html_attr");
                echo "\"
                        ";
                // line 50
                if (($this->getAttribute((isset($context["setting"]) ? $context["setting"] : $this->getContext($context, "setting")), "uiControlType", array()) == "multiselect")) {
                    echo "multiple";
                }
                echo ">

                        ";
                // line 52
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["setting"]) ? $context["setting"] : $this->getContext($context, "setting")), "availableValues", array()));
                foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                    // line 53
                    echo "            <option value='";
                    echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                    echo "'
                    ";
                    // line 54
                    if ((twig_test_iterable((isset($context["settingValue"]) ? $context["settingValue"] : $this->getContext($context, "settingValue"))) && twig_in_filter($context["key"], (isset($context["settingValue"]) ? $context["settingValue"] : $this->getContext($context, "settingValue"))))) {
                        // line 55
                        echo "                selected='selected'
            ";
                    } elseif ((                    // line 56
(isset($context["settingValue"]) ? $context["settingValue"] : $this->getContext($context, "settingValue")) == $context["key"])) {
                        // line 57
                        echo "                selected='selected'
                    ";
                    }
                    // line 58
                    echo ">
                ";
                    // line 59
                    echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                    echo "
            </option>
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 62
                echo "
                    </select>
                ";
            } elseif (($this->getAttribute(            // line 64
(isset($context["setting"]) ? $context["setting"] : $this->getContext($context, "setting")), "uiControlType", array()) == "textarea")) {
                // line 65
                echo "                    <textarea style=\"width: 376px; height: 250px;\"
                        ";
                // line 66
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["setting"]) ? $context["setting"] : $this->getContext($context, "setting")), "uiControlAttributes", array()));
                foreach ($context['_seq'] as $context["attr"] => $context["val"]) {
                    // line 67
                    echo "            ";
                    echo twig_escape_filter($this->env, $context["attr"], "html_attr");
                    echo "=\"";
                    echo twig_escape_filter($this->env, $context["val"], "html_attr");
                    echo "\"
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['attr'], $context['val'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 69
                echo "                        name=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["setting"]) ? $context["setting"] : $this->getContext($context, "setting")), "getKey", array()), "html_attr");
                echo "\"
                        >";
                // line 71
                echo twig_escape_filter($this->env, (isset($context["settingValue"]) ? $context["settingValue"] : $this->getContext($context, "settingValue")), "html", null, true);
                // line 72
                echo "</textarea>
                ";
            } elseif (($this->getAttribute(            // line 73
(isset($context["setting"]) ? $context["setting"] : $this->getContext($context, "setting")), "uiControlType", array()) == "radio")) {
                // line 74
                echo "
            ";
                // line 75
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["setting"]) ? $context["setting"] : $this->getContext($context, "setting")), "availableValues", array()));
                foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                    // line 76
                    echo "                <label class=\"radio\">
                    <input
                            id=\"name-value-";
                    // line 78
                    echo twig_escape_filter($this->env, (isset($context["index"]) ? $context["index"] : $this->getContext($context, "index")), "html", null, true);
                    echo "\"
                    ";
                    // line 79
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["setting"]) ? $context["setting"] : $this->getContext($context, "setting")), "uiControlAttributes", array()));
                    foreach ($context['_seq'] as $context["attr"] => $context["val"]) {
                        // line 80
                        echo "                        ";
                        echo twig_escape_filter($this->env, $context["attr"], "html_attr");
                        echo "=\"";
                        echo twig_escape_filter($this->env, $context["val"], "html_attr");
                        echo "\"
                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['attr'], $context['val'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 82
                    echo "                    ";
                    if (((isset($context["settingValue"]) ? $context["settingValue"] : $this->getContext($context, "settingValue")) === $context["key"])) {
                        // line 83
                        echo "                        checked=\"checked\"
                    ";
                    }
                    // line 85
                    echo "                    type=\"radio\"
                    value=\"";
                    // line 86
                    echo twig_escape_filter($this->env, $context["key"], "html_attr");
                    echo "\"
                    name=\"";
                    // line 87
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["setting"]) ? $context["setting"] : $this->getContext($context, "setting")), "getKey", array()), "html_attr");
                    echo "\" />

                    ";
                    // line 89
                    echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                    echo "

                    ";
                    // line 91
                    if ($this->getAttribute((isset($context["setting"]) ? $context["setting"] : $this->getContext($context, "setting")), "description", array())) {
                        // line 92
                        echo "                        <span class='form-description'>";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["setting"]) ? $context["setting"] : $this->getContext($context, "setting")), "description", array()), "html", null, true);
                        echo "</span>
                    ";
                    }
                    // line 94
                    echo "
                </label>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 97
                echo "
        ";
            } elseif (($this->getAttribute(            // line 98
(isset($context["setting"]) ? $context["setting"] : $this->getContext($context, "setting")), "uiControlType", array()) == "checkbox")) {
                // line 99
                echo "
            <label class=\"checkbox\">
                <input id=\"name-value-";
                // line 101
                echo twig_escape_filter($this->env, (isset($context["index"]) ? $context["index"] : $this->getContext($context, "index")), "html", null, true);
                echo "\"
                ";
                // line 102
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["setting"]) ? $context["setting"] : $this->getContext($context, "setting")), "uiControlAttributes", array()));
                foreach ($context['_seq'] as $context["attr"] => $context["val"]) {
                    // line 103
                    echo "                    ";
                    echo twig_escape_filter($this->env, $context["attr"], "html_attr");
                    echo "=\"";
                    echo twig_escape_filter($this->env, $context["val"], "html_attr");
                    echo "\"
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['attr'], $context['val'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 105
                echo "                value=\"1\"
                ";
                // line 106
                if ((isset($context["settingValue"]) ? $context["settingValue"] : $this->getContext($context, "settingValue"))) {
                    // line 107
                    echo "                    checked=\"checked\"
                ";
                }
                // line 109
                echo "                type=\"checkbox\"
                name=\"";
                // line 110
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["setting"]) ? $context["setting"] : $this->getContext($context, "setting")), "getKey", array()), "html_attr");
                echo "\">

                ";
                // line 112
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["setting"]) ? $context["setting"] : $this->getContext($context, "setting")), "title", array()), "html", null, true);
                echo "

                ";
                // line 114
                if ($this->getAttribute((isset($context["setting"]) ? $context["setting"] : $this->getContext($context, "setting")), "description", array())) {
                    // line 115
                    echo "                    <span class='form-description'>";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["setting"]) ? $context["setting"] : $this->getContext($context, "setting")), "description", array()), "html", null, true);
                    echo "</span>
                ";
                }
                // line 117
                echo "            </label>

        ";
            } else {
                // line 120
                echo "
            <input
            ";
                // line 122
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["setting"]) ? $context["setting"] : $this->getContext($context, "setting")), "uiControlAttributes", array()));
                foreach ($context['_seq'] as $context["attr"] => $context["val"]) {
                    // line 123
                    echo "                ";
                    echo twig_escape_filter($this->env, $context["attr"], "html_attr");
                    echo "=\"";
                    echo twig_escape_filter($this->env, $context["val"], "html_attr");
                    echo "\"
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['attr'], $context['val'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 125
                echo "            class=\"control_";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["setting"]) ? $context["setting"] : $this->getContext($context, "setting")), "uiControlType", array()), "html_attr");
                echo "\"
            type=\"";
                // line 126
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["setting"]) ? $context["setting"] : $this->getContext($context, "setting")), "uiControlType", array()), "html_attr");
                echo "\"
            name=\"";
                // line 127
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["setting"]) ? $context["setting"] : $this->getContext($context, "setting")), "getKey", array()), "html_attr");
                echo "\"
            value=\"";
                // line 128
                echo twig_escape_filter($this->env, (isset($context["settingValue"]) ? $context["settingValue"] : $this->getContext($context, "settingValue")), "html_attr");
                echo "\">

        ";
            }
            // line 131
            echo "
        ";
            // line 132
            if ((($this->getAttribute((isset($context["setting"]) ? $context["setting"] : $this->getContext($context, "setting")), "uiControlType", array()) != "checkbox") && ($this->getAttribute((isset($context["setting"]) ? $context["setting"] : $this->getContext($context, "setting")), "uiControlType", array()) != "radio"))) {
                // line 133
                echo "            <span class='form-description'>";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["setting"]) ? $context["setting"] : $this->getContext($context, "setting")), "description", array()), "html", null, true);
                echo "</span>
        ";
            }
            // line 135
            echo "

";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "settingsMacros.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  441 => 135,  435 => 133,  433 => 132,  430 => 131,  424 => 128,  420 => 127,  416 => 126,  411 => 125,  400 => 123,  396 => 122,  392 => 120,  387 => 117,  381 => 115,  379 => 114,  374 => 112,  369 => 110,  366 => 109,  362 => 107,  360 => 106,  357 => 105,  346 => 103,  342 => 102,  338 => 101,  334 => 99,  332 => 98,  329 => 97,  321 => 94,  315 => 92,  313 => 91,  308 => 89,  303 => 87,  299 => 86,  296 => 85,  292 => 83,  289 => 82,  278 => 80,  274 => 79,  270 => 78,  266 => 76,  262 => 75,  259 => 74,  257 => 73,  254 => 72,  252 => 71,  247 => 69,  236 => 67,  232 => 66,  229 => 65,  227 => 64,  223 => 62,  214 => 59,  211 => 58,  207 => 57,  205 => 56,  202 => 55,  200 => 54,  195 => 53,  191 => 52,  184 => 50,  179 => 49,  168 => 47,  164 => 46,  161 => 45,  159 => 44,  156 => 43,  152 => 41,  149 => 40,  143 => 38,  137 => 36,  135 => 35,  131 => 34,  128 => 33,  126 => 32,  122 => 31,  119 => 30,  117 => 29,  114 => 28,  108 => 26,  106 => 25,  103 => 24,  101 => 23,  98 => 22,  95 => 21,  92 => 20,  90 => 19,  87 => 18,  74 => 17,  58 => 11,  55 => 10,  49 => 8,  47 => 7,  42 => 4,  40 => 3,  37 => 2,  24 => 1,  19 => 16,);
    }
}
/* {% macro singleSetting(setting, index = 0) %}*/
/* */
/*     {% set settingValue = setting.getValue %}*/
/* */
/*     <div class="form-group">*/
/* */
/*         {% if setting.introduction %}*/
/*             <p class="settingIntroduction">{{ setting.introduction }}</p>*/
/*         {% endif %}*/
/* */
/*         {{ _self.field(setting, index) }}*/
/* */
/*     </div>*/
/* */
/* {% endmacro %}*/
/* */
/* {% macro field(setting, index = -1) %}*/
/* */
/*     {% if index == -1 %}*/
/*         {% set index = setting.getName %}*/
/*     {% endif %}*/
/* */
/*     {% set settingValue = setting.getValue %}*/
/* */
/*         {% if setting.uiControlType != 'checkbox' %}*/
/*             <label>{{ setting.title }}</label>*/
/*         {% endif %}*/
/* */
/*         {% if setting.inlineHelp %}*/
/*             <div class="form-help">*/
/*                 {{ setting.inlineHelp }}*/
/*                 {% if setting.defaultValue and setting.uiControlType != 'checkbox' and setting.uiControlType != 'radio' %}*/
/*                     <br/>*/
/*                     {{ 'General_Default'|translate }}:*/
/*                     {% if setting.defaultValue is iterable %}*/
/*                         {{ setting.defaultValue|join(', ')|truncate(50) }}*/
/*                     {% else %}*/
/*                         {{ setting.defaultValue|truncate(50) }}*/
/*                     {% endif %}*/
/*                 {% endif %}*/
/*             </div>*/
/*         {% endif %}*/
/* */
/*         {% if setting.uiControlType == 'select' or setting.uiControlType == 'multiselect' %}*/
/*                     <select*/
/*                         {% for attr, val in setting.uiControlAttributes %}*/
/*             {{ attr|e('html_attr') }}="{{ val|e('html_attr') }}"*/
/*         {% endfor %}*/
/*                         name="{{ setting.getKey|e('html_attr') }}"*/
/*                         {% if setting.uiControlType == 'multiselect' %}multiple{% endif %}>*/
/* */
/*                         {% for key, value in setting.availableValues %}*/
/*             <option value='{{ key }}'*/
/*                     {% if settingValue is iterable and key in settingValue %}*/
/*                 selected='selected'*/
/*             {% elseif settingValue==key %}*/
/*                 selected='selected'*/
/*                     {% endif %}>*/
/*                 {{ value }}*/
/*             </option>*/
/*         {% endfor %}*/
/* */
/*                     </select>*/
/*                 {% elseif setting.uiControlType == 'textarea' %}*/
/*                     <textarea style="width: 376px; height: 250px;"*/
/*                         {% for attr, val in setting.uiControlAttributes %}*/
/*             {{ attr|e('html_attr') }}="{{ val|e('html_attr') }}"*/
/*         {% endfor %}*/
/*                         name="{{ setting.getKey|e('html_attr') }}"*/
/*                         >*/
/*                         {{- settingValue -}}*/
/*                     </textarea>*/
/*                 {% elseif setting.uiControlType == 'radio' %}*/
/* */
/*             {% for key, value in setting.availableValues %}*/
/*                 <label class="radio">*/
/*                     <input*/
/*                             id="name-value-{{ index }}"*/
/*                     {% for attr, val in setting.uiControlAttributes %}*/
/*                         {{ attr|e('html_attr') }}="{{ val|e('html_attr') }}"*/
/*                     {% endfor %}*/
/*                     {% if settingValue is sameas(key) %}*/
/*                         checked="checked"*/
/*                     {% endif %}*/
/*                     type="radio"*/
/*                     value="{{ key|e('html_attr') }}"*/
/*                     name="{{ setting.getKey|e('html_attr') }}" />*/
/* */
/*                     {{ value }}*/
/* */
/*                     {% if setting.description %}*/
/*                         <span class='form-description'>{{ setting.description }}</span>*/
/*                     {% endif %}*/
/* */
/*                 </label>*/
/*             {% endfor %}*/
/* */
/*         {% elseif setting.uiControlType == 'checkbox' %}*/
/* */
/*             <label class="checkbox">*/
/*                 <input id="name-value-{{ index }}"*/
/*                 {% for attr, val in setting.uiControlAttributes %}*/
/*                     {{ attr|e('html_attr') }}="{{ val|e('html_attr') }}"*/
/*                 {% endfor %}*/
/*                 value="1"*/
/*                 {% if settingValue %}*/
/*                     checked="checked"*/
/*                 {% endif %}*/
/*                 type="checkbox"*/
/*                 name="{{ setting.getKey|e('html_attr') }}">*/
/* */
/*                 {{ setting.title }}*/
/* */
/*                 {% if setting.description %}*/
/*                     <span class='form-description'>{{ setting.description }}</span>*/
/*                 {% endif %}*/
/*             </label>*/
/* */
/*         {% else %}*/
/* */
/*             <input*/
/*             {% for attr, val in setting.uiControlAttributes %}*/
/*                 {{ attr|e('html_attr') }}="{{ val|e('html_attr') }}"*/
/*             {% endfor %}*/
/*             class="control_{{ setting.uiControlType|e('html_attr') }}"*/
/*             type="{{ setting.uiControlType|e('html_attr') }}"*/
/*             name="{{ setting.getKey|e('html_attr') }}"*/
/*             value="{{ settingValue|e('html_attr') }}">*/
/* */
/*         {% endif %}*/
/* */
/*         {% if setting.uiControlType != 'checkbox' and setting.uiControlType != 'radio' %}*/
/*             <span class='form-description'>{{ setting.description }}</span>*/
/*         {% endif %}*/
/* */
/* */
/* {% endmacro %}*/
/* */
