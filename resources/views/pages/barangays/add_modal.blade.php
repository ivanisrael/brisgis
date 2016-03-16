 <!--Start Add Barangay-->
<div id="add-barangay" class="modal fade" role="dialog">
    <div class="modal-dialog modal-md">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Barangay Info</h4>
            </div>
            <div class='row modal-body'>
                <form method="post" action="{{route('barangays.store')}}">
                    {!! csrf_field() !!}
                    <div class="panel-body">
                            <div class="form-group">
                                <label>Name</label>
                                <input class="form-control" name="name" type="text">
                            </div>
                            <div class="form-group">
                                <label>Municipality</label>
                                <input class="form-control" name="municipality_id" type="text">
                            </div>
                            <div class="form-group">
                                <label>Area</label>
                                <input class="form-control" name="area" type="text">
                            </div>
                        <div class="form-group">
                            <input type="submit" name="submit" class="btn btn-primary pull-right" value="Add Barangay">
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- End Modal content-->
    </div>
</div>
<!--End Add Barangay-->
