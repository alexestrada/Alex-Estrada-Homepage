<?php

/* common/head.php */
class __TwigTemplate_f0f50069b8f2805f996dfef7295f88d6 extends Twig_Template
{
    protected function doGetParent(array $context)
    {
        return false;
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, resource_url(), "html", null, true);
        echo "styles/main.css\">";
    }

    public function getTemplateName()
    {
        return "common/head.php";
    }

    public function isTraitable()
    {
        return false;
    }
}
