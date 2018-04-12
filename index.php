<!DOCTYPE html>
<html>
  <head>
    <title>Welcome to Fly Guys Low-Cost Budget Airline.</title>

  </head>
  <body>

    <form action="listFlights.php" method="get">
            <label for="departure" class ="title">Enter departure from:<br></label>
            <input type="text" name="searchDepartureFlight"><br>

            <label for="destination" class ="title">Enter destination to:<br></label>
            <div id="destinationSearchResults">
              <input type="text"  name="searchDestinationFlight"><br>
              <div class = "r_des">

            </div>
            </div>
          </div>
            <div>
              <label for="departure_date" class ="title">Choose Departure Date:<br></label>
              <input type="text" class="datepicker" name="searchDate"></p>
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
            <input id="ajaxSearchButton" type ="submit" value="Search Flight">
          </div>
     </form>

     <a href="Admin">Admin Page Login</a>
    </body>
</html>
