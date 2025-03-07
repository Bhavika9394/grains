<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grain Inventory Management</title>
    <link rel="stylesheet" href="home.css">
    <style>
    header{font-weight: bold;}
    .login-container {
        background-color: #f0f0f0;
            padding: 10px;
            border-radius: 5px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            display:flex;
            justify-content: center;
        }
        h2 {
            margin-bottom: 20px;
        }
        .form-group {
            margin-bottom: 15px;
        }
        label {
            display: block;
            margin-bottom: 5px;
        }
        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        input[type="submit"] {
            background-color: #007bff;
            color: white;
            border: none;
            padding: 10px;
            border-radius: 4px;
            cursor: pointer;
            width: 100%;
        }
        input[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
    
</head>
<body>
    <header>
        <h1>Grain Inventory Management System</h1>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="inventory.php">Inventory</a></li>
                <li><a href="add_grain.php">Manage Grain</a></li>
                <li><a href="About.php">About Us</a></li>
                <li><a href="Contact.php">Contact us </a></li>
            </ul>
        </nav>
    </header>
    <main>
        <section>
            <h1>Welcome!!</h1>
            <h2 id="login">Login</h2>
            <div class="login-container">
            <form action="/login" method="POST">
            <div class="form-group">
            <label for="userId">User  ID:</label>
            <input type="text" id="userId" name="userId" required>
            </div>
            <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
        </div>
        <input type="submit" value="Login">
    </form>
</div>
            <p>Manage your grain stocks efficiently.</p>
        </section>
    </main>
    <footer>
        <p>&copy; 2025 Grain Inventory Management System</p>
    </footer>
</body>
</html>
