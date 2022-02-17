<!-- Header -->
<?php include "../header.php"?>

  <div class="container">
    <h1 class="text-center" >User Data</h1>
      <a href="create.php" class='btn btn-outline-dark mb-2'> <i class="bi bi-person-plus"></i> Create New User</a>

        <table class="table table-striped table-bordered table-hover">
          <thead class="table-dark">
            <tr>
              <th  scope="col">ID</th>
              <th  scope="col">Username</th>
              <th  scope="col">Email</th>
              <th  scope="col">Country</th>
              <th  scope="col"> Date Added</th>
              <th  scope="col"> Status</th>
              <th  scope="col" colspan="3" class="text-center">Actions</th>
            </tr>  
          </thead>
            <tbody>
              <tr>
 
          <?php
            $query="SELECT * FROM users";               // SQL query to fetch all table data
            $view_users= mysqli_query($conn,$query);    // sending the query to the database

            //  displaying all the data retrieved from the database using while loop
            while($row= mysqli_fetch_assoc($view_users)){
              $id = $row['id'];                
              $user = $row['username'];        
              $email = $row['email'];         
              $country = $row['country'];
              $date = date("d/m/Y",strtotime($row['date_added']));        
              $status = $row['active'];
              $statusText = ($status == 1) ? "Active" : "Inactive";
              
              echo "<tr >";
              echo " <th scope='row' >{$id}</th>";
              echo " <td > {$user}</td>";
              echo " <td > {$email}</td>";
              echo " <td > {$country}</td>";
              echo " <td >{$date} </td>";
              echo " <td >{$statusText} </td>";
              echo " <td class='text-center'> <a href='view.php?user_id={$id}' class='btn btn-primary'>  View</a> </td>";
              echo " <td  class='text-center'>  <a href='delete.php?delete={$id}' class='btn btn-danger'> DELETE</a> </td>";
              echo " </tr> ";
                  }  
                ?>
              </tr>  
            </tbody>
        </table>
  </div>

<!-- a BACK button to go to the index page -->
<div class="container text-center mt-5">
      <a href="../index.php" class="btn btn-warning mt-5"> Back </a>
    <div>

<!-- Footer -->
<?php include "../footer.php" ?>