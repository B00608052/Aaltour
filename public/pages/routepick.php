<?php
session_start();
?>
<?php
include 'connect_db.php';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>routepick page</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="../styles/styles1.css" />
    <link rel="stylesheet" href="../styles/stylecommon.css" />
    <!-- 从 CDN 引入 Bootstrap Icons CSS 文件 -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css"
    />
  </head>
  <body>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
      crossorigin="anonymous"
    ></script>
    <!-- navbar -->
    <script id="replace_with_navbar" src="../scripts/nav.js"></script>
    <!-- navbar end -->
    <div
      class="p-5 text-center text-white page-bg"
      style="background-image: url('../images/routepick_bg.png'); z-index: 1000"
    >
      <!--上面是描述bg的，下面是内容container-->
      <div
        class="container showoutline m-auto text-black page-container-nopt-mw-12 routePickContaoiner"
      >
        <div class="row mb-3 showoutline">
          <h1 class="biggestfont text-white fw-bold text-nowrap">
            Pick your Aaltour
          </h1>
          <h4 class="text-white">Choose one route to start your Aaltour!</h4>
        </div>
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-4">
          <div class="col">
            <a href="./route1.php">
              <div class="card">
                <img
                  src="../images/frontpagepics/businessbuilding1.jpg"
                  class="card-img-top"
                  alt="..."
                />
                <div
                  class="rounded-5 bg-themegreen position-absolute m-2 end-0"
                >
                  <div class="d-flex">
                    <i
                      class="bi-star-fill px-2 rounded-5 ratio-1x1 icon-wrapper"
                      style="font-size: 1.5rem; color: white"
                    ></i>

                    <span
                      class="text-white px-2 fw-bold"
                      style="font-size: 1.5em"
                      >480</span
                    >
                  </div>
                </div>
                <div class="card-body py-3">
                  <div
                    class="d-flex row justify-content-between align-items-end"
                  >
                    <h5
                      class="m-0 col-9 card-title cardtittlefont text-start p-0 align-text-bottom text-nowrap"
                    >
                      R1. School Building
                    </h5>
                    <p class="m-0 col-3 p-0 text-end text-nowrap cardtextfont">
                      25 mins
                    </p>
                  </div>
                </div>
              </div>
            </a>
          </div>

          <div class="col">
            <div class="card position-relative">
              <img
                src="../images/frontpagepics/students_life.jpg"
                class="card-img-top"
                alt="..."
              />
              <div class="rounded-5 bg-themegreen position-absolute m-2 end-0">
                <div class="d-flex">
                  <i
                    class="bi-star-fill px-2 rounded-5 ratio-1x1 icon-wrapper"
                    style="font-size: 1.5rem; color: white"
                  ></i>

                  <span class="text-white px-2 fw-bold" style="font-size: 1.5em"
                    >320</span
                  >
                </div>
              </div>
              <div class="card-body py-3">
                <div class="d-flex row justify-content-between align-items-end">
                  <h5
                    class="m-0 col-9 card-title cardtittlefont text-start p-0 align-text-bottom text-nowrap"
                  >
                    R2. Life Instruction
                  </h5>
                  <p class="m-0 col-3 p-0 text-end text-nowrap cardtextfont">
                    25 mins
                  </p>
                </div>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card">
              <img
                src="../images/frontpagepics/Dipoli_07.jpg"
                class="card-img-top"
                alt="..."
              />
              <div class="rounded-5 bg-themegreen position-absolute m-2 end-0">
                <div class="d-flex">
                  <i
                    class="bi-star-fill px-2 rounded-5 ratio-1x1 icon-wrapper"
                    style="font-size: 1.5rem; color: white"
                  ></i>

                  <span class="text-white px-2 fw-bold" style="font-size: 1.5em"
                    >400</span
                  >
                </div>
              </div>
              <div class="card-body py-3">
                <div class="d-flex row justify-content-between align-items-end">
                  <h5
                    class="m-0 col-9 card-title cardtittlefont text-start p-0 align-text-bottom text-nowrap"
                  >
                    R3. Public Art
                  </h5>
                  <p class="m-0 col-3 p-0 text-end text-nowrap cardtextfont">
                    40 mins
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card">
              <img
                src="../images/frontpagepics/relax_nature.jpg"
                class="card-img-top"
                alt="..."
              />
              <div class="rounded-5 bg-themegreen position-absolute m-2 end-0">
                <div class="d-flex">
                  <i
                    class="bi-star-fill px-2 rounded-5 ratio-1x1 icon-wrapper"
                    style="font-size: 1.5rem; color: white"
                  ></i>

                  <span class="text-white px-2 fw-bold" style="font-size: 1.5em"
                    >320</span
                  >
                </div>
              </div>
              <div class="card-body py-3">
                <div class="d-flex row justify-content-between align-items-end">
                  <h5
                    class="m-0 col-9 card-title cardtittlefont text-start p-0 align-text-bottom text-nowrap"
                  >
                    R4. Spare Time
                  </h5>
                  <p class="m-0 col-3 p-0 text-end text-nowrap cardtextfont">
                    60 mins
                  </p>
                </div>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card">
              <img
                src="../images/frontpagepics/study_place.jpg"
                class="card-img-top"
                alt="..."
              />
              <div class="rounded-5 bg-themegreen position-absolute m-2 end-0">
                <div class="d-flex">
                  <i
                    class="bi-star-fill px-2 rounded-5 ratio-1x1 icon-wrapper"
                    style="font-size: 1.5rem; color: white"
                  ></i>

                  <span class="text-white px-2 fw-bold" style="font-size: 1.5em"
                    >320</span
                  >
                </div>
              </div>
              <div class="card-body py-3">
                <div class="d-flex row justify-content-between align-items-end">
                  <h5
                    class="m-0 col-9 card-title cardtittlefont text-start p-0 align-text-bottom text-nowrap"
                  >
                    R5. Study Places
                  </h5>
                  <p class="m-0 col-3 p-0 text-end text-nowrap cardtextfont">
                    30 mins
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div
      class="p-5 text-center text-white page-bg d-block d-sm-none"
      style="background-image: url('../images/routepick_bg1.jpg'); z-index: 0"
    ></div>
    <div
      class="p-5 text-center text-white page-bg d-block d-sm-none"
      style="background-image: url('../images/routepick_bg2.jpg'); z-index: 0"
    ></div>

    <!-- footer -->
    <script id="replace_with_footer" src="../scripts/footer.js"></script>
  </body>
</html>
