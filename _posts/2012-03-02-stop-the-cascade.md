--- 
layout: post
status: publish
tags: 
- Code
- CSS
meta: 
  _edit_last: "1"
type: post
published: true
title: Stop the cascade
---
Cascading styles is at the core of CSS&mdash;hell, it's in  the name&mdash;but experience has shown that building systems with too many *cascading styles* can be detrimental. Some times it's completely necessary to just **stop the cascade**.

Let's take the modal of [Bootstrap](http://getbootstrap.com) as an example.

<pre class="prettyprint linenums">
&lt;div class="modal"&gt;
  &lt;div class="modal-header"&gt;
    &lt;h3&gt;Modal title&lt;/h3&gt;
  &lt;/div&gt;
  &lt;div class="modal-body"&gt;
    &lt;h3&gt;Modal subheader&lt;/h3&gt;
    &lt;p&gt;Content for the modal, like additional text and forms, goes here.&lt;/p&gt;
  &lt;/div&gt;
  &lt;div class="modal-footer"&gt;
    &lt;button class="btn"&gt;Done&lt;/button&gt;
  &lt;/div&gt;
&lt;/div&gt;
</pre>

Notice how we namespace classes at key levels&mdash;each class name begins with `modal-`as a prefix. [Class name prefixing](http://www.markdotto.com/2012/02/16/scope-css-classes-with-prefixes/) makes our code more durable and easier to maintain, but it also better enables us to scope styles to only the relevant elements.

Consider this snippet of CSS used to style the modal heading:

<pre class="prettyprint linenums">
.modal h3 {
  text-align: center;
}
</pre>

By using this generic selector, we inadvertently change the styles of the `h3` in the `.modal-body`. We've introduced an instance of cascading styles&mdash;any `h3` throughout the `.modal` will be center aligned. Therefore, if we wanted the other instances of `h3` to be left-aligned, we'd have to override our brand new styles with something like this:

<pre class="prettyprint linenums">
.modal .modal-body h3 {
  text-align: left;
}
</pre>

It's worth noting that this example isn't without its flaws, but that's the point. With a little more time and thought, one can easily avoid this problem, avoiding extra lines of code and more complications in the overall system. Had we done things differently and altered our selector, our CSS might look like this:

<pre class="prettyprint linenums">
.modal-header h3 {
  text-align: center;
}
</pre>

By limiting the scope of a selector, we reduce the likelihood that we need additional code down the line by strengthening each component and limiting the effects of their styles. If done right, we can create an entire system of independent and durable, yet still flexible, components. It's a promising approach I think, but one not to employ with an iron first.

Some CSS should be allowed to cascade. Base typography, links, and the such are prime examples of something not to redeclare over and over again. This would only serve to weigh down a project and make it even more unmanageable. Instead, the goal as always is to strike a balance.

Find ways to isolate components and make them more durable by limiting the scope of their CSS. You'll discover that components can be more easily rearranged without causing adverse effects and the amount of code necessary will likely decrease.
