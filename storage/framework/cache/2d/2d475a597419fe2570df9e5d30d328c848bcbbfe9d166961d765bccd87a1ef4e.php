<?php

/* index\index.twig */
class __TwigTemplate_4d323eb632efab6fdcf6e6d750cf7680e5078dee2c02dd557ea48b4977801c01 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
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
        return array (  38 => 14,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<html>
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
