<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- no index -->
        <meta name="googlebot" content="noindex" />
        <meta name="robots" content="noindex, nofollow">
        <title>M and T Response</title>

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
            </header>

			<main>
					<?

					// From processing takes place here. message displayed here too
					require('form/form.class.php');
					$form = new Form();
					$form->processForm(

						'mgburnett.com' // Put you mail domain here
						,
						'Mermaids and Tadpoles Contact Form' // Put your site name / form name here
						,
						'burnett.marilyn@ufl.edu' // Where will the form notification be sent?
						,
						'noreply@mgburnett.com' // This what the form FROM: address wil be, if the form submissions doesn't contain an email field

					);


					?>
			</main>

			<footer>
            </footer>
        </div>   
        
    </body>
</html>