<?php 
    if(!isset($_SESSION['user'])){
        header('Location:http://localhost/Hotel/public/User/login');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Booking Page</title>
    <link rel="stylesheet" href="http://localhost/Hotel/public/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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
                        <a class="nav-link nv text-white log logout" href="http://localhost/Hotel/public/User/out">Log out</a>
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
    <div id="carouselExampleIndicators" class="carousel slide" style="z-index:5;" data-bs-ride="true">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="http://localhost/Hotel/public/assets/1.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="http://localhost/Hotel/public/assets/2.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="http://localhost/Hotel/public/assets/3.jpg" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <!-- ****booking section******** -->
    <form action="">
        <div class="book d-flex items-center ">
            <div class="date" data-provide="datepicker">
                <label for="date">From</label>
                <input type="date" id="date" class="form-control d-block" 
                    max="2023-12-20">
            </div>
            <div class="date" data-provide="datepicker">
                <label for="date">To</label>
                <input type="date" id="date" class="form-control d-block" 
                    max="2023-12-20">
            </div>
            <div class="date" data-provide="datepicker">
                <label for="">Chmabre</label>
                <select class="form-select" aria-label="Default select example" id="chambre">
                    <option selected value="0">Lit single</option>
                    <option value="1">double</option>
                    <option value="2">suite</option>
                </select>
            </div>
            <div class="date" data-provide="datepicker" id="children">
                <label for="">Suite</label>
                <select class="form-select" aria-label="Default select example">
                    <option selected>Standard suite rooms</option>
                    <option value="1">Junior</option>
                    <option value="2">Presidential suite</option>
                    <option value="3">Penthouse suites</option>
                    <option value="4">Honeymoon suites</option>
                    <option value="5">Bridal suites</option>
                </select>
            </div>
            <div class="date" data-provide="datepicker" id="suite">
                <label for="">Person</label>
                <select class="form-select" aria-label="Default select example">
                    <option selected>01</option>
                    <option value="1">02</option>
                    <option value="2">03</option>
                    <option value="3">04</option>
                    <option value="3">05</option>
                    <option value="3">06</option>
                </select>
            </div>
            <div class="date" data-provide="datepicker">
                <button type="button" class="btn bknow">Search</button>
            </div>
        </div>
        
    </form>
    <!-- ****End of booking section******** -->
    <!-- *****************More content************* -->
    <?php
    
    ?>
    <div class="bg-image d-flex justify-content-center align-items-center">
        <div class="col-sm-8">
            <div class="card bg-dark text-white" style="--bs-bg-opacity: .8; height:400px;">
                <div class="card-body text-center d-flex flex-column justify-content-between">
                    <hr>
                    <div>
                        <h2 class="card-title fs-1 " style="font-family:Arial;">The Vocation Heaven</h2>
                        <p class="card-text">With supporting text below as a natural lead-in to additional content.With
                            supporting text below as a natural lead-in to additional content.</p>
                    </div>
                    <a href="#" class="btn more">Road More</a>
                </div>
            </div>
        </div>
    </div>
    <?php
    
    ?>
    <!-- *****************More content************* -->
    <!-- *****************choose a room***************** -->
    <div class="text-center hrrr">
        <hr>
        <h2 style="color: #363636; "> Choose a room</h2>
        <p class="para">Lorem ipsum, dolor sit amet consectetur adipisicing elit. In fugit harum numquam deleniti minus
            porro maiores atque iure,<br> hic similique dolorum laboriosam rerum impedit sapiente possimus explicabo
            velit!</p>
    </div>
    <div class="row my-2 justify-content-center">
        <div class="col-10 col-sm-3 imggg m-2">
            <p class="card-title  text-white bg-dark p-2 frooooom" style="width:fit-content;margin: 0 auto;  ">From
                $150/night</p>
            <div class="card ">
                <div class="card-body bg-dark text-white" style="--bs-bg-opacity:0.9; height:200px; ">
                    <hr>
                    <h4>Deluxe Room</h4>
                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                    <a href="#" class="BookNow text-center">Book Now</a>
                </div>
            </div>
        </div>
        <div class="col-10 col-sm-3 imggg m-2">
            <p class="card-title  text-white bg-dark p-2 frooooom" style="width:fit-content;margin: 0 auto;  ">From
                $150/night</p>
            <div class="card ">
                <div class="card-body bg-dark text-white" style="--bs-bg-opacity:0.9; height:200px; ">
                    <hr>
                    <h4>Double suite</h4>
                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                    <a href="#" class="BookNow text-center">Book Now</a>
                </div>
            </div>
        </div>
        <div class="col-10 col-sm-3 imggg m-2">
            <p class="card-title  text-white bg-dark p-2 frooooom" style="width:fit-content;margin: 0 auto;  ">From
                $150/night</p>
            <div class="card ">
                <div class="card-body bg-dark text-white" style="--bs-bg-opacity:0.9; height:200px; ">
                    <hr>
                    <h4>Single Room</h4>
                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                    <a href="#" class="BookNow text-center">Book Now</a>
                </div>
            </div>
        </div>

    </div>
    <!-- ******************about us***************** -->
    <div class="text-center hrrr">
        <hr>
        <h2 style="color: #363636; "> About us</h2>
    </div>
    <div class="container">
        <div class="row justify-content-center gap-6" style="margin:80px 0; ">
            <div class="col-12 col-sm-6 d-flex flex-column justify-content-between">
                <h3 style="color: #363636; margin-top:10px; font-size: 48px;"> A Place to Remember</h3>
                <p class="about">
                    The Pestana CR7 Marrakech is a new hotel in Marrakesh,Morocco. Located on M Avenue, it is a
                    sophisticated oasis in the exotic atmosphere of one of the most iconic cities in Africa, right next
                    to
                    the desert.
                    A short distance from the city’s old town, the new Pestana CR7 Marrakech offers an exceptional
                    comfort
                    and an atmosphere inspired by Moroccan customs, with bright, , spacious and romantic environments,
                    perfect for a stay fit for a king.
                </p>
                <a href="#" class="abouta text-center" style="margin-bottom:20px;">Book Now</a>
            </div>
            <div class="col-12  col-sm-6">
                <img src="http://localhost/Hotel/public/assets/about.jpg" width="450px" height="380px" alt="">
            </div>

        </div>
    </div>
    <!-- ******************End about us***************** -->
    <!-- ****************footer************** -->
    <footer class="footer row">
        <div class="col-12   col-lg-3 p-5">
            <img  src="http://localhost/Hotel/public/assets/logo.png" width="120px" style="margin-bottom:10px;"> <br>
            <!-- <h4 class="text-white mb-10" >The Pestana CR7</h4> -->
            <p style="line-height: 2.1;font-weight: 400;">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ea vel temporibus nihil necessitatibus, adipisicing elit.
            </p>
            
        </div>
        <div class="col-12   col-lg-3 p-5 mt-4">
            <h4 class="text-white mb-5" >Find us on the map</h4>
            <img src="http://localhost/Hotel/public/assets/footer-map.png" width="250px"  alt="" srcset=""> 
        </div>
        <div class="col-12  col-lg-3 p-5 mt-4">
            <h4 class="text-white mb-5" >Services</h4>
             <p> <i class="fa-solid fa-dumbbell  "></i> Fitness Center</p>
             <p><i class="fa-sharp fa-solid fa-water-ladder   "></i>Swiming Pool</p>
             <p><i class="fa-solid fa-shower   "></i>Shower</p>
             <p><i class="fa-solid fa-wifi   "></i>Free Wifi</p>
        </div>
        <div class="col-12  col-lg-3 p-5 mt-4">
            <h4 class="text-white mb-5" >Subcribe to our newsletter</h4>
            <form action="">
            <input type="email" placeholder="Your Feedback please" > <br>
            <button type="submit ">Subscribe</button>
            </form>
        </div>
        <p class="text-center my-2">Copyright ©2022 All rights reserved | This template is made by Kalimu</p>
    </footer>
    <!-- ****************footer************** -->


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
    </script>
    <script src="http://localhost/Hotel/public/JS/DynForm.js"></script>
</body>

</html>