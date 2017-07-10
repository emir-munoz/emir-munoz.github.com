---
title: Using Algorithm2e in ACM template
date: 2012-11-26 00:00:00 Z
categories:
- utils
tags:
- utils
- latex
- phd
layout: post
tagline: Hacking
summary: 
status: final
hn-discussion: 
---

_This post was first published on my Wordpress page [link](http://depinfi.wordpress.com/2012/11/26/using-algorithm2e-in-acm-template/)_

If you have tried to use this package to create algorithms in the ACM template for papers, 
you must be come across this issue. If you only add the packate `algorithm2e` with something like

{% highlight latex %}
\usepackage[ruled,vlined]{algorithm2e}
{% endhighlight %}

you should have received a nice errors telling you "1616:Too many }’s" and "1617:Extra \fi \fi".

To solve this annoying bug, that could make you lose a lot of valuable time, just add 
the following code before the import of the package.

{% highlight latex %}
% For algorithms in ACM template
\makeatletter
\newif\if@restonecol
\makeatother
\let\algorithm\relax
\let\endalgorithm\relax
\usepackage[ruled,vlined]{algorithm2e}
{% endhighlight %}

I hope this will be useful for you like was for me :)

Cheers!
