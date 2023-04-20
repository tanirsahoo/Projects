<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project Annapurna || SharpSilver</title>
    <link rel="stylesheet" href="signupform.css">
    <?php include "links_connect.php" ;?>
</head>

<body>
    <section class="login_credentials_1" id="login_cred_1">
        <div class="login_credentials_4">
            <h1 class="login_credentials_2">
                Please fill the necessary information.
            </h1>
            <div class="login_credentials_3">
                <form action="submit1" method="post">
                    <p class="login_form_input_field" id="login_form_input_field_username_1">Username:</p>
                    <input type="text" name="username" id="username1" class="input_fields_loginform"><br>
                    <p class="login_form_input_field" id="login_form_input_field_aadhar_2">Enter your Aadhar Number:</p>
                    <input type="number" name="AadharNumber" id="aadharnumber1" class="input_fields_loginform"><br>
                    <p class="login_form_input_field" id="login_form_input_field_password_1">Password:</p>
                    <input type="password" name="password" id="password1" class="input_fields_loginform"><br>
                    <p class="login_form_input_field" id="login_form_input_field_password_2">Confirm Password:</p>
                    <input type="password" name="cpassword" id="cpassword1" class="input_fields_loginform"><br>
                    <button type="submit11" class="login_form_input_field_button">Sign-up</button>
                </form>
                <a href="index.php" class="login_credentials_5">Back to home page</a>
            </div>
        </div>
    </section>
</body>

</html>