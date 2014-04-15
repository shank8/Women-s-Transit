<html>
    <head>
        <meta http-equiv="content-type" content="text/html;charset=utf-8" />
        <title>Women's Transit</title>
        <link rel="stylesheet" href="/CS483-Final/content/bootstrap/css/bootstrap-responsive.css" type="text/css" />
        <link rel="stylesheet" href="/CS483-Final/content/bootstrap/css/bootstrap.css" type="text/css" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.0/jquery.min.js" type="text/javascript"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.1.1/js/bootstrap.min.js" type="text/javascript"></script>
    </head>
<body>
    <div id="wrap">
        <nav id="nav-bar">
            <ul id="nav-bar-list">
                <li class="nav-item"><a href="<?php echo site_url('home/index'); ?>">Home</a></li>
                <!-- add more links as needed.. for now, we will not check for admin -->
            </ul>
        </nav>
        <section id="content">
            <?php echo $content_for_layout ?>
        </section>
        <footer>
            
        </footer>
    </div>
      

</body>
</html>