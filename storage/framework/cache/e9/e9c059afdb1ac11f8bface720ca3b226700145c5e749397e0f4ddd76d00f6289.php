<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* admin/index.twig */
class __TwigTemplate_eef1f55cbf6e0d4c4c994b1dc25d03068167c79e875f4575b4931f543643cde2 extends \Twig_Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <title>de</title>
</head>
<body>
<div id=\"app\">

</div>
<script src=\"./base.js\" type=\"text/javascript\" charset=\"utf-8\"></script>
</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "admin/index.twig";
    }

    public function getDebugInfo()
    {
        return array (  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
<head>
    <title>de</title>
</head>
<body>
<div id=\"app\">

</div>
<script src=\"./base.js\" type=\"text/javascript\" charset=\"utf-8\"></script>
</body>
</html>
", "admin/index.twig", "D:\\item\\blogger\\resources\\views\\admin\\index.twig");
    }
}
