<?php
//Get paramenter
$ver=$_GET['ver'];
$date=$_GET['date'];
?>
<DOCTYPE HTML>
<html>
<head>
	<title>The User's Manual of LaTeX2HTML</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width">
	<link rel='stylesheet' id='dashicons-css' href='../css/latex.min.css' type='text/css' media='screen, print' />
	<link rel='stylesheet' id='dashicons-css' href='../css/print.min.css' type='text/css' media='print' />
	<link rel='stylesheet' id='dashicons-css' href='../css/manual.css' type='text/css' media='all' />
</head>
<body>
<div class="clearfix entry-content">
	<span class="latex_title">The User's Manual of LaTeX2HTML <?php echo $ver ?></span>
	<span class="latex_author">Van Abel</span>
	<span class="latex_date"><?php echo $date ?></span>
	<span class="latex_address">SJTU</span>
	<span class="latex_email">van141.abel(at)gmail.com</span>
	<div class='latex_abstract'>
		<span class='latex_abstract_h'>Abstract </span>
		<span class='latex_abstract_h'>.</span>
		<span>The LaTeX2HTML wordpress plugin is designed to make you publish a post from your latex document more quickly and conveniently. After a little pre-definition in your latex document, I find it works lovely.</span>
	</div>
	<div class='tableofcontent'>
		<span id="contents" style="text-align:center; font-size:18px; font-variant:small-caps;display:block;">Table of Contents</span>
		<span id="sec:content"><a href="#contents">Contents</a></span>
		<span>&#x00A0;1.&#x00A0;&#x00A0;<a href="#sec:1">How to Write the Basic Information of Your Post</a></span>
		<span>&#x00A0;2.&#x00A0;&#x00A0;<a href="#sec:2">How to Write Section, Subsection and Subsubsection</a></span>
		<span>&#x00A0;3.&#x00A0;&#x00A0;<a href="#sec:3">Itemize and Enumerate: How to List Stuffs</a></span>
		<span>&#x00A0;4.&#x00A0;&#x00A0;<a href="#sec:4">The Footnote</a></span>
		<span>&#x00A0;5.&#x00A0;&#x00A0;<a href="#sec:5">The Color Scheme: How to Colorize You Content</a></span>
		<span>&#x00A0;6.&#x00A0;&#x00A0;<a href="#sec:6">The Figure Environment</a></span>
		<span>&#x00A0;7.&#x00A0;&#x00A0;<a href="#sec:7">How to Write a Theorem</a></span>
		<span>&#x00A0;&#x00A0;&#x00A0;7.1.&#x00A0;&#x00A0;<a href="#sec:7.1">Definition, Lemma, Proposition, Theorem, Corollary, Remark, Proof</a></span>
		<span>&#x00A0;&#x00A0;&#x00A0;&#x00A0;&#x00A0;7.1.1.&#x00A0;&#x00A0;<a href="#sec:7.1.1">Basic Usage of Environments</a></span>
		<span>&#x00A0;&#x00A0;&#x00A0;&#x00A0;&#x00A0;7.1.2.&#x00A0;&#x00A0;<a href="#sec:7.1.2">Assign a Name for Your Theorem</a></span>
		<span>&#x00A0;&#x00A0;&#x00A0;&#x00A0;&#x00A0;7.1.3.&#x00A0;&#x00A0;<a href="#sec:7.1.3">The Proof Environment</a></span>
		<span>&#x00A0;&#x00A0;&#x00A0;&#x00A0;&#x00A0;7.1.4.&#x00A0;&#x00A0;<a href="#sec:7.1.4">More Examples of Environments</a></span>
		<span>&#x00A0;&#x00A0;&#x00A0;7.2.&#x00A0;&#x00A0;<a href="#sec:7.2">The Problem, Answer Environments</a></span>
		<span>&#x00A0;&#x00A0;&#x00A0;7.3.&#x00A0;&#x00A0;<a href="#sec:7.3">The Exercise Environment</a></span>
		<span>&#x00A0;&#x00A0;&#x00A0;7.4.&#x00A0;&#x00A0;<a href="#sec:7.4">The Quote Environment</a></span>
		<span>&#x00A0;8.&#x00A0;&#x00A0;<a href="#sec:8">Auto Numbering and Referring Back</a></span>
		<span>&#x00A0;&#x00A0;&#x00A0;8.1.&#x00A0;&#x00A0;<a href="#sec:8.1">Auto Numbering and Referring Back to Equations</a></span>
		<span>&#x00A0;&#x00A0;&#x00A0;&#x00A0;&#x00A0;8.1.1.&#x00A0;&#x00A0;<a href="#sec:8.1.1">How to Refer back to Equation Number</a></span>
		<span>&#x00A0;&#x00A0;&#x00A0;&#x00A0;&#x00A0;8.1.2.&#x00A0;&#x00A0;<a href="#sec:8.1.2">My Suggestion on "How to Write Equations"</a></span>
		<span>&#x00A0;&#x00A0;&#x00A0;8.2.&#x00A0;&#x00A0;<a href="#sec:8.2">Auto Numbering and Referring Back to Environments</a></span>
		<span>&#x00A0;&#x00A0;&#x00A0;&#x00A0;&#x00A0;8.2.1.&#x00A0;&#x00A0;<a href="#sec:8.2.1">Auto Numbering of Environments</a></span>
		<span>&#x00A0;&#x00A0;&#x00A0;&#x00A0;&#x00A0;8.2.2.&#x00A0;&#x00A0;<a href="#sec:8.2.2">Referring Back to Environments</a></span>
		<span>&#x00A0;&#x00A0;&#x00A0;8.3.&#x00A0;&#x00A0;<a href="#sec:8.3">Referring Back to Section</a></span>
		<span>&#x00A0;9.&#x00A0;&#x00A0;<a href="#sec:9">BibTeX Citations</a></span>
		<span>&#x00A0;&#x00A0;&#x00A0;9.1.&#x00A0;&#x00A0;<a href="#sec:9.1">How to Add BibTeX Data</a></span>
		<span>&#x00A0;&#x00A0;&#x00A0;9.2.&#x00A0;&#x00A0;<a href="#sec:9.2">How to Cite</a></span>
		<span>&#x00A0;10.&#x00A0;&#x00A0;<a href="#sec:10">Last Words and Feed Back</a></span>
		<span>&#x00A0;&#x00A0;&#x00A0;10.1.&#x00A0;&#x00A0;<a href="#sec:10.1">How to Jump Between Links</a></span>
		<span>&#x00A0;11.&#x00A0;&#x00A0;<a href="#sec:11">How to Get it?</a></span>
	</div>
	<h3 class="latex_section"><a id="sec:1"></a>
		1.&#x00A0;How to Write the Basic Information of Your Post
	</h3>
	<p>Just as in LaTeX, you can use <u>commands</u> such as:<code>\title</code>, <code>\author</code>, <code>\address</code>, <code>\date</code>, <code>\keywords</code> and the <u>environment</u> <code>abstract</code> to produce the basic information of your post. These command has the same meaning as in LaTeX, what's more,</p>
	<ul>
	  <li>you can use <code>\today</code> in <code>\date</code></li>
	  <li>you can use <code>\emph</code> to emphasis some thing</li>
	  <li>you can use <code>\tableofcontents</code> to get the table of contents</li>
	  <li>you can use <code>\email</code> or <code>\mailto</code> to set your mail, the first will be centered</li>
    <li>you can use <code>\href</code> or <code>\url</code> to add hyperlinks</li>
	</ul>
	<h3 class="latex_section"><a id="sec:2"></a>
		2.&#x00A0;How to Write Section, Subsection and Subsubsection
	</h3>
	<p>Just like in Latex, isn't it? Replace <code>\section</code> with <code>\subsection</code> and <code>\subsubsection</code> if you want to write subsection and subsubsection, respectively. How about <code>\subsubsubsection</code>? Sorry, there is no such command.</p>
	
	<p>Maybe you are still wandering: how do I get the list of contents by <code>\tableofcontents</code> command, one key factor is that I added a link just before each section and subsection, by which you can refer to it. See the referring back to <a class='latex_ref' href=#sec:8.3>Section 8.3</a> for detail.</p>
	<h3 class="latex_section"><a id="sec:3"></a>
		3.&#x00A0;Itemize and Enumerate: How to List Stuffs
	</h3>
	  As you have already saw, we can list the element with the same syntax as latex. What's more, it support nested list:
	<ul>
	  <li>Firstly</li>
	  <li>
		Secondly
		<ul>
		  <li>The first item of Second</li>
		  <li>
			The second item of Second
			<ul>
			  <li>The first item of the third item of second item</li>
			</ul>
		  </li>
		</ul>
	  </li>
	</ul>
	<p><code>Enumerate</code> works almost the same as <code>itemize</code>, except the style is different. For example replace <code>enumerate</code> in the above example with <code>enumerate</code>, then we get:
	<ol>
	  <li>Firstly</li>
	  <li>
		Secondly
		<ol>
		  <li>The first item of Second</li>
		  <li>
			The second item of Second
			<ol>
			  <li>The first item of the third item of second item</li>
			</ol>
		  </li>
		</ol>
	  </li>
	</ol>
	<h3 class="latex_section"><a id="sec:4"></a>
		4.&#x00A0;The Footnote
	</h3>
	You can use <code>\footnote</code> in latex2html with the version newer than 2.1.2, which will transform footnote into superscript with a hyperlink to its content at the end of post. Also <code>\footnotemark</code> and <code>\footnotetext</code> are supported (they are used when footnote is used in formula), but as MathJax can't parse math when there are html tags, the footnote in formula is not hyperlinked (I add blue color to distinguish it).
	<h3 class="latex_section"><a id="sec:5"></a>
		5.&#x00A0;The Color Scheme: How to Colorize You Content
	</h3>
	<p>As we have already shown that you can emphasis you content by <code>\emph</code>, one other way is use <code>\underline</code>. Besides, there is a more powerful scheme, now you emphasis some content with different colors, even for formulae.</p>
	<p>Firstly, you must decide which class your content belonged to, the <span style="color:green">text</span> content or the <span style="color:green">mathematics</span> content, since these two classes are processed by different scheme, <span style="color:green">text</span> is by <code>latex2html</code> and <span style="color:green">mathematics</span> by <code>mathjax</code>.</p>
	<p>Just as in Latex, the you can set a color for your formula by <code>\color{color_name}{color_formula}</code>. For example</p>
	\[
	\color{red}{a+b},\quad\color{blue}{a+b},\quad\color{green}{a+b}
	\]
	\[
	\frac{\color{cyan}{a+b}}{c+d}, \quad
	\frac{a}{\color{magenta}{a+b}},\quad
	\frac{a}{a+\color{yellow}{b}}
	\]
	<p>On the other hand, if you want to give color for your <span style="color:green">text</span> content, then you should use</p>
	<code>\textcolor{color_name}{color_contents}</code>, for example:
	<p><center>
	<span style="color:red">red</span> and <span style="color:blue">blue</span> and <span style="color:green">green</span> and <span style="color:cyan">cyan</span> and <span style="color:magenta">magenta</span> and <span style="color:yellow">yellow</span>.</center></p>
	<h3 class="latex_section"><a id="sec:6"></a>
		6.&#x00A0;The Figure Environment
	</h3>
	<p>In LaTeX2HTML version 2.1.0, I have add the ability to proceed <code>figure</code> environment. As an example, you can use</p>
	<p></p>
	<pre><code>\begin{figure}[!htbp]
	\centering
	\includegraphics{myfig.png}
	\caption{Just a test}
	\label{myfig}
