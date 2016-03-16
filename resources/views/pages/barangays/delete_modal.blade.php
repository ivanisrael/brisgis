<!--Start Delete Barangay-->
<div id="{{$barangay->id}}delete-barangay" class="modal fade" role="dialog">
	<div class="modal-dialog modal-md">
		<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header modal-warning">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title">WARNING!</h4>
			</div>
			<div class='row modal-body'>
				<form method="post" action="{{route('barangays.destroy', '$barangay->id')}}">
					<input type="hidden" name="user_id" value="<?php ?>">
					<input type="hidden" name="book_id" value="<?php ?>"/>
					<input type="hidden" name="author_id" value="<?php ?>"/>
					<div class="col-lg-12 panel">
						<div class="panel-body">
							<div class="form-group">
								<strong><label>Are you sure you want to delete Barangay {{$barangay->name}}? </label></strong>
							</div>
							<div class="form-group">
								<input type="submit" name="submit" class="btn btn-danger pull-right" value="Delete Barangay">
							</div>
						</div>
					</div>
				</form> 
			</div> 
		</div>
	</div>
</div>
<!-- End Delete Barangay -->
	
