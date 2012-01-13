<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
 "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="it">
<head>
<title>.ConStile | Tutorial | Introduzione ai CSS: I selettori</title>
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
<div class="nascosto">[<a name="TOP" id="TOP" href="sezione_3.php#MENU">Vai al menu di navigazione principale</a>]</div>
<!-- /logo -->
<hr />
<!-- barra di navigazione -->
<div id="navbar" title="Menu di navigazione">
<h2 class="nascosto">Sezioni</h2>
	<ul>
		<li class="nascosto">[<a name="MENU" id="MENU" href="sezione_3.php#CONTENUTI">Vai ai contenuti</a>]</li>
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
<div id="locazione" title="&quot;Voi siete qui&quot;: Attuale posizione nel sito"><a href="../../index.html" title="Vai alla homepage">Home</a> &gt; <a href="../index.html">Tutorial</a> &gt; <a href="index.html">Introduzione ai css</a> &gt; Introduzione ai CSS: I selettori</div>
<!-- /barra di locazione -->
</div>
<hr />
<div id="bodycontent">
<div class="nascosto">[<a name="CONTENUTI" id="CONTENUTI" href="sezione_3.php#PIEDE">Vai al pi&egrave; di pagina</a>]</div>

<div id="contenuto">
<div style="border-top: 1px solid #993; border-bottom: 1px solid #993"><span class="help" title="Table of Contents">TOC</span> 
<ul style="margin:0 0 5px 0; padding-left:2.50em">
<li><a href="index.html">Indice</a></li>

<li><a href="sezione_1.php">Cosa sono i fogli di stile</a></li>

<li><a href="sezione_2.php">La sintassi delle regole</a></li>

<li>I selettori</li>

<li><a href="sezione_4.php">Le propriet&agrave;</a></li>

<li><a href="sezione_5.php">Associare i fogli di stile ai documenti (X)HTML</a></li>

<li><a href="sezione_6.php">Note</a></li>
</ul>
</div>

<h1>Introduzione ai CSS</h1>

<h2>3. I selettori</h2>

<p>I selettori servono a specificare a quale elemento del documento la regola debba essere applicata. I principali selettori sono:</p>

<ul>
<li><a href="sezione_3.php#s3_1">3.1 Tag HTML</a></li>

<li><a href="sezione_3.php#s3_2">3.2 Classi</a></li>

<li><a href="sezione_3.php#s3_3">3.3 Identificatori</a></li>

<li><a href="sezione_3.php#s3_4">3.4 Pseudo-classi e Pseudo-elementi</a></li>

<li><a href="sezione_3.php#s3_5">3.5 Selettori in cascata</a></li>

<li><a href="sezione_3.php#s3_6">3.6 Raggruppamento</a></li>
</ul>

<a id="s3_1" name="s3_1"></a> 
<h3>3.1 Tag HTML</h3>

<p>Ogni tag HTML &egrave; un selettore. Ad esempio:</p>

<pre>
p { text-indent: 2em; } 
a { font-weight: bold; }
</pre>

<p>Il codice sopra riportato specifica al browser che i paragrafi devono avere il capoverso con un rientro di due caratteri (come questo stesso paragrafo) e che i link devono essere in grassetto, migliorandone l'identificazione all'interno del testo.</p>

<a id="s3_2" name="s3_2"></a> 
<h3>3.2 Classi</h3>

<p>Spesso si ha la necessit&agrave; di associare ad uno stesso tag HTML diversi stili, per fare ci&ograve; &egrave; possibile ricorrere alle classi.</p>

<pre>
p.nota { font-size: small } /* carattere piccolo */
p.evidenzia { background-color: yellow; } /* area con sfondo giallo */
</pre>

<p>Le due classi sono <strong>nota</strong> ed <strong>evidenzia</strong> e vengono specificate separando il nome del tag e il nome della classe con un punto. La classe verr&agrave; specificata nel codice HTML attraverso l'attributo CLASS:</p>

<pre>
&lt;p <strong>class=&quot;nota&quot;</strong>&gt;Questo paragrafo &egrave; una nota&lt;/p&gt;
&lt;p <strong>class=&quot;evidenziato&quot;</strong>&gt;Questo paragrafo &egrave; evidenziato in giallo&lt;/p&gt;
</pre>

<p>La sintassi utilizzata specifica che la classe &egrave; associata al tag P. In questo modo &egrave; possibile associare lo stesso nome per classi associate a tag differenti:</p>

