<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

?>
<div class="left">
    <h1 class="page-title"><?php echo $FirstName."'s"; ?> Profile</h1>
    <?php echo form_open('/home/save'); ?>
    <span class="prof-label">First Name</span><input id="prof-first" type="text" name="first" class="input form-control" value="<?php echo $FirstName; ?>" />
    <span class="prof-label">Last Name</span><input id="prof-last" type="text" name="last" class="input form-control" value="<?php echo $LastName; ?>" />
    <span class="prof-label">Email</span><input id="prof-email" type="email" name="email" class="input form-control" value="<?php echo $Email; ?>" />
    <span class="prof-label">Phone</span><input id="prof-phone" type="text" name="phone" class="input form-control" value="<?php echo $Phone; ?>" />
    
    <div id="prof-fav">
        <h2>Favorite Locations</h2>
        
        <table id="fav-table">
        <tr>
            <th>Favorite Place</th>
            <th>Address</th>
        </tr>
        
        <?php foreach($favorites as $favorite){ ?>
        <tr>
            <td><input class="input form-control" type="text" name="fav-display-<?php echo $favorite['Id']; ?>" value="<?php echo $favorite['DisplayName']; ?>" /></td>
            <td><input class="input form-control" type="text" name="fav-display-<?php echo $favorite['Id']; ?>" value="<?php echo $favorite['Address']; ?>" /></td>
        </tr>
        <?php } ?>
        </table>
        
    </div>
    <button class="wt-btn">Save</button>
    </form>
</div>