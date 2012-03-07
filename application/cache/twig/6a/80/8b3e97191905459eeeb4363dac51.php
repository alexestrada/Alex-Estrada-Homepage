<?php

/* bootstrap/common/foot.php */
class __TwigTemplate_6a808b3e97191905459eeeb4363dac51 extends Twig_Template
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

<script type=\"text/javascript\" src=\"http://platform.twitter.com/widgets.js\"></script>

<script src=\"";
        // line 9
        echo twig_escape_filter($this->env, resource_url(), "html", null, true);
        echo "javascript/libs/prettify/prettify.js\"></script>
<script src=\"";
        // line 10
        echo twig_escape_filter($this->env, resource_url(), "html", null, true);
        echo "javascript/libs/bootstrap/bootstrap-transition.js\"></script>
<script src=\"";
        // line 11
        echo twig_escape_filter($this->env, resource_url(), "html", null, true);
        echo "javascript/libs/bootstrap/bootstrap-alert.js\"></script>
<script src=\"";
        // line 12
        echo twig_escape_filter($this->env, resource_url(), "html", null, true);
        echo "javascript/libs/bootstrap/bootstrap-modal.js\"></script>
<script src=\"";
        // line 13
        echo twig_escape_filter($this->env, resource_url(), "html", null, true);
        echo "javascript/libs/bootstrap/bootstrap-dropdown.js\"></script>
<script src=\"";
        // line 14
        echo twig_escape_filter($this->env, resource_url(), "html", null, true);
        echo "javascript/libs/bootstrap/bootstrap-scrollspy.js\"></script>
<script src=\"";
        // line 15
        echo twig_escape_filter($this->env, resource_url(), "html", null, true);
        echo "javascript/libs/bootstrap/bootstrap-tab.js\"></script>
<script src=\"";
        // line 16
        echo twig_escape_filter($this->env, resource_url(), "html", null, true);
        echo "javascript/libs/bootstrap/bootstrap-tooltip.js\"></script>
<script src=\"";
        // line 17
        echo twig_escape_filter($this->env, resource_url(), "html", null, true);
        echo "javascript/libs/bootstrap/bootstrap-popover.js\"></script>
<script src=\"";
        // line 18
        echo twig_escape_filter($this->env, resource_url(), "html", null, true);
        echo "javascript/libs/bootstrap/bootstrap-button.js\"></script>
<script src=\"";
        // line 19
        echo twig_escape_filter($this->env, resource_url(), "html", null, true);
        echo "javascript/libs/bootstrap/bootstrap-collapse.js\"></script>
<script src=\"";
        // line 20
        echo twig_escape_filter($this->env, resource_url(), "html", null, true);
        echo "javascript/libs/bootstrap/bootstrap-carousel.js\"></script>
<script src=\"";
        // line 21
        echo twig_escape_filter($this->env, resource_url(), "html", null, true);
        echo "javascript/libs/bootstrap/bootstrap-typeahead.js\"></script>
<script src=\"";
        // line 22
        echo twig_escape_filter($this->env, resource_url(), "html", null, true);
        echo "javascript/libs/bootstrap/bootstrap-button.js\"></script>

<!--[if lt IE 7 ]>
\t<script src=\"";
        // line 25
        echo twig_escape_filter($this->env, resource_url(), "html", null, true);
        echo "javascript/libs/belatedpng/dd_belatedpng.js\"></script>
\t<script> DD_belatedPNG.fix('img, .png_bg');</script>
<![endif]-->

<!-- ============ LOAD APPLICATION LIBRARIES =========== -->

<script src=\"";
        // line 31
        echo twig_escape_filter($this->env, resource_url(), "html", null, true);
        echo "javascript/bootstrap.js\"></script>";
    }

    public function getTemplateName()
    {
        return "bootstrap/common/foot.php";
    }

    public function isTraitable()
    {
        return false;
    }
}
