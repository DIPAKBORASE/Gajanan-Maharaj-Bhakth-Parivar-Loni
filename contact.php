<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="/favicon.ico">
    <title>Gajanan Maharaj Bhakta Parivar</title>
    <!-- load stylesheets -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400">  <!-- Google web font "Open Sans" -->
     <link rel="stylesheet"
            href="https://fonts.googleapis.com/css?family=Open+Sans:300,400">
        <!-- Google web font "Open Sans" -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <!-- Bootstrap style -->
        <link rel="stylesheet" href="css/index.css">
        <link rel="stylesheet" href="./index.css">  
                <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css"
            rel="stylesheet">
                               <!-- Templatemo style -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ"
    crossorigin="anonymous">
    <script src="js/jquery-1.11.3.min.js"></script>             <!-- jQuery (https://jquery.com/download/) -->
        <script> 
                window.PageName = "Contact Us";
                $(function(){
                  $(".tm-header").load("header.html"); 
                  $(".tm-footer").load("footer.html"); 
                });
        </script> 
</head>

    <body>
       
          <?php
            include './navbar.php'
          ?>
        <div class="tm-contact-img-container tm-top-margin-100 m-t-3">
            <img src="./imgs/tm-contact-img.jpg" alt="">
        </div>

        <section>
            <div class="container-fluid">
                <div class="row">
                        <div class="col-md-5">
                        
                                <section>
                                    <h3 class="tm-gold-text tm-form-title">Contact Us</h3>
                                    <p class="tm-form-description">Please get in touch with us.</p> 
                                    <ul class="contact-info p-0">
                                            <li><a href="https://www.facebook.com/groups/1905666336394273/" target="_blank"><i class="fab fa-facebook-f"></i></a><span>Gajanan Maharaj Bhakta Parivar Group</span></li>
                                            <!--<li><a href="https://twitter.com/gajananmaharajbhaktaparivar" target="_blank"><i class="fab fa-twitter"></i></a><span>Follow Us on Gajanan Maharaj Bhakta Parivar</span></li> -->
                                            <li><i class="fa fa-phone"></i><span>+1 908-336-2884</span></li>
                                            <li><i class="fa fa-envelope"></i><span>gmbhaktparivar@gmail.com</span></li>
                                            <!--<li><i class="fa fa-map-marker"></i><span>1 Main Road, Plainsboro, NJ 08536</span></li>-->
                                        </ul>
        <p>        
            </p></section>
        <!-- 
            <section>
                                    <h3 class="tm-gold-text tm-form-title">Donation</h3>
                                    <p class="tm-form-description">We accept donations to help and support different activities that are conducted by our Parivar. If you have any questions regarding your donation request, please reach out to us any of the above mentioned communication channel.</p> 
        <b>All checks should be made payable to Gajanan Maharaj Bhakta Parivar USA</b>
                                </section> -->
                            </div>
                    <div class="col-xl-7">

                        <section>
                            <h3 class="tm-gold-text tm-form-title">Write Us</h3>
                            <p class="tm-form-description">If you would like to know any details about our <b>Parivar</b> or <b>Gajanan Maharaj</b>, please write us.</p> 


                            <form name="contact-form" id="contactForm" action="sendemail.php" method="POST" class="tm-contact-form">                                
                                <div class="form-group">
                                    <input type="text" id="name" name="name" class="form-control" placeholder="Name"  required/>
                                </div>
                                <div class="form-group">
                                    <input type="email" id="email" name="email" class="form-control" placeholder="Email"  required/>
                                </div>
                                <div class="form-group">
                                    <input type="text" id="subject" name="subject" class="form-control" placeholder="Subject"  required/>
                                </div>
                                <div class="form-group">
                                    <textarea id="message" name="message" class="form-control" rows="6" placeholder="Message" required></textarea>
                                </div>
                            
                                <button type="submit" class="tm-btn">Submit</button>                          
                            </form>   
                        </section>
                        
                                      
                 

                    </div>

                    
                    
                </div>

            </div>
        </section>
        <div class="tm-top-margin-100">  
            </div>
        <footer class="tm-footer">
            <div class="container-fluid">
               
                <div class="row">
                    
                    <div class="col-xs-6 tm-copyright-col">
                        <p class="tm-copyright-text">Gajanan Maharaj Bhakta Parivar &copy; 2019 </p>
                    </div>
                    <div class="social-media col-xs-6">
                        <a href="https://www.youtube.com/channel/UCNrJWmClJ6spLpwmLDyq2iA" target="_blank"><i class="fab fa-youtube" style="color:red"></i></a>

                        <a href="https://www.facebook.com/groups/1905666336394273/" target="_blank"><i class="fab fa-facebook-f"></i></a>
                        <!--<a href="https://twitter.com/gajananmaharajbhaktaparivar" target="_blank"><i class="fab fa-twitter"></i></a>-->
                        <a href="mailto:gmbhaktparivar@gmail.com"><i class="fas fa-envelope" style="color:white"></i></a>
                        <a href="#"><i class="fas fa-mobile-alt"></i> : +1 908-336-2884</a>
                    </div>
                </div>
            </div>
        </footer>

        <!-- load JS files -->
        <script src="https://www.atlasestateagents.co.uk/javascript/tether.min.js"></script> <!-- Tether for Bootstrap, http://stackoverflow.com/questions/34567939/how-to-fix-the-error-error-bootstrap-tooltips-require-tether-http-github-h --> 
        <script src="js/bootstrap.min.js"></script>                 <!-- Bootstrap (http://v4-alpha.getbootstrap.com/) -->
        <script src="js/script.js"></script>   
</body>
</html>

<script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script>
<script src="../path/to/flowbite/dist/flowbite.min.js"></script>