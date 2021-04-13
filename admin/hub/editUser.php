<?php 
  if (isset($_GET['id'])) {
    $id = $_GET['id'];
  }

  $sql = "SELECT * FROM user WHERE id = {$id} ";
  $result = mysqli_query($con, $sql);

  while ($row = mysqli_fetch_assoc($result)) {
    $id = $row['id'];
    $fullname = $row['fullname'];
    $email = $row['email'];
    $image = $row['image'];
    $phone = $row['phone'];
    $password = $row['password'];
    $status = $row['status'];
    $role = $row['role'];

?>

<div class="row">
  <div class="col-lg-8">
  <div class="card">
  <div class="card-title text-center">
    <h3 class="display-3">Edit User Form</h3>
  </div>
  <?php 
  updateUser();
  ?>
  <form class="g-3" method="POST" enctype="multipart/form-data">
    <div class="row m-3">
      <input type="hidden" name="userId" value="<?= $id?> ">
      <div class="col-md-12">
        <label for="inputEmail4" class="form-label">Please Enter Full Name</label>
        <input type="text" class="form-control form-control-lg" name="fullname" value="<?= $fullname; ?>" id="inputEmail4">
      </div>
      <div class="col-md-6">
        <label for="inputEmail4" class="form-label">Email</label>
        <input type="email" class="form-control form-control-lg" name="email" value="<?= $email; ?>" id="inputEmail4">
      </div>
      <div class="col-md-6">
        <label for="inputEmail4" class="form-label">Image</label>
        <input type="file" class="form-control form-control-lg" name="image" id="inputEmail4">
      </div>
      <div class="col-md-6">
        <label for="inputEmail4" class="form-label">Enter Phone Number</label>
        <input type="number" class="form-control form-control-lg" name="phone" value="<?= $phone; ?>" id="inputEmail4">
      </div>
      <div class="col-md-6">
        <label for="inputPassword4" class="form-label">Password</label>
        <input type="password" class="form-control form-control-lg" name="password" value="<?= $password; ?>" id="inputPassword4">
      </div>
      <div class="col-md-6">
        <label for="status" class="form-label">Select User Status</label>
        <select name="status" class="form-control form-control-lg">
        <option value="<?= $status; ?>" ><?= $status; ?></option>
        <option value="Active">Active</option>
        <option value="Draft">Draft</option>
        </select>
      </div>
      <div class="col-md-6">
        <label for="role" class="form-label">Select User Roll</label>
        <select name="role" class="form-control form-control-lg">
        <option  value="<?= $role; ?>" ><?= $role; ?></option>
        <option value="Admin">Admin</option>
        <option value="Employee">Employer</option>
        </select>
      </div>
    </div>
      

    <div class="row"> 
      <br>
      <div class=" col-6 px-5 my-3">
          <button type="submit" class="btn btn-primary btn-lg" name="editUser">Save Changes</button>
      </div>
             <!-- Button trigger modal -->
      <div class="d-inline col-6 text-right px-5 my-3">
        <button type="button" class="btn btn-danger btn-lg" data-toggle="modal" data-target="#exampleModal">
          Delete User
        </button>
      </div>
    </div>
     
    </div>
  </form>
  </div>
  <div class="col-lg-4">
    <div class="card">
      <div class="card-body">
        <img class="img img-thumbnail" src="../img/user_img/<?= $image ?>" width="100%">
      </div>
    </div>
  </div>
</div>
  </div>
  
</div>




<?php } ?>





<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"             aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Delete User Alert</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Are u sure u want to delete <b><?= $fullname ?></b>  with #ID <?= $id ?> ?
      </div>
      <div class="modal-footer">
        <form method="POST">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        <button type="submit" class="btn btn-danger" name="deleteUser">Yes</button>
        </form>
        
      </div>
    </div>
  </div>
</div>

<?php 
if (isset($_POST['deleteUser'])) {
  

  $sql = "DELETE FROM user WHERE id = {$id}";
  if($con->query($sql)===TRUE){
    // header("Location: addUsers.php");
    echo "<script>window.location = 'users.php'</script>";
  }else{
    echo "Error deleting" . $con->error;
  }

}


?>