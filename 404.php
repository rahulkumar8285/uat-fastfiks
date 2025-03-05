<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- SEO Meta Tags -->
    <title>Digital Solutions to Grow Your Business | The Tech Care</title>
    <meta name="description" content="Discover top-notch digital solutions with The Tech Care. We offer expert services in web development, app development, custom software, eCommerce, social media management, and local digital marketing to boost your online presence.">
    <meta name="author" content="The Tech Care">
    <meta name="keywords" content="digital solutions, web development, app development, custom software, eCommerce, social media management, local digital marketing">
    <!-- OG Meta Tags to improve the way the post looks when you share the page on Facebook, Twitter, LinkedIn -->
    <meta property="og:site_name" content="The Tech Care" /> <!-- website name -->
    <meta property="og:site" content="https://www.thetechcare.in" /> <!-- website link -->
    <meta property="og:title" content="Digital Solutions to Grow Your Business | The Tech Care" /> <!-- title shown in the actual shared post -->
    <meta property="og:description" content="Discover top-notch digital solutions with The Tech Care. We offer expert services in web development, app development, custom software, eCommerce, social media management, and local digital marketing to boost your online presence." /> <!-- description shown in the actual shared post -->
    <meta property="og:image" content="https://www.thetechcare.in/images/og_files/og-image.png" /> <!-- image link, make sure it's jpg -->
    <meta property="og:url" content="https://www.thetechcare.in/about-us" /> <!-- where do you want your post to link to -->
    <!-- Webpage Title -->
    <link rel="canonical" href="https://www.thetechcare.in/about-us" />

    <?php require('./include/header.php'); ?>



    <style>
        html,
        body {
            margin: 0;
            padding: 0;
            text-align: center;
            font-family: sans-serif;
            background-color: #E7FFFF;
        }

        h1,
        a {
            margin: 0;
            padding: 0;
            text-decoration: none;
        }

        .section {
            padding: 4rem 2rem;
        }

        .section .error {
            font-size: 150px;
            color: #008B62;
            text-shadow:
                1px 1px 1px #00593E,
                2px 2px 1px #00593E,
                3px 3px 1px #00593E,
                4px 4px 1px #00593E,
                5px 5px 1px #00593E,
                6px 6px 1px #00593E,
                7px 7px 1px #00593E,
                8px 8px 1px #00593E,
                25px 25px 8px rgba(0, 0, 0, 0.2);
        }

        .page {
            margin: 2rem 0;
            font-size: 20px;
            font-weight: 600;
            color: #444;
        }

        .back-home {
            display: inline-block;
            border: 2px solid #222;
            color: #fff;
            text-transform: uppercase;
            font-weight: 600;
            padding: 0.75rem 1rem 0.6rem;
            transition: all 0.2s linear;
            box-shadow: 0 15px 15px -11px rgba(0, 0, 0, 0.4);
            background: #222;
            border-radius: 6px;
        }

        .back-home:hover {
            background: #222;
            color: #ddd;
        }
    </style>
</head>

<body data-spy="scroll" data-target=".fixed-top">

    

    <?php require('./include/nav.php'); ?>

    <!-- Header -->
    <header class="ex-header">
        <div class="container">
            <div class="row">
                <div class="col-xl-10 offset-xl-1">
                    <h1>Page Not Found!</h1>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </header> <!-- end of ex-header -->
    <!-- end of header -->


    <div class="section">
        <h1 class="error">404</h1>
        <div class="page">Ooops!!! The page you are looking for is not found</div>
        <a class="back-home" href="<?= SITE_URL ?>">Back to home</a>
    </div>

    <?php require('./include/onlyFooter.php'); ?>