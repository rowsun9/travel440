session_start()
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Contact Us</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="yourtravelcss.css">
    <style>
        form{
            width: 100%;
            display: block;
            font-size: 20px;
            text-align: center;
        }
 
       input {
          width: 400px;
          margin-bottom: 40px;
      }
 
       textarea {
          width: 400px;
          border: none;
          outline: none;
          height: 150px;
          color: black;
          margin-bottom: 20px;
          border: 1px solid #000000;
          text-align: center;
          size: 200px;
          margin-left: 100px;
      }
 
       input[type="text"],
       input[type="password"],
       input[type="tel"],
       input[type="email"],
       input[type="date"] {
          outline: none;
          height: 30px;
          color: black;
          font-size: 16px;
          margin-bottom: 50px;
          margin-left: 115px;
          border: 1px solid #000000;
          text-align: center;
          size: 100px;
      }
 
      input[type="submit"] {
          width: 50%;
          background-color: rgb(212, 106, 18);
          color: white;
          padding: 14px 20px;
          opacity: .6;
          margin: 8px 0;
          border: none;
          border-radius: 4px;
          cursor: pointer;
          margin-left: 50px;
      }
 
      input[type="submit"]:hover {
          background-color: #c4764a;
          }
 
 
  </style>
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
            <div class="content">
                <h2>Contact Us</h2>
                <h4>Use the form below to send us a message.</h4>
                <form>
                <input type="text" name="topic" placeholder="Tell us what the topic of your message is.." /><br />               
                <textarea id="contactmessage" name="contactmessage"
                rows="20"
                cols="800" placeholder="Type your message here.."></textarea><br />
                <input type="submit" value="Send" >
                </form>
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