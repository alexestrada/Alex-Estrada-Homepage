<?php

/* pages/modules.php */
class __TwigTemplate_7bcfe86a879b5d37c7c963735b866982 extends Twig_Template
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
        echo "\t<h1 class=\"nomargin-bottom\">Modules</h1>
\t<hr></hr>
";
    }

    // line 8
    public function block_page_body($context, array $blocks = array())
    {
        // line 9
        echo "

\t<section id=\"overview\">
\t\t<h2 class=\"tall\">Overview</h2>
\t\t
\t\t<p>
\t\t\tModules are the building blocks, the &quot;atoms&quot; of Grooveshark.  Modules can exist by themselves, or be grouped together in &quot;Category Views&quot;.  The use-case dictates how a module or modules should be displayed.
\t\t</p>
\t\t<p>
\t\t\tWhen a module is viewed independently, the intent is typically to showcase identity.  For example, a module representing a given <em>Artist</em> may be displayed independelty at the top of the <em>Artist's Profile</em> in order to establish context for the page.  At the same time, a module representing the same <em>Artist</em> could be grouped in a larger set of <em>artists</em>.
\t\t</p>
\t\t<p class=\"tall\">
\t\t\tThe information provided in <a href=\"/structure\">Structure</a> outlines when a module should be represented individually or as a part of set (<em>Category View</em>).  Below is a list of information or actions that may be present for a given module.
\t\t</p>
\t\t
\t\t<h3 class=\"tall\">Module components</h3>
\t\t
\t\t<table class=\"table table-bordered table-striped nomargin-bottom\">
\t\t\t<thead>
\t\t\t\t<tr>
\t\t\t\t\t<th width=\"150px\">Name</th>
\t\t\t\t\t<th width=\"150px\">Class</th>
\t\t\t\t\t<th>Description</th>
\t\t\t\t</tr>
\t\t\t</thead>
\t\t\t<tbody>
\t\t\t\t<tr>
\t\t\t\t\t<td>Headline</td>
\t\t\t\t\t<td><code>.headline</code></td>
\t\t\t\t\t<td>The title line for the module.  For example, the headline of a Song module would be the title of the Song.  For a post, the headline would summarize the activity of the Post.</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td>Byline</td>
\t\t\t\t\t<td><code>.byline</code></td>
\t\t\t\t\t<td>A secondary line to the headline.  Typically used to indicate ownership or association.  For example, the byline for a Playlist would be the author of the Playlist.</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td>Description</td>
\t\t\t\t\t<td><code>.description</code></td>
\t\t\t\t\t<td>A description of the given module.  This is typically a block of text.  For example, the description for a Artist module would be the biography of the Artist.</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td>Metadata</td>
\t\t\t\t\t<td><code>.metadata</code></td>
\t\t\t\t\t<td>Metadata associated with the given Module.  Often times, this is extended information beyond the Headline and Byline.  For example, the number of subscribers of a Playlist.</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td>Image</td>
\t\t\t\t\t<td><code>.image</code></td>
\t\t\t\t\t<td>An image or group of images used to visually represent a given Module.  For example, a Playlist Module would display a group of album covers representative of the collection of songs.</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td>Primary Actions</td>
\t\t\t\t\t<td><code>.actions.primary</code></td>
\t\t\t\t\t<td>Primary actions for the module.  Could be one or more actions that represent the most commonly expected actions for the module.</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td>Secondary Action</td>
\t\t\t\t\t<td><code>.actions.secondary</code></td>
\t\t\t\t\t<td>Secondary actions for the module.  Lesser used actions for the given module.  For example, purchasing a the .mp3 for given Song from iTunes.</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td>Flags</td>
\t\t\t\t\t<td><code>.flags</code></td>
\t\t\t\t\t<td>Visibly identifiable information related to the Module.  For example, a flag may be used to indicate whether a song is in a user's Collection.</td>
\t\t\t\t</tr>
\t\t\t</tbody>
\t\t</table>
\t</section>
\t
\t<hr></hr>
\t
\t<section id=\"moduleViews\">
\t\t<h2 class=\"tall\">Module views</h2>
\t\t
\t\t<p class=\"tall\">For most modules, multiple views are supported (e.g. cell, row, etc&hellip;).  The environment or application often determines which view is used.</p>
\t\t
\t\t<h3>Cell View</h3>
\t\t
\t\t<div class=\"row\">
\t\t\t<div class=\"span7\">
\t\t\t\t<p class=\"tall\">
\t\t\t\t\tThe cell view is the most common module view type.  To use, simply give your <code>.module</code> object the class <code>.module-cell</code>.  Think of it like a block object.  As a block it makes it easier to stack them vertically, horizontally, or as a grid of modules.
\t\t\t\t</p>
\t\t\t\t
\t\t\t\t<h4 class=\"tall\">Available Classes</h4>
\t\t\t\t
\t\t\t\t<table class=\"table table-bordered nomargin-bottom\">
\t\t\t\t\t<thead>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th>Class</th>
\t\t\t\t\t\t\t<th>Description</th>
\t\t\t\t\t\t\t<th width=\"70\">Image Size</th>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</thead>
\t\t\t\t\t<tbody>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td class=\"muted\">
\t\t\t\t\t\t\t\tDefault
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"module module-cell\">
\t\t\t\t\t\t\t\t\t<div class=\"image\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"actions primary\">
\t\t\t\t\t\t\t\t\t\t<div class=\"btn-group\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-flat btn-icon-only btn-rounded\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"icon-play icon-white\"></i>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"actions secondary\">
\t\t\t\t\t\t\t\t\t\t<div class=\"btn-toolbar\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"btn-group\">\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-small btn-icon-only\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"icon-plus icon-shadowed\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-small btn-icon-only\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"icon-share icon-shadowed\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-small dropdown-toggle btn-icon-only\" data-toggle=\"dropdown\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"icon-gear icon-shadowed\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"caret\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Add to Collection</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Add to Playlist</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"module-inner\">
\t\t\t\t\t\t\t\t\t\t<div class=\"headline\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Headline</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<ul class=\"byline\">
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Byline</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Byline</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t<ul class=\"metadata\">
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\tMetadata
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Metadata</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>50x50</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<code>.mini</code>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"module module-cell mini\">
\t\t\t\t\t\t\t\t\t<div class=\"image\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"actions primary\">
\t\t\t\t\t\t\t\t\t\t<div class=\"btn-group\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-flat btn-icon-only btn-rounded\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"icon-play icon-white\"></i>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"module-inner\">
\t\t\t\t\t\t\t\t\t\t<div class=\"headline\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Headline</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<ul class=\"metadata\">
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\tMetadata
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Metadata</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>40x40</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<code>.tall</code>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"module module-cell tall\">
\t\t\t\t\t\t\t\t\t<div class=\"image\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"actions primary\">
\t\t\t\t\t\t\t\t\t\t<div class=\"btn-group\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-large btn-flat btn-icon-only btn-rounded\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"icon-play icon-white\"></i>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"actions secondary\">
\t\t\t\t\t\t\t\t\t\t<div class=\"btn-toolbar\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"btn-group\">\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-success btn-small btn-icon-only\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"icon-check icon-white-shadowed\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-small btn-icon-only\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"icon-share icon-shadowed\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-small dropdown-toggle btn-icon-only\" data-toggle=\"dropdown\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"icon-gear icon-shadowed\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"caret\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Add to Collection</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Add to Playlist</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"module-inner\">
\t\t\t\t\t\t\t\t\t\t<div class=\"headline\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Headline</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<ul class=\"byline\">
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Byline</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Byline</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t<ul class=\"metadata\">
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\tMetadata
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Metadata</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>80x80</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<code>.vertical</code>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"module module-cell vertical\">
\t\t\t\t\t\t\t\t\t<div class=\"image\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"actions primary\">
\t\t\t\t\t\t\t\t\t\t<div class=\"btn-group\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-large btn-flat btn-icon-only btn-rounded\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"icon-play icon-white\"></i>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"actions secondary\">
\t\t\t\t\t\t\t\t\t\t<div class=\"btn-group\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-small btn-icon-only\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"icon-share icon-shadowed\"></i>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-small dropdown-toggle btn-icon-only\" data-toggle=\"dropdown\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"icon-gear icon-shadowed\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"caret\"></span>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Add to Collection</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Add to Playlist</a>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"module-inner\">
\t\t\t\t\t\t\t\t\t\t<div class=\"headline\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Headline</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<ul class=\"byline\">
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Byline</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Byline</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t<ul class=\"metadata\">
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\tMetadata
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Metadata</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>150x100</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<code>.no-byline</code>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"module module-cell no-byline\">
\t\t\t\t\t\t\t\t\t<div class=\"image\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"actions primary\">
\t\t\t\t\t\t\t\t\t\t<div class=\"btn-group\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-flat btn-icon-only btn-rounded\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"icon-play icon-white\"></i>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"actions secondary\">
\t\t\t\t\t\t\t\t\t\t<div class=\"btn-toolbar\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"btn-group\">\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-small btn-icon-only\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"icon-plus icon-shadowed\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-small btn-icon-only\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"icon-share icon-shadowed\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-small dropdown-toggle btn-icon-only\" data-toggle=\"dropdown\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"icon-gear icon-shadowed\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"caret\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Add to Collection</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Add to Playlist</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"module-inner\">
\t\t\t\t\t\t\t\t\t\t<div class=\"headline\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Headline</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<ul class=\"metadata\">
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\tMetadata
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Metadata</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td class=\"muted\">N/A</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<code>.no-metadata</code>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"module module-cell no-metadata\">
\t\t\t\t\t\t\t\t\t<div class=\"image\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"actions primary\">
\t\t\t\t\t\t\t\t\t\t<div class=\"btn-group\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-flat btn-icon-only btn-rounded\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"icon-play icon-white\"></i>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"actions secondary\">
\t\t\t\t\t\t\t\t\t\t<div class=\"btn-toolbar\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"btn-group\">\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-small btn-icon-only\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"icon-plus icon-shadowed\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-small btn-icon-only\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"icon-share icon-shadowed\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-small dropdown-toggle btn-icon-only\" data-toggle=\"dropdown\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"icon-gear icon-shadowed\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"caret\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Add to Collection</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Add to Playlist</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"module-inner\">
\t\t\t\t\t\t\t\t\t\t<div class=\"headline\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Headline</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<ul class=\"byline\">
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Byline</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Byline</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td class=\"muted\">N/A</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<code>.no-byline</code><br>
\t\t\t\t\t\t\t\t<code>.no-metadata</code>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"module module-cell no-metadata no-byline\">
\t\t\t\t\t\t\t\t\t<div class=\"image\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"actions primary\">
\t\t\t\t\t\t\t\t\t\t<div class=\"btn-group\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-flat btn-icon-only btn-rounded\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"icon-play icon-white\"></i>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"actions secondary\">
\t\t\t\t\t\t\t\t\t\t<div class=\"btn-toolbar\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"btn-group\">\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-small btn-icon-only\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"icon-plus icon-shadowed\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-small btn-icon-only\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"icon-share icon-shadowed\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-small dropdown-toggle btn-icon-only\" data-toggle=\"dropdown\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"icon-gear icon-shadowed\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"caret\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Add to Collection</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Add to Playlist</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"module-inner\">
\t\t\t\t\t\t\t\t\t\t<div class=\"headline\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Headline</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td class=\"muted\">N/A</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</tbody>
\t\t\t\t</table>
\t\t\t</div>
\t\t\t<div class=\"span5\">\t\t\t
<pre class=\"prettyprint linenums nomargin-bottom\">
&lt;div class=\"module module-cell\"&gt;
  &lt;div class=\"image\"&gt;
    ...
  &lt;/div&gt;
  &lt;ul class=\"actions primary\"&gt;
    &lt;div class=\"btn-group\"&gt;
      ...
    &lt;/div&gt;
  &lt;/ul&gt;
  &lt;ul class=\"actions secondary\"&gt;
    &lt;div class=\"btn-group\"&gt;
      ...
    &lt;/div&gt;
  &lt;/ul&gt;
  &lt;div class=\"module-inner\"&gt;
    &lt;div class=\"headline\"&gt;...&lt;/div&gt;
    &lt;ul class=\"byline\"&gt;
      &lt;li&gt;...&lt;/li&gt;
      &lt;li&gt;...&lt;/li&gt;
    &lt;/ul&gt;
    &lt;ul class=\"metadata\"&gt;
      &lt;li&gt;...&lt;/li&gt;
      &lt;li&gt;...&lt;/li&gt;
    &lt;/ul&gt;
  &lt;/div&gt;
&lt;/div&gt;
</pre>
\t\t\t</div>
\t\t</div>
\t\t
\t\t<hr class=\"secondary\"></hr>
\t\t
\t\t<h3>Row View</h3>
\t\t
\t\t<div class=\"row\">
\t\t\t<div class=\"span7\">
\t\t\t\t<p class=\"tall\">For most modules, multiple views are supported (e.g. cell, row, etc&hellip;).  The environment or application often determines which view is used.</p>
\t\t\t\t
\t\t\t\t<h4 class=\"tall\">Example:</h4>
\t\t\t\t
\t\t\t\t";
        // line 538
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(range(0, 4));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 539
            echo "\t\t\t\t<div class=\"module module-row\">\t\t\t\t\t\t
\t\t\t\t\t<div class=\"actions primary\">
\t\t\t\t\t\t<div class=\"btn-group\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-small btn-icon-only\">
\t\t\t\t\t\t\t\t<i class=\"icon-play icon-shadowed\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t<div class=\"actions secondary\">
\t\t\t\t\t\t<div class=\"btn-toolbar\">
\t\t\t\t\t\t\t<div class=\"btn-group\">\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-small btn-icon-only\">
\t\t\t\t\t\t\t\t\t<i class=\"icon-plus icon-shadowed\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-small btn-icon-only\">
\t\t\t\t\t\t\t\t\t<i class=\"icon-share icon-shadowed\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-small dropdown-toggle btn-icon-only\" data-toggle=\"dropdown\">
\t\t\t\t\t\t\t\t\t<i class=\"icon-gear icon-shadowed\"></i>
\t\t\t\t\t\t\t\t\t<span class=\"caret\"></span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Add to Collection</a>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Add to Playlist</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t<div class=\"module-inner\">
\t\t\t\t\t\t<div class=\"headline\">
\t\t\t\t\t\t\t<a href=\"#\">Headline</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t<ul class=\"byline\">
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#\">Byline</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#\">Byline</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t\t
\t\t\t\t\t\t<ul class=\"metadata\">
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\tMetadata
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#\">Metadata</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 596
        echo "\t\t\t</div>
\t\t\t<div class=\"span5\">\t\t\t
<pre class=\"prettyprint linenums nomargin-bottom\">
&lt;div class=\"module module-row\"&gt;
  &lt;div class=\"module-inner\"&gt;
    &lt;ul class=\"actions primary\"&gt;
      &lt;div class=\"btn-group\"&gt;
        ...
      &lt;/div&gt;
    &lt;/ul&gt;
    &lt;ul class=\"actions secondary\"&gt;
      &lt;div class=\"btn-group\"&gt;
        ...
      &lt;/div&gt;
    &lt;/ul&gt;
    &lt;div class=\"headline\"&gt;...&lt;/div&gt;
    &lt;ul class=\"byline\"&gt;
      &lt;li&gt;...&lt;/li&gt;
      &lt;li&gt;...&lt;/li&gt;
    &lt;/ul&gt;
    &lt;ul class=\"metadata\"&gt;
      &lt;li&gt;...&lt;/li&gt;
      &lt;li&gt;...&lt;/li&gt;
    &lt;/ul&gt;
  &lt;/div&gt;
&lt;/div&gt;
</pre>
\t\t\t</div>\t\t
\t\t</div>
\t\t
\t\t<hr class=\"secondary\"></hr>
\t\t
\t\t<h3>Profile Card View</h3>
\t\t
\t\t<div class=\"row\">
\t\t\t<div class=\"span7\">
\t\t\t\t<p>The Profile Card View is similar to the Cell View.  However, it's intended use is singular.  It is never shown in a category view, as it lives at the top of individual detail views (e.g. artist profile page, user profile page, etc…).</p>
\t\t\t\t
\t\t\t\t<p class=\"tall\">The Profile Card View also supports additional display components.  Namely, the addition of a <code>.description</code> (e.g. artist biography).  The <code>.flags</code> block is also used to display tags if available.  The metadata block</p>
\t\t\t\t
\t\t\t\t<h4 class=\"tall\">Example:</h4>
\t\t\t\t
\t\t\t\t<div class=\"module module-profile-card\">
\t\t\t\t\t<div class=\"actions\">
\t\t\t\t\t\t<div class=\"btn-toolbar\">
\t\t\t\t\t\t\t<div class=\"btn-group\">
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-small dropdown-toggle btn-icon-only\" data-toggle=\"dropdown\">
\t\t\t\t\t\t\t\t\t<i class=\"icon-gear icon-shadowed\"></i>
\t\t\t\t\t\t\t\t\t<span class=\"caret\"></span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Add to Collection</a>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Add to Playlist</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t<div class=\"image\">
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t<div class=\"module-inner\">
\t\t\t\t\t\t<ul class=\"flags\">
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"label label-success\">Flag</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"label\">Another Flag</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t\t
\t\t\t\t\t\t<ul class=\"byline\">
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#\">Byline</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#\">Some Longer Byline</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"description\">
\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce nec nibh sit amet ligula euismod elementum. Morbi a neque sed nisi tincidunt rutrum. Phasellus porttitor felis sit amet mi luctus <a href=\"#\">more&hellip;</a></p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t<ul class=\"metadata\">
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<i class=\"icon-location\"></i>
\t\t\t\t\t\t\t\tMetadata
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#\">\t
\t\t\t\t\t\t\t\t\t<i class=\"icon-wikipedia\"></i>
\t\t\t\t\t\t\t\t\tMetadata
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#\">\t
\t\t\t\t\t\t\t\t\t<i class=\"icon-facebook\"></i>
\t\t\t\t\t\t\t\t\tMetadata
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#\">\t
\t\t\t\t\t\t\t\t\t<i class=\"icon-twitter\"></i>
\t\t\t\t\t\t\t\t\tMetadata
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<hr class=\"secondary\"></hr>
\t\t\t</div>
\t\t\t<div class=\"span5\">\t\t\t
<pre class=\"prettyprint linenums nomargin-bottom\">
&lt;div class=\"module module-profile-card\"&gt;
  &lt;ul class=\"actions\"&gt;
    &lt;div class=\"btn-group\"&gt;
      ...
    &lt;/div&gt;
  &lt;/ul&gt;
  &lt;div class=\"image\"&gt;
    ...
  &lt;/div&gt;
  &lt;div class=\"module-inner\"&gt;
    &lt;ul class=\"flags\"&gt;
      &lt;li&gt;...&lt;/li&gt;
      &lt;li&gt;...&lt;/li&gt;
    &lt;/ul&gt;
    &lt;ul class=\"byline\"&gt;
      &lt;li&gt;...&lt;/li&gt;
      &lt;li&gt;...&lt;/li&gt;
    &lt;/ul&gt;
    &lt;div class=\"description\"&gt;...&lt;/div&gt;
    &lt;ul class=\"metadata\"&gt;
      &lt;li&gt;...&lt;/li&gt;
      &lt;li&gt;...&lt;/li&gt;
    &lt;/ul&gt;
  &lt;/div&gt;
&lt;/div&gt;
</pre>
\t\t\t</div>\t\t
\t\t</div>
\t</section>
\t
\t<hr></hr>
\t
\t<section id=\"song\">
\t\t<h2 class=\"tall\">Song Module</h2>
\t\t
\t\t<p class=\"tall\">
\t\t\tThe song is the most primitive object in Grooveshark. You could consider it the atom.  Being so important, song or songs are used throughout the application in varied of use-cases.  Below are the various ways a song module might be displayed.
\t\t</p>
\t\t
\t\t<table class=\"table table-bordered nomargin-bottom\">
\t\t\t<thead>
\t\t\t\t<tr>
\t\t\t\t\t<th width=\"300\">Class</th>
\t\t\t\t\t<th>Description</th>
\t\t\t\t</tr>
\t\t\t</thead>
\t\t\t<tbody>
\t\t\t\t<tr>
\t\t\t\t\t<td>
\t\t\t\t\t\t<code>.module-row</code>
\t\t\t\t\t\t<code>.song</code>
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<div class=\"module module-row song\">\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"actions primary\">
\t\t\t\t\t\t\t\t<div class=\"btn-group\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-small btn-icon-only\">
\t\t\t\t\t\t\t\t\t\t<i class=\"icon-play icon-shadowed\"></i>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"actions secondary\">
\t\t\t\t\t\t\t\t<div class=\"btn-toolbar\">
\t\t\t\t\t\t\t\t\t<div class=\"btn-group\">\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-small btn-icon-only\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"icon-plus icon-shadowed\"></i>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-small btn-icon-only\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"icon-share icon-shadowed\"></i>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-small dropdown-toggle btn-icon-only\" data-toggle=\"dropdown\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"icon-gear icon-shadowed\"></i>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"caret\"></span>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Add to Collection</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Add to Playlist</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"module-inner\">
\t\t\t\t\t\t\t\t<div class=\"headline\">
\t\t\t\t\t\t\t\t\t<a href=\"#\">Song Title</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<ul class=\"byline\">
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Artist Name</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Album Title</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<ul class=\"metadata\">
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t12,402 Plays
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t04:12
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td>
\t\t\t\t\t\t<code>.module-cell</code>
\t\t\t\t\t\t<code>.song</code>
\t\t\t\t\t</td>
\t\t\t\t\t<td>\t\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"module module-cell song\">
\t\t\t\t\t\t\t<div class=\"image\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"actions primary\">
\t\t\t\t\t\t\t\t<div class=\"btn-group\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-flat btn-icon-only btn-rounded\">
\t\t\t\t\t\t\t\t\t\t<i class=\"icon-play icon-white\"></i>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"actions secondary\">
\t\t\t\t\t\t\t\t<div class=\"btn-toolbar\">
\t\t\t\t\t\t\t\t\t<div class=\"btn-group\">\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-small btn-icon-only\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"icon-plus icon-shadowed\"></i>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-small btn-icon-only\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"icon-share icon-shadowed\"></i>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-small dropdown-toggle btn-icon-only\" data-toggle=\"dropdown\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"icon-gear icon-shadowed\"></i>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"caret\"></span>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Add to Collection</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Add to Playlist</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"module-inner\">
\t\t\t\t\t\t\t\t<div class=\"headline\">
\t\t\t\t\t\t\t\t\t<a href=\"#\">Headline</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<ul class=\"byline\">
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Byline</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Byline</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t<ul class=\"metadata\">
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\tMetadata
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Metadata</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td>
\t\t\t\t\t\t<code>.module-profile-card</code>
\t\t\t\t\t\t<code>.song</code>
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<div class=\"module module-profile-card song\">
\t\t\t\t\t\t\t<div class=\"actions\">
\t\t\t\t\t\t\t\t<div class=\"btn-toolbar\">
\t\t\t\t\t\t\t\t\t<div class=\"btn-group\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-small dropdown-toggle btn-icon-only\" data-toggle=\"dropdown\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"icon-gear icon-shadowed\"></i>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"caret\"></span>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Add to Collection</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Add to Playlist</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"image\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"module-inner\">
\t\t\t\t\t\t\t\t<ul class=\"flags\">
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<span href=\"#\" class=\"label\">Song</span>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"label\">Another Flag</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<ul class=\"byline\">
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\tby: <a href=\"#\">Artist Name</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Album Title</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"description\">
\t\t\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce nec nibh sit amet ligula euismod elementum. Morbi a neque sed nisi tincidunt rutrum. Phasellus porttitor felis sit amet mi luctus <a href=\"#\">more&hellip;</a></p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<ul class=\"metadata\">
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t04:12
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t12,402 Plays
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\">\t
\t\t\t\t\t\t\t\t\t\t\t2 of 14
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t</tbody>
\t\t</table>
\t</section>
\t
\t<hr></hr>
\t
\t<section id=\"artist\">
\t\t<h2 class=\"tall\">Artist Module</h2>
\t\t
\t\t<table class=\"table table-bordered nomargin-bottom\">
\t\t\t<thead>
\t\t\t\t<tr>
\t\t\t\t\t<th width=\"300\">Class</th>
\t\t\t\t\t<th>Description</th>
\t\t\t\t</tr>
\t\t\t</thead>
\t\t\t<tbody>
\t\t\t\t<tr>
\t\t\t\t\t<td>
\t\t\t\t\t\t<code>.module-cell</code>
\t\t\t\t\t\t<code>.artist</code>
\t\t\t\t\t</td>
\t\t\t\t\t<td>\t\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"module module-cell no-byline artist\">
\t\t\t\t\t\t\t<div class=\"image\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"actions primary\">
\t\t\t\t\t\t\t\t<div class=\"btn-group\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-flat btn-icon-only btn-rounded\">
\t\t\t\t\t\t\t\t\t\t<i class=\"icon-play icon-white\"></i>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"actions secondary\">
\t\t\t\t\t\t\t\t<div class=\"btn-toolbar\">
\t\t\t\t\t\t\t\t\t<div class=\"btn-group\">\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-small btn-icon-only\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"icon-plus icon-shadowed\"></i>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-small btn-icon-only\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"icon-share icon-shadowed\"></i>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-small dropdown-toggle btn-icon-only\" data-toggle=\"dropdown\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"icon-gear icon-shadowed\"></i>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"caret\"></span>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Add to Collection</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Add to Playlist</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"module-inner\">
\t\t\t\t\t\t\t\t<div class=\"headline\">
\t\t\t\t\t\t\t\t\t<a href=\"#\">Artist Name</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<ul class=\"metadata\">
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\">391 Songs</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\">1,401,687 Listens</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\">23,359 Fans</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td>
\t\t\t\t\t\t<code>.module-cell</code>
\t\t\t\t\t\t<code>.vertical</code>
\t\t\t\t\t\t<code>.artist</code>
\t\t\t\t\t</td>
\t\t\t\t\t<td>\t\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"module module-cell vertical artist\">
\t\t\t\t\t\t\t<div class=\"image\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"actions secondary\">
\t\t\t\t\t\t\t\t<div class=\"btn-toolbar\">
\t\t\t\t\t\t\t\t\t<div class=\"btn-group\">\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-small btn-icon-only\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"icon-plus icon-shadowed\"></i>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-small btn-icon-only\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"icon-share icon-shadowed\"></i>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-small dropdown-toggle btn-icon-only\" data-toggle=\"dropdown\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"icon-gear icon-shadowed\"></i>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"caret\"></span>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Add to Collection</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Add to Playlist</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"module-inner\">
\t\t\t\t\t\t\t\t<div class=\"headline\">
\t\t\t\t\t\t\t\t\t<a href=\"#\">Artist Name</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<ul class=\"metadata\">
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\">391 Songs</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\">23,359 Fans</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td>
\t\t\t\t\t\t<code>.module-profile-card</code>
\t\t\t\t\t\t<code>.artist</code>
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<div class=\"module module-profile-card artist\">
\t\t\t\t\t\t\t<div class=\"actions\">
\t\t\t\t\t\t\t\t<div class=\"btn-toolbar\">
\t\t\t\t\t\t\t\t\t<div class=\"btn-group\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-small dropdown-toggle btn-icon-only\" data-toggle=\"dropdown\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"icon-gear icon-shadowed\"></i>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"caret\"></span>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Add to Collection</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Add to Playlist</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"image\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"module-inner\">
\t\t\t\t\t\t\t\t<ul class=\"flags\">
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<span href=\"#\" class=\"label\">Artist</span>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"label\">Another Flag</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"description\">
\t\t\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce nec nibh sit amet ligula euismod elementum. Morbi a neque sed nisi tincidunt rutrum. Phasellus porttitor felis sit amet mi luctus <a href=\"#\">more&hellip;</a></p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<ul class=\"metadata\">
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t23,359 Fans
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<i class=\"icon-location\"></i>
\t\t\t\t\t\t\t\t\t\tLocation
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\">\t
\t\t\t\t\t\t\t\t\t\t\t<i class=\"icon-wikipedia\"></i>
\t\t\t\t\t\t\t\t\t\t\tWikipedia
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\">\t
\t\t\t\t\t\t\t\t\t\t\t<i class=\"icon-facebook\"></i>
\t\t\t\t\t\t\t\t\t\t\tFacebook
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\">\t
\t\t\t\t\t\t\t\t\t\t\t<i class=\"icon-twitter\"></i>
\t\t\t\t\t\t\t\t\t\t\tTwitter
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t</tbody>
\t\t</table>
\t</section>
\t
\t<hr></hr>
\t
\t<section id=\"album\">
\t\t<h2 class=\"tall\">Album Module</h2>
\t\t
\t\t<table class=\"table table-bordered nomargin-bottom\">
\t\t\t<thead>
\t\t\t\t<tr>
\t\t\t\t\t<th width=\"300\">Class</th>
\t\t\t\t\t<th>Description</th>
\t\t\t\t</tr>
\t\t\t</thead>
\t\t\t<tbody>
\t\t\t\t<tr>
\t\t\t\t\t<td>
\t\t\t\t\t\t<code>.module-cell</code>
\t\t\t\t\t\t<code>.mini</code>
\t\t\t\t\t\t<code>.album</code>
\t\t\t\t\t</td>
\t\t\t\t\t<td>\t\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"module module-cell mini album no-metadata\">
\t\t\t\t\t\t\t<div class=\"image\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"actions primary\">
\t\t\t\t\t\t\t\t<div class=\"btn-group\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-flat btn-icon-only btn-rounded\">
\t\t\t\t\t\t\t\t\t\t<i class=\"icon-play icon-white\"></i>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"module-inner\">
\t\t\t\t\t\t\t\t<div class=\"headline\">
\t\t\t\t\t\t\t\t\t<a href=\"#\">Album Title</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<ul class=\"byline\">
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Artist Name</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td>
\t\t\t\t\t\t<code>.module-cell</code>
\t\t\t\t\t\t<code>.tall</code>
\t\t\t\t\t\t<code>.album</code>
\t\t\t\t\t</td>
\t\t\t\t\t<td>\t\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"module module-cell tall album\">
\t\t\t\t\t\t\t<div class=\"image\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"actions primary\">
\t\t\t\t\t\t\t\t<div class=\"btn-group\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-large btn-flat btn-icon-only btn-rounded\">
\t\t\t\t\t\t\t\t\t\t<i class=\"icon-play icon-white\"></i>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"actions secondary\">
\t\t\t\t\t\t\t\t<div class=\"btn-toolbar\">
\t\t\t\t\t\t\t\t\t<div class=\"btn-group\">\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-small btn-icon-only\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"icon-plus icon-shadowed\"></i>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-small btn-icon-only\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"icon-share icon-shadowed\"></i>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-small dropdown-toggle btn-icon-only\" data-toggle=\"dropdown\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"icon-gear icon-shadowed\"></i>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"caret\"></span>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Add to Collection</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Add to Playlist</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"module-inner\">
\t\t\t\t\t\t\t\t<div class=\"headline\">
\t\t\t\t\t\t\t\t\t<a href=\"#\">Album Title</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<ul class=\"byline\">
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Artist Name</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t<ul class=\"metadata\">
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t2005
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\">13 Songs</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t43:67
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td>
\t\t\t\t\t\t<code>.module-cell</code>
\t\t\t\t\t\t<code>.vertical</code>
\t\t\t\t\t\t<code>.album</code>
\t\t\t\t\t</td>
\t\t\t\t\t<td>\t\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"module module-cell vertical album\">
\t\t\t\t\t\t\t<div class=\"image\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"actions primary\">
\t\t\t\t\t\t\t\t<div class=\"btn-group\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-large btn-flat btn-icon-only btn-rounded\">
\t\t\t\t\t\t\t\t\t\t<i class=\"icon-play icon-white\"></i>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"actions secondary\">
\t\t\t\t\t\t\t\t<div class=\"btn-toolbar\">
\t\t\t\t\t\t\t\t\t<div class=\"btn-group\">\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-small btn-icon-only\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"icon-plus icon-shadowed\"></i>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-small btn-icon-only\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"icon-share icon-shadowed\"></i>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-small dropdown-toggle btn-icon-only\" data-toggle=\"dropdown\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"icon-gear icon-shadowed\"></i>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"caret\"></span>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Add to Collection</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Add to Playlist</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"module-inner\">
\t\t\t\t\t\t\t\t<div class=\"headline\">
\t\t\t\t\t\t\t\t\t<a href=\"#\">Album Title</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<ul class=\"byline\">
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Artist Name</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t<ul class=\"metadata\">
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t2005
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\">13 Songs</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td>
\t\t\t\t\t\t<code>.module-profile-card</code>
\t\t\t\t\t\t<code>.album</code>
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<div class=\"module module-profile-card album\">
\t\t\t\t\t\t\t<div class=\"actions\">
\t\t\t\t\t\t\t\t<div class=\"btn-toolbar\">
\t\t\t\t\t\t\t\t\t<div class=\"btn-group\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-small dropdown-toggle btn-icon-only\" data-toggle=\"dropdown\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"icon-gear icon-shadowed\"></i>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"caret\"></span>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Add to Collection</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Add to Playlist</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"image\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"module-inner\">
\t\t\t\t\t\t\t\t<ul class=\"flags\">
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<span class=\"label\">Album</span>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<span class=\"label\">Another Flag</span>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<ul class=\"byline\">
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\tby: <a href=\"#\">Artist Name</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"description\">
\t\t\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce nec nibh sit amet ligula euismod elementum. Morbi a neque sed nisi tincidunt rutrum. Phasellus porttitor felis sit amet mi luctus <a href=\"#\">more&hellip;</a></p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<ul class=\"metadata\">
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t2005
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\">13 Songs</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t43:67
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t</tbody>
\t\t</table>
\t</section>
\t
\t<hr></hr>
\t
\t<section id=\"playlist\">
\t\t<h2 class=\"tall\">Playlist Module</h2>
\t\t
\t\t<table class=\"table table-bordered nomargin-bottom\">
\t\t\t<thead>
\t\t\t\t<tr>
\t\t\t\t\t<th width=\"300\">Class</th>
\t\t\t\t\t<th>Description</th>
\t\t\t\t</tr>
\t\t\t</thead>
\t\t\t<tbody>
\t\t\t\t<tr>
\t\t\t\t\t<td>
\t\t\t\t\t\t<code>.module-cell</code>
\t\t\t\t\t\t<code>.mini</code>
\t\t\t\t\t\t<code>.playlist</code>
\t\t\t\t\t</td>
\t\t\t\t\t<td>\t\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"module module-cell mini playlist\">
\t\t\t\t\t\t\t<div class=\"image\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"actions primary\">
\t\t\t\t\t\t\t\t<div class=\"btn-group\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-flat btn-icon-only btn-rounded\">
\t\t\t\t\t\t\t\t\t\t<i class=\"icon-play icon-white\"></i>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"module-inner\">
\t\t\t\t\t\t\t\t<div class=\"headline\">
\t\t\t\t\t\t\t\t\t<a href=\"#\">Playlist Title</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<ul class=\"metadata\">
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\">13 Songs</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\">78 Subscribers</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td>
\t\t\t\t\t\t<code>.module-cell</code>
\t\t\t\t\t\t<code>.tall</code>
\t\t\t\t\t\t<code>.playlist</code>
\t\t\t\t\t</td>
\t\t\t\t\t<td>\t\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"module module-cell tall playlist\">
\t\t\t\t\t\t\t<div class=\"image\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"actions primary\">
\t\t\t\t\t\t\t\t<div class=\"btn-group\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-large btn-flat btn-icon-only btn-rounded\">
\t\t\t\t\t\t\t\t\t\t<i class=\"icon-play icon-white\"></i>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"actions secondary\">
\t\t\t\t\t\t\t\t<div class=\"btn-toolbar\">
\t\t\t\t\t\t\t\t\t<div class=\"btn-group\">\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-small btn-icon-only\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"icon-plus icon-shadowed\"></i>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-small btn-icon-only\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"icon-share icon-shadowed\"></i>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-small dropdown-toggle btn-icon-only\" data-toggle=\"dropdown\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"icon-gear icon-shadowed\"></i>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"caret\"></span>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Add to Collection</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Add to Playlist</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"module-inner\">
\t\t\t\t\t\t\t\t<div class=\"headline\">
\t\t\t\t\t\t\t\t\t<a href=\"#\">Playlist Title</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<ul class=\"byline\">
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\tby <a href=\"#\">Firstname Lastname</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t<ul class=\"metadata\">
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\">13 Songs</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\">78 Subscribers</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td>
\t\t\t\t\t\t<code>.module-cell</code>
\t\t\t\t\t\t<code>.vertical</code>
\t\t\t\t\t\t<code>.playlist</code>
\t\t\t\t\t</td>
\t\t\t\t\t<td>\t\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"module module-cell vertical playlist\">
\t\t\t\t\t\t\t<div class=\"image\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"actions primary\">
\t\t\t\t\t\t\t\t<div class=\"btn-group\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-large btn-flat btn-icon-only btn-rounded\">
\t\t\t\t\t\t\t\t\t\t<i class=\"icon-play icon-white\"></i>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"actions secondary\">
\t\t\t\t\t\t\t\t<div class=\"btn-toolbar\">
\t\t\t\t\t\t\t\t\t<div class=\"btn-group\">\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-small btn-icon-only\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"icon-plus icon-shadowed\"></i>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-small btn-icon-only\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"icon-share icon-shadowed\"></i>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-small dropdown-toggle btn-icon-only\" data-toggle=\"dropdown\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"icon-gear icon-shadowed\"></i>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"caret\"></span>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Add to Collection</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Add to Playlist</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"module-inner\">
\t\t\t\t\t\t\t\t<div class=\"headline\">
\t\t\t\t\t\t\t\t\t<a href=\"#\">Playlist Title</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<ul class=\"byline\">
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\tby <a href=\"#\">Firstname Lastname</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t<ul class=\"metadata\">
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\">13 Songs</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\">78 Subscribers</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td>
\t\t\t\t\t\t<code>.module-profile-card</code>
\t\t\t\t\t\t<code>.playlist</code>
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<div class=\"module module-profile-card playlist\">
\t\t\t\t\t\t\t<div class=\"actions\">
\t\t\t\t\t\t\t\t<div class=\"btn-toolbar\">
\t\t\t\t\t\t\t\t\t<div class=\"btn-group\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-small dropdown-toggle btn-icon-only\" data-toggle=\"dropdown\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"icon-gear icon-shadowed\"></i>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"caret\"></span>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Add to Collection</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Add to Playlist</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"image\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"module-inner\">
\t\t\t\t\t\t\t\t<ul class=\"flags\">
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<span class=\"label\">Playlist</span>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<span class=\"label label-success\">Collaborative</span>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<ul class=\"byline\">
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\tCreated by: <a href=\"#\">Firstname Lastname</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"description\">
\t\t\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce nec nibh sit amet ligula euismod elementum. Morbi a neque sed nisi tincidunt rutrum. Phasellus porttitor felis sit amet mi luctus <a href=\"#\">more&hellip;</a></p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<ul class=\"metadata\">
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t13 Songs
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t43:90
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t78 Subscribers
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t2 Collaborators
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t</tbody>
\t\t</table>
\t</section>
\t
\t
\t
\t
\t
\t


";
    }

    public function getTemplateName()
    {
        return "pages/modules.php";
    }

    public function isTraitable()
    {
        return false;
    }
}
