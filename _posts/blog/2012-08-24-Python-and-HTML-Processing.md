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

Trying to harvest some links from the Coursea Lectures, in a fast and efficient way saving me valuable time, 
I decided to use Python with [Beautiful Soup](http://www.crummy.com/software/BeautifulSoup/).

> Beautiful Soup is a Python library designed for quick turnaround projects like screen-scraping. 
> It parses anything you give it, and does the tree traversal stuff for you. You can tell it 
> "Find all the links", or "Find all the links of class externalLink", or "Find all the links whose 
> urls match "foo.com", or "Find the table heading that’s got bold text, then give me that text."

First, you need to download the library from this [link](http://www.crummy.com/software/BeautifulSoup/bs4/download/) and untar the bs4 folder in your workspace.
The library is really simple and intuitive to use, since represent the HTML document as a nested data structure.

Too much chatter, now I'm going to show you the python code :)

```

   #!/usr/bin/env python
```


A full documentation can be found [here](http://www.crummy.com/software/BeautifulSoup/bs4/doc/).

Be sure you have the `bs4` folder and a file with the previous code in the same workspace. 
Then you can execute your python file as usual and get the links to download the video lectures that you want.

Cheers!
