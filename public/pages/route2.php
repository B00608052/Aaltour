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
    <title>Route2</title>
    <link rel="stylesheet" href="../styles/bootstrap.min.css" />
    <link rel="stylesheet" href="../styles/style2.css" />
  </head>
  <body>
    <!-- navbar -->
    <script id="replace_with_navbar" src="../scripts/nav2.js"></script>
    <!-- navbar end -->
    <section class="route-page">
      <div
        class="container-fluid justify-content-md-center route-page-container"
      >
        <div class="row" style="padding-top: 2rem">
          <div class="col-sm-7 col-xs-12">
            <img
              class="routeMap"
              src="../images/route2/route2-mappic.png"
              alt=""
            />
          </div>
          <div class="col-sm-5 col-xs-12">
            <div class="row">
              <div class="col-6 siteBtn">
                <img
                  src="../images/route2/2.Life instruction/1.shopping center/1.jpg"
                  alt=""
                  onclick="openPopup('../images/route2/2.Life instruction/1.shopping center/1.jpg')"
                />
                <span>Spot1.Shopping Center</span>
              </div>

              <div class="col-6 siteBtn">
                <img
                  src="../images/route2/2.Life instruction/2.Undergraduate center/2.jpg"
                  alt=""
                  onclick="openPopup('../images/route2/2.Life instruction/2.Undergraduate center/2.jpg')"
                />
                <span>Spot2.Undergraduate Center</span>
              </div>
            </div>
            <div class="row">
              <div class="col-6 siteBtn">
                <img
                  src="../images/route2/2.Life instruction/3.Learning center/1.jpg"
                  alt=""
                  onclick="openPopup('../images/route2/2.Life instruction/3.Learning center/1.jpg')"
                />
                <span>Spot3.Learning Center</span>
              </div>
              <div class="col-6 siteBtn">
                <img
                  src="../images/route2/2.Life instruction/4.play fround/1.jpg"
                  alt=""
                  onclick="openPopup('../images/route2/2.Life instruction/4.play fround/1.jpg')"
                />
                <span>Spot4.Sports Field</span>
              </div>
            </div>

            <div id="popup" class="popup">
              <span class="close" onclick="closePopup()">&times;</span>
              <img
                src=""
                alt="Large Image"
                class="large-image"
                id="popup-image"
              />
            </div>
            <div class="row">
              <a href="route2-stop1.php">
                <button class="startTourBtn">Let’s Go Aaltour!</button>
              </a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <script src="../scripts/RoutePage.js"></script>
    <script src="../scripts/bootstrap.min.js"></script>
  </body>
</html>
