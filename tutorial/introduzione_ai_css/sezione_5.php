<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
 "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="it">
<head>
<title>.ConStile | Tutorial | Introduzione ai CSS : Associare i fogli di stile ai documenti (X)HTML</title>
<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
<meta name="description" content="Una guida dedicata all'uso dei fogli di stile a cascata (cascade style sheets - CSS) per lo sviluppo di siti web leggeri, usabili, conformi agli standard W3C." />
<meta name="keywords" content="CSS, fogli di stile, HTML, XHTML, layout, template, guide, tutorial, suggerimenti, tips, codice, open content" />
<meta http-equiv="revisit-after" content="15 days" />
<meta http-equiv="imagetoolbar" content="false" />
<meta name="MSSmartTagsPreventParsing" content="true" />
<!-- �� -->
<link rel="top" href="../../index.html" title="Homepage" />
<link rel="search" href="../../ricerca.php" title="Cerca nell'archivio di .ConStile" />
<link rel="author" href="../../informazioni.php#autore" title="Informazioni sull'autore di .ConStile" />
<link rel="copyright" href="../../informazioni.php#legali" title="Informazioni legali" />
<link rel="blog" href="http://geco.constile.org/" title="Geco: il blog associato a .ConStile" />
<link rel="alternate" type="application/rss+xml" title="RSS" href="../../constile.xml" />
<link rel="toc" href="../../mappa.php" title="Mappa di .ConStile" />
<link rel="index" href="../../index.html" title="La pagina principale di .ConStile" />
<link rel="stylesheet" type="text/css" media="screen" href="../../stili_v5/schermo.css" />
<link rel="stylesheet" type="text/css" media="print" href="../../stili_v5/print.css" />
<link media="aural, braille" rel="stylesheet" href="../../stili_v5/aural.css" type="text/css" />
<link media="tty" rel="stylesheet" href="../../stili_v5/tty.css" type="text/css" />
<link rel="shortcut icon" href="../../favicon.ico" />
<!-- wget/1.10.2 (red hat modified) -->
</head>
<body>
<div id="intestazione">
<!-- logo -->
<div id="logo"><a id="logoIMG" href="../../index.html" title=".ConStile, una guida dedicata all'uso dei CSS per lo sviluppo di siti web leggeri, usabili, conformi agli standard W3C"><span class="title">.ConStile, una guida dedicata all'uso dei CSS per lo sviluppo di siti web leggeri, usabili, conformi agli standard W3C</span></a></div>
<div id="issn"><acronym title="International Standard Serial Number">ISSN</acronym> 1722-375X</div>
<div class="nascosto">[<a name="TOP" id="TOP" href="sezione_5.php#MENU">Vai al menu di navigazione principale</a>]</div>
<!-- /logo -->
<hr />
<!-- barra di navigazione -->
<div id="navbar" title="Menu di navigazione">
<h2 class="nascosto">Sezioni</h2>
	<ul>
		<li class="nascosto">[<a name="MENU" id="MENU" href="sezione_5.php#CONTENUTI">Vai ai contenuti</a>]</li>
		<li ><a href="../../index.html" title="Pagina principale del sito">Homepage</a></li>
		<li id="voisietequi"><a href="../index.html" title="Guide e consigli per la realizzazione di siti web tramite i CSS.">Tutorial</a></li>
		<li ><a href="../../clonazioni/index.html" title="Esempi di come con i CSS sia possibile riprodurre il layout di qualsiasi sito.">Clonazioni</a></li>
		<li ><a href="../../template/index.html" title="Template realizzati con i CSS da utilizzare per il proprio sito.">Template</a></li>
		<li ><a href="../../tips/index.html" title="Piccoli suggerimenti per ottenere il massimo dai CSS.">Tips</a></li>
		<li ><a href="../../DHTML/index.html" title="Come integrare (X)HTML, CSS e JavaScript per aggiungere un po' di sale al proprio sito web.">DHTML</a></li>
		<li ><a href="../../libri/index.html" title="Libri suggeriti per approfondire la conoscenza degli standard W3C, dell'XHTML, dei CSS">Libri</a></li>
	</ul>
