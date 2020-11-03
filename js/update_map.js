jQuery(document).ready(function(){
  jQuery.ajax({
    dataType: "json",
    url: 'https://api.covidtracking.com/v1/states/current.json',
    success: function(result){
      jQuery.each(result, function(index, value){
        var state_id = result[index]["state"];
        var map_state = simplemaps_usmap_mapdata.state_specific[state_id];
        if (map_state) {
          map_state['description'] = "Total case: " + result[index]["positive"]
          + "<div>Death: " + result[index]["death"] + "</div>";
          
          var cpercent = (60 - result[index]["positive"]/13000);
          if (cpercent > 0) {
            map_state['color'] = increase_brightness('#0071a4', cpercent);
          } else {
            map_state['color'] = increase_brightness('#0071a4', 0);
          }
        }
      })
      simplemaps_usmap.load();
    }
  });
})

function increase_brightness(hex, percent){
    // strip the leading # if it's there
    hex = hex.replace(/^\s*#|\s*$/g, '');

    // convert 3 char codes --> 6, e.g. `E0F` --> `EE00FF`
    if(hex.length == 3){
        hex = hex.replace(/(.)/g, '$1$1');
    }

    var r = parseInt(hex.substr(0, 2), 16),
        g = parseInt(hex.substr(2, 2), 16),
        b = parseInt(hex.substr(4, 2), 16);

    return '#' +
       ((0|(1<<8) + r + (256 - r) * percent / 100).toString(16)).substr(1) +
       ((0|(1<<8) + g + (256 - g) * percent / 100).toString(16)).substr(1) +
       ((0|(1<<8) + b + (256 - b) * percent / 100).toString(16)).substr(1);
}
