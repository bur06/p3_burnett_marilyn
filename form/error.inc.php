<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- no index -->
        <meta name="googlebot" content="noindex" />
        <meta name="robots" content="noindex, nofollow">
        <title>Error Fields</title>

        <!-- link to favicon -->
        <link rel="icon" href="images/p3_favicon.ico">

        <!-- link to sytle.css -->
        <link rel="stylesheet" type="text/css" href="css/style.css" />

        <!-- link to Adobe Typekit -->
        <link rel="stylesheet" href="https://use.typekit.net/yti5vqt.css">

        <!-- Google Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,600;0,700;1,400&display=swap" rel="stylesheet">
    </head>


    <!-- Main Content -->
    <body>
        <div class="container">
            <header>
                <figure class="navleft">
                    <a href="index.html"><img src="images/p3_tpemblem.png" alt="MT Logo" title="Water Bubble Emblem" width="250"/></a>
                </figure>
                <nav id="navright">
                    <label for="hamburger">&#9776;</label>
                    <input type="checkbox" id="hamburger"/>
                    <div id="hamitems">
                        <a href="index.html">HOME</a>
                        <a href="services.html">SERVICES</a>
                        <a href="about.html">ABOUT</a>
                        <a href="contact.html">CONTACT</a>
                    </div>
                </nav>
            </header>
            
            <main>
            <div class="container">
                <div class="replytext">
                    <h1>Missing fields</h1>
                    <p>Sorry, you have not completed all of the required fields.</p>
                    <p>Please hit <a href="#" onClick="history.go(-1)">back</a> and complete the following required fields.</p>

                    <ul>
                    <?php
                        for($i=0; $i<count($this->missing_required_fields); $i++){
                        echo "<li>" . $this->missing_required_fields[$i]['title'] . "</li>\n";
                        }
                    ?>
                    </ul>

                    <p><strong><a href="#" onClick="history.go(-1)">Back to form</a></strong></p>
                </div>
            </div>
            </main>

            <footer>
            </footer>
        </div>   

    </body>
</html>