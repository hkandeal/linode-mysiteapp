<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Me</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/public/style/home-style.css">
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
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f9fafb;
            color: #333;
        }

        header {
            background-color: #ff6f61;
            color: #fff;
            text-align: center;
            padding: 20px;
            animation: headerAnimation 1s ease-in-out;
        }

        @keyframes headerAnimation {
            0% {
                transform: translateY(-50px);
                opacity: 0;
            }

            100% {
                transform: translateY(0);
                opacity: 1;
            }
        }

        section {
            padding: 20px;
            margin: 20px auto;
            max-width: 800px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s, box-shadow 0.3s;
        }

        section:hover {
            transform: translateY(-5px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }

        h2 {
            color: #ff6f61;
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 10px;
        }

        p {
            line-height: 1.6;
            font-size: 16px;
            color: #555;
        }

        .hobby {
            margin-bottom: 40px;
        }

        .hobby img {
            max-width: 100%;
            border-radius: 8px;
        }

        .icon {
            display: block;
            width: 100px;
            height: 100px;
            margin: 0 auto 20px;
            border-radius: 50%;
            background-size: cover;
            background-position: center;
            animation: iconAnimation 1s ease-in-out;
        }

        @keyframes iconAnimation {
            0% {
                transform: scale(0);
            }

            100% {
                transform: scale(1);
            }
        }

        /* Animation for child sections */
        #intro:hover .hobby {
            transform: translateX(20px);
        }
    </style>
</head>

<body>
    <header>
        <h1>About Me</h1>
        <p>Welcome to my world of exploration!</p>
    </header>

    <!-- Intro section -->
    <section id="intro">
        <div class="icon" style="background-image: url('https://img.icons8.com/ios/100/000000/user-male-circle.png')">
        </div>
        <h2 style="font-size: 24px; color: #333; margin-bottom: 10px;">Myself</h2>
        <p style="line-height: 2; font-size: 14px; color: #666;">
            Hey there! I'm a passionate explorer with an insatiable thirst for adventure and discovery. <br><br>
            Whether I'm wandering through the corridors of ancient history or delving into the latest technological
            innovations, I'm always seeking out new experiences. <br><br>
            As a software developer, I thrive on the intricacies of code and the marvels of architecture, constantly
            pushing the boundaries of what's possible in the digital realm. <br><br>
            When I'm not immersed in pixels and lines of code, you can find me lost in the pages of captivating books or
            maintaining a healthy balance through workouts and a nourishing lifestyle. <br><br>
            Football matches offer a thrilling escape, but my true passion lies in capturing the essence of my travels
            through the lens of travel photography. <br><br>
            Beyond my personal interests, I'm dedicated to honing my leadership skills and fostering cohesive teams,
            driven by a relentless curiosity to discover new technologies and forge innovative pathways into the future.
        </p>



        <!-- History section -->
        <section id="history" class="hobby">
            <div class="icon" style="background-image: url('https://img.icons8.com/ios/100/000000/ruins.png')"></div>
            <h2>History</h2>
            <p>I have a deep love for history and enjoy delving into the stories of civilizations past. Whether it's
                visiting historical sites or reading about ancient cultures, I find inspiration in the lessons of the
                past.
            </p>
        </section>

        <!-- Travel section -->
        <section id="travel" class="hobby">
            <div class="icon"
                style="background-image: url('https://img.icons8.com/ios/100/000000/around-the-globe.png')"></div>
            <h2>Travel</h2>
            <p>Traveling is my ultimate passion. Exploring new destinations, immersing myself in different cultures, and
                meeting people from all walks of life fuel my sense of adventure and curiosity.</p>
        </section>

        <!-- Photography section -->
        <section id="photography" class="hobby">
            <div class="icon" style="background-image: url('https://img.icons8.com/ios/100/000000/camera.png')"></div>
            <h2>Photography</h2>
            <p>Capturing moments through photography is my way of preserving memories and sharing the beauty of the
                world
                with others. From landscapes to portraits, I'm constantly honing my skills behind the lens.</p>
        </section>

        <!-- Reading section -->
        <section id="reading" class="hobby">
            <div class="icon" style="background-image: url('https://img.icons8.com/ios/100/000000/open-book.png')">
            </div>
            <h2>Reading</h2>
            <p>Books are my constant companions on this journey called life. Whether it's fiction, non-fiction, or
                historical accounts, I'm always eager to dive into a good book and explore new worlds through
                literature.
            </p>
        </section>

        <!-- Workout and Fitness section -->
        <section id="fitness" class="hobby">
            <div class="icon" style="background-image: url('https://img.icons8.com/ios/100/000000/barbell.png')"></div>
            <h2>Workout and Fitness</h2>
            <p>Maintaining a healthy lifestyle is important to me. I enjoy staying active through various workouts and
                fitness activities. Whether it's hitting the gym, going for a run, or practicing yoga, I prioritize my
                physical well-being.</p>
        </section>
    </section>
</body>

</html>