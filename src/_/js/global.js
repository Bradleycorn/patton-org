
$(document).ready(function() {

});


/* exported setCookie */
function setCookie(name, value, expireDays, path) {
	path = path || "/";
	expireDays = expireDays || null;

    var valueString = name + "=" + value + "; ";
    var pathString = "path=" + path + ";";
	var expireString = null;

    if (expireDays !== null) {
    	var date = new Date();
    	date.setTime(date.getTime() + (expireDays*24*60*60*1000));
	    expireString = "expires=" + date.toUTCString() + "; ";
    } else {
    	expireString = "";
    }

    document.cookie = valueString + expireString + pathString;
}

/* exported getCookie */
function getCookie(cname) {
    var name = cname + "=";
    var ca = document.cookie.split(';');
    for(var i = 0; i <ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0)===' ') {
            c = c.substring(1);
        }
        if (c.indexOf(name) === 0) {
            return c.substring(name.length,c.length);
        }
    }
    return null;
}