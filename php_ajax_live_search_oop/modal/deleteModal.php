<div class="modal fade" id="deleteModal" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
<div class="modal-dialog modal-dialog-centered modal-lg">
<div class="modal-content">
<div class="modal-header">
  <h1 class="modal-title fs-5" id="exampleModalToggleLabel">Delete</h1>
  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
</div>

<div class="modal-body">

<div class="row">
	<div class="col-md-12">
		<h4 class="text-danger fw-bolder">You will delete this record of <span id="fname"></span>?</h4>
	</div>
</div>

<div class="row">
	<div class="col-md-6">
		<div class="table-responsive">
			<table class="table table-hover">
				<tr class="fw-bolder">
					<td>Full Name</td>
					<td id="del_full_name" name="full_name"></td>
				</tr>
				<tr class="fw-bolder">
					<td>Email</td>
					<td id="del_email" name="email"></td>
				</tr>
			</table>
		</div>
	</div>
</div>

<div class="row">
	<div class="col-md-12 text-end">
		<form method="POST" action="<?php htmlspecialchars($_SERVER['PHP_SELF']); ?>">
			<input type="hidden" name="id" id="del_id">
			<input type="submit" class="btn btn-outline-danger" name="btnDelete" value="Delete">
		</form>
	</div>
</div>

</div>     
</div>
</div>
</div>