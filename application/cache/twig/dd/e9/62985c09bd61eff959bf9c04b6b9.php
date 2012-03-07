<?php

/* bootstrap/pages/scaffolding.php */
class __TwigTemplate_dde962985c09bd61eff959bf9c04b6b9 extends Twig_Template
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
        echo "  <!-- Navbar
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
              <li class=\"\">
                <a href=\"/bootstrap\">Overview</a>
              </li>
              <li class=\"active\">
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
      <header class=\"jumbotron subhead\" id=\"overview\">
        <h1>Scaffolding</h1>
        <p class=\"lead\">Bootstrap is built on a responsive 12-column grid. We've also included fixed- and fluid-width layouts based on that system.</p>
        <div class=\"subnav\">
          <ul class=\"nav nav-pills\">
            <li><a href=\"#grid-system\">Grid system</a></li>
            <li><a href=\"#layouts\">Layouts</a></li>
            <li><a href=\"#responsive\">Responsive design</a></li>
          </ul>
        </div>
      </header>



<!-- Grid system
================================================== -->
<section id=\"grid-system\">
  <div class=\"page-header\">
    <h1>Grid system <small>12 columns with a responsive twist</small></h1>
  </div>

  <h2>Default 940px grid</h2>
  <div class=\"row show-grid\">
    <div class=\"span1\">1</div>
    <div class=\"span1\">1</div>
    <div class=\"span1\">1</div>
    <div class=\"span1\">1</div>
    <div class=\"span1\">1</div>
    <div class=\"span1\">1</div>
    <div class=\"span1\">1</div>
    <div class=\"span1\">1</div>
    <div class=\"span1\">1</div>
    <div class=\"span1\">1</div>
    <div class=\"span1\">1</div>
    <div class=\"span1\">1</div>
  </div>
  <div class=\"row show-grid\">
    <div class=\"span4\">4</div>
    <div class=\"span4\">4</div>
    <div class=\"span4\">4</div>
  </div>
  <div class=\"row show-grid\">
    <div class=\"span4\">4</div>
    <div class=\"span8\">8</div>
  </div>
  <div class=\"row show-grid\">
    <div class=\"span6\">6</div>
    <div class=\"span6\">6</div>
  </div>
  <div class=\"row show-grid\">
    <div class=\"span12\">12</div>
  </div>
  <div class=\"row\">
    <div class=\"span4\">
      <p>The default grid system provided as part of Bootstrap is a <strong>940px-wide, 12-column grid</strong>.</p>
      <p>It also has four responsive variations for various devices and resolutions: phone, tablet portrait, table landscape and small desktops, and large widescreen desktops.</p>
    </div>
    <div class=\"span4\">
<pre class=\"prettyprint linenums\">
&lt;div class=\"row\"&gt;
  &lt;div class=\"span4\"&gt;...&lt;/div&gt;
  &lt;div class=\"span8\"&gt;...&lt;/div&gt;
&lt;/div&gt;
</pre>
    </div>
    <div class=\"span4\">
      <p>As shown here, a basic layout can be created with two \"columns,\" each spanning a number of the 12 foundational columns we defined as part of our grid system.</p>
    </div>
  </div><!-- /row -->

  <br>

  <h2>Offsetting columns</h2>
  <div class=\"row show-grid\">
    <div class=\"span4\">4</div>
    <div class=\"span4 offset4\">4 offset 4</div>
  </div><!-- /row -->
  <div class=\"row show-grid\">
    <div class=\"span3 offset3\">3 offset 3</div>
    <div class=\"span3 offset3\">3 offset 3</div>
  </div><!-- /row -->
  <div class=\"row show-grid\">
    <div class=\"span8 offset4\">8 offset 4</div>
  </div><!-- /row -->
<pre class=\"prettyprint linenums\">
&lt;div class=\"row\"&gt;
  &lt;div class=\"span4\"&gt;...&lt;/div&gt;
  &lt;div class=\"span4 offset4\"&gt;...&lt;/div&gt;
