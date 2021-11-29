<?php
    session_start();
    if(!isset($_SESSION['email'])){
        header('location: login.php');
    }
    include "koneksi.php";
    $qry=mysqli_query($conn, "select * from user where email = '".$_SESSION['email']."'");
    $dt_user=mysqli_fetch_array($qry);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Uniq Tour</title>
    <link rel="stylesheet" type="text/css" href="index.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
</head>
<body>

    <!-- navbar -->
    <section>
        <nav>
            <img src="logouniq.svg" alt="Logo" width="55" height="40" class="logo">
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="tour.php">Tour</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="galeri.php">Gallery</a></li>
                <button class="profile"><a href="profile.php">Profile</button>
                <button class="log-in"><a href="logout.php">Log Out</button>
            </ul>
        </nav>

        <div class="text-container">
            <h2>WELCOME TO</h2>
                <h3>Indonesian Uniq Tour !!</h3>
                <p style="text-align: center;">Hello <?=$dt_user['name']?> <br />
                    Enjoy Your Dream Vacation. <br/>
                </p>
        </div>

    <!-- box search -->
        <div class="box">
            <form>
                <input type="text" name="" placeholder="Enter keyword..."> 
                <input type="submit" name="" value="Search"> 
            </form>
        </div>

    </section>

    <!-- tour -->
<div class="card-container">
    <h1>Tour Uniq Destination</h1>
        <h3>enjoy your explore about uniq destination</h3>
    <div class="gallery">
        <a target="_blank" href="cobanjahe.jpg">
          <img src="cobanjahe.jpg" alt="cobanjahe" width="600" height="400">
        </a>
        <div class="desc" style="font-weight: lighter; font-size: 14px;">Di tengah pepohonan yang rimbun, akan ada harta karun yang indah. 
            Air terjun dengan air yang mengalir cukup deras lengkap dengan spot foto terbaik akan membuat takjub.
            Ada juga kandang rusa dan spot foto seperti tenda suku Indian yang tak kalah unik dan menarik. </div>
      </div>
      
      <div class="gallery">
        <a target="_blank" href="cobansewu2.jpg">
          <img src="cobansewu2.jpg" alt="cobansewu" width="600" height="400">
        </a>
        <div class="desc" style="font-weight: lighter; font-size: 14px;">Air terjun ini sungguh tiada duanya. Air terjun ini menjulang megah setinggi 180m menuruni tebing hijau. 
            Ada jalanan berpengaman bambu yang sempit curam untuk turun ke dasar air terjun sehingga dapat merasakan 
            udara sejuk di sekitar, benar-benar dikelilingi oleh alam.</div>
      </div>
      
      <div class="gallery">
        <a target="_blank" href="kampungjodipan.jpg">
          <img src="kampungjodipan.jpg" alt="kampungjodipan" width="600" height="400">
        </a>
        <div class="desc" style="font-weight: lighter; font-size: 14px;">Banyak sekali lukisan dan tembok berwarna di luar rumah warga di sana, berbagai mural 3D tersedia. Di kampung ini, 
            Anda juga akan menemukan jembatan kaca ala Zhangjiajie Tiongkok yang menghubungkan Kampung Jodipan dengan kampung Tridi.</div>
      </div>
      
      <div class="gallery">
        <a target="_blank" href="museumangkut.jpg">
          <img src="museumangkut.jpg" alt="museumangkut" width="600" height="400">
        </a>
        <div class="desc" style="font-weight: lighter; font-size: 14px;">Popularitas museum angkut kian melambung, Museum ini menyimpan koleksi 300 kendaraan dari berbagai 
            era dan di Indonesia merupakan museum terbesar di Asia Tenggara. 
            Ada 8 zona pameran unik, dari main hall memanjang dengan berbagai kendaraan antik.</div>
      </div>
    </div>
</div>

<!-- button -->
<div class="button-container">
    <a href="destination.php" class="button">Add Destination</a>
</div>

<!-- suggestion -->

