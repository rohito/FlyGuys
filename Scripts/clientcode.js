$(document).ready(initialisePage);

function initialisePage()
{
  $("div#departureSearchResults div.results").hide();
  $("div#destinationSearchResults div.r_des").hide();
  $("div#departureSearchResults input").keyup(handleAutoCompleteDeparture);
  $("div#destinationSearchResults input").keyup(handleAutoCompleteDestination);
  //$("input#ajaxSearchButton").click(ajaxSearch);
}

////////////////////////// AUTOCOMPLETE FOR DEPARTURE SEARCH ///////////////////////////////////


function handleAutoCompleteDeparture()
{
  var search = $("input[name=searchDepartureFlight]").val().trim();
  if (search != "")
  {
    $.get("Utils/getFlightsByOrigin.php?searchFlight="+search,autoCompleteCallbackDeparture);
  }
  else // if search IS empty
  {
    $("div#departureSearchResults div.results").hide();
  }
}

function autoCompleteCallbackDeparture(results)
{
    console.log(results);
    // build the results div
    $("div#departureSearchResults div.results").empty();

    for (var i = 0; i < results.length; i++)
    {

      var result = $('<div class="result">'+results[i].Origin+'</div>');

      result.click(function(){
        $("div#departureSearchResults div.results").hide();
        $("input[name=searchDepartureFlight]").val($(this).text());
        document.getElementByName("searchDepartureFlight").value=$(this).text();

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

////////////////////////// AUTOCOMPLETE FOR Destination SEARCH ///////////////////////////////////


function handleAutoCompleteDestination()
{
  var search = $("input[name=searchDestinationFlight]").val().trim();
  if (search != "")
  {
    $.get("Utils/getFlightsByDestination.php?searchFlight="+search,autoCompleteCallbackDestination);
  }
  else // if search IS empty
  {
    $("div#destinationSearchResults div.r_des").hide();
  }
}

function autoCompleteCallbackDestination(results)
{
    console.log(results);
    // build the results div
    $("div#destinationSearchResults div.r_des").empty();

    for (var i = 0; i < results.length; i++)
    {

      var result = $('<div class="r_des">'+results[i].Destination+'</div>');
      result.click(function(){
        $("div#destinationSearchResults div.r_des").hide();
        $("input[name=searchDestinationFlight]").val($(this).text());
      document.getElementByName("searchDestinationFlight").value=$(this).text();

      });
      $("div#destinationSearchResults div.r_des").append(result);
    }
    if (results.length == 0)
    {
      $("div#destinationSearchResults div.r_des").hide();
    }
    else {
      $("div#destinationSearchResults div.r_des").show();
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
    newrow.append("<td>"+flight.Origin+"</td>");
    newrow.append("<td>"+flight.Destination+"</td>");
    newrow.append("<td>"+flight.Departure_day+"</td>");
    newrow.append("<td>"+flight.Departure_time+"</td>");
    newrow.append("<td>"+flight.Duration+"</td>");
    // append the new row to the table
    $("table#resultstable tbody").append(newrow);
  }

}
