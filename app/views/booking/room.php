<?php 
    // if(!isset($_SESSION['user'])){
    //     header('Location:http://localhost/Hotel/public/User/login');
    // }
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

    <!-- ****booking section******** -->
    <form action="http://localhost/Hotel/public/User/search" method="POST" style="margin-top:100px;">
        <div class="book d-flex items-center ">
            <div class="date" data-provide="datepicker">
                <label for="date">From</label>
                <input type="date" id="date" class="form-control d-block" max="2023-12-20"  name="date_entree" >
            </div>
            <div class="date" data-provide="datepicker">
                <label for="date">To</label>
                <input type="date" id="date" class="form-control d-block"  max="2023-12-20"  name="date_sortie" >
            </div>
            <div class="date" data-provide="datepicker">
                <label for="">Chmabre</label>
                <select class="form-select" aria-label="Default select example" id="chambre" name="type">
                    <option selected value="single">Lit single</option>
                    <option value="double">double</option>
                    <option value="suite">suite</option>
                </select>
            </div>
            <div class="date" data-provide="datepicker" id="children">
                <label for="">Suite</label>
                <select class="form-select" aria-label="Default select example" name="suite">
                    <option value="" selected></option>
                    <option >Standard suite rooms</option>
                    <option value="Junior">Junior</option>
                    <option value="Presidential suite">Presidential suite</option>
                    <option value="Penthouse suites">Penthouse suites</option>
                    <option value="Honeymoon suites">Honeymoon suites</option>
                    <option value="Bridal suites">Bridal suites</option>
                </select>
            </div>
            <div class="date" data-provide="datepicker" id="suite">
                <label for="">Person</label>
                <select class="form-select" aria-label="Default select example">
                    <option value="" selected></option>
                    <option >01</option>
                    <option value="02">02</option>
                    <option value="2">03</option>
                    <option value="3">04</option>
                    <option value="3">05</option>
                    <option value="3">06</option>
                </select>
            </div>
            <div class="date" data-provide="datepicker">
                <button type="submit" name="search" class="btn bknow">Search</button>
            </div>
        </div>

    </form>
    <!-- ****End of booking section******** -->
    <!-- *****************choose a room***************** -->
    <div class="text-center hrrr">
        <hr>
        <?php 
            if(isset($data['msg'])){
                echo '<h2 style="font-size: 20px; color:red;" >'. $data['msg'] .'</h2>';
            }
        ?>
        <h2 style="color: #363636; "> Choose a room</h2>
        <p class="para">Lorem ipsum, dolor sit amet consectetur adipisicing elit. In fugit harum numquam deleniti minus
            porro maiores atque iure,<br> hic similique dolorum laboriosam rerum impedit sapiente possimus explicabo
            velit!</p>
    </div>
    <div class="row my-2 justify-content-center">
    
        <?php
            foreach($data as $d){
        ?>
            <form action="http://localhost/Hotel/public/User/booking" method="POST" style="display:flex; justify-content:center;" >
            <div class="col-10 col-sm-3 imggg m-2" style="background: url('http://localhost/Hotel/public/Uppictures/<?= $d['image'] ?>');">
            
                <p class="card-title  text-white bg-dark p-2 frooooom" style="width:fit-content;margin: 0 auto;  ">From
                    <?= $d['price'] ?>/night</p>
                <div class="card ">
                    <div class="card-body bg-dark text-white" style="--bs-bg-opacity:0.9; height:200px; ">
                        <hr>
                        <h4><?= $d['type'] ?></h4>
                        <p class="card-text"><?= $d['description'] ?></p>
                        <input type="text" name='idd' placeholder="id user" value="<?= $d['id']  ?>"  style="display:none;"    > 
                        <input type="date"   value="<?=$_SESSION['in']?>"  name="entree"  style="display:none;"    > 
                        <input type="date"   value="<?=$_SESSION['out']?>"  name="sortie"  style="display:none;"    > 
                        <button  type="submit" name="book" class="BookNow text-center">Book Now</button>
                    </div>
                </div>
            </div>
        </form>
            <?php
        };
        ?>
        
        <!-- <div class="col-10 col-sm-3 imggg m-2">
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
        </div> -->

    </div>

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
    <!-- ****************footer************** -->


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
    </script>
    <script src="http://localhost/Hotel/public/JS/DynForm.js"></script>
</body>

</html>