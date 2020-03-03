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
                <h2>Careers @ Your Travel</h2>
                <p>We are not actively seeking employees at this time. Thank you for your interest in joining us and please continue to check back for future updates.</p>
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