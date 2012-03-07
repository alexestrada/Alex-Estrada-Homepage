<?php

/* layouts/default.php */
class __TwigTemplate_ef8ee29b944b82852209111fd2c9de90 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'header' => array($this, 'block_header'),
            'stage_class' => array($this, 'block_stage_class'),
            'page_class' => array($this, 'block_page_class'),
            'page' => array($this, 'block_page'),
            'stage' => array($this, 'block_stage'),
            'body' => array($this, 'block_body'),
            'foot' => array($this, 'block_foot'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "template.php";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        $this->env->loadTemplate("common/head.php")->display($context);
    }

    // line 8
    public function block_header($context, array $blocks = array())
    {
        // line 9
        echo "    \t";
        $this->env->loadTemplate("common/header.php")->display($context);
        // line 10
        echo "\t";
    }

    // line 12
    public function block_stage_class($context, array $blocks = array())
    {
    }

    // line 18
    public function block_page_class($context, array $blocks = array())
    {
    }

    // line 19
    public function block_page($context, array $blocks = array())
    {
        // line 20
        echo "\t\t    \t";
    }

    // line 17
    public function block_stage($context, array $blocks = array())
    {
        echo "\t\t
\t\t    <div id=\"page\" class=\"";
        // line 18
        $this->displayBlock('page_class', $context, $blocks);
        echo "\">
\t\t\t\t";
        // line 19
        $this->displayBlock('page', $context, $blocks);
        // line 21
        echo "\t\t    </div>
    \t";
    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        // line 8
        echo "\t";
        $this->displayBlock('header', $context, $blocks);
        // line 11
        echo "\t
    <div id=\"stage\" class=\"";
        // line 12
        $this->displayBlock('stage_class', $context, $blocks);
        echo "\">
    \t<div class=\"inner-left\">
    \t</div>
    \t<div class=\"inner-right\">
    \t</div>
\t\t";
        // line 17
        $this->displayBlock('stage', $context, $blocks);
        // line 23
        echo "    </div>
";
    }

    // line 26
    public function block_foot($context, array $blocks = array())
    {
        // line 27
        echo "\t";
        $this->env->loadTemplate("common/foot.php")->display($context);
    }

    public function getTemplateName()
    {
        return "layouts/default.php";
    }

    public function isTraitable()
    {
        return false;
    }
}
