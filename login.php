<?php require('includes/header.php') ?>
    <div class="card bg-light">
    <article class="card-body mx-auto" style="max-width: 400px;">
    <h4 class="card-title text-center">Login Here</h4>
   
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
                <span class="input-group-text"><i class="fa fa-envelope"></i></span>
                <input name="email" class="form-control" placeholder="Email address" type="email" required>
            </div>    
        </div>

        <div class="form-group input-group">
            <div class="input-group-prepend">
                <span class="input-group-text"><i class="fa fa-lock"></i></span>
                <input class="form-control" placeholder="Enter password" type="password" name="password" valur="" required>
            </div>    
           
        </div>

        <div class="form-group">
            <button type="submit" name="submit" class="btn btn-primary btn-block">Login</button>
        </div>
        <p class="text-center">Have not an account?<a href="register.php">Create An Account</a></p>

    </form>
    </article>
    </div>
    
    <?php require('includes/footer.php') ?>