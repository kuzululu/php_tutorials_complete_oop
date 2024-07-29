<div class="modal fade" id="updateModal" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
<div class="modal-dialog modal-dialog-centered modal-lg">
<div class="modal-content">
<div class="modal-header">
  <h1 class="modal-title fs-5" id="exampleModalToggleLabel">Update</h1>
  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
</div>

<div class="modal-body">

<form class="row" method="POST" class="row needs-validation" novalidate="">

<input type="hidden" name="id" id="id">

<div class="col-md-6 mb-3">
 <label>Full Name</label>
 <input type="text" name="update_name" class="form-control" required="" id="full_name">
</div>

<div class="col-md-6 mb-3">
 <label>Email</label>
 <input type="email" name="update_email" class="form-control" required="" id="email">
</div>

<div class="col-md-12 mt-2 text-end">
 <input type="submit" name="btnUpdate" class="btn btn-outline-success" value="Update">
</div>

</form>

</div>     
</div>
</div>
</div>