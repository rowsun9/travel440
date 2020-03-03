session_start()
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Welcome, to Your Travel</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="yourtravelcss.css">
</head>
<body>
<div class="header">
  <h1>Welcome, to Your Travel</h1>
  <p>Travel <b>Your</b> way.</p>
</div>

<div class="navbar">
        <a href="index.php" class="active">Home</a>
        <a href="review.php">Reviews/Ratings</a>
        <a href="destinationlandingpage.php">Destinations</a>
        <a href="suggestedforyou.php">Suggested for You</a>
        <a href="myaccount.php">My Account</a>
        <div style="text-align:right">
            <?php
            if (isset($_SESSION['username'])) {
                echo "<p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
                    <p> <a href="index.php?logout='1'" style="color: red;">logout</a> </p>";

            } else {
                    echo "<a href="registration.php" class="right">Sign up here!</a>
                        <a href="login.php" class="right">Login Here!</a>";
            }
            ?>
        </div>
</div>
<div class="clearfix">
<div class="column">
  <div class="side column">
    <h2>News/Updates</h2>
    <h5>Full website launching soon!</h5>
    <div><img src="webpage.png" alt="WebPage" style="height:200px;"></div>
    <p>Stay tuned for more new/updates!</p>
    <h3>More Stuff</h3>
    <p>Talk about more stuff here</p>
    <div class="fakeimg" style="height:60px;">some links to places</div><br>
    <div class="fakeimg" style="height:60px;">some links to places</div><br>
    <div class="fakeimg" style="height:60px;">some links to places</div>
  </div>
  <div class="content column">
    <h2>Welcome to your account</h2>
    <h4>Here is your information</h4>
      <p>To make any changes to your profile type them in the textboxes below and then hit submit changes.</p>
    

<?php
$con=mysqli_connect("localhost","username","password","NAME OF THE DATABASE");
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$result = mysqli_query($con,"SELECT 'firstname','lastname','username','email','dob','phone','bio','destination' FROM NAME OF TABLE ");



while($row = mysqli_fetch_array($result))
{

        echo "<br />Your <b><i>Profile</i></b><br />";
        echo "<b>First name:</b> ". $row['firstname'];
        echo "<br /><b>Last name:</b> ".$row['lastname'];
        echo "<br /><b>Username:</b> ".$row['username'];
        echo "<br /><b>Email:</b> ".$row['email'];
        echo "<br /><b>Date of Birth:</b> ".$row['dob'];
        echo "<br /><b>Phone:</b> ".$row['phone'];
        echo "<br /><b>Bio:</b> ".$row['bio'];
        echo "<br /><b>Destination:</b> ".$row['destination'];
}


mysqli_close($con);
?>

//Code for changing their profile.

      <input type="text" name="changepassword" /><br />
      <input type="text" name="changedateofbirth" /><br />
      <textarea id="bio"
       rows="3"
       cols="80">Your Bio</textarea><br />
      <input type="text" name="changefavoritedestination" /><br />
      <input type="tel" name="changephone" /><br />
      <input type="text" name="changeusername" /><br />
      <input type="text" name="password" /><br />
      <input type="submit" value="Submit" style="margin-top: 10px;" />
  </div>
</div>
</div>

<div class="footer">
  <a href="aboutus.html">About Us</a>
  <a href="forum.html">Forums</a>
  <a href="contactus.html">Contact Us</a>
  <a href="reportabug.html">Report A Bug</a>
  <a href="careers.html">Careers</a>
</div>

</body>
</html>