<pre>
<em>CSS</em>
p.nota { font-size: small } /* carattere piccolo */
span.nota { color: #999999; } /* testo in grigio */

<em>(X)HTML</em>
&lt;p <strong>class=&quot;nota&quot;</strong>&gt;Questo paragrafo &egrave; una nota&lt;/p&gt;
&lt;p&gt;Testo normale (&lt;span <strong>class=&quot;nota&quot;</strong>&gt;nota nel testo&lt;/span&gt;) testo normale ...&lt;/p&gt;
</pre>

<p>Le classi possono anche essere associate a nessun tag HTML, in questo modo la stessa classe pu&ograve; essere associata a pi&ugrave; selettori:</p>

<pre>
<em>CSS</em>
.nota { font-size: small } /* carattere piccolo */

<em>(X)HTML</em>
&lt;p <strong>class=&quot;nota&quot;</strong>&gt;Questo paragrafo &egrave; una nota&lt;/p&gt;
&lt;div <strong>class=&quot;nota&quot;</strong>&gt;Questa sezione &egrave; una nota&lt;/div&gt;
</pre>

<p>Nota bene: per ogni selettore &egrave; possibile associare una e una sola classe. Ad esempio <strong>non &egrave; valido</strong> il seguente codice:</p>

<pre>
p.classe1.classe2 { ... }
</pre>

<a id="s3_3" name="s3_3"></a> 
<h3>3.3 Identificatori</h3>

<p>Gli identificatori sono simili alle classi, ma servono a definire un'entit&agrave; <strong>unica</strong> all'interno del ducumento. Se le classi, come la parola stessa indica, definiscono un insieme di elementi concettualmente omogenei (ad esmpio le note di un testo possono essere accorpate nella classe note), l'identificatore deve definire un elemento che non si ripete all'interno del documento, ad esempio la nota per il copyright.</p>

<pre>
#nota-copyright { font-size: xx-small }
</pre>

<p>Il nome del identificatore deve essere preceduto dal carattere '<strong>#</strong>'. L'identificatore verr&agrave; specificato nel codice HTML attraverso l'attributo ID:</p>

<pre>
&lt;p <strong>id=&quot;nota-copyright&quot;</strong>&gt;Questo paragrafo &egrave; la nota per il copyright&lt;/p&gt;
</pre>

<p>Nel codice HTML non devono esistere due tag HTML associati allo stesso identificatore, non possono dunque esistere due tag HTMl con lo stesso valore per l'attributo ID.</p>

<pre>
&lt;p <strong>id=&quot;nota-copyright&quot;</strong>&gt;Questo paragrafo &egrave; la nota per il copyright&lt;/p&gt;
&lt;p <strong>id=&quot;nota-copyright&quot;</strong>&gt;E' errato inserire questo paragrafo&lt;/p&gt;
</pre>

<a id="s3_4" name="s3_4"></a> 
<h3>3.4 Pseudo-classi e Pseudo-elementi</h3>

<p>Pseudo-classi e pseudo-elementi sono classi ed elementi speciali, automaticamente riconosciuti dai browser che supportano i CSS (Mozzilla supporta maggiormente pseudo-classi e pseudo-elementi rispetto quanto non faccia Internet Explorer). Le pseudo-classi creano distinzioni fra elementi, ad esempio i link visitati e i link attivi sono distinti attraverso due pseudo-classi. Gli pseudo-elementi si riferiscono a sottoparti di elementi come il primo carattere di un paragrafo. La sintassi per specificare le regole da associare a pseudo-classi e pseudo-elementi &egrave; la seguente:</p>

<pre>
selettore:pseudoClasse { propriet&agrave;: valore }
selettore:pseudoElemento { propriet&agrave;: valore }
</pre>

<p>Come detto, pseudo-classi e pseudo-elementi sono automaticamente riconosciuti dai browser che supportano i CSS (il supporto pu&ograve; differire per i diversi browser), non &egrave; dunque necessario specificare nulla nel codice HTML. Si consideri il seguente esempio, relativo alle pseudo-classi:</p>

<pre>
A:link { color:  blue; }
A:visited { color: purple; }
A:hover { color: red; }
A:active { color: darkred; }
</pre>

<p>Il codice CSS indica al browser che i link devono essere blu, i link visitati devono essere viola, i link sui quali il puntatore del mouse si trova devono essere rossi (effetto roll-hover), i link attivi devono essere rosso scuro. Nel codice HTML non sar&agrave; necessario specificare nulla:</p>

<pre>
&lt;a href=&quot;URL&quot;&gt;questo link cambier&agrave; colore in base al suo stato&lt;/a&gt;
</pre>

<p>Si consideri ora il seguente esempio, in cui verr&agrave; mostrato il funzionamento degli pseudo-elementi e come pseudo-classi e pseudo-elementi possano essere associati anche a classi e identificatori:</p>

<pre>
p#paragrafo-iniziale { text-indent: 0em; }
p#paragrafo-iniziale:first-letter { 
  font-size: 24px; 
  font-family: georgia;
  font-style: italic;
  float: left;
  margin:-5px 3px 0 0; 
}
p#paragrafo-iniziale:first-line { 
  text-transform: uppercase;
  font-style: italic; 
}
p { 
  font-size:10px;
  font-family: verdana;
  text-indent: 2em; 
  width: 300px; 
  text-align: justify 
}
</pre>

<p>Il codice sopra riportato utilizza due pseudo-elementi: <strong>first-letter</strong> e <strong>first-line</strong>, che selezionano la prima lettera e la prima riga di testo del selettore a cui sono associate, in questo caso il paragrafo di classe <strong>paragrafo-iniziale</strong>. Di seguito &egrave; riportato un esempio di codice HTML con cui utilizzare le regole specificate, si noti come non ci sia alcun accenno agli pseudo-elementi ma solo alla classe paragrafo-iniziale:</p>

