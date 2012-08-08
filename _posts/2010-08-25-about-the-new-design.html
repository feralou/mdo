--- 
layout: post
status: publish
tags: []

meta: 
  _wp_old_slug: ""
  _edit_last: "1"
type: post
published: true
title: About the New Design
---
<p>The other day I quickly coded a new design for this here website. The idea behind it is simple: provide some base structure, but ultimately let the content drive the design of the site. To share what's under the hood, I wanted to share a little more about that idea and what's powering this site.</p>

<h2>Form Before Function</h2>
<p>That phrase feels like a cop-out, but it sums things up nicely. So far, photos and a few text and code heavy posts are all that's here. That could easily change and I wanted to remain flexible as to not feel constrained by whatever elaborate design I could come up with.</p>

<p>I don't know exactly what I want out of this site yet, only that I want to blog, share photos, talk about some code, and share thoughts on links.</p>

<h2>Under the Hood</h2>

<a target="_blank" href="http://wordpress.org"><img src="http://www.markdotto.com/wp-content/uploads/2010/09/wordpress-logo-notext-rgb.png" alt="WordPress" style="width: 100px; float: right; margin: 0 0 15px 20px;" /></a>

<p>Because it's what I'm familiar with, I opted to use WordPress once again. Coupled with the awesome plugin support and flexibility of WordPress as a CMS, it was a no-brainer for me. Here's a look at what I'm using with WordPress to power this site.</p>

<h3>Categories, Not Custom Posts</h3>
<p>Just a quick note to begin here: WordPress 3.x allows for custom post types. I've used them before, but decided to avoid them this time around and instead keep things simple to start. As I said, I want the form of this blog to come as naturally as possible.</p>

<p>To customize how each category's post shows up, I threw in some conditionals for the loop:</p>

<figure>
<pre class="php">
&lt;?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?&gt;
  &lt;?php if (in_category('photos')) { ?&gt;
    &lt;figure&gt;
      &lt;?php the_content(); ?&gt;
      &lt;figcaption&gt;
        &lt;strong&gt;&lt;?php the_title(); ?&gt;&lt;/strong&gt;
        &lt;?php echo get_post_meta($post-&gt;ID, 'caption', true) ?&gt;
      &lt;/figcaption&gt;
    &lt;/figure&gt;
  &lt;?php } elseif (in_category('quotes')) { ?&gt;
    &lt;blockquote&gt;
      &lt;p&gt;&lt;?php the_concept(); ?&gt;&lt;/p&gt;
      &lt;cite&gt;&lt;?php the_excerpt(); ?&gt;&lt;/cite&gt;
    &lt;/blockquote&gt;
  &lt;?php } else { ?&gt;
    &lt;?php echo tweetbutton(); ?&gt;
    &lt;h1&gt;&lt;?php the_title(); ?&gt;;&lt;/h1&gt;
    &lt;span class="date"&gt;&lt;?php the_time('l, F jS, Y') ?&gt;&lt;/span&gt;
    &lt;?php the_content(); ?&gt;
  &lt;?php } ?&gt;
  &lt;hr /&gt;
&lt;?php endwhile; ?&gt;
</pre>
</figure>

<h3>Plugin: <a target="_blank" href="http://wordpress.org/extend/plugins/wp-tweet-button/">WP Tweet Button</a></h3>

<a target="_blank" href="http://wordpress.org/extend/plugins/wp-tweet-button/"><img src="http://www.markdotto.com/wp-content/uploads/2010/09/tweetv.png" alt="WordPress" style="float: right; margin: 0 0 15px 20px;" /></a>

<p>To encourage sharing of the articles I (will) write, I've added the Twitter Tweet button via this handy plugin. It gives you a few options, including: automagically adding it to posts, custom recommendations per post, and more.</p>

<p>Check it out if you haven't yet. I did try some other plugins but they all sucked. This one seemed best.</p>

<h3>Plugin: <a target="_blank" href="http://urbangiraffe.com/plugins/disable-wpautop/">Disable WPAutoP</a></h3>

<p>I can't begin to tell you just how frustrating WordPress's automatic <code>p</code> tags are. They wrap anything and everything, which makes for some funky styling if you're not careful enough (e.g., images get wrapped and can leave funky spacing if floated). Install this bad boy and kiss those rogue <code>p</code> tags good-bye.</p>

<h3>CSS with <a target="_blank" href="http://github.com/cloudhead/less.js">Less.js</a></h3>

<a target="_blank" href="http://github.com/cloudhead/less.js"><img src="http://www.markdotto.com/wp-content/uploads/2010/09/less-css-logo.png" alt="WordPress" style="width: 120px; float: right; margin: 0 0 15px 20px;" /></a>

<p>I talked about this before, but I'll mention it here again. Less.js, a Javascript implementation of Less CSS (previously done via Ruby) that gives you powerful add-ons to CSS. Use it to add variables, create mixins for shorthanding long or complicated pieces of code, perform math, and more. It's really handy.</p>

<p>Plus, even though it compiles the CSS in the <code>head</code> of your page, it stores it in a HTML5 local database. Hot.</p>

<h3><a target="_blank" href="http://plugins.jquery.com/project/chili">Chili</a>: A jQuery Syntax Highlighter</h3>

<p>Not sure if there is a better one out there, but it seemed solid to me after a quick tour around Google. I've love some suggestions for alternatives; my only complaint is it's ugly default styling. Will definitely need to dive in and change that up more in the future.</p>

<h3><a target="_blank" href="http://mezzoblue.github.com/PaintbrushJS/">PaintbrushJS</a>: Javascript Image Modification</h3>

<p>I use PaintbrushJS to modify that beautiful mug of mine on your left. It's damned awesome; you can <a target="_blank" href="http://mezzoblue.github.com/PaintbrushJS/demo/">modify images</a> with sepia, noise, tint, and even blur filters. All on the fly with javascript and some awesome use of <code>canvas</code>. It's developed by <a target="_blank" href="http://mezzoblue.com">Dave Shea</a> (@<a target="_blank" href="http://twitter.com/mezzoblue">mezzoblue</a>) and is just getting started. Not practical in my implementation, no, but still cool :).</p>

<h3><a target="_blank" href="https://beanstalkapp.com/">Beanstalk</a> for Low Maintenance SVN</h3>

<p>I'm a fan of version control&mdash;if by version control you mean just one master branch of all my code so that I can quickly revert my mistakes and checkout new copies should my server get hacked or otherwise fubared. Nice to have and these guys do all the leg work; I just import my base files and they take it from there.</p>

<p>Also, an added bonus of using SVN was the need for using SSH to checkout my code on my server. Handle to know; I need to pick up more stuff like this.</p>

<p><strong>And that's it!</strong> I'll keep adding features and posting about them as I go though.</p>
