<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Imran Portfolio</title>

<link rel="stylesheet" href="style.css">
<link rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>

<body>

<nav class="navbar">
<a href="#home" class="logo" id="logo">Imran Khalid Hassen</a>

<ul class="nav-links">
<li><a href="#about">About</a></li>
<li><a href="#projects">Projects</a></li>
<li><a href="#skills">Skills</a></li>
<li><a href="#timeline">Journey</a></li>
<li><a href="#contact">Contact</a></li>
</ul>
</nav>

<section id="home" class="hero">
<div id="particles-js"></div>

<div class="hero-text">
<h1>Imran Khalid Hassen</h1>
<h2 id="typed-text"></h2>

<p>
I build intelligent systems using machine learning,
computer vision, and modern web technologies.
</p>

<a href="#projects" class="btn">View My Work</a>
<a href="#contact" class="btn">Contact Me</a>

<div class="social-icons">
<a href="https://github.com/yourusername" target="_blank"><i class="fab fa-github"></i></a>
<a href="https://linkedin.com/in/yourprofile" target="_blank"><i class="fab fa-linkedin"></i></a>
<a href="mailto:youremail@gmail.com"><i class="fas fa-envelope"></i></a>
</div>
</div>

<div class="hero-image">
<img src="images/profile.jpg" alt="Profile">
</div>
</section>

<section id="about" class="reveal">
<h2>About Me</h2>

<p>Hello! My name is <strong>Imran Khalid Hassen</strong>, a software engineering student passionate about AI and development.</p>
<p>I specialize in machine learning, computer vision, and web/mobile development.</p>
<p>I enjoy building real-world projects and constantly learning new technologies.</p>

</section>

<section id="skills" class="reveal">
<h2>My Skills</h2>

<div class="skill"><p>Machine Learning</p><div class="skill-bar"><div class="skill-progress ml"></div></div></div>
<div class="skill"><p>Computer Vision</p><div class="skill-bar"><div class="skill-progress cv"></div></div></div>
<div class="skill"><p>Flutter</p><div class="skill-bar"><div class="skill-progress flutter"></div></div></div>
<div class="skill"><p>Web Development</p><div class="skill-bar"><div class="skill-progress web"></div></div></div>

</section>

<section id="projects" class="reveal">
<h2>My Projects</h2>

<div class="projects-grid">

<div class="project-card" onclick="openProject('Wave-Gest','Radar hand gesture recognition system using machine learning and computer vision.')">
<img src="images/projects/wavegest.png" class="project-img" alt="WaveGest">
<h3>Wave-Gest</h3>
<p>Radar gesture recognition system</p>
</div>

<div class="project-card" onclick="openProject('Car Rental App','Full-stack car rental application built using web technologies.')">
<img src="images/projects/carrental.png" class="project-img" alt="Car Rental">
<h3>Car Rental App</h3>
<p>Vehicle booking and rental system</p>
</div>

<div class="project-card" onclick="openProject('DistilBERT Text Classification','Machine learning project for text classification using DistilBERT.')">
<img src="images/projects/distilbert.png" class="project-img" alt="DistilBERT">
<h3>DistilBERT Classifier</h3>
<p>AI-powered text classification system</p>
</div>

<div class="project-card" onclick="openProject('Retail Product Detection','Computer vision project for detecting retail products.')">
<img src="images/projects/retail.png" class="project-img" alt="Retail">
<h3>Retail Product Detection</h3>
<p>Computer vision retail detection system</p>
</div>

</div>

</section>

<section id="contact">
<h2>Contact Me</h2>
<form id="contactForm" method="POST" action="save_contact.php">
<input type="text" name="name" placeholder="Your Name" required>
<input type="email" name="email" placeholder="Your Email" required>
<textarea name="message" placeholder="Your Message" required></textarea>

<button type="submit">Send</button>
</form>

<p id="formMessage"></p>

</section>

<footer class="footer">
<p>© 2026 Imran Khalid Hassen</p>
</footer>

<button id="backToTop"><i class="fas fa-arrow-up"></i></button>

<div id="projectModal" class="modal">
<div class="modal-content">
<span class="close-btn">&times;</span>
<h2 id="modalTitle"></h2>
<p id="modalDescription"></p>
</div>
</div>

<script src="https://cdn.jsdelivr.net/npm/particles.js"></script>
<script src="script.js"></script>

</body>
</html>
