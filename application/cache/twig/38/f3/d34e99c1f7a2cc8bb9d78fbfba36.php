<?php

/* bootstrap/common/head.php */
class __TwigTemplate_38f3d34e99c1f7a2cc8bb9d78fbfba36 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'favicons' => array($this, 'block_favicons'),
        );
    }

    protected function doGetParent(array $context)
    {
        return false;
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('favicons', $context, $blocks);
        // line 7
        echo "
<link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, resource_url(), "html", null, true);
        echo "styles/bootstrap/bootstrap.css\">
<link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, resource_url(), "html", null, true);
        echo "styles/bootstrap/responsive.css\">
<link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, resource_url(), "html", null, true);
        echo "styles/bootstrap/documentation.css\">";
    }

    // line 1
    public function block_favicons($context, array $blocks = array())
    {
        // line 2
        echo "    <link rel=\"shortcut icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, resource_url(), "html", null, true);
        echo "icons/bootstrap/favicon.ico\">
    <link rel=\"apple-touch-icon\" href=\"";
        // line 3
        echo twig_escape_filter($this->env, resource_url(), "html", null, true);
        echo "icons/bootstrap/bootstrap-apple-57x57.png\">
    <link rel=\"apple-touch-icon\" sizes=\"72x72\" href=\"";
        // line 4
        echo twig_escape_filter($this->env, resource_url(), "html", null, true);
        echo "icons/bootstrap/bootstrap-apple-72x72.png\">
    <link rel=\"apple-touch-icon\" sizes=\"114x114\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, resource_url(), "html", null, true);
        echo "icons/bootstrap/bootstrap-apple-114x114.png\">
";
    }

    public function getTemplateName()
    {
        return "bootstrap/common/head.php";
    }

    public function isTraitable()
    {
        return false;
    }
}
