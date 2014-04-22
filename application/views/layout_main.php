<html>
    <head>
        <meta http-equiv="content-type" content="text/html;charset=utf-8" />
        <title>Women's Transit</title>
        <!--<script src="https://cdnjs.cloudflare.com/ajax/libs/normalize/3.0.1/normalize.min.css" type="text/javascript" />-->
        <link rel="stylesheet" href="/CS483-Final/content/bootstrap/css/bootstrap-responsive.css" type="text/css" />
        <link rel="stylesheet" href="/CS483-Final/content/bootstrap/css/bootstrap.css" type="text/css" />
       <link href='http://fonts.googleapis.com/css?family=Racing+Sans+One' rel='stylesheet' type='text/css'>
       <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.0/jquery.min.js" type="text/javascript"></script>
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
            a {
                color:inherit;
            }
            a:hover {
                text-decoration: none;
                color:inherit;
            }
            .page-title {
                margin-top:35px;
                margin-bottom:25px;
                text-align: center;
            }
            h3 {
                text-align:center;
            }
            .form-wrap {
                width: 50%;
                margin:0 auto;
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
                margin-left:50px;
            }
            .nav-item {
                float:left;
                line-height: 40px;
                text-align: center;
                padding:10px 15px;
            }
            .nav-item > a {
                font-family: 'Racing Sans One', cursive;
                color:#dbdbdb;
                font-size:24px;
                text-transform: uppercase;
            }
            .nav-item:hover > a {
                color:#3FE8A4;
               
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
            
            /* Status Page */
            #table-waiting, #table-active {
               border-collapse: collapse;
               margin:0 auto;
               width:100%;
            }
            #table-waiting td, #table-active td, th {
                padding:8px;
                border:2px solid #3fe8a4;
                background: #45FFB4;
            }
            
            
            /* Footer */
            footer {
                background:#3FE8A4;
                text-align: center;
                padding:9px;
                margin-top:50px;
            }
            
            
            /* Buttons */
            .wt-btn {
                padding:10px 25px;
                background:#3fe8a4;
                color:#fff;
                border:2px solid #adadad;
                font-size:16px;
                font-weight:bold;
                margin:20px 0;
            }
            .conf {
                font-size:28px;
                padding:35 45px;
                width:250px;
            }
            
            /* Ride Page */
            .ride-btn {
                padding:150px;
                line-height:4em;
            }
            .ride-btn:hover {
                background:#5C5C5C;
                cursor:pointer;
                color:#fff;
            }
            .ride-btn-text {
                text-align:center;
                
                font-size:4em;
            }
            
            /* Confirm Page */
            #confirm-answer {
                text-align: center;
            }
            #add-input {
                width:100%;
                font-size:28px;
                text-align: center;
            }
        </style>
    </head>
<body>
    <div id="wrap">
        <nav id="nav-bar">
            <ul id="nav-bar-list">
                <li class="nav-item"><a href="<?php echo base_url('/home/index'); ?>">Home</a></li>
                <li class="nav-item"><a href="<?php echo base_url('/home/register'); ?>">Register</a></li>
                <li class="nav-item"><a href="<?php echo base_url('/home/ride'); ?>">Ride</a></li>
                <li class="nav-item"><a href="<?php echo base_url('/home/status'); ?>">Ride Status</a></li>
                <li class="nav-item"><a href="<?php echo base_url('/admin/status'); ?>">Queue Status</a></li>
                <!-- add more links as needed.. for now, we will not check for admin -->
            </ul>
        </nav>
        <section id="content">
            <section id="title-tab" class="section">
                <div class="center">
                    <h1 id="main-title">WSU Women's Transit</h1>
                </div>
            </section>
            <?php echo $content_for_layout ?>
            
            <footer>
                <h3>Thank you! Copyright 2014</h3>
            </footer>
        </section>
        
    </div>
      
     
     <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.1.1/js/bootstrap.min.js" type="text/javascript"></script>
     <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD-0-8K0CBYJs8Ku9hXpNk-wDCwhrm0ZcA&sensor=false"></script>
     <script type="text/javascript">
         var currentAddress = null;
         
         function confirmRide(address){
            window.location = "/CS483-Final/ride/confirm?address=" + encodeURIComponent(address);
            
         }
         
         $('#get-current').click(function(){
               // Get current location
               //$('.ride-btn').not(this).hide();
               $('#get-current > h1').text('Finding your location...please wait');
               GetGeolocation();
               
               
         });
         
         function GetGeolocation() {

            navigator.geolocation.getCurrentPosition(GetCoords);

         }


        function GetCoords(position){

       
         var latlng = new google.maps.LatLng(position.coords.latitude, position.coords.longitude);
         geocoder = new google.maps.Geocoder();
         
            geocoder.geocode({'latLng': latlng}, function(results, status) {
          if (status === google.maps.GeocoderStatus.OK) {
            if (results[0]) {
             console.log(results);
             currentAddress = results[0].formatted_address;
            
             if(currentAddress !== null){
                   confirmRide(currentAddress);
               }
              
            }
          } else {
            alert("Geocoder failed due to: " + status);
          }
        });
        
        }
        
        $(document).ready(function(){
            
        });
     </script>
</body>
</html>