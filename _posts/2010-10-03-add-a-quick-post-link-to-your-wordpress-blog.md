--- 
layout: post
status: publish
tags: []

meta: 
  _wp_old_slug: ""
  _edit_last: "1"
type: post
published: true
title: Add a Quick Post Link to Your WordPress Blog
---
<img src="http://www.markdotto.com/wp-content/uploads/2010/10/post.png" alt="New Post" style="border: 5px solid #eee; border-radius: 3px;" />

<p>WordPress's conditional tags are pretty freaking awesome. They came to my rescue when I wanted to add a quick "new post" link to my blog pages for when I'm logged in (which is nearly all the time). Here's a quick block of code to help you do the same:</p>

<figure>
<pre class="php">
&lt;?php if (is_user_logged_in()) { ?&gt;
  &lt;a href="/wp-admin/post-new.php" id="newPost"&gt;+&lt;/a&gt;
&lt;?php } ?&gt;
</pre>
</figure>

<p>That's all you need on the PHP side; just add it to the end of your footer.php right before the <code>wp_footer()</code>. To style it, here's a quick bit of CSS:</p>

<figure>
<pre class="css">
a#newPost {
  position: fixed;
  top: 0;
  right: 40px;
  background: rgba(0,0,0,.25);
  .borderBottomRadius(3px);
  font-size: 40px;
  font-weight: bolder;
  line-height: 1;
  color: #fff;
  text-shadow: 0 1px 0 rgba(0,0,0,.25);
  padding: 5px 15px 10px;
}
</pre>
</figure>

<p>And that's it&mdash;enjoy!</p>
