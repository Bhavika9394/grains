<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <link rel="stylesheet" href="style.css">
    <style>
        body {
            margin: 0;
        }

        .background {
            background-image: url('grain_back.jpg'); /* Replace with the actual image path */
            background-size: cover; /* Scales the image to cover the whole background */
            background-repeat: no-repeat; /* Ensures the image doesn't repeat */
            background-position: center; /* Centers the image on the page */
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -1; 
            opacity: 55%;/* Ensures it's behind all other content */
        }
    </style>
</head>
<body>
    <div class="background"></div>
    <header>
        <h1>About Us</h1>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="inventory.php">Inventory</a></li>
                <li><a href="add_grain.php">Manage Grain</a></li>
                <li><a href="About.php">About Us</a></li>
                <li><a href="Contact.php">Contact Us</a></li>
            </ul>
        </nav>
    </header>
    
    <section>
        <h2>Our Mission</h2>
        <p>We aim to provide the best services to our customers...</p>
    </section>
    
    <section>
        <h2>Our Team</h2>
        <p>Meet the people who make it all happen...</p>
    </section>
    
    <footer>
        <p>&copy; 2025 Grain Inventory Management System</p>
    </footer>
</body>
</html>