&lt;/div&gt;
</pre>

  <br>

  <h2>Nesting columns</h2>
  <div class=\"row\">
    <div class=\"span6\">
      <p>With the static (non-fluid) grid system in Bootstrap, nesting is easy. To nest your content, just add a new <code>.row</code> and set of <code>.span*</code> columns within an existing <code>.span*</code> column.</p>
      <h4>Example</h4>
      <div class=\"row show-grid\">
        <div class=\"span6\">
          Level 1 of column
          <div class=\"row show-grid\">
            <div class=\"span3\">
              Level 2
            </div>
            <div class=\"span3\">
              Level 2
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class=\"span6\">
<pre class=\"prettyprint linenums\">
&lt;div class=\"row\"&gt;
  &lt;div class=\"span12\"&gt;
    Level 1 of column
    &lt;div class=\"row\"&gt;
      &lt;div class=\"span6\"&gt;Level 2&lt;/div&gt;
      &lt;div class=\"span6\"&gt;Level 2&lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;
</pre>
    </div>
  </div>

  <h2>Grid customization</h2>
  <table class=\"table table-bordered table-striped\">
    <thead>
      <tr>
        <th>Variable</th>
        <th>Default value</th>
        <th>Description</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><code>@gridColumns</code></td>
        <td>12</td>
        <td>Number of columns</td>
      </tr>
      <tr>
        <td><code>@gridColumnWidth</code></td>
        <td>60px</td>
        <td>Width of each column</td>
      </tr>
      <tr>
        <td><code>@gridGutterWidth</code></td>
        <td>20px</td>
        <td>Negative space between columns</td>
      </tr>
      <tr>
        <td><code>@siteWidth</code></td>
        <td><em>Computed sum of all columns and gutters</em></td>
        <td>Counts number of columns and gutters to set width of the <code>.container-fixed()</code> mixin</td>
      </tr>
    </tbody>
  </table>
  <div class=\"row\">
    <div class=\"span4\">
      <h3>Variables in LESS</h3>
      <p>Built into Bootstrap are a handful of variables for customizing the default 940px grid system, documented above. All variables for the grid are stored in variables.less.</p>
    </div>
    <div class=\"span4\">
      <h3>How to customize</h3>
      <p>Modifying the grid means changing the three <code>@grid*</code> variables and recompiling Bootstrap. Change the grid variables in variables.less and use one of the <a href=\"#compiling\">four ways documented to recompile</a>. If you're adding more columns, be sure to add the CSS for those in grid.less.</p>
    </div>
    <div class=\"span4\">
      <h3>Staying responsive</h3>
      <p>Customization of the grid only works at the default level, the 940px grid. To maintain the responsive aspects of Bootstrap, you'll also have to customize the grids in responsive.less.</p>
    </div>
  </div><!-- /row -->

</section>



<!-- Layouts (Default and fluid)
================================================== -->
<section id=\"layouts\">
  <div class=\"page-header\">
    <h1>Layouts <small>Basic templates to create webpages</small></h1>
  </div>

  <div class=\"row\">
    <div class=\"span6\">
      <h2>Fixed layout</h2>
      <p>The default and simple 940px-wide, centered layout for just about any website or page provided by a single <code>&lt;div class=\"container\"&gt;</code>.</p>
      <div class=\"minicon-layout\">
        <div class=\"minicon-layout-body\"></div>
      </div>
<pre class=\"prettyprint linenums\">
&lt;body&gt;
  &lt;div class=\"container\"&gt;
    ...
  &lt;/div&gt;
&lt;/body&gt;
</pre>
    </div><!-- /col -->
    <div class=\"span6\">
      <h2>Fluid layout</h2>
      <p><code>&lt;div class=\"container-fluid\"&gt;</code> gives flexible page structure, min- and max-widths, and a left-hand sidebar. It's great for apps and docs.</p>
      <div class=\"minicon-layout fluid\">
        <div class=\"minicon-layout-sidebar\"></div>
        <div class=\"minicon-layout-body\"></div>
      </div>
