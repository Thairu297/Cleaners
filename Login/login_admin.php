<?php
  session_start();

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="stylesheet" type="text/css" href="./login.css" />
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
        <title>Log in</title>
    </head>
    <body>
        <section class="header">
            <div class="container">
                <div class="flex-container">
                    <h2>Log in</h2>
                </div>
            <div class="container-in">
                <form action="login_logic_admin.php" method="post" class="login-email">
                    <p class="login-text">Log in with Username</p>
                    <div class="input-group">
                        <input 
                        type="name"
                        name="username" 
                        placeholder="Username"
                        autocomplete="off" 
                        required
                         />
                    </div>
                    <div class="input-group">
                        <input
                            type="password"
                            name="password"
                            placeholder="Password"
                            required
                        />
                    </div>
                    <div class="input-group">
                        <button type="submit"  name="submit" class="button-login">Log in</button>
                    </div>
                    <div >
                        <a href="../Homepage/home.html" class="signup">Back to home page</a>
                    </div>
                    <div >
                        <a href="login_choose.html" class="link_home">Back</a>
                    </div>
            </div>
                </form>
            </div>

        </section>
    </body>
</html>