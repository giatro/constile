function createCookie(name,value,days) {
  if (days) {
    var date = new Date();
    date.setTime(date.getTime()+(days*24*60*60*1000));
    var expires = '; expires='+date.toGMTString();
  }
  else expires = '';
  document.cookie = name+'='+value+expires+'; path=/';
}

function readCookie(name) {
  var nameEQ = name + '=';
  var ca = document.cookie.split(';');
  for(var i=0;i < ca.length;i++) {
    var c = ca[i];
    while (c.charAt(0)==' ') c = c.substring(1,c.length);
    if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length,c.length);
  }
  return null;
}

function setFontSize(size) {
	var body = document.getElementsByTagName('body')[0];
	var percentuale = "80%"; // default
	if (size == 1) percentuale = "70%";
	if (size == 2) percentuale = "80%";
	if (size == 3) percentuale = "90%";
	if (size == 4) percentuale = "100%";
	if (size == 5) percentuale = "110%";
	body.style.fontSize = percentuale;
	createCookie('TuoSitoFontSize',size,365);
}

window.onload = function() {
	size = readCookie('TuoSitoFontSize');
	setFontSize(size);
}