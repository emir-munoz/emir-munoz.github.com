---
layout: post
title: Python and HTML Processing
category: Utils
tagline: "Hacking"
tags : [utils, python]
summary:
status: draft
hn-discussion:
---

{% include JB/setup %}

<br />
_This post was first published on my Wordpress page [link](http://depinfi.wordpress.com/2012/08/24/python-and-html-processing/)_

Trying to harvest some links from the Coursea Lectures, in a fast and efficient way saving me valuable time, 
I decided to use Python with [Beautiful Soup](http://www.crummy.com/software/BeautifulSoup/).

> Beautiful Soup is a Python library designed for quick turnaround projects like screen-scraping. 
> It parses anything you give it, and does the tree traversal stuff for you. You can tell it 
> "Find all the links", or "Find all the links of class externalLink", or "Find all the links whose 
> urls match "foo.com", or "Find the table heading that’s got bold text, then give me that text."

First, you need to download the library from this [link](http://www.crummy.com/software/BeautifulSoup/bs4/download/) and untar the bs4 folder in your workspace.
The library is really simple and intuitive to use, since represent the HTML document as a nested data structure.

<!--more-->

Too much chatter, now I'm going to show you the python code :)

{% highlight python linenos %}
#!/usr/bin/env python
import urllib, sgmllib
 
# Get a file-like object for the Coursea Web site course page.
f = urllib.urlopen("https://class.coursera.org/gametheory/lecture/preview")
# Read from the object, storing the page's contents in 's'.
s = f.read()

# Here is the import for the library above described.
from bs4 import BeautifulSoup
# BeautifulSoup object, which represents the document as a nested data structure
soup = BeautifulSoup(s)
 
# Find all the link with rel 'lecture-link'
for videos in soup.find_all('a', rel="lecture-link"):
   link = videos.get('href')

   # Get the page apointed by the previous link in the same way
   f1 = urllib.urlopen(link)
   s1 = f1.read()
   soup1 = BeautifulSoup(s1)
 
   # Find all the source tags in the document and filter for 'video/mp4'
   for link in soup1.find_all('source'):
      if link.get('type') == "video/mp4":
      # You can concate 'wget' to build immediately an script
          print 'wget '+link.get('src')
{% endhighlight %}

A full documentation can be found [here](http://www.crummy.com/software/BeautifulSoup/bs4/doc/).

Be sure you have the `bs4` folder and a file with the previous code in the same workspace. 
Then you can execute your python file as usual and get the links to download the video lectures that you want.

Cheers!
