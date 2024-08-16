<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hossam Kandel Mohamed</title>

    <!-- Stylesheets -->
    <link rel="stylesheet" href="/public/style/home-style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">

    <!-- Favicon and Icons -->
    <link rel="apple-touch-icon" sizes="180x180" href="/public/res/icons/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/public/res/icons/favicon-32x32.png">
    <meta name="theme-color" content="#ffffff">

    <!-- Open Graph Meta Tags -->
    <meta property="og:title" content="Hossam Kandel Mohamed" />
    <meta property="og:image" content="https://hossam.io/public/res/info.png" />
    <meta property="og:description" content="Personal Website" />
    <meta property="og:url" content="https://hossam.io/" />
    <meta property="og:type" content="website" />
</head>

<body>

    <!-- Hero Section -->
    <section class="hero">
        <div class="container">
            <img src="/public/res/home.png" alt="Hossam Kandel Mohamed" class="profile-photo">
            <h1>Welcome to My Personal Site</h1>
            <p>Dive into the captivating journey of discovering who I am and where my career takes flight.</p>
            <div class="link-container">
                <a href="/about" class="link btn-about"><span>About Me</span></a>
                <a href="/resume" class="link btn-resume"><span>View Resume</span></a>
            </div>
        </div>
    </section>

    <style>
        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            color: #333;
        }

        .hero {
            text-align: center;
            padding: 100px 20px;
            background-color: #fff;
        }

        .profile-photo {
            border-radius: 50%;
            max-width: 150px;
            margin-bottom: 20px;
        }

        .link-container {
            margin-top: 30px;
        }

        .link {
            text-decoration: none;
            font-weight: 600;
            font-size: 18px;
            color: #fff;
            padding: 15px 30px;
            border-radius: 30px;
            display: inline-block;
            transition: background 0.3s, transform 0.3s;
        }

        .btn-about {
            background: linear-gradient(45deg, #6a11cb, #2575fc);
            margin-right: 15px;
        }

        .btn-resume {
            background: linear-gradient(45deg, #ff416c, #ff4b2b);
        }

        .link:hover {
            transform: translateY(-5px);
        }

        .link:active {
            transform: translateY(2px);
        }

        .link span {
            position: relative;
            z-index: 1;
        }

        .link:before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            border-radius: 30px;
            background: rgba(0, 0, 0, 0.1);
            opacity: 0;
            transition: opacity 0.3s;
            z-index: 0;
        }

        .link:hover:before {
            opacity: 1;
        }
    </style>

    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="script.js"></script>
</body>

</html>