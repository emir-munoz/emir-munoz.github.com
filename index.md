---
title: Me
layout: page
---

<div class="row">
<div class="col-md-4 col-xs-12 text-center">
    <div class="centerBlock">
        <img id="image_main" alt="Emir Muñoz" width="200" height="187" src="/assets/me.jpg">
    </div>
    <b>
        <span property="foaf:title"></span>
        <span property="foaf:givenname">Emir</span>
        <span property="foaf:familyName">Muñoz</span>
    </b>
</div>

<div class="col-md-8 col-xs-12 text-justify">
I'm a PhD Student at the National University of Ireland (NUI) Galway and Researcher at Fujitsu Ireland Ltd. 
I started the PhD programme on February 2014. 
Before that I worked as Research Assistant at Digital Enterprise Research Institute (DERI, now INSIGHT) since October 2012. 
I am also a Computer Engineer and I hold a Master degree in Computer Engineering both from University of Santiago de Chile.
<br><br>
My general research interests fall into Databases, Web Data Mining, and Artificial Intelligence, with specific interests on 
Machine Learning from Structured Data and Knowledge Graphs, Statistical Relational Learning, and Semantic Web and Linked Data.
Currently, focused on knowledge graphs and the analysis of their structure, constraints, and completeness.
</div>
</div>

<hr />

<div class="row">
<div class="col-md-12 col-xs-12">
    <h4><b>Latest news</b></h4>
    <ul>
        {% for entry in site.data.news %}
            {% if entry.display == "true" %}
            <li><span class="label label-success">NEW ({{ entry.date }})</span>&nbsp;<span>{{ entry.headline }}</span></li>
            {% endif %}
        {% endfor %}
    </ul>
</div>
</div>
