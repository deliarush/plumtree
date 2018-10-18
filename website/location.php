<!DOCTYPE html>

<html>

  <?php include("includes/head.php"); ?>

<body>
  <?php include("includes/header.php"); ?>
  <?php include("includes/navigation.php"); ?>

<!-- insert code here -->
  <header>
    <h1 id="Location">Location</h1>
  </header>

  <!--put in map of where plum tree is--->
  <div id="map" ></div>

  <script>
  function myMap() {
    var mapCanvas = document.getElementById("map");
    var mapOptions = {
      center: new google.maps.LatLng(42.4414, -76.4865), zoom: 17
    };
    var myCenter = new google.maps.LatLng(42.4414, -76.4865);
    var map = new google.maps.Map(mapCanvas, mapOptions);
    var marker = new google.maps.Marker ({position: myCenter});
      marker.setMap(map);
  }
  </script>

  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDr7peEJKENB17c2Ak1wH4EjimUWC1evSM&callback=myMap"></script>

  <h2 id="locatedAt"> We are located at:</h2>
<p id="exactlocation">
113-117 Dryden Rd
Ithaca, NY 14850
</p>
<p class="locationDescription">
Coming from E. State St/Rt 79 (heading west), turn right onto Eddy St. Continue on Eddy St. for 0.3 miles. Take a right onto Dryden Rd. Plum Tree is on the right side of the street.
</p>
<p class="locationDescription">
Coming from Rt 13 (going south), turn left onto W. Buffalo St. Continue on W. Buffalo St. for 1.2 miles. Take a left at Eddy St. and finally a right turn onto Dryden Rd. Plum Tree is located on the right side of the street.
</p>
  <?php include("includes/footer.php"); ?>

</body>

</html>
