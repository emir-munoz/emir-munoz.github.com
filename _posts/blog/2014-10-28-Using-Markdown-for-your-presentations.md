---
layout: post
title: Using Markdown for your presentations
category: Utils
tagline: "PhD utils"
tags : [utils, markdown]
summary:
status: final
hn-discussion:
---

{% include JB/setup %}

<br />

This post is about how to use a plain text file to create a HTML5 + Javascript presentation. Among the few options, this time I will use 
[**KeyDown**](https://github.com/infews/keydown) which is based on [deck.js](imakewebthings.com/deck.js/).
An example presentation can be found in this [link](http://infews.github.io/keydown/).

To start creating your deck, install the builder:

{% highlight bash %}
$ gem install keydown
{% endhighlight %}

<!--more-->

After that, we can generate a template from scratch with the basics.

{% highlight bash %}
$ keydown generate my_presentation
{% endhighlight %}

For those that worked before with deck.js this is an improvement making much easier the work.

The result of the generation is a folder with this structure:

	| - my_presentation/
		| - css/					- keydown CSS and a file for you to customize
		| - deck.js					- deck library
		| - images/					- Some keydown images, but also for your images
		| - js/						- keydown JavaScript, and a file for you to customize
		| - slides.md
		
That easy is to generate the squeleton of the presentation. Now you can modify the file `slides.md` adding your content using Markdown syntax.
Each slide is separated by a `!SLIDE` tag.

{% highlight markdown %}
!SLIDE

# This is my talk
{% endhighlight %}

In the github repository of keydown you can find the details of how to add images and use the template.

After you add your content, you can generate the deck as a HTML5 file using the command:

{% highlight bash %}
$ keydown slides slides.md
{% endhighlight %}

For me that didn't work so I checked the open issues and I found an answer in [issue 34](https://github.com/infews/keydown/issues/34).
I uninstalled `compass 1.0.1`

{% highlight bash %}
$ sudo gem uninstall compass
{% endhighlight %}

and installed `compass 0.12.7` using the following Gemfile:

{% highlight bash %}
source 'https://rubygems.org'

gem 'keydown'
gem 'compass', '0.12.7'
{% endhighlight %}

and then executing bundle to build the deck.

{% highlight bash %}
bundle
bundle exec keydown slides slides.md
{% endhighlight %}

That did the trick and I finally got the `slides.html` file.

Once that everything is working propertly, edit the presentation is as simple as write Markdown. Then, the result looks good =)
