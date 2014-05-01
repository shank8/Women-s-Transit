<div class="left">
    <h1 class="page-title">Register Now!</h1>
    <div class="form-wrap">
        <?php echo form_open('/register/reg'); ?>
            <label for="reg-first">First Name</label>
            <input type="text" class="form-control input" id="reg-first" name="first_name" placeholder="Enter First Name" />

            <label for="reg-last">Last Name</label>
            <input type="text" class="form-control input" id="reg-last" name="last_name" placeholder="Enter Last Name" />

            <label for="reg-email">Email</label>
            <input type="email" class="form-control input" id="reg-email" name="email" placeholder="Enter Email" />
            
            <label for="reg-phone">Phone</label>
            <input type="text" class="form-control input" id="reg-phone" name="phone" placeholder="Enter Phone" />
            
            <label for="reg-pass">Password</label>
            <input type="password" class="form-control input" name="password" id="reg-pass" />
            
            <label for="reg-pass-conf">Confirm Password</label>
            <input type="password" class="form-control input" name="pass-conf" id="reg-pass-conf" />
            
            <br />
            <button class="wt-btn" id="reg-submit">Register</button>
        </form>
    </div>
</div>
