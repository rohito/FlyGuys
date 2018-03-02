$(document).ready(function(){
  $("div#ajaxsearchorigin input").keyup(function(){
    var search = $("div#ajaxsearchorigin input").val().trim();
    if(search!=""){
      $.get("getFlightsByOrigin_service.php?origin="+search,function(results){
          console.log(results);
          $("div#ajaxsearchorigin div.results").empty();
          for( var i = 0; i<results.length;i++){
            var result = $('<div class="results">'+results[i]+'</div>');
            result.click(function{
              $("div#ajaxsearchorigin div.results"

            })
          }
      })
    }
  })
})
