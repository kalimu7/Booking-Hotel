<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>guests</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="http://localhost/Hotel/public/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <nav class="navbar navbar-expand-lg fixed-top" style="z-index:10;">
        <div class="container">
            <a class="navbar-brand" href="#"><img src="http://localhost/Hotel/public/assets/logo.png" width="120px"
                    alt=""></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link text-dark " href="#">Find Pestana CR7</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark " href="#">Community</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark " href="#">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark " href="#">About </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nv text-white  log logbtn" href="#">LOGIN</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nv text-white log signbtn" href="#">SIGN UP</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nv text-white log logout" href="http://localhost/Hotel/public/User/out">Log
                            out</a>
                    </li>
                    <?php
                            if(isset($_SESSION['user']) || isset($_SESSION['admin'])){
                            echo "<script type=\"text/javascript\">

                            document.querySelector('.logbtn').style.display='none';
                            document.querySelector('.signbtn').style.display='none';
                            document.querySelector('.logout').style.display='block';
                            
                             </script>";
                            }else{
                                echo "<script type=\"text/javascript\">

                            document.querySelector('.logbtn').style.display='block';
                            document.querySelector('.signbtn').style.display='block';
                            document.querySelector('.logout').style.display='none';
                            
                             </script>";
                            }
                    ?>
                </ul>

            </div>
        </div>
    </nav>
    <div class="container " style="margin-top:100px;">
        <form action="http://localhost/Hotel/public/User/addguest" method="POST">
        
                <h3 class="text-center">Please Enter Information of your guests</h3>
                <div class="text-center">
                    <input name="length" type="Number" id="invit" min="1" max="6" style="width:500px;">
                </div>
                <div class="col-md-5 container-invit d-flex flex-column justify-content-center">

                </div>
                <button type="submit" name="ajoute">Submit</button>
        </form>
    </div>






    <script src="http://localhost/Hotel/public/JS/guest.js"></script>
</body>

</html>