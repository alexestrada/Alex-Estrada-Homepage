<?php

/* bootstrap/pages/index.php */
class __TwigTemplate_7dc3d520f5b5ef603043dc71f4381a88 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'foot' => array($this, 'block_foot'),
            'body' => array($this, 'block_body'),
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
        $this->env->loadTemplate("bootstrap/common/head.php")->display($context);
        // line 5
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, resource_url(), "html", null, true);
        echo "styles/bootstrap/docs.css\">
\t<link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, resource_url(), "html", null, true);
        echo "styles/prettify/prettify.css\">
";
    }

    // line 9
    public function block_foot($context, array $blocks = array())
    {
        // line 10
        echo "    ";
        $this->env->loadTemplate("bootstrap/common/foot.php")->display($context);
    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        // line 14
        echo "
  <!-- Navbar
    ================================================== -->
    <div class=\"navbar navbar-fixed-top\">
      <div class=\"navbar-inner\">
        <div class=\"container\">
          <a class=\"btn btn-navbar\" data-toggle=\"collapse\" data-target=\".nav-collapse\">
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
          </a>
          <a class=\"brand\" href=\"./index.html\">Bootstrap</a>
          <div class=\"nav-collapse\">
            <ul class=\"nav\">
              <li class=\"active\">
                <a href=\"/bootstrap\">Overview</a>
              </li>
              <li class=\"\">
                <a href=\"/bootstrap/scaffolding\">Scaffolding</a>
              </li>
              <li class=\"\">
                <a href=\"/bootstrap/base\">Base CSS</a>
              </li>
              <li class=\"\">
                <a href=\"/bootstrap/components\">Components</a>
              </li>
              <li class=\"\">
                <a href=\"/bootstrap/javascript\">Javascript plugins</a>
              </li>
              <li class=\"\">
                <a href=\"/bootstrap/less\">Using LESS</a>
              </li>
              <li class=\"divider-vertical\"></li>
              <li class=\"\">
                <a href=\"/bootstrap/download\">Customize</a>
              </li>
              <li class=\"\">
                <a href=\"/bootstrap/examples\">Examples</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <div class=\"container\">

<!-- Masthead
================================================== -->
<header class=\"jumbotron masthead\">
  <div class=\"inner\">
    <h1>Bootstrap, from Twitter</h1>
    <p>Simple and flexible HTML, CSS, and Javascript for popular user interface components and interactions.</p>
    <p class=\"download-info\">
      <a href=\"https://github.com/twitter/bootstrap/\" class=\"btn btn-primary btn-large\">View project on GitHub</a>
      <a href=\"assets/bootstrap.zip\" class=\"btn btn-large\">Download Bootstrap</a>
    </p>
  </div>

  <ul class=\"quick-links\">
    <li><a href=\"/bootstrap/upgrading\">Upgrading from 1.4</a></li>
    <li><a href=\"https://github.com/twitter/bootstrap/issues?state=open\">Issues</a></li>
    <li><a href=\"https://github.com/twitter/bootstrap/wiki/Roadmap\">Roadmap</a></li>
    <li><a href=\"https://github.com/twitter/bootstrap/wiki/Changelog\">Changelog</a></li>
    <li class=\"divider\">&middot;</li>
    <li>
      <iframe class=\"github-btn\" src=\"http://markdotto.github.com/github-buttons/github-btn.html?user=twitter&repo=bootstrap&type=watch&count=true\" allowtransparency=\"true\" frameborder=\"0\" scrolling=\"0\" width=\"114px\" height=\"20px\"></iframe>
    </li>
    <li>
      <iframe class=\"github-btn\" src=\"http://markdotto.github.com/github-buttons/github-btn.html?user=twitter&repo=bootstrap&type=fork&count=true\" allowtransparency=\"true\" frameborder=\"0\" scrolling=\"0\" width=\"98px\" height=\"20px\"></iframe>
    </li>
    <li class=\"divider\">&middot;</li>
    <li class=\"follow-btn\">
      <a href=\"https://twitter.com/twbootstrap\" class=\"twitter-follow-button\" data-width=\"145px\" data-link-color=\"#0069D6\" data-show-count=\"false\">Follow @twbootstrap</a>
    </li>
    <li class=\"tweet-btn\">
      <a href=\"https://twitter.com/share\" class=\"twitter-share-button\" data-url=\"http://twitter.github.com/bootstrap/\" data-count=\"horizontal\" data-via=\"twbootstrap\" data-related=\"mdo:Creator of Twitter Bootstrap\">Tweet</a>
    </li>
  </ul>
</header>

<hr class=\"soften\">

<div class=\"marketing\">
  <h1>Designed for everyone, everywhere.</h1>
  <p class=\"marketing-byline\">Need reasons to love Bootstrap? Look no further.</p>
  <div class=\"row\">
    <div class=\"span4\">
      <img class=\"bs-icon\" src=\"";
        // line 102
        echo twig_escape_filter($this->env, resource_url(), "html", null, true);
        echo "images/bootstrap/glyphicons/glyphicons_042_group.png\">
      <h2>Built for and by nerds</h2>
      <p>Like you, we love building awesome products on the web. We love it so much, we decided to help people just like us do it easier, better, and faster. Bootstrap is built for you.</p>
    </div>
    <div class=\"span4\">
      <img class=\"bs-icon\" src=\"";
        // line 107
        echo twig_escape_filter($this->env, resource_url(), "html", null, true);
        echo "images/bootstrap/glyphicons/glyphicons_079_podium.png\">
      <h2>For all skill levels</h2>
      <p>Bootstrap is designed to help people of all skill level&mdash;designer or developer, huge nerd or early beginner. Use it as a complete kit or use to start something more complex.</p>
    </div>
    <div class=\"span4\">
      <img class=\"bs-icon\" src=\"";
        // line 112
        echo twig_escape_filter($this->env, resource_url(), "html", null, true);
        echo "images/bootstrap/glyphicons/glyphicons_163_iphone.png\">
      <h2>Cross-everything</h2>
      <p>Originally built with only modern browsers in mind, Bootstrap has evolved to include support for all major browsers (even IE7!) and, with Bootstrap 2, tablets and smartphones, too.</p>
    </div>
  </div><!--/row-->
  <div class=\"row\">
    <div class=\"span4\">
      <img class=\"bs-icon\" src=\"";
        // line 119
        echo twig_escape_filter($this->env, resource_url(), "html", null, true);
        echo "images/bootstrap/glyphicons/glyphicons_155_show_thumbnails.png\">
      <h2>12-column grid</h2>
      <p>Grid systems aren't everything, but having a durable and flexible one at the core of your work can make development much simpler. Use our built-in grid classes or roll your own.</p>
    </div>
    <div class=\"span4\">
      <img class=\"bs-icon\" src=\"";
        // line 124
        echo twig_escape_filter($this->env, resource_url(), "html", null, true);
        echo "images/bootstrap/glyphicons/glyphicons_214_resize_small.png\">
      <h2>Responsive design</h2>
      <p>With Bootstrap 2, we've gone fully responsive. Our components are scaled according to a range of resolutions and devices to provide a consistent experience, no matter what.</p>
    </div>
    <div class=\"span4\">
      <img class=\"bs-icon\" src=\"";
        // line 129
        echo twig_escape_filter($this->env, resource_url(), "html", null, true);
        echo "images/bootstrap/glyphicons/glyphicons_266_book_open.png\">
      <h2>Styleguide docs</h2>
      <p>Unlike other front-end toolkits, Bootstrap was designed first and foremost as a styleguide to document not only our features, but best practices and living, coded examples.</p>
    </div>
  </div><!--/row-->
  <div class=\"row\">
    <div class=\"span4\">
      <img class=\"bs-icon\" src=\"";
        // line 136
        echo twig_escape_filter($this->env, resource_url(), "html", null, true);
        echo "images/bootstrap/glyphicons/glyphicons_082_roundabout.png\">
      <h2>Growing library</h2>
      <p>Despite being only 10kb (gzipped), Bootstrap is one of the most complete front-end toolkits out there with dozens of fully functional components ready to be put to use.</p>
    </div>
    <div class=\"span4\">
      <img class=\"bs-icon\" src=\"";
        // line 141
        echo twig_escape_filter($this->env, resource_url(), "html", null, true);
        echo "images/bootstrap/glyphicons/glyphicons_009_magic.png\">
      <h2>Custom jQuery plugins</h2>
      <p>What good is an awesome design component without easy-to-use, proper, and extensible interactions? With Bootstrap, you get custom-built jQuery plugins to bring your projects to life.</p>
    </div>
    <div class=\"span4\">
      <img class=\"bs-icon\" src=\"";
        // line 146
        echo twig_escape_filter($this->env, resource_url(), "html", null, true);
        echo "images/bootstrap/less-small.png\">
      <h2>Built on LESS</h2>
      <p>Where vanilla CSS falters, LESS excels. Variables, nesting, operations, and mixins in LESS makes coding CSS faster and more efficient with minimal overhead.</p>
    </div>
  </div><!--/row-->
  <div class=\"row\">
    <div class=\"span3\">
      <img class=\"small-bs-icon\" src=\"";
        // line 153
        echo twig_escape_filter($this->env, resource_url(), "html", null, true);
        echo "images/bootstrap/icon-html5.png\">
      <h3>HTML5</h3>
      <p>Built to support new HTML5 elements and syntax.</p>
    </div>
    <div class=\"span3\">
      <img class=\"small-bs-icon\" src=\"";
        // line 158
        echo twig_escape_filter($this->env, resource_url(), "html", null, true);
        echo "images/bootstrap/icon-css3.png\">
      <h3>CSS3</h3>
      <p>Progressively enhanced components for ultimate style.</p>
    </div>
    <div class=\"span3\">
      <img class=\"small-bs-icon\" src=\"";
        // line 163
        echo twig_escape_filter($this->env, resource_url(), "html", null, true);
        echo "images/bootstrap/icon-github.png\">
      <h3>Open-source</h3>
      <p>Built for and maintained by the community via <a href=\"https://github.com\">GitHub</a>.</p>
    </div>
    <div class=\"span3\">
      <img class=\"small-bs-icon\" src=\"";
        // line 168
        echo twig_escape_filter($this->env, resource_url(), "html", null, true);
        echo "images/bootstrap/icon-twitter.png\">
      <h3>Made at Twitter</h3>
      <p>Brought to you by an experienced <a href=\"http://twitter.com/fat\">engineer</a> and <a href=\"http://twitter.com/mdo\">designer</a>.</p>
    </div>
  </div><!--/row-->

  <hr class=\"soften\">

  <h1>Built with Bootstrap.</h1>
  <p class=\"marketing-byline\">For even more sites built with Bootstrap, <a href=\"http://builtwithbootstrap.tumblr.com/\" target=\"_blank\">visit the unofficial Tumblr</a> or <a href=\"./examples.html\">browse the examples</a>.</p>
  <ul class=\"thumbnails example-sites\">
    <li class=\"span4\">
      <a class=\"thumbnail\" href=\"http://kippt.com/\" target=\"_blank\">
        <img src=\"";
        // line 181
        echo twig_escape_filter($this->env, resource_url(), "html", null, true);
        echo "images/bootstrap/example-sites/kippt.png\" alt=\"Kippt\">
      </a>
    </li>
    <li class=\"span4\">
      <a class=\"thumbnail\" href=\"http://www.fleetio.com/\" target=\"_blank\">
        <img src=\"";
        // line 186
        echo twig_escape_filter($this->env, resource_url(), "html", null, true);
        echo "images/bootstrap/example-sites/fleetio.png\" alt=\"Fleetio\">
      </a>
    </li>
    <li class=\"span4\">
      <a class=\"thumbnail\" href=\"http://www.jshint.com/\" target=\"_blank\">
        <img src=\"";
        // line 191
        echo twig_escape_filter($this->env, resource_url(), "html", null, true);
        echo "images/bootstrap/example-sites/jshint.png\" alt=\"JS Hint\">
      </a>
    </li>
  </ul>

</div><!-- /.marketing -->

     <!-- Footer
      ================================================== -->
      <footer class=\"footer\">
        <p class=\"pull-right\"><a href=\"#\">Back to top</a></p>
        <p>Designed and built with all the love in the world <a href=\"http://twitter.com/twitter\" target=\"_blank\">@twitter</a> by <a href=\"http://twitter.com/mdo\" target=\"_blank\">@mdo</a> and <a href=\"http://twitter.com/fat\" target=\"_blank\">@fat</a>.</p>
        <p>Code licensed under the <a href=\"http://www.apache.org/licenses/LICENSE-2.0\" target=\"_blank\">Apache License v2.0</a>. Documentation licensed under <a href=\"http://creativecommons.org/licenses/by/3.0/\">CC BY 3.0</a>.</p>
        <p>Icons from <a href=\"http://glyphicons.com\">Glyphicons Free</a>, licensed under <a href=\"http://creativecommons.org/licenses/by/3.0/\">CC BY 3.0</a>.</p>
      </footer>

    </div><!-- /container -->

";
    }

    public function getTemplateName()
    {
        return "bootstrap/pages/index.php";
    }

    public function isTraitable()
    {
        return false;
    }
}
