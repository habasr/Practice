<?php 
  if(isset($_GET['id'])){
    $id = $_GET['id'];
  }

 

    $editQuery = "SELECT * FROM portfolios WHERE id = {$id}";
    $editResult = mysqli_query($con, $editQuery);

    while($row = mysqli_fetch_assoc($editResult)){
      $id = $row['id'];
      $title = $row['title'];
      $image = $row['image'];
      $content = $row['content'];
      $date = $row['date'];
      $status = $row['status'];
      $categories = $row['categories'];

      
      update();

    

?>

<div class="row">
    <div class="col-lg-8">
    <div class="card">
    <div class="card-title text-center">
    <h3 class="display-3 text-center">Edit Profile Form</h3>
  </div>
  <?php 
    // update();
  ?>
  <form class="g-3" method="POST" enctype="multipart/form-data">
    <div class="row m-3">
      <input type="hidden" name="userId" value="<?= $id?> ">
      <div class="col-md-12 my-3">
        <label for="inputEmail4" class="form-label">Please Enter Protfolio Title</label>
        <input type="text" class="form-control form-control-lg" name="title" value="<?= $title; ?>" id="inputEmail4">
      </div>
        <br>
      <div class="col-md-12">
        <div class="form-group">
          <img class="mb-1 img img-thumbnail" style="border-radius: 50%;" width="100" src="../img/portfolio/<?= $image ?>" alt="">
          <input type="file" name="image">
        </div>
        <div class="form-group">
          <label for="content" class="form-label">Profile Information</label>
          <textarea name="content" type="text" id="content" class="form-control form-control-lg" cols="30" rows="5"><?= $content; ?></textarea>
        </div>
        <div class="form-group">
          <label for="inputPassword4" class="form-label">Date</label>
          <input type="date" class="form-control form-control-lg" name="date" value="<?= $date; ?>" id="inputPassword4">
        </div>
        <div class="form-group">
          <label for="status" class="form-label">Select Profile Status</label>
          <select name="status" class="form-control form-control-lg">
            <option value="<?= $status; ?>" ><?= $status; ?></option>
            <option value="Posted">Posted</option>
            <option value="Pending">Pending</option>
          </select>
        </div>

        <div class="form-group">
          <label for="categories" class="form-label">Select Profile Categories</label>
          <select name="categories" class="form-control form-control-lg">
            <option value="<?= $categories; ?>" ><?= $categories; ?></option>
            <option value="Networking">Networking</option>
            <option value="Programming">Programming</option>
            <option value="Database">Database</option>
          </select>
        </div>
      </div>

      
    </div>




    <br>
    <div class="row">
      <div class=" col-6 my-3 px-5">
          <button type="submit" class="btn btn-primary btn-lg text-uppercase" name="update">Save Changes</button>
      </div>
            <!-- Button trigger modal -->
      <div class="d-inline col-6 text-right px-5 my-3">
        <button type="button" class="btn btn-danger btn-lg text-uppercase" data-toggle="modal" data-target="#exampleModal">
          Delete Portfolio
        </button>
      </div>
    </div>
    

    </div>
  </form>
  </div>
    <div class="col-lg-4">
      <div class="card">
        <div class="card-body">
          <img class="img img-thumbnail" src="../img/portfolio/<?= $image ?>" width="100%">
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
        <h5 class="modal-title" id="exampleModalLabel">Delete Profile Alert</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Are u sure u want to delete <b><?= $title ?></b> ?> ?
      </div>
      <div class="modal-footer">
        <form method="POST">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
          <button type="submit" class="btn btn-danger" name="deleteProfile">Yes</button>
        </form>
        
      </div>
    </div>
  </div>
</div>




<?php

if (isset($_POST['deleteProfile'])) {
  // global $con;

  $sql = "DELETE FROM portfolios WHERE id = {$id}";
  if($con->query($sql)===TRUE){
    echo "Profile deleted successfully";
    echo "<script>window.location = 'portfolios.php'</script>";
  }else{
    echo "Error deleting recond " . mysqli_error($con);
  }

}


?>