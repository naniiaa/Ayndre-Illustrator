<!DOCTYPE html>

 <html>
    <head>
        <title>Ayndre Illustrator - Sign Up</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!--For icon-->
        <link rel="icon" type="image/x-icon" href="Images/logo.ico">

        <!--For styleSheets-->
        <link href="../CSS/signupPage.css" rel="stylesheet" />

        <!--For page font-->
        <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet'>

        <!--For webpage title font-->
        <link href='https://fonts.googleapis.com/css?family=Tourney' rel='stylesheet'>

        <!-- For jQuery-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

        <!-- For Bootstrap 5 and JavaScript-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </head>
    <body>
        <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3  border-bottom">
        <?php include './Views/nav.php'; ?>
          </header>
     
         <main>
            <div class="container-fluid">
                <!-- Section: Design Block -->
                <section class="background-radial-gradient overflow-hidden">
                    <div class="container px-4 py-5 px-md-5 text-center text-lg-start my-5">
                    <div class="row gx-lg-5 align-items-center mb-5">
                    <div class="col-lg-6 mb-5 mb-lg-0" style="z-index: 10">
                    <h1 class="my-5 display-5 fw-bold ls-tight" style="color: hsl(218, 81%, 95%)">
                        Welcome to Ayndre Illustrator!<br />
                        <span style="color: hsl(218, 81%, 75%)">Sign up to be a Member</span></h1>

                            <p class="mb-4 opacity-70" style="color: hsl(218, 81%, 85%)"></p>
                        
                            </div>
                                <div class="col-lg-6 mb-5 mb-lg-0 position-relative">
                                    <div class="card bg-glass">
                                        <div class="card-body px-4 py-5 px-md-5">

                                            <!-- First and Last Name input -->
                                            <form method="post">
                                                <!-- action="index.php?controller=signup"  -->
                                                <div class="row">
                                                    <div class="col-md-6 mb-4">
                                                        <div data-mdb-input-init class="form-outline">
                                                        <input type="text" id="fname" class="form-control" name="firstName" />
                                                        <label class="form-label" for="form3Example1">First name *</label>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6 mb-4">
                                                        <div data-mdb-input-init class="form-outline">
                                                        <input type="text" id="lname" class="form-control" name="lastName"/>
                                                        <label class="form-label" for="form3Example2">Last name *</label>
                                                        </div>
                                                    </div>
                                                </div>
                                
                                                <!-- Email input -->
                                                <div data-mdb-input-init class="form-outline mb-4">
                                                    <input type="email" id="email" class="form-control" name="email"/>
                                                    <label class="form-label" for="form3Example3">Email address *</label>
                                                </div>

                                                <!-- DOB input -->
                                                <div data-mdb-input-init class="form-outline mb-4">
                                                    <input type="date" id="date" class="form-control" name="DOB">
                                                    <label class="form-label" for="form3Example2">Date of birth *</label>
                                                </div>
                                
                                                <!-- Password input -->
                                                <div data-mdb-input-init class="form-outline mb-4">
<<<<<<< HEAD
                                                <input type="password" id="psswd" class="form-control" name="psswd"/>
=======
                                                <input type="password" id="password" name="password" class="form-control"  required minlength="8"/>
>>>>>>> origin/Bridjette
                                                <label class="form-label" for="form3Example4">Password *</label>
                                                </div>
                                
                                                <!-- Checkbox -->
                                                <div class="col">
                                                    <center>
                                                        <label>
                                                            <input type="checkbox" value="on" name="notifications"/> Send notifications
                                                        </label>
                                                    </center>
                                                </div>
                                
                                                <?php if (!empty($error)) echo "<p class='error'>$error</p>"; ?>
                                                
                                                <!-- Submit button -->
                                                <a onclick="getUserData()">
                                                    <button data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-block mb-4"> Sign up</button>
                                                </a>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
            </div>
         </main>
    </body>

    <!-- <footer>

          <center><span>© 2024 Ayndre Illustrator</span></center>
    
         <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
          <li class="ms-3"><a class="text-body-secondary" href="https://twitter.com/aayndre"><svg class="bi" width="24" height="24"><use xlink:href="#twitter"></use></svg></a></li>
          <li class="ms-3"><a class="text-body-secondary" href="https://www.instagram.com/aayndre/?hl=fr"><svg class="bi" width="24" height="24"><use xlink:href="#instagram"></use></svg></a></li>
         <li class="ms-3"><a class="text-body-secondary" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#facebook"></use></svg></a></li>
        </ul>
      </footer> -->


    <script>
function getUserData(){
    var path = "<?php echo $path; ?>";
    var fname =document.getElementById("fname").value;
    var lname=document.getElementById("lname").value; 
    var email = document.getElementById("email").value;
    var date= document.getElementById("date").value;
    var psswd = document.getElementById("psswd").value;

    window.open(`${path}?controller=customer&action=signup&email=${encodeURIComponent(email)}&psswd=${encodeURIComponent(psswd)}&fname=${encodeURIComponent(fname)}&lname=${encodeURIComponent(lname)}&date=${encodeURIComponent(date)}`);

}


        // function validatePsswd()
        // {
        //     console.log("blabla");
        //     let firstname = jQuery("#fname").val();
        //     let lastname = jQuery("#lname").val();
        //     let email = jQuery("#email").val();
        //     let dob = jQuery("#age").val();
        //     let psswd = jQuery("#password").val();

        //     if(firstname == "" || lastname == "" || email == ""|| dob == ""
        //     ||psswd == "")
        //     {
        //         alert("All fields with a '*' must be completed in order to 'Sign Up'.");
        //     }
        //     else
        //     {
                
        //         if(!isValidPassword(psswd))
        //         {
        //             alert("Password must contain at least 8 character, one uppercase letter, one lowercase letter, and one number or special character.");
        //         }

        //     }
        // }

        // function isValidPassword(psswd) 
        // {
        //     let result = /(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$/.exec(psswd);

        //     return result;
        // }

    </script>
 </html>
