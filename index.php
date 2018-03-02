<!DOCTYPE html>
<html>
  <head>
    <title>Welcome to Fly Guys Low-Cost Budget Airline.</title>
    <!--JQuery from google api library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="Stylesheets/design.css">
    <script type="text/javascript" src="./Scripts/clientcode.js"></script>


          <!--JQuery to insert Date picker -->
          <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
          <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
          <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
          <script>
          $( function() {
            $( ".datepicker" ).datepicker();
          } );
          </script>
  </head>
  <body>
    <div id ="logo">
      <img src="Images/logo_1.jpg" alt="logo" >
    </div>
    <form action="Utils/listFlights.php" method="get">
            <div>
              <label for="departure" class ="title">Enter departure from:<br></label>
            <div id="departureSearchResults">
                <input type="text" placeholder="Departure From" name="searchFlight"><br>
                <div class = "results">
                  <div class="result">data</div>
              </div>
            </div>
          </div>
            <div>
              <label for="destination" class ="title">Enter destination to:<br></label>
              <input type="text" placeholder="Destination To" name="destination"><br>
            </div>
            <div>
              <label for="departure_date" class ="title">Choose Departure Date:<br></label>
              <input type="text" class="datepicker"></p>
            </div>
            <div>
              <label for="return_date" class ="title">Choose Return Date:<br></label>
              <input type="text" class="datepicker"></p>
            </div>
            <div>
              <label for="choose_date" class="title">Choose day:<br></label>
              <select name="day">
                    <option selected="true" disabled="disabled">---Please Select---</option>
                    <option value="Monday">Monday</option>
                    <option value="Tuesday">Tuesday</option>
                    <option value="Wednesday">Wednesday</option>
                    <option value="Thursday">Thursday</option>
                    <option value="Friday">Friday</option>
                    <option value="Saturday">Saturday</option>
                    <option value="Sunday">Sunday</option>
            </select>
            <input id="ajaxSearchButton" type="button" value="Search Flight">
          </div>
     </form>
     <table id="resultsTable">
       <thead>
       <tr>
         <th>Departure from:</th>
         <th>Destination to:</th>
         <th>Departure Date:<th>
         <th> Return Date:</th>
       </tr>
     </thead>
     <tbody>
       <!--JQuery from google api library ?php foreach ($flightList as $flight): ?> -->
      <tr>

      </tr>
    </tbody>
     </table>
     <a href="index.php">New Search</a>
   <!-- php endforeach ?> -->
    </body>
</html>
