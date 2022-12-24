<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="http://localhost/Hotel/public/css/style.css">
    <title>Add new Room</title>
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
    <div class="container" style=" margin-top:100px;">
        <form action="http://localhost/Hotel/public/Admin/addroom" method="POST"
            enctype="multipart/form-data" class="mx-auto" style="width:400px;">
            <?php
            if(isset($data['msg'])){
                echo '<span class=" text-danger">'.$data['msg'].'</span>';     
            }
            if(isset($data['message'])){
                echo '<span class="text-success">'.$data['message'].'</span>'; 
            }
            ?>
                <div class="mb-3">
                <h2>Add New Room</h2>
                    <label for="chambre">Room Type</label>
                    <select class="form-select" aria-label="Default select example " id="room" name="room">
                        <option selected value="single">Lit single</option>
                        <option value="double">double</option>
                        <option value="suite">suite</option>
                    </select>
                </div>
                <div class="mb-3" id="suite">
                    <label for="">Suite</label>
                    <select class="form-select" aria-label="Default select example " name="suite">
                        <option selected>Standard suite rooms</option>
                        <option value="Junior">Junior</option>
                        <option value="Presidential suite">Presidential suite</option>
                        <option value="Penthouse suites">Penthouse suites</option>
                        <option value="Honeymoon suites">Honeymoon suites</option>
                        <option value="Bridal suites">Bridal suites</option>
                    </select>
                </div>
            
            <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Capcity</label>
            <input type="text" name="capacity" class="form-control" id="capacity" readonly>
            </div>
            

            <label for="">Person</label>
            <select class="form-select" aria-label="Default select example" name="capacity" id="Person" >
                <option value="10"></option>
                <option value="1">01</option>
                <option value="2">02</option>
                <option value="3">03</option>
                <option value="4">04</option>
                <option value="5">05</option>
                <option value="6">06</option>
            </select>

            

            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Price</label>
                <input type="text" name="price" class="form-control" id="exampleInputPassword1">
            </div>

            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Description</label>
                <input type="text" name="description" class="form-control" id="exampleInputPassword1">
            </div>

            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Room Image</label>
                <input type="file" name="image" class="form-control" id="exampleInputPassword1">
            </div>

            <div class="d-flex my-3">
                <button type="submit" name="submit" class="btn btn-primary mx-3">ADD New Room</button> <br>
                <br>
                <a class="btn btn-danger" href="">back to dashboard</a>
            </div>
        </form>
    </div>
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

    <script src="http://localhost/Hotel/public/JS/Add.js"></script>

</body>
</html>