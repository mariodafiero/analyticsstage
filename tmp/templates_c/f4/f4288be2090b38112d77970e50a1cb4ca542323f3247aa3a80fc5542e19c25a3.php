<?php

/* @SimplePageBuilder/index.twig */
class __TwigTemplate_e2199797d43710759b399e83c1297eb9becdee4e25ed763817774481c83db583 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("dashboard.twig", "@SimplePageBuilder/index.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'topcontrols' => array($this, 'block_topcontrols'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "dashboard.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "
    <div class=\"container-fluid\">
        ";
        // line 6
        echo (isset($context["content"]) ? $context["content"] : $this->getContext($context, "content"));
        echo "
    </div>

";
    }

    // line 11
    public function block_topcontrols($context, array $blocks = array())
    {
        // line 12
        echo "    ";
        $this->loadTemplate("@CoreHome/_siteSelectHeader.twig", "@SimplePageBuilder/index.twig", 12)->display($context);
        // line 13
        echo "    ";
        $this->loadTemplate("@CoreHome/_periodSelect.twig", "@SimplePageBuilder/index.twig", 13)->display($context);
    }

    public function getTemplateName()
    {
        return "@SimplePageBuilder/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 13,  47 => 12,  44 => 11,  36 => 6,  32 => 4,  29 => 3,  11 => 1,);
    }
}
/* {% extends 'dashboard.twig' %}*/
/* */
/* {% block content %}*/
/* */
/*     <div class="container-fluid">*/
/*         {{ content|raw }}*/
/*     </div>*/
/* */
/* {% endblock %}*/
/* */
/* {% block topcontrols %}*/
/*     {% include "@CoreHome/_siteSelectHeader.twig" %}*/
/*     {% include "@CoreHome/_periodSelect.twig" %}*/
/* {% endblock %}*/
/* */
