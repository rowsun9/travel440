<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Welcome, to Your Travel</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        body {
            margin: 0;
            padding: 0;
            background: url(background2.jpg);
            background-size: cover;
            font-family: sans-serif;
        }

        .loginBox {
            position: absolute;
            top: 5%;
            left: 25%;
            transform: translate(-50%, -50%);
            width: 750px;
            height: 800px;
            padding: 20px 10px;
            box-sizing: border-box;
            background: rgba(0,0,0,.5);
        }

        .user {
            width: 100px;
            height: 100px;
            overflow: hidden;
            position: absolute;
            border-radius: 50%;
            top: -50px;
            left: 125px;
        }

        h2 {
            margin: 0;
            padding: 0 0 20px;
            color: #efed40;
            text-align: center;
        }

        .loginBox label {
            margin: 0;
            padding: 0;
            font-weight: bold;
            color: white;
        }

        .loginBox input {
            width: 100%;
            margin-bottom: 20px;
            opacity: .4;
        }

        .loginBox textarea {
            width: 100%;
            border: none;
            outline: none;
            height: 60px;
            color: black;
            margin-bottom: 20px;
            opacity: 0.3;
        }

        .loginBox input[type="text"],
        .loginBox input[type="password"],
        .loginBox input[type="tel"],
        .loginBox input[type="email"],
        .loginBox input[type="date"] {
            border: none;
            outline: none;
            height: 30px;
            color: black;
            font-size: 16px;
            margin-bottom: 20px;
        }

        .loginBox input[type="submit"] {
            width: 100%;
            background-color: #4CAF50;
            color: white;
            padding: 14px 20px;
            opacity: .3;
            margin: 8px 0;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

            .loginBox input[type="submit"]:hover {
            background-color: #45a049;
            }

        .loginBox a {
            color: #fff;
            font-size: 14px;
            font-weight: bold;
            text-decoration: none;
        }
        .loginBox p {
            color: #fff;
            font-size: 25px;
        }
    </style>
</head>
<body>

    <div class="loginBox">
        <form style="display:block" method="post" action="register.php">
            <?php include('errors.php'); ?>
            <h2>Sign Up Form</h2>
            <label>
                First Name:
            </label>
                <input type="text" placeholder="First Name" name="firstname" value="<?php echo $firstname; ?>" />
                <label>
                    Last Name:
                </label>
                <input type="text" placeholder="Last Name" name="lastname" value="<?php echo $lastname; ?>" />
            
                <label>
                    Date of Birth:
                </label>
                <input type="date" placeholder="Date of Birth" name="dateofbirth" value="<?php echo $dob; ?>" >
            
                <label>
                    Phone Number:
                </label>
                <input type="tel" name="phone"  placeholder="Phone Number" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}" value="<?php echo $phone; ?>" >
            
                <label>
                    Email:
                </label>
                <input type="email" placeholder="Enter Email" name="email" value="<?php echo $email; ?>" >
            
                <label>
                    Username:
                </label>
                <input type="text" placeholder="Enter a Username" name="username" value="<?php echo $username; ?>">
            
                <label>
                    Password:
                </label>
                <input type="text" placeholder="Password" name="password" value="<?php echo $password; ?>" >
            
                <label>
                    Reenter Password:
                </label>
                <input type="text" placeholder="Reenter Password" name="password2" value="<?php echo $password2; ?>">
            
                <label>
                    About Me/Bio:<br />
                </label>
                <textarea id="bio"
                          rows="3"
                          cols="80" placeholder="Tell us about yourself.." value="<?php echo $bio; ?>" ></textarea>
            
                <label>
                    Favorite Destination:
                </label>
                <input type="text" placeholder="Favorite Destination" name="destination" value="<?php echo $destination; ?>" >
            
            <input type="submit" value="Register" name="reg_user" />
            <p>
  		        Already a member? <a href="login.php">Sign in</a>
        	</p>
        </form>
    </div>

</body>
</html>