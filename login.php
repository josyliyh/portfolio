<!DOCTYPE html>
<html lang="en">
<?php $title = 'Portfolio of Josy Li | PHP Login Application'; include 'head.php'?>
<body>

    <?php include 'nav.php'?>

    <header class="page-header">
        <video autoplay muted loop controls>
            <source src="/media/login/login.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <h1>Login Application</h1>
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
                    The login application was developed using the PHP and integrated with a MySQL database. The application utilizes form field validation techniques to ensure the accuracy and security of user input. Additionally, session handling is implemented to maintain the user's login status. The application authenticates users by comparing the submitted login credentials with the ones stored in the database. Once the user is successfully logged in, they are granted access to the protected resources of the application. The application is designed to provide a secure and user-friendly way for users to access the protected resources.
                </p>
                <div class="project-button-container">
                    
                    <a href="https://github.com/josyliyh/login-application" target="_blank" rel="noopener noreferrer">
                        <button class="project-button">
                            GitHub
                        </button>
                    </a>
                </div>
            </div>
                
                    <div class="titlecontainer reveal" id="features">
                        <h2 class="project-title">Features</h2>
                        <hr>
                    </div>
                    <article class="feature reveal">
                        <h3>Login Function</h3>
                        <p>
                            The application requires users to provide both a username and password to log in. If both fields are filled out, the application uses the inputted data to query the database for a matching set of credentials. The system will compare the provided username and password to the ones stored in the database. If a match is found, the user will be granted access to the protected resources of the application.
                        </p>
                        
                    </article>

                    <article class="feature reveal">
                        <h3>Session Handling</h3>
                        <p>
                            If the username and password entered by the user match the ones stored in the database with the correct case sensitivity, a PHP session will be initiated. The session will remember the username and forward the user to one of the secure pages. This approach allows the user to navigate the secure pages without needing to re-enter their login credentials. The session is kept active until the user logs out or closes the browser. The session handling is an important feature that maintains the login status of the user throughout their interaction with the application.
                        </p>
                        <p>
                            In addition to the session handling, there is also a timeout function implemented using PHP sessions. This function will automatically log the user out after a specified period of time. For demonstration purposes, I set the timeout to 5 seconds. This is a security measure that helps to protect the application from unauthorized access in case a user forgets to log out. The timeout value can be adjusted as per the requirement and security needs of the application. This feature provides an extra layer of security to the application by preventing unauthorized access even if the user's device is compromised.
                        </p>
                    </article>
        </section>
    </main>
</body>
<script src="./scripts/script.js"></script>
</html>