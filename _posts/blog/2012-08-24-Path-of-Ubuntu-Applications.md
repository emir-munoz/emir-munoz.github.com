---
layout: post
title: Path of Ubuntu Applications
category: Utils
tagline: "Hacking"
tags : [utils, linux]
summary:
status: final
hn-discussion:
---

{% include JB/setup %}

<br />
_This post was first published on my Wordpress page [link](http://depinfi.wordpress.com/2012/08/24/path-for-ubuntu-applications/)_

Usually I’m looking for the path where ubuntu installs some applications, here is a way to do it.

{% highlight bash %}
$ sudo dpkg -l | grep name_of_the_app
{% endhighlight %}

For example if you want to find what installed applications contains the word ‘emacs’ you have to use this,

<!--more-->

{% highlight Bash %}
$ sudo dpkg -l | grep emacs
ii  emacs                                  23.3+1-1ubuntu9                         The GNU Emacs editor (metapackage)
ii  emacs23                                23.3+1-1ubuntu9                         The GNU Emacs editor (with GTK+ user interface)
ii  emacs23-bin-common                     23.3+1-1ubuntu9                         The GNU Emacs editor's shared, architecture dependent files
ii  emacs23-common                         23.3+1-1ubuntu9                         The GNU Emacs editor's shared, architecture independent infrastructure
ii  emacsen-common                         1.4.22ubuntu1                           Common facilities for all emacsen
ii  python-ropemacs                        0.6c2-4
{% endhighlight %}

And then you can find all the files that this application contains.

{% highlight bash %}
$ sudo dpkg -L emacs23
/.
/usr
/usr/share
/usr/share/doc
/usr/share/doc/emacs23
/usr/share/doc/emacs23/copyright
/usr/share/doc/emacs23/README.Debian
/usr/share/lintian
/usr/share/lintian/overrides
/usr/share/lintian/overrides/emacs23
/usr/share/menu
/usr/share/menu/emacs23
/usr/share/emacs
/usr/share/emacs/23.3
/usr/share/emacs/23.3/etc
/usr/share/emacs/23.3/etc/DOC-23.3.1
/usr/share/man
/usr/share/man/man1
/usr/share/applications
/usr/share/applications/emacs23.desktop
/usr/bin
/usr/bin/emacs23-x
/usr/share/doc/emacs23/changelog.Debian.gz
/usr/share/man/man1/emacs23-x.1.gz
/usr/share/man/man1/emacs23.1.gz
/usr/bin/emacs23
{% endhighlight %}
