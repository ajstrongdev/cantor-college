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

    <?php
        // Menu & Banner
        include("includes/header.php");
    ?>

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
            echo
                "<div><span>Courses</span> ".$row["Award"]."<br>".
                "<h1>".$row["Title"] ."</h1><br>".
                "<span>".$row["Attendance"]." - ".$row["Study"]."</span> <b><u>".$row["Subject"]."</u></b><br><br>".
                $row["Summary"]."<br><br>".
                $row["Type"]."<br>".
                "UCAS: ".$row["Code"]
                ."</div>"; 
        }
    } 
    else {
        echo "0 results";
    }
  
   $conn->close();


?>
        </div>
        <?php 
            // Footer
            include("includes/footer.php");
        ?>

</body>
</html>