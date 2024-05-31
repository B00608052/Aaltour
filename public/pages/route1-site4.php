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
              <h2 class="col-12 fs-1 fw-bold routeSpotTitle">
                School of Engineering
              </h2>
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
                            lat: 60.187088,
                            lng: 24.827020,
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
                  <img
                    src="../images/route1/1.School Building/4. School of Engineering/1.jpg"
                    alt=""
                  />
                </div>
              </div>
              <div class="col-5">
                <div class="col-12 smallRouteSitePic smallRouteSitePic1">
                  <img
                    src="../images/route1/1.School Building/4. School of Engineering/2.jpg"
                    alt=""
                  />
                </div>
                <div class="col-12 smallRouteSitePic smallRouteSitePic2">
                  <img
                    src="../images/route1/1.School Building/4. School of Engineering/3.jpg"
                    alt=""
                  />
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-12 routeSpotIntro">
                Welcome to the main building of the School of Engineering, which
                primarily houses Department of Built Environment as well as
                parts of Department of Mechanical Engineering and Learning
                Services. This building is used for both teaching and research.
                Addressing big societal issues, working closely with the
                industry and going abroad to gain international experience are
                all integral parts of the education here.
              </div>
            </div>
            <div class="row">
              <div class="col-12">
                <a href="./route1-stop5.php">
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
