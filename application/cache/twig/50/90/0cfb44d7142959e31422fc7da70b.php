<?php

/* pages/styling.php */
class __TwigTemplate_50900cfb44d7142959e31422fc7da70b extends Twig_Template
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
        echo "\t<h1 class=\"nomargin-bottom\">Styling</h1>
\t<hr></hr>
";
    }

    // line 8
    public function block_page_body($context, array $blocks = array())
    {
        // line 9
        echo "\t<section id=\"typography\">
\t\t<h2 class=\"tall\">Typography <small>Headings, paragraphs, lists, and other inline type elements</small></h2>
\t\t
\t\t<h3 class=\"tall\">Headings &amp; body copy</h3>
\t\t
\t\t<div class=\"row\">
\t\t\t<div class=\"span4\">
\t\t\t\t<h4>Example body text</h4>
\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam magna nibh, pulvinar suscipit imperdiet nec, molestie eu mi. Etiam vel fringilla tellus. Vivamus blandit risus at dolor interdum molestie sagittis velit molestie. Pellentesque vitae justo eget risus venenatis lobortis.</p>
\t\t\t\t<p class=\"nomargin-bottom\">Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Donec sed odio dui.</p>
\t\t\t</div>
\t\t\t<div class=\"span4\">
\t\t\t\t<h4>Typographic scale</h4>
\t\t\t\t<p>The entire typographic grid is based on two Less variables in our variables.less file: <code>@baseFontSize</code> and <code>@baseLineHeight</code>. The first is the base font-size used throughout and the second is the base line-height.</p>
\t\t\t\t<p class=\"nomargin-bottom\">We use those variables, and some math, to create the margins, paddings, and line-heights of all our type and more.</p>
\t\t\t</div>
\t\t\t<div class=\"span4\">
\t\t\t\t<div class=\"well\">
\t\t\t\t\t<h1>h1. Heading 1</h1>
\t\t\t\t\t<h2>h2. Heading 2</h2>
\t\t\t\t\t<h3>h3. Heading 3</h3>
\t\t\t\t\t<h4>h4. Heading 4</h4>
\t\t\t\t\t<h5 class=\"nomargin-bottom\">h5. Heading 5</h5>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t
\t\t<hr class=\"secondary\"></hr>
\t\t
\t\t<h3 class=\"tall\">Lists</h3>
\t\t
\t\t<div class=\"row\">
\t\t\t<div class=\"span3\">
\t\t\t\t<h4>Unordered</h4>
\t\t\t\t<p><code>&lt;ul&gt;</code></p>
\t\t\t\t<ul class=\"nomargin-bottom\">
\t\t\t\t\t<li>Lorem ipsum dolor sit amet</li>
\t\t\t\t\t<li>Consectetur adipiscing elit</li>
\t\t\t\t\t<li>Integer molestie lorem at massa</li>
\t\t\t\t\t<li>Facilisis in pretium nisl aliquet</li>
\t\t\t\t\t<li>Nulla volutpat aliquam velit
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t<li>Phasellus iaculis neque</li>
\t\t\t\t\t\t\t<li>Purus sodales ultricies</li>
\t\t\t\t\t\t\t<li>Vestibulum laoreet porttitor sem</li>
\t\t\t\t\t\t\t<li>Ac tristique libero volutpat at</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</li>
\t\t\t\t\t<li>Faucibus porta lacus fringilla vel</li>
\t\t\t\t\t<li>Aenean sit amet erat nunc</li>
\t\t\t\t\t<li>Eget porttitor lorem</li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t\t<div class=\"span3\">
\t\t\t\t<h4>Unstyled</h4>
\t\t\t\t<p><code>&lt;ul class=\"unstyled\"&gt;</code></p>
\t\t\t\t<ul class=\"unstyled nomargin-bottom\">
\t\t\t\t\t<li>Lorem ipsum dolor sit amet</li>
\t\t\t\t\t<li>Consectetur adipiscing elit</li>
\t\t\t\t\t<li>Integer molestie lorem at massa</li>
\t\t\t\t\t<li>Facilisis in pretium nisl aliquet</li>
\t\t\t\t\t<li>Nulla volutpat aliquam velit
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t<li>Phasellus iaculis neque</li>
\t\t\t\t\t\t\t<li>Purus sodales ultricies</li>
\t\t\t\t\t\t\t<li>Vestibulum laoreet porttitor sem</li>
\t\t\t\t\t\t\t<li>Ac tristique libero volutpat at</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</li>
\t\t\t\t\t<li>Faucibus porta lacus fringilla vel</li>
\t\t\t\t\t<li>Aenean sit amet erat nunc</li>
\t\t\t\t\t<li>Eget porttitor lorem</li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t\t<div class=\"span3\">
\t\t\t\t<h4>Ordered</h4>
\t\t\t\t<p><code>&lt;ol&gt;</code></p>
\t\t\t\t<ol class=\"nomargin-bottom\">
\t\t\t\t\t<li>Lorem ipsum dolor sit amet</li>
\t\t\t\t\t<li>Consectetur adipiscing elit</li>
\t\t\t\t\t<li>Integer molestie lorem at massa</li>
\t\t\t\t\t<li>Facilisis in pretium nisl aliquet</li>
\t\t\t\t\t<li>Nulla volutpat aliquam velit</li>
\t\t\t\t\t<li>Faucibus porta lacus fringilla vel</li>
\t\t\t\t\t<li>Aenean sit amet erat nunc</li>
\t\t\t\t\t<li>Eget porttitor lorem</li>
\t\t\t\t</ol>
\t\t\t</div>
\t\t\t<div class=\"span3\">
\t\t\t\t<h4>Description</h4>
\t\t\t\t<p><code>&lt;dl&gt;</code></p>
\t\t\t\t<dl class=\"nomargin-bottom\">
\t\t\t\t\t<dt>Description lists</dt>
\t\t\t\t\t\t<dd>A description list is perfect for defining terms.</dd>
\t\t\t\t\t<dt>Euismod</dt>
\t\t\t\t\t\t<dd>Vestibulum id ligula porta felis euismod semper eget lacinia odio sem nec elit.</dd>
\t\t\t\t\t\t<dd>Donec id elit non mi porta gravida at eget metus.</dd>
\t\t\t\t\t<dt>Malesuada porta</dt>
\t\t\t\t\t\t<dd>Etiam porta sem malesuada magna mollis euismod.</dd>
\t\t\t\t</dl>
\t\t\t</div>
\t\t</div>
\t</section>
\t\t
\t<hr></hr>
\t
\t<section id=\"margins\">
\t\t<h2 class=\"tall\">Margins</h2>
\t\t
\t\t<div class=\"row\">
\t\t\t<div class=\"span4\">
\t\t\t\t<p>Margins are used throughout, from page layout to paragraph and header spacing.  The margin is based on a Less variable in our variables.less file <code>@primaryMargin</code>.</p>
\t\t\t\t<p class=\"tall\">There are classes made available to you that will allow you to override an objects margins, setting it to zero.</p>
\t\t\t</div>
\t\t\t<div class=\"span8\">
\t\t\t\t<table class=\"table table-bordered table-striped nomargin\">
\t\t\t\t\t<thead>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th>Class</th>
\t\t\t\t\t\t\t<th>Description</th>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</thead>
\t\t\t\t\t<tbody>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<code>.nomargin</code>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>Remove all margin from object</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<code>.nomargin-top</code>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>Remove top margin from object</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<code>.nomargin-right</code>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>Remove right margin from object</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<code>.nomargin-bottom</code>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>Remove bottom margin from object</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<code>.nomargin-left</code>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>Remove left margin from object</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</tbody>
\t\t\t\t</table>
\t\t\t</div>
\t\t</div>
\t\t
\t\t<hr class=\"secondary\"></hr>
\t\t
\t\t<h3 class=\"tall\">Conditional Margin Styling</h3>
\t\t
\t\t<div class=\"row\">
\t\t\t<div class=\"span4\">
\t\t\t\t<p class=\"tall\">For a number of typographic elements (e.g. headers, paragraphs, lists, etc&hellip;) and components (e.g. dividers, wells, tables, etc&hellip;), there are conditional classes that may be applied in order to alter the default margin.</p>
\t\t\t</div>
\t\t\t
\t\t\t<div class=\"span8\">
\t\t\t\t<table class=\"table table-bordered table-striped nomargin-bottom\">
\t\t\t\t\t<thead>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th>Class</th>
\t\t\t\t\t\t\t<th>Description</th>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</thead>
\t\t\t\t\t<tbody>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td class=\"muted\">None</td>
\t\t\t\t\t\t\t<td>Default bottom margin</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<code>.short</code>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>Little or no bottom margin (typically half default margin)</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<code>.tall</code>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>Taller bottom margin (typically twice default margin)</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</tbody>
\t\t\t\t</table>
\t\t\t</div>
\t\t</div>
\t\t
\t\t<hr class=\"secondary\"></hr>
\t\t
\t\t<h3 class=\"tall\">Dividers</h3>
\t\t
\t\t<p class=\"tall\">For a number of typographic elements (e.g. headers, paragraphs, lists, etc&hellip;) and components (e.g. dividers, wells, tables, etc&hellip;), there are conditional classes that may be applied in order to alter the default margin.</p>
\t\t
\t\t<div class=\"row\">
\t\t\t<div class=\"span8\">
\t\t\t\t<table class=\"table table-bordered table-striped nomargin-bottom\">
\t\t\t\t\t<thead>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th>Class</th>
\t\t\t\t\t\t\t<th>Description</th>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</thead>
\t\t\t\t\t<tbody>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td class=\"muted\">Default</td>
\t\t\t\t\t\t\t<td><hr></hr></td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<code>.secondary</code>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td><hr class=\"secondary\"></hr></td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</tbody>
\t\t\t\t</table>
\t\t\t</div>
\t\t\t<div class=\"span4\">
<pre class=\"prettyprint linenums\">
&lt;hr&gt;&lt;/hr&gt;

&lt;hr class=\"secondary\"&gt;&lt;/hr&gt;
</pre>
\t\t\t</div>
\t\t</div>
\t</section>
\t
\t<hr></hr>
\t
\t<section id=\"tables\">
\t\t<h2 class=\"tall\">Tables</h2>

\t\t<h3 class=\"tall\">Table markup</h3>

\t\t<div class=\"row\">
\t\t\t<div class=\"span8\">
\t\t\t\t<table class=\"table table-bordered table-striped nomargin-bottom\">
\t\t\t\t\t<thead>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th>Tag</th>
\t\t\t\t\t\t\t<th>Description</th>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</thead>
\t\t\t\t\t<tbody>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<code>&lt;table&gt;</code>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\tWrapping element for displaying data in a tabular format
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<code>&lt;thead&gt;</code>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\tContainer element for table header rows (<code>&lt;tr&gt;</code>) to label table columns
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<code>&lt;tbody&gt;</code>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\tContainer element for table rows (<code>&lt;tr&gt;</code>) in the body of the table
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<code>&lt;tr&gt;</code>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\tContainer element for a set of table cells (<code>&lt;td&gt;</code> or <code>&lt;th&gt;</code>) that appears on a single row
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<code>&lt;td&gt;</code>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\tDefault table cell
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<code>&lt;th&gt;</code>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\tSpecial table cell for column (or row, depending on scope and placement) labels<br>
\t\t\t\t\t\t\t\tMust be used within a <code>&lt;thead&gt;</code>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<code>&lt;caption&gt;</code>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\tDescription or summary of what the table holds, especially useful for screen readers
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</tbody>
\t\t\t\t</table>
\t\t\t</div>
\t\t\t<div class=\"span4\">
<pre class=\"prettyprint linenums\">
&lt;table&gt;
  &lt;thead&gt;
    &lt;tr&gt;
      &lt;th&gt;…&lt;/th&gt;
      &lt;th&gt;…&lt;/th&gt;
    &lt;/tr&gt;
  &lt;/thead&gt;
  &lt;tbody&gt;
    &lt;tr&gt;
      &lt;td&gt;…&lt;/td&gt;
      &lt;td&gt;…&lt;/td&gt;
    &lt;/tr&gt;
  &lt;/tbody&gt;
&lt;/table&gt;
</pre>
\t\t\t</div>
\t\t</div>
\t\t
\t\t<hr class=\"secondary\"></hr>
\t\t
\t\t<h3 class=\"tall\">Table options</h3>
\t\t
\t\t<table class=\"table table-bordered table-striped\">
\t\t\t<thead>
\t\t\t\t<tr>
\t\t\t\t\t<th>Name</th>
\t\t\t\t\t<th>Class</th>
\t\t\t\t\t<th>Description</th>
\t\t\t\t</tr>
\t\t\t</thead>
\t\t\t<tbody>
\t\t\t\t<tr>
\t\t\t\t\t<td>Default</td>
\t\t\t\t\t<td class=\"muted\">None</td>
\t\t\t\t\t<td>No styles, just columns and rows</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td>Basic</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<code>.table</code>
\t\t\t\t\t</td>
\t\t\t\t\t<td>Only horizontal lines between rows</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td>Bordered</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<code>.table-bordered</code>
\t\t\t\t\t</td>
\t\t\t\t\t<td>Rounds corners and adds outter border</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td>Zebra-stripe</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<code>.table-striped</code>
\t\t\t\t\t</td>
\t\t\t\t\t<td>Adds light gray background color to odd rows (1, 3, 5, etc)</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td>Condensed</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<code>.table-condensed</code>
\t\t\t\t\t</td>
\t\t\t\t\t<td>Cuts vertical padding in half, from 8px to 4px, within all <code>td</code> and <code>th</code> elements</td>
\t\t\t\t</tr>
\t\t\t</tbody>
\t\t</table>
\t\t
\t\t<hr class=\"secondary\"></hr>
\t\t
\t\t<h3 class=\"tall\">Example tables</h3>
\t\t
\t\t<h4>1. Default table styles</h4>
\t\t
\t\t<div class=\"row\">
\t\t\t<div class=\"span5\">
\t\t\t\t<p>Tables are automatically styled with only a few borders to ensure readability and maintain structure. With 2.0, the <code>.table</code> class is required.</p>
<pre class=\"prettyprint linenums tall\">
&lt;table class=\"table\"&gt;
  …
&lt;/table&gt;
</pre>
\t\t\t</div>
\t\t\t<div class=\"span7\">
\t\t\t\t<table class=\"table tall\">
\t\t\t\t\t<thead>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th>#</th>
\t\t\t\t\t\t\t<th>First Name</th>
\t\t\t\t\t\t\t<th>Last Name</th>
\t\t\t\t\t\t\t<th>Language</th>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</thead>
\t\t\t\t\t<tbody>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>1</td>
\t\t\t\t\t\t\t<td>Mark</td>
\t\t\t\t\t\t\t<td>Otto</td>
\t\t\t\t\t\t\t<td>CSS</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>2</td>
\t\t\t\t\t\t\t<td>Jacob</td>
\t\t\t\t\t\t\t<td>Thornton</td>
\t\t\t\t\t\t\t<td>Javascript</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>3</td>
\t\t\t\t\t\t\t<td>Stu</td>
\t\t\t\t\t\t\t<td>Dent</td>
\t\t\t\t\t\t\t<td>HTML</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</tbody>
\t\t\t\t</table>
\t\t\t</div>
\t\t</div>
\t\t
\t\t<h4>2. Striped table</h4>
\t\t
\t\t<div class=\"row\">
\t\t\t<div class=\"span5\">
\t\t\t\t<p>Get a little fancy with your tables by adding zebra-striping&mdash;just add the <code>.table-striped</code> class.</p>
\t\t\t\t<p class=\"muted\"><strong>Note:</strong> Striped tables use the <code>:nth-child</code> CSS selector and is not available in IE7-IE8.</p>
<pre class=\"prettyprint linenums tall\">
&lt;table class=\"table table-striped\"&gt;
 …
&lt;/table&gt;
</pre>
\t\t\t</div>
\t\t\t<div class=\"span7\">
\t\t\t\t<table class=\"table table-striped tall\">
\t\t\t\t\t<thead>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th>#</th>
\t\t\t\t\t\t\t<th>First Name</th>
\t\t\t\t\t\t\t<th>Last Name</th>
\t\t\t\t\t\t\t<th>Language</th>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</thead>
\t\t\t\t\t<tbody>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>1</td>
\t\t\t\t\t\t\t<td>Mark</td>
\t\t\t\t\t\t\t<td>Otto</td>
\t\t\t\t\t\t\t<td>CSS</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>2</td>
\t\t\t\t\t\t\t<td>Jacob</td>
\t\t\t\t\t\t\t<td>Thornton</td>
\t\t\t\t\t\t\t<td>Javascript</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>3</td>
\t\t\t\t\t\t\t<td>Stu</td>
\t\t\t\t\t\t\t<td>Dent</td>
\t\t\t\t\t\t\t<td>HTML</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</tbody>
\t\t\t\t</table>
\t\t\t</div>
\t\t</div>
\t\t
\t\t<h4>3. Bordered table</h4>

\t\t<div class=\"row\">
\t\t\t<div class=\"span5\">
\t\t\t<p>Add borders around the entire table and rounded corners for aesthetic purposes.</p>
<pre class=\"prettyprint linenums tall\">
&lt;table class=\"table table-bordered\"&gt;
  …
&lt;/table&gt;
</pre>
\t\t\t</div>

\t\t\t<div class=\"span7\">
\t\t\t\t<table class=\"table table-bordered tall\">
\t\t\t\t\t<thead>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th>#</th>
\t\t\t\t\t\t\t<th>First Name</th>
\t\t\t\t\t\t\t<th>Last Name</th>
\t\t\t\t\t\t\t<th>Language</th>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</thead>
\t\t\t\t\t<tbody>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>1</td>
\t\t\t\t\t\t\t<td colspan=\"2\">Mark Otto</td>
\t\t\t\t\t\t\t<td>CSS</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>2</td>
\t\t\t\t\t\t\t<td>Jacob</td>
\t\t\t\t\t\t\t<td>Thornton</td>
\t\t\t\t\t\t\t<td rowspan=\"2\">Javascript</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>3</td>
\t\t\t\t\t\t\t<td>Stu</td>
\t\t\t\t\t\t\t<td>Dent</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>3</td>
\t\t\t\t\t\t\t<td>Brosef</td>
\t\t\t\t\t\t\t<td>Stalin</td>
\t\t\t\t\t\t\t<td>HTML</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</tbody>
\t\t\t\t</table>
\t\t\t</div>
\t\t</div>
\t\t
\t\t<h4>4. Condensed table</h4>
\t\t
\t\t<div class=\"row\">
\t\t\t<div class=\"span5\">
\t\t\t\t<p>Make your tables more compact by adding the <code>.table-condensed</code> class to cut table cell padding in half (from 8px to 4px).</p>
<pre class=\"prettyprint linenums tall\">
&lt;table class=\"table table-condensed\"&gt;
  …
&lt;/table&gt;
</pre>
\t\t\t</div>
\t\t\t
\t\t\t<div class=\"span7\">
\t\t\t\t<table class=\"table table-condensed tall\">
\t\t\t\t\t<thead>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th>#</th>
\t\t\t\t\t\t\t<th>First Name</th>
\t\t\t\t\t\t\t<th>Last Name</th>
\t\t\t\t\t\t\t<th>Language</th>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</thead>
\t\t\t\t\t<tbody>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>1</td>
\t\t\t\t\t\t\t<td>Mark</td>
\t\t\t\t\t\t\t<td>Otto</td>
\t\t\t\t\t\t\t<td>CSS</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>2</td>
\t\t\t\t\t\t\t<td>Jacob</td>
\t\t\t\t\t\t\t<td>Thornton</td>
\t\t\t\t\t\t\t<td>Javascript</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>3</td>
\t\t\t\t\t\t\t<td>Stu</td>
\t\t\t\t\t\t\t<td>Dent</td>
\t\t\t\t\t\t\t<td>HTML</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</tbody>
\t\t\t\t</table>
\t\t\t</div>
\t\t</div>
\t\t
\t\t<h4>5. Combine them all!</h4>
\t\t
\t\t<div class=\"row\">
\t\t\t<div class=\"span5\">
\t\t\t\t<p>Feel free to combine any of the table classes to achieve different looks by utilizing any of the available classes.</p>
<pre class=\"prettyprint linenums nomargin-bottom\">
&lt;table class=\"table table-striped table-bordered table-condensed\"&gt;
  ...
&lt;/table&gt;
</pre>
\t\t\t</div>
\t\t\t<div class=\"span7\">
\t\t\t\t<table class=\"table table-striped table-bordered table-condensed nomargin-bottom\">
\t\t\t\t\t<thead>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th>#</th>
\t\t\t\t\t\t\t<th class=\"yellow\">First Name</th>
\t\t\t\t\t\t\t<th class=\"blue\">Last Name</th>
\t\t\t\t\t\t\t<th class=\"green\">Language</th>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</thead>
\t\t\t\t\t<tbody>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>1</td>
\t\t\t\t\t\t\t<td>Mark</td>
\t\t\t\t\t\t\t<td>Otto</td>
\t\t\t\t\t\t\t<td>CSS</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>2</td>
\t\t\t\t\t\t\t<td>Jacob</td>
\t\t\t\t\t\t\t<td>Thornton</td>
\t\t\t\t\t\t\t<td>Javascript</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>3</td>
\t\t\t\t\t\t\t<td>Stu</td>
\t\t\t\t\t\t\t<td>Dent</td>
\t\t\t\t\t\t\t<td>HTML</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>4</td>
\t\t\t\t\t\t\t<td>Brosef</td>
\t\t\t\t\t\t\t<td>Stalin</td>
\t\t\t\t\t\t\t<td>HTML</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</tbody>
\t\t\t\t</table>
\t\t\t</div>
\t\t</div>
\t</section>
\t
\t<hr></hr>
\t
\t<section id=\"forms\">
\t\t<h2 class=\"tall\">Forms</h2>
\t\t
\t\t<form class=\"nomargin-bottom\">
\t\t\t<fieldset>\t\t\t\t
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"control-group span4\">
\t\t\t\t\t\t<label class=\"control-label\" for=\"input01\">Text input:</label>
\t\t\t\t\t\t<div class=\"controls\">
\t\t\t\t\t\t\t<input type=\"text\" class=\"span4\" id=\"input01\">
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"control-group span4\">
\t\t\t\t\t\t<label class=\"control-label\" for=\"select01\">Select list:</label>
\t\t\t\t\t\t<div class=\"controls\">
\t\t\t\t\t\t\t<select id=\"select01\" class=\"span4\">
\t\t\t\t\t\t\t\t<option>Choose something</option>
\t\t\t\t\t\t\t\t<option>2</option>
\t\t\t\t\t\t\t\t<option>3</option>
\t\t\t\t\t\t\t\t<option>4</option>
\t\t\t\t\t\t\t\t<option>5</option>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"control-group span4\">
\t\t\t\t\t\t<label class=\"control-label\" for=\"input01\">Text input:</label>
\t\t\t\t\t\t<div class=\"controls\">
\t\t\t\t\t\t\t<input type=\"text\" class=\"span4\" id=\"input01\">
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"control-group span4\">
\t\t\t\t\t\t<label class=\"control-label\" for=\"multiSelect\">Multicon-select:</label>
\t\t\t\t\t\t<div class=\"controls\">
\t\t\t\t\t\t\t<select multiple=\"multiple\" id=\"multiSelect\" class=\"span4\">
\t\t\t\t\t\t\t\t<option>1</option>
\t\t\t\t\t\t\t\t<option>2</option>
\t\t\t\t\t\t\t\t<option>3</option>
\t\t\t\t\t\t\t\t<option>4</option>
\t\t\t\t\t\t\t\t<option>5</option>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"control-group span8\">
\t\t\t\t\t\t<label class=\"control-label\" for=\"textarea\">Textarea:</label>
\t\t\t\t\t\t<div class=\"controls\">
\t\t\t\t\t\t\t<textarea id=\"textarea\" rows=\"3\" class=\"span8\"></textarea>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"control-group span4 nomargin-bottom\">
\t\t\t\t\t\t<label class=\"control-label\" for=\"input01\">Text input with a help block:</label>
\t\t\t\t\t\t<div class=\"controls\">
\t\t\t\t\t\t\t<input type=\"text\" class=\"span4\" id=\"input01\">
\t\t\t\t\t\t\t<p class=\"help-block\">In addition to freeform text, any HTML5 text-based input appears like so.</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"control-group span4 nomargin-bottom\">
\t\t\t\t\t\t<label class=\"control-label\" for=\"fileInput\">File input:</label>
\t\t\t\t\t\t<div class=\"controls\">
\t\t\t\t\t\t\t<input class=\"input-files span8 centered\" id=\"fileInput\" type=\"file\">
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"control-group span4 nomargin-bottom\">
\t\t\t\t\t\t<label class=\"control-label\" for=\"optionsCheckbox\">Checkbox:</label>
\t\t\t\t\t\t<div class=\"controls\">
\t\t\t\t\t\t\t<label class=\"checkbox centered\">
\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"optionsCheckbox\" value=\"option1\">
\t\t\t\t\t\t\t\tOption one is this and that&mdash;be sure to include why it's great
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t<div class=\"form-actions\">
\t\t\t\t\t<div class=\"btn-toolbar nomargin-bottom\">
\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary\">Save changes</button>
\t\t\t\t\t\t<button type=\"reset\" class=\"btn\">Cancel</button>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</fieldset>
\t\t</form>
\t\t
\t\t<hr class=\"secondary\"></hr>
  
\t\t<h3 class=\"tall\">Form Control States</h3>

\t\t<div class=\"row\">
\t\t\t<div class=\"span8\">
\t\t\t\t<form class=\"nomargin-bottom\">
\t\t\t\t\t<fieldset>
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"control-group span4\">
\t\t\t\t\t\t\t\t<label class=\"control-label\" for=\"focusedInput\">Focused input</label>
\t\t\t\t\t\t\t\t<div class=\"controls\">
\t\t\t\t\t\t\t\t\t<input class=\"focused span4\" id=\"focusedInput\" type=\"text\" value=\"This is focused…\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"control-group span4\">
\t\t\t\t\t\t\t\t<label class=\"control-label\">Uneditable input</label>
\t\t\t\t\t\t\t\t<div class=\"controls\">
\t\t\t\t\t\t\t\t\t<span class=\"uneditable-input span4\">Some value here</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"control-group span4\">
\t\t\t\t\t\t\t\t<label class=\"control-label\" for=\"disabledInput\">Disabled input</label>
\t\t\t\t\t\t\t\t<div class=\"controls\">
\t\t\t\t\t\t\t\t\t<input class=\"disabled span4\" id=\"disabledInput\" type=\"text\" placeholder=\"Disabled input here…\" disabled>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"control-group span4\">
\t\t\t\t\t\t\t\t<label class=\"control-label\" for=\"optionsCheckbox2\">Disabled checkbox</label>
\t\t\t\t\t\t\t\t<div class=\"controls\">
\t\t\t\t\t\t\t\t\t<label class=\"checkbox centered\">
\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"optionsCheckbox2\" value=\"option1\" disabled>
\t\t\t\t\t\t\t\t\t\tThis is a disabled checkbox
\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"control-group warning span4\">
\t\t\t\t\t\t\t\t<label class=\"control-label\" for=\"inputWarning\">Input with warning</label>
\t\t\t\t\t\t\t\t<div class=\"controls\">
\t\t\t\t\t\t\t\t\t<input type=\"text\" id=\"inputWarning\" class=\"span4\">
\t\t\t\t\t\t\t\t\t<span class=\"help-block\">Something may have gone wrong</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"control-group error span4\">
\t\t\t\t\t\t\t\t<label class=\"control-label\" for=\"inputError\">Input with error</label>
\t\t\t\t\t\t\t\t<div class=\"controls\">
\t\t\t\t\t\t\t\t\t<input type=\"text\" id=\"inputError\" class=\"span4\">
\t\t\t\t\t\t\t\t\t<span class=\"help-block\">Please correct the error</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"control-group success span4 nomargin-bottom\">
\t\t\t\t\t\t\t\t<label class=\"control-label\" for=\"inputSuccess\">Input with success</label>
\t\t\t\t\t\t\t\t<div class=\"controls\">
\t\t\t\t\t\t\t\t\t<input type=\"text\" id=\"inputSuccess\" class=\"span4\">
\t\t\t\t\t\t\t\t\t<span class=\"help-block\">Woohoo!</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"control-group success span4 nomargin-bottom\">
\t\t\t\t\t\t\t\t<label class=\"control-label\" for=\"selectError\">Select with success</label>
\t\t\t\t\t\t\t\t<div class=\"controls\">
\t\t\t\t\t\t\t\t\t<select id=\"selectError\" class=\"span4\">
\t\t\t\t\t\t\t\t\t\t<option>1</option>
\t\t\t\t\t\t\t\t\t\t<option>2</option>
\t\t\t\t\t\t\t\t\t\t<option>3</option>
\t\t\t\t\t\t\t\t\t\t<option>4</option>
\t\t\t\t\t\t\t\t\t\t<option>5</option>
\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t<span class=\"help-block\">Woohoo!</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"form-actions\">
\t\t\t\t\t\t\t<div class=\"btn-toolbar nomargin-bottom\">
\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary\">Save changes</button>
\t\t\t\t\t\t\t\t<button type=\"reset\" class=\"btn\">Cancel</button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</fieldset>
\t\t\t\t</form>
\t\t\t</div>
\t\t\t<div class=\"span4\">
\t\t\t\t<h4>Redesigned browser states</h4>
\t\t\t\t
\t\t\t\t<p>Bootstrap features styles for browser-supported focused and <code>disabled</code> states. We remove the default Webkit <code>outline</code> and apply a <code>box-shadow</code> in it's place for <code>:focus</code>.</p>
\t\t\t\t
\t\t\t\t<hr class=\"secondary\"></hr>
\t\t\t\t
\t\t\t\t<h4>Form validation</h4>
\t\t\t\t
\t\t\t\t<p>It also includes validation styles for errors, warnings, and success. To use, add the error class to the surrounding <code>.control-group</code>.</p>
\t\t\t\t
<pre class=\"prettyprint linenums nomargin-bottom\">
&lt;fieldset
class=\"control-group error\"&gt;
  …
&lt;/fieldset&gt;
</pre>
\t\t\t</div>
\t\t</div>
\t\t
\t\t<hr class=\"secondary\"></hr>
  
\t\t<h3 class=\"tall\">Extending Form Controls</h3>

\t\t<div class=\"row\">
\t\t\t<div class=\"span8\">
\t\t\t\t<form class=\"nomargin-bottom\">
\t\t\t\t\t<fieldset>
\t\t\t\t\t\t<div class=\"control-group\">
\t\t\t\t\t\t\t<label class=\"control-label\">Form sizes</label>
\t\t\t\t\t\t\t<div class=\"controls\">
\t\t\t\t\t\t\t\t<input class=\"span2\" type=\"text\" placeholder=\".span2\">
\t\t\t\t\t\t\t\t<input class=\"span4\" type=\"text\" placeholder=\".span4\">

\t\t\t\t\t\t\t\t<p class=\"help-block\" style=\"margin-top: 5px\">Use the same <code>.span*</code> classes from the grid system for input sizes.</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"control-group span4\">
\t\t\t\t\t\t\t\t<label class=\"control-label\" for=\"prependedInput\">Prepended text</label>
\t\t\t\t\t\t\t\t<div class=\"controls\">
\t\t\t\t\t\t\t\t\t<div class=\"input-prepend\">
\t\t\t\t\t\t\t\t\t\t<span class=\"add-on\">@</span>
\t\t\t\t\t\t\t\t\t\t<input class=\"span3\" id=\"prependedInput\" size=\"16\" type=\"text\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<p class=\"help-block\">Here's some help text</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"control-group span4\">
\t\t\t\t\t\t\t\t<label class=\"control-label\" for=\"appendedInput\">Appended text</label>
\t\t\t\t\t\t\t\t<div class=\"controls\">
\t\t\t\t\t\t\t\t\t<div class=\"input-append\">
\t\t\t\t\t\t\t\t\t\t<input class=\"span3\" id=\"appendedInput\" size=\"16\" type=\"text\">
\t\t\t\t\t\t\t\t\t\t<span class=\"add-on\">.00</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<p class=\"help-block\">Here's more help text</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"control-group\">
\t\t\t\t\t\t\t<label class=\"control-label\" for=\"inlineCheckboxes\">Inline checkboxes</label>
\t\t\t\t\t\t\t<div class=\"controls\">
\t\t\t\t\t\t\t\t<label class=\"checkbox inline\">
\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"inlineCheckbox1\" value=\"option1\"> 1
\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t<label class=\"checkbox inline\">
\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"inlineCheckbox2\" value=\"option2\"> 2
\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t<label class=\"checkbox inline\">
\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"inlineCheckbox3\" value=\"option3\"> 3
\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"control-group span4 nomargin-bottom\">
\t\t\t\t\t\t\t\t<label class=\"control-label\" for=\"optionsCheckboxList\">Checkboxes</label>
\t\t\t\t\t\t\t\t<div class=\"controls\">
\t\t\t\t\t\t\t\t\t<label class=\"checkbox\">
\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"optionsCheckboxList1\" value=\"option1\">
\t\t\t\t\t\t\t\t\t\tOption one is this and that&mdash;be sure to include why it's great
\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<label class=\"checkbox\">
\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"optionsCheckboxList2\" value=\"option2\">
\t\t\t\t\t\t\t\t\t\tOption two can also be checked and included in form results
\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<label class=\"checkbox\">
\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"optionsCheckboxList3\" value=\"option3\">
\t\t\t\t\t\t\t\t\t\tOption three can&mdash;yes, you guessed it&mdash;also be checked and included in form results
\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<p class=\"help-block\"><strong>Note:</strong> Labels surround all the options for much larger click areas and a more usable form.</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"control-group span4 nomargin-bottom\">
\t\t\t\t\t\t\t\t<label class=\"control-label\">Radio buttons</label>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"controls\">
\t\t\t\t\t\t\t\t\t<label class=\"radio\">
\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"optionsRadios\" id=\"optionsRadios1\" value=\"option1\" checked>
\t\t\t\t\t\t\t\t\t\tOption one is this and that&mdash;be sure to include why it's great
\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t<label class=\"radio\">
\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"optionsRadios\" id=\"optionsRadios2\" value=\"option2\">
\t\t\t\t\t\t\t\t\t\tOption two can is something else and selecting it will deselect option one
\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"form-actions\">
\t\t\t\t\t\t\t<div class=\"btn-toolbar nomargin-bottom\">
\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary\">Save changes</button>
\t\t\t\t\t\t\t\t<button type=\"reset\" class=\"btn\">Cancel</button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</fieldset>
\t\t\t\t</form>
\t\t\t</div>
\t\t\t<div class=\"span4\">
\t\t\t\t<h4>Prepend &amp; append inputs</h4>
\t\t\t\t
\t\t\t\t<p>Input groups&mdash;with appended or prepended text&mdash;provide an easy way to give more context for your inputs. Great examples include the @ sign for Twitter usernames or \$ for finances.</p>
\t\t\t\t
\t\t\t\t<hr class=\"secondary\"></hr>
\t\t\t\t
\t\t\t\t<h4>Checkboxes and radios</h4>
\t\t\t\t
\t\t\t\t<p>Extra markup around checkboxes and radios is needed to stack them. Now, it's a simple matter of repeating the <code>&lt;label class=\"checkbox\"&gt;</code> that wraps the <code>&lt;input type=\"checkbox\"&gt;</code>.</p>
\t\t\t\t
\t\t\t\t<p>Inline checkboxes and radios are also supported. Just add <code>.inline</code> to any <code>.checkbox</code> or <code>.radio</code> and you're done.</p>
\t\t\t\t
\t\t\t\t<p>If you want to center a <code>.checkbox</code> or <code>.radio</code> relative to another input field, add <code>.centered</code>.</p>
\t\t\t\t
\t\t\t\t<hr class=\"secondary\"></hr>
\t\t\t\t
\t\t\t\t<h4>Inline forms and append/prepend</h4>
\t\t\t\t
\t\t\t\t<p>To use prepend or append inputs in an inline form, be sure to place the <code>.add-on</code> and <code>input</code> on the same line, without spaces.</p>
\t\t\t\t
\t\t\t\t<hr class=\"secondary\"></hr>
\t\t\t\t
\t\t\t\t<h4>Form help text</h4>
\t\t\t\t
\t\t\t\t<p class=\"nomargin-bottom\">To add help text for your form inputs, include inline help text with <code>&lt;span class=\"help-inline\"&gt;</code> or a help text block with <code>&lt;p class=\"help-block\"&gt;</code> after the input element.</p>
\t\t\t</div>
\t\t</div>
\t</section>
\t
\t<hr></hr>
\t
\t<section id=\"buttons\">
\t\t<h2 class=\"tall\">Buttons</h2>
\t\t
\t\t<div class=\"row\">
\t\t\t<div class=\"span4\">
\t\t\t\t<h4>Buttons for actions</h4>
\t\t\t\t<p>As a convention, buttons should only be used for actions while hyperlinks are to be used for objects. For instance, \"Download\" should be a button while \"recent activity\" should be a link.</p>
\t\t\t\t<p class=\"nomargin-bottom\"><strong>Note:</strong> All buttons must include the <code>.btn</code> class. Button styles should be applied to <code>&lt;button&gt;</code> and <code>&lt;a&gt;</code> elements for consistency.</p>
\t\t\t</div>
\t\t\t<div class=\"span4\">
\t\t\t\t<h4>For anchors and forms</h4>
\t\t\t\t<p class=\"nomargin-bottom\">Button styles can be applied to anything with the <code>.btn</code> applied. However, typically you'll want to apply these to only <code>&lt;a&gt;</code> and <code>&lt;button&gt;</code> elements.</p>
\t\t\t</div>
\t\t\t<div class=\"span4\">
\t\t\t\t<h4>Cross browser compatibility</h4>
\t\t\t\t<p>In IE9, we drop the gradient on all buttons in favor of rounded corners as IE9 doesn't crop background gradients to the corners.</p>
\t\t\t\t<p class=\"nomargin-bottom\">Related, IE9 jankifies disabled <code>button</code> elements, rendering text gray with a nasty text-shadow&mdash;unfortunately we can't fix this.</p>
\t\t\t</div>
\t\t</div>
\t\t
\t\t<hr class=\"secondary\"></hr>
\t\t
\t\t<h3 class=\"tall\">Button Types</h3>
\t\t
\t\t<table class=\"table table-bordered table-striped\">
\t\t\t<thead>
\t\t\t\t<tr>
\t\t\t\t\t<th>Button</th>
\t\t\t\t\t<th>Class</th>
\t\t\t\t\t<th>Description</th>
\t\t\t\t</tr>
\t\t\t</thead>
\t\t\t<tbody>
\t\t\t\t<tr>
\t\t\t\t\t<td>
\t\t\t\t\t\t<a class=\"btn\" href=\"#\">Default Button</a>
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<code>.btn</code>
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\tStandard gray button with gradient
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td>
\t\t\t\t\t\t<a class=\"btn btn-primary\" href=\"#\">Primary Button</a>
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<code>.btn-primary</code>
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\tProvides extra visual weight and identifies the primary action in a set of buttons
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td>
\t\t\t\t\t\t<a class=\"btn btn-success\" href=\"#\">Success Button</a>
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<code>.btn-success</code>
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\tIndicates a successful or positive action
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td>
\t\t\t\t\t\t<a class=\"btn btn-danger\" href=\"#\">Danger Button</a>
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<code>.btn-danger</code>
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\tIndicates a dangerous or potentially negative action
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t</tbody>
\t\t</table>
\t\t
\t\t<hr class=\"secondary\"></hr>
\t\t
\t\t<h3 class=\"tall\" id=\"alternate_button_styling\">Alternate Button Styling</h3>
\t\t
\t\t<table class=\"table table-bordered table-striped\">
\t\t\t<thead>
\t\t\t\t<tr>
\t\t\t\t\t<th>Example</th>
\t\t\t\t\t<th>Class</th>
\t\t\t\t\t<th>Description</th>
\t\t\t\t</tr>
\t\t\t</thead>
\t\t\t<tbody>
\t\t\t\t<tr>
\t\t\t\t\t<td>
\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-large btn-primary\">Primary action</a>
\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-large\">Action</a>
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<code>.btn-large</code>
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\tLarge button styling
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td>
\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-large btn-primary disabled\">Primary action</a>
\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-large disabled\">Action</a>
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<code>.btn-disabled</code>
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\tDisabled links and <code>:disabled</code> for <code>&lt;button&gt;</code> elements.
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td>
\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-small btn-primary\">Primary action</a>
\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-small\">Action</a>
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<code>.btn-small</code>
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\tSmall button styling
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td>
\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-primary btn-large btn-icon-only\">
\t\t\t\t\t\t\t<i class=\"icon-gear icon-white-shadowed\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-large btn-icon-only\">
\t\t\t\t\t\t\t<i class=\"icon-gear icon-shadowed\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-icon-only\">
\t\t\t\t\t\t\t<i class=\"icon-gear icon-shadowed\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-small btn-icon-only\">
\t\t\t\t\t\t\t<i class=\"icon-gear icon-shadowed\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<code>.btn-icon-only</code>
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\tButton with no text, only an icon
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td>
\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-primary btn-large btn-rounded\">
\t\t\t\t\t\t\tAction
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-large btn-rounded\">
\t\t\t\t\t\t\tAction
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-rounded\">
\t\t\t\t\t\t\tAction
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-rounded btn-icon-only\">
\t\t\t\t\t\t\t<i class=\"icon-gear icon-shadowed\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-small btn-rounded\">
\t\t\t\t\t\t\tAction
\t\t\t\t\t\t</a>
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<code>.btn-rounded</code>
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\tRounded button
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td>
\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-primary btn-flat btn-large\">
\t\t\t\t\t\t\tAction
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-flat btn-large\">
\t\t\t\t\t\t\tAction
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-flat\">
\t\t\t\t\t\t\tAction
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-flat btn-small\">
\t\t\t\t\t\t\tAction
\t\t\t\t\t\t</a>
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<code>.btn-flat</code>
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\tFlat mono-tone buttons
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t</tbody>
\t\t</table>
\t\t
\t\t<hr class=\"secondary\"></hr>
\t\t
\t\t<h3 class=\"tall\" id=\"button_groups\">Button groups <small>Join buttons for more toolbar-like functionality</small></h3>
\t\t
\t\t<div class=\"row\">
\t\t\t<div class=\"span5\">
\t\t\t\t<p>Use button groups to join multiple buttons together as one composite component. Build them with a series of <code>&lt;a&gt;</code> or <code>&lt;button&gt;</code> elements.</p>
\t\t\t\t
\t\t\t\t<p class=\"tall\">You can also combine sets of <code>&lt;div class=\"btn-group\"&gt;</code> into a <code>&lt;div class=\"btn-toolbar\"&gt;</code> for more complex projects.</p>
\t\t\t\t
\t\t\t\t<div class=\"btn-toolbar\">
\t\t\t\t\t<div class=\"btn-group\">
\t\t\t\t\t\t<a class=\"btn\" href=\"#\">Left</a>
\t\t\t\t\t\t<a class=\"btn\" href=\"#\">Middle</a>
\t\t\t\t\t\t<a class=\"btn\" href=\"#\">Right</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t
\t\t\t\t<div class=\"btn-toolbar nomargin-bottom\">
\t\t\t\t\t<div class=\"btn-group\">
\t\t\t\t\t\t<a class=\"btn\" href=\"#\">1</a>
\t\t\t\t\t\t<a class=\"btn\" href=\"#\">2</a>
\t\t\t\t\t\t<a class=\"btn\" href=\"#\">3</a>
\t\t\t\t\t\t<a class=\"btn\" href=\"#\">4</a>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"btn-group\">
\t\t\t\t\t\t<a class=\"btn\" href=\"#\">5</a>
\t\t\t\t\t\t<a class=\"btn\" href=\"#\">6</a>
\t\t\t\t\t\t<a class=\"btn\" href=\"#\">7</a>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"btn-group\">
\t\t\t\t\t\t<a class=\"btn\" href=\"#\">8</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"span7\">\t\t\t
\t\t\t\t<h4 class=\"tall\">Example markup</h4>
\t\t\t\t
\t\t\t\t<p>Here's how the HTML looks for a standard button group built with anchor tag buttons:</p>
\t\t\t\t
<pre class=\"prettyprint linenums\">
&lt;div class=\"btn-group\"&gt;
  &lt;a class=\"btn\" href=\"#\"&gt;1&lt;/a&gt;
  &lt;a class=\"btn\" href=\"#\"&gt;2&lt;/a&gt;
  &lt;a class=\"btn\" href=\"#\"&gt;3&lt;/a&gt;
&lt;/div&gt;
</pre>
\t\t\t\t
\t\t\t\t<p>And with a toolbar for multiple groups:</p>
\t\t\t\t
<pre class=\"prettyprint linenums nomargin-bottom\">
&lt;div class=\"btn-toolbar\"&gt;
  &lt;div class=\"btn-group\"&gt;
    ...
  &lt;/div&gt;
&lt;/div&gt;
</pre>
\t\t\t</div>
\t\t</div>
\t\t
\t\t<hr class=\"secondary\"></hr>
\t\t
\t\t<h3 class=\"tall\" id=\"button_dropdowns\">Button Dropdowns <small>Contextual dropdown menus built on button groups</small></h3>
\t\t
\t\t<div class=\"row\">
\t\t\t<div class=\"span5\">
\t\t\t\t<p class=\"tall\">Use any button to trigger a dropdown menu by placing it within a <code>.btn-group</code> and providing the proper menu markup.</p>
\t\t\t\t
\t\t\t\t<div class=\"btn-toolbar\">
\t\t\t\t\t<div class=\"btn-group\">
\t\t\t\t\t\t<a class=\"btn dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">Action <span class=\"caret\"></span></a>
\t\t\t\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t\t\t<li><a href=\"#\">Action</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\">Another action</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\">Something else here</a></li>
\t\t\t\t\t\t\t<li class=\"divider\"></li>
\t\t\t\t\t\t\t<li><a href=\"#\">Separated link</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t<div class=\"btn-group\">
\t\t\t\t\t\t<a class=\"btn btn-primary dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">Action <span class=\"caret\"></span></a>
\t\t\t\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t\t\t<li><a href=\"#\">Action</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\">Another action</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\">Something else here</a></li>
\t\t\t\t\t\t\t<li class=\"divider\"></li>
\t\t\t\t\t\t\t<li><a href=\"#\">Separated link</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t<div class=\"btn-group\">
\t\t\t\t\t\t<a class=\"btn btn-success dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">Success <span class=\"caret\"></span></a>
\t\t\t\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t\t\t<li><a href=\"#\">Action</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\">Another action</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\">Something else here</a></li>
\t\t\t\t\t\t\t<li class=\"divider\"></li>
\t\t\t\t\t\t\t<li><a href=\"#\">Separated link</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t<div class=\"btn-group\">
\t\t\t\t\t\t<a class=\"btn btn-danger dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">Danger <span class=\"caret\"></span></a>
\t\t\t\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t\t\t<li><a href=\"#\">Action</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\">Another action</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\">Something else here</a></li>
\t\t\t\t\t\t\t<li class=\"divider\"></li>
\t\t\t\t\t\t\t<li><a href=\"#\">Separated link</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t<div class=\"btn-toolbar\">
\t\t\t\t\t<div class=\"btn-group\">
\t\t\t\t\t\t<a class=\"btn btn-large dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">Large Button <span class=\"caret\"></span></a>
\t\t\t\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t\t\t<li><a href=\"#\">Action</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\">Another action</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\">Something else here</a></li>
\t\t\t\t\t\t\t<li class=\"divider\"></li>
\t\t\t\t\t\t\t<li><a href=\"#\">Separated link</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t<div class=\"btn-toolbar\">
\t\t\t\t\t<div class=\"btn-group\">
\t\t\t\t\t\t<a class=\"btn btn-small dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">Small Button <span class=\"caret\"></span></a>
\t\t\t\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t\t\t<li><a href=\"#\">Action</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\">Another action</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\">Something else here</a></li>
\t\t\t\t\t\t\t<li class=\"divider\"></li>
\t\t\t\t\t\t\t<li><a href=\"#\">Separated link</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"span7\">\t\t\t\t
\t\t\t\t<h4 class=\"tall\">Example markup</h4>
\t\t\t\t
\t\t\t\t<p>Similar to a button group, our markup uses regular button markup, but with a handful of additions to refine the style and support Bootstrap's dropdown jQuery plugin.</p>
<pre class=\"prettyprint linenums tall\">
&lt;div class=\"btn-group\"&gt;
  &lt;a class=\"btn dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\"&gt;
    Action
    &lt;span class=\"caret\"&gt;&lt;/span&gt;
  &lt;/a&gt;
  &lt;ul class=\"dropdown-menu\"&gt;
    &lt;!-- dropdown menu links --&gt;
  &lt;/ul&gt;
&lt;/div&gt;
</pre>
\t\t\t</div>
\t\t</div>
\t\t
\t\t
\t\t<div class=\"row\">
\t\t\t<div class=\"span5\">
\t\t\t\t<h4 class=\"tall\">Split Button Dropdown</h4>
\t\t\t\t
\t\t\t\t<p class=\"tall\">Building on the button group styles and markup, we can easily create a split button. Split buttons feature a standard action on the left and a dropdown toggle on the right with contextual links.</p>
\t\t\t\t
\t\t\t\t<div class=\"btn-toolbar nomargin-bottom\">
\t\t\t\t\t<div class=\"btn-group\">
\t\t\t\t\t\t<a class=\"btn\" href=\"#\">
\t\t\t\t\t\t\tAction
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<a class=\"btn dropdown-toggle split\" data-toggle=\"dropdown\" href=\"#\">
\t\t\t\t\t\t\t<span class=\"caret\"></span>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t\t\t<li><a href=\"#\">Action</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\">Another action</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\">Something else here</a></li>
\t\t\t\t\t\t\t<li class=\"divider\"></li>
\t\t\t\t\t\t\t<li><a href=\"#\">Separated link</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t<div class=\"btn-group\">
\t\t\t\t\t\t<a class=\"btn btn-primary\" href=\"#\">
\t\t\t\t\t\t\tAction
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<a class=\"btn btn-primary dropdown-toggle split\" data-toggle=\"dropdown\" href=\"#\">
\t\t\t\t\t\t\t<span class=\"caret\"></span>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t\t\t<li><a href=\"#\">Action</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\">Another action</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\">Something else here</a></li>
\t\t\t\t\t\t\t<li class=\"divider\"></li>
\t\t\t\t\t\t\t<li><a href=\"#\">Separated link</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t<div class=\"btn-group\">
\t\t\t\t\t\t<a class=\"btn btn-success\" href=\"#\">
\t\t\t\t\t\t\tSuccess
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<a class=\"btn btn-success dropdown-toggle split\" data-toggle=\"dropdown\" href=\"#\">
\t\t\t\t\t\t\t<span class=\"caret\"></span>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t\t\t<li><a href=\"#\">Action</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\">Another action</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\">Something else here</a></li>
\t\t\t\t\t\t\t<li class=\"divider\"></li>
\t\t\t\t\t\t\t<li><a href=\"#\">Separated link</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t<div class=\"btn-group\">
\t\t\t\t\t\t<a class=\"btn btn-danger\" href=\"#\">
\t\t\t\t\t\t\tDanger
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<a class=\"btn btn-danger dropdown-toggle split\" data-toggle=\"dropdown\" href=\"#\">
\t\t\t\t\t\t\t<span class=\"caret\"></span>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t\t\t<li><a href=\"#\">Action</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\">Another action</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\">Something else here</a></li>
\t\t\t\t\t\t\t<li class=\"divider\"></li>
\t\t\t\t\t\t\t<li><a href=\"#\">Separated link</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"span7\">\t\t\t\t
\t\t\t\t<h4 class=\"tall\">Example markup</h4>
\t\t\t\t
\t\t\t\t<p>We expand on the normal button dropdowns to provide a second button action that operates as a separate dropdown trigger.</p>
\t\t\t\t
<pre class=\"prettyprint linenums nomargin-bottom\">
&lt;div class=\"btn-group\"&gt;
  &lt;a class=\"btn\" href=\"#\"&gt;Action&lt;/a&gt;
  &lt;a class=\"btn dropdown-toggle split\" data-toggle=\"dropdown\" href=\"#\"&gt;
    &lt;span class=\"caret\"&gt;&lt;/span&gt;
  &lt;/a&gt;
  &lt;ul class=\"dropdown-menu\"&gt;
    &lt;!-- dropdown menu links --&gt;
  &lt;/ul&gt;
&lt;/div&gt;
</pre>
\t\t\t</div>
\t\t</div>
\t\t
\t\t
\t</section>
\t
\t<hr></hr>
\t
\t<section id=\"icons\">
\t\t<h2 class=\"tall\">Icons</h2>

\t\t<h3 class=\"tall\">Available Icons</h3>
\t\t
\t\t<div class=\"row\">
\t\t\t<div class=\"span8\">
\t\t\t\t<table class=\"table table-bordered table-striped\">
\t\t\t\t\t<thead>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th>Icon</th>
\t\t\t\t\t\t\t<th>Class</th>
\t\t\t\t\t\t\t<th>Icon</th>
\t\t\t\t\t\t\t<th>Class</th>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</thead>
\t\t\t\t\t<tbody>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t<i class=\"icon-play\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<code>.icon-play</code>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t<i class=\"icon-plus\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<code>.icon-plus</code>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t<i class=\"icon-check\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<code>.icon-check</code>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t<i class=\"icon-share\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<code>.icon-share</code>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t<i class=\"icon-person\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<code>.icon-person</code>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t<i class=\"icon-location\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<code>.icon-location</code>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t<i class=\"icon-delete\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<code>.icon-delete</code>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t<i class=\"icon-search\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<code>.icon-search</code>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t<i class=\"icon-gear\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<code>.icon-gear</code>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t<i class=\"icon-globe\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<code>.icon-globe</code>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t<i class=\"icon-lock\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<code>.icon-lock</code>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t<i class=\"icon-facebook\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<code>.icon-facebook</code>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t<i class=\"icon-twitter\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<code>.icon-twitter</code>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t<i class=\"icon-wikipedia\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<code>.icon-wikipedia</code>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</tbody>
\t\t\t\t</table>
\t\t\t\t
\t\t\t\t<hr class=\"secondary\"></hr>
\t\t\t\t
\t\t\t\t<h3 class=\"tall\">Alternate Styling</h3>
\t\t\t\t
\t\t\t\t<table class=\"table table-bordered table-striped nomargin-bottom\">
\t\t\t\t\t<thead>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th>Name</th>
\t\t\t\t\t\t\t<th>Class</th>
\t\t\t\t\t\t\t<th>Example</th>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</thead>
\t\t\t\t\t<tbody>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\tWhite
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<code>.icon-white</code>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td style=\"background: #F77F00;\">
\t\t\t\t\t\t\t\t<i class=\"icon-check icon-white\"></i>
\t\t\t\t\t\t\t\t<i class=\"icon-twitter icon-white\"></i>
\t\t\t\t\t\t\t\t<i class=\"icon-facebook icon-white\"></i>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\tColor
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<code>.icon-color</code>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<i class=\"icon-check icon-color\"></i>
\t\t\t\t\t\t\t\t<i class=\"icon-twitter icon-color\"></i>
\t\t\t\t\t\t\t\t<i class=\"icon-facebook icon-color\"></i>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\tBlack (with shadow)
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<code>.icon-shadowed</code>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn\">
\t\t\t\t\t\t\t\t\t<i class=\"icon-check icon-shadowed\"></i>
\t\t\t\t\t\t\t\t\tButton
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\tWhite (with shadow)
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<code>.icon-white-shadowed</code>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-primary\">
\t\t\t\t\t\t\t\t\t<i class=\"icon-check icon-white-shadowed\"></i>
\t\t\t\t\t\t\t\t\tButton
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</tbody>
\t\t\t\t</table>
\t\t\t</div>
\t\t\t<div class=\"span4\">
\t\t\t\t<h4>Sprite Sheets</h4>
\t\t\t\t
\t\t\t\t<p>Instead of making every icon an extra request, we've compiled them into a sprite sheet, in which there is a sprite sheet for each color set (white, black).</p>
\t\t\t\t
\t\t\t\t<p class=\"tall\">All icons classes are prefixed with <code>.icon-</code> for proper namespacing and scoping, much like our other components. This will help avoid conflicts with other tools.</p>
\t\t\t\t
\t\t\t\t
\t\t\t\t<h4>Implementation</h4>
\t\t\t\t
\t\t\t\t<p>We have opted to use an <code>&lt;i&gt;</code> tag for all our icons, but they have no case class—only a shared prefix. To use, place the following code just about anywhere:<p>\t\t\t\t\t

<pre class=\"prettyprint linenums tall\">
&lt;i class=\"icon-search\"&gt;&lt;/i&gt;
</pre>

\t\t\t\t<h4>Examples</h4>
\t\t\t\t
\t\t\t\t<div class=\"btn-toolbar\">
\t\t\t\t\t<a href=\"#\" class=\"btn\">
\t\t\t\t\t\t<i class=\"icon-play icon-shadowed\"></i>
\t\t\t\t\t\tButton
\t\t\t\t\t</a>
\t\t\t\t\t<a href=\"#\" class=\"btn btn-success\">
\t\t\t\t\t\t<i class=\"icon-check icon-white-shadowed\"></i>
\t\t\t\t\t\tButton
\t\t\t\t\t</a>
\t\t\t\t\t<a href=\"#\" class=\"btn btn-danger\">
\t\t\t\t\t\t<i class=\"icon-delete icon-white-shadowed\"></i>
\t\t\t\t\t\tButton
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t<div class=\"input-prepend nomargin-bottom\">
\t\t\t\t\t<span class=\"add-on\">
\t\t\t\t\t\t<i class=\"icon-location\"></i>
\t\t\t\t\t</span>
\t\t\t\t\t<input class=\"span3\" id=\"inputIcon\" type=\"text\">
\t\t\t\t</div>
\t\t\t\t
\t\t\t</div>
\t\t</div>
\t</section>
\t
\t<hr></hr>

\t<section id=\"labels\">
\t\t<h2 class=\"tall\">Labels <small>Label and annotate text</small></h2>
\t\t
\t\t<table class=\"table table-bordered table-striped\">
\t\t\t<thead>
\t\t\t\t<tr>
\t\t\t\t\t<th>Labels</th>
\t\t\t\t\t<th>Markup</th>
\t\t\t\t</tr>
\t\t\t</thead>
\t\t\t<tbody>
\t\t\t\t<tr>
\t\t\t\t\t<td>
\t\t\t\t\t\t<span class=\"label\">Default</span>
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<code>&lt;span class=\"label\"&gt;Default&lt;/span&gt;</code>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td>
\t\t\t\t\t\t<span class=\"label label-success\">Success</span>
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<code>&lt;span class=\"label label-success\"&gt;New&lt;/span&gt;</code>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td>
\t\t\t\t\t\t<span class=\"label label-warning\">Warning</span>
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<code>&lt;span class=\"label label-warning\"&gt;Warning&lt;/span&gt;</code>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td>
\t\t\t\t\t\t<span class=\"label label-important\">Important</span>
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<code>&lt;span class=\"label label-important\"&gt;Important&lt;/span&gt;</code>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t</tbody>
\t\t</table>
\t</section>
\t
\t<hr></hr>

\t<section id=\"code\">
\t\t<h2 class=\"tall\">Code <small>Inline and block code snippets</small></h2>
\t\t
\t\t<div class=\"row\">
\t\t\t<div class=\"span4\">
\t\t\t\t<h3>Inline</h3>
\t\t\t\t<p>Wrap inline snippets of code with <code>&lt;code&gt;</code>.</p>
<pre class=\"prettyprint linenums short nomargin-bottom\">
For example, &lt;code&gt;section&lt;/code&gt; should be wrapped as inline.
</pre>
\t\t\t</div>
\t\t\t
\t\t\t<div class=\"span4\">
\t\t\t\t<h3>Basic block</h3>
\t\t\t\t<p>Use <code>&lt;pre&gt;</code> for multiple lines of code. Be sure to turn any carets into their unicode characters for proper rendering.</p>
<pre class=\"short\">
&lt;p&gt;Sample text here...&lt;/p&gt;
</pre>
<pre class=\"prettyprint linenums short\">
&lt;pre&gt;
  &amp;lt;p&amp;gt;Sample text here...&amp;lt;/p&amp;gt;
&lt;/pre&gt;
</pre>
\t\t\t\t<p class=\"nomargin-bottom\"><strong>Note:</strong> Be sure to keep code within <code>&lt;pre&gt;</code> tags as close to the left as possible; it will render all tabs.</p>
\t\t\t</div>
\t\t\t<div class=\"span4\">
\t\t\t\t<h3>Google Prettify</h3>
\t\t\t\t<p>Take the same <code>&lt;pre&gt;</code> element and add two optional classes for enhanced rendering.</p>
<pre class=\"prettyprint linenums short\">
&lt;p&gt;Sample text here...&lt;/p&gt;
</pre>
<pre class=\"prettyprint linenums short\">
&lt;pre class=\"prettyprint
linenums\"&gt;
  &amp;lt;p&amp;gt;Sample text here...&amp;lt;/p&amp;gt;
&lt;/pre&gt;
</pre>
\t\t\t\t<p class=\"nomargin-bottom\"><a href=\"http://code.google.com/p/google-code-prettify/\">Download google-code-prettify</a> and view the readme for <a href=\"http://google-code-prettify.googlecode.com/svn/trunk/README.html\">how to use</a>.</p>
\t\t\t</div>
\t\t</div>
\t</section>
";
    }

    public function getTemplateName()
    {
        return "pages/styling.php";
    }

    public function isTraitable()
    {
        return false;
    }
}
