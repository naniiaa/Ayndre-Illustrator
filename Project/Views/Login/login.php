<?php
    $path = $_SERVER['SCRIPT_NAME'];
?>

<!DOCTYPE html>
<html>
<head>
    <title> Log In - Ayndre Illustrator </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- For icon -->
    <link rel="icon" type="image/x-icon" href="Images/logo.ico">

    <!--For styleSheets-->
    <link rel="stylesheet" href=".\Styles\homeStyleSheet.css">
    <link rel="stylesheet" href=".\Styles\generalStyleSheet.css">
    <link rel="stylesheet" href=".\Styles\logInStyleSheet.css">
    <link href="../CSS/loginPage.css" rel="stylesheet" />

    <!-- For page font -->
    <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Tourney' rel='stylesheet'>

    <!-- For Bootstrap 5 and JavaScript -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>
    <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 border-bottom">
        <?php include './Views/nav.php'; ?>
    </header>

    <main>
        <div class="container-fluid">
            <section class="background-radial-gradient overflow-hidden">
                <div class="container px-4 py-5 px-md-5 text-center text-lg-start my-5">
                    <div class="row gx-lg-5 align-items-center mb-5">
                        <div class="col-lg-6 mb-5 mb-lg-0" style="z-index: 10">
                            <h1 class="my-5 display-5 fw-bold ls-tight" style="color: hsl(218, 81%, 95%)">
                                Welcome back<br />
                                <span style="color: hsl(218, 81%, 75%)">to Ayndre Illustrator!</span>
                            </h1>
                            <p class="mb-4 opacity-70" style="color: hsl(218, 81%, 85%)"></p>
                        </div>

                        <div class="col-lg-6 mb-5 mb-lg-0 position-relative">
                            <div class="card bg-glass">
                                <div class="card-body px-4 py-5 px-md-5">
                                <form method="post">
                                <!-- action="User.php" -->
                                    
                                    <!-- Email input action="login" -->
                                    <div data-mdb-input-init class="form-outline mb-4">
                                    <input type="email" id="email" class="form-control" />
                                    <label class="form-label" for="form3Example3">Email address</label>
                                    </div>
                    
                                    <!-- Password input -->
                                    <div data-mdb-input-init class="form-outline mb-4">
                                    <input type="password" id="psswd" class="form-control" />
                                    <label class="form-label" for="form3Example4">Password</label>
                                    </div>

                                    <input type="checkbox" id="admin" name="isAdmin" value="1">
                                    <label for="admin">Login as Admin</label>
                                    
                                    <?php if (!empty($error)) echo "<p class='error'>$error</p>"; ?>

                                    <!-- Checkbox -->
                                    <div class="col">
                                        <!-- Simple link -->
                                        <a href="#!"><center>Forgot password?</center></a>
                                      </div>
                    
                                    <!-- Submit button -->
                                     <a onclick="isAdmin()">
                                        <button  data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-block mb-4">
                                    <form action="index.php?controller=login" method="POST">
                                        <!-- Email input -->
                                        <div class="form-outline mb-4">
                                            <input type="email" id="email" name="email" class="form-control" required />
                                            <label class="form-label" for="email">Email address</label>
                                        </div>

                                        <!-- Password input -->
                                        <div class="form-outline mb-4">
                                            <input type="password" id="password" name="password" class="form-control" required />
                                            <label class="form-label" for="password">Password</label>
                                        </div>

                                        <!-- Admin checkbox -->
                                        <div class="form-check mb-4">
                                            <input type="checkbox" class="form-check-input" id="isAdmin" name="isAdmin" value="1">
                                            <label class="form-check-label" for="isAdmin">Login as Admin</label>
                                        </div>

                                        <!-- Error message -->
                                        <?php if (!empty($error)) echo "<p class='error'>$error</p>"; ?>

                                        <!-- Submit button -->
                                        <button type="submit" class="btn btn-primary btn-block mb-4">
                                            Log in
                                        </button>
                                    </form>

                                    <div class="col">
                                        <a href="#!" class="d-block text-center">Forgot password?</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </div>
                    </section>
            </div>
         </main>
    </body>

    <script>

        var path = "<?php echo $path; ?>";

        function isAdmin() 
        {
            var checkBox = document.getElementById("admin");
            console.log(checkBox.checked);

            var email = document.getElementById("email").value;
            var psswd = document.getElementById("psswd").value;

            if (checkBox.checked == true)
            {
                var pathNextPage = `${path}?controller=admin&action=login&useremail=${encodeURIComponent(email)}&password=${encodeURIComponent(psswd)}`;
            } 
            else 
            {
                var pathNextPage = `${path}?controller=customer&action=login`;
            }

            window.location.href = pathNextPage;
                return `${path}?controller=admin&action=login&useremail=${encodeURIComponent(email)}&password=${encodeURIComponent(psswd)}`;;
                window.open(`${path}?controller=admin&action=login&useremail=${encodeURIComponent(email)}&password=${encodeURIComponent(psswd)}`);
            } 
            else 
            {
                window.open(`${path}?controller=customer&action=login&useremail=${encodeURIComponent(email)}&password=${encodeURIComponent(psswd)}`);
            }
			}

    </script>
 </html>