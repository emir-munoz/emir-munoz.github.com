---
layout: post
title: Reducing space Theorems, Proofs, Lemmas, etc in LaTex
categories: utils
tagline: "Hacking"
tags : [utils, latex, phd]
summary:
status: final
hn-discussion:
---

_This post was first published on my Wordpress page [link](http://depinfi.wordpress.com/2012/11/26/reducing-space-theorems-proofs-lemmas-etc-in-latex/)_

If you need to make more space in your papers (space is valuable in this cases), 
because the (vertical) space between theorems, proofs, lemmas, remarks, examples, 
and definitions with other paragraphs is too large. Here I will show a little trick to do that.

We need to import the `asmthm` package. But, not too fast, this will trigger an error. 
So, above the import we need to add two lines that solve the bug related with an 
incompatibility in the proof enviroment (or macro).

Then we are ready to define our theorem style with the desire spaces and fonts as follows:

{% highlight latex %}
\let\proof\relax
\let\endproof\relax
\usepackage{amsthm} %http://ctan.org/pkg/amsthm
\newtheorem{theorem}{Theorem}
\newtheoremstyle{exampstyle}
  {\topsep} % Space above
  {\topsep} % Space below
  {} % Body font
  {} % Indent amount
  {\bfseries} % Theorem head font
  {.} % Punctuation after theorem head
  {.5em} % Space after theorem head
  {} % Theorem head spec (can be left empty, meaning 'normal')
\theoremstyle{exampstyle} \newtheorem{example}{Example}
\theoremstyle{exampstyle} \newtheorem{remark}{Remark}
\theoremstyle{exampstyle} \newtheorem{definition}{Definition}
\theoremstyle{exampstyle} \newtheorem{lemma}{Lemma}
{% endhighlight %}

This code will enumerate each enviroment –theorem, proof, etc– independly. 
If you are wishing to enumerate relatively to sections you have to use these modifications.

{% highlight latex %}
\let\proof\relax
\let\endproof\relax
\usepackage{amsthm} %http://ctan.org/pkg/amsthm
\newtheorem{theorem}{Theorem}[section]
\newtheoremstyle{exampstyle}
  {\topsep} % Space above
  {\topsep} % Space below
  {} % Body font
  {} % Indent amount
  {\bfseries} % Theorem head font
  {.} % Punctuation after theorem head
  {.5em} % Space after theorem head
  {} % Theorem head spec (can be left empty, meaning 'normal')
\theoremstyle{exampstyle} \newtheorem{example}[theorem]{Example}
\theoremstyle{exampstyle} \newtheorem{remark}[theorem]{Remark}
\theoremstyle{exampstyle} \newtheorem{definition}[theorem]{Definition}
\theoremstyle{exampstyle} \newtheorem{lemma}[theorem]{Lemma}
{% endhighlight %}

In the style you can customize the environments with your preferences and even create more than one style if necessary.

Cheers!
