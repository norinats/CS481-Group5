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
        }
      })
      simplemaps_usmap.load();
    }
  });
})
