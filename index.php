<!doctype html>
<?php session_start();?>
<html>
  <head>
    <title>Fly Guys</title>
    <script type="text/javascript" src="controller/clientnode.js"></script>
    <script
  src="https://code.jquery.com/jquery-3.3.1.js"
  integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
  crossorigin="anonymous"></script>
    <!--<script type="text/javascript" src="clientcode.js"></script>-->
  </head>
  <body>
    <center>
    <header>Welcome to Fly Guys </header>
    <br/>
    Search for flights by origin:
    <input type="text" placeholder="Search" name="searchorigin"/>
    <div id="ajaxautocomplete">
      <input id="ajaxsearchorigin" type="button" value="Search"/>
      <div class="results">
        <div class="result">data</div>
      </div>
    </div>
    <?php $originsearch = $_SESSION['originsearch'];
    if (empty($originsearch)) $originsearch = '';
    if (count($originsearch) != 0): ?>
      <form action="controller/listOrigin.php" method="post">
        Past searches: <select name="searchname">
          <?php foreach ($originsearch as $searchitem): ?>
            <option value="<?=$searchitem?>"><?=$searchitem?></option></li>
          <?php endforeach ?>
        </select>
        <input type="submit" value="Search"/>
      </form>
    <?php endif ?>

  <table id="resultstable">
      <thead>
        <tr>
          <th>Origin</th>
          <th>Destination</th>
          <th>Date</th>
          <th>Day</th>
          <th>Time</th>
          <th>Duration</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($flightlistorigin as $flight): ?>
        <tr>
          <td><?=$flight->Origin?></td>
          <td><?=$flight->Destination?></td>
          <td><?=$flight->departureD?></td>
          <td><?=$flight->departureDay?></td>
          <td><?=$flight->departureT?></td>
          <td><?=$flight->duration?></td>
        </tr>
        <?php endforeach ?>
      </tbody>
    </table>
  <a href="addFlight.php"> Add new Flight</a>
</center>
  </body>
</html>
