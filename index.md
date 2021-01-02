---
title: Me
layout: page
---

<div class="row">
<div class="col-md-4 col-xs-12 text-center">
    <div class="centerBlock">
        <img id="image_main" alt="Emir Muñoz" width="160" height="160" src="/assets/me.png">
    </div>
    <!--<b>
        <span property="foaf:title"></span>
        <span property="foaf:givenname">Emir</span>
        <span property="foaf:familyName">Muñoz</span>
    </b>-->
</div>

<div class="col-md-8 col-xs-12 text-justify">
<p>
I am a Team Lead - Staff Machine Learning engineer at <a href="https://www.genesys.com/">Genesys</a>. I'm part of the AI Group and work building Machine Learning services to improve customer experience and optimise call centres routing.
</p>
<p>
I hold a PhD from <a href="https://www.nuigalway.ie/">National University of Ireland, Galway</a>, a BEng and MSc in Computer Engineering from <a href="https://www.usach.cl/">Universidad de Santiago, Chile</a>.
</p>
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
