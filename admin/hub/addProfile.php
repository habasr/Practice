
<div class="card">
  <div class="card-title text-center">
    <h3 class="display-3">Add Profile Form</h3>
  </div>
  <?php 
    addPorfile();
  ?>
  <form class="g-3" method="POST" enctype="multipart/form-data">
    <div class="row m-3">
      <div class="col-md-12">
        <label for="inputEmail4" class="form-label">Please Enter Protfolio Title</label>
        <input type="text" class="form-control form-control-lg" name="title" id="inputEmail4">
      </div>

      <div class="col-md-6">
        <div class="form-group">
          <label for="inputEmail4" class="form-label">Image</label>
          <input type="file" class="form-control form-control-lg" name="image" id="inputEmail4">
        </div>
        <div class="form-group">
          <label for="inputPassword4" class="form-label">Date</label>
          <input type="date" class="form-control form-control-lg" name="date" id="inputPassword4">
        </div>
        <div class="form-group">
          <label for="status" class="form-label">Select Profile Status</label>
          <select name="status" class="form-control form-control-lg">
            <option >Select Status</option>
            <option value="Posted">Posted</option>
            <option value="Pending">Pending</option>
          </select>
        </div>
        
        <div class="form-group">
          <label for="categories" class="form-label">Select Profile Categories</label>
          <select name="categories" class="form-control form-control-lg">
            <option >Select Categories</option>
            <option value="Networking">Networking</option>
            <option value="Programming">Programming</option>
            <option value="Database">Database</option>
          </select>
        </div>
      </div>


      <div class="col-md-6">
        <label for="content" class="form-label">Profile Information</label>
        <textarea name="content" id="content" class="form-control form-control-lg" cols="30" rows="9"></textarea>
      </div>
    </div>




    <br>
    <div class="text-right m-3">
        <button type="submit" class="btn btn-primary btn-lg py-3 px-1 text-uppercase" name="upload">create Portfolio</button>
    </div>

    </div>
  </form>
  </div>
</div>