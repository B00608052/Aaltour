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
    <title>index page</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="styles/styles1.css" />
    <link rel="stylesheet" href="styles/stylecommon.css" />
  </head>
  <body>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
      crossorigin="anonymous"
    ></script>
    <!-- navbar -->
    <!-- <script id="replace_with_navbar" src="../scripts/nav.js"></script> -->
    <!-- page1 carousel -->
    <div
      id="carouselExampleIndicators"
      class="carousel slide"
      data-bs-ride="carousel"
    >
      <div class="carousel-indicators" style="z-index: 3">
        <button
          type="button"
          data-bs-target="#carouselExampleIndicators"
          data-bs-slide-to="0"
          class="active"
          aria-current="true"
          aria-label="Slide 1"
        ></button>
        <button
          type="button"
          data-bs-target="#carouselExampleIndicators"
          data-bs-slide-to="1"
          aria-label="Slide 2"
        ></button>
        <button
          type="button"
          data-bs-target="#carouselExampleIndicators"
          data-bs-slide-to="2"
          aria-label="Slide 3"
        ></button>
        <button
          type="button"
          data-bs-target="#carouselExampleIndicators"
          data-bs-slide-to="3"
          aria-label="Slide 4"
        ></button>
        <button
          type="button"
          data-bs-target="#carouselExampleIndicators"
          data-bs-slide-to="4"
          aria-label="Slide 5"
        ></button>
      </div>
      <!--幻灯片图片-->
      <div class="carousel-inner">
        <div class="carousel-item drk active" data-bs-interval="3000">
          <img
            src="../images/frontpagepics/businessbuilding1.jpg"
            class="d-block w-100"
            alt="..."
          />
          <div class="carousel-caption container page-container showoutline">
            <div class="row showoutline">
              <div class="col-5 text-start showoutline">
                <h2>Aaltour - Route1.</h2>
                <h1 class="biggestfont fw-bold">School Buildings</h1>
              </div>
              <div
                class="offset-1 col-4 col-xl-6 showoutline text-start ps-md-1 d-none d-md-block fw-semibold"
              >
                <p class="vertical-center text-justify text-indent-2">
                  Aalto University's various academic buildings showcase
                  distinct styles, mirroring each faculty's unique ethos. Each
                  building symbolizes its respective faculty's philosophy and
                  character.
                </p>
              </div>
            </div>
          </div>
        </div>

        <div class="carousel-item drk" data-bs-interval="3000">
          <img
            src="../images/frontpagepics/students_life.jpg"
            class="d-block w-100"
            alt="..."
          />
          <div class="carousel-caption container page-container showoutline">
            <div class="row showoutline">
              <div class="col-5 text-start showoutline">
                <h2>Aaltour - Route2.</h2>
                <h1 class="biggestfont fw-bold">Life Instruction</h1>
              </div>
              <div
                class="offset-1 col-4 col-xl-6 showoutline text-start ps-md-1 d-none d-md-block fw-semibold"
              >
                <p class="vertical-center text-justify text-indent-2">
                  Aalto University guides students with local shopping
                  recommendations for essentials and study materials, suggests
                  sports facilities for physical activities, and directs
                  students to various organizations for social engagement and
                  community involvement.
                </p>
              </div>
            </div>
          </div>
        </div>

        <div class="carousel-item drk" data-bs-interval="3000">
          <img
            src="../images/frontpagepics/Dipoli_07.jpg"
            class="d-block w-100"
            alt="..."
          />
          <div class="carousel-caption container page-container showoutline">
            <div class="row showoutline">
              <div class="col-5 text-start showoutline">
                <h2>Aaltour - Route3.</h2>
                <h1 class="biggestfont fw-bold">Public Art</h1>
              </div>
              <div
                class="offset-1 col-4 col-xl-6 showoutline text-start ps-md-1 d-none d-md-block fw-semibold"
              >
                <p class="vertical-center text-justify text-indent-2">
                  Aalto's campus showcases captivating public art installations,
                  fostering a vibrant cultural atmosphere that stimulates
                  creativity and dialogue among students and visitors.
                </p>
              </div>
            </div>
          </div>
        </div>

        <div class="carousel-item drk" data-bs-interval="3000">
          <img
            src="../images/frontpagepics/relax_nature.jpg"
            class="d-block w-100"
            alt="..."
          />
          <div class="carousel-caption container page-container showoutline">
            <div class="row showoutline">
              <div class="col-5 text-start showoutline">
                <h2>Aaltour - Route4.</h2>
                <h1 class="biggestfont fw-bold">Spare Time</h1>
              </div>
              <div
                class="offset-1 col-4 col-xl-6 showoutline text-start ps-md-1 d-none d-md-block fw-semibold"
              >
                <p class="vertical-center text-justify text-indent-2">
                  Aalto encourages students to explore the surrounding natural
                  landscapes, fostering a connection with the wild.
                  Additionally, within the campus, students can visit
                  student-run museums and tour remarkable, cutting-edge
                  laboratories, offering insight and inspiration beyond the
                  classroom.
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel-item drk" data-bs-interval="3000">
          <img
            src="../images/frontpagepics/study_place.jpg"
            class="d-block w-100"
            alt="..."
          />
          <div class="carousel-caption container page-container showoutline">
            <div class="row showoutline">
              <div class="col-5 text-start showoutline">
                <h2>Aaltour - Route5.</h2>
                <h1 class="biggestfont fw-bold">Study Spaces</h1>
              </div>
              <div
                class="offset-1 col-4 col-xl-6 showoutline text-start ps-md-1 d-none d-md-block fw-semibold"
              >
                <p class="vertical-center text-justify text-indent-2">
                  Aalto provides versatile study environments, from quiet
                  libraries to innovative group spaces, equipped with
                  cutting-edge technology to support diverse learning styles and
                  academic pursuits.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <button
        class="carousel-control-prev"
        style="z-index: 3"
        type="button"
        data-bs-target="#carouselExampleIndicators"
        data-bs-slide="prev"
      >
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button
        class="carousel-control-next"
        style="z-index: 3"
        type="button"
        data-bs-target="#carouselExampleIndicators"
        data-bs-slide="next"
      >
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>

    <!--page2-->

    <div
      class="vh-100 p-5 text-center text-white page-bg"
      style="
        background-image: url('../images/frontpagepics/page2_bg.png');
        z-index: 10;
      "
    >
      <!--上面是描述bg的，下面是内容container-->
      <div
        class="container showoutline m-auto text-black page-container-nopt vertical-center"
      >
        <div class="showoutline row">
          <div class="col-12 col-sm-6">
            <h1 class="biggestfont showoutline text-start">Aaltour Routes</h1>
          </div>
          <div class="col">
            <p class="vertical-center text-justify text-indent-2">
              Standing proudly at the heart of Aalto University, our iconic
              statue symbolizes knowledge, perseverance, and innovation. Crafted
              from timeless bronze this monument celebrates our institution's
              rich history and commitment to shaping the future.
            </p>
          </div>
        </div>
        <div class="row">
          <div class="col-12 col-md-8">
            <img
              class="img-fluid"
              src="../images/routes description/route4/summary.png"
              alt=""
            />
          </div>
          <div class="col-12 col-md-4 text-start m-auto showoutline">
            <div class="btn-group-vertical d-none d-md-block">
              <a href="#" class="btn routes-pick-btn-sm"
                >Route1 <br />School Buildings</a
              >
              <a href="#" class="btn routes-pick-btn-sm"
                >Route2 <br />Life Instruction</a
              >
              <a href="#" class="btn routes-pick-btn-sm"
                >Route3 <br />Public Art</a
              >
              <a href="#" class="btn routes-pick-btn-sm"
                >Route4 <br />Spare Time</a
              >
              <a href="#" class="btn routes-pick-btn-sm"
                >Route5 <br />Study Spaces</a
              >
            </div>
            <!--dropdown menu-->
            <div class="btn-group-vertical d-block d-md-none">
              <button
                type="button"
                class="btn btn-secondary dropdown-toggle"
                data-bs-toggle="dropdown"
                aria-expanded="false"
              >
                Route Select
              </button>
              <ul class="dropdown-menu">
                <li>
                  <a class="dropdown-item" href="#"
                    >Route1 <br />School Buildings</a
                  >
                </li>
                <li>
                  <a class="dropdown-item" href="#"
                    >Route2 <br />Life Instruction</a
                  >
                </li>
                <li>
                  <a class="dropdown-item" href="#">Route3 <br />Public Art</a>
                </li>
                <li>
                  <a class="dropdown-item" href="#">Route4 <br />Spare Time</a>
                </li>
                <li>
                  <a class="dropdown-item" href="#"
                    >Route5 <br />Study Spaces</a
                  >
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--page3-->
    <div
      class="vh-100 p-5 text-center text-white page-bg"
      style="background-image: url(../images/frontpagepics/page3_bg.jpg)"
    >
      <div class="showoutline container page-container">
        <h1 class="m-3 biggestfont fw-bold">Aaltour <br />Leaderboard</h1>
        <!-- 第一行 -->
        <div
          class="showoutline text-dark mx-5 my-3 bg-white-opacity-90 rounded-5 d-flex flex-row justify-content-between align-items-center"
        >
          <img
            class="rounded-circle m-1 showoutline"
            src="../images/profile.png"
            style="height: 50px"
          />
          <h5 class="showoutline my-1">name1</h5>
          <h5 class="my-1">123 pt</h5>
          <h5 class="me-4 my-1 leaderboard-rank-font">NO.1</h5>
        </div>
        <!-- 第二行 -->
        <div
          class="showoutline text-dark mx-5 my-3 bg-white-opacity-90 rounded-5 d-flex flex-row justify-content-between align-items-center"
        >
          <img
            class="rounded-circle m-1 showoutline"
            src="../images/profile.png"
            style="height: 50px"
          />
          <h5 class="showoutline my-1">name1</h5>
          <h5 class="my-1">123 pt</h5>
          <h5 class="me-4 my-1 leaderboard-rank-font">NO.1</h5>
        </div>
        <!-- 第三行 -->
        <div
          class="showoutline text-dark mx-5 my-3 bg-white-opacity-90 rounded-5 d-flex flex-row justify-content-between align-items-center"
        >
          <img
            class="rounded-circle m-1 showoutline"
            src="../images/profile.png"
            style="height: 50px"
          />
          <h5 class="showoutline my-1">name1</h5>
          <h5 class="my-1">123 pt</h5>
          <h5 class="me-4 my-1 leaderboard-rank-font">NO.1</h5>
        </div>
        <div class="mt-5">
          <h2 class="fw-bold">Load More</h2>
        </div>
      </div>
    </div>
    <!--page 4-->
    <div
      class="vh-100 p-5 text-center text-white page-bg"
      style="background-image: url('../images/frontpagepics/page4_bg.jpg')"
    >
      <div class="container page-container">
        <h1 class="biggestfont fw-bold mb-5">Get Start <br />Your Aaltour!</h1>
        <a href="./routepick.php">
          <img
            src="../images/frontpagepics/page4_button.png"
            class="img-fluid mt-5"
          />
        </a>
      </div>
    </div>
    <!-- footer -->
    <script id="replace_with_footer" src="../scripts/footer.js"></script>
  </body>
</html>
