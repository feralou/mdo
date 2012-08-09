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
title: Scope CSS classes with prefixes
---
When building a CSS design system like [Bootstrap](https://github.com/twitter/bootstrap/), it's important to keep things simple, durable, and flexible. This is no easy task, especially on larger teams and projects where the number of components can become quite high. To help improve this situation in a CSS design system, you might consider using prefixed classes instead of chained classes.

Taking the **chained classes** approach, your CSS selectors might look something like this for a given set of components:

<pre class="prettyprint linenums">
.success { ... }
.btn.success { .. }
.alert.success { ... }
</pre>

We have here a global base class, `.success`, that might house all the commonalities between successful buttons and alerts. Then, at the individual component level, we add on or override as necessary. However, this wide open class and chained approach exposes developers to a number of questions and potential paint points:

- What's that base class stand for?
- What elements will be affected at the root level?
- How many elements have `.success` chained onto them?
- Can it be extended further to more components?
- What if one instance of `.success` uses green text on a white background while another uses white text on a green background?

And those questions barely scratch the surface. This solution isn't necessarily bad, but when scale, brevity, and flexibility are your top requirements, it might not be the best idea. A better solution might be using prefixed classes.

**Prefixed classes** guide developers towards a simpler and more maintainable direction for building an extensive CSS design system. Here's what we have if we take away the generic base class and scope things per component with prefixes:

<pre class="prettyprint linenums">
.btn-success { ... }
.alert-success { ... }
</pre>

This way, **the base class is at the component level** and not the entire system level. In other words, our base classes have become `.btn` and `.alert`, not `.success`. There's no bleeding of styles or behavior from one component to another here because we treat components in a "successful state" as an idea across the design system. That is to say, we have a shared *idea* of what "success" looks for buttons and alerts, but the *execution* is scoped entirely to each independent component. No questions of where common styles are used and no concern of unintended effects, making each component more durable and flexible.

While a very tactical and detail-oriented practice, building components that inherently isolate themselves for improved modularity and customization in a system like Bootstrap makes for better code and a more enjoyable project down the line.
