<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">

<head>
  <title>DemoTemplate</title>
  <meta name="description" content="free website template" />
  <meta name="keywords" content="enter your keywords here" />
  <meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
  <link rel="stylesheet" type="text/css" href="css/style.css" />
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/jquery.easing.min.js"></script>
  <script type="text/javascript" src="js/jquery.lavalamp.min.js"></script>
  <script type="text/javascript">
    $(function() {
      $("#lava_menu").lavaLamp({
        fx: "backout",
        speed: 700
      });
    });
  </script>

</head>

<body>
  <div id="main">
    <div id="header">  
      <h1>Prajwala <span>Patil</span></h1>	
	  <h2>Be Always Creative</h2>
    </div><!--close header-->			
    <div class="container_header"><p>&nbsp;</p></div>
    <div id="site_background"> 
      <div id="banner">  
		<div id="banner_content">
		</div><!--close banner_content-->	
      </div><!--close banner-->		
	  <div id="site_content">
	    <div id="menubar">
          <ul class="lavaLampWithImage" id="lava_menu">
            <li class="current"><a href="index.html">Home</a></li>
            <li><a href="ourwork.html">Our Work</a></li>
            <li><a href="db_add1.php">Info</a></li>
            <li><a href="contact.html">Contact Us</a></li>
          </ul>
	    </div><!--close menubar-->	
        <div id="content">
          <div class="content_item">
            <h1>Welcome to our website</h1>
            <?php 

	$host = "localhost";
	$username = "root";
	$passwd = "";
	$dbname = "db_internship";

	$connection = mysqli_connect($host, $username, $passwd, $dbname);

	$id = $_GET['deleteid'];

	$q = mysqli_query($connection,
		"update tbl_user set is_delete = 1 where user_id='{$id}'") or die("Error". mysqli_error($connection));

	if ($q) {
		echo "<script>alert('Record Deleted');window.location='db_display1.php';</script>";
	}
?>
		  </div><!--close content_item-->	
	      
		   		
		    
		    
           </div><!--close sidebar_container-->	
           <br style="clear:both;" />
        </div><!--close content-->	
      </div><!--close site_content-->	
	</div><!--close site_background-->	
    <div id="footer">  
	  <div id="footer_content">
        <p> Website Managed By <strong>Prajwala Patil</strong></p>
      </div><!--close footer_content-->	
    </div><!--close footer-->	
  </div><!--close main-->	
</body>
</html>