<pre class=\"prettyprint linenums\">
&lt;div class=\"container-fluid\"&gt;
  &lt;div class=\"row-fluid\"&gt;
    &lt;div class=\"span2\"&gt;
      &lt;!--Sidebar content--&gt;
    &lt;/div&gt;
    &lt;div class=\"span10\"&gt;
      &lt;!--Body content--&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;
</pre>
    </div><!-- /col -->
  </div><!-- /row -->
</section>




<!-- Responsive design
================================================== -->
<section id=\"responsive\">
  <div class=\"page-header\">
    <h1>Responsive design <small>Media queries for various devices and resolutions</small></h1>
  </div>
  <!-- Supported devices -->
  <div class=\"row\">
    <div class=\"span4\">
      <img src=\"";
        // line 297
        echo twig_escape_filter($this->env, resource_url(), "html", null, true);
        echo "images/bootstrap/responsive-illustrations.png\" alt=\"Responsive devices\">
    </div>
    <div class=\"span8\">
      <h2>Supported devices</h2>
      <p>Bootstrap supports a handful of media queries to help make your projects more appropriate on different devices and screen resolutions. Here's what's included:</p>
      <table class=\"table table-bordered table-striped\">
        <thead>
          <tr>
            <th>Label</th>
            <th>Layout width</th>
            <th>Column width</th>
            <th>Gutter width</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Smartphones</td>
            <td>480px and below</td>
            <td class=\"muted\" colspan=\"2\">Fluid columns, no fixed widths</td>
          </tr>
          <tr>
            <td>Portrait tablets</td>
            <td>480px to 768px</td>
            <td class=\"muted\" colspan=\"2\">Fluid columns, no fixed widths</td>
          </tr>
          <tr>
            <td>Landscape tablets</td>
            <td>768px to 980px</td>
            <td>44px</td>
            <td>20px</td>
          </tr>
          <tr>
            <td>Default</td>
            <td>980px and up</td>
            <td>60px</td>
            <td>20px</td>
          </tr>
          <tr>
            <td>Large display</td>
            <td>1210px and up</td>
            <td>70px</td>
            <td>30px</td>
          </tr>
        </tbody>
      </table>

      <h3>What they do</h3>
      <p>Media queries allow for custom CSS based on a number of conditions&mdash;ratios, widths, display type, etc&mdash;but usually focuses around <code>min-width</code> and <code>max-width</code>.</p>
      <ul>
        <li>Modify the width of column in our grid</li>
        <li>Stack elements instead of float wherever necessary</li>
        <li>Resize headings and text to be more appropriate for devices</li>
      </ul>
    </div>
  </div>

  <br>

  <!-- Media query code -->
  <h2>Using the media queries</h2>
  <div class=\"row\">
    <div class=\"span5\">
      <p>Bootstrap doesn't automatically include these media queries, but understanding and adding them is very easy and requires minimal setup. You have a few options for including the responsive features of Bootstrap:</p>
      <ol>
        <li>Use the compiled responsive version, bootstrap-responsive.css</li>
        <li>Add @import \"responsive.less\" and recompile Bootstrap</li>
        <li>Modify and recompile responsive.less as a separate</li>
      </ol>
      <p><strong>Why not just include it?</strong> Truth be told, not everything needs to be responsive. Instead of encouraging developers to remove this feature, we figure it best to enable it.</p>
    </div>
    <div class=\"span7\">
<pre class=\"prettyprint linenums\">
  // Landscape phones and down
  @media (max-width: 480px) { ... }

  // Landscape phone to portrait tablet
  @media (max-width: 768px) { ... }

  // Portrait tablet to landscape and desktop
  @media (min-width: 768px) and (max-width: 980px) { ... }

  // Large desktop
  @media (min-width: 1200px) { .. }
</pre>
    </div>
  </div>
</section>


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
        return "bootstrap/pages/scaffolding.php";
    }

    public function isTraitable()
    {
        return false;
    }
}
