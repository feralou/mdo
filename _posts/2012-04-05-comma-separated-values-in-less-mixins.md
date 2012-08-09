---
layout: post
title: Comma-separated values in LESS mixins
---

With some CSS3 properties, like `box-shadow` or `text-shadow`, it is possible to have a comma-separated list of values for multiple shadows like this:

<pre class="prettyprint linenums">
.element {
	box-shadow: 0 1px 3px #eee, 0 5px 10px #f5f5f5;
}
</pre>

This works well with regular ol' CSS, but with CSS3 support being what it is, we sometimes want to use [LESS](http://lesscss.org) mixins for properties like `box-shadow`. Given we need various vendor prefixes in our mixin, our example changes to this:

<pre class="prettyprint linenums">
.box-shadow(@shadow) {
  -webkit-box-shadow: @shadow;
     -moz-box-shadow: @shadow;
          box-shadow: @shadow;
}
.element {
	.box-shadow(0 1px 3px #eee, 0 5px 10px #f5f5f5);
}
</pre>

However, when you use LESS with this approach, the compiler will choke on the unexpected comma between those two shadows. With recent versions of LESS, one might think `@arguments` is the solution, but that only gets you past the compiling problem. You'll still end up with a final output that strips that ever important comma between the two shadows. While the most straightforward approach doesn't work, there are at least two ways of making comma-separated values work in LESS.

The first is to **use a local throw-away variable**:

<pre class="prettyprint linenums">
.box-shadow(@shadow) {
  -webkit-box-shadow: @shadow;
     -moz-box-shadow: @shadow;
          box-shadow: @shadow;
}
.element {
	@shadow: 0 1px 3px #eee, 0 5px 10px #f5f5f5;
	.box-shadow(@shadow);
}
</pre>

This works because we're declaring a value that's a literal string because it's a variable and the mixin respects the entire contents of that variable, including the comma. We currently use this method across Bootstrap for it's simplicity and because we didn't know of any other options at the time until we discovered this second method.

Your other option is to **escape the value when you call the mixin:**

<pre class="prettyprint linenums">
.box-shadow(@shadow) {
  -webkit-box-shadow: @shadow;
     -moz-box-shadow: @shadow;
          box-shadow: @shadow;
}
.element {
	.box-shadow(~"0 1px 3px #eee, 0 5px 10px #f5f5f5");
}
</pre>

This effectively does the same thing as the local variable: it ensures the value passed to the mixin is a string and not a list of options compressed into a single value. The syntax is a still fairly clear,  but also more succinct. One potential downside to note is that this method doesn't enable you to place line-breaks and spaces between values to stack them in your code for improved readability, meaning this wouldn't compile:

<pre class="prettyprint linenums">
.element {
	.box-shadow(~"0 1px 3px #eee,
                  0 5px 10px #f5f5f5");
}
</pre>

If that's your style, you can accomplish this with the local variable method:

<pre class="prettyprint linenums">
.element {
	@shadow: 0 1px 3px #eee,
             0 5px 10px #f5f5f5;
	.box-shadow(@shadow);
}
</pre>

All in all, it depends on your own style and conventions. Whatever method you opt for, I do recommend being consistent with it throughout entire projects.

-----

It's worth noting that in the next version of Bootstrap, we'll be using the second method (escaping when we call the mixin). It's less code to write and those familiar with LESS shouldn't be caught off guard by the escaping.
