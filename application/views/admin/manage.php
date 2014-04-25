<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

?>

<div class="left">
    <table id="manage-table">
        <tr>
            <!-- These are for favorites -->
            <td><button  data-id="<?php echo $favorite['Id']; ?>" class="btn btn-warning fav-edit-btn">Edit</button></td>
            <td><button  data-id="<?php echo $favorite['Id']; ?>" class="btn btn-danger fav-del-btn">Delete</button></td>
        </tr>
    </table>
</div>