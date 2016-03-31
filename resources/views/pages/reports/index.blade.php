@extends('layouts.app')

@section('main-content')
<div class="row">
    <div class="col-md-3">
        <div class="panel panel-default">
            <div class="panel-heading">Options</div>
            <div class="panel-body">
                You are logged in!
            </div>
        </div>
    </div>

    <div class="col-md-9">
<!--         <div class="panel panel-default">
            <div class="panel-heading">Graphs/Chart</div>
            <div class="panel-body">
                You are logged in!
            </div>
        </div> -->

            <div class="col-lg-8">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-long-arrow-right"></i> Bar Graph Example</h3>
                            </div>
                            <div class="panel-body">
                                <div id="morris-bar-chart"></div>
                                <div class="text-right">
                                    <a href="#">View Details <i class="fa fa-arrow-circle-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

    </div>
</div>

@endsection
