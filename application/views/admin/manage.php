<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

?>

<div class="left">
    <h1 class="page-title">Manage Users</h1>
    <table id="manage-table">
        <tr>
            <th>ID</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th></th>
            <th></th>
        </tr>
        
        <?php foreach($users as $user) { ?>
        <tr>
            <td><?php echo $user['Id']; ?></td>
            <td><?php echo $user['FirstName']; ?></td>
            <td><?php echo $user['LastName']; ?></td>
            <td><?php echo $user['Email']; ?></td>
            <td><?php echo $user['Phone']; ?></td>
            <td><a href="<?php echo base_url('/admin/edit/'.$user['Id']); ?>"><button class="btn btn-warning">Edit</button></a></td>
            <td><a href="<?php echo base_url('/admin/delete/'.$user['Id']); ?>"><button class="btn btn-danger">X</button></a></td>
        </tr>
        
        <?php } ?>
    </table>
</div>