---
layout: post
title: GitHub all the things
---

I've GitHubbed all the things today&mdash;more on that shortly&mdash;and while I was doing that, I broke the Internet for a decent amount of folks. I apologize for that and will do my best to ensure it won't happen again. Here's some background and an explanation for what happened.

## GitHubbing

Previously, my blog used WordPress and was hosted on Media Temple. Everything was version controlled with git already, making things relatively straightforward in case something went wrong, but it was still a pain. Hosting and updating my blog was tedious, having to install WordPress and it's plugins, pushing code, FTPing in case something broke, and SSHing into my server to pull it down. Not so [simple](/2012-07-11-simpler).

**Now it's all GitHub, all the time.** This blog is still written in Markdown, but it's powered by [Jekyll](http://github.com/mojombo/jekyll) and deployed [using GitHub Pages](https://help.github.com/categories/20/articles). It happens in one fell swoop: just push. Super simple.

Fellow Twit and broheim [Dave Gamache](http://twitter.com/dhg) also has a [nice write-up on using GitHub Pages](http://davegamache.com/hosted-on-github/), so be sure to check that out. His blog setup was the inspiration for this entire endeavor and his support in the process was invaluable.

## I broke the Internet

No joke, I messed some stuff up, and again, I apologize for that. Here's what happened as succinctly and accurately as I can recall.

* Early Wednesday morning I created a new [GitHub user page](https://help.github.com/articles/user-organization-and-project-pages) using the repo name `markdotto.github.com`. At this point, all is well.
* To make the new GitHub page point to my domain, I added a [custom domain](https://help.github.com/articles/setting-up-a-custom-domain-with-pages). At this point, the shit starts hitting the fan: all my projects are now being pointed to markdotto.com.
* As the DNS propagated, the URLs of my [Unofficial GitHub Buttons](http://ghbtns.com) began to change from `markdotto.github.com/github-buttons` to redirect to `markdotto.com/github-buttons`, resulting in security errors as the URLs of the `iframe` were no longer resolving. To make matters worse, once I noticed the problem and attempted to resolve, some of those URLs were still being cached.
* At this point I figured out the problem: despite what the GitHub Pages docs say, **you cannot use a custom domain on your user page without it affecting your project pages**.
* To fix all these issues, I have nuked the `markdotto.github.com` repo and created a new `markdotto.github.com/mdo` one to point to my personal domain. Alongside that, I bought a new domain and pointed the GitHub Buttons project to that using the same technique.
* This change requires everyone using the buttons to update the `src` on their `iframe` to begin with `http://ghbtns.com/github-btn.html?`.

And that brings us to now. Caching might still present security warnings for folks, but there isn't much I can do about that at this point. From here on out, the core issues should be resolved.

## Moving forward

Despite all the hiccups on the GitHub buttons, I did manage to roll out some updates for it tonight:

* Retina icons for in the buttons
* Changed "Watch" button's text to "Star" (the type is still going to be `watch` in the code until the API changes)
* Added caret to the count like on GitHub.com
* Overhauled CSS better match GitHub.com buttons

Check it out at [http://ghbtns.com](http://ghbtns.com).

I also pushed some changes to this blog and, after some miscellaneous cleanup on the code, will be propgating them to the [Bootstrap blog](http://blog.getbootstrap.com) shortly since it uses the same template. New to the blog are larger tweet buttons on articles (better for mobile), related posts on each post page, and a [streamlined homepage](/) for faster loading. More changes to come, so stay tuned.
