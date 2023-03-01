<?php

// database details
$host = "localhost";
$username = "root";
$password = "";
$dbname = "diligent_servers_db";

// creating a connection
$con = mysqli_connect($host, $username, $password, $dbname);

// getting all values from the HTML form
    if(isset($_POST['submit']))
    {
      var_dump($_POST);
      $name = $_POST['name'];
      $tel = $_POST['tel'];
      $email = $_POST['email'];
      $request = $_POST['request'];
      // $date = $_POST['date'];
      $address = $_POST['address'];

      
      
      // If database is not connected, kill process
      if (!$con)
      {
          die("Connection failed!" . mysqli_connect_error());
      }
  
      // using sql to create a data entry query
      $sql = "INSERT INTO contact (name, tel, email, request, address)
       VALUES ('$name', '$tel', '$email', '$request', '$address')";
    
      // send query to the database to add values and confirm if successful
      if($sql) {
        var_dump($sql);
      }
    
      if(mysqli_query($con, $sql))
      {
          echo "Entries added!";
      } else {
        echo "Data entry unsuccessful ". $con->error;
      }
    
      // close connection
      mysqli_close($con);
    }
  ?>




  <div class="param">
    <!-- <p>Contact</p> -->
    <h3>use our experience on your event. talk to us.</h3>
    <p>Contact us by e-mail:</p>
    <h3><a href="" class="hero-btn">solonko01nora@mail.com</a></h3>
    <h3>For all other enquiries please contact Us on Whatsapp too</h3>
    <h3><a href="" class="hero-btn">+237 676-71-76-26</a></h3>
    <h3><a href="" class="hero-btn">+237 678-67-89-24</a></h3>
  </div>


    <form action="" method="POST">
    <div class="card-header">
                <h4>Fill Form
                  <a href="index.php" class="btn btn-danger float-end">BACK</a>
                </h4>
              </div>
              <div class="card-body">
                <form action="" method="POST">

                     <div class="mb-3">
                          <label for="name"> </label>
                          <input type="text" id="name" name="name" placeholder="Name" class="form-control">
                     </div>
      
                     <div class="mb-3">
                        <label for="tel"> </label>
                        <input type="text" id="tel" name="tel" placeholder="Tel" class="form-control">
                     </div>
                     <div class="mb-3">
                        <label for="email"> </label>
                        <input type="text" id="email" name="email" placeholder="Email" class="form-control">
                     </div>
                     <div class="mb-3">
                         <label for="request"> </label>
                         <input type="text" id="request" name="request" placeholder="Request" class="form-control">
                     </div>
                     <div class="mb-3">
                         <label for="address"> </label>
                         <input type="text" id="address" name="address" placeholder="Address" class="form-control">
                     </div>
                     

                     <!-- <div class="mb-3">
                       <label for="Services"> </label>
                       <select name="School" id="" placeholder="click to select" class="form-control"> 
                          <option value="choose">click to select</option>
                          <option value="Both">Both</option>
                          <option value="Hostesses">Females Only</option>
                          <option value="Protocol">Males Only</option>
                          <option value="Both">Cathering services</option>
                          <option value="Both">Rentals(chairs)</option>
                          <option value="Both">Deco services</option>
                          <option value="Both">Broker services</option>
                      </select>
                     </div>  -->

                     <div class="mb-3">
                        <input type="submit" name="submit" class="btn btn-primary" value="Submit">
                     </div>  
                     
                     
    </form>
       
  </div>
  <?php include 'inc/footer.php';?> 
  
  