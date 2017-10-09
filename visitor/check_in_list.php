<!DOCTYPE HTML>
<html>

<head>
  <title>Online Log Register(Visitor Management System www.grprajapat.blogspot.com)</title>
  <meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
  <link rel="stylesheet" type="text/css" href="css/style.css" />
  <!-- modernizr enables HTML5 elements and feature detects -->
  <script type="text/javascript" src="js/modernizr-1.5.min.js"></script>
</head>

<body>
  <div id="main">
    <header>
      <div id="logo">
        <div id="logo_text">
          <!-- class="logo_colour", allows you to change the colour of the text -->
          <h1><a href="index.php">Online Log Register</a></h1>
          <h2>Visitor Management System in Library</h2>
        </div>
      </div>
      <nav>
        <ul class="sf-menu" id="nav">
          <li class="selected"><a href="index.php">Home</a></li>
          
          <li><a href="check_in.php">Check in</a></li>
          <li><a href="check_out.php">Check Out</a></li>
          <li><a href="#">Others</a>
            <ul>
              <li><a href="search.php">Search Student</a></li>
			  
            <li><a href="#">final report</a>
                <ul>
                  <li><a href="current_day_report.php">Current Day</a></li>
                  <li><a href="report_between_two_dates.php">Between Two Dates</a></li>
                  
                </ul>
              </li>
              <li><a href="st_reg.php">New Student Registration</a></li>
			   <li><a href="st_list.php">See All Students</a></li>
            
            </ul>
          </li>
          <li><a href="http://grprajapat.meximas.com/contact-us.html">Contact Us</a></li>
        </ul>
      </nav>
    </header>
    <div id="site_content">
      
      <div id="sidebar_container">
        <div class="sidebar">
          <h3>Latest News</h3>
          <h4>New CICO System Launched</h4>
          <h5>Sept 10th, 2014</h5>
          <p>Check in Check Out System Design For Library. Take a look around and let us know what you think.<br /><a href="#">Read more</a></p>
        </div>
        <div class="sidebar">
          <h3>Useful Links</h3>
          <ul>
            <li><a href="check_in.php">Check in</a></li>
            <li><a href="check_out.php">Check out</a></li>
            <li><a href="check_in_list.php">Currently Checked in User</a></li>
            <li><a href="current_day_report.php">Final Report Current Day</a></li>
			<li><a href="st_reg.php">New Student Registration</a></li>
            <li><a href="report_between_two_dates.php">Final Report Between Two Dates</a></li>
          </ul>
        </div>
      </div>
      <div class="content">
        <h1>List of Check in students</h1>
		<?php
	
	include('config2.inc');
	$sql = "SELECT a.checkin_id,b.st_rollnumber,b.st_name, a.time_in FROM visitor_record a, st_detail b WHERE b.visitor_id = a.visitor_id AND a.time_out='0000-00-00 00:00:00'";


$result=mysql_query($sql);
?>

<table width="666" border="0" cellpadding="0" cellspacing="1" bgcolor="red">
<tr>
<td width="664" bordercolor="#00FF00" bgcolor="red">
<table width="654" border="1" cellspacing="0" cellpadding="3" bgcolor="#CC0033">
<tr>
<td colspan="4"><strong>Student List Which Currently Stay in Library </strong> </td>
</tr>

<tr>

<td width="106" align="center" bgcolor="#00FF00"><strong>Roll Number</strong></td>
<td width="117" align="center"><strong>Name</strong></td>
<td width="139" align="center"><strong>Time in</strong></td>
<td width="240" align="center"><strong>Manually Check out</strong></td>

</tr>

<?php
while($rows=mysql_fetch_array($result)){
?>

<tr>
<td><?php echo $rows['st_rollnumber']; ?></td>
<td><?php echo $rows['st_name']; ?></td>
<td><?php echo $rows['time_in']; ?></td>
<td align="center"><a href="manually_checkout.php?checkin_id=<?php echo $rows['checkin_id']; ?>">click here to Check out Manually</a></td>
</tr>

<?php
}
?>

</table>
</td>
</tr>
</table>

<?php
mysql_close();
?>
		
      </div>
    </div>
    <footer>
      <p>Copyright &copy; 2014 <a href="http://www.grprajapat.blogspot.com">grprajapat.blogspot.com </a> | <a href="http://www.grprajapat.meximas.com">Developed By-Govind Prajapat. </a></p>
    </footer>
  </div>
  <p>&nbsp;</p>
  <!-- javascript at the bottom for fast page loading -->
  <script type="text/javascript" src="js/jquery.js"></script>
  <script type="text/javascript" src="js/jquery.easing-sooper.js"></script>
  <script type="text/javascript" src="js/jquery.sooperfish.js"></script>
  <script type="text/javascript" src="js/image_fade.js"></script>
  <script type="text/javascript">
    $(document).ready(function() {
      $('ul.sf-menu').sooperfish();
    });
  </script>
</body>
</html>
