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
<!-- èé -->
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
<div class="nascosto">[<a name="TOP" id="TOP" href="sezione_6.php#MENU">Vai al menu di navigazione principale</a>]</div>
<!-- /logo -->
<hr />
<!-- barra di navigazione -->
<div id="navbar" title="Menu di navigazione">
<h2 class="nascosto">Sezioni</h2>
	<ul>
		<li class="nascosto">[<a name="MENU" id="MENU" href="sezione_6.php#CONTENUTI">Vai ai contenuti</a>]</li>
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
<div class="nascosto">[<a name="CONTENUTI" id="CONTENUTI" href="sezione_6.php#PIEDE">Vai al pi&egrave; di pagina</a>]</div>

<div id="contenuto">
<div style="border-top: 1px solid #993; border-bottom: 1px solid #993"><span class="help" title="Table of Contents">TOC</span> 
<ul style="margin:0 0 5px 0; padding-left:2.50em">
<li><a href="index.html">Indice</a></li>

<li><a href="sezione_1.php">Cosa sono i fogli di stile</a></li>

<li><a href="sezione_2.php">La sintassi delle regole</a></li>

<li><a href="sezione_3.php">I selettori</a></li>

<li><a href="sezione_4.php">Le propriet&agrave;</a></li>

<li><a href="sezione_5.php">Associare i fogli di stile ai documenti (X)HTML</a></li>

<li>Note</li>
</ul>
</div>

<h1>Introduzione ai CSS</h1>

<h2>6. Note</h2>

<p>In questa piccola guida si &egrave; cercato di fornire la base per la comprensione degli articoli e degli esempi che costituiscono i cuore di .ConStile. In questa guida ci si &egrave; basati soprattutto sulle regole dei CSS di livello 1 (da tempo sono disponibili anche i CSS di livello 2), cercando di evidenziare gli aspetti pi&ugrave; utili e interessanti. Una guida completa ai CSS di livello 2 &egrave; disponibile presso il sito del <a href="http://www.w3.org/" rel="esterno" title="sito del W3C">W3C</a> al seguente indirizzo: <a href="http://www.w3.org/TR/CSS21" rel="esterno" title="Guida completa ai CSS di livello 2. In lingua inglese. *MOLTO TECNICA*">http://www.w3.org/TR/CSS21</a>.</p>

<p>Questa guida &egrave; basata sulla <a href="http://www.w3.org/TR/CSS21" rel="esterno" title="Guida completa ai CSS di livello 2. In lingua inglese. *MOLTO TECNICA*">documentazione disponibile</a> presso il sito del <a href="http://www.w3.org/" rel="esterno" title="sito del W3C">W3C</a>, sulla guida ai CSS del <a href="http://www.htmlhelp.com/" rel="esterno" title="sito del WDG">WDG</a> (Web Design Group) e sull'esperienza personale dell'autore (maturata visitando numerosi siti ed eseguendo numerosi esperimenti).</p>

<div style="border-top: 1px solid #993; border-bottom: 1px solid #993"><span class="help" title="Table of Contents">TOC</span> 
<ul style="margin:0 0 5px 0; padding-left:2.50em">
<li><a href="index.html">Indice</a></li>

<li><a href="sezione_1.php">Cosa sono i fogli di stile</a></li>

<li><a href="sezione_2.php">La sintassi delle regole</a></li>

<li><a href="sezione_3.php">I selettori</a></li>

<li><a href="sezione_4.php">Le propriet&agrave;</a></li>

<li><a href="sezione_5.php">Associare i fogli di stile ai documenti (X)HTML</a></li>

<li>Note</li>
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



<p class="nascosto"><a accesskey="T" name="PIEDE" id="PIEDE" href="sezione_6.php#TOP" title="Torna all'inizio della pagina">Torna all'inizio della pagina</a></p>

<p id="navGenerale" title="Link di navigazione generale"><a href="../../index.html" title="Torna alla homepage di .ConStile">HOMEPAGE</a> / <a href="../../mappa.php" title="Mappa del sito">Mappa</a> / <a href="../../informazioni.php" title="Tutte le informazioni su .ConStile">Informazioni</a> / <a href="../../exit.php" title="I link consigliati per uscire da .ConStile">EXIT (Link)</a></p>





</div>

<!-- /footer -->

<hr />

<!-- no CSS -->

<div id="avviso-non-standard"><img src="../../images/avvisow3c.png" alt="" /></div>

<!-- /no CSS -->

<div id="page-url">l'indirizzo di questa pagina &egrave;: http://www.constile.org/tutorial/introduzione_ai_css/sezione_6.php</div>

</div><!-- fine bodycontent -->



</body>

</html>



