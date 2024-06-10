<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo  $title; ?></title>
<link rel="stylesheet" href="/assets/css/style.css">
</head>
<body>
<header>
        <h1>Welcome to Bframe</h1>
</header>


<main>
        <p>Congratulations! You've successfully created your first page with <?php echo $title  ?> Bframe.</p>
        <p>This is a simple welcome page to get you started. Explore Bframe and build something amazing!</p>
    <section>
        <p>This page uses Normal PHP for rendering pages. You can switch to TWIG rendering by setting 'use' to true in the config/pages.php file, and create your pages in resources/pages/twig.</p>
    </section> 
 </main>




    <footer>
        <p>&copy; BayScope  All rights reserved.</p>
    </footer>
   
</body>
</html>