<!DOCTYPE html>
<html lang="en">
<?php $title = 'Portfolio of Josy Li | jQuery Game'; include 'head.php'?>
<body>

    <?php include 'nav.php'?>
    <header class="page-header">
        <img
            sizes="(max-width: 1400px) 100vw, 1400px"
            srcset="
            /media/dog/wholetthedogsout-banner_wms4il_c_scale,w_200.png 200w,
            /media/dog/wholetthedogsout-banner_wms4il_c_scale,w_636.png 636w,
            /media/dog/wholetthedogsout-banner_wms4il_c_scale,w_985.png 985w,
            /media/dog/wholetthedogsout-banner_wms4il_c_scale,w_1223.png 1223w,
            /media/dog/wholetthedogsout-banner_wms4il_c_scale,w_1400.png 1400w"
            src="/media/dog/wholetthedogsout-banner_wms4il_c_scale,w_1400.png"
            alt="">
        <h1>Who Let The Dogs Out</h1>
    </header>

    <main>
        
        <section class="section-height  reveal" id="project-main">
        
            <div class="titlecontainer">
                <h2 class="project-title">Overview</h2>
                <hr>
            </div>
                    <p>Tools: jQuery, CSS, HTML, Adobe Photoshop</p>
                    <p>Duration: 2 weeks</p>
                    <p>
                        Who Let the Dogs Out is a matching game developed based on jquery library. Players can enter their names to personalize their gameplay and select from different difficulty levels. The game also includes a feature that randomizes the target dog breed and the dog breeds on the game board in the "hard" mode, adding an element of surprise and challenge to the gameplay. 
                    </p>

                    <div class="project-button-container">
                        <a href="https://josy.dev/game/" target="_blank" rel="noopener noreferrer">
                            <button class="project-button">
                                Live Site
                            </button>
                        </a>

                        <a href="https://github.com/josyliyh/who-let-the-dogs-out.git" target="_blank" rel="noopener noreferrer">
                            <button class="project-button">
                                GitHub
                            </button>
                        </a>
                    </div>
                    
                    <div class="titlecontainer reveal" id="features">
                        <h2 class="project-title">Features</h2>
                        <hr>
                    </div>
                    <article class="feature reveal">
                        <h3>Target dog breed</h3>
                        <p>The game utilizes the math.random method and clone method to randomly select and duplicate a target dog breed.</p>
                        
                        <video  width="300px" autoplay muted loop>
                            <source src="/media/dog/screenshot_rand.mp4" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>

                        <p class="codepen" data-height="300" data-default-tab="js" data-slug-hash="QWxdyrm" data-editable="true" data-user="Josyyhli" style="height: 300px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;">
                            <span>See the Pen <a href="https://codepen.io/Josyyhli/pen/QWxdyrm">
                            Untitled</a> by j (<a href="https://codepen.io/Josyyhli">@Josyyhli</a>)
                            on <a href="https://codepen.io">CodePen</a>.</span>
                          </p>
                          <script async src="https://cpwebassets.codepen.io/assets/embed/ei.js"></script>
                          
                
                    </article>

                    <article class="feature reveal">
                        <h3>Count-down timer</h3>
                        <p>Once they click start, the timer will countdown 90 seconds.</p>
                        <p>Players can pause and resume at any time.</p>
                        <img src="./media/dog/screenshot_timer.png" loading="lazy" alt="">
                        <p>The code snippet below shows how I display the timer with minute and second</p>
                        <p class="codepen" data-height="300" data-default-tab="js" data-slug-hash="rNKjxKP" data-editable="true" data-user="Josyyhli" style="height: 300px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;">
                            <span>See the Pen <a href="https://codepen.io/Josyyhli/pen/rNKjxKP">
                            Untitled</a> by j (<a href="https://codepen.io/Josyyhli">@Josyyhli</a>)
                            on <a href="https://codepen.io">CodePen</a>.</span>
                          </p>
                          <script async src="https://cpwebassets.codepen.io/assets/embed/ei.js"></script>

                    </article>
                    
                    <article class="feature reveal">
                        <h3>Scorekeeping board</h3>
                       <p>
                            Players will get one point if they choose the same dog breed as the target dog and will lose one point if they choose the wrong dog breed.
                       </p>
                    <video  width="600px" autoplay muted loop>
                        <source src="/media/dog/screenshot_score.mp4" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>


                       <p>The code snippet below shows how I update the score whenever a dog breed is chosen.</p>
                       <p class="codepen" data-height="300" data-default-tab="js" data-slug-hash="dyKNGaM" data-editable="true" data-user="Josyyhli" style="height: 300px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;">
                        <span>See the Pen <a href="https://codepen.io/Josyyhli/pen/dyKNGaM">
                        Untitled</a> by j (<a href="https://codepen.io/Josyyhli">@Josyyhli</a>)
                        on <a href="https://codepen.io">CodePen</a>.</span>
                      </p>
                      <script async src="https://cpwebassets.codepen.io/assets/embed/ei.js"></script>

                    </article>

                <article class="reflection reveal">
                    <div class="titlecontainer" id="reflection">
                        <h2 class="project-title">Reflection</h2>
                        <hr>
                    </div>
                    <p>
                        I am thrilled to have had the opportunity to create a game similar to one I enjoyed as a child. The entire process, from planning and development to debugging and styling, was an enjoyable and enlightening experience.
                    </p>
                    <p>
                        I relished the challenge of solving problems with the resources available online and felt a great sense of accomplishment upon completion. As this was one of my first projects as a software developer, I am proud of the final product and am amazed by the capabilities of JavaScript.
                    </p>
                </article>
        </section>
    </main>
</body>
<script src="./scripts/script.js"></script>
</html>