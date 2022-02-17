<!-- Header -->
<?php  include "../header.php" ?>

<?php 
  if(isset($_POST['create'])) 
    {
        $user = $_POST['user'];
        $email = $_POST['email'];
        $pass = md5($_POST['pass']);
        $address1 = $_POST['address1'];
        $address2 = $_POST['address2'];
        $city = $_POST['city'];
        $country = $_POST['country'];
        $dateAdded = date("Y-m-d H:i:s");
        $active = 1;
        // SQL query to insert user data into the users table
        $query= "INSERT INTO users(username, email, password, address1, address2, city, country, date_added, active) VALUES('{$user}','{$email}','{$pass}','{$address1}','{$address2}','{$city}','{$country}','{$dateAdded}','{$active}')";
        $add_user = mysqli_query($conn,$query);
    
        // displaying proper message for the user to see whether the query executed perfectly or not 
          if (!$add_user) {
              echo "something went wrong ". mysqli_error($conn);
          }

          else { echo "<script type='text/javascript'>alert('User added successfully!')</script>";
              }         
    }
?>

<h1 class="text-center">Add User details </h1>
  <div class="container">
    <form action="" method="post">
      <div class="form-group">
        <label for="user" class="form-label">Username</label>
        <input type="text" name="user"  class="form-control">
      </div>

      <div class="form-group">
        <label for="email" class="form-label">Email ID</label>
        <input type="email" name="email"  class="form-control">
      </div>
    
      <div class="form-group">
        <label for="pass" class="form-label">Password</label>
        <input type="password" name="pass"  class="form-control">
      </div>    
        
      <div class="form-group">
        <label for="address1" class="form-label">Address Line 1</label>
        <input type="address1" name="address1"  class="form-control">
      </div>
        
      <div class="form-group">
        <label for="address2" class="form-label">Address Line 2</label>
        <input type="address2" name="address2"  class="form-control">
      </div>
        
        <div class="form-group">
        <label for="city" class="form-label">City</label>
        <input type="city" name="city"  class="form-control">
      </div>
        
      <div class="form-group">
        <label for="country" class="form-label">Country</label>
        <input type="country" name="country"  class="form-control">
      </div>

      <div class="form-group">
        <input type="submit"  name="create" class="btn btn-primary mt-2" value="submit">
      </div>
    </form> 
  </div>

   <!-- a BACK button to go to the home page -->
  <div class="container text-center mt-5">
    <a href="home.php" class="btn btn-warning mt-5"> Back </a>
  <div>

<!-- Footer -->
<?php include "../footer.php" ?>
