
      <?php if(isset($_SESSION['user'])){
             echo 
             "<form  method='post' action='/logout'>
             <input type='submit' class = 'btn btn-primary sub' value='Logout'>
            </form>
             <div >
            <h1 >hello ". $_SESSION["user"]->name." </h1>
            </div> ";
        }?>
    <!-- <div >
            <h1>hello welcome to the home</h1>
    </div>   -->
