<?
/* inizio configurazione */
$stili_alternativi = "Alternativa 1: alt1_1.css, alt1_2.css; Alternativa 2 :
alt2.css";
$stili_preferiti = "Stile predefinito : preferito.css";
$stili_permanenti = "perma1.css, perma2.css";
/* fine configurazione -- non modificare se non si conosce il linguaggio di
programmazione */
function elimina_spazi(& $e) { $e = trim($e); }
/* elaborazione dei dati: creo array associativi per ogni titolo */
/* stili alternativi */
$a_stili_alternativi = explode(';',$stili_alternativi);
$aa_stili_alternativi = array();
if($a_stili_alternativi[0]) foreach ($a_stili_alternativi as $gruppo) {
$dati = explode(':',$gruppo);
$aa_stili_alternativi[trim($dati[0])]=explode(',',$dati[1]);
array_walk($aa_stili_alternativi[trim($dati[0])],'elimina_spazi');
}
/* stili preferiti */
$aa_stili_preferiti = array();
$dati=explode(':',$stili_preferiti);
if($dati[0]) {
$aa_stili_preferiti[trim($dati[0])]=explode(',',$dati[1]);
array_walk($aa_stili_preferiti[trim($dati[0])],'elimina_spazi');
}
/* stili permanenti */
$stili_permanenti = explode(',',$stili_permanenti);
array_walk($stili_permanenti,'elimina_spazi');
function richiama_alternativi($titolo) {
global $aa_stili_alternativi;
if(array_key_exists($titolo,$aa_stili_alternativi))
foreach($aa_stili_alternativi[$titolo] as $file) echo "@import \"$file\";\n";
}
function richiama_preferiti($titolo) {
global $aa_stili_preferiti;
if(array_key_exists($titolo,$aa_stili_preferiti))
foreach($aa_stili_preferiti[$titolo] as $file) echo "@import \"$file\";\n";
}
function richiama_permanenti() {
global $stili_permanenti;
foreach($stili_permanenti as $file) echo "@import \"$file\";\n";
}
/* determinazione degli stili da applicare */
$titolo = array_pop(array_keys($aa_stili_preferiti));
if (isset($_COOKIE["titoloStile"])) $titolo = $_COOKIE["titoloStile"];
/* stampa le regole @import */
header ("Content-type: text/css");
richiama_permanenti();
richiama_preferiti($titolo);
richiama_alternativi($titolo);
?>