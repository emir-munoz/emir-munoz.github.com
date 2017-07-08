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

{% bibliography --query @*[type=thesis] %}

### Journal Articles

{% bibliography --query @*[type=journal] %}

### Conference Papers

{% bibliography --query @*[type=conference] %}

### Workshop Papers

{% bibliography --query @*[type=workshop] %}

### Poster & Demo Papers

{% bibliography --query @*[type=poster_demo] %}

### Patents

{% bibliography --query @*[type=patent] %}

{% comment %}

### Book Chapters

{% bibliography --query @*[type=book] %}

### Misc

{% bibliography --query @*[type=misc] %}

{% endcomment %}

