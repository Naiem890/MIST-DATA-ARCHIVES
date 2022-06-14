<?php 

session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

  include_once 'db_conn.php';
 

$code=$_GET["id"]; 
$result = mysqli_query($conn,"SELECT * FROM addachievement where id=$code");

$row = mysqli_fetch_array($result);



 ?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, maximum-scale=1"
    />

    <!-- Bootstrap CSS -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css"
    />

    <!-- favicon link css  -->
    <link rel="shortcut icon" type="image/png" href="img/MIST.png" />

    <title>Achievement_details_Admin</title>
  </head>
  <body>
    <!-- navbar starts -->
    <nav
      class="navbar navbar-expand-xxl navbar-light border-bottom border-5 border-success"
    >
      <div class="container-fluid">
        <button
          class="navbar-toggler mb-3"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <a href="home_admin.php">
          <img class="ms-md-5 ms-1" src="../img/navlogo.png" alt="logo"
        /></a>

        <div
          class="collapse navbar-collapse mx-5 fw-bold"
          id="navbarSupportedContent"
        >
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item mx-3">
              <a class="nav-link" href="home_admin.php">Home</a>
            </li>
            <li class="nav-item mx-3">
              <a class="nav-link" href="projects_admin.php">Projects</a>
            </li>
            <li class="nav-item mx-3">
              <a
                class="nav-link active text-success fw-bolder"
                aria-current="page"
                href="achievements_admin.php"
                >Achievements</a
              >
            </li>
            <li class="nav-item mx-3">
              <a class="nav-link" href="publication_admin.php">Publications</a>
            </li>
            <li class="nav-item mx-3">
              <a class="nav-link" href="thesis_admin.php">Thesis</a>
            </li>
            <li class="nav-item mx-3">
              <a class="nav-link" href="activity_admin.php">Activity</a>
            </li>
          </ul>
          <a href="adminprofile_admin.php">
            <img class="ms-3" src="../img/profile.png" alt="profile"
          /></a>
          <a href="adminprofile_admin.php" class="text-decoration-none text-black">
            <h6 class="mt-2 mx-3">Tanjim hossain</h6></a
          >

          <a href="../logout.php"
            ><button type="button" class="btn btn-danger mx-3">
              Log Out
            </button></a
          >
        </div>
      </div>
    </nav>
    <!-- navbar ends -->

    <!-- middle part starts -->
    <div class="bg-light">
      <!-- firstcontainer starts -->
      <div class="container pt-5">
        <div class="card-body bg-white">
          <div class="p-3 mt-2 mb-2 border border-3 border-info">
            <h2 class="mb-5 text-center fw-bold">ACHIEVEMENT DETAILS</h2>
            <img
              src="../img/acvm1.jpg"
              class="rounded my-3 mx-auto d-block"
              style="width: 80%"
              alt="..."
            />
            <!-- <h6 class="mb-2 mt-3 text-center">MIST wins URC-2022</h6> -->
            <!-- <p>
              Lorem ipsum, dolor sit amet consectetur adipisicing elit. Vero
              enim possimus iste cumque voluptatem. Odio veritatis accusantium
              nihil temporibus amet animi, aliquam blanditiis adipisci quis ea
              pariatur minus impedit architecto incidunt nobis repellendus
              perspiciatis tempore voluptate earum qui, mollitia natus fuga.
              Ullam sit saepe distinctio eligendi, unde nesciunt totam. A, optio
              reprehenderit? Totam dolores earum magni hic quisquam ullam
              officia modi iusto, culpa, ex velit, commodi repellat tempora
              exercitationem nisi.
            </p> -->
          </div>
        </div>
      </div>
      <!-- firstcontainer ends -->

      <!-- secondcontainer starts  -->

      <div class="container pt-3">
        <div class="row border bg-white m-0">
          <!-- left part starts  -->
          <div class="col-12 col-md-4 side-nav p-3">
            <div class="info-card p-2 border border-2 border-info m-3 rounded">
              <h4>Event Name</h4>
              <p><?php echo $row["EventName"]; ?></p>
            </div>

            <div class="info-card p-2 border border-2 border-info m-3 rounded">
              <h4>Academic Year</h4>
              <p><?php echo $row["Academic_year"]; ?></p>
            </div>

            <div class="info-card p-2 border border-2 border-info m-3 rounded">
              <h4>Team Name</h4>
              <p><?php echo $row["TeamName"]; ?></p>
            </div>

            <div class="info-card p-3 border border-2 border-info m-3 rounded">
              <h4>Total No of participants</h4>
              <p><?php echo $row["StudentNo"]; ?></p>
            </div>

            <div class="info-card p-2 border border-2 border-info m-3 rounded">
              <h4>Organizer</h4>
              <p><?php echo $row["Organizer"]; ?></p>
            </div>

            <div class="info-card p-2 border border-2 border-info m-3 rounded">
              <h4>Prize money</h4>
              <p><?php echo $row["PrizeMoney"]; ?></p>
            </div>

           
          </div>
          <!-- left parts ends  -->

          <!-- right parts starts  -->
          <div class="col-md-8 col-12 p-4 pt-4 main-content">
            <div class="info-detail mt-2 border border-2 border-info p-3">
              <p class="card-text fw-normal">
              <?php echo $row["Achievement_detailes"]; ?>
              </p>
            </div>

            <h3 class="mb-3 mt-5">Associated Students</h3>
            <div class="container ps-2 pe-2">
              <div class="row">
                <div
                  class="col-md-3 col-6 py-4 border border-info border-2 m-3 rounded"
                >
                  <img
                    style="width: 60%"
                    class="mx-auto d-block"
                    src="../img/student1.jpg"
                    alt=""
                  />
                  <h5 class="mt-3 text-center"><?php echo $row["Member1Name"]; ?></h5>
                  <p class="m-0 text-center"><?php echo $row["Member1ID"]; ?></p>
                </div>
                <div
                  class="col-md-3 col-6 py-4 border border-info border-2 m-3 rounded"
                >
                  <img
                    style="width: 60%"
                    class="mx-auto d-block"
                    src="../img/studen2.jpg"
                    alt=""
                  />
                  <h5 class="mt-3 text-center"><?php echo $row["Member2Name"]; ?></h5>
                  <p class="m-0 text-center"><?php echo $row["Member2ID"]; ?></p>
                </div>
                <div
                  class="col-md-3 col-6 py-4 border border-info border-2 m-3 rounded"
                >
                  <img
                    style="width: 60%"
                    class="mx-auto d-block"
                    src="../img/student3.jpg"
                    alt=""
                  />
                  <h5 class="mt-3 text-center"><?php echo $row["Member3Name"]; ?></h5>
                  <p class="m-0 text-center"><?php echo $row["Member3ID"]; ?></p>
                </div>
              </div>
            </div>

            <h3 class="mb-3 mt-3">Associated Faculty</h3>
            <div class="container ps-2 pe-2">
              <div class="row">
                <div
                  class="col-md-3 col-6 py-4 border border-info border-2 m-3 rounded"
                >
                  <img
                    style="width: 60%"
                    class="mx-auto d-block"
                    src="../img/raiyansir.jpg"
                    alt=""
                  />
                  <h5 class="mt-3 text-center"><?php echo $row["Supervisor1"]; ?></h5>
                </div>
                <div
                  class="col-md-3 col-6 py-4 border border-info border-2 m-3 rounded"
                >
                  <img
                    style="width: 60%"
                    class="mx-auto d-block"
                    src="../img/nafizsir.jpg"
                    alt=""
                  />
                  <h5 class="mt-3 text-center"><?php echo $row["Supervisor2"]; ?></h5>
                </div>
              </div>
            </div>
          </div>

          <!-- right parts ends  -->
        </div>
      </div>
      <!-- second container ends  -->
      <!-- footer -->

      <div class="container-fluid bg-black py-2 mt-5">
        <div class="row">
          <div class="col-md-4 col-12 pt-3">
            <p class="text-white-50 text-center">
              © 2022 MIST. All rights reserved
            </p>
            <p></p>
          </div>

          <div class="col-md-4 col-12 pt-3">
            <p class="text-white-50 text-center">
              <i class="bi bi-telephone"></i>+880 176 902 3806
            </p>
          </div>
          <div class="col-md-4 col-12 pt-3">
            <p class="text-white-50 text-center">
              <i class="bi bi-envelope"></i> info@mist.ac.bd
            </p>
          </div>
        </div>
      </div>

      <!-- footer -->
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
      crossorigin="anonymous"
    ></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>



<?php 

}else{

     header("Location: ../logout.php");

     exit();

}

 ?>