</div>
<!-- /barra di navigazione -->
<hr />
<!-- barra di locazione -->
<div id="locazione" title="&quot;Voi siete qui&quot;: Attuale posizione nel sito"><a href="../../index.html" title="Vai alla homepage">Home</a> &gt; <a href="../index.html">Tutorial</a> &gt; <a href="index.html">Introduzione ai css</a> &gt; Introduzione ai CSS : Associare i fogli di stile ai documenti (X)HTML</div>
<!-- /barra di locazione -->
</div>
<hr />
<div id="bodycontent">
<div class="nascosto">[<a name="CONTENUTI" id="CONTENUTI" href="sezione_5.php#PIEDE">Vai al pi&egrave; di pagina</a>]</div>

<div id="contenuto">
<div style="border-top: 1px solid #993; border-bottom: 1px solid #993"><span class="help" title="Table of Contents">TOC</span> 
<ul style="margin:0 0 5px 0; padding-left:2.50em">
<li><a href="index.html">Indice</a></li>

<li><a href="sezione_1.php">Cosa sono i fogli di stile</a></li>

<li><a href="sezione_2.php">La sintassi delle regole</a></li>

<li><a href="sezione_3.php">I selettori</a></li>

<li><a href="sezione_4.php">Le propriet&agrave;</a></li>

<li>Associare i fogli di stile ai documenti (X)HTML</li>

<li><a href="sezione_6.php">Note</a></li>
</ul>
</div>

<h1>Introduzione ai CSS</h1>

<h2>5. Associare i fogli di stile ai documenti (X)HTML</h2>

<p>In questa sezione saranno illustrati i metodi per collegare i CSS ai documenti (X)HTML.</p>

<p>I metodi sono:</p>

<ul>
<li>Fogli di stile esterni</li>

<li>Fogli di stile incorporati</li>

<li>La regola @import</li>

<li>CSS in linea</li>
</ul>

<h5>Fogli di stile esterni</h5>