<div class="suggestion">
    <div class="suggestion2">
    <h2 style="margin-top: 25px;">Why Uniq Destination ?</h2>
    <div class="card-suggestion">
        <div class="desc"><b>Eksplore hal unik lebih cepat. </b></br>
            </br>Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
            Culpa deserunt tempore ipsum natus, doloribus quidem quaerat incidunt? 
            Dolorem, quas placeat. Impedit excepturi nisi alias fugiat, vel vitae culpa molestiae autem!
        </div>
    </div>

    <div class="card-suggestion">
        <div class="desc"><b>Tervalidasi</b></br>
            </br>Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
            Culpa deserunt tempore ipsum natus, doloribus quidem quaerat incidunt? 
            Dolorem, quas placeat. Impedit excepturi nisi alias fugiat, vel vitae culpa molestiae autem!
        </div>
    </div>

    <div class="card-suggestion">
        <div class="desc"><b>Adanya Interaksi Antar Pengguna dan Owner</b></br>
            </br>Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
            Culpa deserunt tempore ipsum natus, doloribus quidem quaerat incidunt? 
            Dolorem, quas placeat. Impedit excepturi nisi alias fugiat.
        </div>
    </div>

    <div class="card-suggestion">
        <div class="desc"><b>Sumber Terpercaya</b></br>
            </br>Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
            Culpa deserunt tempore ipsum natus, doloribus quidem quaerat incidunt? 
            Dolorem, quas placeat. Impedit excepturi nisi alias fugiat, vel vitae culpa molestiae autem!
        </div>
    </div>

    <div class="card-suggestion">
        <div class="desc"><b>Jangkauan Luas</b></br>
            </br>Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
            Culpa deserunt tempore ipsum natus, doloribus quidem quaerat incidunt? 
            Dolorem, quas placeat. Impedit excepturi nisi alias fugiat, vel vitae culpa molestiae autem!
        </div>
    </div>

    <div class="card-suggestion">
        <div class="desc"><b>Visualisasi tempat asli</b></br>
            </br>Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
            Culpa deserunt tempore ipsum natus, doloribus quidem quaerat incidunt? 
            Dolorem, quas placeat. Impedit excepturi nisi alias fugiat, vel vitae culpa molestiae autem!
        </div>
    </div>

    <div class="card-suggestion">
        <div class="desc"><b>Praktis Digunakan</b></br>
            </br>Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
            Culpa deserunt tempore ipsum natus, doloribus quidem quaerat incidunt? 
            Dolorem, quas placeat. Impedit excepturi nisi alias fugiat, vel vitae culpa molestiae autem!
        </div>
    </div>

    <div class="card-suggestion">
        <div class="desc"><b>Selalu update</b></br>
            </br>Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
            Culpa deserunt tempore ipsum natus, doloribus quidem quaerat incidunt? 
            Dolorem, quas placeat. Impedit excepturi nisi alias fugiat, vel vitae culpa molestiae autem!
        </div>
    </div>

</div>
</div>
</div>

    <!-- profile -->
    <div class = "about-wrapper">
        <div class = "about-left">
          <div class = "about-left-content">
            <div>
              <div class = "shadow">
                <div class = "about-img">
                  <img src = "profile2.jpg" alt = "profile">
                </div>
              </div>
  
              <h2>Elia Sari</h2>
              <h3>Siswi SMK Telkom Malang</h3>
            </div>
  
            <ul class = "icons">
              <li><i class = "fab fa-twitter"></i></li>
              <li><i class = "fab fa-linkedin"></i></li>
              <li><i class = "fab fa-instagram"></i></li>
            </ul>
          </div>
        </div>
  
        <div class = "about-right">
          <h1>hi<span>!</span></h1>
          <h2>Here's who I am & what I do</h2>
          <div class = "about-btns">
            <button type = "button" class = "btn btn-pink">resume</button>
            <button type = "button" class = "btn btn-white">projects</button>
          </div>
  
          <div class = "about-para">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus, aspernatur possimus ullam quaerat, laboriosam ex voluptate aliquid laborum, obcaecati ratione accusamus! Ea nisi modi dolor nam numquam? Temporibus, molestias amet.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus iure tempora alias laudantium sapiente impedit!</p>
          </div>
        </div>
      </div>

<!-- About footer container -->
<div class="footer-container">
    <footer class="footer">
         <div class="container">
             <div class="row">
                 <div class="footer-col">
                     <h4>company</h4>
                     <ul>
                         <li><a href="#">about us</a></li>
                         <li><a href="#">our services</a></li>
                         <li><a href="#">privacy policy</a></li>
                         <li><a href="#">tour program</a></li>
                     </ul>
                 </div>
                 <div class="footer-col">
                     <h4>get help</h4>
                     <ul>
                         <li><a href="#">FAQ</a></li>
                         <li><a href="#">eksplore</a></li>
                         <li><a href="#">seminar</a></li>
                     </ul>
                 </div>
                 <div class="footer-col">
                    <h4>Contact Information</h4>
                    <ul>
                        <li><a href="#"><i class="fas fa-search-location" style="margin-right: 10px;"></i>Jl.Tambingan G6 D26</a></li>
                        <li><a href="#"><i class="fas fa-phone" style="margin-right: 10px;"></i>0812-1711-6003</a></li>
                        <li><a href="#"><i class="fas fa-envelope" style="margin-right: 10px;"></i>elia21196@gmail.com</a></li>
                    </ul>
                </div>
                 <div class="footer-col">
                     <h4>follow us</h4>
                     <div class="social-links">
                         <a href="#"><i class="fab fa-facebook-f"></i>
                         <a href="#"><i class="fab fa-twitter"></i>
                         <a href="#"><i class="fab fa-instagram"></i>
                         <a href="#"><i class="fab fa-linkedin-in"></i>
                     </div>
                 </div>
             </div>
         </div>
    </footer>
  </div>

</body>
</html>