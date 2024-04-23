<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Software Engineer Portfolio</title>
    <link rel="stylesheet" href="public/style/home-style.css">
</head>

<body>

    <!-- Hero Section -->
    <section class="hero">
        <div class="container">
            <h1>Welcome to My Software Engineering Portfolio</h1>
            <p>Explore my projects and skills in software development</p>
            <a href="#projects" class="btn">View Projects</a>
        </div>
    </section>

    <!-- Projects Section -->
    <section id="projects" class="projects">
        <div class="container">
            <h2>Projects</h2>
            <div class="project">
                <h3>Project 1: E-commerce Website</h3>
                <p>An e-commerce platform developed using React.js and Node.js, featuring user authentication, product
                    catalog, and shopping cart functionality.</p>
            </div>
            <div class="project">
                <h3>Project 2: Mobile App Development</h3>
                <p>A mobile application built with Flutter for cross-platform compatibility, providing real-time
                    communication and location tracking features.</p>
            </div>
            <!-- Add more projects as needed -->
        </div>
    </section>

    <!-- Skills Section -->
    <section class="skills">
        <div class="container">
            <h2>Skills</h2>
            <div class="skill">
                <i class="fas fa-code"></i>
                <h3>Web Development</h3>
                <p>Proficient in HTML, CSS, JavaScript, and modern frameworks like React.js and Angular.</p>
            </div>
            <div class="skill">
                <i class="fas fa-cogs"></i>
                <h3>Software Architecture</h3>
                <p>Experience designing scalable and maintainable software architectures using microservices and
                    containerization technologies like Docker and Kubernetes.</p>
            </div>
            <!-- Add more skills as needed -->
        </div>
    </section>

    <!-- Contact Section -->
    <section class="contact">
        <div class="container">
            <h2>Contact Me</h2>
            <form id="contact-form">
                <input type="text" name="name" placeholder="Your Name" required>
                <input type="email" name="email" placeholder="Your Email" required>
                <textarea name="message" placeholder="Your Message" required></textarea>
                <button type="submit" class="btn">Send Message</button>
            </form>
        </div>
    </section>

    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="script.js"></script>
</body>

</html>