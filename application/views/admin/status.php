<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

?>


<div class="left">
    <h1 class="page-title">Ride Status</h1>
    
<h3>Waiting Queue</h2>
<table id="table-waiting">
    <tr>
        <th>Ride ID</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Phone</th>
        <th>Email</th>
        <th>From</th>
        <th>To</th>
        <th></th>
        <th></th>
    </tr>
    
    <?php foreach($waiting as $ride){ ?>
    <tr>
        <td><?php echo $ride['Id']; ?></td>
        <td><?php echo $ride['FirstName']; ?></td>
        <td><?php echo $ride['LastName']; ?></td>
        <td><?php echo $ride['Phone']; ?></td>
        <td><?php echo $ride['Email']; ?></td>
        <td><?php echo $ride['AddressFrom']; ?></td>
        <td><?php echo $ride['AddressTo']; ?></td>
        <td><a href="<?php echo base_url('/admin/edit/'.$ride['Id']); ?>"><button class="btn btn-warning">Edit</button></a></td>
        <td><a href="<?php echo base_url('/admin/delete/'.$ride['Id']); ?>"><button class="btn btn-danger">X</button></a></td>
    </tr>
    <?php } ?>
</table>

<h3>Active Rides</h2>
<table id="table-active">
     <tr>
        <th>Ride ID</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Phone</th>
        <th>Email</th>
        <th>From</th>
        <th>To</th>
        <th></th>
        <th></th>
    </tr>
    
    <?php foreach($active as $ride){ ?>
    <tr>
        <td><?php echo $ride['Id']; ?></td>
        <td><?php echo $ride['FirstName']; ?></td>
        <td><?php echo $ride['LastName']; ?></td>
        <td><?php echo $ride['Phone']; ?></td>
        <td><?php echo $ride['Email']; ?></td>
        <td><?php echo $ride['AddressFrom']; ?></td>
        <td><?php echo $ride['AddressTo']; ?></td>
        <td><a href="<?php echo base_url('/admin/edit/'.$ride['Id']); ?>"><button class="btn btn-warning">Edit</button></a></td>
        <td><a href="<?php echo base_url('/admin/delete/'.$ride['Id']); ?>"><button class="btn btn-danger">X</button></a></td>
    </tr>
    <?php } ?>
</table>

<a href="<?php echo base_url('/admin/add'); ?>"><button id="new-ride-btn" class="wt-btn">Add Rider</button></a>
</div>