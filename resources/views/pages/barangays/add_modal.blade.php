<!--Start Add Barangay-->
<div id="add-barangay" class="modal fade" role="dialog">
    <div class="modal-dialog modal-md">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Barangay Information</h4>
            </div>
            <div class='row modal-body'>
                <form class="form-horizontal" method="post" action="{{route('barangays.store')}}">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">

                    <div class="panel-body">
                        <div class="form-group row">
                            <label class="col-md-4 control-label">Name</label>
                            <div class="col-md-6">
                                <input class="form-control" name="name" type="text" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-4 control-label">Province</label>
                            <div class="col-md-6">
                                <select class="form-control" id="province1">
                                    <option>Lanao del Norte</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                </select>                          
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-4 control-label">Municipality</label>
                            <div class="col-md-6">
                                <select class="form-control" id="municipality1">
                                    <option>Iligan City</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                </select>                          
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Add
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- End Modal content-->
    </div>
</div>
<!--End Add Barangay-->