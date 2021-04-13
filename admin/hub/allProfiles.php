<div class="card">
  <div class="card-title"><h3 class="display-3 text-center">All Profiles</h3></div>

  <div class="card-body">
    <table class="table">
      <thead>
        <tr>
          <th scope="col">Id</th>
          <th scope="col">Title</th>
          <th scope="col">Image</th>
          <th scope="col">Protfolio Information</th>
          <th scope="col">Date</th>
          <th scope="col">Status</th>
          <th scope="col">Categories</th>
        </tr>
      </thead>
      <tbody>
        <?php
          displayProfile();
        ?>
      </tbody>
    </table>
  </div>
</div>