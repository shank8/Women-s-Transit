

<section id="title-tab" class="section">
    <div class="center">
        <h1 id="main-title">WSU Women's Transit</h1>
    </div>
</section>

<section id="login-tab" class="section">
    <div class="left">
        
        <h1>Login</h1>

        <form id="form-login" role="form" action='login.php' method="POST">
            <div class="form-group">
                <label for="login-user">Email</label>
                <input type="email" id="login-user" class="form-control input" placeholder="Enter email" />
            </div>

            <div class="form-group">
                <label for="login-pass">Password</label>
                <input type="password" id="login-pass" class="form-control input" placeholder="Enter password" />
            </div>

            <button id="login-btn" class="btn btn-primary">Login</button>
        </form>
        
        <div id="register-wrap">
            <a href="<?php echo base_url('/register'); ?>"><h1 class="register-btn font-racing">Or Register</h1></a>
        </div>
    </div>
</section>

<section id="app-tab" class="section">
    <div class="center">
          <h1 style="text-align:left; border-bottom:2px solid #000; padding:8px 0;">Welcome</h1>
        <h3 class="info-header">Welcome to the new WSU Women's Transit online web app! Register for quick access to a Women's Transit volunteer ride directly from your mobile device</h3>
    </div>
</section>

<section id="about-tab" class="section">
    <div class="center">
        <h1 style="text-align:left; border-bottom:2px solid #000; padding:8px 0;">About</h1>
        <h3 class="info-header">Women's Transit is a safety service for WSU students and the Pullman community, provided by the WSU Coalition for Women Students and supported by the WSU Women's Resource Center, the CougParents program, and the WSU Center for Civic Engagement. We offer free rides almost anywhere within the Pullman city limits and walking escorts on the WSU campus. We also provide valuable volunteer opportunities to nearly 200 students each semester.</h3>
    </div>
</section>

<section id="join-tab" class="section">
    <div class="center">
        <h1 style="text-align:left; border-bottom:2px solid #000; padding:8px 0;">Join Us</h1>
        <h3 class="info-header">Women's Transit is made up by a number of awesome volunteers that provide safe and speedy transportation.</h2>
        <br />
        <h3 class="info-header">We are currently accepting volunteer applications. Please sign up now!</h2>
        
        <div id="volunteer">
            <a href="http://women.wsu.edu/womens-transit/volunteer/">Sign Up!</a>
        </div>
    </div>
</section>

