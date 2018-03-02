$(document).ready(initialisePage);

function initialisePage(){
  $("div#ajaxsearchorigin input").keyup(handleAutoComplete);
  $("input#ajaxsearchorigin").click(ajaxSearchOrigin);
}

function handleNiceAutoComplete(){
  var search = $("div#ajaxautocomplete input").val().trim();
  if(search!=""){
    $.get("getFlightsByOrigin_service.php?origin="+search,AutoComplete);
  }
  else{
    "div#ajaxautocomplete div.results".hide();
  }
}

function AutoComplete(results){
  console.log(results);
  $("div#ajaxautocomplete div.results").empty();
  for(var i=0;i<results.length;i++){
    var result = $('<div class = "result">'+results[i]+'<div>');
    result.click(function(){
      $("div#ajaxautocomplete div.results").hide();
      $("input[name=searchname]").val($(this).text());
      $("form").get(0).submit();
    });
    $("div#ajaxautocomplete div.results").append(result);
  }
  if(results.length==0){
    $("div#ajaxautocomplete div.results").hide();
  }
  else{
    $("div#ajaxautocomplete div.results").show();
  }
}



/////////////// AJAX SEARCH //////////////////
function ajaxSearchOrigin() {
  var search = $("input[name=ajaxsearchorigin]").val().trim();
  $.get("getFlightsByOrigin_service.php?origin="+search,ajaxSearchCallback);
}

function ajaxSearchCallback(results){
  $("table#resultstable tbody").empty();

  for(var i = 0; i<results.length;i++){
    var flight = results[i];
    var newrow = $("<tr></tr>");

    newrow.append("<td>"+flight.origin+"</td>");
    newrow.append("<td>"+flight.destination+"</td>");
    newrow.append("<td>"+flight.departureD+"</td>");
    newrow.append("<td>"+flight.departureDay+"</td>");
    newrow.append("<td>"+flight.departureT+"</td>");
    newrow.append("<td>"+flight.duration+"</td>");

    $("table#resultstable tbody").append(newrow);
  }
}