<p>I fogli di stile possono essere salvati in file specifici (ad esempio <a href="../../css/screen.css">http://www.constile.org/css/screen.css</a>), con estensione <strong>.css</strong>, per essere poi collegati al codice (X)HTML tramite il tag LINK:</p>

<pre>
&lt;head&gt;
[...]
&lt;link rel=&quot;stylesheet&quot; type=&quot;text/css&quot; media=&quot;screen&quot; href=&quot;/css/foglio_di_stile.css&quot; /&gt;
[...]
&lt;/head&gt;
</pre>

<p>Per maggiori informazioni sull'attributo media si consiglia di leggere l'articolo: &quot;<a href="../../tips/css_e_media_type/index.html">Diversi media, diversi stili</a>&quot;.</p>

<h5>Fogli di stile incorporati</h5>

<p>Le regole dei CSS possono essere specificate direttamente nel codice (X)HTML tramite il tag STYLE posto nell'HEAD del documento (X)HTML:</p>

<pre>
&lt;head&gt;
[...]
&lt;style type=&quot;text/css&quot;&gt;
&lt;!-- 
body { font:80% Verdana,Helvetica,sans-serif; }
p { font: 1.00em/1.20em verdana, helvetica, sans-serif }
[...]
--&gt;
&lt;/style&gt;
[...]
&lt;/head&gt;
</pre>

<h5>La regola @import</h5>

<p>La regola @import permette di importare regole da un altro foglio di stile. Ad esempio:</p>

<pre>
@import url(&quot;advanced.css&quot;);
@import special.css;
body { font:80% Verdana,Helvetica,sans-serif; }
p { font: 1.00em/1.20em verdana, helvetica, sans-serif }
[...]
</pre>

<p>Se presenti, le regole @import devono precedere le altre regole.</p>

<h5>CSS in linea</h5>

<p>Attraverso l'attributo STYLE &egrave; possibile specificare le regole CSS direttamente nei tag a cui esse saranno applicate:</p>

<pre>
&lt;body style=&quot;background: #CCC; color: #000; font: 1.00em verdana, helvetica, sans-serif&quot;&gt;
  &lt;p&gt;
    In questo paragrafo, 
    &lt;span style=&quot;background: yellow&quot;&gt;questo testo&lt;/span&gt; 
    sar&agrave; evidenziato in giallo
  &lt;/p&gt;
&lt;/body&gt;
</pre>

<div style="border-top: 1px solid #993; border-bottom: 1px solid #993"><span class="help" title="Table of Contents">TOC</span> 
<ul style="margin:0 0 5px 0; padding-left:2.50em">
<li><a href="index.html">Indice</a></li>

<li><a href="sezione_1.php">Cosa sono i fogli di stile</a></li>

<li><a href="sezione_2.php">La sintassi delle regole</a></li>

<li><a href="sezione_3.php">I selettori</a></li>

<li><a href="sezione_4.php">Le propriet&agrave;</a></li>

<li>Associare i fogli di stile ai documenti (X)HTML</li>

<li><a href="sezione_6.php">Note</a></li>
</ul>
</div>

<div id="firma"><em>G.T.</em> -- ultima revisione: 03.10.2002</div>
</div>
<hr />

<!-- footer -->

<div id="footer">




<p><a href="../../css_guida_completa/index.html"><img src="../../css_guida_completa/miniCover.jpg" alt="CSS Guida Completa" /><br />Il mio libro sui CSS</a></p>
<p><a href="http://www.sentieroimpresa.it/csszensentiero.htm" title="CSS Zen Sentiero vuole essere un luogo di sperimentazione e di confronto sul design basato sull'uso dei fogli di stile"><img src="../../images/banner_zen_sentiero_constil.gif" width="160" height="30" alt="CSS Zen Sentiero" /></a></p>

<hr />



<p id="rss" title="Feed RSS">.ConStile &egrave; disponibile anche in <a href="../../constile.xml">XML</a>.</p>



<p id="cc" title="Licenza"><a href="http://creativecommons.org/licenses/by-nd-nc/1.0" rel="esterno" title="Informazioni sulla licenza con cui &egrave; distribuito il materiale pubblicato su .ConStile">Some Rights Reserved</a>. This work is licensed under a <a href="http://creativecommons.org/licenses/by-nd-nc/1.0" rel="esterno" title="Informazioni sulla licenza con cui &egrave; distribuito il materiale pubblicato su .ConStile">Creative Commons License.</a></p>
<hr />



<p class="nascosto"><a accesskey="T" name="PIEDE" id="PIEDE" href="sezione_5.php#TOP" title="Torna all'inizio della pagina">Torna all'inizio della pagina</a></p>

<p id="navGenerale" title="Link di navigazione generale"><a href="../../index.html" title="Torna alla homepage di .ConStile">HOMEPAGE</a> / <a href="../../mappa.php" title="Mappa del sito">Mappa</a> / <a href="../../informazioni.php" title="Tutte le informazioni su .ConStile">Informazioni</a> / <a href="../../exit.php" title="I link consigliati per uscire da .ConStile">EXIT (Link)</a></p>





</div>

<!-- /footer -->

<hr />

<!-- no CSS -->

<div id="avviso-non-standard"><img src="../../images/avvisow3c.png" alt="" /></div>

<!-- /no CSS -->

<div id="page-url">l'indirizzo di questa pagina &egrave;: http://www.constile.org/tutorial/introduzione_ai_css/sezione_5.php</div>

</div><!-- fine bodycontent -->



</body>

</html>



