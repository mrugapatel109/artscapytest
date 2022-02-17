<!-- Header -->
<?php  include '../header.php'?>

<h1 class="text-center">User Details</h1>
  <div class="container">
    <table class="table table-striped table-bordered table-hover">
      
        <tbody>
          <tr>
               
            <?php
              //  first we check using 'isset() function if the variable is set or not'
              //Processing form data when form is submitted
              if (isset($_GET['user_id'])) {
                  $userid = $_GET['user_id']; 

                  // SQL query to fetch the data where id=$userid & storing data in view_user 
                  $query="SELECT * FROM users WHERE id = {$userid} ";  
                  $view_users= mysqli_query($conn,$query);            

                  while($row = mysqli_fetch_assoc($view_users))
                  {
                      $id = $row['id'];
                      $user = $row['username'];
                      $address = $row['address1'] . " " . $row['address2'] . " " . $row['city'] . " " . $row['country'];
                      $email = $row['email'];
                      $date = $row['date_added'];
                      $status = $row['active'];
                      $statusText = ($status == 1) ? "Active" : "Inactive";
                        
                        echo "<tr><td>ID</td> <td >{$id}</td></tr>";
                        echo "<tr><td>User</td> <td > {$user}</td></tr>";
                        echo "<tr><td>Address</td> <td > {$address}</td></tr>";
                        echo " <tr><td>Email</td><td >{$email} </td></tr>"; 
                        echo " <tr><td>Date</td><td >{$date} </td></tr>"; 
                        echo " <tr><td>Status</td><td >{$statusText} </td></tr>"; 
                  }
                }
            ?>
          </tr>  
        </tbody>
    </table>
  </div>

   <!-- a BACK Button to go to pervious page -->
  <div class="container text-center mt-5">
    <a href="home.php" class="btn btn-warning mt-5"> Back </a>
  <div>

<!-- Footer -->
<?php include "../footer.php" ?>