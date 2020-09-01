---
title: Publications
permalink: "/publications/by_year"
layout: page
---

<p><i class="fa fa-sort"></i>&nbsp;<a href="/publications">sorted by type</a> | <a href="/publications/by_year.html">sorted by year</a></p>

<p>
Databases:
{% for site in site.data.databases %}
<a href="{{ site.url }}" target="_blank">@{{ site.name }}</a>
{% endfor %}
</p>

### 2019

{% bibliography --query @*[year=2019] %}

### 2018

{% bibliography --query @*[year=2018] %}

### 2017

{% bibliography --query @*[year=2017] %}

### 2016

{% bibliography --query @*[year=2016] %}

### 2015

{% bibliography --query @*[year=2015] %}

### 2014

{% bibliography --query @*[year=2014] %}

### 2013

{% bibliography --query @*[year=2013] %}

### 2012

{% bibliography --query @*[year=2012] %}
