---
layout: page
title: Publications
permalink: /publications/
---

<p><i class="fa fa-sort"></i>&nbsp;<a href="/publications">sorted by type</a> | <a href="/publications/by_year.html">sorted by year</a></p>

<p>
Databases:
{% for site in site.data.databases %}
<a href="{{ site.url }}" target="_blank">@{{ site.name }}</a>
{% endfor %}
</p>


### Thesis

{% bibliography --file thesis %}

### Journal Articles

{% bibliography --file journals %}

### Conference Papers

{% bibliography --file conferences %}

### Workshop Papers

{% bibliography --file workshops %}

### Poster & Demo Papers

{% bibliography --file posters-demos %}

### Patents

{% bibliography --file patents %}

{% comment %}

### PhD Thesis

{% bibliography --file phd_thesis %}

### Book Chapters

{% bibliography --file books %}

### Misc

{% bibliography --file misc %}

{% endcomment %}

