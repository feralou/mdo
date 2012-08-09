--- 
layout: post
status: publish
tags: 
- Bootstrap
- CSS
meta: 
  _edit_last: "1"
type: post
published: true
title: Breaking down Bootstrap
---
There are at least two ways to approach organizing an entire system of components like [Bootstrap](https://github.com/twitter/bootstrap/):

- Everything in a small set of CSS files for compactness, ease of use in building on shared styles, and fewer requests if used via media queries.
- Individual files for nearly every component for greater customization when compiling, making styles easier and more straight forward to find.

Both have their pros and cons, but I'm most anxious in hearing about *your* preferred methods. For context, **here is how Bootstrap's LESS files are structured today:**

- bootstrap.less
- variables.less
- mixins.less
- reset.less
- scaffolding.less
- type.less
- tables.less
- forms.less
- patterns.less

If we were to split things out even more, **our files could look like this:**

- bootstrap.less
- variables.less
- mixins.less
- reset.less
- scaffolding.less
- grid.less
- type.less
- tables.less
- forms.less
- navbar.less
- dropdowns.less
- tabs-pills.less
- breadcrumb.less
- buttons.less
- alerts.less
- pagination.less
- modals.less
- popovers.less
- twipsy.less

While that's a lot of individual files, it becomes much easier to customize Bootstrap by simply removing `import` rules from bootstrap.less and recompiling. If Bootstrap were a standalone app, I'd recommend the former, but as it is a customizable toolkit, the latter feels like it could be better. We're leaning towards the latter with version 2.0--more files, but greater customization for all.

Thoughts? [Tweet](https://twitter.com/twbootstrap) and let us know.
