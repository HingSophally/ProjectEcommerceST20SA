<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ecommerce Header with Slideshow</title>
    <style>
        /* Resetting default margin and padding */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /* Body background color */
        body {
            background-color: #fff;
            font-family: Arial, sans-serif;
        }

        /* Header Styles */
        header {
            background-color: #ffffff;
            color: #333; /* Change text color to contrast with the white background */
            padding: 10px 20px;
            display: flex;
            justify-content: space-between; /* Aligns logo to the left and icons to the right */
            align-items: center;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); /* Add box shadow */
            position: fixed; /* Fix the header to the top */
            top: 0;
            width: 100%;
            z-index: 1000; /* Ensure the header is above other content */
        }

        .logo-container {
            position: absolute;
            left: 50%;
            transform: translateX(-50%);
        }

        .logo {
            width: 140px;
            height: 40px;
        }

        .menu-bar {
            display: flex;
            align-items: center;
        }

        .menu-item {
            padding: 10px;
            cursor: pointer;
            color: #333;
            text-decoration: none;
            transition: background-color 0.3s ease;
        }

        .menu-item:hover {
            background-color: #f0f0f0;
        }

        .icons {
            display: flex;
            align-items: center;
            margin-left: auto; /* Push icons to the right */
        }

        .icons img {
            margin-right: 10px;
            cursor: pointer;
        }

        /* Placeholder styles for user icon */
        .user-icon {
            background-color: #fff;
            color: #333;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            font-weight: bold;
        }

        /* Hide menu items by default */
        .menu-items {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(255, 255, 255, 0.9); /* Semi-transparent white background */
            z-index: 1001; /* Ensure menu appears above other content */
            overflow-y: auto; /* Enable vertical scrolling if needed */
            padding-top: 60px; /* Adjust top padding to keep space for header */
            box-sizing: border-box; /* Ensure padding is included in the height */
        }

        .menu-items.show {
            display: flex;
            flex-direction: column;
            justify-content: flex-start;
            align-items: flex-start;
        }

        /* Menu items container */
        .menu-items-container {
            width: 100%;
            padding: 20px;
            box-sizing: border-box;
        }

        .menu-items-container a {
            display: block;
            margin-bottom: 10px;
            font-size: 18px;
            text-decoration: none;
            color: #333;
        }

        /* Slideshow Styles */
        .slideshow-container {
            position: relative;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            z-index: 0; /* Ensure slideshow is behind the header */
            overflow: hidden;
        }

        .mySlides {
            display: none;
            width: 100%;
            height: 100%;
        }

        .mySlides img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        /* Next & previous buttons */
        .prev, .next {
            cursor: pointer;
            position: absolute;
            top: 50%;
            width: auto;
            padding: 16px;
            margin-top: -22px;
            color: white;
            font-weight: bold;
            font-size: 18px;
            transition: 0.6s ease;
            border-radius: 0 3px 3px 0;
            user-select: none;
            z-index: 1001; /* Ensure buttons are above the slideshow */
        }

        .next {
            right: 0;
            border-radius: 3px 0 0 3px;
        }

        .prev:hover, .next:hover {
            background-color: rgba(0, 0, 0, 0.8);
        }

        /* Caption text */
        .text {
            color: #f2f2f2;
            font-size: 15px;
            padding: 8px 12px;
            position: absolute;
            bottom: 8px;
            width: 100%;
            text-align: center;
        }

        /* The dots */
        .dots-container {
            position: absolute;
            bottom: 20px;
            width: 100%;
            text-align: center;
            z-index: 1001; /* Ensure dots are above the slideshow */
        }

        .dot {
            cursor: pointer;
            height: 15px;
            width: 15px;
            margin: 0 2px;
            background-color: #bbb;
            border-radius: 50%;
            display: inline-block;
            transition: background-color 0.6s ease;
        }

        .active, .dot:hover {
            background-color: #717171;
        }

        /* Fading animation */
        .fade {
            -webkit-animation-name: fade;
            -webkit-animation-duration: 1.5s;
            animation-name: fade;
            animation-duration: 1.5s;
        }

        @-webkit-keyframes fade {
            from {opacity: .4} 
            to {opacity: 1}
        }

        @keyframes fade {
            from {opacity: .4} 
            to {opacity: 1}
        }
    </style>
</head>
<body>
    <header>
        <div class="menu-bar">
            <img src="image/icons8-menu-24.png" alt="Menu" class="menu-icon">
            <div class="menu-items">
                <div class="menu-items-container">
                    <a href="#" class="menu-item">Women</a>
                    <a href="#" class="menu-item">Men</a>
                </div>
            </div>
        </div>
        <div class="logo-container">
            <img src="image/logo01.png" alt="Logo" class="logo">
        </div>
        <div class="icons">
            <img src="image/icons8-search-24.png" alt="Search" title="Search">
            <img src="image/icons8-notification-24.png" alt="Notification" title="Notification">
            <img src="image/icons8-shopping-bags-24.png" alt="Add to Bag" title="Add to Bag">
            <!-- Placeholder for user icon with username -->
            <div class="user-icon">JD</div>
        </div>
    </header>

    <main>
        <div class="slideshow-container">
            <div class="mySlides fade">
                <img src="image/slide1.png" alt="Slide 1">
            </div>
            <div class="mySlides fade">
                <img src="image/slide2.png" alt="Slide 2">
            </div>
            <div class="mySlides fade">
                <img src="image/slide1.png" alt="Slide 3">
            </div>
        </div>
        <div class="dots-container">
            <span class="dot"></span>
            <span class="dot"></span>
            <span class="dot"></span>
        </div>

        <!-- Add some content to demonstrate scrolling -->
        <div style="height: 1500px; background: linear-gradient(white, lightgray); padding: 20px;">
        <?php
        include 'card_product.php'; // Assuming your Product class is in products.php
    
    ?>
        </div>
    </main>



    <script>
        // JavaScript to handle slideshow
        var slideIndex = 0;
        showSlides();

        function showSlides() {
            var i;
            var slides = document.getElementsByClassName("mySlides");
            var dots = document.getElementsByClassName("dot");
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            slideIndex++;
            if (slideIndex > slides.length) {slideIndex = 1}
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
            }
            slides[slideIndex-1].style.display = "block";
            dots[slideIndex-1].className += " active";
            setTimeout(showSlides, 5000); // Change image every 5 seconds
        }

        // JavaScript to handle menu icon click event
        document.addEventListener('DOMContentLoaded', function() {
            var menuIcon = document.querySelector('.menu-icon');
            var menuItems = document.querySelector('.menu-items');

            menuIcon.addEventListener('click', function() {
                menuItems.classList.toggle('show');
            });
        });
    </script>
</body>
</html>
