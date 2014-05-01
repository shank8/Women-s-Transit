<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

?>

<div class="left">
    <h1 class="page-title">Edit Rider</h1>
    <div class="form-wrap">
        <?php echo form_open('/ride/update'); ?>
        <label for="rider-first">First Name</label>
        <input type="text" id="rider-first" name="first" class="form-control input" value="<?php echo $FirstName; ?>"/>
        
        <label for="rider-last">Last Name</label>
        <input type="text" id="rider-last" name="last" class="form-control input" value="<?php echo $LastName; ?>"/>
        
        <label for="rider-email">Email</label>
        <input type="text" id="rider-email" name="email" class="form-control input" value="<?php echo $Email; ?>"/>
        
        <label for="rider-phone">Phone</label>
        <input type="text" id="rider-phone" name="phone" class="form-control input" value="<?php echo $Phone; ?>"/>
        
        <label for="rider-from">From</label>
        <input type="text" id="rider-from" name="from" class="form-control input" value="<?php echo $AddressFrom; ?>"/>
        
        <label for="rider-to">To</label>
        
        <input type="text" id="rider-to" name="to" class="form-control input" value="<?php echo $AddressTo; ?>"/>
        
        <input type="hidden" id="rider-id" name="id" value="<?php echo $Id; ?>"/>
        <br />
        <button id="rider-btn" class="wt-btn">Update</button>
        </form>
    </div>
</div>