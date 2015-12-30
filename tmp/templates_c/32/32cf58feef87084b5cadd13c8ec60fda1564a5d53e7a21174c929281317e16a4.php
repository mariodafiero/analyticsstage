<?php

/* @CoreAdminHome/pluginSettings.twig */
class __TwigTemplate_d119b5aeb206361c65aca96f0329c099b0ee85d8d06cfb81cfad51112c3f0435 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 2
        return $this->loadTemplate(((((isset($context["mode"]) ? $context["mode"] : $this->getContext($context, "mode")) == "user")) ? ("user.twig") : ("admin.twig")), "@CoreAdminHome/pluginSettings.twig", 2);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 4
        ob_start();
        // line 5
        if (((isset($context["mode"]) ? $context["mode"] : $this->getContext($context, "mode")) == "user")) {
            // line 6
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreAdminHome_PersonalPluginSettings")), "html", null, true);
        } else {
            // line 8
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreAdminHome_SystemPluginSettings")), "html", null, true);
            echo "
";
        }
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 2
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 12
    public function block_content($context, array $blocks = array())
    {
        // line 13
        echo "
    ";
        // line 14
        $context["piwik"] = $this->loadTemplate("macros.twig", "@CoreAdminHome/pluginSettings.twig", 14);
        // line 15
        echo "    ";
        $context["ajax"] = $this->loadTemplate("ajaxMacros.twig", "@CoreAdminHome/pluginSettings.twig", 15);
        // line 16
        echo "    ";
        $context["settingsMacro"] = $this->loadTemplate("settingsMacros.twig", "@CoreAdminHome/pluginSettings.twig", 16);
        // line 17
        echo "
    <h2 piwik-enriched-headline>";
        // line 18
        echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : $this->getContext($context, "title")), "html", null, true);
        echo "</h2>

    <input type=\"hidden\" name=\"setpluginsettingsnonce\" value=\"";
        // line 20
        echo twig_escape_filter($this->env, (isset($context["nonce"]) ? $context["nonce"] : $this->getContext($context, "nonce")), "html", null, true);
        echo "\">

    <p>
        ";
        // line 23
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreAdminHome_PluginSettingsIntro")), "html", null, true);
        echo "
        ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pluginsSettings"]) ? $context["pluginsSettings"] : $this->getContext($context, "pluginsSettings")));
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
        foreach ($context['_seq'] as $context["pluginName"] => $context["settings"]) {
            // line 25
            echo "            <a href=\"#";
            echo twig_escape_filter($this->env, $context["pluginName"], "html_attr");
            echo "\">";
            echo twig_escape_filter($this->env, $context["pluginName"], "html", null, true);
            echo "</a>";
            if ( !$this->getAttribute($context["loop"], "last", array())) {
                echo ", ";
            }
            // line 26
            echo "        ";
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
        unset($context['_seq'], $context['_iterated'], $context['pluginName'], $context['settings'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "    </p>

    ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pluginsSettings"]) ? $context["pluginsSettings"] : $this->getContext($context, "pluginsSettings")));
        foreach ($context['_seq'] as $context["pluginName"] => $context["pluginSettings"]) {
            // line 30
            echo "
        <h2 id=\"";
            // line 31
            echo twig_escape_filter($this->env, $context["pluginName"], "html_attr");
            echo "\">";
            echo twig_escape_filter($this->env, $context["pluginName"], "html", null, true);
            echo "</h2>

        ";
            // line 33
            if ($this->getAttribute($context["pluginSettings"], "introduction", array())) {
                // line 34
                echo "            <p class=\"pluginIntroduction\">
                ";
                // line 35
                echo twig_escape_filter($this->env, $this->getAttribute($context["pluginSettings"], "introduction", array()), "html", null, true);
                echo "
            </p>
        ";
            }
            // line 38
            echo "
        <div id=\"pluginSettings\" data-pluginname=\"";
            // line 39
            echo twig_escape_filter($this->env, $context["pluginName"], "html_attr");
            echo "\">

            ";
            // line 41
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["pluginSettings"], "settings", array()));
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
            foreach ($context['_seq'] as $context["name"] => $context["setting"]) {
                // line 42
                echo "                ";
                echo $context["settingsMacro"]->getsingleSetting($context["setting"], $this->getAttribute($context["loop"], "index", array()));
                echo "
            ";
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
            unset($context['_seq'], $context['_iterated'], $context['name'], $context['setting'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 44
            echo "
        </div>

    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['pluginName'], $context['pluginSettings'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "
    <hr/>

    ";
        // line 51
        echo $context["ajax"]->geterrorDiv("ajaxErrorPluginSettings");
        echo "
    ";
        // line 52
        echo $context["ajax"]->getloadingDiv("ajaxLoadingPluginSettings");
        echo "

    <input type=\"submit\" value=\"";
        // line 54
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Save")), "html", null, true);
        echo "\" class=\"pluginsSettingsSubmit submit\"/>

";
    }

    public function getTemplateName()
    {
        return "@CoreAdminHome/pluginSettings.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  207 => 54,  202 => 52,  198 => 51,  193 => 48,  184 => 44,  167 => 42,  150 => 41,  145 => 39,  142 => 38,  136 => 35,  133 => 34,  131 => 33,  124 => 31,  121 => 30,  117 => 29,  113 => 27,  99 => 26,  90 => 25,  73 => 24,  69 => 23,  63 => 20,  58 => 18,  55 => 17,  52 => 16,  49 => 15,  47 => 14,  44 => 13,  41 => 12,  37 => 2,  31 => 8,  28 => 6,  26 => 5,  24 => 4,  18 => 2,);
    }
}
/* */
/* {% extends mode == 'user' ? "user.twig" : "admin.twig" %}*/
/* */
/* {% set title %}*/
/* {% if mode == 'user' -%}*/
/*     {{ 'CoreAdminHome_PersonalPluginSettings'|translate }}*/
/* {%- else -%}*/
/*     {{ 'CoreAdminHome_SystemPluginSettings'|translate }}*/
/* {% endif %}*/
/* {% endset %}*/
/* */
/* {% block content %}*/
/* */
/*     {% import 'macros.twig' as piwik %}*/
/*     {% import 'ajaxMacros.twig' as ajax %}*/
/*     {% import 'settingsMacros.twig' as settingsMacro %}*/
/* */
/*     <h2 piwik-enriched-headline>{{ title }}</h2>*/
/* */
/*     <input type="hidden" name="setpluginsettingsnonce" value="{{ nonce }}">*/
/* */
/*     <p>*/
/*         {{ 'CoreAdminHome_PluginSettingsIntro'|translate }}*/
/*         {% for pluginName, settings in pluginsSettings %}*/
/*             <a href="#{{ pluginName|e('html_attr') }}">{{ pluginName }}</a>{% if not loop.last %}, {% endif %}*/
/*         {% endfor %}*/
/*     </p>*/
/* */
/*     {% for pluginName, pluginSettings in pluginsSettings %}*/
/* */
/*         <h2 id="{{ pluginName|e('html_attr') }}">{{ pluginName }}</h2>*/
/* */
/*         {% if pluginSettings.introduction %}*/
/*             <p class="pluginIntroduction">*/
/*                 {{ pluginSettings.introduction }}*/
/*             </p>*/
/*         {% endif %}*/
/* */
/*         <div id="pluginSettings" data-pluginname="{{ pluginName|e('html_attr') }}">*/
/* */
/*             {% for name, setting in pluginSettings.settings %}*/
/*                 {{ settingsMacro.singleSetting(setting, loop.index) }}*/
/*             {% endfor %}*/
/* */
/*         </div>*/
/* */
/*     {% endfor %}*/
/* */
/*     <hr/>*/
/* */
/*     {{ ajax.errorDiv('ajaxErrorPluginSettings') }}*/
/*     {{ ajax.loadingDiv('ajaxLoadingPluginSettings') }}*/
/* */
/*     <input type="submit" value="{{ 'General_Save'|translate }}" class="pluginsSettingsSubmit submit"/>*/
/* */
/* {% endblock %}*/
