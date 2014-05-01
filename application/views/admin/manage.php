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
            <td><?php echo $user['user_id']; ?></td>
            <td><?php echo $user['first_name']; ?></td>
            <td><?php echo $user['last_name']; ?></td>
            <td><?php echo $user['email']; ?></td>
            <td><?php echo $user['phone']; ?></td>
            <td><a href="<?php echo base_url('/admin/edit/'.$user['Id']); ?>"><button class="btn btn-warning">Edit</button></a></td>
            <td><a href="<?php echo base_url('/admin/delete/'.$user['Id']); ?>"><button class="btn btn-danger">X</button></a></td>
        </tr>
        
        <?php } ?>
    </table>
</div>