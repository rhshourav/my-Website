<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Personal Website</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body>
    <nav class="navbar">
        <div class="nav-brand">Your Name</div>
        <div class="nav-links">
            <a href="#home">Home</a>
            <a href="#about">About</a>
            <a href="#projects">Projects</a>
            <a href="#contact">Contact</a>
        </div>
        <div class="menu-toggle">
            <i class="fas fa-bars"></i>
        </div>
    </nav>

    <section id="home" class="hero">
        <div class="hero-content">
            <h1>Welcome to My Portfolio</h1>
            <p>Web Developer & Designer</p>
            <a href="#contact" class="cta-button">Get in Touch</a>
        </div>
    </section>

    <section id="about" class="about">
        <div class="container">
            <h2>About Me</h2>
            <div class="about-content">
                <div class="about-text">
                    <p>Hello! I'm a passionate web developer with expertise in creating modern and responsive websites. I love turning complex problems into simple, beautiful, and intuitive solutions.</p>
                </div>
                <div class="skills">
                    <h3>Skills</h3>
                    <div class="skill-tags">
                        <span>PHP</span>
                        <span>HTML5</span>
                        <span>CSS3</span>
                        <span>JavaScript</span>
                        <span>MySQL</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="projects" class="projects">
        <div class="container">
            <h2>My Projects</h2>
            <div class="project-grid">
                <div class="project-card">
                    <h3>Project 1</h3>
                    <p>Description of your first project goes here.</p>
                </div>
                <div class="project-card">
                    <h3>Project 2</h3>
                    <p>Description of your second project goes here.</p>
                </div>
                <div class="project-card">
                    <h3>Project 3</h3>
                    <p>Description of your third project goes here.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="contact" class="contact">
        <div class="container">
            <h2>Get in Touch</h2>
            <form class="contact-form" action="process.php" method="POST">
                <div class="form-group">
                    <input type="text" name="name" placeholder="Your Name" required>
                </div>
                <div class="form-group">
                    <input type="email" name="email" placeholder="Your Email" required>
                </div>
                <div class="form-group">
                    <textarea name="message" placeholder="Your Message" required></textarea>
                </div>
                <button type="submit" class="submit-button">Send Message</button>
            </form>
        </div>
    </section>

    <footer>
        <div class="container">
            <div class="social-links">
                <a href="#"><i class="fab fa-github"></i></a>
                <a href="#"><i class="fab fa-linkedin"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
            </div>
            <p>&copy; <?php echo date("Y"); ?> Your Name. All rights reserved.</p>
        </div>
    </footer>

    <script src="assets/js/main.js"></script>
</body>
</html> 