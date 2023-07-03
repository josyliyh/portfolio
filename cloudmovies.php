<!DOCTYPE html>
<html lang="en">
<?php $title = 'Portfolio of Josy Li | React Movie Database Application'; include 'head.php'?>
<body>

    <?php include 'nav.php'?>

    <header class="page-header">
        <img
            sizes="(max-width: 1400px) 100vw, 1400px"
            srcset="
            ./media/movie/cloudmovie-banner_jythud_c_scale,w_200.png 200w,
            ./media/movie/cloudmovie-banner_jythud_c_scale,w_411.png 411w,
            ./media/movie/cloudmovie-banner_jythud_c_scale,w_564.png 564w,
            ./media/movie/cloudmovie-banner_jythud_c_scale,w_705.png 705w,
            ./media/movie/cloudmovie-banner_jythud_c_scale,w_808.png 808w,
            ./media/movie/cloudmovie-banner_jythud_c_scale,w_902.png 902w,
            ./media/movie/cloudmovie-banner_jythud_c_scale,w_1004.png 1004w,
            ./media/movie/cloudmovie-banner_jythud_c_scale,w_1097.png 1097w,
            ./media/movie/cloudmovie-banner_jythud_c_scale,w_1179.png 1179w,
            ./media/movie/cloudmovie-banner_jythud_c_scale,w_1245.png 1245w,
            ./media/movie/cloudmovie-banner_jythud_c_scale,w_1349.png 1349w,
            ./media/movie/cloudmovie-banner_jythud_c_scale,w_1398.png 1398w,
            ./media/movie/cloudmovie-banner_jythud_c_scale,w_1400.png 1400w"
            src="./media/movie/cloudmovie-banner_jythud_c_scale,w_1400.png"
            alt="">
        <h1>CloudMovie</h1>
    </header>

    <main>

        <section class="section-height reveal" id="project-main">
            <div class="titlecontainer">
                <h2 class="project-title">Overview</h2>
                <hr>
            </div>
            <div class="reveal">
                <p>Tools: React, TMDB API, SASS, Adobe XD, GitHub</p>
                <p>Duration: 3 weeks</p>
                <p>
                    Cloud Movies is a React movie database application that utilizes the TMDB (The Movie Database) API to dynamically pull in movie information. The application allows users to search for movies, view movie details, and explore different movie genres. The application's interface is designed to be user-friendly, allowing users to easily navigate through the different sections of the application and find the information they are looking for. The use of the TMDB API allows the application to access a vast amount of movie-related data and provide users with up-to-date information about the latest movies and popular films.
                </p>
                <p>
                    During the planning phase of the project, low and high-fidelity mockups were created to visualize the design and layout of the application. These mockups were then used as a guide during the development process. The application allows users to add and delete movies from their favorite list, an auto-complete search bar to help users find movies quickly, sort movies based on four categories: popular, top rated, now playing and upcoming, and filter movies based on a genre. The application is designed to be easy to use and navigate, with a clean and modern interface that makes it easy for users to find the information they are looking for. The use of React and SASS ensures that the application is responsive and works smoothly across different devices, providing an optimal user experience.
                </p>
            </div>
                
            <div class="project-button-container">
                <a href="https://josy.dev/react-movie-app/" target="_blank" rel="noopener noreferrer">
                    <button class="project-button">
                        Live Site
                    </button>
                </a>

                <a href="https://github.com/josyliyh/react-movie-app/" target="_blank" rel="noopener noreferrer">
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
                        <h3>Auto-complete Search Bar</h3>
                        <p>The application features a dynamic search bar that allows users to easily find movies by typing in any string. As the user types, the application will suggest results immediately, providing a convenient and efficient way to search for movies. Users can browse through the suggested results and select the movie they are looking for, without having to manually scroll through a long list of movies.</p>
                        
                        <video  autoplay muted loop>
                            <source src="./media/movie/screenshot_search.mp4" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                        
                        <p class="codepen" data-height="300" data-default-tab="js" data-slug-hash="LYrRJEY" data-editable="true" data-user="Josyyhli" style="height: 300px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;">
                            <span>See the Pen <a href="https://codepen.io/Josyyhli/pen/LYrRJEY">
                            Untitled</a> by j (<a href="https://codepen.io/Josyyhli">@Josyyhli</a>)
                            on <a href="https://codepen.io">CodePen</a>.</span>
                        </p>
                        <script async src="https://cpwebassets.codepen.io/assets/embed/ei.js"></script>
                    </article>

                    <article class="feature reveal">
                        <h3>Add to Favourite</h3>
                        <p>The application allows users to add and remove movies from their favorite list. Users can simply click on a button on the movie detail page to add or remove a movie from their favorite list. The favorite movies are saved in local storage, allowing users to access their favorite movies even after they have closed the application or their browser. A separate "Favorites" page is also provided where users can view all the movies they have marked as favorites. This feature allows users to easily access and keep track of their favorite movies, making it more convenient for them to view them again in the future.</p>
                            <div class="feature-container">
                                <video width="300px" autoplay muted loop>
                                    <source src="./media/movie/screenshot_favourite.mp4" type="video/mp4">
                                    Your browser does not support the video tag.
                                </video>
                                <video  width="300px" autoplay muted loop>
                                    <source src="./media/movie/screenshot_unfavourite.mp4" type="video/mp4">
                                    Your browser does not support the video tag.
                                </video>
                            </div>
                        <p class="codepen" data-height="300" data-default-tab="js" data-slug-hash="VwdKGve" data-editable="true" data-user="Josyyhli" style="height: 300px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;">
                            <span>See the Pen <a href="https://codepen.io/Josyyhli/pen/VwdKGve">
                            Fav</a> by j (<a href="https://codepen.io/Josyyhli">@Josyyhli</a>)
                            on <a href="https://codepen.io">CodePen</a>.</span>
                        </p>
                        <script async src="https://cpwebassets.codepen.io/assets/embed/ei.js"></script>
                    </article>
                    
                    <article class="feature reveal">
                        <h3>Placeholder Image</h3>
                        <p>In cases where there is no available movie poster or cast member photo, the application will display a placeholder image to fill that space. This ensures that the layout of the application is not broken and the user experience is not affected. Placeholder images are commonly used in web development as a fallback option for missing or unavailable images. It also helps to keep the website look consistent. Placeholder images are a simple but effective way to handle missing images and maintain the aesthetic of the application.</p>
                        
                        <img class="screenshot" src="./media/movie/screenshot_placeholder.png">

                        <p class="codepen" data-height="300" data-default-tab="js" data-slug-hash="PoaGdZm" data-editable="true" data-user="Josyyhli" style="height: 300px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;">
                            <span>See the Pen <a href="https://codepen.io/Josyyhli/pen/PoaGdZm">
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
                        Cloud Movies was our first project using React, and it was a great learning experience. Initially, we faced some challenges adapting our JavaScript skills to React's syntax, but we were able to overcome them by taking advantage of the wealth of resources available online. We spent around a week learning React and its syntax, but our hard work paid off as we were able to complete the project successfully. It was a great opportunity to expand our skillset and improve our understanding of modern web development.
                    </p>
                    <p>
                        In developing Cloud Movies, I also gained experience working with REST API to fetch data. I learned how to properly make API calls and handle the data that was returned. Furthermore, I learned to manipulate the data to display contents in a way that focuses on user experience.
                    </p>
                    <p>
                        Additionally, this project has helped me to improve my skills in software development by learning to work with React framework. The experience of working within a team and utilizing Github for version control also helped me to improve my collaboration and problem-solving skills. Overall, this project was a great learning experience and I am excited to continue building more applications using React in the future.
                    </p>
                </article>
          
        </section>
    </main>
</body>
<script src="./scripts/script.js"></script>
</html>