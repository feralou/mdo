--- 
layout: post
status: publish
tags: 
- Code
meta: 
  _wp_old_slug: ""
  _edit_last: "1"
type: post
published: true
title: The Problem with Nesting CSS with Less or Sass
---
<p>I'm a big fan of using <a href="http://lesscss.org/">Less</a> with all my coding projects (be sure to read my other post for more details on it). It saves time by providing me variables, mixins, and of course nesting rules. <a href="http://sass-lang.com/">Sass</a> does the same thing, but for one reason or another I never could get used to it's syntax. The problem with nesting, and a problem I see in CSS all too often is over-specificity.</p>

<p>Here's an example of nested rules in Less:</p>

<pre class="css">
#header {
  background: @darkGray;
  ul#nav {
    background: #fff;
    margin: 0;
    li {
      display: inline;
      a {
        display: inline;
        float: left;
        padding: 5px 10px;
      }
    }
  }
}
</pre>

<p>It's a simpler way to write out your CSS, but does it really pay off?  That depends on how you look at it. On the one hand, it streamlines your code and provides an easy way to determine the structure of the markup that it styles. On the other hand, it's way too specific when Less parses it out as regular ol' CSS.</p>

<p>Here's that same block, but as parsed as plain CSS:</p>

<pre class="css">
#header { background: #333; }
#header ul#nav { background: #fff; margin: 0; }
#header ul#nav li { display: inline; }
#header ul#nav li a {display: inline; float: left; padding: 5px 10px; }
</pre>

<p>This is a bit of an oversimplification, but it's easy to see what's going on here. You can easily rewrite that CSS to be less specific, but just as effective. CSS is most effective when it is just specific enough, but doesn't overdo it.</p>

<p>Here's that parsed CSS again, but without the inheritance from nesting:</p>

<pre class="css">
#header { background: #333; }
#header ul { background: #fff; margin: 0; }
#header li { display: inline; }
#header a {display: inline; float: left; padding: 5px 10px; }
</pre>

<p>The problem with this is again one of over-specificity and speed. Browsers read CSS right to left, and the most specific you get, the longer it takes for the browsers to parse your CSS. This isn't an issue on most sights as the difference is in milliseconds, but for certain circumstances, I can see it being problematic.</p>

<p>Either way, nesting without prefacing selectors with it's parent rule would be outstanding. Nesting is primarily saves on time and readability, so shouldn't that be reflected in the output of Less and Sass? Perhaps in future iterations.</p>
