@extends('layouts.app')

@section('title')
    Add New Tracking | {{ env('APP_NAME') }}
@endsection

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-3 col-lg-3">
                <div class="list-group">
                    <a href="{{ url('home') }}" class="list-group-item">
                        Dashboard
                    </a>
                    <a href="{{ url('trackings') }}" class="list-group-item">
                        All Trackings <span class="badge">{{ DB::table('trackings')->count() }}</span>
                    </a>
                    <a href="{{ url('trackings/new') }}" class="list-group-item ">
                        Add New Tracking
                    </a>
                    <a href="{{ url('trackings/register') }}" class="list-group-item">
                        Create New User
                    </a>
                    <a href="{{ url('trackings/invoice') }}" class="list-group-item active">
                        Invoice
                    </a>
                </div>
            </div>
            <div class="col-md-9 col-lg-9">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4>Generate Invoice</h4>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-10 col-md-offset-1">
                               <h1> Coming Soon </h1> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript">
        $(document).ready(function(){
            $('#geolocation, #coordinates').hide();
            var locationType = $('#location-type');
            locationType.on('change', function(){
                if (locationType.val() == 'geolocation') {
                    $('#geolocation').slideDown('fast');
                    $('#coordinates').slideUp('fast').hide();
                    $('#latitude').val('');
                    $('#longitude').val('');
                }
                else if (locationType.val() == 'coordinates') {
                    $('#coordinates').slideDown('fast');
                    $('#geolocation').slideUp('fast').hide();
                    $('#geolocationAddress').val('');
                }
                else {
                    $('#coordinates, #geolocation').hide();
                    $('#geolocationAddress, #latitude, #longitude').val('');
                }
            });
        });
    </script>

@endsection
