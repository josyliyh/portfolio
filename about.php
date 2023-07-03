<!DOCTYPE html>
<html lang="en">
<?php $title = 'Josy Li | Front-End Web Developer in Vancouver'; include 'head.php'?>
<body>

    <?php include 'nav.php'?>
    <main>
        <section id="about" class="section-height">
            <h1>About Me</h1>
            <img class="about-img" sizes="(max-width: 1120px) 100vw, 1120px"
            srcset="
            ./media/portrait_ictcxu_c_scale,w_190.jpg 190w,
            ./media/portrait_ictcxu_c_scale,w_555.jpg 555w,
            ./media/portrait_ictcxu_c_scale,w_810.jpg 810w,
            ./media/portrait_ictcxu_c_scale,w_1009.jpg 1009w,
            ./media/portrait_ictcxu_c_scale,w_1120.jpg 1120w"
            src="media/portrait_ictcxu_c_scale,w_1120.jpg">
            <div class="about-text">
                <p>
                    Hey there! I'm Josy, a Vancouver-based front-end web developer with a passion for crafting interactive websites that truly engage users.  I believe that good design and dynamic interactions are essential for a successful website.
                </p>
                <p>
                    As a web developer, I am always excited to discover new technologies and push the limits of what is possible. My "To Learn List" is a never-ending adventure and I take great pleasure in exploring new technologies and expanding my skill set. Recently, I have been diving deep into React, working on fun projects that keep me on my toes and challenge me to think differently. I am excited by the ever-evolving nature of this field and I am constantly seeking new opportunities to learn and grow. Let's work together to bring your innovative ideas to life on the web!
                </p>
            </div>
            <div class="contact-button icon-box">
                <a target="_blank" href="https://www.linkedin.com/in/josy-li-415595129/">
                    <div class="box">
                        <i class="fab fa-linkedin-in"></i>
                    </div>
                </a>
                <a href="mailto:josyliyh@gmail.com">
                    <div class="box">
                        <i class="far fa-envelope"></i>
                    </div>  
                </a>
                <a target="_blank" href="https://github.com/josyliyh">
                    <div class="box">
                        <i class="fab fa-github"></i>
                    </div> 
                </a> 
            
            </div>
            <section id="skills">
                <div class="skill reveal">
                    <h2>Development Skills</h2>
                    <ul>
                        <li>HTML</li>
                        <li>CSS</li>
                        <li>Sass</li>
                        <li>JavaScript</li>
                        <li>jQuery</li>
                        <li>PHP</li>
                        <li>React</li>
                        <li>Redux</li>
                        <li>Gulp</li>
                        <li>GitHub</li>
                        <li>MAMP</li>
                        <li>MySQL</li>
                        <li>WordPress</li>
                        <li>Bootstrap</li>
                    </ul>
                </div>

                <div class="skill reveal">
                    <h2>Designv Skills</h2>
                    <ul>
                        <li>UI/UX</li>
                        <li>Photoshop</li>
                        <li>Illustrator</li>
                        <li>XD</li>
                        <li>Invision</li>
                        <li>Figma</li>
                    </ul>
                </div>
            </section>

            <section class="about-other">
            <h3>Things I enjoy when I'm not coding...</h3>
            <p class="tagline">
                <span class="tagline-skill"><span class="tagline-skill_inner">Paddle Boarding <span role="img" aria-label="watersport">&#127940</span></span></span>
                <span class="tagline-skill"><span class="tagline-skill_inner">Buying Houseplants <span role="img" aria-label="houseplant">&#127807</span></span></span>
                <span class="tagline-skill"><span class="tagline-skill_inner">Eating Yummy Food <span role="img" aria-label="ramen">&#x1F35C</span></span></span>
            </p>
            </section>
            
        </section>
    </main>

</body>
<script src="./scripts/script.js"></script>
</html>