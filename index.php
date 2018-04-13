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
    <!--Fly Guys Logo  for background image--
  -->
  <div id ="logo">
    <img src="Images/logo.jpg" alt="logo" >
  </div>  
  <header>
      <div class="nav">
        <ul>
          <li class="home"><a class="active"a href="#">Home</a></li>
          <li class="about"><a href="#">About</a></li>
          <li class="news"><a href="#">Newsletter</a></li>
          <li class="contact"><a href="#">Contact</a></li>
        </ul>
      </div>
    </header>

    <div class ="form-to-be-filled">
    <form action="listFlights.php" method="get">
            <div class ="form1">Enter departure from:</br>
              <input type="text" name="searchDepartureFlight" value="Stanstead">
            </div>
            <div class ="form2">Enter destination to:</br>
              <div id="destinationSearchResults">
                    <input type="text"  name="searchDestinationFlight">
                  <div class = "r_des">
                    <div class="r_des_sub">data2</div>
                  </div>
              </div>
            </div>

            <div class ="form3">
              <label for="departure_date" class ="title">Choose Departure Date:<br></label>
              <input type="text" class="datepicker" name="searchDate"></p>
            </div>
            <div class = "form4">Choose day:<br>
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
            </div>
            <div id = "ajaxSearchButton">
                <input type ="submit" value="Search Flight">
            </div>
          </div>
     </form>
   </div>


    </body>
</html>
