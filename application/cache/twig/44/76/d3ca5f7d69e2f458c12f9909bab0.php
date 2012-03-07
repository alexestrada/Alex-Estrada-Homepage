<?php

/* pages/mockups.php */
class __TwigTemplate_4476d3ca5f7d69e2f458c12f9909bab0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'page_header' => array($this, 'block_page_header'),
            'page_body' => array($this, 'block_page_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layouts/default.php";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_page_header($context, array $blocks = array())
    {
        // line 4
        echo "\t<h1 class=\"nomargin-bottom\">Mockups</h1>
\t<hr></hr>
";
    }

    // line 8
    public function block_page_body($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "pages/mockups.php";
    }

    public function isTraitable()
    {
        return false;
    }
}
