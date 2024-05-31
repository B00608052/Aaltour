<?php
session_start();
?>
<?php
include 'connect_db.php';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Route Page</title>
    <link rel="stylesheet" href="../styles/style2.css" />
    <link rel="stylesheet" href="../styles/bootstrap.min.css" />
  </head>
  <body>
    <!-- navbar -->
    <script id="replace_with_navbar" src="../scripts/nav2.js"></script>
    <!-- navbar end -->
    <section class="route-page">
      <div
        class="container-fluid justify-content-md-center route-page-container"
      >
        <div class="row">
          <div class="col-xs-12 col-sm-6">
            <div class="row">
              <h2 class="col-12 fs-1 fw-bold routeSpotTitle">Dipoli Cone</h2>
            </div>
            <div class="row">
              <div class="col-6 scoreBtnFrame">
                <img class="scoreBtn" src="../images/scoreButton.png" alt="" />
              </div>
              <div class="col-6">
                <img
                  class="scoreBtn addToMyFavorite"
                  src="../images/addToMyFavorite.png"
                  alt=""
                />
              </div>
            </div>
            <div class="row">
              <div class="col-12">
                <!-- <iframe class="route-map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1663.4352167161367!2d24.83107492845274!3d60.18530073856604!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x468df5ed66f5f355%3A0xf5523f94165d4a96!2sDipoli%2C%20Otakaari%2024%2C%2002150%20Espoo!5e1!3m2!1szh-TW!2sfi!4v1699745037525!5m2!1szh-TW!2sfi" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> -->
                <!-- 地圖位置 -->
                <!-- 地圖位置 -->
                <div id="map"></div>

                <!-- 顯示導航步驟的元素 -->
                <div id="directionsPanel"></div>

                <script
                  src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAZKBGz_bnRNE3N8LgT1-mvTEqkKPzyF8I&callback=initMap"
                  async
                  defer
                ></script>
                <script>
                  function initMap() {
                    var map = new google.maps.Map(
                      document.getElementById("map"),
                      {
                        zoom: 14,
                      }
                    );

                    // Try HTML5 geolocation
                    if (navigator.geolocation) {
                      navigator.geolocation.getCurrentPosition(
                        function (position) {
                          var userLocation = {
                            lat: position.coords.latitude,
                            lng: position.coords.longitude,
                          };

                          // Center the map on the user's location
                          map.setCenter(userLocation);

                          // Add a marker for the user's location
                          var userMarker = new google.maps.Marker({
                            position: userLocation,
                            map: map,
                            title: "Your Location",
                          });

                          // Specify the destination coordinates
                          var destination = {
                            lat: 60.1848932,
                            lng: 24.8321123,
                          };

                          // Add a marker for the destination
                          var destinationMarker = new google.maps.Marker({
                            position: destination,
                            map: map,
                            title: "Destination",
                          });

                          // Create a directions service to get route information
                          var directionsService =
                            new google.maps.DirectionsService();
                          var directionsRenderer =
                            new google.maps.DirectionsRenderer({
                              map: map,
                              panel: document.getElementById("directionsPanel"), // Element to display directions
                              suppressMarkers: true, // Prevent default markers from being displayed
                            });

                          // Create a directions request with walking travel mode
                          var request = {
                            origin: userLocation,
                            destination: destination,
                            travelMode: "WALKING",
                          };

                          // Get directions and display on the map
                          directionsService.route(
                            request,
                            function (result, status) {
                              if (status == "OK") {
                                directionsRenderer.setDirections(result);

                                // Update user's location as they move
                                navigator.geolocation.watchPosition(function (
                                  position
                                ) {
                                  var updatedUserLocation = {
                                    lat: position.coords.latitude,
                                    lng: position.coords.longitude,
                                  };

                                  // Update the user marker position
                                  userMarker.setPosition(updatedUserLocation);

                                  // Recenter the map on the updated user location
                                  map.setCenter(updatedUserLocation);
                                });
                              } else {
                                console.error(
                                  "Directions request failed:",
                                  status
                                );
                              }
                            }
                          );
                        },
                        function () {
                          handleLocationError(true, map.getCenter());
                        }
                      );
                    } else {
                      // Browser doesn't support geolocation
                      handleLocationError(false, map.getCenter());
                    }
                  }

                  function handleLocationError(browserHasGeolocation, pos) {
                    var infoWindow = new google.maps.InfoWindow({
                      content: browserHasGeolocation
                        ? "Error: The Geolocation service failed."
                        : "Error: Your browser doesn't support geolocation.",
                    });

                    var options = {
                      zoom: 14,
                      center: pos,
                    };

                    var map = new google.maps.Map(
                      document.getElementById("map"),
                      options
                    );

                    var marker = new google.maps.Marker({
                      position: pos,
                      map: map,
                      title: "Default Location",
                    });

                    map.addListener("click", function () {
                      infoWindow.open(map, marker);
                    });
                  }
                </script>
              </div>
            </div>
          </div>
          <div class="col-xs-12 col-sm-6">
            <div class="row">
              <div class="col-7">
                <div class="col-12 firstRouteSitePic">
                  <img src="../images/route3/3.Sculpture New/1/3.jpeg" alt="" />
                </div>
              </div>
              <div class="col-5">
                <div class="col-12 smallRouteSitePic smallRouteSitePic1">
                  <img src="../images/route3/3.Sculpture New/1/2.jpeg" alt="" />
                </div>
                <div class="col-12 smallRouteSitePic smallRouteSitePic2">
                  <img src="../images/route3/3.Sculpture New/1/4.jpeg" alt="" />
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-12 routeSpotIntro">
                In front of dipoli's building, there is a beautiful cone made of
                metal, with many petals.In 1968, the open-close Kapy artwork
                designed by Reijo Perko and Heikki Koiviko was erected in front
                of Dipoli in Otaniemi.
              </div>
            </div>
            <div class="row">
              <div class="col-12">
                <a href="./route3-stop2.php">
                  <button class="arrivedBtn">I Arrived!</button>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <script src="./js/bootstrap.min.js"></script>
  </body>
</html>
