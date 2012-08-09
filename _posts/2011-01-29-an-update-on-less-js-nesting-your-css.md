--- 
layout: post
status: publish
tags: 
- Code
- CSS
meta: 
  _wp_old_slug: ""
  _edit_last: "1"
type: post
published: true
title: An Update on Less.js & Nesting Your CSS
---
<p>Awhile back I put together <a href="http://www.markdotto.com/2010/12/18/the-problem-with-nesting-css-with-less-or-sass/">a short comparison of nesting in Less and Sass</a> and how to improve it in both stylesheet languages. Tonight I learned I made a critical mistake in my summary of <a href="http://lesscss.org">Less</a>'s nesting features. I have no idea how I missed it, but my buddy <a href="http://davegamache.com">Dave Gamache</a> dropped the knowledge bomb on me tonight and I'm still reeling.</p>

<p>Here's how I <em>thought</em> nesting worked in Less:</p>

<pre class="css">
div#container {
	a {
		color: @link-color;
	}
	a:hover {
		color: darken(@link-color, 25);
	}
}
</pre>

<p>Based on the documentation that I read, I saw no way of nesting the <code>:hover</code> selector within the <code>a</code> selector right before. Sass allowed for this, so I was at a loss as to why Less wouldn't do it as well.</p>

<p>Turns out, I just suck and it is completely possible:</p>

<pre class="css">
div#container {
	a {
		color: @link-color;
		&:hover {
			color: darken(@link-color, 25);
		}
	}
}
</pre>

<p><strong>Holy freaking awesomesauce!</strong> Thanks, Dave! Now, if you'll excuse me, I have to go rewrite buckets of CSS to fix my nesting :).</p>
