<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/welcome.css">
    <title>Welcome Page</title>
</head>
<body>
    <nav id="home-nav">
        <a href="">Home</a>
        <a href="about.php">About</a>
    </nav>
    <div id="welcome-container">
        <div class="welcome-header">
            <!--the name below is just a placeholder, may be permanent or not-->
            <h2>MedicaMystic Dispensary</h2>
            <span id="page-headline"><b>Get your meds, with no stress!</b></span>
            <br>
            <span id="page-subheadline">Sign in or register to access the drug dispensary</span>
            <br><br>
            <div class="welcome-options">
                <!--call to action-->
                <a class="btn-links btn-register" href="register.php">Register</a>
                <a class="btn-links btn-sign_in" href="sign_in.php">Sign In</a>
            </div>
        </div>
        <br><br>
        <div id="header-image">
            <!--header-image-->
            <img class="dispensary-logo" alt="Dispensary Logo" src="./form_icons/laboratory.jpg">
        </div>
    </div>
</body>
</html>