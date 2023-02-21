<?php

    include('db1.php');
    $mymatric = $_SESSION['Matri'];
    // echo $mymatric;
    $details = "SELECT * FROM `myproject` WHERE `MATRIC NUMBER` = '$mymatric'" ;
    $fulldetail = mysqli_query($con, $details);
    $array = mysqli_fetch_array($fulldetail);
    // echo $array['First Name'];
    if($mymatric == NULL){
        header('location:login.php');
    }
    $_SESSION['mydept'] = $array['Department'];
    $otherdp = '';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User-Dashboard</title>
    <link rel="stylesheet" href="../links/bootstrap.min.css">
    <link rel="stylesheet" href="../links/style.css">
    <link rel="stylesheet" href="newcss.css">

    <link rel="shortcut icon" href="../images/download.jfif" type="image/x-icon"> 
</head>
<body >

    <!--Nav Bar-->
    <div class="nav-col myproject">
            <nav class="navbar navbar-light transparent">
                <div class="container-fluid">
                  <a class="navbar-brand" href="#">
                    <img src="../images/download.jfif" alt="logo" width="80" height="60" class="d-inline-block align-text-top logo">
                    <span class="ll">
                        <b>
                        LASU SIWES PROJECT <div class="falc">(Faculty Of Science)</div></b>
                    </span> 
                        
                  </a>
                  
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="successlog.php">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="courses.php">Check Courses</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="loggingout.php">Log Out</a>
                    </li>
                </ul>
            </div>
            </div>
            </nav> 
    </div> 

<div class="container profilelog contents">

    <table>
        <tr >
            <td>
                <h4 class="changefont">Full Name:</h4>
        <hr fill='green'>

            </td>
            <td>
                <h4  class="rightalign changefont">
                    <?php echo $array['Last Name'] .' '.$array['First Name'];?>
        <hr fill='green'>

                </h4>
            </td>
        </tr>
        <tr>
            <td>
                <h4>Matric number:<h4>
        <hr fill='green'>

            </td>

            <td>
                <h4  class="rightalign">
                    <?php echo $array['Matric Number'];?>
        <hr fill='green'>

                </h4>
            </td>
        </tr>

        <tr>
            <td>
                <h4>Department:<h4>
        <hr fill='green'>

            </td>

            <td>
                <h4  class="rightalign">
                    <?php echo $array['Department'];?>
        <hr fill='green'>

                </h4>
            </td>
        </tr>
    </table>
<br><br>
<h5>Check the courses offered in your department</h5>
<button class="mybutton1">
    <a class="nostyle" href="courses.php">Check Courses</a>
</button>
<br><br><br><br><br>
<hr>

<form action="courses.php" method="get">
    <label for="">Check courses for other Departments</label> 
    <input type="text" name="otherdp" placeholder="Enter Department" id="">
    
    <input type="submit" title="EXAMPLE: COMPUTER SCIENCE" value="Check">
    <?php

    if(isset($_SESSION['invalid'])){

        $inval =  $_SESSION['splitit'];
        echo("<b  class='red'>ENTRY IS INVALID</b> </br>");
            if(strpos($_SESSION['splitit'], 'BO')!== false){
                echo("<b  class='red'>DO YOU MEAN BOTANY</b>");
            }
            elseif(strpos($_SESSION['splitit'], 'BI') !== false){
                echo("<b class='red'>DO YOU MEAN BIOCHEMISTRY</b>");

            }
            elseif(strpos($_SESSION['splitit'], 'CH') !== false){
                echo("<b class='red'>DO YOU MEAN CHEMISTRY</b>");

            }
            elseif(strpos($_SESSION['splitit'], 'CO') !== false or strpos($_SESSION['splitit'], 'CSC') !== false){
                echo("<b class='red'>DO YOU MEAN COMPUTER SCIENCE</b>");

            }
            elseif(strpos($_SESSION['splitit'], 'CH') !== false){
                echo("<b class='red'>DO YOU MEAN FISHERIES</b>");

            }
            elseif(strpos($_SESSION['splitit'], 'CH') !== false){
                echo("<b class='red'>DO YOU MEAN MATHEMATICS</b>");

            }
            elseif(strpos($_SESSION['splitit'], 'CH') !== false){
                echo("<b class='red'>DO YOU MEAN MICROBIOLOGY</b>");

            }
            elseif(strpos($_SESSION['splitit'], 'CH') !== false){
                echo("<b class='red'>DO YOU MEAN PHYSICS</b>");

            }
            elseif(strpos($_SESSION['splitit'], 'CH') !== false){
                echo("<b class='red'>DO YOU MEAN ZOOLOGY</b>");

            }
            else{}

        $_SESSION['splitit'] = NULL;
        $_SESSION['invalid'] = NULL;
    }
?>
</form>

<hr>
<button class="mybutton1 flexit2" style="float:right">
    <a class="nostyle" href="loggingout.php">Log Out</a>
</button>


    

</div>





















<script src="../links/bootstrap.min.js"></script>
<script src="../links/index.js"></script>
</body>
</html>    
