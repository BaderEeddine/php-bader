

    <div class="container   mt-5 d-flex justify-content-center " >
        <div class=" w-50 mt-5">
        <?php if(isset($errors)){
                $firstKey = array_key_first($errors);
               // var_dump($error);
               echo '<div class="alert alert-danger text-center" role="alert">'.
                    $errors[ $firstKey][0]
                 .'</div>';
                } 
              if(isset($error))
              {
                echo '<div class="alert alert-danger text-center" role="alert">'.
                $error
             .'</div>';
              }
             
            ?>
        <h2 class="text-center mt-3 pb-2" >Login</h2>
        <form  action="/login" method="post">
            <div class="form-group">
                <label>Email</label>
                <input type="text" name="email" class="form-control" value="">
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" class="form-control">
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Submit">
            </div>
        </form>
        <a href="/registre">Registre</a>
    </div>  
    </div>  
