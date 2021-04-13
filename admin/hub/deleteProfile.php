<?php 
  // deleteProfile();
?>

<?php 
  if(isset($_GET['id'])){
    $id = $_GET['id'];
  }

  $editQuery = "SELECT * FROM portfolios WHERE id = {$id}";
    $editResult = mysqli_query($con, $editQuery);

    while($row = mysqli_fetch_assoc($editResult)){
      $id = $row['id'];
    }
?>

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


?>