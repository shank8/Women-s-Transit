<html>
    <head>
        <meta http-equiv="content-type" content="text/html;charset=utf-8" />
        <title>Women's Transit</title>
        <!--<script src="https://cdnjs.cloudflare.com/ajax/libs/normalize/3.0.1/normalize.min.css" type="text/javascript" />-->
        <link rel="stylesheet" href="/CS483-Final/content/bootstrap/css/bootstrap-responsive.css" type="text/css" />
        <link rel="stylesheet" href="/CS483-Final/content/bootstrap/css/bootstrap.css" type="text/css" />
       <link href='http://fonts.googleapis.com/css?family=Racing+Sans+One' rel='stylesheet' type='text/css'>
        <style type="text/css">
            /* Global elements */
            html, body {
                width:100%;
                height:100%;
                margin:0;
                padding:0;
               
            }
            #wrap {
                min-width:100%;
                position: relative;
                margin:0 auto;
                background:#fff;
            }
            .font-racing {
                font-family: 'Racing Sans One', cursive;
            }
            a:hover {
                text-decoration: none;
            }
            
            
            /* Navigation */
            #nav-bar {
                background:#000;
                width:100%;
                position:fixed;
                left:0;
                min-width:960px;
                z-index: 9999;
            }
            #nav-bar-list {
                list-style: none;
                position: relative;
                margin:0 auto;
            }
            .nav-item {
                float:left;
                line-height: 40px;
                text-align: center;
                padding:10px 3px;
            }
            .nav-item > a {
             
                color:#fff;
            }
            
            /* Content */
            #content {
                  top:60px;
                  position:relative;
            }
            .input {
                padding:8px !important;
                font:inherit;
                height:auto !important;
                width:300px;
            }
            label {
                font-size:20px;
            }
            
            /* Tabs */
            .section {
                padding:25px;
            }
            .section:nth-child(odd){
                background:#3FE8A4;
            }
            .center {
                max-width: 960px;
                position:relative;
                text-align:center;
                margin:0 auto;
            }
            .left {
                max-width: 960px;
                position:relative;
                text-align:left;
                margin:0 auto;
            }
            .right {
                max-width: 960px;
                position:relative;
                text-align:right;
                margin:0 auto;
            }
            #main-title {
                font-size:72px;
                font-family: 'Racing Sans One', cursive;
                padding:20px 0;
            }
            #login-tab {
                background:#ff;
                color:#000;
            }
            #form-login {
                width:250px;
            }
            #title-tab {
             
            }
            #about-tab {
          
            }
            #register-wrap {
                border-radius: 25px;
                background:#3FE8A4;
                position: absolute;
                top: 60px;
                left: 500px;
                color: #fff;
            }
            #register-wrap:hover {
                background:#000;
                color:#fff;
                cursor:pointer;
            }
            .register-btn {
                padding:25px;
                font-size:60px;
            }
            .info-header {
                text-align:justify;
            }
            #volunteer {
                padding:50px;
            }
            #volunteer > a {
                font-size: 54px;
                color: #3FE8A4;
                background: #fff;
                padding: 20px;
                margin-top: 50px;
            }
            
        </style>
    </head>
<body>
    <div id="wrap">
        <nav id="nav-bar">
            <ul id="nav-bar-list">
                <li class="nav-item"><a href="<?php echo site_url('/'); ?>">Home</a></li>
                <!-- add more links as needed.. for now, we will not check for admin -->
            </ul>
        </nav>
        <section id="content">
            <?php echo $content_for_layout ?>
        </section>
        <footer>
            
        </footer>
    </div>
      
     <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.0/jquery.min.js" type="text/javascript"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.1.1/js/bootstrap.min.js" type="text/javascript"></script>
</body>
</html>