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

/* index\index.twig */
class __TwigTemplate_42a9fab9a7a9011f92e97c617d6e1c8f3be005e507784ec4d0e7c460d77f05c8 extends \Twig_Template
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
        echo "<html>
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\"
          content=\"width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
    <title>Polite</title>
</head>
<style>
    td{border:solid 1px #4bb1b1}
</style>
<body>
<div>
    ";
        // line 14
        echo twig_escape_filter($this->env, ($context["content"] ?? null), "html", null, true);
        echo " I am ";
        echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
        echo "!
</div>
</body>
</html>

";
    }

    public function getTemplateName()
    {
        return "index\\index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 14,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<html>
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\"
          content=\"width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
    <title>Polite</title>
</head>
<style>
    td{border:solid 1px #4bb1b1}
</style>
<body>
<div>
    {{content}} I am {{name}}!
</div>
</body>
</html>

", "index\\index.twig", "D:\\item\\blogger\\resources\\views\\index\\index.twig");
    }
}
