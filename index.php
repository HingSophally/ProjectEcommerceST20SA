<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ecommerce Header</title>
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
            position: relative; /* Positioning context for the logo container */
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
            z-index: 1; /* Ensure menu appears above other content */
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

    <script>
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