\end{figure}
From the \autoref{myfig} we can see…</code></pre>
	 
	<p>Two important things need to be noted:</p>
	<ol>
	  <li>You must use the full-name of the figure, i.e. <code>myfig.png</code>; NOT <code>myfig</code>, since in the later case, we don't know which figure is to be inserted here;</li>
	  <li>after that you MUST upload the exact figure (named <code>myfig.png</code> in the example) to your WordPress as usual. All the later process is handled by LaTeX2HTML plugin, you can just preview to see the results.</li>
	</ol>
	<h3 class="latex_section"><a id="sec:7"></a>
		7.&#x00A0;How to Write a Theorem
	</h3>
	<p>There are two group of environments, which process the content such as <span class="latex_em">Theorem</span>. One is used for a post, in which you mainly state something formally, just like you do in a research paper; The other is used for problem-discussion situation, in which you ask questions and hope for some examples and answers.</p>
	<p>Of course the border is not so strict, for example the <span class="latex_em">examp</span> environment can used in both cases.</p>
	<p>Here are the complete list of environments you can use (The example will be pop up at some time later), I take first few words of a environment to represent it, for example <span class="latex_em">thm</span> for <span class="latex_em">Theorem</span>:</p>
	<ul>
	  <li>First group: <code>defn</code>(Definition), <code>lem</code>(Lemma), <code>prop</code>(Proposition), <code>thm</code>(Theorem), <code>cor</code>(Corollary), <code>rem</code>(Remark), <code>excs</code>(Exercise), <code>proof</code>(Proof)</li>
	  <li>Second group: <code>prob</code>(Problem), <code>answer</code>(Answer)</li>
	  <li>Mixed: <code>examp</code>(Example), <code>quote</code>(Quotation)</li>
	</ul>
	<p>I will go through the two group one by one, let's begin with the first group.</p>
	<h4 class="latex_subsection"><a id="sec:7.1"></a>
		7.1.&#x00A0;Definition, Lemma, Proposition, Theorem, Corollary, Remark, Proof
	</h4>
	<p>Firstly, you should keep in mind that: the distinguish between <span class="latex_em">command</span> and <span class="latex_em">environment</span> is</p>
	<blockquote>A <code>command</code> begin with a <code>\</code> and followed with the <code>name</code>, at last the content of command. It looks like <code>\emph{text}</code>; A <span class="latex_em">environment</span> must be wrapped by <code>begin</code> and <code>end</code>.</blockquote>
	<h5 class="latex_subsubsection"><a id="sec:7.1.1"></a>
		7.1.1.&#x00A0;Basic Usage of Environments
	</h5>
	<p>Here is an example of <code>definition</code> environment:</p>
	<pre><code>\begin{defn}
	Suppose that $(X,\mathcal M)$ and $(Y,\mathcal N)$ are measurable spaces, and $f:X\to Y$ is a map. We call $f$ is <span class="latex_em">measurable</span> if for every $B\in\mathcal N$ the set $f^{-1}(B)$ is in $\mathcal M$.
