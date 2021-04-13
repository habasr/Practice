<?php include "../hub/db.php" ?>

<?php 

session_start();
  ob_start();

function adduser(){
 global $con;

 if (isset($_POST['submit'])) {
   $fullname = $_POST['fullname'];
   $email = $_POST['email'];
   $image = time().$_FILES['image']['name'];
   $image_tmp = $_FILES['image']['tmp_name'];
   $phone = $_POST['phone'];
   $password = $_POST['password'];
   $status = $_POST['status'];
   $role= $_POST['role'];
 
   move_uploaded_file($image_tmp, "../img/user_img/$image");
    $sql = "INSERT INTO user (fullname, email, image, phone, password, status, role) VALUES ( '{$fullname}', '{$email}', '{$image}', '{$phone}', '{$password}', '{$status}', '{$role}' ) ";

        if($con->query($sql) === true){
          echo "new user created";
          echo "<script>window.location = 'users.php'</script>";
        }else{
          echo "Error " . $con->error;
        }
  }

}
// function to display all data in all users page
function viewUsers(){
  global $con;

  $selectQuery = "SELECT * FROM user";

  $result = mysqli_query($con, $selectQuery);

  while ($rows = mysqli_fetch_assoc($result)) {
    echo "<tr>"
            ."<th>".$rows['id']."</th>"
            ."<th>".$rows['fullname']."</th>"
            ."<th>".$rows['email']."</th>"
            ."<th>". "<img src='../img/user_img/{$rows['image']}' width='100px' class='img img-thumbnail' style='border-radius: 50%; height: 100px'>"."</th>"
            ."<th>".$rows['phone']."</th>"
            ."<th>".$rows['status']."</th>"
            ."<th>".$rows['role']."</th>"
            ."<th>"."<a href='users.php?page=editUser&id={$rows['id']}'>edit</th>".

          "</tr>";
  }
}

// update user 
function updateUser(){
  $id = $_GET['id'];
  global $con;

  if (isset($_POST['editUser'])) {
   $userId = $_POST['userId'];
   $fullname = $_POST['fullname'];
   $email = $_POST['email'];
   $image = time().$_FILES['image']['name'];
   $image_tmp = $_FILES['image']['tmp_name'];
   $phone = $_POST['phone'];
   $password = $_POST['password'];
   $status = $_POST['status'];
   $role= $_POST['role'];
  
   move_uploaded_file($image_tmp, "../img/user_img/$image");

  //  if($image ===false){
  //   $query = "SELECT * FROM user WHERE id = $id ";
  //   $select_image = mysqli_query($con,$query);
        
  //   while($row = mysqli_fetch_assoc($select_image)) {
        
  //      $image = $row['image'];
    
  //   }
  //  }


    $sql = "UPDATE user SET
      fullname = '{$fullname}',
      email = '{$email}',
      image = '{$image}',
      phone = '{$phone}',
      password = '{$password}',
      status = '{$status}',
      role = '{$role}'
      WHERE id = '{$userId}' ";

    if ($con->query($sql)===TRUE) {
      echo "<script>window.location = 'users.php'</script>";
    }else{
      echo "Error updating user" . $con->error;
    }
  }
}

// logOut Function 
function logOut(){
  if(isset($_POST['logOut'])){
    session_destroy();
    echo "<script>window.location = 'login.php'</script>";
  }
}

function checkUser() {
  if(isset($_SESSION['fullname'])){
    if(isset($_SESSION['email'])){
      // echo "<script> alert('Welcome : " . $_SESSION['fullname'] . " ')</script>";
    }
  }else{
    echo "<script>window.location = 'login.php'</script>";
  }
}


// Inserting Portfolios into the database
function addPorfile(){
  global $con;

  if(isset($_POST['upload'])){
    $title = $_POST['title'];
    $image = time().$_FILES['image']['name'];
    $image_tmp = $_FILES['image']['tmp_name'];
    $content = $_POST['content'];
    $date = $_POST['date'];
    $status = $_POST['status'];
    $categories = $_POST['categories'];
  
    move_uploaded_file($image_tmp, "../img/portfolio/$image");
    $insertQuery = "INSERT INTO portfolios(title, image, content, date, status, categories) VALUES ('$title', '$image', '$content', '$date', '$status', '$categories')";

    $result = mysqli_query($con, $insertQuery);

    if(!$result){
      echo "FAILED TO INSERT DATA " . mysqli_error($con);
    }else{
      echo 'Records added successfully.';
      echo "<script>window.location = 'portfolios.php'</script>";
    }
  }
}


function displayProfile(){

  global $con;

  $displayQuery = "SELECT * FROM portfolios";
  $displayResult = mysqli_query($con, $displayQuery);

  while($rows = mysqli_fetch_assoc($displayResult)){
    echo "<tr>"
            ."<th>".$rows['id']."</th>"
            ."<th>".$rows['title']."</th>"
            ."<th>". "<img src='../img/portfolio/{$rows['image']}' class='img img-thumbnail w-50' style='border-radius: 50%; height: 100px;'>"."</th>"
            ."<th>".$rows['content']."</th>"
            ."<th>".$rows['date']."</th>"
            ."<th>".$rows['status']."</th>"
            ."<th>".$rows['categories']."</th>"
            ."<th>"."<a class='btn btn-primary' href='portfolios.php?page=editProfile&id={$rows['id']}'>Edit</th>"
            ."<th>"."<a class='btn btn-danger' href='portfolios.php?page=editProfile&id={$rows['id']}'>Delete</th>".

          "</tr>";
  }
}

// Updating the data in database 
function update(){
  $id = $_GET['id'];
  global $con;

  if(isset($_POST['update'])){
    $u_id = $_POST['userId'];
    $title = $_POST['title'];
    $image = time().$_FILES['image']['name'];
    $image_tmp = $_FILES['image']['tmp_name'];
    $content = $_POST['content'];
    $date = $_POST['date'];
    $status = $_POST['status'];
    $categories = $_POST['categories'];

    move_uploaded_file($image_tmp, "../img/portfolio/$image");

    $query = "SELECT * FROM portfolios WHERE id = $id ";
        $select_image = mysqli_query($con,$query);
            
        while($row = mysqli_fetch_assoc($select_image)) {
            
           $image = $row['image'];
        
        }

    $updateQuery = "UPDATE portfolios SET title='$title', image='$image', content='$content', date='$date', status='$status', categories='$categories' WHERE id='$u_id'";

    $result = mysqli_query($con, $updateQuery);

    if($result){
      echo "Rocord updated successfully";
      echo "<script>window.location = 'portfolios.php'</script>";
      // header("location:allProfiles.php");
      // exit;
    }else{
      echo "Error updating rocord" . mysqli_error($con);
    }
  }
}

// Delete row function 
function deleteProfile(){
  global $con;
  $id = $_GET['id'];

  $qury = "DELETE FROM portfolios WHERE id = '$id'";
  $del = mysqli_query($con, $qury);

  if(!$del){
    echo "Error deleting recond " . mysqli_error($con);
  }else {
    echo "Rocord deleted successfully!";
    echo "<script>window.location = 'portfolios.php'</script>";
    // exit;
  }
}

?>
