<html>
    <head>
        <meta http-equiv="content-type" content="text/html;charset=utf-8" />
        <title>Women's Transit</title>
        <!--<script src="https://cdnjs.cloudflare.com/ajax/libs/normalize/3.0.1/normalize.min.css" type="text/javascript" />-->
        <link rel="stylesheet" href="/CS483-Final/content/bootstrap/css/bootstrap-responsive.css" type="text/css" />
        <link rel="stylesheet" href="/CS483-Final/content/bootstrap/css/bootstrap.css" type="text/css" />
       <link href='http://fonts.googleapis.com/css?family=Racing+Sans+One' rel='stylesheet' type='text/css'>
       <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.0/jquery.min.js" type="text/javascript"></script>
       <link href="<?php echo base_url('/content/style.css'); ?>" type="text/css" rel="stylesheet" />
        <style type="text/css">
           
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
         
         $('#get-fav').click(function(){
            window.location = "<?php echo base_url('/home/favorites'); ?>";
         });
         
         $('#get-other').click(function(){
             window.location = "<?php echo base_url('/home/other'); ?>";
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