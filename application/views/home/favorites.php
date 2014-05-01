<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

?>
<div class="center">
    <h1 class="page-title">Favorite Places</h1>
    <table id="fav-table">
        <tr>
            <th></th>
            <th>Favorite Place</th>
            <th>Address</th>
        </tr>
        
        <?php foreach($favorites as $favorite){ ?>
        <tr>
            <td><input class="fav-check form-control" type="radio" name="favorites" value="<?php echo $favorite['location_id']; ?>"/></td>
            <td><?php echo $favorite['display_name']; ?></td>
            <td><?php echo $favorite['address']; ?></td>
        </tr>
        <?php } ?>
    </table>
    <button class="wt-btn">Submit</button>
</div>