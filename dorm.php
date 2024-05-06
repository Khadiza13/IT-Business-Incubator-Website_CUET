<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dorm_room";
$table_name = "reservation";


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// Query to count the entries
$maleQuery = "SELECT COUNT(*) as maleCount FROM reservation WHERE gender = 'male'";
$maleResult = $conn->query($maleQuery);
$maleCount = mysqli_fetch_assoc($maleResult)['maleCount'];
$tot_m=100;
$vac_m=$tot_m - $maleCount;

// Query to count females
$femaleQuery = "SELECT COUNT(*) as femaleCount FROM reservation WHERE gender = 'female'";
$femaleResult =$conn->query($femaleQuery);
$femaleCount = mysqli_fetch_assoc($femaleResult)['femaleCount'];
$tot_f=100;
$vac_f=$tot_f - $femaleCount;


$conn->close();
?>

<!DOCTYPE html>
<html>
  <head>
    <title>services page</title>
    <meta charset="utf-8">
    <meta name="viewpoint" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.rtl.min.css" >
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" type="text/css" href="dorm.css">
  </head>
  
  <body>
  <section id="nav-bar">
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
              <a class="navbar-brand" href="#" style="pointer-events: none;"><img src="navigation.png"></a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#"><b> Home </b></a>
                    <hr>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="service.html"><b> Services </b></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="http://localhost/IP%20Project/events.php"><b> Events </b></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="officers.html"><b> Our Team</b></a>
                  </li>
                  
                  <li class="nav-item">
                    <a class="nav-link" href="#"><b>Dorm Room Requisition</b></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#contact"><b>Contact Us</b></a>
                    
                  </li>
                </ul>
              </div>
            </div>
          </nav>
    </section>


    
    <section id="LABORATORY" class="lab">
        <div class="title">
            <h1>Sheikh Jamal dormatory</h1>
          </div>
          
          
          <div class="container">

          </div>
  
        <div class="content">
            <p class="fade-in"> A dormitory is a residential facility typically found on college or university campuses, designed to accommodate students. It serves as a living space where students can sleep, study, and interact with their peers.Sheikh Jamal dormatory is not different.It is comprised of individual rooms or shared living spaces,  and provide basic amenities like beds, desks, chairs, and storage units for each student.Also include communal areas like common rooms, kitchens, laundry facilities, and study rooms, where students can socialize, relax, and collaborate on academic work. Dormitories promote a sense of community, fostering friendships and creating a supportive environment for students during their educational journey.</p>
                <tr>
                  <td>
                  <label>Total Room:</label></td>
                  <td><input type="text" id="result" value="<?php echo $tot_m; ?>"></td>
                </tr>
                <tr>
                  <td>
                  <label>Occupied:</label></td>
                  <td><input type="text" id="result" value="<?php echo $maleCount; ?>"></td>
                </tr>
                <tr>
                  <td>
                  <label>Vaccent:</label></td>
                  <td><input type="text" id="result" value="<?php echo $vac_m; ?>"></td>
                </tr>
                <?php
    if (isset($_POST['redirect'])) {
      header("Location: dorm2.html"); // Redirect to the desired HTML page
      exit();
    }
  ?>
<div style="margin-top: 20px; text-align: center;">
<form>
    <input type="button" value="Reserve Room?" onclick="redirectToOtherPage()">
  </form>
  </div>

  <script>
    function redirectToOtherPage() {
      window.location.href = "dorm2.html";
    }
  </script>
          
    </section>
  
    <section id="LABORATORY" class="lab">
        <div class="title">
            <h1 >Rosy Jamal dormatory</h1>
          </div>
          <div class="container">

          </div>
          
        <div class="content">
            <p>A dormitory is a residential facility typically found on college or university campuses, designed to accommodate students. It serves as a living space where students can sleep, study, and interact with their peers.Sheikh Jamal dormatory is not different.It is comprised of individual rooms or shared living spaces,  and provide basic amenities like beds, desks, chairs, and storage units for each student.Also include communal areas like common rooms, kitchens, laundry facilities, and study rooms, where students can socialize, relax, and collaborate on academic work. Dormitories promote a sense of community, fostering friendships and creating a supportive environment for students during their educational journey.</p>
                <tr>
                  <td>
                  <label>Total Room:</label></td>
                  <td><input type="text" id="result" value="<?php echo $tot_f; ?>"></td>
                </tr>
                <tr>
                  <td>
                  <label>Occupied:</label></td>
                  <td><input type="text" id="result" value="<?php echo $femaleCount; ?>"></td>
                </tr>
                <tr>
                  <td>
                  <label>Vaccent:</label></td>
                  <td><input type="text" id="result" value="<?php echo $vac_f; ?>"></td>
                </tr>
                <style>
  label {
    color: blue; /* Change the font color to blue */
  }
  input[type="text"] {
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.4); /* Add a shadow to the input boxes */
  }
</style>
                <?php
    if (isset($_POST['redirect'])) {
      header("Location: dorm2.html"); // Redirect to the desired HTML page
      exit();
    }
  ?>
<div style="margin-top: 20px; text-align: center;">
<form>
    <input type="button" value="Reserve Room?" onclick="redirectToOtherPage()">
  </form>
  </div>

  <script>
    function redirectToOtherPage() {
      window.location.href = "dorm2.html";
    }
  </script>
          
    </section>
  </body>
</html>