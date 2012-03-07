<?php

/* template.php */
class __TwigTemplate_8a24b5f2803d0c2888b72b0052d01886 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'subtitle' => array($this, 'block_subtitle'),
            'favicons' => array($this, 'block_favicons'),
            'head' => array($this, 'block_head'),
            'body_id' => array($this, 'block_body_id'),
            'body' => array($this, 'block_body'),
            'foot' => array($this, 'block_foot'),
        );
    }

    protected function doGetParent(array $context)
    {
        return false;
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!doctype html>
<!--[if lt IE 7 ]>
\t<html lang=\"en\" class=\"no-js ie6\">
<![endif]-->
<!--[if IE 7 ]>
\t<html lang=\"en\" class=\"no-js ie7\">
<![endif]-->
<!--[if IE 8 ]>
\t<html lang=\"en\" class=\"no-js ie8\">
<![endif]-->
<!--[if IE 9 ]>
\t<html lang=\"en\" class=\"no-js ie9\">
<![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
\t<html lang=\"en\" class=\"no-js\">
<!--<![endif]-->

<html itemscope itemtype=\"http://schema.org/Entertainment\">

<head>
\t<!-- =================================================== -->
\t<!-- =============== BASIC PAGE SETUP ================== -->
\t<!-- =================================================== -->
\t
    <meta charset=\"UTF-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\">
    
    <title>";
        // line 28
        $this->displayBlock('title', $context, $blocks);
        $this->displayBlock('subtitle', $context, $blocks);
        echo "</title>
    
    <meta itemprop=\"name\" property=\"og:title\" content=\"\">
\t<meta itemprop=\"description\" property=\"og:description\" content=\"\">
\t<meta property=\"og:url\" content=\"\" />
\t<meta property=\"og:type\" content=\"\" />
\t<meta itemprop=\"image\" property=\"og:image\" content=\"\">
\t<!--[if lt IE 9]>
\t\t<script src=\"http://html5shim.googlecode.com/svn/trunk/html5.js\"></script>
\t<![endif]-->
\t
\t<!-- =================================================== -->
\t<!-- ========== MOBILE SPECIFIC META TAGS ============== -->
\t<!-- =================================================== -->
    
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
\t
\t<!-- =================================================== -->
\t<!-- ==================== FAVICONS ===================== -->
\t<!-- =================================================== -->

\t";
        // line 49
        $this->displayBlock('favicons', $context, $blocks);
        // line 55
        echo "\t
\t<script src=\"";
        // line 56
        echo twig_escape_filter($this->env, resource_url(), "html", null, true);
        echo "javascript/libs/jquery/jquery-1.7.min.js\"></script>
\t
\t";
        // line 58
        $this->displayBlock('head', $context, $blocks);
        // line 60
        echo "</head>

<body id=\"";
        // line 62
        $this->displayBlock('body_id', $context, $blocks);
        echo "\">
\t<!-- =================================================== -->
\t<!-- ===================== LAYOUT ====================== -->
\t<!-- =================================================== -->
    ";
        // line 66
        $this->displayBlock('body', $context, $blocks);
        // line 68
        echo "\t";
        $this->displayBlock('foot', $context, $blocks);
        // line 70
        echo "</body>

</html>";
    }

    // line 28
    public function block_title($context, array $blocks = array())
    {
        if (isset($context["title"])) { $_title_ = $context["title"]; } else { $_title_ = null; }
        echo twig_escape_filter($this->env, $_title_, "html", null, true);
    }

    public function block_subtitle($context, array $blocks = array())
    {
        if (isset($context["subtitle"])) { $_subtitle_ = $context["subtitle"]; } else { $_subtitle_ = null; }
        echo twig_escape_filter($this->env, $_subtitle_, "html", null, true);
    }

    // line 49
    public function block_favicons($context, array $blocks = array())
    {
        // line 50
        echo "    <link rel=\"shortcut icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, resource_url(), "html", null, true);
        echo "icons/favicon.ico\">
    <link rel=\"apple-touch-icon\" href=\"";
        // line 51
        echo twig_escape_filter($this->env, resource_url(), "html", null, true);
        echo "icons/apple-57x57.png\">
    <link rel=\"apple-touch-icon\" sizes=\"72x72\" href=\"";
        // line 52
        echo twig_escape_filter($this->env, resource_url(), "html", null, true);
        echo "icons/apple-72x72.png\">
    <link rel=\"apple-touch-icon\" sizes=\"114x114\" href=\"";
        // line 53
        echo twig_escape_filter($this->env, resource_url(), "html", null, true);
        echo "icons/apple-114x114.png\">
\t";
    }

    // line 58
    public function block_head($context, array $blocks = array())
    {
        // line 59
        echo "\t";
    }

    // line 62
    public function block_body_id($context, array $blocks = array())
    {
    }

    // line 66
    public function block_body($context, array $blocks = array())
    {
        // line 67
        echo "\t";
    }

    // line 68
    public function block_foot($context, array $blocks = array())
    {
        // line 69
        echo "\t";
    }

    public function getTemplateName()
    {
        return "template.php";
    }

    public function isTraitable()
    {
        return false;
    }
}
