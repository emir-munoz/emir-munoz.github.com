---
layout: post
title: LaTex Links
category: Utils
tagline: "PhD utils"
tags : [phd, utils, latex]
summary: Useful links for who works with LaTex documents.
status: final
hn-discussion:
---

{% include JB/setup %}

<div style="visibility: hidden; overflow: hidden; position: absolute; top: 0px; height: 1px; width: auto; padding: 0px; border: 0px; margin: 0px; text-align: left; text-indent: 0px; text-transform: none; line-height: normal; letter-spacing: normal; word-spacing: normal;">
	<div id="MathJax_Hidden"></div>
</div>
<div id="MathJax_Message" style="display: none;"></div>

<br />
<dl>
	<dt><a target="_blank" href="https://www.sharelatex.com/">ShareLaTex:</a></dt>
	<dd>Online pdflatex compiler that allow you to do a collaborative LaTex document.</dd>

	<dt><a target="_blank" href="http://detexify.kirelabs.org/classify.html">Detaxify:</a></dt>
	<dd>A great way of finding LaTeX symbols just drawing it.</dd>

	<dt><a target="_blank" href="http://www.texample.net/">TeXample.net:</a></dt>
	<dd>Documentation about TikZ.</dd>

	<dt><a target="_blank" href="http://mathurl.com">mathURL:</a></dt>
	<dd>Live equation editing · permanent short links · LaTeX+AMS input.</dd>

	<dt><a target="_blank" href="http://webdemo.visionobjects.com/equation.html?locale=default">WebEquation:</a></dt>
	<dd>Write an equation and get the LaTex or MathML source.</dd>

	<dt><a target="_blank" href="http://www.mathjax.org/">MathJax:</a></dt>
	<dd>An open source JavaScript display engine for mathematics that works in all modern browsers.</dd>
</dl>

<!--more-->

The following is an example of MathJax:

Complex formula: 

$$
\begin{align*}
  & \phi(x,y) = \phi \left(\sum_{i=1}^n x_ie_i, \sum_{j=1}^n y_je_j \right)
  = \sum_{i=1}^n \sum_{j=1}^n x_i y_j \phi(e_i, e_j) = \\
  & (x_1, \ldots, x_n) \left( \begin{array}{ccc}
      \phi(e_1, e_1) & \cdots & \phi(e_1, e_n) \\
      \vdots & \ddots & \vdots \\
      \phi(e_n, e_1) & \cdots & \phi(e_n, e_n)
    \end{array} \right)
  \left( \begin{array}{c}
      y_1 \\
      \vdots \\
      y_n
    \end{array} \right)
\end{align*}
$$

The following is a math block:

$$ 5 + 5 $$
\$\$ 5 + 5 $$

But next comes a paragraph with an inline math statement:

\$$ 5 + 5 $$


<script src="http://cdn.mathjax.org/mathjax/latest/MathJax.js?config=TeX-AMS-MML_HTMLorMML" type="text/javascript"></script>
