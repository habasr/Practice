<div class="card">
<div class="card-title text-center">
<h3 class="display-3">Add User Form</h3></div>
<?php 
adduser();
?>
<form class="row g-3" method="POST" enctype="multipart/form-data">
  <div class="col-md-12">
    <label for="inputEmail4" class="form-label">Please Enter Full Name</label>
    <input type="text" class="form-control form-control-lg" name="fullname" id="inputEmail4">
  </div>
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">Email</label>
    <input type="email" class="form-control form-control-lg" name="email" id="inputEmail4">
  </div>
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">Image</label>
    <input type="file" class="form-control form-control-lg" name="image" id="inputEmail4">
  </div>
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">Enter Phone Number</label>
    <input type="number" class="form-control form-control-lg" name="phone" id="inputEmail4">
  </div>
  <div class="col-md-6">
    <label for="inputPassword4" class="form-label">Password</label>
    <input type="password" class="form-control form-control-lg" name="password" id="inputPassword4">
  </div>
  <div class="col-md-6">
    <label for="status" class="form-label">Select User Status</label>
    <select name="status" class="form-control form-control-lg">
    <option >Select Status</option>
    <option value="Active">Active</option>
    <option value="Draft">Draft</option>
    </select>
  </div>
  <div class="col-md-6">
    <label for="role" class="form-label">Select User Role</label>
    <select name="role" class="form-control form-control-lg">
    <option >Select Role</option>
    <option value="Admin">Admin</option>
    <option value="Employee">Employer</option>
    </select>
  </div>

<div> 
<br>
<div class="col-12">
    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
  </div>
</div>
  </div>
</form></div>
</div>