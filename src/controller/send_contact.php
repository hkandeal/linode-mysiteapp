<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Messages</title>
    <!-- <link rel="stylesheet" href="public/style/styles.css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="apple-touch-icon" sizes="57x57" href="public/res/icons/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="public/res/icons/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="public/res/icons/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="public/res/icons/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="public/res/icons/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="public/res/icons/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="public/res/icons/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="public/res/icons/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="public/res/icons/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="public/res/icons/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="public/res/icons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="public/res/icons/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="public/res/icons/favicon-16x16.png">
    <link rel="manifest" href="public/res/icons/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="public/res/icons/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            text-align: center;
            padding-top: 50px;
        }

        h1 {
            color: #333;
        }

        .container {
            width: 80%;
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .fa-code {
            font-size: 36px;
            color: #007bff;
        }

        a {
            text-decoration: none;
            color: #007bff;
        }

        a:hover {
            text-decoration: underline;
        }
    </style>
</head>


<body>
    <?php
    $env = parse_ini_file('.env');

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get the form data
        $name = $_POST["name"];
        $email = $_POST["email"];
        $message = $_POST["message"];

        error_log(print_r("name:" . $name, true));
        error_log(print_r("email:" . $email, true));
        error_log(print_r("message:" . $message, true));

        // Validate the email (you may want to add more robust validation)
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            http_response_code(400); // Bad Request
            echo "Invalid email format";
            exit;
        }
        $host0 = getenv('MYSQL_HOST', true) ?: getenv('MYSQL_HOST');
        error_log(print_r("host0:" . $host0, true));

        $host =
            getenv('MYSQL_HOST', true) ?: getenv('MYSQL_HOST');
        //$env["MYSQL_HOST"];
        error_log(print_r("host:" . $host, true));

        $username =
            getenv('MYSQL_USER', true) ?: getenv('MYSQL_USER');
        //$env["MYSQL_USER"];
    
        $password =
            getenv('MYSQL_PASSWORD', true) ?: getenv('MYSQL_PASSWORD');
        ///$env["MYSQL_PASSWORD"];
    
        $dbname =
            getenv('MYSQL_DATABASE', true) ?: getenv('MYSQL_DATABASE');
        //$env["MYSQL_DATABASE"];
    
        // Attempt to connect to the database
        // Create connection
        $conn = new mysqli($host, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // prepare and bind
        $stmt = $conn->prepare("INSERT INTO message (name, mail, message , message_date) VALUES (?, ?, ? , NOW())");
        $stmt->bind_param("sss", $name, $email, $message);

        // set parameters and execute
    
        $stmt->execute();
        ///echo "New records created successfully";
    
        $stmt->close();
        $conn->close();
        // Redirect to a thank you page
        // header("Location: thank-you.php");
        //exit;
    } else {
        // If the request method is not POST, return a 405 Method Not Allowed response
        http_response_code(405);
        echo "Method Not Allowed";
        exit;
    }
    ?>
    <div class="container">
        <h1>Thanks, I received your message</h1>
        <a href="/" class="home-link"><i class="fas fa-hand-point-right"></i> Home page</a>
    </div>
</body>