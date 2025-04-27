<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
        <title> Barangay San Jose Queuing System </title>
        <script src="https://kit.fontawesome.com/a076d05399.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <nav>
      <label class="logo">Barangay San Jose<br/>
      Queuing System</label>
      <input type="checkbox" id="check">
      <label for="check">
          <i class="fa fa-bars" id="btn"></i>
          <i class="fa fa-times" id="cancel"></i>
      </label>
      <ul>
          <li><a href="Homepage.html" class="link">Home</a> </li>
          <li><a href="services.html" class="link">Services</a> </li>
          <li><a href="downloads.html" class="link">Downloads</a> </li>
          <li><a href="aboutus.html" class="link">About Us</a> </li>
      </ul>
  </nav>
    <body>
    <section id="home">
    <section class="head">
        <div class="container">
          <h1>Bayan ng Montalban</h1>
          <h2>BARANGAY SAN JOSE QUEUING SYSTEM</h2>
          <p>Welcome to our Barangay San Jose Queuing System!<br/>
            Where efficient and hassle-free service is our priority.<br/>
            Kindly follow the prompts on your screen,<br/>
            and we'll assist you shortly thank you for your understanding and support!
           </p>
        </div>
    </section>
    <section id="announce">
    <div class="announce">
      <div class="panel">
        <h3>Announcement</h3>
      </div>
      <?php
$servername = "http://localhost/phpmyadmin/index.php?";
$username = "root";
$password = "";
$dbname = "announcements";

$conn = new mysqli($servername, $username, $password, $dbname);

if($conn->connect_error){
    die("connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM announcements ORDER BY created_at DESC";
$result = $conn->query($sql);

if($result->num_rows > 0) {
    echo '<div class="announcements">';
    while($row = $result->fetch_assoc()){
        echo "<div class='announcement'>";
        echo "<h2>" .htmlspecialchars($row["title"]) . "</h2>";
        echo "<p>" . nl2br(htmlspecialchars($row["message"])) . "</p>";
        echo "<small>Posted on: " . $row["created_at"] . "</small>";
        echo "</div><hr>";
    }
}
    else{
        echo "<p>No Announcements found.</p>";
    }

$conn->close();
?>
    </div>
    </section>
    </body>
    <footer class="footer">
      <section id="aboutus">
        <div class="footer__addr">
          <div class="sjlogo">
            <img src="sjlogo.png" alt="logoimage"/>
          </div>
          <div class="bmlogo">
            <img src="bm.png" alt="logoimage"/>
          </div>
          <h1 class="footer__logo">BARANGAY SAN JOSE<br/>
        QUEUING SYSTEM</h1>
        </div>
        <address>
            Barangay San Jose Rodriguez Rizal<br>   
            <a class="footer__btn" href="#">Contact Us</a>
          </address>
        <ul class="footer__nav">
          <li class="nav__item">
            <h2 class="nav__title">Contacts</h2>
      
            <ul class="nav__ul">
              <li>
                <a>Barangay San Jose Officals</a>
              </li>
      
              <li>
                <a>09503230874</a>
              </li>
                  
              <li>
                <a>pena.kennethdarylc@gmail.com</a>
              </li>
            </ul>
          </li>
          
          <li class="nav__item nav__item--extra">
            <h2 class="nav__title">Quick Links</h2>
            
            <ul class="nav__ul nav__ul--extra">

              <li>
                <a href="Maps.html">Sitemap</a>
              </li>

              <li>
                <a href="Manuals.html">Manuals</a>
              </li>
              
            </ul>
          </li>
          
          <li class="nav__item">
            <h2 class="nav__title">Legal</h2>
            
            <ul class="nav__ul">
              <li>
                <a href="Privacy Policy.html">Privacy Policy</a>
              </li>
              
              <li>
                <a href="Terms of Use.html">Terms of Use</a>
              </li>
              
            </ul>
          </li>
        </ul>
        
        <div class="legal">
          <p>&copy; 2024 Barangay San Jose Rodriguez Rizal. All rights reserved.</p>
          
        </div>
      </section>
    </footer>
</html>