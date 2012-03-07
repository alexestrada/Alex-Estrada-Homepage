<?php

/* common/page_navigation.php */
class __TwigTemplate_d57b5defa67de2b979f6d3e236406c1d extends Twig_Template
{
    protected function doGetParent(array $context)
    {
        return false;
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        if (isset($context["navigation"])) { $_navigation_ = $context["navigation"]; } else { $_navigation_ = null; }
        if ((twig_length_filter($this->env, $_navigation_) > 0)) {
            // line 2
            echo "\t<div class=\"inner\">
\t\t<ul class=\"nav nav-page\">
\t\t\t";
            // line 4
            if (isset($context["navigation"])) { $_navigation_ = $context["navigation"]; } else { $_navigation_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_navigation_);
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 5
                echo "\t\t\t\t<li class=\"";
                if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                if ($this->getAttribute($_item_, "active")) {
                    echo "active";
                }
                echo " ";
                if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                if ((twig_length_filter($this->env, $this->getAttribute($_item_, "sub_navigation")) > 0)) {
                    echo "dropdown";
                }
                echo "\">
\t\t\t\t\t<a href=\"";
                // line 6
                if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_item_, "url"), "html", null, true);
                echo "\" class=\"";
                if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                if ((twig_length_filter($this->env, $this->getAttribute($_item_, "sub_navigation")) > 0)) {
                    echo "dropdown-toggle";
                }
                echo "\" ";
                if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                if ((twig_length_filter($this->env, $this->getAttribute($_item_, "sub_navigation")) > 0)) {
                    echo "data-toggle=\"dropdown\"";
                }
                echo ">
\t\t\t\t\t\t<span>";
                // line 7
                if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_item_, "title"), "html", null, true);
                echo "</span>
\t\t\t\t\t\t";
                // line 8
                if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                if ((twig_length_filter($this->env, $this->getAttribute($_item_, "sub_navigation")) > 0)) {
                    echo "<b class=\"caret\"></b>";
                }
                // line 9
                echo "\t\t\t\t\t</a>
\t\t\t\t\t";
                // line 10
                if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                if ((twig_length_filter($this->env, $this->getAttribute($_item_, "sub_navigation")) > 0)) {
                    // line 11
                    echo "\t\t\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t\t";
                    // line 12
                    if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($_item_, "sub_navigation"));
                    foreach ($context['_seq'] as $context["_key"] => $context["sub_item"]) {
                        // line 13
                        echo "\t\t\t\t\t\t\t<li class=\"";
                        if (isset($context["sub_item"])) { $_sub_item_ = $context["sub_item"]; } else { $_sub_item_ = null; }
                        if ($this->getAttribute($_sub_item_, "active")) {
                            echo "active";
                        }
                        echo "\">
\t\t\t\t\t\t\t\t<a href=\"";
                        // line 14
                        if (isset($context["sub_item"])) { $_sub_item_ = $context["sub_item"]; } else { $_sub_item_ = null; }
                        echo twig_escape_filter($this->env, $this->getAttribute($_sub_item_, "url"), "html", null, true);
                        echo "\" class=\"\">
\t\t\t\t\t\t\t\t\t<span>";
                        // line 15
                        if (isset($context["sub_item"])) { $_sub_item_ = $context["sub_item"]; } else { $_sub_item_ = null; }
                        echo twig_escape_filter($this->env, $this->getAttribute($_sub_item_, "title"), "html", null, true);
                        echo "</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sub_item'], $context['_parent'], $context['loop']);
                    $context = array_merge($_parent, array_intersect_key($context, $_parent));
                    // line 19
                    echo "\t\t\t\t\t</ul>
\t\t\t\t\t";
                }
                // line 21
                echo "\t\t\t\t</li>
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 23
            echo "\t\t</ul>
\t</div>
";
        }
    }

    public function getTemplateName()
    {
        return "common/page_navigation.php";
    }

    public function isTraitable()
    {
        return false;
    }
}
