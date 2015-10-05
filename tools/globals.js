var xhrArray = new Array();

function getXmlHttpRequest() {

    var xhr = null;
    
    if (window.XMLHttpRequest || window.ActiveXObject) {
		if (window.ActiveXObject) {
			try {
				xhr = new ActiveXObject("Msxml2.XMLHTTP");
			} catch(e) {
				xhr = new ActiveXObject("Microsoft.XMLHTTP");
			}
		} else {
			xhr = new XMLHttpRequest(); 
		}
        
        return xhr;
        
	} else {
		alert("Cannot instanciante XMLHTTPRequest for AJAX.");
        return null;
	}
}