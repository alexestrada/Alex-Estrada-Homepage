<?php

/* pages/home.php */
class __TwigTemplate_67aa95e38c24ffb134427fb4e27bd41f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'page' => array($this, 'block_page'),
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
    public function block_page($context, array $blocks = array())
    {
        // line 4
        echo "\t<div id=\"header\">
\t\t<h1><span>Alex Estrada</span></h1>
\t\t<p class=\"lead\">
\t\t\tdesigning and directing at <a href=\"http://www.grooveshark.com\" target=\"_blank\" class=\"grooveshark_logo\"><span>Grooveshark</span></a>
\t\t</p>
\t\t<hr class=\"bow\"></hr>
\t</div>
\t<ul class=\"social_links\">
\t\t<li>
\t\t\t<a href=\"mailto:hello@alexestrada.me\" class=\"email\">
\t\t\t\t<span>
\t\t\t\t\tEmail
\t\t\t\t</span>
\t\t\t</a>
\t\t</li>
\t\t<li>
\t\t\t<a href=\"http://alexestrada.tumblr.com\" target=\"_blank\" class=\"tumblr\">
\t\t\t\t<span>
\t\t\t\t\tTumblr
\t\t\t\t</span>
\t\t\t</a>
\t\t</li>
\t\t<li>
\t\t\t<a href=\"http://www.twitter.com/al3xestrada\" target=\"_blank\" class=\"twitter\">
\t\t\t\t<span>
\t\t\t\t\tTwitter
\t\t\t\t</span>
\t\t\t</a>
\t\t</li>
\t\t<li>
\t\t\t<a href=\"http://www.dribbble.com/alexestrada\" target=\"_blank\" class=\"dribbble\">
\t\t\t\t<span>
\t\t\t\t\tDribbble
\t\t\t\t</span>
\t\t\t</a>
\t\t</li>
\t\t<li>
\t\t\t<a href=\"http://www.pinterest.com/al3xestrada\" target=\"_blank\" class=\"pinterest\">
\t\t\t\t<span>
\t\t\t\t\tPinterest
\t\t\t\t</span>
\t\t\t</a>
\t\t</li>
\t</ul>
";
    }

    public function getTemplateName()
    {
        return "pages/home.php";
    }

    public function isTraitable()
    {
        return false;
    }
}
