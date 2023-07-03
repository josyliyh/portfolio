<!DOCTYPE html>
<html lang="en">
<?php $title = 'Portfolio of Josy Li | PHP Database Application'; include 'head.php'?>
<body>

    <?php include 'nav.php'?>
    <header class="page-header">
        <video autoplay muted loop controls>
            <source src="/media/database/php-project.mov" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <h1>Database Administration Interface</h1>
    </header>

    <main>

        <section class="section-height reveal" id="project-main">
            <div class="titlecontainer">
                <h2 class="project-title">Overview</h2>
                <hr>
            </div>
            <div class="reveal">
                <p>Tools: PHP, MySQL, phpMyAdmin, MAMP</p>
                <p>Duration: 1 week</p>
                <p>
                    The application provides the user with the capability to administrate a table within a database. The user will have the ability to view the current state of the table, sort the records, and perform CRUD (Create, Read, Update, Delete) operations on the records. The application is designed to provide an intuitive and user-friendly interface to manage the database table efficiently.
                </p>
            </div>
                
                    <div class="titlecontainer reveal" id="features">
                        <h2 class="project-title">Features</h2>
                        <hr>
                    </div>
                    <article class="feature reveal">
                        <h3>Security SQL Injection</h3>
                        <p>I used mysql_real_escape_string to sanitize user input by escaping special characters and protect against SQL injection attacks. This function is used to escape any special characters that may be present in user input, thus preventing attackers from inserting malicious code into database queries and potentially compromising the integrity of the database. By using this function, I ensured that the application is secure and protected against potential security threats.</p>
                        
                    </article>

                    <article class="feature reveal">
                        <h3>Database Interactions and Manipulation</h3>
                        <p>The application allows users to perform CRUD operations on records within a table. After executing an insert, delete, or update operation, the application redirects the user back to the table view and displays the latest state of the table. This ensures that the user is always presented with the most current and accurate information, and can easily verify that the requested operation was executed successfully.</p>
                    </article>
                    
                    
          
        </section>
    </main>
</body>
<script src="./scripts/script.js"></script>
</html>