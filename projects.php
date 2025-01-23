<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projects - Portfolio</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <nav>
        <div class="nav-content">
            <div class="logo">
                <?php
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "portfolio";

                // Create connection
                $connection = new mysqli($servername, $username, $password, $dbname);

                // Check connection
                if ($connection->connect_error) {
                    die("Connection failed: " . $connection->connect_error);
                }
                ?>
                <a href="index.php">Portfolio</a>
            </div>
            <ul class="nav-links">
                <li><a href="index.php">Home</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="projects.php" class="active">Projects</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
        </div>
    </nav>

    <main class="projects">
        <div class="container">
            <h1>My Projects</h1>
            <div class="projects-grid">
                <?php
                $sql = "SELECT * FROM projects";
                $result = mysqli_query($connection, $sql);
                
                if($result->num_rows > 0){
                    while($rows = $result->fetch_assoc()){
                ?>
                    <div class="project-card">
                        <h3><?php echo htmlspecialchars($rows['title']); ?></h3>
                        <p><?php echo htmlspecialchars($rows['description']); ?></p>
                        <?php if(!empty($rows['project_link'])): ?>
                            <a href="<?php echo htmlspecialchars($rows['project_link']); ?>" class="project-link">View Project</a>
                        <?php endif; ?>
                    </div>
                <?php 
                    }
                } else {
                    echo "<p>No projects found.</p>";
                }
                
                // Close connection
                $connection->close();
                ?>
            </div>
        </div>
    </main>
    <script src="script.js"></script>
</body>
</html>