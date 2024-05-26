<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Card</title>
    <style>
        .product-card {
            box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
            transition: 0.3s;
            width: 300px;
            border-radius: 5px;
            margin: 10px;
            display: inline-block;
            vertical-align: top;
            background: #fff;
            position: relative; /* Make the parent element relative for absolute positioning */
        }

        .product-card img {
            width: 100%;
            border-radius: 5px 5px 0 0;
        }

        .product-details {
            padding: 15px;
            text-align: left;
        }

        .product-name {
            font-size: 18px;
            color: #333;
        }

        .product-price {
            color: green;
            font-size: 16px;
            font-weight: bold;
        }

        .product-sizes, .product-status {
            color: #777;
            font-size: 14px;
            margin-top: 5px;
        }

        /* Add to Cart button style */
        .add-to-cart-button {
            background-color: green;
            color: white;
            border: none;
            padding: 8px 16px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 14px;
            border-radius: 5px;
            cursor: pointer;
            margin-top: 10px;
        }

        /* Cancel button style */
        .cancel-button {
            background-color: red;
            color: white;
            border: none;
            padding: 8px 16px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 14px;
            border-radius: 5px;
            cursor: pointer;
            margin-top: 10px;
            position: absolute;
            bottom: 15px;
            right: 15px;
        }

        /* Count style */
        .add-to-cart-count {
            position: absolute;
            bottom: 5px;
            left: 130px; /* Adjust left position for spacing */
            color: green;
            font-size: 12px;
        }
    </style>
</head>
<body>
    <!-- The PHP code to fetch and display product cards -->
    <?php
        $servername = "localhost";
        $username = "root";  // Your database username
        $password = "";  // Your database password
        $dbname = "productsdb";  // Your database name

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "SELECT name, image_url, sizes, price, status FROM productstbl";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // Output data of each row
            while($row = $result->fetch_assoc()) {
                echo '<div class="product-card">';
                echo '<img src="' . $row["image_url"] . '" alt="' . $row["name"] . '">';
                echo '<div class="product-details">';
                echo '<div class="product-name">' . $row["name"] . '</div>';
                echo '<div class="product-price">$' . $row["price"] . '</div>';
                echo '<div class="product-sizes">Sizes: ' . $row["sizes"] . '</div>';
                echo '<div class="product-status">Status: ' . $row["status"] . '</div>';
                // Add "Add to Cart" button with count
                echo '<button class="add-to-cart-button" onclick="toggleButton(this)">Add to Cart <span class="add-to-cart-count" style="display: none;">0</span></button>';
                // Add "Cancel" button initially hidden
                echo '<button class="cancel-button" onclick="toggleButton(this)" style="display: none;">Cancel</button>';
                echo '</div>';
                echo '</div>';
            }
        } else {
            echo "0 results";
        }
        $conn->close();
    ?>

<script>
    var totalCount = 0;

    function toggleButton(button) {
        var countElement = button.parentNode.querySelector('.add-to-cart-count');
        var cancelButton = button.parentNode.querySelector('.cancel-button');
        var count = parseInt(countElement.innerText) || 0; // Get current count or set to 0

        if (button.classList.contains('add-to-cart-button')) {
            // Increment count when Add to Cart button is clicked
            count++;
            totalCount++; // Increment total count
            countElement.style.display = "inline"; // Show count
            cancelButton.style.display = "inline"; // Show Cancel button
        } else {
            // Decrement count when Cancel button is clicked
            count--;
            totalCount--; // Decrement total count
            if (count === 0) {
                countElement.style.display = "none"; // Hide count if it becomes zero
                cancelButton.style.display = "none"; // Hide Cancel button if count becomes zero
            }
        }

        countElement.innerText = count; // Update count display for this product
        updateTotalCount(); // Update total count display

        // Update the Add to Cart button text to show the count
        button.innerText = "Add to Cart (" + count + ")";
    }

    function updateTotalCount() {
        // Update the total count display wherever you want to show it
        // For example, if you have a div with id "total-count-display":
        document.getElementsByClassName("total-count-display")[0].innerText = "Total Count: " + totalCount;
    }
</script>





</body>
</html>
