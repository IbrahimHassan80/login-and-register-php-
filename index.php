<?php  include('inc/header.php');  ?> 
<?php  include('inc/db.php');  ?> 

    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h1 class="text-center display-4 border p-3 my-5 "> Login System Using PHP </h1>
            	  
                  <?php if(isset($_SESSION['user_name'])): ?>
				  <h2>You Are looged in</h2>
				  <?php endif; ?>

            </div>
        </div>
    </div>

<?php  include('inc/footer.php');  ?> 
