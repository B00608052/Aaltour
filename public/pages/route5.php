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
    <title>route5</title>
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
              src="../images/route5/route5-mappic.png"
              alt=""
            />
          </div>
          <div class="col-sm-5 col-xs-12">
            <div class="row">
              <div class="col-6 siteBtn">
                <img
                  src="../images/route5/5.special Study space/1.Dipoli Study Room/5.jpg"
                  alt=""
                  onclick="openPopup('../images/route5/5.special Study space/1.Dipoli Study Room/5.jpg')"
                />
                <span>Spot1.Dipoli Learning Space</span>
              </div>

              <div class="col-6 siteBtn">
                <img
                  src="../images/route5/5.special Study space/2.Circular study room/1.jpg"
                  alt=""
                  onclick="openPopup('../images/route5/5.special Study space/2.Circular study room/1.jpg')"
                />
                <span>Spot2.Library Circle Space</span>
              </div>
            </div>
            <div class="row">
              <div class="col-6 siteBtn">
                <img
                  src="../images/route5/5.special Study space/3.Recliner music space/3.jpg"
                  alt=""
                  onclick="openPopup('../images/route5/5.special Study space/3.Recliner music space/3.jpg')"
                />
                <span>Spot3.Lounge Musicial Space</span>
              </div>
              <div class="col-6 siteBtn">
                <img
                  src="../images/route5/5.special Study space/4.Glass communication room/1.jpg"
                  alt=""
                  onclick="openPopup('../images/route5/5.special Study space/4.Glass communication room/1.jpg')"
                />
                <span>Spot4.Glass Communication Space</span>
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
              <a href="route5-stop1.php">
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
