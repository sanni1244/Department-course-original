<script>
    history.pushState(null, document.title, location.href);
    window.addEventListener('popstate', function (event){
    history.pushState(null, document.title, location.href);
});
</script>
<?php
include("db1.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In</title>
    <link rel="stylesheet" href="../links/bootstrap.min.css">
    <link rel="stylesheet" href="../links/style.css">
    <link rel="shortcut icon" href="../images/download.jfif" type="image/x-icon">
</head>
<body>
    <div>
        <!--Nav Bar-->
        <div class="nav-col myproject" >
            <nav class="navbar navbar-light transparent">
            <div class="container-fluid">
                  <a class="navbar-brand" href="../index.php">
                    <img src="../images/download.jfif" alt="lasu logo" width="80" height="60" class="d-inline-block align-text-top logo">
                    <span class="ll">
                        <b >LASU SIWES PROJECT <div class="falc">(Faculty Of Science)</div></b>
                    </span>
                  </a>
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="../index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../pages/login.php">Log In</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../pages/registration.php">Register</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="../pages/Contact.php">Contact</a>
                    </li>
                </ul>
            </div>
            
           


                </div>
        
            </nav>
<br>
        </div>
        <!--End of nav-->
        <!--content----form-->
        <span class="hidden">LASU SIWES PROJECT</span>

        <div class="container contents">

            <div>
                <fieldset class="leg">
                    <legend class="b">Log In</legend>
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST" autocomplete="on" accept-charset="">
                        <div class="mb-3">
                            <label for="fname" class="form-label b">First Name</label>
                            <input type="text"  id="id1" class="form-control" name="firstname"><span  class="red"><?php  echo $fnameErr ?></span>
                        <br>
                        <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label b">Matric Number</label>
                          <input type="number" id="id4" placeholder="Enter your 9 digit matric number" class="form-control" name="matricno"><span class="red"><?php echo $matricErr, $matricErrs ?> </span>
                        </div>
                        
                        </div>
                        <div class="mb-3 form-check">
                          <input type="checkbox" class="form-check-input" id="exampleCheck1">
                          <label class="form-check-label" for="exampleCheck1">Check me out</label>
                        </div>
                        <button type="submit" name="submitit" class="btn btn-primary">Submit</button>
                      </form>
                </fieldset>
            </div>
        </div>
        <div></div>
        <div class="contents"></div>
        <!--Footer-->
            <div class="foot">
                <img src="../images/logo2.png" alt="Lasu logo">

                <div class="notes">
                    Established in 1983 by the enabling law of Lagos State with the vision of pursuing the advancement of learning and academic excellence. The university has been unrelenting in the pursuit of its mission of becoming a citadel of learning, a community with the trademark of excellence in teaching, research and service to humanity.
                </div>
            </div>

    </div>
    <script>
        // Make values remain after sign in failure
        document.getElementById("id1").setAttribute("value", "<?php Print($fname); ?>");
        document.getElementById("id2").setAttribute("value", "<?php Print($lname); ?>");
        document.getElementById("id3").setAttribute("value", "<?php Print($department); ?>");
        document.getElementById("id4").setAttribute("value", "<?php Print($matric_no); ?>");

    </script>
    <script src="../links/bootstrap.min.js"></script>
    <script src="../links/index.js"></script>
    
    
</body>
</html>
