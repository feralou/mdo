--- 
layout: post
status: publish
tags: 
- Code
- CSS
- Twitter
meta: 
  _edit_last: "1"
type: post
published: true
title: Help us refactor forms for Bootstrap 2.0
---
While version 2.0 of Bootstrap is a ways off, we're still thinking about and (ocassionally) working on some of the new stuff we plan to add with that release in a separate branch, 2.0-wip. To that end, we're reconsidering our approach to how we use forms and form elements within Bootstrap. And we'd love your feedback on our approach thus far.

(If you're tracking the development of Bootstrap, I highly encourage you to watch that branch for new activity. [Check it out on GitHub](https://github.com/twitter/bootstrap/tree/2.0-wip).)

## Forms in Bootstrap today

In 1.3, form styles are quite generic and wide-reaching. With the "default" styles being a float-left, right-aligned label, we end up having to undo a lot of styles to normalize the form fields. That's problematic for a few reasons and doesn't give developers a lot of leeway when building.

## What we're thinking about for v2.0

For 2.0, we're thinking about namespacing certain styles and types of form to provide a better default state and more included options. When we cut the 2.0 branch, our plan was to include at least four types of form layouts:

- **Vertical/stacked** with left-aligned labels on top of inputs
- **Horizontal** with float-left and right-aligned labels that appear to the side of inputs
- **Search** with a single, super rounded input and one optional button
- and, **Inline** with multiple fields and buttons on one "line"

So why do we need these four options? Well, let's expand on the descriptions and give you some insight:

- Vertical forms give us a better default state because the amount of CSS applied to them is super minimal compared to our current method.
- With the base styles simplified, we make it easy to turn any vertical form into a horizontal one just by swapping a class. Same markup overall with just one different class.
- Search forms don't require much extra styling, but making them stand out amongst other generic forms is useful. While `type=search` is an option, it's support is limited and styles erratic.
- Inline forms are also useful, and while inline fields are technically possible with the vertical forms, this gives us a more durable and scalable option just in case. It's also needed for inline labels, so there's that.

And that's what we have so far from the conceptual side. Hopefully this reduces headaches for creating new and maintaining old forms. To help visualize that, here's an example of the markup we're thinking about using for vertical/horizontal forms:

<pre class="prettyprint linenums">
&lt;form class="vertical-form" action=""&gt;
  &lt;fieldset class="control-group"&gt;
    &lt;label class="control-label" for="element"&gt;Label name&lt;/label&gt;
    &lt;div class="controls"&gt;
      &lt;input type="text" name="element"&gt;
    &lt;/div&gt;
  &lt;/fieldset&gt;
&lt;/form&gt;
</pre>

Here's how it differs from 1.3 from a technical standpoint:

- It's more semantic. Instead of `.clearfix` we use `.control-group` with a `fieldset`.
- Yes, there are more classes here, but that saves us inheritance and performances issues.
- It makes your two most common form types, verical and horizontal, completely the same save for a single class on the form.
- It namespaces the form styles so they don't clash with anything else in your markup, an approach that really shines in large systems like Bootstrap.

Hopefully this makes sense from both sides now. The code has more classes, but is infinitely more durable and scalable. We add more options while maintaining existing patterns of stacked and horizontal forms.

## Help us out?

Hopefully this all gels with what you're thinking and doing as a developer. We'd love to hear your feedback on this approach for forms in v2.0 via [Twitter](http://twitter.com/twbootstrap), [GitHub issues](https://github.com/twitter/bootstrap/issues), or [mailing list](http://groups.google.com/group/twitter-bootstrap).

Thanks in advance!
