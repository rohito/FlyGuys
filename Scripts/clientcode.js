$(document).ready(initialisePage);

function initialisePage()
{
  
  $("div#departureSearchResults input").keyup(handleAutoComplete);
  $("input#ajaxSearchButton").click(ajaxSearch);
}

////////////////////////// AUTOCOMPLETE SHOWCASES ///////////////////////////////////
////////////////////////// PRETTY JSON AJAX CODE //////////////////////////////////

function handleAutoComplete()
{
  var search = $("div#departureSearchResults").val().trim();
  if (search != "")
  {
    $.get("Utils/getFlightsByOrigin.php?searchFlight="+search,autoCompleteCallback);
  }
  else // if search IS empty
  {
    $("div#departureSearchResults div.results").hide();
  }
}

function autoCompleteCallback(results)
{
    console.log(results);
    // build the results div
    $("div#departureSearchResults div.results").empty();
    for (var i = 0; i < results.length; i++)
    {
      var result = $('<div class="result">'+results[i]+'</div>');
      result.click(function(){
        $("div#departureSearchResults div.results").hide();
        $("input[name=searchname]").val($(this).text());
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
}

//////////////////// AJAX SEARCH ///////////////////////////////////////////

function ajaxSearch()
{
  var search = $("input[name=searchFlight]").val().trim();
  $.get("Utils/getFlightsByOrigin.php?searchFlight="+search,ajaxSearchCallback);
}

function ajaxSearchCallback(results)
{
  // results will be an array of Javascript objects which precisely match
  // the Customer objects in PHP land.

  // wipe out the existing rows in the table seeing as how we're replacing them
  $("table#resultsTable tbody").empty();
  // now we can iterate through results
  for (var i = 0; i < results.length; i++)
  {
    var flight = results[i];
    // build a new table row
    var newrow = $("<tr></tr>");
    // just so we can see the difference between AJAX-generated rows and
    // normal rows
    newrow.css("color","blue");
    // build the table cells
    newrow.append("<td>"+flight.origin+"</td>");
    newrow.append("<td>"+flight.destination+"</td>");
    newrow.append("<td>"+flight.departureDay+"</td>");
    newrow.append("<td>"+flight.departureTime+"</td>");
    newrow.append("<td>"+flight.duration+"</td>");
    // append the new row to the table
    $("table#resultstable tbody").append(newrow);
  }

}
