<?php
    if(isset($_SESSION['admin'])){
        header('Location:http://localhost/Hotel/public/Admin/display');
    }elseif(isset($_SESSION['user'])){
        header('Location:http://localhost/Hotel/public/User/book');
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <!-- <script src="https://cdn.tailwindcss.com"></script> -->
    <link rel="stylesheet" href="http://localhost/Hotel/public/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>

    <!--**********************navbar*************************-->
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
                        <a class="nav-link text-dark" href="#">Find Pestana CR7</a>
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
                        <a class="nav-link nv text-white  log" href="#">LOGIN</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nv text-white log " href="#">SIGN UP</a>
                    </li>
                </ul>

            </div>
        </div>
    </nav>
    <!--**********************End Of navbar*************************-->
    <!-- **************************Content***************************** -->
    <section  style="margin-top:100px;">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col col-xl-10">
                    <div class="card" style="border-radius: 1rem;">
                        <div class="row g-0">
                            <div class="col-md-6 col-lg-5  d-md-block">
                                <img src="http://localhost/Hotel/public/assets/image1.jpg"
                                    alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem;height:100%;" />
                            </div>
                            <div class="col-md-6 col-lg-7 d-flex align-items-center">
                                <div class="card-body p-4 p-lg-5 text-black">

                                    <form method="POST" action="http://localhost/Hotel/public/User/loog">

                                        <div class="d-flex align-items-center mb-3 pb-1">
                                            <span class="h1 fw-bold mb-0"><img src="http://localhost/Hotel/public/assets/logo.png" height="100px"; alt="" srcset=""></span>
                                        </div>

                                        <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Sign into your
                                            account</h5>
                                        <?php 
                                            if(isset($data['msg'])){
                                                echo '<span class="text-danger">'  .$data['msg']. '</span>';
                                            }
                                        ?>
                                        <div class="form-outline mb-4 text-start">
                                            <label class="form-label" for="form2Example17">Email address</label>
                                            <input type="email" id="form2Example17" class="form-control form-control-lg" name="email" />
                                        </div>

                                        <div class="form-outline mb-4 text-start">
                                            <label class="form-label" for="form2Example27">Password</label>
                                            <input type="password" id="form2Example27" class="form-control form-control-lg" name="password"/>
                                        </div>

                                        <div class="pt-1 mb-4">
                                            <button class="btn btn-dark btn-lg btn-block" name="login" type="submit">Login</button>
                                        </div>

                                        <a class="small text-muted" href="#!">Forgot password?</a>
                                        <p class="mb-5 pb-lg-2" style="color: #393f81;">Don't have an account? <a
                                                href="http://localhost/Hotel/public/User/Sign" style="color: #393f81;">Register here</a></p>
                                        <a href="#!" class="small text-muted">Terms of use.</a>
                                        <a href="#!" class="small text-muted">Privacy policy</a>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- **************************End Of Content***************************** -->
    <!-- ****************footer************** -->
    <footer class="footer row">
        <div class="col-12   col-lg-3 p-5">
            <img src="http://localhost/Hotel/public/assets/logo.png" width="120px" style="margin-bottom:10px;"> <br>
            <!-- <h4 class="text-white mb-10" >The Pestana CR7</h4> -->
            <p style="line-height: 2.1;font-weight: 400;">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ea
                vel temporibus nihil necessitatibus, adipisicing elit.
            </p>

        </div>
        <div class="col-12   col-lg-3 p-5 mt-4">
            <h4 class="text-white mb-5">Find us on the map</h4>
            <img src="http://localhost/Hotel/public/assets/footer-map.png" width="250px" alt="" srcset="">
        </div>
        <div class="col-12  col-lg-3 p-5 mt-4">
            <h4 class="text-white mb-5">Services</h4>
            <p> <i class="fa-solid fa-dumbbell  "></i> Fitness Center</p>
            <p><i class="fa-sharp fa-solid fa-water-ladder   "></i>Swiming Pool</p>
            <p><i class="fa-solid fa-shower   "></i>Shower</p>
            <p><i class="fa-solid fa-wifi   "></i>Free Wifi</p>
        </div>
        <div class="col-12  col-lg-3 p-5 mt-4">
            <h4 class="text-white mb-5">Subcribe to our newsletter</h4>
            <form action="">
                <input type="email" placeholder="Your Feedback please"> <br>
                <button type="submit ">Subscribe</button>
            </form>
        </div>
        <p class="text-center my-2">Copyright ©2022 All rights reserved | This template is made by Kalimu</p>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
    </script>
    <!-- ****************footer************** -->
</body>

</html>