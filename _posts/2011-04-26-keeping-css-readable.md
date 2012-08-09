--- 
layout: post
status: draft
tags: []

meta: 
  _edit_last: "1"
type: post
published: false
title: Keeping CSS Readable
---
<p>CSS was created to add presentational styles to elements, independent of the page's markup, logic, and behavior. HTML structured the page's content, server-side languages served them up, and Javascript brought them to life with interactive tidbits. Now, the lines are continually blurring.</p>

<p>This is fine&mdash;great, even.</p>

<p>The boundaries and functionality of CSS are continually pushed by web developers, browser creators, and even preprocessor languages like LESS and SASS. The latter, however, is where we start to get in trouble.</p>

<p>LESS and SASS add significantly more useful tools atop your vanilla CSS, but that can hamper development. When new team members come aboard, when code needs overhauls, and when bugs are introduced, complex mathematical operations and nested mixins can become quite hairy.</p>

<p>At Twitter, we use LESS in a number of projects, but never to a degree where the readability of our CSS is compromised. Mixins are used to save lines of code, limit the impact of vendor-prefixed properties, nest code, and define global variables. Sometimes we get a little fancy, but ...</p>

