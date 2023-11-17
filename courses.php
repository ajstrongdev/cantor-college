<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Courses | Cantor College</title>
    <link rel="stylesheet" href="assets/css/style.css" type="text/css">
    <script src="assets/js/navbar.js" defer></script>
    <link rel="icon" type="image/png" href="assets/images/logo-trans-cropped.png">
</head>
<body>

    <div id="mobile-nav" class="overlay">
        <a href="javascript:void(0)" class="closebtn" id="mobMenuHide">&times;</a>
        <div class="overlay-cont">
            <a href="index.html">Home</a> <br>
            <a href="courses.html">Courses</a> <br>
            <a href="visit.html">Visit us</a> <br>
            <a href="about.html">About us</a>
          </div>
    </div>

    <header>
        <nav>
            <div class="container">
                <div class="image">
                    <img src="assets/images/logo-trans-cropped.png" alt="" width="100%">
                </div>
                <div class="navigation">
                    <ul>
                        <li><a href="about.html" class="desktop-menu">About us</a></li>
                        <li><a href="visit.html" class="desktop-menu">Visit us</a></li>
                        <li><a href="courses.html" class="desktop-menu">Courses</a></li>
                        <li><a href="index.html" class="desktop-menu">Home</a></li>
                        <li><a class="mob-menu" id="mobMenuShow">☰</a></li>
                      </ul>
                </div>
            </div>
        </nav>

        <div id="banner">
            <div class="content">
                <h1>Cantor College</h1>
                <h2>Shaping Britain's Future</h2>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ultricies velit eu accumsan elementum. Nam et erat et augue suscipit ultrices ut nec ex. Morbi urna sapien, tincidunt eu sagittis et, ultricies sed quam. Cras aliquam elementum nunc, et dictum elit blandit sed. Integer massa dui.
                </p>
            </div>
        </div>

        <div class="courseList">
        <?php 
$servername = "127.0.0.1";
$username = "root";
$password = "";
$database = "cantorcourses";
$conn = new mysqli($servername, $username, $password, $database);
  
  // GET CONNECTION ERRORS
  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  }
  
  // SQL QUERY
  $query = "SELECT * FROM `cantor`;";
  
  // FETCHING DATA FROM DATABASE
  $result = $conn->query($query);
  
    if ($result->num_rows > 0) 
    {
        // OUTPUT DATA OF EACH ROW
        while($row = $result->fetch_assoc())
        {
            echo "<div><b><u>".$row["Title"]. ":</u></b> " .
                $row["Summary"]. "</div>"; 
        }
    } 
    else {
        echo "0 results";
    }
  
   $conn->close();


?>
        </div>

</body>
</html>