\end{defn}
</code></pre>
	<span id='defn:1'><span>
	<div class='latex_defn'>
		<span class='latex_defn_h'>Definition 1.</span>
		 Suppose that $(X,\mathcal M)$ and $(Y,\mathcal N)$ are measurable spaces, and $f:X\to Y$ is a map. We call $f$ is <span class="latex_em">measurable</span> if for every $B\in\mathcal N$ the set $f^{-1}(B)$ is in $\mathcal M$.
</div>
	<p>The other is similar, just replace <code>defn</code> with any one of the above environment:</p>
	<pre><code>\begin{rem}
	If $Y$ is a topological space, and $\mathcal N$ is the $\sigma$-algebra of Borel sets, then $f$ is measurable if and only if the following condition satisfied:
	\begin{itemize}
		\item For every open set $V$ in $Y$, the inverse image $f^{-1}(V)$ is measurable.
	\end{itemize}
\end{rem}</code></pre>
	<div class='latex_rem'>
	  <span class='latex_rem_h'>Remark 1</span><span class='latex_rem_h'>.</span> If $Y$ is a topological space, and $\mathcal N$ is the $\sigma$-algebra of Borel sets, then $f$ is measurable if and only if the following condition satisfied:
	  <ul>
		<li>For every open set $V$ in $Y$, the inverse image $f^{-1}(V)$ is measurable.</li>
	  </ul>
	</div>
	<h5 class="latex_subsubsection"><a id="sec:7.1.2"></a>
		7.1.2.&#x00A0;Assign a Name for Your Theorem
	</h5>
	<p>You can even assign a name to these environment, just as you did in latex, use <code>[text]</code> just behind the environment, for example:</p>
	<pre><code>\begin{lem}[fundamental lemma of integration]
	Let $\set{f_n}$ be a Cauchy sequence of step mappings. Then there exists a subsequence which converges pointwise almost everywhere, and satisfies the additional property: given $\eps$ there exists a set $Z$ of measure $&lt; \eps$ such that this subsequence converges absolutely and uniformly outside $Z$.
