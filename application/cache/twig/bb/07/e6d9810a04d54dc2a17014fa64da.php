<?php

/* pages/structure.php */
class __TwigTemplate_bb07e6d9810a04d54dc2a17014fa64da extends Twig_Template
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
        echo "\t<h1 class=\"nomargin-bottom\">Structure</h1>
\t<hr></hr>
";
    }

    // line 8
    public function block_page_body($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "pages/structure.php";
    }

    public function isTraitable()
    {
        return false;
    }
}
