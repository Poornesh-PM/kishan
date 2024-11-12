<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Login Form</title>
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <link rel="stylesheet" href="style.css">
    </head>
    <style>body {
    background-image: url('images/library.jpg');
    background-size: cover; /* Make the background cover the entire page */
    background-position: center; /* Center the background */
    height: 100vh; /* Full height */
    margin: 0;
    display: flex;
    justify-content: center; /* Center the login form horizontally */
    align-items: center; /* Center the login form vertically */
    font-family: Arial, sans-serif;
}

/* Styling for the login container */
.login-container {
    width: 100%;
    max-width: 400px; /* Set a max width for the login form */
    padding: 20px;
    background-color: rgba(255, 255, 255, 0.8); /* Semi-transparent white background for the form */
    border-radius: 10px; /* Rounded corners for the form */
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3); /* Shadow around the form */
}

/* Header styling */
.login-form-3 h3 {
    text-align: center;
    color: #0062cc; /* Blue color for the heading */
    margin-bottom: 20px;
}

/* Form Group Styling */
.form-group label {
    color: #333; /* Dark text color for labels */
    font-size: 14px;
    margin-bottom: 5px;
}

/* Form control styling */
.form-control {
    border-radius: 5px;
    border: 1px solid #ccc; /* Light gray border */
    padding: 10px;
    font-size: 14px;
}

/* Styling for the Submit button */
.btnSubmit {
    font-weight: 600;
    color: #fff;
    background-color: #0062cc; /* Blue background for the button */
    border: none;
    padding: 10px;
    width: 100%;
    border-radius: 5px;
    cursor: pointer;
    font-size: 16px;
    margin-top: 20px;
}

/* On hover, change button background color */
.btnSubmit:hover {
    background-color: #004b99; /* Darker blue for hover effect */
}

/* Red error messages styling */
label[style="color:red;"] {
    font-size: 12px;
    display: block;
    margin-top: 5px;
}

/* Styling for radio buttons */
input[type="radio"] {
    margin-right: 10px;
}

/* Media query for responsive design */
@media (max-width: 768px) {
    .login-container {
        width: 90%; /* On smaller screens, make the login container take up more width */
    }
}
</style>
    <body>

    <?php
    $emailmsg = "";
    $pasdmsg = "";
    $msg = "";

    $ademailmsg="";
    $adpasdmsg="";

    if (!empty($_REQUEST['ademailmsg'])) {
        $ademailmsg = $_REQUEST['ademailmsg'];
    }
    if (!empty($_REQUEST['adpasdmsg'])) {
        $adpasdmsg = $_REQUEST['adpasdmsg'];
    }

    if (!empty($_REQUEST['emailmsg'])) {
        $emailmsg = $_REQUEST['emailmsg'];
    }

    if (!empty($_REQUEST['pasdmsg'])) {
        $pasdmsg = $_REQUEST['pasdmsg'];
    }
    if (!empty($_REQUEST['msg'])) {
        $msg = $_REQUEST['msg'];
    }

    ?>

    <div class="container login-container">
        <div class="row"><h4><?php echo $msg ?></h4></div>
        <div class="row">
            <div class="col-md-12 login-form-3">
                <h3>Login</h3>
                <form action="loginadmin_server_page.php" method="get">
                  
                    <div class="form-group">
                        <label for="login_email"> Email *</label>
                        <input type="text" class="form-control" name="login_email" id="login_email" placeholder=" Email *" required />
                    </div>
                    <label style="color:red;">*<?php echo  $ademailmsg?></label>
                    

                    <div class="form-group">
                        <label for="login_password"> Password *</label>
                        <input type="password" class="form-control" name="login_password" id="login_password" placeholder=" Password *" required />
                    </div>
                    <label style="color:red;">*<?php echo $adpasdmsg?></label>
                    

                    <!-- Radio buttons for Admin or Student login -->
                    <div class="form-group">
                        <label>Select Login Type</label><br>
                        <input type="radio" name="user_type" value="admin" id="admin" required /> Admin
                        <input type="radio" name="user_type" value="student" id="student" required /> Student
                    </div>

                    <!-- Submit button -->
                    <div class="form-group">
                        <input type="submit" class="btnSubmit" value="Login" />
                    </div>
                </form>
            </div>
        </div>
    </div>
    </body>
</html>
