<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Me - Portfolio</title>
    <link rel="stylesheet" href="style.css">
</head>
<style>
    .about-content {
        display: flex;
        flex-direction: column;
        gap: 2rem;
    }

    .skills-list, .tools-list {
        list-style-type: disc;
        margin: 1rem 0;
        padding-left: 1.5rem;
    }

    .gallery {
        margin-top: 2rem;
    }

    .gallery-images {
        display: flex;
        gap: 1rem;
        flex-wrap: wrap;
    }

    .gallery-image {
        width: 200px;
        height: 150px;
        object-fit: cover;
        border-radius: 8px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }

    /* New Style for Profile Photo */
    .profile-photo {
        width: 150px;
        height: 150px;
        object-fit: cover;
        border-radius: 50%;
        margin-bottom: 1.5rem;
    }
</style>
<body>
    <nav>
        <div class="nav-content">
            <div class="logo">
                <a href="index.php">Portfolio</a>
            </div>
            <ul class="nav-links">
                <li><a href="index.php">Home</a></li>
                <li><a href="about.php" class="active">About</a></li>
                <li><a href="projects.php">Projects</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
        </div>
    </nav>

    <main class="about">
        <div class="container">
            <h1>About Me</h1>
            <div class="about-content">
                <!-- About Text -->
                <div class="about-text">
                    <!-- Profile Photo -->
                    <!-- <img src="images/logo.png" alt="Your Photo" class="profile-photo"> -->
                    <p>
                        Hello! My name is [Your Name], and I am a professional phone repair technician with over [X years] of experience in diagnosing and repairing mobile devices. 
                        I specialize in delivering high-quality repair services for a wide range of smartphones, tablets, and other handheld devices.
                    </p>
                    <p>
                        I take pride in my ability to resolve complex technical issues and provide my clients with exceptional customer service. Whether it's a cracked screen, water damage, or a faulty motherboard, 
                        I approach every repair with precision and dedication, ensuring that each device is restored to optimal performance.
                    </p>
                    <h2>Expertise & Skills</h2>
                    <ul class="skills-list">
                        <li>Screen Repairs & Replacements</li>
                        <li>Battery Diagnostics & Replacements</li>
                        <li>Micro Soldering & Chip-Level Repairs</li>
                        <li>Software Troubleshooting & Updates</li>
                        <li>Water Damage Restoration</li>
                        <li>Advanced Diagnostic Techniques</li>
                    </ul>
                </div>

                <!-- Tools Section -->
                <div class="tools-section">
                    <h2>Tools I Use</h2>
                    <ul class="tools-list">
                        <li>Professional Repair Kits</li>
                        <li>Heat Guns for Precision Repairs</li>
                        <li>Microscopes for Micro Soldering</li>
                        <li>ESD-Safe Workstations</li>
                        <li>Industry-Grade Diagnostic Software</li>
                    </ul>
                </div>

                <!-- Gallery Section -->
                <div class="gallery">
                    <h2>Gallery</h2>
                    <div class="gallery-images">
                        <img src="images/imagejs.jpeg" alt="Phone Repair" class="gallery-image">
                        <img src="images/images.jpeg" alt="Diagnostic Tools" class="gallery-image">
                        <img src="images/Untitled8.jpeg" alt="Soldering Workstation" class="gallery-image">
                        <img src="images/Untitledmn.jpeg" alt="Battery Replacement" class="gallery-image">
                    </div>
                </div>
            </div>
        </div>
    </main>

    <script src="script.js"></script>
</body>
</html>
