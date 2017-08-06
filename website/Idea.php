<!DOCTYPE HTML>
<html>

<head>
  <title>2017 Team Merlyn</title>
  <meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/html; charset=windows-1252" />
  <link rel="stylesheet" type="text/css" href="style/style.css" title="style" />
  <script src="js/script.js" type="text/javascript"></script>
</head>

<body>
  <div id="main">
    <div id="header">
      <div id="logo">
        <div id="logo_text">
          <!-- color change-->
          <h1><a href="Home.php">ideas<span class="logo_colour">Inspired</span></a></h1>
          <h2>Sharing ideas, made simple</h2>
        </div>
      </div>
      <div id="menubar">
        <ul id="menu">
          <!-- page Select -->
          <li><a href="Home.php">Home</a></li>
          <li class="selected"><a href="Idea.php">Ideas</a></li>
          <li><a href="Book.php">Book Reviews</a></li>
          <li><a href="Movie.php">Movie Reviews</a></li>
          <li><a href="contact.html">Contact Us</a></li>
        </ul>
      </div>
    </div>
    <div id="site_content">
      <div class="sidebar">
        <!-- Slidebar -->
        <h3>Technology Direct</h3>
        <h4>AMD Realeases new efficient mobile GPUs.</h4>
        <h5>March 18th, 2017</h5>
        <p> AMD released the embedded Radeon E9550 on September 27. That card packs 2304 SPs with a base clock of 1.12GHz and a boost clock of up to 1.26 Hz, along with 8GB of GDDR5 at 7 GT/s on a 256-bit bus.<br /><a href="http://techreport.com/news/30806/rumor-polaris-refresh-incoming-for-rx-465-475-and-485">Read more</a></p>
        <p></p>
        <h4>Mainak reaches to class in time.</h4>
        <h5>February 24th, 2017</h5>
        <p>A special thanks to everyone for reading this.!<br /><a href="#">Read more</a></p>
        <h3>Useful Links</h3>
        <ul>
          <li><a href="#">link 1</a></li>
          <li><a href="#">link 2</a></li>
          <li><a href="#">link 3</a></li>
          <li><a href="#">link 4</a></li>
        </ul>
        <h3>Search</h3>
        <form method="post" action="#" id="search_form">
          <p>
            <input class="search" type="text" name="search_field" value="Enter keywords....." />
            <input name="search" type="image" style="border: 0; margin: 0 0 -9px 5px;" src="style/search.png" alt="Search" title="Search" />
          </p>
        </form>
		<a href="login.html"><input class="button" type="button" value="Sumbit Your Entry" /></a>
      </div>
      <div id="content">
        <!-- Content -->
		<h1>Working Internet Relay Chat in under 500 lines of code</h1>
		<p>We live in the age of the internet and without a working implimentation of a method of communication its completely useless. Here I present my implimentation of a console based IRC application for the windows platform in under 500 slic lines of code.<a href="pages/ideas/1.html">    Read More.</a></p>
		<h4 class="right" >  -Lavanya</h4>
		<h1>Social network localised.</h1>
		<p>We all know about the technology giant Facebook. Would you believe me if it told you you can own your own Social Network? Well now you can with a few changes to my implimentation of a database driven Social Network.<a href="pages/ideas/2.html">    Read More.</a></p>
		<h4 class="right">  -Rohit</h4>
		<h1>Online Voting System</h1>
		<p>A non-database driven online voting system, What? Is that even possible ? Possible or not, I implimented a file driven database implimentation of a online voting system.<a href="pages/ideas/3.html">    Read More.</a></p>
		<h4 class="right">  -Yeswin</h4>
		<h1>Android App: HDD Address Converter.</h1>
		<p>Not my first android app, but the first supervused one! With the approval of Dr. Sashikiran from SITE(VIT University), I made a LBA to CHS(and vice versa.) address converter.<a href="pages/ideas/4.html">    Read More.</a></p>
		<h4 class="right">  -Mainak</h4>
                <?php
                $db=  mysqli_connect("localhost", "crashxz", "", "project_wd")
                        or die("Error connecting database");
                $query="SELECT *FROM entry WHERE Category='Idea'";
                $result=  mysqli_query($db, $query)
                        or die('Error executing query');
                $num=mysqli_num_rows($result);
                for($i=0;$i<$num;$i++)
                {
                    $row=  mysqli_fetch_assoc($result);
                    echo "<h1>".$row["Title"]."</h1>";
                    echo "<p>".$row["Body"]."</p>";
                    echo "<h4 class=\"right\"> -".$row["Byline"]."<br>";
                }
                ?>
	 </div>
    </div>
    <div id="footer">
      Copyright &copy; Web Development | <a href="mailto:mainakme2140@gmail.com">Email</a> | <a href="#"  onclick="popup()">Information</a> |<a href="#" onclick="popup2()">ITA1007</a>
    </div>
  </div>
</body>
</html>
