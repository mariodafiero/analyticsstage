<?php

/* @CoreHome/_dataTableJS.twig */
class __TwigTemplate_3bff836ad37b9aacb8cb7602f7515e8cc4b312af867dec223b5f49b041b087a9 extends Twig_Template
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
        echo "<script type=\"text/javascript\" defer=\"defer\">
    \$(document).ready(function () {
        require('piwik/UI/DataTable').initNewDataTables();
    });
</script>
";
    }

    public function getTemplateName()
    {
        return "@CoreHome/_dataTableJS.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
/* <script type="text/javascript" defer="defer">*/
/*     $(document).ready(function () {*/
/*         require('piwik/UI/DataTable').initNewDataTables();*/
/*     });*/
/* </script>*/
/* */
