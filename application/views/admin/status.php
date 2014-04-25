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
    </tr>
    
    <tr>
        <td>2</td>
        <td>Sara</td>
        <td>Johnson</td>
        <td>(555) 555-5555</td>
        <td>email@domain.com</td>
        <td>898 Cougar St.</td>
        <td>12345 Hawks Dr.</td>
    </tr>
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
    </tr>
    
    <tr>
        <td>1</td>
        <td>Jill</td>
        <td>Smith</td>
        <td>(555) 555-5555</td>
        <td>email@domain.com</td>
        <td>123 Apple St.</td>
        <td>456 Orange Dr.</td>
    </tr>
</table>

<a href="<?php echo base_url('/admin/add'); ?>"><button id="new-ride-btn" class="wt-btn">Add Rider</button></a>
</div>