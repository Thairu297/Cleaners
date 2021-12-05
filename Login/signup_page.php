<?php
  session_start();

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="stylesheet" type="text/css" href="./signup.css" />
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width= , initial-scale=1.0" />
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link
            href="https://fonts.googleapis.com/css2?family=Arima+Madurai:wght@200;300;400;800&family=Katibeh&display=swap"
            rel="stylesheet"
        />
        <link
            rel="stylesheet"
            href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css"
        />
        <link
            rel="stylesheet"
            href="path/to/font-awesome/css/font-awesome.min.css"
        />
        <title>Sign up</title>
    </head>
    <body>
        <section class="header">
            <div class="container">
                <div class="flex-container">
                    <h2>Sign up</h2>
                </div>
            <div>
                <form action="signup.php" method="post"  class="login-email">
                    <p class="login-text">Sign up with email</p>
                    <div class="input-group">
                        <input 
                        type="name"
                        name="name" 
                        placeholder="Full Name" 
                        autocomplete="off"
                        required />
                    </div>
                    <div class="input-group">
                        <input
                            type="email"
                            name="email"
                            placeholder="Email"
                            autocomplete="off"
                            required
                        />
                    </div>
                    <div class="input-group">
                        <input
                            type="tel"
                            name="phone_number"
                            placeholder="0711111111"
                            pattern= "[0-9]{10}"
                            autocomplete="off"
                            required
                        />
                    </div>
                    <div class="input-group">
                        <input
                            type="password"
                            name="password"
                            placeholder="Password"
                            autocomplete="off"
                            required
                        />
                    </div>
                    <div class="input-group">
                        <input
                            type="password"
                            name="confirmcode"
                            placeholder="Confirm password"
                            autocomplete="off" 
                            required
                        />
                    </div>
                    <div class="input-group">
                        <button type="submit" name="submit" class="button-login">Save</button>
                    </div>
                    <div >
                        <a href="login_page.php" class="signup">Back to login</a>
                    </div>
            </div>
                </form>
            </div>
        </section>
    </body>
</html>