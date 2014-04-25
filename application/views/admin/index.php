<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>

<div class="left">
    <h1 class="page-title">Admin Login</h1>
    <div class="form-wrap">
        <?php form_open('/admin/login'); ?>
            <label for="admin-user">User</label>
            <input type="text" id="admin-user" class="input form-control" placeholder="Admin User"/>
            <br />
            <label for="admin-pass">Password</label>
            <input type="password" id="admin-pass" class="input form-control" />
            <br />
            <button id="admin-login-btn" class="wt-btn">Login</button>
        </form>
    </div>
</div>