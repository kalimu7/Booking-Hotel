<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        *{
            box-sizing: border-box;
            margin:0;
            padding:0;
        }
    </style>

</head>

<body>
    <div class="  w-full min-h-screen">
        <!--**********************navbar*************************-->
        <div class=" bg-white flex justify-between w-full h-24 items-center ">
            <img class="ml-5" src="http://localhost/Hotel/public/assets/logo.png" width="100px">
            <ul class="flex">
                <li class="pr-10 max-[960px]:pr-3 "><a class="font-bold" href="#">Find Pestana CR7</a></li>
                <li class="pr-10 max-[960px]:pr-3 "><a class="font-bold" href="#">Community</a></li>
                <li class="pr-10 max-[960px]:pr-3 "><a class="font-bold" href="#">Blog</a></li>
                <li class="pr-10 max-[960px]:pr-3 "><a class="font-bold" href="#">About Pestana CR7</a></li>
            </ul>
            <div class="flex">
                <a class="block text-white py-3 px-6 rounded mr-10 bg-orange-500" href="">Login</a>
                <a class="block p-3 mr-10 hover:bg-orange-500 hover:text-white py-3 px-6 hover:rounded "
                    href="">Register</a>
            </div>
        </div>
        <!--**********************End Of navbar*************************-->
        <!-- **************************Content***************************** -->
        <div class="flex justify-between bg-slate-100 w-full max-[938px]:flex-col  flex"  style="height:calc(100vh - 96px);  "  >
            <div class="pt-11 pl-14 w-1/2 max-[938px]:w-full max-[938px]:my-10 max-[938px]:px-40 " >
                <form action="" method="">
                    <h1 class="mb-1 text-xl">Register To Pestana CR7</h1>
                    <p class="mb-8 text-slate-400">Join to Pestana you will get the best recommendation for <br>rent house in near of
                        you.</p>
                    <div class="w-96 flex justify-between mb-3">
                        <a href="#" class="border-b-8 border-orange-500 ">Register</a>
                        <a href="#" class="hover:border-b-8 border-orange-500 ">Login</a>

                    </div>
                    <hr class="w-96 mb-2 h-px bg-gray-900 border-2 " >
                    <label class="mt-2" for="fullname">Your Full Name*</label> <br>
                    <input class=" border  mb-1 w-96" type="text" name="fullname" placeholder="Full name"> <br>
                    <label for="fullname">Email*</label> <br>
                    <input class="border mb-1 w-96" type="text" name="email" placeholder="Email"> <br>
                    <label for="fullname">Password*</label> <br>
                    <input class="border mb-1 w-96" type="password" name="password" placeholder="Password"> <br>
                    <button class="w-96 bg-orange-500 mt-2 text-white rounded py-1 px-2" type="submit"
                        name="submit">Submit</button>
                </form>
            </div>
            <div class=" h-full w-1/2 max-[938px]:w-full ">
                <img src="http://localhost/Hotel/public/assets/background.jpg" class="h-full w-full"  alt="" srcset="">
            </div>
        </div>
        <!-- **************************End Of Content***************************** -->
    </div>
    <!-- ********************************Footer********************************* -->
    <div class="grid grid-cols-3 py-5 px-10 sticky ">
            <!-- ***contact*** -->
            <div class="leading-9">
                <h2 class="text-blue-900 font-bold">Contact US</h2>
                <p>Customer Support</p>
                <p>Server Guarantee</p>
                <p>Wesbite Feedback</p>

            </div>
            <!-- ***about*** -->
            <div class="leading-9">
                <h2 class="text-blue-900 font-bold">About</h2>
                <p>About PestanaCR7.com</p>
                <p>News</p>
                <p>Wesbite Feedback</p>
                <p>Carrers</p>
                <p>Terms & Condition</p>
                <i class="fa-brands fa-facebook mr-4"></i>
                <i class="fa-brands fa-instagram mr-4"></i>
                <i class="fa-brands fa-twitter mr-4"></i>
                <i class="fa-brands fa-linkedin mr-4"></i>
            </div>
            <div>
                <p class="mb-2 text-blue-900 font-bold">Payment Methods</p>
                <img src="http://localhost/Hotel/public/assets/visa.png" class="w-12 inline border my-2 " srcset="">
                <img src="http://localhost/Hotel/public/assets/apple-pay.png" class="w-12 inline border my-2 "  srcset="">
                <img src="http://localhost/Hotel/public/assets/master-card.png"  class="w-12 inline border my-2 " srcset="">
                <img src="http://localhost/Hotel/public/assets/paypal.png" class="w-12 inline border my-2 "  srcset="">
                <img src="http://localhost/Hotel/public/assets/google-pay.png" class="w-12 inline border my-2 "  srcset="">
                <p class="my-2 text-blue-900">Our Partners</p>
                <img src="http://localhost/Hotel/public/assets/GOOGLE.png" class="w-14 inline " srcset="">
                <img src="http://localhost/Hotel/public/assets/TRIPADVISOR.png" class="w-14 inline " srcset="">

            </div>
        </div>
    <!-- ********************************End Of Footer********************************* -->
</body>

</html>