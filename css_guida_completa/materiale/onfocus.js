/* CONFIG */
menuClassName = "menuNavigazione";

/* SCRIPT */
function closeSub(menu) {
	for (var i=0; i<menu.childNodes.length; i++)
		if (menu.childNodes[i].nodeName.toLowerCase()=="li") {
			li = menu.childNodes[i];
			li.onmouseover = li.onactivate = li.onfocus = function() { if (this.subMenu) this.subMenu.className = this.subMenu.className.replace(/subMenu-off/g,"subMenu-on") };
			li.onmouseout = li.ondeactivate = li.onblur = function() { if (this.subMenu) closeSub(this.subMenu) };
			for (j=0; j<li.childNodes.length; j++)
				if (li.childNodes[j].nodeName.toLowerCase()=="ul" || li.childNodes[j].nodeName.toLowerCase()=="ol") closeSub(li.subMenu = li.childNodes[j]);
		}
	menu.className = menu.className.replace(/\s?subMenu-on/g,"")+" subMenu-off";
}

/* ON LOAD */
window.onload = function(e) {
	if(tags_ = document.getElementsByTagName('ul'))
		for(i=0; i<tags_.length; i++) 
			if (tags_[i].className==menuClassName) closeSub(tags_[i]);
	if(tags_ = document.getElementsByTagName('ol'))
		for(i=0; i<tags_.length; i++) 
			if (tags_[i].className==menuClassName) closeSub(tags_[i]);
}

/*
(c) 2004 Gianluca Troiani < g.troiani@constile.org > some rights reserved.
This code is licensed under Creative Commons Attribution-ShareAlike License < http://creativecommons.org/licenses/by-sa/2.0/ >
*/