\end{lem}</code></pre>
	<div class='latex_lem'>
		<span class='latex_lem_h'>Lemma 2</span> 
		(<span class='latex_lem_name'>fundamental lemma of integration</span>)
		<span class='latex_lem_h'>.</span>
		Let $\set{f_n}$ be a Cauchy sequence of step mappings. Then there exists a subsequence which converges pointwise almost everywhere, and satisfies the additional property: given $\eps$ there exists a set $Z$ of measure $&lt; \eps$ such that this subsequence converges absolutely and uniformly outside $Z$.
	</div>
	<h5 class="latex_subsubsection"><a id="sec:7.1.3"></a>
		7.1.3.&#x00A0;The Proof Environment
	</h5>
	<p>The following are the <code>proof</code> environment, and some more examples, if you are impatient to other contents, then just skip this subsection by click <a class='latex_ref' href=#sec:7.2>Section 7.2</a>.</p>
	<div class='latex_proof'>
		<span class='latex_proof_h'>Proof </span>
		<span class='latex_proof_h'>.</span>
		For each integer $k$ there exists $N_k$ such that if $m,n\geq N_k$, then</p>
		  \[
		  \|f_m-f_n\|_1&lt; \frac{1}{2^{2k}}.
		  \]
		  We let our subsequence be $g_k=f_{N_k}$, taking the $N_k$ inductively to be strictly increasing. Then we have for all $m,n$:
		  \[
		  \|g_m-g_n\|_1 \]
		  We shall show that the series
		  \[
		  g_1(x)+\sum_{k=1}^\infty\left(g_{k+1}(x)-g_k(x)\right)
		  \]
		  converges absolutely for almost all $x$ to an element of $E$, and in fact we shall prove that this convergence is uniform except on a set of arbitrarily small measure.
		  Let $Y_n$ be the set of $x\in X$ such that
		  \[
		  |g_{n+1}(x)-g_n(x)|\geq\frac{1}{2^n}.
		  \]
		  Since $g_n$ and $g_{n+1}$ are step mappings, it follows that $Y_n$ has finite measure. On $Y_n$ we have the inequality
		  \[
		  \frac{1}{2^n}\leq|g_{n+1}-g_n|
		  \]
		  whence
		  \[
		  \frac{1}{2^n}\mu(Y)=\int_{Y_n}\frac{1}{2^n}\leq\int_X|g_{n+1}-g_{n}|\leq\frac{1}{2^{2n}}.
		  \]
		  Hence
		  \[
		  \mu(Y_n)\leq\frac{1}{2^n}.
		  \]
		  Let
		  \[
		  Z_n=Y_n\cup Y_{n+1}\cup\cdots.
		  \]
		  Then
		  \[
		  \mu(Z_n)\leq \frac{1}{2^{n-1}}.
		  \]
		  If $x\not\in Z_n$, then for $k\geq n$ we have
		  \[
		  |g_{k+1}(x)-g_k(x)| \]
		  and from this we conclude that our series
		  \[
		  \sum_{k=n}^\infty\left(g_{k+1}(x)-g_{k}(x)\right)
		  \]
		  is absolutely and uniformly convergent, for $x\not\in Z_n$. This proves the statement concerning the uniform convergence. If we let $Z$ be the intersection of all $Z_n$, then $Z$ has measure $0$, and if $x\not\in Z$, then $x\not\in Z_n$ for some $n$, whence our series converges for this $x$. This proves the lemma.
	</div>
	<h5 class="latex_subsubsection"><a id="sec:7.1.4"></a>
		7.1.4.&#x00A0;More Examples of Environments
	</h5>
	<div class='latex_thm'>
		<span class='latex_thm_h'>Theorem 3</span>
		<span class='latex_thm_h'>.</span>
		Let $f_n$ be a Cauchy sequence in $\mathcal L^1$ which is $L^1$-convergent to an element $f$ in $\mathcal L^1$. Then there exists a subsequence which converges to $f$ almost everywhere, and also such that given $\eps$, there exists a set $Z$ of measure $&lt; \eps$ such that the convergence is uniform on the complement of $Z$.
	</div>
	<div class='latex_cor'>
		<span class='latex_cor_h'>Corollary 4</span>
		<span class='latex_cor_h'>.</span>
		An element $f\in\mathcal L^1$ has seminorm $\|f\|_1=\int_X|f|\rd\mu=0$ if and only if $f$ is equal to $0$ almost everywhere.
	</div>
	<span id='prop:4'><span>
	<div class='latex_prop'><span class='latex_prop_h'>Proposition 5</span> 
		(<span class='latex_prop_name'>Monotone Convergence Theorem</span>)
		<span class='latex_prop_h'>.</span>
		Let $\set{f_n}$ be an increasing (resp. decreasing) sequence of real valued functions in $\mathcal L^1$ such that the integrals
		  \[
		  \int_X f_n\rd\mu
		  \]
		  are bounded. Then $\set{f_n}$ is a Cauchy sequence, and is both $\mathcal L^1$ and almost everywhere convergent to some function $f\in\mathcal L^1$.
	</div>
	<h4 class="latex_subsection"><a id="sec:7.2"></a>
		7.2.&#x00A0;The Problem, Answer Environments
	</h4>
	<p>The second group of environments are provided for discussion, after all, this is a discussion platform. They are: <code>prob</code> for Problem, <code>examp</code> for Example, and <code>answer</code> for Answer.</p>
	<p>It almost works the same as the first group, for example</p>
	<div class='latex_prob'>
		<span class='latex_prob_h'>Problem 1</span> (
		<span class='latex_prob_name'>Egoroff's theorem</span>)
		<span class='latex_prob_h'>.</span> 
		Assume that $\mu$ is $\sigma$-finite. Let $f:X\to E$ be a map and assume that $f$ is the pointwise limit of a sequence of simple maps $\set{\varphi_n}$. Given $\eps$, show that there exists a set $Z$ with $\mu(Z)&lt; \eps$ such that the convergence of $\set{\varphi_n}$ is uniform on the complement of $Z$.
	</div>
	<p>But, the differences between them is that, the <code>answer</code> is numbered with <code>prob</code> (the <code>examp</code>, <code>excs</code>, <code>rem</code> will numbered independently), to see this, for example:</p>
	<div class='latex_answer'>
		<span class='latex_answer_h'>Answer 1.1</span>
		<span class='latex_answer_h'>.</span>
		Assume first that $\mu(X)$ is finite. Let $A_k$ be the set where $|f|\geq k$. The intersection of all $A_k$ is empty so their measures tend to $0$. Excluding a set of small measure, you can assume that $f$ is bounded, in which case $f$ is in $\mathcal L^1(\mu)$ and you can use the fundamental lemma of integration.
	</div>
	<div class='latex_answer'>
		<span class='latex_answer_h'>Answer 1.2</span>
		<span class='latex_answer_h'>.</span> This is another answer for the problem.
	</div>
	<p>You should note that the number of answer is reset to 1 by <code>prob</code>, of course, more reasonable. For example:</p>
	<div class='latex_prob'>
		<span class='latex_prob_h'>Problem 2</span>
		<span class='latex_prob_h'>.</span>
		Why we should firstly process the positive measurable functions, then the real measurable functions and at last the complex measurable functions for the integral of measurable functions?
	</div>
	<span id='answer:2.1'><span>
	<div class='latex_answer'>
		<span class='latex_answer_h'>Answer 2.1</span>
		<span class='latex_answer_h'>.</span>
		In fact, you can define the integral of complex function directly.
	</div>
	<h4 class="latex_subsection"><a id="sec:7.3"></a>
		7.3.&#x00A0;The Exercise Environment
	</h4>
	<p>Maybe, at somewhere, you want the reader consider about something, then you can use <code>excs</code> environment for Exercise. <em>Please keep in mind that it will have independent numbering, just as <code>prob</code>, but will <span class="latex_em">not reset</span> the number of answer</em>. Here is an example:</p>
	<div class='latex_excs'>
		<span class='latex_excs_h'>Exercise 1</span>
		<span class='latex_excs_h'>.</span> Suppose $(X,\mu)$ is a measure space, and that $f$ is measurable, then $\int_X f\rd \mu=0$ if and only if $f\equiv0$ almost everywhere.
	</div>
	
	<h4 class="latex_subsection"><a id="sec:7.4"></a>
		7.4.&#x00A0;The Quote Environment
	</h4>
	<p>Sometimes, there are some words or comments on the content, it is like a remark, but it is not so formal. And, if you are write a lecture notes, these words may be the lecturer said before or after an important thing, such as theorems. I have defined a new environment <code>quote</code> to deal with these stuff. For example:</p>
	Before the theorem
	<div class='latex_thm'>
	  <span class='latex_thm_h'>Theorem 6</span>
	  <span class='latex_thm_h'>.</span>
	  Let $\Omega\subset\R^n$ and $u:\Omega\to\R$, then
	  <ol>
		<li>If $u\in C^2(\Omega)$ is harmonic in $\Omega$, then $u$ satisfies MVP;</li>
		<li>If $u\in C(\Omega)$ satisfies MVP, then $u$ is smooth and harmonic.</li>
	  </ol>
	</div>
	<p>we want to add a comment on it, then you can use the <code>quote</code> environment</p>
	<blockquote>A function satisfying mean-value properties is only required to be continuous. However, a harmonic function is required to be $C^2$. Thus, the equivalence of this two kind of functions will be significant.</blockquote>
	<h3 class="latex_section"><a id="sec:8"></a>
		8.&#x00A0;Auto Numbering and Referring Back
	</h3>
	<p>The plugin supports two groups of referring back, the first is for <code>section</code> and theorem environment e.g. <code>thm</code>. The second is done by mathjax, which support math formulae auto-numberring .</p>
	<h4 class="latex_subsection"><a id="sec:8.1"></a>
		8.1.&#x00A0;Auto Numbering and Referring Back to Equations
	</h4>
	<p>All the <code>mathematical</code> environments: <code>equation</code>, <code>align</code>, <code>multline</code>, <code>gather</code> will auto-numbering. For example</p>
	\begin{equation}\begin{cases}
	3=2x+y\\
	3=y+2x\end{cases}
	\end{equation}
	<p>An example of <code>multline</code>, which will make the last line flush right:</p>
	\begin{multline}\label{eq:2}
	\int_a^b \biggl\{ \int_a^b [ f(x)^2 g(y)^2 + f(y)^2 g(x)^2 ]
	-2f(x) g(x) f(y) g(y) \,dx \biggr\} \,dy \\
	=\int_a^b \biggl\{ g(y)^2 \int_a^b f^2 + f(y)^2
	\int_a^b g^2 &#8211; 2f(y) g(y) \int_a^b fg \biggr\} \,dy
	\end{multline}
	<p>The next example will show how to numbered the equation at a given line with <code>\tag{4.a}</code>:</p>
	<pre><code>\begin{gather}
	\begin{split}
		\varphi(x,z)
		&amp;= z – \gamma_{10} x – \sum_{m+n\ge2} \gamma_{mn} x^m z^n\\
		&amp;= z – M r^{-1} x – \sum_{m+n\ge2} M r^{-(m+n)} x^m z^n
	\end{split}\tag{4.a}\label{eq:4a}\\
	\begin{split}
		\zeta^0 &amp;= (\xi^0)^2, \\
		\zeta^1 &amp;= \xi^0 \xi^1
	\end{split}\notag
\end{gather}</code></pre>
	\begin{gather}
	\begin{split}
		\varphi(x,z)
		&amp;= z – \gamma_{10} x – \sum_{m+n\ge2} \gamma_{mn} x^m z^n\\
		&amp;= z – M r^{-1} x – \sum_{m+n\ge2} M r^{-(m+n)} x^m z^n
	\end{split}\tag{4.a}\label{eq:4a}\\
	\begin{split}
		\zeta^0 &amp;= (\xi^0)^2, \\
		\zeta^1 &amp;= \xi^0 \xi^1
	\end{split}\notag
	\end{gather}
	<h5 class="latex_subsubsection"><a id="sec:8.1.1"></a>
		8.1.1.&#x00A0;How to Refer back to Equation Number
	</h5>
	<p>If you want to refer the equation, you can add a label <code>\label{eq:4a}</code>, and rerer as <code>\eqref{eq:4a}</code>, it looks as \eqref{eq:4a}.</p>
	<h5 class="latex_subsubsection"><a id="sec:8.1.2"></a>
		8.1.2.&#x00A0;My Suggestion on "How to Write Equations"
	</h5>
	<ol>
	  <li>if you use <code>&gt;</code> or <code>&lt;</code> for <code>greater</code> and <code>lesser</code> in math, please add a blank-space before <code>&gt;</code> and a blank-space after <code>&lt; </code>. Or you will make the HTML translation program confused, since <span class="latex_em"></span> are standard tags for HTML language(code).</li>
	  <li>use<code>$$</code> for inline math</li>
	  <li>use<code>\[\]</code> for oneline unnumbered display math</li>
	  <li>use star version for multiline unnumbered display math, for example, use <code>gather*</code> environment for centered multiline equations</li>
	  <li>use <code>equation</code> environment for oneline numbered display math</li>
	  <li>use <code>align</code> environment for multiline numered display math, if you want make them aligned at some position( use &amp; to set the point of align)</li>
	</ol>
	<h4 class="latex_subsection"><a id="sec:8.2"></a>
		8.2.&#x00A0;Auto Numbering and Referring Back to Environments
	</h4>
	<h5 class="latex_subsubsection"><a id="sec:8.2.1"></a>
		8.2.1.&#x00A0;Auto Numbering of Environments
	</h5>
	<p>All the environments except <code>proof</code> are auto numbered by <code>latex2html</code>, and the <code>rem</code>, <code>prob</code>, <code>excs</code>, <code>claim</code> are numbered independently, what's more, the number of <code>answer</code> will be reset by <code>prob</code>. The other environment will numbered continuously in one post (on one page, which means, if you use the <code>&lt;!&#8211;nextpage&#8211;&gt;</code> to have another page, then the number will all over begin from 1, if you consider this as an bug, sorry, I can't fix it.)</p>
	<h5 class="latex_subsubsection"><a id="sec:8.2.2"></a>
		8.2.2.&#x00A0;Referring Back to Environments
	</h5>
	<p>You can refer to the <code>Theorem</code>, <code>Lemma</code>, <code>Corollary</code>, <code>Definition</code>, <code>Proposition</code>, <code>Remark</code>, <code>Problem</code>, <code>Exercise</code>, and <code>Answer</code> environments by:</p>
	<ul>
	  <li>first add a <code>\label{thm:labnum}</code></li>
	  <li>and use <code>\ref{thm:labnum}</code> or <code>\autoref{thm:labnum}</code> to refer back</li>
	</ul>
	<p>From <a class='latex_ref' href=#defn:1>Definition 1</a> we know that&#8230;<br />
	From <a class='latex_ref' href=#prop:4>Proposition 5</a> we know that&#8230;<br />
	From <a class='latex_ref' href=#answer:2.1>Answer 2.1</a> we know that&#8230;</p>
	<h4 class="latex_subsection"><a id="sec:8.3"></a>
		8.3.&#x00A0;Referring Back to Section
	</h4>
	<p>You can use <code>\autoref{sec:1}</code> to refer back to <a class='latex_ref' href=#sec:1>Section 1</a>, and <code>\ref{sec:8.1}</code> to refer back to Subsection 1 of Section 8, which will looks like <a class='latex_ref' href=#sec:8.1>8.1</a>, and <code>\autoref{sec:821}</code> to refer back to Subsubsection 1 of Subsection 2 of Section 8, which will looks like <a class='latex_ref' href=#sec:8.2.1>Section 8.2.1</a>.</p>
	<h3 class="latex_section"><a id="sec:9"></a>
		9.&#x00A0;BibTeX Citations
	</h3>
	<p>The main new feature of version 2.0.0 is add the BibTeX citation support. By which, you can cite references like in LaTeX.</p>
	<h4 class="latex_subsection"><a id="sec:9.1"></a>
		9.1.&#x00A0;How to Add BibTeX Data
	</h4>
	<p>To add the bibtex data, just turn to the <code>LaTeX2HTML</code> setting page, under the <code>BibTeX</code> table, you can paste you bibtex data into the input box. </p>
	<p>I have add an example data. Also try to <span class="latex_em">double click</span> to restore the last content in the input box.</p>
	<h4 class="latex_subsection"><a id="sec:9.2"></a>
		9.2.&#x00A0;How to Cite
	</h4>
	<p><code>LaTeX2HTML</code> support <code>\nocite</code>, <code>\cite</code> and <code>\citeauthor</code>, all of them require the exactly <code>bibkey</code> (which means <code>\nocite{*} </code>will not work and it is <span class="latex_underline">case sensative</span>).</p>
	<p>It also support <code>\citelist</code> of amsrefs. The include page number or theorem number and so on, you can use the <code>amsrefs</code> style command <code>\cite{bibkey}*{Thm. 1.2, p. 1}</code>.</p>
	<h3 class="latex_section"><a id="sec:10"></a>
		10.&#x00A0;Last Words and Feed Back
	</h3>
	<p>This document contains the usage of the plugin <span class="latex_em">latex2html</span>, and if you find any errors, or have any suggestions even bugs of the plugin, I strongly suggest you to have a look of the <a href="https://wordpress.org/support/plugin/latex2html" target="_blank">issue</a> or create a new one., or sent a mail to me: van141.abel(at)gmail.com.
	</p>
	<p>It takes me about one month to write the plugin, I'm too tired to feel glad when I finally finished it. I don't know whether it will help you a litter to post mathematics with latex language or not, but if it do have any, I will fell much better.</p>
	<h4 class="latex_subsection"><a id="sec:10.1"></a>
		10.1.&#x00A0;How to Jump Between Links
	</h4>
	<p>If you have just click on a link, then you can go back where you were just by <span class="latex_em">Alt+←</span></p>
	<h3 class="latex_section"><a id="sec:11"></a>
		11.&#x00A0;How to Get it?
	</h3>
	  To get it, visit the plugin on wordpress' plugin store: <a href="https://wordpress.org/plugins-wp/latex2html/" target="_blank">https://wordpress.org/plugins-wp/latex2html/</a>.
	</p>
</div>
<script type='text/javascript'>
        newContainer = document.createElement('span');
        newContainer.style.setProperty('display','none','');
        newNode = document.createElement('script');
        newNode.type = 'math/tex';
        newNode.innerHTML = '\\newcommand{\\A}{\\mathcal{A}}\n\\newcommand{\\Aut}{\\operatorname{Aut}}\n\\newcommand{\\comp}{\\circ}\n\\newcommand{\\eps}{\\varepsilon}\n\\newcommand{\\embedto}{\\hookrightarrow}\n\\newcommand{\\G}{\\mathcal{G}}\n\\newcommand{\\R}{\\bm{R}}\n\\newcommand{\\rd}{\\operatorname{d}}\n\\newcommand{\\g}{\\mathfrak{g}}\n\\newcommand{\\End}{\\mathrm{End}}\n\\newcommand{\\h}{\\mathfrak{h}}\n\\newcommand{\\ad}{\\operatorname{ad}}\n\\newcommand{\\Ad}{\\operatorname{Ad}}\n\\newcommand{\\set}[1]{\\left\\{#1\\right\\}}\n\\newcommand{\\id}{\\operatorname{Id}}\n\\newcommand{\\gl}{\\mathfrak{gl}}\n\\newcommand{\\div}{\\operatorname{div}}\n\\newcommand{\\tr}{\\operatorname{tr}}\n\\newcommand{\\pt}{\\partial}\n\\newcommand{\\char}{\\operatorname{char}}\n\\newcommand{\\Z}{\\mathbb{Z}}\n\\newcommand{\\eqdef}{\\mathpunct{:}=}\n\\newcommand{\\bm}{\\mathbb}\n\\newcommand{\\C}{\\mathbb{C}}\n\\newcommand{\\H}{\\mathbb{H}}\n\\newcommand{\\N}{\\mathbb{N}}\n\\newcommand{\\vol}{\\operatorname{vol}}\n\\newcommand{\\dd}{\\mathbb{D}}\n\\newcommand{\\ppt}[1]{\\frac{\\pt}{\\pt{#1}}}\n\\newcommand{\\To}{\\to}\n\\newcommand{\\norm}[1]{\\|#1\\|}\n\\newcommand{\\inner}[1]{\\left\\langle#1\\right\\rangle}\n\\newcommand{\\weakto}{\\rightharpoonup}';
        newContainer.appendChild(newNode);
        document.body.insertBefore(newContainer,document.body.firstChild);
</script>
<script type="text/x-mathjax-config">
        MathJax.Hub.Config({
  tex2jax: {
    inlineMath: [['$','$'], ["\\(","\\)"]],
    displayMath: [['$$', '$$'], ["\\[", "\\]"]],
    processEscapes: true
  },
  TeX: {
    equationNumbers: {autoNumber: "AMS",
    useLabelIds: true}
  },
}); 
</script>
<script data-cfasync="false" src="https://cdn.mathjax.org/mathjax/latest/MathJax.js?config=TeX-AMS-MML_SVG.js"></script>
</body>
</html>
