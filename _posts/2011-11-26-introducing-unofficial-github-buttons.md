--- 
layout: post
status: publish
tags: 
- Code
- Tools
meta: 
  _edit_last: "1"
type: post
published: true
title: Introducing (Unofficial) GitHub Buttons
---
<a href="http://markdotto.github.com/github-buttons" title="GitHub Buttons" target="_blank"><img src="http://www.markdotto.com/wp-content/uploads/2011/11/introducing-github-buttons.png" alt="Introducing GitHub Buttons"></a>

Today I'm stoked to announce the release of my [unofficial GitHub buttons](http://markdotto.github.com/github-buttons)! For months I've wanted to provide consistent, easy-to-use links back to my projects' source and documentation on GitHub. A couple of weeks ago I was finally able to create a decent method of doing just that. Now, I want to share them with everyone and get feedback from the community.

## Functionality

For their initial release (and due to lack of time and expertise), functionality is limited to a static link back to your repo and dynamic counts for the number of watchers and forks on any public repo. In the future I'd love to expand on this to support user profiles and&mdash;one day&mdash;dynamic buttons via oAuth.

## How to use

Using these new buttons is as easy as adding an `iframe` and setting some paramaters in the URL. It's fast, easy, and pretty lightweight. The best part is that these are hosted on GitHub pages, which means you don't need to host the code yourself. Just add and go. It also comes with a few options: watch or fork button, count or no count, and default or large size.

<div class="well" style="line-height: 1;">
<iframe src="http://markdotto.github.com/github-buttons/github-btn.html?user=markdotto&repo=github-buttons&type=watch&count=true&size=large" allowtransparency="true" frameborder="0" scrolling="0" width="170px" height="30px"></iframe>
</div>

<div class="well" style="line-height: 1;">
<iframe src="http://markdotto.github.com/github-buttons/github-btn.html?user=markdotto&repo=github-buttons&type=fork&count=true&size=large" allowtransparency="true" frameborder="0" scrolling="0" width="146px" height="30px"></iframe>
</div>

The two buttons above are live examples of Bootstrap's watcher and fork counts. Everything but the size of the `iframe` is configurable via URL parameters. (This was the easiest and fastest way for me to get this project out the door.)

## Get it on GitHub

You can find [the source on GitHub](https://github.com/markdotto/github-buttons). Feel free to download, fork, or watch it from there. If you have any feedback or want to contribute to the project, go ahead and [open an issue](https://github.com/markdotto/github-buttons/issues) or submit a pull request.
