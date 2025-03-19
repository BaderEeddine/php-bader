
    <div class="container mt-5 d-flex justify-content-center" >
        <div class=" w-50">
            <?php if(isset($error)){
                $firstKey = array_key_first($error);
               // var_dump($error);
               echo '<div class="alert alert-danger text-center" role="alert">'.
                    $error[ $firstKey][0]
                 .'</div>';
            } ?>
        <h2 class="text-center mt-3 pb-2" >Register</h2>
        <form  action="/registre" method="post">
            <div class="form-group">
                <label>Name</label>
                <input type="text" name="name" class="form-control" value="">
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="text" name="email" class="form-control" value="">
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" class="form-control">
            </div>
            <div class="form-group">
                <label>Confirm Password</label>
                <input type="password" name="confirm_password" class="form-control">
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Submit">
            </div>
        </form>
    </div>  
    </div>  