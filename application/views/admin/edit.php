
<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

?>
<div class="left">
    <h1 class="page-title">Edit User</h1>
    <div class="form-wrap">
        <?php echo form_open('/admin/update'); ?>
        <label for="rider-first">First Name</label>
        <input type="text" id="rider-first" name="first" class="form-control input" value="<?php echo $first_name; ?>"/>
        
        <label for="rider-last">Last Name</label>
        <input type="text" id="rider-last" name="last" class="form-control input" value="<?php echo $last_name; ?>"/>
        
        <label for="rider-email">Email</label>
        <input type="text" id="rider-email" name="email" class="form-control input" value="<?php echo $email; ?>"/>
        
        <label for="rider-phone">Phone</label>
        <input type="text" id="rider-phone" name="phone" class="form-control input" value="<?php echo $phone; ?>"/>
        
        <input type="hidden" id="rider-id" name="id" value="<?php echo $user_id; ?>"/>
        <br />
        <button id="rider-btn" class="wt-btn">Update</button>
        </form>
    </div>
</div>