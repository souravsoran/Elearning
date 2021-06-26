<?php require('includes/header.php') ?>

    <div class="card bg-light">
    <article class="card-body mx-auto" style="max-width: 400px;">
    <h4 class="card-title text-center">Create Account</h4>
    <p class="text-center">Get started with your free Account</p>
    <p>
    <a href="" class="btn btn-block btn-gmail"><i class="fa fa-google"></i> Login via Gmail</a>
    <a href="" class="btn btn-block btn-facebook"><i class="fa fa-facebook"></i> Login via facebook</a>
    </p>
    <p class="divider-text">
        <span class="bg-light">OR</span>
    </p>
    <form action="<?php echo htmlentities($_SERVER['PHP_SELF']);?>" method="POST">
        <div class="form-group input-group">
            <div class="input-group-prepend">
                <span class="input-group-text"><i class="fa fa-user"></i></span>
            </div>    
            <input name="username" class="form-control" placeholder="Full name" type="text" required>
        </div>
        
        <div class="form-group input-group">
            <div class="input-group-prepend">
                <span class="input-group-text"><i class="fa fa-envelope"></i></span>
            </div>    
            <input name="email" class="form-control" placeholder="Email address" type="email" required>
        </div>

        <div class="form-group input-group">
            <div class="input-group-prepend">
                <span class="input-group-text"><i class="fa fa-phone"></i></span>
            </div>    
            <input name="mobile" class="form-control" placeholder="Phone number" type="number" required>
        </div>

        <div class="form-group input-group">
            <div class="input-group-prepend">
                <span class="input-group-text"><i class="fa fa-lock"></i></span>
            </div>    
            <input class="form-control" placeholder="Create password" type="password" name="password" valur="" required>
        </div>

        <div class="form-group input-group">
            <div class="input-group-prepend">
                <span class="input-group-text"><i class="fa fa-lock"></i></span>
            </div>    
            <input class="form-control" placeholder="Repeat password" type="password" name="cpassword" required>
        </div>

        <div class="form-group">
            <button type="submit" name="submit" class="btn btn-primary btn-block">Create Account</button>
        </div>
        <p class="text-center">Have an account?<a href="login.php">login In</a></p>

    </form>
    </article>
    </div>
    
    <?php require('includes/footer.php') ?>