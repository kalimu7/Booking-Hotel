<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <div class="container h-screen bg-zinc-100 ">
        <!--**********************navbar*************************-->
        <div class=" bg-white flex justify-between w-full h-24 items-center">
            <img class="ml-5" src="http://localhost/Hotel/public/assets/logo.png" width="100px">
            <ul class="flex">
                <li class="pr-10"><a class="font-bold" href="#">Find Pestana CR7</a></li>
                <li class="pr-10"><a class="font-bold" href="#">Community</a></li>
                <li class="pr-10"><a class="font-bold" href="#">Blog</a></li>
                <li class="pr-10"><a class="font-bold" href="#">About Pestana CR7</a></li>
            </ul>
            <div class="flex">
                <a class="block text-white py-3 px-6 rounded mr-10 bg-orange-500" href="">Login</a>
                <a class="block p-3 mr-10 hover:bg-orange-500 hover:text-white py-3 px-6 hover:rounded "
                    href="">Register</a>
            </div>
        </div>
        <!--**********************End Of navbar*************************-->
        <div class="flex">
            <div class="basis-1/2">
                <form action="" method="">
                    <h1>Register To Pestana CR7</h1>
                    <p>Join to Pestana you will get the best recommendation for <br>rent house in near of you.</p>
                    <div class="w-1/2 flex justify-between mb-3">
                        <a href="#" class="hover:border-b-8 border-orange-500 ">Register</a>
                        <a href="#" class="hover:border-b-8 border-orange-500 ">Login</a>
                        
                    </div>
                    <hr class="w-1/2">
                    <label for="fullname">Your Full Name*</label> <br>
                    <input class="border" type="text" name="fullname">
                    <label for="fullname">Password*</label> <br>
                    <input type="password" name="password">
                    <button type="submit" name="submit">Submit</button>
                </form>
            </div>
            <div class="basis-1/2">
                <img src="http://localhost/Hotel/public/assets/background.jpg" alt="" srcset="">
            </div>
        </div>
        
    </div>
</body>

</html>