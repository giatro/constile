<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
 "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="it">
<head>
<title>.ConStile | Tutorial | Introduzione ai CSS : Le proprietà</title>
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
<div class="nascosto">[<a name="TOP" id="TOP" href="sezione_4.php#MENU">Vai al menu di navigazione principale</a>]</div>
<!-- /logo -->
<hr />
<!-- barra di navigazione -->
<div id="navbar" title="Menu di navigazione">
<h2 class="nascosto">Sezioni</h2>
	<ul>
		<li class="nascosto">[<a name="MENU" id="MENU" href="sezione_4.php#CONTENUTI">Vai ai contenuti</a>]</li>
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
<div id="locazione" title="&quot;Voi siete qui&quot;: Attuale posizione nel sito"><a href="../../index.html" title="Vai alla homepage">Home</a> &gt; <a href="../index.html">Tutorial</a> &gt; <a href="index.html">Introduzione ai css</a> &gt; Introduzione ai CSS : Le proprietà</div>
<!-- /barra di locazione -->
</div>
<hr />
<div id="bodycontent">
<div class="nascosto">[<a name="CONTENUTI" id="CONTENUTI" href="sezione_4.php#PIEDE">Vai al pi&egrave; di pagina</a>]</div>

<div id="contenuto">
<div style="border-top: 1px solid #993; border-bottom: 1px solid #993"><span class="help" title="Table of Contents">TOC</span> 
<ul style="margin:0 0 5px 0; padding-left:2.50em">
<li><a href="index.html">Indice</a></li>

<li><a href="sezione_1.php">Cosa sono i fogli di stile</a></li>

<li><a href="sezione_2.php">La sintassi delle regole</a></li>

<li><a href="sezione_3.php">I selettori</a></li>

<li>Le propriet&agrave;</li>

<li><a href="sezione_5.php">Associare i fogli di stile ai documenti (X)HTML</a></li>

<li><a href="sezione_6.php">Note</a></li>
</ul>
</div>

<h1>Introduzione ai CSS</h1>

<h2>4. Le propriet&agrave;</h2>

<p>In questa sezione saranno brevemente illustrate le propriet&agrave; dei CSS di livello 1.</p>

<p>Verr&agrave; utilizzata la seguente sintassi (la stessa utilizzata dal <span class="help" title="World Wide Web Consortium">W3C</span>):</p>

<ul>
<li><strong>&lt;Abc&gt;</strong>: un valore della proprit&agrave; Abc</li>

<li><strong>Abc</strong>: keyword richiesta</li>

<li><strong>A B C</strong>: A, B, C sono keyword richieste nell'ordine specificato</li>

<li><strong>A|B</strong>: deve apparire A o B</li>

<li><strong>A||B</strong>: deve apparire A o B oppure ambedue</li>

<li><strong>[Abc]</strong>: le parentesi quadre sono utilizzate per raggruppare gli oggetti</li>

<li><strong>Abc*</strong>: Abc appare zero o pi&ugrave; volte</li>

<li><strong>Abc+</strong>: Abc appare una o pi&ugrave; volte</li>

<li><strong>Abc?</strong>: Abc &egrave; opzionale</li>

<li><strong>Abc{A,B}</strong>: Abc deve apparire almeno A volte e al massimo B volte</li>
</ul>

<p>Le propriet&agrave; possono essere raggruppate nelle seguenti categorie:</p>

<ul>
<li><strong>4.1 Font</strong>: 
<ul>
<li><a href="sezione_4.php#s4_1_1">font-family</a></li>

<li><a href="sezione_4.php#s4_1_2">font-style</a></li>

<li><a href="sezione_4.php#s4_1_3">font-variant</a></li>

<li><a href="sezione_4.php#s4_1_4">font-weight</a></li>

<li><a href="sezione_4.php#s4_1_5">font-size</a></li>

<li><a href="sezione_4.php#s4_1_6">font</a></li>
</ul>
</li>

<li><strong>4.2 Colore e Sfondo</strong>: 
<ul>
<li><a href="sezione_4.php#s4_2_1">color</a></li>

<li><a href="sezione_4.php#s4_2_2">background</a></li>
</ul>
</li>

<li><strong>4.3 Testo</strong>: 
<ul>
<li><a href="sezione_4.php#s4_3_1">word-spacing</a></li>

<li><a href="sezione_4.php#s4_3_2">letter-spacing</a></li>

<li><a href="sezione_4.php#s4_3_3">line-height</a></li>

<li><a href="sezione_4.php#s4_3_4">text-indentation</a></li>

<li><a href="sezione_4.php#s4_3_5">vertical-align</a></li>

<li><a href="sezione_4.php#s4_3_6">text-decoration</a></li>

<li><a href="sezione_4.php#s4_3_7">text-transform</a></li>

<li><a href="sezione_4.php#s4_3_8">text-align</a></li>

<li><a href="sezione_4.php#s4_3_9">white-space</a></li>
</ul>
</li>

<li><strong>4.4 Box model</strong>: 
<ul>
<li><a href="sezione_4.php#s4_4_1">margin</a></li>

<li><a href="sezione_4.php#s4_4_2">padding</a></li>

<li><a href="sezione_4.php#s4_4_3">border</a></li>

<li><a href="sezione_4.php#s4_4_4">width</a></li>

<li><a href="sezione_4.php#s4_4_5">height</a></li>

<li><a href="sezione_4.php#s4_4_6">float</a></li>

<li><a href="sezione_4.php#s4_4_7">clear</a></li>
</ul>
</li>

<li><strong>4.5 Classificazione</strong>: 
<ul>
<li><a href="sezione_4.php#s4_5_1">display</a></li>

<li><a href="sezione_4.php#s4_5_2">list-style</a></li>
</ul>
</li>

<li><strong>4.6 Lunghezze, percentuali, colori, url</strong>: 
<ul>
<li><a href="sezione_4.php#s4_6_1">lunghezze</a></li>

<li><a href="sezione_4.php#s4_6_2">percentuali</a></li>

<li><a href="sezione_4.php#s4_6_3">colori</a></li>

<li><a href="sezione_4.php#s4_6_4">url</a></li>
</ul>
</li>
</ul>

<h2>4.1 Font</h2>

<a id="s4_1_1" name="s4_1_1"></a> 
<h5>4.1.1 font-family</h5>

<p><strong>sintassi:</strong> font-family: &lt;nome font&gt;* || &lt;font generico&gt;</p>

<p><strong>&lt;nome font&gt;</strong></p>

<ul>
<li>qualsiasi nome di font (per esempio: verdana, helvetica, georgia)</li>
</ul>

<p><strong>&lt;font generico&gt;</strong></p>

<ul>
<li><span style="font-size: 1.25em;font-family: serif">serif</span></li>

