=== LaTeX2HTML ===

Contributors: van-abel
Donate link: https://www.paypal.me/abelvan
Tags: LaTeX, MathJaX, HTML
Requires at least: 3.0
Tested up to: 5.2
Stable tag: "trunk"
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

LaTeX2HTML makes you write blog like in LaTeX doc.

== Description ==
LaTeX2HTML makes you write blog like in LaTeX doc. You can just copy and paste to create a new post in WP from your tex source file, then it will looks like `amsart` document style. It support a lot of raw latex command including theorem like environment and BibTeX style citation.

<h3>Main Functions</h3>
<ul>
<li>Enable <a href="https://www.mathjax.org">MathJax</a> to render math formula.</li>
<li>Translate raw LaTeX (almost all the command of amsart) to HTML+CSS markup.</li>
<li>Almost every thing is customizable, but also works perfect by default. e.g., support \newcommand</li>
</ul>

== Installation ==

1. (Recommend: Automatically installation) If you install from WP plugin page, just search `latex2html` and click Install.
2. (Manually installation) Extract the zip file (that's you will get `latex2html`--A file directory) and just drop it in the `wp-content/plugins/`directory of your WordPress installation
3. Then activate the Plugin from Plugins page.
4. (Optional) Do the <a href="http://wordpress.org/extend/plugins/latex2html/faq/">Test Example</a> (see FAQ).

== Frequently Asked Questions ==

Any question can be feed back at there (turn to the `support` pannel)

1. After you updating to Wordpress 5.0 or higher, in the new new block editor, you can switch to HTML code mode from Visual mode by `Ctrl+Shift+Alt+M`. Or you can use the <a href="https://wordpress.org/plugins/classic-editor/" target="_blank">Classical Editor</a>.

### User's Manual (included in the LaTeX2HTML's setting page)
  The full User's Manual contains:
<pre>
 1.  How to Write the Basic Information of Your Post
 2.  How to Write Section, Subsection and Subsubsection
 3.  Itemize and Enumerate: How to List Stuffs
 4.  The Footnote
 5.  The Color Scheme: How to Colorize You Content
 6.  The Figure Environment
 7.  How to Write a Theorem
   7.1.  Definition, Lemma, Proposition, Theorem, Corollary, Remark, Proof
     7.1.1.  Basic Usage of Environments
     7.1.2.  Assign a Name for Your Theorem
     7.1.3.  The Proof Environment
     7.1.4.  More Examples of Environments
   7.2.  The Problem, Answer Environments
   7.3.  The Exercise Environment
   7.4.  The Quote Environment
 8.  Auto Numbering and Referring Back
   8.1.  Auto Numbering and Referring Back to Equations
     8.1.1.  How to Refer back to Equation Number
     8.1.2.  My Suggestion on “How to Write Equations”
   8.2.  Auto Numbering and Referring Back to Environments
     8.2.1.  Auto Numbering of Environments
     8.2.2.  Referring Back to Environments
   8.3.  Referring Back to Section
 9.  BibTeX Citations
   9.1.  How to Add BibTeX Data
   9.2.  How to Cite
 10.  Last Words and Feed Back
   10.1.  How to Jump Between Links
 11.  How to Get it?
 </pre>

### A Test Example
  For a test, you can do the following:

<pre><code>
\title{Hello LaTeX2HTML}
\begin{thm}[Newdon-Leibniez]\label{thm:NL}
If $f\in C^1([a,b])$ then
\begin{equation}\label{eq:NL}
\int_a^b f'(x) d x=f(b)-f(a)
\end{equation}
In \autoref{thm:NL} the main part is \eqref{eq:NL}.
\end{thm}
</code></pre>

  Add a new post (it should be in the `HTML` code mode rather than the `visual` mode), copy the code into your new post, then preview it.

  In fact, after a while you will find that it almost as if you were write your `TeX` doc rather than a post!

  == Screenshots ==

  1. MathJax Setting
  2. LaTeX Setting
  3. BibTeX Setting
  4. Support

  == License ==

  Good news, this plugin is free for everyone! Since it's released under the GPL2, you can use it free of charge on your personal or commercial blog.

  == Upgrade Notice ==
  Totally rebuild based on the newest wordpress functions also support `BibTeX` style citation with a well formatted `setting page`.
  == Changelog ==

  = 2.3.7 =

  * Compatibility test upto wordpress 5.1
  * Fix the `\footnote` command bug
  * Add thumbnail for plugin

  = 2.3.6 =

  * Compatibility test upto wordpress 5.0
  
  = 2.3.5 =

  * Add the support of `\href{link}{text}`  `\url{link}`
  * Update the default setting for mathjax cdn:`https://cdnjs.cloudflare.com/ajax/libs/mathjax/2.7.5/MathJax.js?config=TeX-AMS-MML_SVG.js`
  * Update the default setting for latex css by adding QED symbol at the end of proof:
    <pre>
    .latex_proof::after{
      content: "\220E";
      color: gray;
      text-align: right;
      display: block;
      font-size: 1.2em;
    }
    </pre>
  * Update the user's manual
    
  = 2.3.4 =
  
  * Fix the link source error in setting page
 
  = 2.3.3 =
  
  * Update the translation template
  
  = 2.3.2 =
  
  * Minor fix the css of manual
   
  = 2.3.1 =
  
  * Minor fix: some typo in manual
  
  = 2.3.0 =
  
  * Fix nest list css
  * Add user's manual on setting page
  * Add instruction of localization
  
  = 2.2.1 =
  
  * Test compatibility upto newest WordPress version( current 4.9.1)

  = 2.2.0 =

  * Remove duplicate upgrade process, and now users only need to interact when we upgrade from the older version (less than 1.2.3) to the newer one
  * Remove the language file under `lang/`, only reserve `latex2html.pot`, because we can use the online translation provided by wordpress
  * Update the online translation guide (under `Support & Credit` -> `How to Localize`)

  = 2.1.4 =

  * Minor fix: correct the typo Excise->Exercise and infomation->Information

  = 2.1.3 =

  * Minor fix: fix the tag `<em>`
  * Update compatibility to Wordpress 4.8

  = 2.1.2 =

  * Add: support footnote for math and text
  * update the user's manual
  * Add FAQ: How to translate it into your native language

  = 2.1.1 =

  * Fix: the wront text-domain in plugin header: it should be the same as plugin name rather than val2h
  * Add: add Spanish THEOREM like environment header, suggested by S. Ching

  = 2.1.0 =

  * Fix the missing text-domain tag error in translation
  * Add the supporting of figure environments

  = 2.0.11 =

  * Check bibtex.bib.txt existence before write bibtex data

  = 2.0.10 =

  * Move bibtex.bib.txt to uploads root directory

  = 2.0.9 =

  * Rename the bibtex.bib to bibtex.bib.txt for directly preview by browser

  = 2.0.8 =

  * Fix the backup bibtex before upgrade

  = 2.0.7 =

  * New css for print (A4 paper size)

  = 2.0.6 =

  * fix the remove % bug

  = 2.0.5 =

  Bug fix:

  * The mathjax is not load on homepage with default setting
  * The mysql create syntax error

  Add:

  * write bibtex original data to bibtex.bib

  = 2.0.4 =

  * fix the issue of MathJax when speed up by rocket.js of [Cloudfare](https://www.cloudflare.com/)

  = 2.0.3 =

  * fix the database update function, the methods may not exists

  = 2.0.2 =

  Bug fix:

  * check function/methods exists before the call;
  * fix the translation in content;
  * fix the unable to delete plugin error;
  * update user\'s manual for BibTeX citation support

  = 2.0.1 =

  * Fix section refer back by `\ref{secnum}` and `\autoref{secnum}`
  * Add full user's manual

  = 2.0.0 =

  * Totally rebuild based on the newest wordpress functions
  * Add BibTeX style citation support

  = 1.2.3 =

  * Remove the auto-number function, since this can be down by mathjax after 2.1
  * Change the default mathjax config. to `svg`

  = 1.2.2 =

  * Fix the wrong `Custom LaTeX CSS Style` place.

  = 1.2.1 =

  * Compatible with `Simple MathJaX`

  = 1.2.0 =

  * Change the default "load LaTeX2HTML only for Single Post" into an Option
  * Customlize the LaTeX CSS style
  * Fix the preamble-position bug
  * Add the Chinese language support

  = 1.1.0 =

  * Add the <a href="http://wamath.sinaapp.com/?p=2374">LaTeX2HTML Demonstration LaTeX Doc</a>
  * Remove the `\documentclass...` and `\usepackage...` stuff in the post, this will be convinient if your post are copy and paste from a TeX Doc
  * Add the Demo TeX doc `LaTeX2HTML_TeX_Demo.tex` and the PDF file which are obtained by run `latex LaTeX2HTML_TeX_Demo.tex`
  * Add Basic LaTeX \\newcommand in preamble of `LaTeX2HTML Setting page`
  * Update the instruction of `LaTeX2HTML Setting page`

  = 1.0.2 =

  * Solve the compatible problem with `simple mathjax` (if you were not stop the `simple mathjax` first before updating the `LaTeX2HTML`, there are the `redeclare` function error)
  * Add an setting page at the `Plugins|Active` page

  = 1.0.1 =

  * Update the readme.txt

  = 1.0.0 =

  * Integrate the `simple mathjax` into `LaTeX2HTML`
  * Only load MathJaX on the `single page` with math formulae (warped with $ and $ or \\[ and \\])

  = 0.0.5 =

  * the original version
