--- 
layout: post
status: publish
tags: 
- Bootstrap
- Code
- CSS
meta: 
  _edit_last: "1"
type: post
published: true
title: New grid system coming to Bootstrap 2
---
Bootstrap 2 brings [new responsive features](http://www.markdotto.com/2011/10/21/making-bootstrap-responsive/) and a large part of that is the grid system at its core. With BS2, we'll be leaving behind our 16-column overlords and **moving to a flexible 12-column grid system**. Nothing substantial should change in your use of Bootstrap, but I wanted to share some thoughts about this new (to Bootstrap) approach.

To date, mobile and tablet devices were all virtually ignored. No more--Bootstrap 2 will provide support for mobile devices out of the gate. Responsive features will be available and should provide at least some level of support for all our major components.

By leaving the 16-column grid system behind, we save some headaches and streamline some code. 16-columns required extra CSS for a 3-column layout and we were including an extra 8 columns for those wishing to add 24-column support. No more. We've removed the extra CSS and gone to 12-columns, all while retaining the same overall default site width (940px) and adding responsive variations.

Not much changes for those using Bootstrap when we release 2.0. We've been using this grid in the our development of 2.0 for several weeks now and are quite fond of it. Just be sure to check your column sizes and test your projects on mobile and tablet devices when you upgrade.

-----

Follow along with Bootstrap 2's development on GitHub with the [2.0-wip](https://github.com/twitter/bootstrap/tree/2.0-wip) branch.
