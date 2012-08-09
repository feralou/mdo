--- 
layout: post
status: publish
tags: 
- Bootstrap
- Code
- Tools
meta: 
  _edit_last: "1"
type: post
published: true
title: Bootstrap 2.0.1 released
---
After a few weeks of hardcore bugfixing, Jacob and I are happy to finally push out a fairly stable patch to [Bootstrap 2](http://twitter.github.com/bootstrap/) that resolves a bunch of issues. **Here are the highlights on what's new:**

- Previously the docs called for use of `.control-label` in the examples, but the CSS didn't make clear use of it. This class is required for horizontal forms and has been reflected in the CSS.
- We've tried our best to improve rendering of buttons and icons across all browsers. Some issues remain; Firefox throws an `!important`on `line-height` for inputs, so that's the big one.
- We refined the label component style to move away from uppercase.
- Added the black button option, `.btn-inverse`.
- Added a mini button class, `.btn-mini`.
- We had to re-add the protocol, `http:` to the HTML5 schim because IE7-8 wouldn't recognize it, dropping some HTML5 support for those browsers and introducing major performance issues.
- Resolved some issues with responsive layouts where media queries would overlap at 768px and 980px.
- Rearranged Scaffolding docs page to split fixed and fluid grid systems.
- Tons of docs updates for typos and language changes.

For a full list of bug fixes in this release, check out [the 2.0.1 milestone](https://github.com/twitter/bootstrap/issues?milestone=8&state=closed) on GitHub. All in all, we closed over 100 issues with over 150 commits&mdash;not bad for a patch release! A big thanks to all who reported bugs and added pull requests, we couldn't do this without you nerds.
