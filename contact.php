<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- SEO Meta Tags -->
    <title>Contact Us | The Tech Care - Expert Digital Marketing Services</title>
    <meta name="description" content="Get in touch with The Tech Care for top-notch digital marketing services. We specialize in SEO, PPC, web development, and social media management. Contact us today to enhance your online presence and drive results.">
    <meta name="author" content="The Tech Care">
    <meta name="keywords" content="Contact TTC, digital marketing services, SEO services, PPC services, web development, social media management, enhance online presence, drive traffic, increase leads">
    <!-- OG Meta Tags to improve the way the post looks when you share the page on Facebook, Twitter, LinkedIn -->
    <meta property="og:site_name" content="The Tech Care" /> <!-- website name -->
    <meta property="og:site" content="https://www.thetechcare.in" /> <!-- website link -->
    <meta property="og:title" content="Contact Us | The Tech Care - Expert Digital Marketing Services" /> <!-- title shown in the actual shared post -->
    <meta property="og:description" content="Get in touch with The Tech Care for top-notch digital marketing services. We specialize in SEO, PPC, web development, and social media management. Contact us today to enhance your online presence and drive results." /> <!-- description shown in the actual shared post -->
    <meta property="og:image" content="https://www.thetechcare.in/images/og_files/og-image.png" /> <!-- image link, make sure it's jpg -->
    <meta property="og:url" content="<?= $_SERVER['HTTP_HOST']; ?>" /> <!-- where do you want your post to link to -->
    <!-- Webpage Title -->

    <?php require('./include/header.php'); ?>

</head>

<body data-spy="scroll" data-target=".fixed-top">

    <?php require('./include/nav.php'); ?>

    <!-- Header -->
    <header class="ex-header">
        <div class="container">
            <div class="row">
                <div class="col-xl-10 offset-xl-1">
                    <h1>Contact Us</h1>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </header> <!-- end of ex-header -->
    <!-- end of header -->


    <!-- Introduction -->
    <div id="introduction" class="cards-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="h2-heading">Let's TALK</h2>
                    <p class="p-heading">We'd love to answer any questions you may have. Contact us and discuss your business objectives & we will let you know how we can help along with a Free Quote.</p>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
            <div class="row">
                <div class="col-lg-12">

                    <!-- Card -->
                    <a href="tel:8929721558" class="no-line">
                        <div class="card">
                            <div class="card-icon">
                                <i class="fas fa-phone-alt"></i>
                            </div>
                            <div class="card-body">
                                <h4 class="card-title">Give us a call</h4>
                                <a class="text-color-web" href="tel:8929721558">+91 8929721558</a>
                            </div>
                        </div>
                    </a>

                    <!-- end of card -->

                    <!-- Card -->
                    <a href="tel:info@thetechcare.in" class="no-line">
                        <div class="card">
                            <div class="card-icon">
                                <i class="fas fa-envelope"></i>
                            </div>
                            <div class="card-body">
                                <h4 class="card-title">Write to us</h4>
                                <a class="text-color-web" href="tel:info@thetechcare.in">info@thetechcare.in</a>
                            </div>
                        </div>
                    </a>

                    <!-- end of card -->

                    <!-- Card -->
                    <a href="https://maps.app.goo.gl/Cp86mXBtCF68wXDR8" class="no-line">

                        <div class="card">
                            <div class="card-icon">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <div class="card-body">
                                <h4 class="card-title">Office meet</h4>
                                <a class="text-color-web" href="https://maps.app.goo.gl/DPNLbSfc2DrkVT8D8">DC Tower, 201-204, C Block, JJ Colony, Janakpuri, Delhi, 110046</a>
                            </div>
                        </div>
                    </a>

                    <!-- end of card -->



                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of cards-1 -->
    <!-- end of introduction -->

    <div class="container mb-5">

        <div class="row">

         

            <div class="col-md-7">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14008.507100827204!2d77.061473!3d28.6259623!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x682d7ee37cb76129%3A0xbde20749e9f2a349!2sThe%20Tech%20Care!5e0!3m2!1sen!2sin!4v1721760693623!5m2!1sen!2sin" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

            
            </div>

            <div class="col-md-5">

                <!-- Contact Form -->
                <form id="formSubmit">
                    <div class="form-group">
                        <input type="text" class="form-control-input" name="name" placeholder="Name">
                        <span class="error-message"></span>
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control-input" name="email" placeholder="Email">
                        <span class="error-message"></span>
                    </div>
                    <div class="form-group">
                             <input type="text" class="form-control-input" name="phone" placeholder="Phone">
                             <span class="error-message"></span>
                         </div>
                    <div class="form-group">
                        <input type="text" class="form-control-input" name="subject" placeholder="Subject">
                        <span class="error-message"></span>
                    </div>
                    <div class="form-group">
                        <textarea class="form-control-textarea" name="message" placeholder="Message"></textarea>
                        <span class="error-message"></span>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="form-control-submit-button">Submit</button>
                    </div>
                </form>
                <!-- end of contact form -->

            </div> <!-- end of col -->
        </div> <!-- end of row -->
    </div>





    <?php require('./include/onlyFooter.php'); ?>