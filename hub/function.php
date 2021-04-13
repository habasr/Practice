<?php include "db.php" ?>
<?php 
  session_start();
  ob_start();

  // login Function 
function login(){
  global $con;


  if(isset($_POST['login'])){

    $email = $_POST['email'];
    // $password = md5($_POST['password']);
    $password = $_POST['password'];

    // echo $email;
    // echo $password;

    $sql = "SELECT * FROM user WHERE email = '{$email}'";
    $result = mysqli_query($con, $sql);

    if(!$result){
      echo "connection error" . mysqli_error($con);
    }

    while($row = mysqli_fetch_assoc($result)){

      $dbid =$row['id'];
      $dbemail =$row['email'];
      $dbpassword =$row['password'];
      $dbfullname = $row['fullname'];
      $dbimage = $row['image'];
      $dbrole = $row['role'];
      $dbstatus = $row['status'];
    }
    if(isset($dbemail)){
      if ($dbpassword === $password) {

        $_SESSION['id'] = $dbid;
        $_SESSION['fullname'] = $dbfullname;
        $_SESSION['$email'] =$dbemail;
        $_SESSION['image'] = $dbimage;
        $_SESSION['role'] = $dbrole;
        $_SESSION['status'] = $dbstatus;
        echo "<script>window.location = 'index.php'</script>";
      }else{
        echo "Wrong Password";
      }
    }else{
      
      echo "User Not Found";
    }
  }
}

// Add Users Function
function createUser(){
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

    $sql = "SELECT * FROM user WHERE email = '{$email}'";
    $result = mysqli_query($con, $sql);

    while($rows = mysqli_fetch_assoc($result)){
      $dbemail = $rows['email'];
    }

    
  
    move_uploaded_file($image_tmp, "../img/user_img/$image");
     $sql = "INSERT INTO user (fullname, email, image, phone, password, status, role) VALUES ( '{$fullname}', '{$email}', '{$image}', '{$phone}', '{$password}', '{$status}', '{$role}' ) ";
 
         if($con->query($sql) === true){
           echo "new user created";
          //  echo "<script>window.location = 'login.php'</script>";
         }else{
           echo "Error " . $con->error;
         }

         if(isset($dbemail)===$email){
          echo "This Email Alreally Exist!";
        }
   }
    
 }









?>