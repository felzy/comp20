function tabClick(tab) {
	for (var i=1; i<3; i++) {
		document.getElementById("cont-"+i).className="tab";
		document.getElementById("cont-"+i+"-1").className="tabcontent paddingAll hide";
	}
	document.getElementById("cont-"+tab).className="tab active";
	document.getElementById("cont-"+tab+"-1").className="tabcontent paddingAll";
}