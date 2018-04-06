  $(document).ready(function(){
    $("div#departureSearchResults div.results").hide();
    $("div#departureSearchResults input").keyup(function(){
    var search = $("div#departureSearchResults input").val().trim();
    if (search != "")
    {
      $.get("getFlightsByOrigin.php?searchFlight="+search,function(results)
      {
          // contrast the ugly version!
          // note how we don't need to do any parsing - results will already
          // be an array!
          console.log(results);
          // build the results div
          $("div#departureSearchResults div.results").empty();
          for (var i = 0; i < results.length; i++)
          {
            var result = $('<div class="result">'+results[i]+'</div>');
            result.click(function()
            {
              $("div#departureSearchResults div.results").hide();
              $("input[name=searchFlight]").val($(this).text());
              $("form").get(0).submit();
            });
            $("div#departureSearchResults div.results").append(result);
          }
          if (results.length == 0)
          {
            $("div#departureSearchResults div.results").hide();
          }
          else {
            $("div#departureSearchResults div.results").show();
          }
      });
    }
    else // if search IS empty
    {
      $("div#departureSearchResults div.results").hide();
    }
  });
  $("input#ajaxsearchbutton").click(function(){
    var search = $("input[name=ajaxsearchname]").val().trim();
    $.get("getCustomersBySurname_service.php?surname="+search,function(results){
      // results will be an array of Javascript objects which precisely match
      // the Customer objects in PHP land.

      // wipe out the existing rows in the table seeing as how we're replacing them
      $("table#resultstable tbody").empty();
      // now we can iterate through results
      for (var i = 0; i < results.length; i++)
      {
        var customer = results[i];
        // build a new table row
        var newrow = $("<tr></tr>");
        // just so we can see the difference between AJAX-generated rows and
        // normal rows
        newrow.css("color","blue");
        // build the table cells
        newrow.append("<td>"+customer.givenname+"</td>");
        newrow.append("<td>"+customer.surname+"</td>");
        newrow.append("<td>"+customer.address+"</td>");
        // append the new row to the table
        $("table#resultstable tbody").append(newrow);
      }
    });
  });
});
