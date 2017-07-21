---
title: Publications
permalink: "/publications/"
layout: page
---

<p><i class="fa fa-sort"></i>&nbsp;<a href="/publications">sorted by type</a> | <a href="/publications/by_year.html">sorted by year</a></p>

<p>
Databases:
{% for site in site.data.databases %}
<a href="{{ site.url }}" target="_blank">@{{ site.name }}</a>
{% endfor %}
</p>


### Thesis

{% bibliography --query @*[type_=thesis] %}

### Journal Articles

{% bibliography --query @*[type_=journal] %}

### Conference Papers

{% bibliography --query @*[type_=conference] %}

### Workshop Papers

{% bibliography --query @*[type_=workshop] %}

### Poster & Demo Papers

{% bibliography --query @*[type_=poster_demo] %}

### Patents

{% bibliography --query @*[type_=patent] %}

{% comment %}

### Book Chapters

{% bibliography --query @*[type_=book] %}

### Misc

{% bibliography --query @*[type_=misc] %}

{% endcomment %}

