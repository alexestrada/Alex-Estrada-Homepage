<?php

/* common/foot.php */
class __TwigTemplate_f65d63b48ddfc681fc25e33a3671f341 extends Twig_Template
{
    protected function doGetParent(array $context)
    {
        return false;
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!-- =================================================== -->
<!-- ================= LOAD JAVASCRIPT ================= -->
<!-- =================================================== -->

<!-- ============= LOAD JAVASCRIPT LIBRARIES =========== -->



<!--[if lt IE 7 ]>
\t<script src=\"";
        // line 10
        echo twig_escape_filter($this->env, resource_url(), "html", null, true);
        echo "javascript/libs/belatedpng/dd_belatedpng.js\"></script>
\t<script> DD_belatedPNG.fix('img, .png_bg');</script>
<![endif]-->

<!-- ============ LOAD APPLICATION LIBRARIES =========== -->

<script src=\"";
        // line 16
        echo twig_escape_filter($this->env, resource_url(), "html", null, true);
        echo "javascript/main.js\"></script>";
    }

    public function getTemplateName()
    {
        return "common/foot.php";
    }

    public function isTraitable()
    {
        return false;
    }
}
