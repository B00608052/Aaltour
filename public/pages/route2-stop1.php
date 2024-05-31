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
    <title>Route2 Stop1</title>
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
        <div class="row" style="padding-top: 2rem">
          <div class="col-sm-4 col-6 siteAccessPic">
            <a href="./route2-site1.php">
              <img src="../images/route2/round-step-pics/1+.png" alt="" />
            </a>
          </div>
          <div class="col-sm-4 col-6 siteAccessPic">
            <img src="../images/route2/round-step-pics/2-.png" alt="" />
          </div>
          <div class="col-sm-4 col-6 siteAccessPic">
            <img src="../images/route2/round-step-pics/3-.png" alt="" />
          </div>

          <div class="col-sm-4 col-6 siteAccessPic">
            <img src="../images/route2/round-step-pics/4-.png" alt="" />
          </div>
        </div>
      </div>
    </section>

    <script src="../scripts/bootstrap.js"></script>
  </body>
</html>
