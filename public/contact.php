<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Me</title>
    <link rel="apple-touch-icon" sizes="57x57" href="/public/res/icons/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/public/res/icons/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/public/res/icons/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/public/res/icons/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/public/res/icons/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/public/res/icons/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/public/res/icons/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/public/res/icons/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/public/res/icons/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="/public/res/icons/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/public/res/icons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/public/res/icons/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/public/res/icons/favicon-16x16.png">
    <link rel="manifest" href="/public/res/icons/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/public/res/icons/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <!--   <link rel="stylesheet" href="/public/style/common-style.css"> -->
    <link rel="stylesheet" href="/public/style/contact-style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<!-- <body>
    <div class="container">
        <h1>Contact Me</h1>
        <form action="/sendcontact" method="POST">
            <input type="text" name="name" placeholder="Your Name" required><br>
            <input type="text" name="email" placeholder="Your Email" required><br>
            <textarea name="message" rows="5" placeholder="Your Message" required></textarea><br>
            <input type="submit" value="Send Message">
        </form>
    </div>
    <footer>
        <div class="footer-container">
            <div class="social-links">
                <a href="/home"><i class="far fa-comments"></i> Home</a>
                <a href="/blog"><i class="fas fa-blog"></i> Blog</a>
                <a href="https://boycottisraeli.biz" target="_blank"><i class="fas fa-skull-crossbones"></i> Boycott
                    Israel</a>
            </div>
            <p>&copy; 2024 Hossam Kandel Mohamed</p>
        </div>
    </footer>
</body> -->



<body>
    <div class="contact-form-container">
        <h2>Contact Me</h2>
        <form action="/sendcontact" method="POST">
            <div class="form-group">
                <label for="name">Your Name</label>
                <input type="text" id="name" name="name" required>
            </div>

            <div class="form-group">
                <label for="email">Your Email</label>
                <input type="email" id="email" name="email" required>
            </div>


            <div class="form-group">
                <label for="message">Message</label>
                <textarea id="message" name="message" rows="5" required></textarea>
            </div>

            <button type="submit">Send Message</button>
        </form>

        <div class="social-media">
            <h3>Follow Me</h3>
            <div class="social-icons">
                <a href="https://www.facebook.com/hkandeal/" target="_blank"><i class="fab fa-facebook-f"></i></a>
                <a href="https://x.com/wanderlust_hos" target="_blank"><i class="fab fa-twitter"></i></a>
                <a href="https://www.linkedin.com/in/hossamkandel/" target="_blank"><i
                        class="fab fa-linkedin-in"></i></a>
                <a href="https://www.instagram.com/wanderlust.hos" target="_blank"><i class="fab fa-instagram"></i></a>
            </div>
        </div>
        <br>
        <div class="container">
            <a href="/" class="home-link"><i class="fas fa-hand-point-right"></i> Home page</a>
        </div>
    </div>
</body>

</html>