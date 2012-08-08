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
title: CSS property order
---
CSS property order matters, especially on larger teams with several engineers and designers all contributing code. I know it's been discussed, but frankly there's always room for improvement and alternate approaches. In a few projects at Twitter, we added the constraint of consistent CSS property order to make onboarding new folks easier, debugging faster, and expectations of what exactly a block of CSS does *that* much clearer (without viewing it in the browser).

## High level overview

At a high level, here's our breakdown:

- `position`
- `display` and box model
- `font`, leading, `color`, text
- `background` and `border`
- CSS3 properties like `border-radius` and `box-shadow`
- and a handful of other purely visual properties

We hadn't really seen an approach like this in any other projects we've worked on. It mixes the common structural and alphabetical approaches into one in an effort to ensure our property order is logical, scannable, and all-encompassing. We wanted an order that mapped to how we mentally visualized DOM elements and&mdash;to an extent&mdash;how Webkit's Inspector presents properties.

## Show me!

Getting more specific, here are some blocks of CSS might look with this property order in mind.

<script src="https://gist.github.com/1371848.js"> </script>

Here you can see positioning, box model (`height` and `padding`), and visual (`background-color`, `border-bottom` and `box-shadow`) in their proper order. This flows in such a way that you can discern that this is a fixed dark gray bar with a drop shadow--you know exactly what it is you're dealing with as you read line-by-line.

<script src="https://gist.github.com/1371874.js"> </script>

In this example, we have only box model and visual. Notice that for box model, we have dimensions first with `min-height` and `padding` (as that adds to the overall width of an element). For the visual elements, `background-color` and `border` come first because those inform you how this element starts to look (e.g., a gray box witha  border). `border-radius` and `box-shadow` follow that because those are additional visual treatments that add to the base look and feel.

## Use what works for your team

This approach seems to work well for us and our teams without adding too much overhead. All you need to do is create a series of rules and stick to them with your team and this because a very successful tactic for organizing and maintaining CSS. No one solution is *teh best*, so keep that in mind and adjust as you go.