<li><span style="font-size: 1.25em;font-family: sans-serif">sans-serif</span></li>

<li><span style="font-size: 1.25em;font-family: monospace">monospace</span></li>

<li><span style="font-size: 1.25em;font-family: cursive">cursive</span> [sconsigliato poich&eacute; di difficile lettura]</li>

<li><span style="font-size: 1.25em;font-family: fantasy">fantasy</span> [sconsigliato poich&eacute; di difficile lettura]</li>
</ul>

<p>Esempio:</p>

<pre>
p { font-family: verdana, helvetica, &quot;Trebuchet MS&quot;, sans-serif }
</pre>

<p>Il font adottato sar&agrave; il primo disponibile partendo da sinistra. E' bene specificare sempre un font generico, applicato qualora nessuno dei font elencati fosse disponibile. Font con nomi composta da due o pi&ugrave; parole vano fra virgolette: ad esempio &quot;Trebuchet MS&quot;</p>

<a id="s4_1_2" name="s4_1_2"></a> 
<h5>4.1.2 font-style</h5>

<p><strong>sintassi:</strong> font-style: normal | italic | oblique;</p>

<p>Esempio:</p>

<pre>
quote { font-style: italic }
</pre>

<p>Il font adottato sar&agrave; il primo disponibile partendo da sinistra. E' bene specificare sempre un font generico, applicato qualora nessuno dei font elencati fosse disponibile. Font con nomi composta da due o pi&ugrave; parole vano fra virgolette: ad esempio &quot;Trebuchet MS&quot;.</p>

<a id="s4_1_3" name="s4_1_3"></a> 
<h5>4.1.3 font-variant</h5>

<p><strong>sintassi:</strong> font-variant: normal | small-caps</p>

<p>Esempio:</p>

<pre>
.maiuscoletto { font-variant: small-caps }
</pre>

<p>Il valore small-caps crea l'effetto &quot;<span style="font-variant: small-caps">Maiuscoletto</span>&quot;, il valore normal non introduce variazioni.</p>

<a id="s4_1_4" name="s4_1_4"></a> 
<h5>4.1.4 font-weight</h5>

<p><strong>sintassi:</strong> font-weight: normal | bold | bolder | lighter | 100 | 200 | 300 | 400 | 500 | 600 | 700 | 800 | 900</p>

<p>Esempio:</p>

<pre>
strong { font-weight: 900; }
</pre>

<p>Specifica il peso del font. I valori bolder e lighter sono relativi al valore di default. Gli altri valori sono pesi assoluti. 100-900 &egrave; una scala che va dal peso minimo al massimo. Non tutti e nove i valori da 100 a 900 sono disponibili per tutti i font, in questo caso il peso adottato &egrave; il pi&ugrave; vicino disponibile.</p>

<a id="s4_1_5" name="s4_1_5"></a> 
<h5>4.1.5 font-size</h5>

<p><strong>sintassi:</strong> font-size: &lt;dimensione assoluta&gt; | &lt;dimensione relativa&gt; | &lt;lunghezza&gt; | &lt;percentuale&gt;</p>

<p><strong>&lt;dimensione assoluta&gt;</strong> (vedi &quot;<a href="../come_dimensionare_i_caratteri/index.html">Dimensionare i caratteri con i CSS</a>&quot; per maggiori dettagli)</p>

<ul>
<li>xx-small | x-small | small | medium | large | x-large | xx-large</li>
</ul>

<p><strong>&lt;dimensione relativa&gt;</strong> (vedi &quot;<a href="../come_dimensionare_i_caratteri/index.html">Dimensionare i caratteri con i CSS</a>&quot; per maggiori dettagli)</p>

<ul>
<li>larger | smaller</li>
</ul>

<p><strong>&lt;lungezza&gt;</strong></p>

<ul>
<li>vedi <a href="sezione_4.php#s4_6_1">sezione 4.6.1</a></li>
</ul>

<p><strong>&lt;percentuale&gt;</strong></p>

<ul>
<li>vedi <a href="sezione_4.php#s4_6_2">sezione 4.6.2</a></li>
</ul>

<p>Esempio:</p>

<pre>
p { font-size: 0.80em }
</pre>

<p>Sul dimensionamento dei caratteri &egrave; disponibile un <a href="../come_dimensionare_i_caratteri/index.html">articolo dedicato</a></p>

<a id="s4_1_6" name="s4_1_6"></a> 
<h5>4.1.6 font</h5>

<p><strong>sintassi:</strong> font: &lt;valore&gt;</p>

<p><strong>&lt;valore&gt;</strong></p>

<ul>
<li>[ &lt;<a href="sezione_4.php#s4_1_2">font-style</a>&gt; || &lt;<a href="sezione_4.php#s4_1_3">font-variant</a>&gt; || &lt;<a href="sezione_4.php#s4_1_4">font-weight</a>&gt; ]? &lt;<a href="sezione_4.php#s4_1_5">font-size</a>&gt; [ / &lt;<a href="sezione_4.php#s4_3_3">line-height</a>&gt; ]? &lt;<a href="sezione_4.php#s4_1_1">font-family</a>&gt;</li>
</ul>

<p>Esempio:</p>

<pre>
p.paragrafo-speciale { font: bold 1.00em/1.50em verdana, helvetica, &quot;Trebuchet MS&quot;, sans-serif }
</pre>

