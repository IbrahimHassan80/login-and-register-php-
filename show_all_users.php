<?php  include('inc/header.php');  ?> 
<?php if(!isset($_SESSION['user_name'])) header("location:index.php"); ?>

<table class="table">
  <thead>
    <tr>
      <th scope="col">All Users</th>
    </tr>
    <tr>
      <th scope="col">#</th>
      <th scope="col">name</th>
      <th scope="col">email</th>
      <th scope="col">mobile</th>
    </tr>
  </thead>
  <tbody>
    
    <?php 
       include 'classes/users.php'; 
       $i = 1;
    ?>
    
    <?php foreach(user::getalluser() as $data): ?>
    <tr>
      <th scope="row"> <?php echo $i++; ?> </th>
      <td> <?php echo $data->name;   ?> </td>
      <td> <?php echo $data->email;  ?> </td>
      <td> <?php echo $data->mobile; ?> </td>
    </tr>
    <?php endforeach; ?>
  
  </tbody>
</table>
<?php  include('inc/footer.php');  ?> 