--- 
layout: post
status: publish
tags: 
- Bootstrap
meta: 
  _edit_last: "1"
type: post
published: true
title: Bootstrap 2.0.2 released
---
A new version of Bootstrap is out today with a ton of bug fixes (over 100 closed issues), documentation improvements, and a few new features. Here's a curated list with some details where appropriate. Download the latest from the [Bootstrap docs](http://getbootstrap.com).

Before we begin, I want to note that **you'll have to upgrade to the LESS 1.3** to compile 2.0.2. For those using LESS.js, [download the latest](http://lesscss.org). For those using LESS via npm, run this in your Terminal to update:

<pre class="prettyprint linenums">
sudo npm install less -g
</pre>

And you should be good to go. Not downloading the latest or running the update means you'll see LESS spit out some nasty errors and it won't compile.

Now, let's check out what's new.

## Documentation updates

- All docs pages now have distinct titles, such as <em>Scaffolding &middot; Twitter Bootstrap</em>.
- Updated the Apple touch icons (now black on black instead of the blue grid) and fixed the links to them in the docs.
- Added new global styles docs section to the Scaffolding page.
	- Required use of HTML5 doctype
	- Overview of global typographic and links details
	- Mention of our embedded CSS reset via [Normalize.css](http://necolas.github.com/normalize.css/)
- Added version number to the download button on the docs homepage.
- Updated progress bars section to simplify how the classes stack and more clearly indicate the available optional classes and styles.
- Added a new example, [SoundReady.fm](http://soundready.fm), to the homepage
- Added various sizes to the docs for button groups

## Resolved bugs

- Removed all IE7 hacks and floats from `.input-prepend` and `.input-append`, however, this requires you to **ensure there is no whitespace in your code** between `.add-on` and the `input`.
- In `.input-prepend` and `.input-append`, added ability to use add-ons on both sides when you chain the selectors.
- Updated lingering `.btn-dark` reference to `.btn-inverse`.
- Fixed issue with content being cut off in `.tab-content` for tabbable sections.
- Updated `.navbar .container` to use `width: auto;` to start and then reset the fixed widths via the `#gridSystem` mixin (it's a little dirty, but required to avoid adding another class).
- Modal footer buttons are now aligned by their parent via `text-align: right;` instead of `float: right` on the button level. This was changed to allow the use of `.pull-left` and `.pull-right` to align buttons easily. Double check your button order with this change!
- Fixed problem where default striped progress bar was green instead of blue.
- Fixed CSS selector used for `input` and `textarea` grid sizes to properly apply the CSS (was `input > .span*` and now is `input.span*`).

## New features

- Horizontal dividers support added to nav lists
- Added basic version of badges
- Added visible/hidden classes for devices
- Added support for buttons in input-prepend/append component
- Added .navbar-fixed-bottom support
- Added .dropup support for dropdown menus to pop them upward instead of downward (this is automatically done for the newly added fixed bottom navbar).
- Added mixin for [new image replacement technique](http://www.zeldman.com/2012/03/01/replacing-the-9999px-hack-new-image-replacement/)
- Added pause on hover for the carousel
- Added tons of new variables for typography, buttons, forms, dropdowns, navbar, and more for the LESS pros out there. These variables have also been reflected on the Customize page.
- Added new horizontal description list variation
- Added `.disabled` class support to the pager component (also added a mention of this to the docs)
- Added `.well-large` and `.well-small` classes for extending the well component

## Responsive changes

While not a bug fix or a docs update, I wanted to specially call out this responsive CSS change. We have moved the padding from `.container` within the <767px layout to `body`. This ensures a bit more control over containers, rows, and more when setting background colors and such.

## New grid mixins

Last, but not least, [Jacob](http://twitter.com/fat) has rewritten the grid system mixins to utilize some new features in LESS 1.3. Nothing changes for the compiled CSS, but the LESS we use to generate that code is more succinct and can now fully utilize any number of grid columns when you customize.

-----

For a full issue-by-issue rundown of the release, check out the now closed [2.0.2 milestone on GitHub](https://github.com/twitter/bootstrap/issues?sort=created&direction=desc&state=closed&page=1&milestone=9).