<p>La propriet&agrave; font pu&ograve; essere utilizzata come un metodo veloce per definire le diverse propriet&agrave; font-family, font-style, ecc. Si noti la possibilit&agrave; di specificare anche la propriet&agrave; &lt;<a href="sezione_4.php#s4_3_3">line-height</a>&gt; (una propriet&agrave; per specificare l'interlinea). Quando si utilizza la propriet&agrave; font &egrave; necessario specificare almeno i valori per le propriet&agrave; <a href="sezione_4.php#s4_1_5">font-size</a> e <a href="sezione_4.php#s4_1_1">font-family</a>.</p>

<h2>4.2 Colore e sfondo</h2>

<a id="s4_2_1" name="s4_2_1"></a> 
<h5>4.2.1 color</h5>

<p><strong>sintassi:</strong> color: &lt;<a href="sezione_4.php#s4_6_3">colore</a>&gt;</p>

<p>Esempio:</p>

<pre>
a { color: #009 }
em {color: red }
</pre>

<p>La propriet&agrave; color permette di specificare il colore del testo di un selettore, i possibili valori sono descritti nella <a href="sezione_4.php#s4_6_3">sezione 4.6.3</a>.</p>

<a id="s4_2_2" name="s4_2_2"></a> 
<h5>4.2.2 background</h5>

<p><strong>sintassi:</strong> background-color: &lt;valore&gt;</p>

<p><strong>&lt;valore&gt;</strong></p>

<ul>
<li>&lt;colore&gt; || &lt;immagine&gt; || &lt;ripetizione&gt; || &lt;scrolling&gt; || &lt;posizione&gt; 
<ul>
<li>&lt;colore&gt;: i possibili valori sono descritti nella <a href="sezione_4.php#s4_6_3">sezione 4.6.3</a></li>

<li>&lt;immagine&gt;: url dell'immagine, i possibili valori sono descritti nella <a href="sezione_4.php#s4_6_4">sezione 4.6.4</a></li>

<li>&lt;ripetizione&gt;: repeat | repeat-x | repeat-y | no-repeat<br />
l'immagine di sfondo pu&ograve; essere ripetuta, ripetuta orizzontalmente, ripetuta verticalmente, non essere ripetuta (immagine di sfondo unica).</li>

<li>&lt;scrolling&gt;: scroll | fixed<br />
l'immagine si muove col testo ovvero rimane fissa.</li>

<li>&lt;posizione&gt;: [&lt;<a href="sezione_4.php#s4_6_2">percentuale</a>&gt; | &lt;<a href="sezione_4.php#s4_6_1">lunghezza</a>&gt;]{1,2} | [top | center | bottom] || [left | center | right]<br />
la posizione dell'immagine di sfondo pu&ograve; essere specificata con riferimento all'angolo superiore sinistro, sia attraverso unit&agrave; <a href="sezione_4.php#s4_6_2">percentuali</a> o di <a href="sezione_4.php#s4_6_1">lunghezza</a> sia attraverso keyword.</li>
</ul>
</li>
</ul>

<p>Esempio:</p>

<pre>
body { background:#FFFFFF url(/images/sfondo.gif) no-repeat fixed top right; }
</pre>

<p>La propriet&agrave; background permette di specificare il colore e l'immagine di sfondo. L'immagine pu&ograve; essere posizionata come si desidera, pu&ograve; essere ripetuta oppure no, pu&ograve; scrollare col testo ovvero essere fissa.</p>

<h2>4.3 Testo</h2>

<a id="s4_3_1" name="s4_3_1"></a> 
<h5>4.3.1 word-spacing</h5>

<p><strong>sintassi:</strong> word-spacing: &lt;valore&gt;</p>

<p><strong>&lt;valore&gt;</strong></p>

<ul>
<li>normal | &lt;<a href="sezione_4.php#s4_6_1">lunghezza</a>&gt;</li>
</ul>

<p>Esempio:</p>

<pre>
.parole-distanziate { word-spacing: 1.00em }
.parole-ravvicinate { word-spacing: -0.20em }
</pre>

<p>La propriet&agrave; word-spacing permette di impostare lo spazio fra le parole, <span style="word-spacing: 1.00em"><strong>aumentando lo spazio</strong></span> fra le parole oppure <span style="word-spacing: -0.20em"><strong>diminuendo tale spazio</strong></span>. Se viene specificata una <a href="sezione_4.php#s4_6_1">lunghezza</a>, questa va ad aggiungersi ovvero a sottrarsi alla spaziatura predefinita.</p>

<a id="s4_3_2" name="s4_3_2"></a> 
<h5>4.3.2 letter-spacing</h5>

<p><strong>sintassi:</strong> letter-spacing: &lt;valore&gt;</p>

<p><strong>&lt;valore&gt;</strong></p>

<ul>
<li>normal | &lt;<a href="sezione_4.php#s4_6_1">lunghezza</a>&gt;</li>
</ul>

<p>Esempio:</p>

<pre>
.lettere-distanziate { letter-spacing: 0.50em }
.lettere-ravvicinate { letter-spacing: -0.15em }
</pre>

<p>La propriet&agrave; letter-spacing permette di impostare lo spazio fra le singole lettere di una parola, <span style="letter-spacing: 0.50em"><strong>aumentandolo</strong></span> oppure <span style="letter-spacing: -0.15em"><strong>diminuendolo</strong></span>. Se viene specificata una <a href="sezione_4.php#s4_6_1">lunghezza</a>, questa va ad aggiungersi ovvero a sottrarsi alla spaziatura predefinita.</p>

<a id="s4_3_3" name="s4_3_3"></a> 
<h5>4.3.3 line-height</h5>

<p><strong>sintassi:</strong> line-height: &lt;valore&gt;</p>

<p><strong>&lt;valore&gt;</strong></p>

<ul>
<li>normal | &lt;<a href="sezione_4.php#s4_6_1">lunghezza</a>&gt; | &lt;<a href="sezione_4.php#s4_6_2">percentuale</a>&gt;</li>
</ul>

<p>Esempio:</p>

<pre>
.interlinea-ridotta { line-height: 100% }
</pre>

<p style="line-height: 100%">La propriet&agrave; line-height permette di impostare l'interlinea. Le percentuali si riferiscono all'altezza dei font e non al valore standard dell'interlinea, valori negativi non sono permessi. L'interlinea pu&ograve; essere specificata anche tramite la proprit&agrave; <a href="sezione_4.php#s4_1_6">font</a>. Questo paragrafo ha un'interlinea pari alla dimensione dei caratteri.</p>

<a id="s4_3_4" name="s4_3_4"></a> 
<h5>4.3.4 text-indentation</h5>

<p><strong>sintassi:</strong> text-indentation: &lt;valore&gt;</p>

<p><strong>&lt;valore&gt;</strong></p>

<ul>
<li>&lt;<a href="sezione_4.php#s4_6_1">lunghezza</a>&gt; | &lt;<a href="sezione_4.php#s4_6_2">percentuale</a>&gt;</li>
</ul>

<p>Esempio:</p>

<pre>
p { text-indentation: 2em; }
</pre>

<p>La propriet&agrave; text-indentation permette di impostare il rientro del capoverso. Le percentuali si riferiscono alla larghezza del <span class="help" title="il 'parent' &egrave; l'elemento che contiene quello di riferimento">parent</span> e sono quindi pi&ugrave; difficili da gestire. I paragrafi di questo articolo hanno un rientro del capoverso pari 2<span class="help" title="1em &egrave; pari all'altezza di un carattere">em</span>.</p>

<a id="s4_3_5" name="s4_3_5"></a> 
<h5>4.3.5 vertical-align</h5>

<p><strong>sintassi:</strong> vertical-align: &lt;valore&gt;</p>

<p><strong>&lt;valore&gt;</strong></p>

<ul>
<li>baseline | sub | super | top | text-top | middle | bottom | text-bottom | &lt;<a href="sezione_4.php#s4_6_2">percentuale</a>&gt;</li>
</ul>

<p>Esempio:</p>

<pre>
img { vertical-align: top }
.apice { vertical-align: super }
.pedice { vertical-align: sub }
</pre>

<p>La propriet&agrave; vertical-align permette modificare il posizionamento verticale degli elementi <span class="help" title="gli elementi in line sono quelli che non prevedono interruzioni di linea prima o dopo di essi">inline</span>. Le percentuali si riferiscono all'interlinea. La propriet&agrave; vertical-align &egrave; utilie per gestire l'allineamento delle immagini come pure per creare <span style="vertical-align: super">apici</span> ovvero <span style="vertical-align: sub">pedici</span> (per apici e pedici &egrave; bene agire anche sulla <a href="sezione_4.php#s4_1_5">dimensione del testo</a>).</p>

<a id="s4_3_6" name="s4_3_6"></a> 
<h5>4.3.6 text-decoration</h5>

<p><strong>sintassi:</strong> text-decoration: &lt;valore&gt;</p>

<p><strong>&lt;valore&gt;</strong></p>

<ul>
<li>none | [ underline || overline || line-through || blink ]</li>
</ul>

<p>Esempio:</p>

<pre>
#barra-di-navigazione A { text-decoration: none }
<em>/* link non sottolineato */</em>
</pre>

<p>La propriet&agrave; text-decoration permette decorare il testo: i possibili valori sono:</p>

<ul>
<li>underline: testo <span style="text-decoration: underline">sottolineato</span> (andrebbe utilizzato <strong>esclusivamente</strong> per i link, poich&eacute; storicamente nelle pagine web del testo sottolineato rappresenta un link).</li>

<li>overline: testo <span style="text-decoration: overline">sopralineato</span>, spesso utilizzato insieme al valore underline per <span style="text-decoration: overline underline">evidenziare</span> i link al passaggo del mouse per mezzo del selettore a:hover. La <span style="text-decoration: overline">soprallineatura</span> va usata con cautela poich&eacute; pu&ograve; essere confusa con la sottolineatura della riga superiore.</li>

<li>line-through: testo <span style="text-decoration: line-through">&quot;cancellato&quot;</span></li>

<li>blink: testo lampeggiante, semplicemente da evitare (e infatti non &egrave; riportato nessun esempio) poich&eacute; molto fastidioso per la vista. Persone sensibili potrebbero anche essere soggette a disturbi. &quot;Fortunatamente&quot; Internet Explorer non supporta il testo lampeggiante</li>

<li>none: elimina le decorazioni. Spesso &egrave; utilizzato per eliminare la sottolineatura dei link (vedi esempio sopra riportato). Si ricordi che se il link non &egrave; sottolineato, la sua funzione deve essere evidenziata in altro modo, come colore (testo blu), peso del carattere (grassetto), contesto (inserito in una barra di navigazione).</li>
</ul>

<a id="s4_3_7" name="s4_3_7"></a> 
<h5>4.3.7 text-transform</h5>

<p><strong>sintassi:</strong> text-transform: &lt;valore&gt;</p>

<p><strong>&lt;valore&gt;</strong></p>

<ul>
<li>none | capitalize | uppercase | lowercase</li>
</ul>

<p>Esempio:</p>

<pre>
.tutto-maiuscolo { text-transform: uppercase }
</pre>

<p>La propriet&agrave; text-transform permette impostare il testo maiuscolo/minuscolo: i possibili valori sono:</p>

<ul>
<li>capitalize: testo <span style="text-transform: capitalize">la prima lettera delle parole</span> deve essere maiuscola.</li>

<li>uppercase: testo <span style="text-transform: uppercase">le lettere delle parole</span> devono essere tutte maiuscole.</li>

<li>lowercase: testo <span style="text-transform: lowercase">le LETTERE delle parole</span> devono essere tutte minuscole.</li>

<li>none: elimina eventuali trasformazioni del testo.</li>
</ul>

<a id="s4_3_8" name="s4_3_8"></a> 
<h5>4.3.8 text-align</h5>

<p><strong>sintassi:</strong> text-align: &lt;valore&gt;</p>

<p><strong>&lt;valore&gt;</strong></p>

<ul>
<li>left | right | center | justify</li>
</ul>

<p>Esempio:</p>

<pre>
h1.titolo { text-align: center }
p.articolo { text-align: justify }
</pre>

<p>La propriet&agrave; text-align permette l'allineamento del testo:</p>

<ul>
<li>left: allineamento a sinistra.</li>

<li>right: allineamento a destra.</li>

<li>center: testo centrato.</li>

<li>justify: testogiustificato (il testo occupa tutta la larghezza disponibile, come i paragrafi di questo articolo).</li>
</ul>

<a id="s4_3_9" name="s4_3_9"></a> 
<h5>4.3.9 white-space</h5>

<p><strong>sintassi:</strong> white-space: &lt;valore&gt;</p>

<p><strong>&lt;valore&gt;</strong></p>

<ul>
<li>normal | pre | nowrap</li>
</ul>

<p>Esempio:</p>

<pre>
p.testo-formattato { white-space: pre }
p.nowrap { white-space: nowrap }
</pre>

<p>La propriet&agrave; white-space specifica come interpretare gli spazi fra gli elementi:</p>

<ul>
<li>normal: due o pi&ugrave; spazi bianchi collassano in un unico spazio.</li>

<li>pre: evita che gli <span title="Il programma utilizzato per interpretare la pagina web" class="help">User Agent</span> facciano collassare sequenze di spazi bianchi. Le linee di testo vengono interrotte solo in corrispondenza delle interruzioni di linea del codice (X)HTML.</li>

<li>nowrap: due o pi&ugrave; spazi collassano in un unico spazio (come per il valore normal), ma le linee di testo vengono interrotte solo in corrispondenza delle interruzioni di linea del codice (X)HTML (come per il valore pre).</li>
</ul>

<h2>4.4 Box model</h2>

<a id="s4_4_1" name="s4_4_1"></a> 
<h5>4.4.1 margin</h5>

<p><strong>sintassi:</strong> margin: &lt;valore&gt;</p>

<p><strong>&lt;valore&gt;</strong></p>

<ul>
<li>&lt;<a href="sezione_4.php#s4_6_1">lunghezza</a>&gt; | &lt;<a href="sezione_4.php#s4_6_2">percentuale</a>&gt; | auto</li>
</ul>

<p>Esempio:</p>

<pre>
body { margin: 10px } <em>/* tutti i margini a 10px */</em>
p { margin: 10px 5px } 
<em>/* margini sup. e inf. a 10px, margini des. e sin. a 5px */</em>
.esempio { margin: 1px 2px 3px 4px }
<em>/* margini (in senso orario -- Nord Est Sud Ovest):
sup. 1px 
des. 2px
inf. 3px
sin. 4px */</em>
</pre>

<p>La propriet&agrave; margin permette di impostare il margine di un elemento (vedi la seguente immagine per maggiori dettagli). Per avere ulteriori informazioni sul box model &egrave; disponibile il seguente articolo: &quot;<a href="../IE5_box_model/index.html" title="Il box model di IE5/Win">Il box model di IE5/Win</a>&quot;.</p>

<img src="../../images/tutorial/introduzione_ai_css/box_model.gif" alt="Definizione del box model" title="Definizione del box model" class="esempio" /> 
<p>Specificando un solo valore, si impostano tutti e quattro i margini al valore specificato. Specificando due valori, si impostano il margine superiore e inferiore al primo valore indicato, il margine destro e sinistro al secondo valore indicato. Specificando quattro valori, si impostano il margine superiore, quello destro, quello inferiore e quello sinistro rispettivamente (in senso orario a partire dal margine superiore).</p>

<p>E' possibile impostare i margini singolarmente attraverso le seguenti quattro propriet&agrave;: <strong>margin-top</strong>, <strong>margin-right</strong>, <strong>margin-bottom</strong>, <strong>margin-left</strong>. Ad esempio:</p>

<pre>
.esempio { margin-top: 1px }
.esempio { margin-right: 2px }
.esempio { margin-bottom: 3px }
.esempio { margin-left: 4px }
</pre>

<a id="s4_4_2" name="s4_4_2"></a> 
<h5>4.4.2 padding</h5>

<p><strong>sintassi:</strong> padding: &lt;valore&gt;</p>

<p><strong>&lt;valore&gt;</strong></p>

<ul>
<li>&lt;<a href="sezione_4.php#s4_6_1">lunghezza</a>&gt; | &lt;<a href="sezione_4.php#s4_6_2">percentuale</a>&gt; | auto</li>
</ul>

<p>Esempio:</p>

<pre>
body { padding: 10px } <em>/* padding a 10px su ogni lato*/</em>
p { padding: 10px 5px } 
<em>/* padding lati sup. e inf. a 10px, padding lati des. e sin. a 5px */</em>
.esempio { padding: 1px 2px 3px 4px }
<em>/* padding (in senso orario -- Nord Est Sud Ovest):
sup. 1px 
des. 2px
inf. 3px
sin. 4px */</em>
</pre>

<p>La propriet&agrave; padding permette di impostare il padding di un elemento (vedi la seguente immagine per maggiori dettagli). Per avere ulteriori informazioni sul box model &egrave; disponibile il seguente articolo: &quot;<a href="../IE5_box_model/index.html" title="Il box model di IE5/Win">Il box model di IE5/Win</a>&quot;.</p>

<img src="../../images/tutorial/introduzione_ai_css/box_model.gif" alt="Definizione del box model" title="Definizione del box model" class="esempio" /> 
<p>Specificando un solo valore, si imposta il padding di tutti e quattro i lati al valore specificato. Specificando due valori, si imposta il padding dei lati superiore e inferiore al primo valore indicato, il padding dei lati destro e sinistro al secondo valore indicato. Specificando quattro valori, si imposta il il padding del lato superiore, del lato destro, del lato inferiore e del lato sinistro rispettivamente (in senso orario a partire dal margine superiore).</p>

<p>E' possibile impostare il paddin di ogni singolo lato attraverso le seguenti quattro propriet&agrave;: <strong>padding-top</strong>, <strong>padding-right</strong>, <strong>padding-bottom</strong>, <strong>padding-left</strong>. Ad esempio:</p>

<pre>
.esempio { padding-top: 1px }
.esempio { padding-right: 2px }
.esempio { padding-bottom: 3px }
.esempio { padding-left: 4px }
</pre>

<a id="s4_4_3" name="s4_4_3"></a> 
<h5>4.4.3 border</h5>

<p><strong>sintassi:</strong> border: &lt;spessore&gt; || &lt;stile&gt; || &lt;<a href="sezione_4.php#s4_6_3">colore</a>&gt;</p>

<p><strong>&lt;spessore&gt;</strong></p>

<ul>
<li>thin | medium | thick | &lt;<a href="sezione_4.php#s4_6_1">lunghezza</a>&gt;</li>
</ul>

<p>Lo spessore del bordo pu&ograve; essere impostato attraverso le tre parole chiave thin (fino), medium (medio) e thick (spesso), ovvero specificandone la <a href="sezione_4.php#s4_6_1">dimensione</a></p>

<p><strong>&lt;stile&gt;</strong></p>

<ul>
<li>none | dotted | dashed | solid | double | groove | ridge | inset | outset</li>
</ul>

<p>La propriet&agrave; border permette di impostare il bordo di un elemento (vedi la seguente immagine per maggiori dettagli). Per avere ulteriori informazioni sul box model &egrave; disponibile il seguente articolo: &quot;<a href="../IE5_box_model/index.html" title="Il box model di IE5/Win">Il box model di IE5/Win</a>&quot;.</p>

<img src="../../images/tutorial/introduzione_ai_css/box_model.gif" alt="Definizione del box model" title="Definizione del box model" class="esempio" /> 
<p>Per rendere il bordo visibile <strong>&egrave; necessario</strong> specificarne lo stile. Se lo stile &egrave; impostato su none il bordo non &egrave; visibile (utile per le immagini).</p>

<p>Esempio:</p>

<pre>
.box1 { border: thick solid blue }
.box2 { border: 2px dotted red }
.box3 { border: thin dashed #000000 }
.bottone { border: 5px outset #666 }
</pre>

<p>Il precedente codice (aggiungendo del margine e regolando la larghezza) genera i seguenti box:</p>

<div style="border: thick solid blue; margin:2px 0; width:30%;">.box1</div>

<div style="border: 2px dotted red; margin:2px 0; width:30%;">.box2</div>

<div style="border: thin dashed #000000; margin:2px 0; width:30%;">.box3</div>

<div style="border: 5px outset #666; margin:2px 0; width:30%;">.bottone</div>

<p>Tramite la propriet&agrave; border &egrave; possibile specificare solo il bordo di tutti e quatto i lati, qualora si volessero specificare i lati singolarmente &egrave; possibile utilizzare le seguenti propriet&agrave;: border-top, border-right, border-bottom, border-left che consentono, attraverso la stessa sintassi di border, di gestire i lati singolarmente. Esempio:</p>

<pre>
.box { 
  border-top: 1px dashed red;
  border-right: 2px dotted blue;
  border-bottom: 3px double green;
  border-left: 4px solid #000;
}
</pre>

<p>Il precedente codice (regolando la larghezza) genera il seguente box:</p>

<div style="border-top: 1px dashed red; border-right: 2px dotted blue; border-bottom: 3px double green; border-left: 4px solid #000; width:30%;">.box</div>

<p>In alternativa &egrave; possibile specificare singolarmente spessore, stile e colore del bordo attraverso le seguenti propriet&agrave;: border-width, border-color, border-style. Il seguente codice &egrave; equivalente a quello sopra riportato:</p>

<pre>
.box { 
  border-width: 1px 2px 3px 4px; <em>/* top right bottom left */</em>
  border-style: dashed dotted double solid; <em>/* top right bottom left */</em>
  border-color: red blue green #000; <em>/* top right bottom left */</em>
}
</pre>

<div style="border-width: 1px 2px 3px 4px; border-style: dashed dotted double solid; border-color: red blue green #000; width:30%;">.box</div>

<p>Quando si utilizzano le keyword thin, medium e thick per impostare la larghezza del bordo, lo spessore pu&ograve; variare leggermente in base al browser utilizzato. Lo stesso vale per i diversi stili. Si ricorda che Internet Explorer &egrave; incapace di rappresentare un bordo spesso 1 px o 1pt con lo stile dotted, lo stile del bordo sar&agrave; settato automaticamente su dashed.</p>

<p>Il bordo pu&ograve; essere aggiunto anche a <span style="border: 1px solid">parole del testo</span>.</p>

<a id="s4_4_4" name="s4_4_4"></a> 
<h5>4.4.4 width</h5>

<p><strong>sintassi:</strong> width: &lt;valore&gt;</p>

<p><strong>&lt;valore&gt;</strong></p>

<ul>
<li>&lt;<a href="sezione_4.php#s4_6_1">lunghezza</a>&gt; | &lt;<a href="sezione_4.php#s4_6_2">percentuale</a>&gt; | auto</li>
</ul>

<p>Esempio:</p>

<pre>
div.box { width: 70% }
img.icona { width: 50px; } 
</pre>

<p>La propriet&agrave; width permette di impostare la larghezza di un elemento (vedi la seguente immagine per maggiori dettagli). Per avere ulteriori informazioni sul box model &egrave; disponibile il seguente articolo: &quot;<a href="../IE5_box_model/index.html" title="Il box model di IE5/Win">Il box model di IE5/Win</a>&quot;.</p>

<img src="../../images/tutorial/introduzione_ai_css/box_model.gif" alt="Definizione del box model" title="Definizione del box model" class="esempio" /> 
<p>La larghezza pu&ograve; essere impostata per elementi <span class="help" title="Un elemento preceduto e seguito da un'interruzione di linea. Ad es. P o DIV">block-level</span> o gli elementi detti <span class="help" title="Un elemento di cui sonon note le dimensioni intrinseche. Ad es. IMG, INPUT, TEXTAREA">replaced element</span>.</p>

<p>Le percentuali sono calcolate in base alla larghezza dell'elemento <span class="help" title="il 'parent' &egrave; l'elemento che contiene quello di riferimento">parent</span>. Oltre che per la definizione dei box, la propriet&agrave; width pu&ograve; risultare utile nei form per impostare la larghezza dei campi e dei pulsanti.</p>

<a id="s4_4_5" name="s4_4_5"></a> 
<h5>4.4.5 height</h5>

<p><strong>sintassi:</strong> height: &lt;valore&gt;</p>

<p><strong>&lt;valore&gt;</strong></p>

<ul>
<li>&lt;<a href="sezione_4.php#s4_6_1">lunghezza</a>&gt; | &lt;<a href="sezione_4.php#s4_6_2">percentuale</a>&gt; | auto</li>
</ul>

<p>Esempio:</p>

<pre>
textarea { height: 200px; }
img.icona { height: 50px; } 
</pre>

<p>La propriet&agrave; height permette di impostare l'altezza di un elemento. L'altezza pu&ograve; essere impostata per elementi <span class="help" title="Un elemento preceduto e seguito da un'interruzione di linea. Ad es. P o DIV">block-level</span> o gli elementi detti <span class="help" title="Un elemento di cui sonon note le dimensioni intrinseche. Ad es. IMG, INPUT, TEXTAREA">replaced element</span>.</p>

<p>Le percentuali sono calcolate in base all'altezza dell'elemento <span class="help" title="il 'parent' &egrave; l'elemento che contiene quello di riferimento">parent</span>. Oltre che per la definizione dei box, la propriet&agrave; width pu&ograve; risultare utile nei form per impostare con precisione l'altezza di campi come TEXTAREA.</p>

<a id="s4_4_6" name="s4_4_6"></a> 
<h5>4.4.6 float</h5>

<p><strong>sintassi:</strong> float: &lt;valore&gt;</p>

<p><strong>&lt;valore&gt;</strong></p>

<ul>
<li>left | right | none</li>
</ul>

<p>Esempio:</p>

<pre>
img.figura { float: right; }
blockquote { float: left; } 
</pre>

<p>La propriet&agrave; float permette di disporre il testo attorno ad un elemento. Questa propriet&agrave; funziona come gli attibuti align=&quot;left&quot; o align=&quot;right&quot; per le immagini (attributi sconsigliati dal <span class="help" title="World Wide Web Consortium">W3C</span>), ma funziona con ogni elemento, non solo con le immagini.</p>

<p>Le percentuali sono calcolate in base all'altezza dell'elemento <span class="help" title="il 'parent' &egrave; l'elemento che contiene quello di riferimento">parent</span>. Oltre che per la definizione dei box, la propriet&agrave; width pu&ograve; risultare utile nei form per impostare con precisione l'altezza di campi come TEXTAREA.</p>

<a id="s4_4_7" name="s4_4_7"></a> 
<h5>4.4.7 clear</h5>

<p><strong>sintassi:</strong> clear: &lt;valore&gt;</p>

<p><strong>&lt;valore&gt;</strong></p>

<ul>
<li>none | left | right | both</li>
</ul>

<p>Esempio:</p>

<pre>
p.nofloat { clear: both; }
pre { clear: left; } 
</pre>

<p>La propriet&agrave; clear permette di specificare se l'elemento permette la presenza di elementi floating ai suoi lati. Il valore specificato posiziona l'elemento al di sotto di eventuali elementi fluttuanti posti sul lato specificato dal valore. Ulteriori dettagli sull'utilizzo della propriet&agrave; float sono riportati nell'articolo &quot;<a href="../../tips/recupero_float/index.html">Ripristino dell'allineamento in seguito all'utilizzo della propriet&agrave; float</a>&quot;.</p>

<h2>4.5 Classificazione</h2>

<a id="s4_5_1" name="s4_5_1"></a> 
<h5>4.5.1 display</h5>

<p><strong>sintassi:</strong> display: &lt;valore&gt;</p>

<p><strong>&lt;valore&gt;</strong></p>

<ul>
<li>block | inline | list-item | none</li>
</ul>

<p>Esempio:</p>

<pre>
img.esempio { display: block } 
img.icona { display: inline } 
img.contatore { display: none }
li { display: list-item }
</pre>

<p>La propriet&agrave; display permette di definire un elemento come elemento block-level, elemento inline, elemento di lista. Se il valore della propriet&agrave; display &egrave; impostato su non l'elemento (compresi tutti gli elenti in esso contenuti!) non verr&agrave; visualizzato.</p>

<p>L'utilizzo dell propriet&agrave; display pu&ograve; alterare la normale interpretazione dello <span title="Il programma utilizzato per interpretare la pagina web" class="help">User Agent</span> (ad esempio P &egrave; un elemento block-level mentre IMG &egrave; un elemento inline) e va dunque usato con cautela. La regola selettore { display: none } pu&ograve; essere utilizzata, ad esempio, per <a href="../stampare_con_i_css/index.html" title="Pagine pronte per la stampa con i CSS">migliorare la stampa delle pagine web</a>.</p>

<a id="s4_5_2" name="s4_5_2"></a> 
<h5>4.5.2 list-style</h5>

<p><strong>sintassi:</strong> list-style: &lt;marcatore&gt; || &lt;allineamento&gt; || &lt;<a href="sezione_4.php#s4_6_4">url</a>&gt;</p>

<p><strong>&lt;marcatore&gt;</strong></p>

<ul>
<li>disc | circle | square | decimal | lower-roman | upper-roman | lower-alpha | upper-alpha | none</li>
</ul>

<p><strong>&lt;allineamento&gt;</strong></p>

<ul>
<li>inside | outside</li>
</ul>

<p>Esempio:</p>

<pre>
ul.square { list-style: square; }
ul.inside { list-style: inside; }
ul.3pt { list-style: url(/images/3pt.gif) circle; }
ol.roman { list-style: upper-roman; } 
ol.alpha { list-style: lower-alpha; }
ol.none { list-style: none; }
</pre>

<p>Il precedente codice genera le seguenti liste:</p>

<ul style="list-style: square">
<li>Et harumd dereud facilis est<br />
er expedit distinct suscipit laboris</li>

<li>Et harumd dereud facilis est<br />
er expedit distinct suscipit laboris</li>

<li>Et harumd dereud facilis est<br />
er expedit distinct suscipit laboris</li>
</ul>

<ul style="list-style: inside;">
<li>Et harumd dereud facilis est<br />
er expedit distinct suscipit laboris</li>

<li>Et harumd dereud facilis est<br />
er expedit distinct suscipit laboris</li>

<li>Et harumd dereud facilis est<br />
er expedit distinct suscipit laboris</li>
</ul>

<ul style="list-style: url(/images/3pt.gif) circle;">
<li>Et harumd dereud facilis est<br />
er expedit distinct suscipit laboris</li>

<li>Et harumd dereud facilis est<br />
er expedit distinct suscipit laboris</li>

<li>Et harumd dereud facilis est<br />
er expedit distinct suscipit laboris</li>
</ul>

<ol style="list-style: upper-roman;">
<li>Et harumd dereud facilis est<br />
er expedit distinct suscipit laboris</li>

<li>Et harumd dereud facilis est<br />
er expedit distinct suscipit laboris</li>

<li>Et harumd dereud facilis est<br />
er expedit distinct suscipit laboris</li>
</ol>

<ol style="list-style: lower-alpha;">
<li>Et harumd dereud facilis est<br />
er expedit distinct suscipit laboris</li>

<li>Et harumd dereud facilis est<br />
er expedit distinct suscipit laboris</li>

<li>Et harumd dereud facilis est<br />
er expedit distinct suscipit laboris</li>
</ol>

<ol style="list-style: none;">
<li>Et harumd dereud facilis est<br />
er expedit distinct suscipit laboris</li>

<li>Et harumd dereud facilis est<br />
er expedit distinct suscipit laboris</li>

<li>Et harumd dereud facilis est<br />
er expedit distinct suscipit laboris</li>
</ol>

<p>La propriet&agrave; list-style permette di definire come debbano essere rappresentate le liste, permettendo di specificare sia lo stile dei marcatori, sia l'allinemaneto. Tramite il valore &lt;<a href="sezione_4.php#s4_6_4">url</a>&gt; &egrave; possibile specificare un'immagine per i marcatori. Qualora l'immagine specificata con &lt;<a href="sezione_4.php#s4_6_4">url</a>&gt; non fosse disponibile non viene usato nessun marcatore. Per evitare questo inconveniente &egrave; sufficiente specificare il marcatore desiderato oltre all'immagine:</p>

<pre>
ul { list-style: url(/percorso/immagine.gif) circle; }
</pre>

<h2>4.6 Lunghezze, percentuali, colori, url</h2>

<a id="s4_6_1" name="s4_6_1"></a> 
<h5>4.6.1 lunghezze</h5>

<p>Le lunghezze sono costituite da un numero (positivo o negativo) subito seguito dall'unit&agrave; di misura indicata con due lettere. Non &egrave; consentito inserire degli spazi fra il numero e l'unit&agrave; di misura.</p>

<p>Esistono due tipi di lunghezze: relative e assolute.</p>

<p>Le <strong>unit&agrave; relative</strong> forniscono una lunghezza relativamente ad un'altra lunghezza e sono dunque preferibili poich&eacute; maggiormente adattabili ai diversi media. Le unit&agrave; di misura relativa sono:</p>

<ul>
<li><strong>em:</strong> l'altezza dei font dell'elemento.</li>

<li><strong>px:</strong> pixel, la loro dimensione dipende dal dispositivo usato per la visione delle pagine web.</li>
</ul>

<p>Esempio:</p>

<pre>
.classeA { font-size: 10px } 
.classeA { line-height: 1.50em }  
</pre>

<p>L'unit&agrave; em si riferisce alla dimensione dei font dell'elemento a cui la regola si applica. Nel precedente esempio la classe 'classeA' ha un font di dimensione 10px di conseguenza 1em = 10px e la propriet&agrave; line-height impostata a 1.50em &egrave; come se fosse impostata a 15px. Quando usata per dimensionare i font, l'unit&agrave; em non si riferisce alla dimensione dei font dell'elemento a cui la regola si applica, bens&igrave; alla dimensione dei font dell'elemento <span class="help" title="il 'parent' &egrave; l'elemento che contiene quello di riferimento">parent</span> Maggiori dettagli sul dimensionamento dei font sono riportati nell'articolo &quot;<a href="tutorial/come_dimensionare_i_caratteri/index.html">Dimensionare i caratteri con i CSS</a>&quot;.</p>

<p>Si consideri il seguente esempio:</p>

<pre>
&lt;!DOCTYPE html PUBLIC &quot;-//W3C//DTD XHTML 1.0 Strict//EN&quot;
    &quot;http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd&quot;&gt;
&lt;html xmlns=&quot;http://www.w3.org/1999/xhtml&quot;&gt;
&lt;head&gt;
&lt;title&gt;Esempio&lt;/title&gt;
&lt;style type=&quot;text/css&quot;&gt;
&lt;!-- 
.classeA { font-size: 10px } 
.classeA { line-height: 1.50em }
.calsseA h1 { font-size: 2.00em } 
--&gt;
&lt;/style&gt;
&lt;/head&gt;
&lt;body&gt;
&lt;div class=&quot;classeA&quot;&gt;
&lt;h1&gt;Elemento H1 [ hp ]&lt;/h1&gt;
testo delle calsse 'classeA' [ hp ]&lt;br /&gt;
testo delle calsse 'classeA' [ hp ]  
&lt;/div&gt;
&lt;/body&gt;
&lt;/html&gt;
</pre>

<p>Il risultato del codice sopra riportato &egrave; riprodotto nella seguente immagine:</p>

<img src="../../images/tutorial/introduzione_ai_css/esempio_unita_1.gif" class="esempio" alt="esempio con dimensioni" /> 
<p>La dimensione del pixel dipende invece dalla risoluzione dispositivo. Ad esempio lo schermo di un PC ha una risoluzione pari a 96dpi mentre una stampante pu&ograve; avere una risoluzione pari 400dpi:</p>

<img src="../../images/tutorial/introduzione_ai_css/esempio_unita_2.gif" class="esempio" alt="esempio risoluzione - fonte http://www.w3.org/TR/2002/WD-CSS21-20020802" /> 
<p>Le <strong>lunghezze assolute</strong> andrebbero utilizzate esclusivamente quando sono note le propriet&agrave; fisiche dei media (ad esempio la dimensione dei fogli di una stampante &egrave; tipicamente il formato A4). Le unit&agrave; assolute sono:</p>

<ul>
<li><strong>in</strong>: inch (pollici -- 1in=2.54cm)</li>

<li><strong>cm</strong>: centimetri</li>

<li><strong>mm</strong>: millimetri</li>

<li><strong>pt</strong>: punti (1pt=1/72in)</li>

<li><strong>pc</strong>: picas (1pc=12pt)</li>
</ul>

<a id="s4_6_2" name="s4_6_2"></a> 
<h5>4.6.2 percentuali</h5>

<p>Le percentuali (positivie o negative) sono relative alla dimensione di altri elementi, dipendendo dalla propriet&agrave; che utilizza le percentuali. Ad esempio:</p>

<pre>
div.halfbox { width: 50% } 
<em>/* 50% della larghezza dell'elemento parent */</em>
p.nota  { font-size: 80% }
<em>/* 80% della dimensione dei font dell'elemento parent */</em>
</pre>

<a id="s4_6_3" name="s4_6_3"></a> 
<h5>4.6.3 colori</h5>

<p>Un colore &egrave; cosituito da una keyword o da un codice RGB (Red Green Blue - Rosso, Verde, Blu).</p>

<p>Le 16 keyword sono: aqua, black, blue, fuchsia, gray, green, lime, maroon, navy, olive, purple, red, silver, teal, white, e yellow.</p>

<p>I valori RGB possono essere forniti attraverso quattro sintassi:</p>

<ul>
<li><strong>#rrggbb</strong>: ad esempio #CC6600</li>

<li><strong>#rgb</strong>: ad esempio #C60 (#abc = #aabbcc)</li>

<li><strong>rgb(r,g,b)</strong>: dove r,g,b possono variare da 0 a 255. Ad esempio rgb(204,102,0)</li>

<li><strong>rgb(r%,g%,b%)</strong>: dove r,g,b possono variare da 0.0 a 100.0. Ad esempio rgb(80%,40%,0)</li>
</ul>

<p>I valori #CC6600, #C60, rgb(204,102,0), rgb(80%,40%,0) specificano tutti lo stesso colore (<span style="color: #C60">arancione scuro</span>).</p>

<p>La sintassi #rgb &egrave; molto utile poich&eacute; facitilta l'indicazione dei colori della palette &quot;web safe&quot;.</p>

<a id="s4_6_4" name="s4_6_4"></a> 
<h5>4.6.4 URL</h5>

<p>Un valore URL viene fornito attraverso la seguente sintassi: url(<em>url</em>), dove <em>url</em> &egrave; l'indirizzo da specificare; <em>url</em> pu&ograve; essere riportato fra apici o virgolette. Esempi:</p>

<ul>
<li>body { background: url(/images/sfondo.gif) }</li>

<li>body { background: url(&quot;/images/sfondo.gif&quot;) }</li>

<li>body { background: url('/images/sfondo.gif') }</li>

<li>body { background: url(../../images/sfondo.gif) }</li>
</ul>

<p>I percorsi sono relativi alla cartella contenente il foglio di stile. Se ad esempio il foglio di stile &egrave; contenuto nella cartella /inc/css/ il valore url(&quot;images/sfondo.gif&quot;) indica il file &quot;/inc/css/images/sfondo.gif&quot;. Per evitare problemi con l'interpretazione dei percorsi relativi da parte di alcuni <span title="Il programma utilizzato per interpretare la pagina web" class="help">User Agent</span> si consiglia di utilizzare sempre percorsi assoluti: url(&quot;/images/sfondo.gif&quot;).</p>

<div style="border-top: 1px solid #993; border-bottom: 1px solid #993"><span class="help" title="Table of Contents">TOC</span> 
<ul style="margin:0 0 5px 0; padding-left:2.50em">
<li><a href="index.html">Indice</a></li>

<li><a href="sezione_1.php">Cosa sono i fogli di stile</a></li>

<li><a href="sezione_2.php">La sintassi delle regole</a></li>

<li><a href="sezione_3.php">I selettori</a></li>

<li>Le propriet&agrave;</li>

<li><a href="sezione_5.php">Associare i fogli di stile ai documenti (X)HTML</a></li>

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



<p class="nascosto"><a accesskey="T" name="PIEDE" id="PIEDE" href="sezione_4.php#TOP" title="Torna all'inizio della pagina">Torna all'inizio della pagina</a></p>

<p id="navGenerale" title="Link di navigazione generale"><a href="../../index.html" title="Torna alla homepage di .ConStile">HOMEPAGE</a> / <a href="../../mappa.php" title="Mappa del sito">Mappa</a> / <a href="../../informazioni.php" title="Tutte le informazioni su .ConStile">Informazioni</a> / <a href="../../exit.php" title="I link consigliati per uscire da .ConStile">EXIT (Link)</a></p>





</div>

<!-- /footer -->

<hr />

<!-- no CSS -->

<div id="avviso-non-standard"><img src="../../images/avvisow3c.png" alt="" /></div>

<!-- /no CSS -->

<div id="page-url">l'indirizzo di questa pagina &egrave;: http://www.constile.org/tutorial/introduzione_ai_css/sezione_4.php</div>

</div><!-- fine bodycontent -->



</body>

</html>



