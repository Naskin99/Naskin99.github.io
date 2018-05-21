<html>
    
    <head>
        <link type="text/css" rel="stylesheet" href="css/style.css">
        <link href="https://fonts.googleapis.com/css?family=IBM+Plex+Serif:200,400" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Oswald:200,400" rel="stylesheet">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
    </head>
    
    <body>
        <header>
            <img id="logo" src="img/logo.png">
        </header>
        
        <nav>
            <div id="about-link" class="nav-item">Info</div>
            <div id="portfolio-link" class="nav-item">Portfolio</div>
            <div id="testamonials-link" class="nav-item">Testimonials</div>
            <div id="contact-link" class="nav-item">Contact</div>
        </nav>
        
        <div id="map-bg">
            
            <div id="map-container">
                <div id="map"></div>

                <script src="js/maps.js">
                    initMap()
                </script> 
                <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyARhoLCYUcUR49ToPsIUYua_8Q2tpCCsmU&callback=initMap">
                </script>

                <div id="map-footer">
                    Based out of Ferrybridge, Brown's Decorating are proud to offer our excellent services all across North, East, South and West Yorkshire.
                </div>
            </div>
        </div>
        
        <div class="marker-alt" id="about-marker"></div>
        
        <div class="container container-alt">
            <div class="section-header"> About Us </div>
            <div id="info-content">
                 Here at Browns Decorating we offer all aspects of interior and exterior decorating in both domestic and commercial settings.
                 Almost all of the paints we use are from Dulux Trade centres, ensuring top notch quality.
                 All interior decorating is done with low VOC paint which is better for your health and the environment.
                 We are fully insured and are proud to offer our top quality work and friendly service at excellent prices, no matter how big or small the job.    
            </div>
        </div>
        
        <div class="marker" id="portfolio-marker"></div>
                
        <div class="container">
            <div class="section-header">Our Work</div>
            <div id="portfolio-content">
                <div class="portfolio-column">
                    <img src="img/1.png">
                    <img src="img/2.png">
                    <img src="img/3.png">
                    <img src="img/4.png">
                    <img src="img/5.png">
                    <img src="img/6.png">
                    <img src="img/7.png">
                    <img src="img/8.png">
                    <img src="img/9.png">
                    <img src="img/10.png">
                    <img src="img/11.png">
                </div>
                <div class="portfolio-column">
                    <img src="img/12.png">
                    <img src="img/13.png">
                    <img src="img/14.png">
                    <img src="img/15.png">
                    <img src="img/16.png">
                    <img src="img/17.png">
                    <img src="img/18.png">
                    <img src="img/19.png">
                    <img src="img/20.png">
                    <img src="img/21.png">
                </div>
                <div class="portfolio-column">
                    <img src="img/23.png">
                    <img src="img/22.png">
                    <img src="img/24.png">
                    <img src="img/25.png">
                    <img src="img/26.png">
                    <img src="img/27.png">
                    <img src="img/28.png">
                    <img src="img/29.png">
                    <img src="img/30.png">
                    <img src="img/31.png">
                    <img src="img/32.png">
                    <img src="img/33.png">
                </div>
            </div>
            <span id="portfolio-toggle" onclick="">show more</span>
        </div>
        
        <div class="marker-alt" id="testamonials-marker"></div>
                
        <div class="container container-alt">
            <div class="section-header"> Testimonials </div>
            <div id="testamonials">Keith did our changing facilities at kellingley welfare f.c....was a really big job...they hadnt been  done for a few years...he did a fantastic job .very proffesional...still looks the biz now...thanks very much keith..</div>
            <div id="testamonial-toggle-button-container">
                <div class="testamonial-toggle-button" id="testamonial-prev">Prev</div>
                <div class="testamonial-toggle-button" id="testamonial-next">Next</div>
            </div>
        </div>
        
        <div class="marker" id="contact-marker"></div>
                
        <div class="container">
            <div class="section-header"> Contact Us </div>
            <div class="contact-detail"> Please feel free to get in touch to make appointments using the form or details below it. We are open all week, 9am-5pm. </div>
            <form id="contact-form" method="POST" name="email-form" action="email-landing-page.php" enctype="multipart/form-data">
                <div id="contact-form-cols">
                    <div class="contact-form-col">
                        <div>Your Name *</div> <input class="contact-form-textbox" name="name" type="text" >
                    </div>
                    <div class="contact-form-col">
                        <div>Your Email *</div> <input class="contact-form-textbox" name="email" type="text" >
                    </div>
                    <div class="contact-form-col">
                        <div>Phone Number</div> <input class="contact-form-textbox" name="phone" type="text" >
                    </div>
                </div>
                
                
                <div id="text-area-header">Your Message *</div> 
                
                <textarea id="contact-form-message" name="message" rows="10"></textarea>
                
                <div id="submit-button-container">
                    <input type="submit" value="Send Email">
                </div>
            </form>
            <div class="contact-detail"><a href="mailto:brownsdecorating@btinternet.com">E : queries@brownsdecorating.com</a></div>
            <div class="contact-detail"> T : 01977 672382 </div>
            <div class="contact-detail"> M : 07917 004361 </div>
        </div>
        
        <footer class="container container-alt">
            <img id="footer-logo" src="img/logo.png"> <br>
            <a href="mailto:brownsdecorating@btinternet.com">E : queries@brownsdecorating.com</a> <br>
            T - 01977 672382 M - 07917 004361
        </footer>


    </body>
    
    <script src="js/script.js">
    </script>
    
</html>