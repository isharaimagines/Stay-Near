<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Stay Near</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="" name="keywords" />
    <meta content="" name="description" />

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon" />

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&family=Montserrat:wght@400;500;600;700&display=swap"
        rel="stylesheet" />

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <!-- <link href="css/bootstrap.min.css" rel="stylesheet" /> -->
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

    <script src="https://kit.fontawesome.com/63833ee6ee.js" crossorigin="anonymous"></script>
    <!-- Template Stylesheet -->
    <link href="./css/style.css" rel="stylesheet" />
</head>

<body>
    <div class="container-xxl bg-white p-0">
        <!-- Header Start -->
        <div class="container-fluid w-full relative px-0 cursor-pointer">
            <div class="row w-full flex items-center py-2 justify-between pl-5 border-b-1 border-gray-300">
                <div class="flex items-center px-4">
                    <i class="fa-solid fa-phone-volume"></i>
                    <h1 class="px-2">+94 77 123 4567</h1>
                </div>
                <div class="flex items-center text-white border-r-1 border-gray-300">.</div>
                <div class="flex items-center px-4">
                    <i class="fa-solid fa-envelope"></i>
                    <h1 class="px-2 ">staynearhelps@gmail.com</h1>
                </div>
                <div class="flex items-center text-white border-r-1 border-gray-300">.</div>
                <div class="flex items-center px-4">
                    <i class="fa-solid fa-location-dot"></i>
                    <h1 class="px-2">
                        123 Western Road Melbourne, UK.
                    </h1>
                </div>
                <div class="flex items-center text-white border-r-1 border-gray-300">.</div>
                <div class="flex items-center px-4 border-1 rounded-md">
                    <i class="fa-solid fa-magnifying-glass"></i>
                    <input type="text" placeholder="Search" class="outline-none mx-2 py-1" />
                </div>
                <div class="flex items-center text-white border-r-1 border-gray-300">.</div>
                <div class="px-4 hover:text-[#57C785]">
                    <a href="./Accounts.html" class="flex items-center">
                        <i class="fa-solid fa-user"></i>
                        <h1 class="px-2">SignIn/SignUp</h1>
                    </a>
                </div>
            </div>
            <div class="w-full flex items-center justify-between">
                <div class="flex items-center justify-center">
                    <a href="./index.php"
                        class="w-full h-full py-3 px-8 d-flex align-items-center justify-content-center">
                        <h1 class="text-3xl text-[#57C785] font-bold text-uppercase">STAY NEAR</h1>
                    </a>
                </div>

                <div class="flex items-center justify-center">
                    <nav class="p-3 p-0 flex items-center justify-center">
                        <a href="./index.php" class="hidden">
                            <h1 class="m-0 text-primary text-uppercase">STAY NEAR</h1>
                        </a>
                        <button type="button" class="navbar-toggler" data-bs-toggle="collapse"
                            data-bs-target="#navbarCollapse">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="flex items-center justify-center text-lg">
                            <ul class="navlist flex items-center justify-center text-black font-semibold">
                                <li>
                                    <a href="./index.php" class="pr-4 active hover:text-[#23CF6B]">Home</a>
                                </li>
                                <li>
                                    <a href="./room.php" class="pr-4 hover:text-[#23CF6B]">Rooms</a>
                                </li>
                                <li>
                                    <a href="./about.html" class="pr-4 hover:text-[#23CF6B]">About</a>
                                </li>
                                <li>
                                    <a href="./contact.html" class="pr-4 hover:text-[#23CF6B]">Contact</a>
                                </li>
                                <li class="px-3 py-1 bg-[#57C785] rounded-md hover:bg-[#23CF6B]">
                                    <a href="./room.php" class="text-white">
                                        Book Now
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
        <!-- Header End -->

        <!-- Carousel Start -->
        <div class="container-fluid p-0 mb-5">
            <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active relative">
                        <img class="w-full h-screen blur-[2px]" src="img/locations1(1).jpg" alt="Image" />
                        <div
                            class="absolute left-1/4 top-1/4 carousel-caption d-flex flex-column align-items-center justify-content-center">
                            <div class="p-3" style="max-width: 800px">
                                <h6 class="text-8xl font-bold text-white uppercase mb-3 animated slideInDown">
                                    Comfortable Living
                                </h6>
                                <h1 class="text-3xl text-white mb-4 animated slideInDown">
                                    Explore Details About the Place
                                </h1>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Carousel End -->

        <!-- About Start -->
        <div class="container-xxl w-full py-5">
            <div class="flex items-center w-full py-7">
                <div class="flex items-center w-full">
                    <div class="flex items-center w-1/2 mx-8">
                        <div class="col-6 text-end m-2 -translate-y-20">
                            <img class="rounded w-full" data-wow-delay="0.1s" src="img/home1(2).jpg" />
                        </div>
                        <div class="col-6 text-start m-2 translate-y-20">
                            <img class="rounded w-full" data-wow-delay="0.3s" src="img/home1(1).jpg" />
                        </div>
                    </div>

                    <div class="flex flex-col items-center w-1/2 m-4">
                        <h1 class="mb-4 text-4xl font-bold">
                            Welcome to
                            <span class="text-primary text-[#57C785] text-uppercase">STAY NEAR</span>
                        </h1>
                        <p class="mb-4">
                            NSBM Green University is planning to launch a web site to help
                            the new students to find accommodation around the campus under
                            the guidance of the new warden.
                        </p>
                        <div class="flex items-center pb-4 w-full justify-center">
                            <div class="border-2 rounded text-center w-35 p-5 mr-4 border-gray-300 hover:shadow-md">
                                <i class="fa fa-hotel fa-2x text-primary mb-2 text-[#57C785]"></i>
                                <h2 class="mb-1 text-2xl font-bold">550</h2>
                                <p class="mb-0 text-gray-600">Rooms</p>
                            </div>

                            <div class="border-2 rounded text-center w-35 p-5 mr-4 border-gray-300 hover:shadow-md">
                                <i class="fa fa-users-cog fa-2x text-primary mb-2 text-[#57C785]"></i>
                                <h2 class="mb-1 text-2xl font-bold">53</h2>
                                <p class="mb-0 text-gray-600">Landlords</p>
                            </div>

                            <div class="border-2 rounded text-center w-35 p-5 mr-4 border-gray-300 hover:shadow-md">
                                <i class="fa fa-users fa-2x text-primary mb-2 text-[#57C785]"></i>
                                <h2 class="mb-1 text-2xl font-bold">389</h2>
                                <p class="mb-0 text-gray-600">Students</p>
                            </div>

                        </div>
                        <a class="btn btn-primary text-lg font-semibold text-white py-2 mt-2 px-3 bg-[#57C785] rounded-md hover:bg-[#23CF6B]"
                            href="#upperratings">Explore Details</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->

        <!-- Room Start -->
        <div class="container-xxl w-full my-20">
            <div class="relative w-full" id="upperratings">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="section-title text-center text-xl font-bold text-[#57C785] uppercase">
                        Rooms
                    </h6>
                    <h1 class="mb-5 uppercase text-3xl font-bold">
                        Here
                        <span class="text-[#57C785]"> Upper Rating </span>Rooms
                    </h1>
                </div>
                <div class="flex items-start justify-between w-full py-12 px-20 ">

                    <div class="w-[30%]" data-wow-delay="0.1s">
                        <div class="flex flex-col items-start justify-start rounded-lg cursor-pointer shadow-md">
                            <div class="relative w-full h-60">
                                <img class="object-cover w-full h-full" src="img/room (1).jpg" alt="" />
                            </div>
                            <div class="p-4 mt-2">
                                <div class="flex items-center justify-content-between mb-3">
                                    <h5 class="font-bold text-xl pr-2">Junior Suite</h5> 4.9
                                    <small class="text-[#57C785] pl-2">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star-half-stroke"></i>
                                    </small>
                                </div>

                                <p class="text-lg mb-3">
                                    New upstair boarding house for NSBM girls student with all
                                    facility (Brand new Damro furniture/Washing machine /Fridge)
                                    & security.
                                </p>
                                <div class="d-flex justify-content-between">
                                    <button class="btn btn-sm btn-primary rounded py-1 px-4 book bg-[#57C785]" href=""
                                        data-value="2@gmail.com">See Details</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="w-[30%]" data-wow-delay="0.1s">
                        <div class="flex flex-col items-start justify-start rounded-lg cursor-pointer shadow-md">
                            <div class="relative w-full h-60">
                                <img class="object-cover w-full h-full" src="img/room (2).jpg" alt="" />
                            </div>
                            <div class="p-4 mt-2">
                                <div class="flex items-center justify-content-between mb-3">
                                    <h5 class="font-bold text-xl pr-2">Junior Suite</h5> 4.9
                                    <small class="text-[#57C785] pl-2">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                    </small>
                                </div>

                                <p class="text-lg mb-3">
                                    New upstair boarding house for NSBM girls student with all
                                    facility (Brand new Damro furniture/Washing machine /Fridge)
                                    & security.
                                </p>
                                <div class="d-flex justify-content-between">
                                    <button class="btn btn-sm btn-primary rounded py-1 px-4 book bg-[#57C785]" href=""
                                        data-value="2@gmail.com">See Details</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="w-[30%]" data-wow-delay="0.1s">
                        <div class="flex flex-col items-start justify-start rounded-lg cursor-pointer shadow-md">
                            <div class="relative w-full h-60">
                                <img class="object-cover w-full h-full" src="img/room (3).jpg" alt="" />
                            </div>
                            <div class="p-4 mt-2">
                                <div class="flex items-center justify-content-between mb-3">
                                    <h5 class="font-bold text-xl pr-2">Junior Suite</h5> 4.9
                                    <small class="text-[#57C785] pl-2">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star-half-stroke"></i>
                                    </small>
                                </div>

                                <p class="text-lg mb-3">
                                    New upstair boarding house for NSBM girls student with all
                                    facility (Brand new Damro furniture/Washing machine /Fridge)
                                    & security.
                                </p>
                                <div class="d-flex justify-content-between">
                                    <button class="btn btn-sm btn-primary rounded py-1 px-4 book bg-[#57C785]" href=""
                                        data-value="2@gmail.com">See Details</button>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
        <!-- Room End -->

        <!-- Footer Start -->
        <div class="container-fluid bg-dark text-light footer wow fadeIn" data-wow-delay="0.1s">
            <div class="w-full pb-5 px-8 py-9 bg-[linear-gradient(0deg,_#57C785,_#57C785_42%,_#57C795)]">
                <div class="flex w-full items-center justify-between border-b-1 border-white">
                    <div class="">
                        <h1 class="text-white font-bold text-3xl uppercase mb-3">STAY NEAR</h1>
                    </div>
                    <ul class="list-none flex items-center text-white text-2xl">
                        <li class="p-3"><i class="fa-brands fa-linkedin"></i></li>
                        <li class="p-3"><i class="fa-brands fa-x-twitter"></i></li>
                        <li class="p-3"><i class="fa-brands fa-facebook-f"></i></li>
                        <li class="p-3"><i class="fa-brands fa-pinterest"></i></li>
                        <li class="p-3"><i class="fa-brands fa-youtube"></i></li>
                    </ul>
                </div>
                <div class="flex items-start justify-between pt-5">
                    <div class="w-[20%]">
                        <div class="bg-primary">
                            <a href="index.html">
                                <h1 class="text-white font-bold text-2xl uppercase mb-3">STAY NEAR</h1>
                            </a>
                            <p class="mb-0 font-semibold">
                                stay with us STAY NEAR – Fast, attention of new visitors upon
                                your stay launch.
                            </p>
                        </div>
                    </div>
                    <div class="w-max">
                        <a href="index.html">
                            <h1 class="text-white font-bold text-lg uppercase mb-3">Contact</h1>
                        </a>
                        <p class="mb-2 font-semibold">
                            Address: 123 Homagama, Pitipana
                            North, Colombo
                        </p>
                        <p class="mb-2 font-semibold">
                            Phone: +012 345 67890
                        </p>
                        <p class="mb-2 font-semibold">
                            Email: info@gmail.com
                        </p>

                    </div>

                    <div class="w-max">
                        <a href="index.html">
                            <h1 class="text-white font-bold text-lg uppercase mb-3">Partnership</h1>
                        </a>
                        <p class="mb-2 font-semibold">
                            Business Solutions
                        </p>
                        <p class="mb-2 font-semibold">
                            Travel Agencies
                        </p>
                        <p class="mb-2 font-semibold">
                            Drive with us
                        </p>
                        <p class="mb-2 font-semibold">
                            Become A Partner
                        </p>
                        <p class="mb-2 font-semibold">
                            Register as Guide
                        </p>
                    </div>

                    <div class="w-max">
                        <a href="index.html">
                            <h1 class="text-white font-bold text-lg uppercase mb-3">Legal</h1>
                        </a>
                        <p class="mb-2 font-semibold">
                            Privacy Policy
                        </p>
                        <p class="mb-2 font-semibold">
                            Terms & Conditions
                        </p>
                        <p class="mb-2 font-semibold">
                            Cookie Policy
                        </p>
                    </div>

                    <div class="w-max">
                        <a href="index.html">
                            <h1 class="text-white font-bold text-lg uppercase mb-3">Help</h1>
                        </a>
                        <p class="mb-2 font-semibold">
                            Help Center
                        </p>
                        <p class="mb-2 font-semibold">
                            Get Support
                        </p>

                    </div>
                </div>

                <div class="flex w-full items-center justify-between border-t-1">
                    <div class="">
                        <h1 class="font-bold text-md mb-3">2025 STAY NEAR. All rights reserved</h1>
                    </div>
                    <ul class="list-none flex items-center text-2xl">
                        <li class="p-1"><i class="fa-brands fa-google-pay"></i></li>
                        <li class="p-1"><i class="fa-brands fa-apple-pay"></i></li>
                        <li class="p-1"><i class="fa-brands fa-cc-visa"></i></li>
                        <li class="p-1"><i class="fa-solid fa-credit-card"></i></li>
                        <li class="p-1"><i class="fa-brands fa-cc-mastercard"></i></li>
                        <li class="p-1"><i class="fa-brands fa-paypal"></i></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Footer End -->
    </div>
    <!-- Template Javascript -->
    <script src="js/main.js"></script>
    <script>
    document.querySelectorAll('.book').forEach(function(button) {
        button.addEventListener('click', function() {
            var buttonNumber = this.getAttribute('data-value');
            saveEmailPrompt(buttonNumber);
        });
    });

    function saveEmailPrompt(buttonNumber) {
        var email = prompt('Please enter your email:');
        if (email !== null && email !== '') {
            saveEmailToDatabase(email, buttonNumber);
        }
    }

    function saveEmailToDatabase(email, buttonNumber) {
        var xhr = new XMLHttpRequest();
        var url = 'saveEmail.php';
        var params = 'email=' + encodeURIComponent(email) + '&buttonNumber=' + encodeURIComponent(buttonNumber);

        xhr.open('POST', url, true);
        xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');

        xhr.onreadystatechange = function() {
            if (xhr.readyState == 4 && xhr.status == 200) {
                alert(xhr.responseText);
            }
        }
        xhr.send(params);
    }
    </script>
</body>

</html>