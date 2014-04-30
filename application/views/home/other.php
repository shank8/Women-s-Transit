<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

?>

<div class="left">
    
    <h1 class="page-title">Other Address</h1>
    <h3>Please enter a valid address below!</h3>
    <?php echo form_open('/ride/create'); ?>
    <input type="text" id="other-address" name="address" class="form-control input" placeholder="e.g. 123 Main St. Pullman, Wa"/>
    <br />
    <div class="checkbox">
        <label for="other-save"><input type="checkbox" id="other-save" name="save-fave" class="form-control" /> Add to Favorite Places? </label>
    </div>
    
    <input type="hidden" name="session_key" value="<?php echo "SESSIONKEY"; ?>" />
    
   
    
    <br />
    <button class="wt-btn" id="other-btn">Submit</button>
    </form>
</div>