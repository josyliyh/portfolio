<!DOCTYPE html>
<html lang="en">
<?php $title = 'Portfolio of Josy Li | WordPress Vacation Rental'; include 'head.php'?>
<body>

    <?php include 'nav.php'?>
    <header class="page-header">
        <img sizes="(max-width: 1120px) 100vw, 1120px"
        srcset="
        ./media/villasbay/villasbay_uu6imn_c_scale,w_360.png 360w,
        ./media/villasbay/villasbay_uu6imn_c_scale,w_617.png 617w,
        ./media/villasbay/villasbay_uu6imn_c_scale,w_805.png 805w,
        ./media/villasbay/villasbay_uu6imn_c_scale,w_984.png 984w,
        ./media/villasbay/villasbay_uu6imn_c_scale,w_1120.png 1120w"
        src="./media/villasbay/villasbay_uu6imn_c_scale,w_1120.png"
            alt="">
        <h1>The Villas Bay</h1>
    </header>

    <main>
        <section class="section-height  reveal" id="project-main">
        
            <div class="titlecontainer">
                <h2 class="project-title">Overview</h2>
                <hr>
            </div>  
                    <p>Tools: WordPress, PHP, WooCommerce, Sass, JavaScript</p>
                    <p>Duration: 4 weeks</p>
                    <p>
                        The Villas Bay is a multi-page e-commerce website, built using WordPress and WooCommerce. Our goal was to create a user-friendly platform for the client, where they could easily add, edit, and remove content without the need for coding knowledge. To achieve this, we developed a custom WordPress theme using the Underscores starter theme. The website showcases the various Villas and activities offered by the company, and allows users to make bookings directly on the site. The website is designed to be visually appealing, easy to navigate and provides all the necessary information to the users.
                    </p>

                    <div class="project-button-container">
                        <a href="https://villasbay.bcitwebdeveloper.ca/" target="_blank" rel="noopener noreferrer">
                            <button class="project-button">
                                Live Site
                            </button>
                        </a>
                    </div>
                    
                    <div class="titlecontainer reveal" id="features">
                        <h2 class="project-title">Features</h2>
                        <hr>
                    </div>
                    <article class="feature reveal">
                        <h3>Generate a new taxonomy automatically</h3>
                        <p>In order to display a testimonial for each villa on its corresponding page, we implemented a function to automatically generate a new testimonial taxonomy when a villa is created and associates it with the newly created villa. This approach ensures that every villa has a corresponding testimonial, providing a more comprehensive and informative user experience. Additionally, using code to automate the creation of the testimonial taxonomy makes the process more efficient and less prone to errors.</p>
                        
                        <p class="codepen" data-height="300" data-default-tab="js" data-slug-hash="GRGraPd" data-editable="true" data-user="Josyyhli" style="height: 300px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;">
                            <span>See the Pen <a href="https://codepen.io/Josyyhli/pen/GRGraPd">
                            Automate taxonomy</a> by j (<a href="https://codepen.io/Josyyhli">@Josyyhli</a>)
                            on <a href="https://codepen.io">CodePen</a>.</span>
                          </p>
                          <script async src="https://cpwebassets.codepen.io/assets/embed/ei.js"></script>
                
                    </article>

                    <article class="feature reveal">
                        <h3>Filter system for experiences</h3>
                        <p>A filter button will be implemented for each category, allowing users to easily view experiences within that specific category. By adding this feature, we aim to give users a more efficient way to navigate and find the information they are looking for.</p>

                        <p class="codepen" data-height="300" data-default-tab="js" data-slug-hash="QWxdRPR" data-editable="true" data-user="Josyyhli" style="height: 300px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;">
                            <span>See the Pen <a href="https://codepen.io/Josyyhli/pen/QWxdRPR">
                            Filter Experience</a> by j (<a href="https://codepen.io/Josyyhli">@Josyyhli</a>)
                            on <a href="https://codepen.io">CodePen</a>.</span>
                          </p>
                          <script async src="https://cpwebassets.codepen.io/assets/embed/ei.js"></script>

                    </article>

                    <article class="feature reveal">
                        <h3>Client-first Approach</h3>
                        <p>
                            We utilized the Advanced Custom Fields (ACF) plugin to make the process of adding and editing content user-friendly for the client. This plugin allowed us to create custom fields for different types of content, making it easy for the client to input data and maintain the desired format. This approach ensured that the client had the flexibility to update and manage their website content with ease, while also maintaining the desired layout and format. By using ACF, we were able to create a user-friendly interface that allowed the client to have full control over their website's content.
                        </p>
                        <img src="./media/villasbay/screenshot-acf.png">

                    </article>

                    
                <article class="reflection reveal">
                    <div class="titlecontainer" id="reflection">
                        <h2 class="project-title">Reflection</h2>
                        <hr>
                    </div>
                    <p>
                        The key takeaway from this project is the significance of thorough planning. Early on in the project, we created an excel document outlining the list of content that would be included on each page and how it would be stored. We also included all the custom post types (CPTs) and taxonomies, making sure to be as detailed as possible in order to avoid duplication of content during development. Additionally, we created both low and high-fidelity mockups, which greatly streamlined the styling process and made it more efficient. By taking the time to plan and organize our content, we were able to ensure a smooth and efficient development process.
                    </p>

                </article>
        </section>
    </main>
</body>
<script src="./scripts/script.js"></script>
</html>