<pre>
&lt;p <strong>id=&quot;paragrafo-iniziale&quot;</strong>&gt;Questo &egrave; il paragrafo iniziale [...]&lt;/p&gt;
&lt;p&gt;Questo &egrave; un paragrafo normale [...]&lt;/p&gt;
&lt;p&gt;Questo &egrave; un paragrafo normale [...]&lt;/p&gt;
</pre>

<p>Per comodit&agrave; &egrave; di seguito riportata un'immagine che riproduce il risultato su un browser (Mozzilla 1.0, in questo caso) che suppori i CSS. Si noti come la prima riga e il primo carattere del paragrafo associato alla classe paragrafo-iniziale abbiano caratteristiche diverse dal resto del testo, il risultato &egrave; stato ottenuto senza appesantire il testo se non per specificare quale fosse il paragrafo interessato d'interesse.</p>

<img alt="[immagine: Esempio per i codici CSS e HTML sopra riportati]" src="../../images/tutorial/introduzione_ai_css/esempio_pseudoelementi.gif" class="esempio" height="148" width="320" /> <a id="s3_5" name="s3_5"></a> 
<h3>3.5 Selettori in cascata</h3>

<p>Ci sono numerosi altri modi pi&ugrave; o meno elaborati per specificare dei selettori, alcuni dei quali non supportati da browser largamente diffusi (ad esempio Internet Explorer 6 e inferiori). Un metodo ben supportato e molto utile e quello di utilizzare selettori in cascata:</p>

<pre>
selettore1 selettore2 { propriet&agrave;: valore }
</pre>

<p>In questo caso la regola si applica al selettore2 <strong>se</strong> questo &egrave; <strong>contenuto</strong> nel selettore1. Ad esempio si consideri il seguente codice:</p>

<pre>
code i { color: red; }
</pre>

<p>Questo codice specifica che il tag I, se inserito nel tag CODE, deve contenere del testo di colore rosso. Ad esempio, si consideri il seguente codice CSS:</p>

<pre>
&lt;p&gt;&lt;code&gt;testo normale &lt;i&gt;testo corsivo&lt;/i&gt; testo normale&lt;/code&gt;&lt;/p&gt;
&lt;p&gt;testo normale &lt;i&gt;testo corsivo&lt;/i&gt; testo normale&lt;/p&gt;
</pre>

<p>La seguente immagine riproduce il risultato che si ottiene su un browser (Internet Explorer 6, in questo caso) che suppori i CSS:</p>

<img alt="[immagine: Esempio per i codici CSS e HTML sopra riportati]" src="../../images/tutorial/introduzione_ai_css/esempio_selettore_a_cascata.gif" class="esempio" height="67" width="347" /> <a id="s3_6" name="s3_6"></a> 
<h3>3.6 Raggruppamento</h3>

<p>Qualora pi&ugrave; selettori dovessero rispettare le stesse regole, &egrave; possibile raggrupparli come segue:</p>

<pre>
h1, h2, h3, h4, h5, h6 { font-family: sans-serif }
</pre>

<p>Il codice sopra riportato &egrave; equivalente al seguente codice:</p>

<pre>
h1 { font-family: sans-serif }
h2 { font-family: sans-serif }
h3 { font-family: sans-serif }
h4 { font-family: sans-serif }
h5 { font-family: sans-serif }
h6 { font-family: sans-serif }
</pre>

<div style="border-top: 1px solid #993; border-bottom: 1px solid #993"><span class="help" title="Table of Contents">TOC</span> 
<ul style="margin:0 0 5px 0; padding-left:2.50em">
<li><a href="index.html">Indice</a></li>

<li><a href="sezione_1.php">Cosa sono i fogli di stile</a></li>

<li><a href="sezione_2.php">La sintassi delle regole</a></li>

<li>I selettori</li>

<li><a href="sezione_4.php">Le propriet&agrave;</a></li>

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



<p class="nascosto"><a accesskey="T" name="PIEDE" id="PIEDE" href="sezione_3.php#TOP" title="Torna all'inizio della pagina">Torna all'inizio della pagina</a></p>

<p id="navGenerale" title="Link di navigazione generale"><a href="../../index.html" title="Torna alla homepage di .ConStile">HOMEPAGE</a> / <a href="../../mappa.php" title="Mappa del sito">Mappa</a> / <a href="../../informazioni.php" title="Tutte le informazioni su .ConStile">Informazioni</a> / <a href="../../exit.php" title="I link consigliati per uscire da .ConStile">EXIT (Link)</a></p>





</div>

<!-- /footer -->

<hr />

<!-- no CSS -->

<div id="avviso-non-standard"><img src="../../images/avvisow3c.png" alt="" /></div>

<!-- /no CSS -->

<div id="page-url">l'indirizzo di questa pagina &egrave;: http://www.constile.org/tutorial/introduzione_ai_css/sezione_3.php</div>

</div><!-- fine bodycontent -->



</body>

</html>



