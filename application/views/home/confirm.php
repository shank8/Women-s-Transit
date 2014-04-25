<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

?>
<div class="left">
    <h1 class="page-title">Ride Confirmation</h1>
    <h3 style="text-align: center;">Are you currently @</h3>
    <h3 id="address" style="text-align: center;"><?php echo $address; ?></h3>
    <input type="text" class="input form-control" id="add-input" value="<?php echo $address; ?>" />
<input type="hidden" value="<?php echo $address; ?>" id="cur-address"/>
<div id="confirm-answer">
    <button id="yes-btn" class="conf wt-btn">Yes</button>
    <br />
    <button id="no-btn" class="conf wt-btn">No</button>
</div>
</div>
<script>
    $('#add-input').hide();
    
    $('#yes-btn').click(function(){
               $('#cur-address').val($('#add-input').val());
               
               $.post('<?php echo base_url('/ride/create'); ?>', {
                   "session_key" : "ABC",
                   "address" : $('#cur-address').val()
               },
               function(result){
                   alert(result);
                   window.location = '<?php echo base_url('/ride/status'); ?>';
                   // This should send us to a Ride Status page
               },
               function(error){
                   alert(error);
                   // This should send us to an error page
               });
            });
            
    $('#no-btn').click(function(){
        $('#address').hide();
        $('#add-input').val($('#address').text()).show();
        $('#no-btn').hide();
       
        //$('#cur-address')
       });
</script>