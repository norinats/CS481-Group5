// https://www.w3schools.com/js/js_cookies.asp
function getCookie(cookie) {
    var name = cookie + "=";
    var decodedCookie = decodeURIComponent(document.cookie);
    var ca = decodedCookie.split(';');
    for(var i = 0; i < ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) == ' ') {
            c = c.substring(1);
        }
        if (c.indexOf(name) == 0) {
            return c.substring(name.length, c.length);
        }
    }
    return "";
}

var selected_state = getCookie("selected");
document.getElementById("state-title").innerHTML = selected_state;

jQuery.ajax({
    dataType: "json",
    url: 'https://api.covidtracking.com/v1/states/current.json',
    success: function(result){
        jQuery.each(result, function(index, value){
            var state_id = result[index]["state"];
            if(state_id == selected_state) {
                document.getElementById("update-time").innerHTML = result[index]["lastUpdateEt"];
                document.getElementById("positive").innerHTML = result[index]["positive"];
                document.getElementById("deaths").innerHTML = result[index]["death"];
                document.getElementById("recovered").innerHTML = result[index]["recovered"];
                document.getElementById("tests").innerHTML = result[index]["totalTestResults"];
            }
        })
    }
});