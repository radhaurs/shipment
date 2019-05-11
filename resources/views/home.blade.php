@extends('layouts.app')

@section('title')
    Dashboard | {{ env('APP_NAME') }}
@endsection

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-3 col-lg-3">
                <div class="list-group">
                    <a href="{{ url('home') }}" class="list-group-item active">
                        Dashboard
                    </a>
                    <a href="{{ url('trackings') }}" class="list-group-item">
                        All Trackings <span class="badge">{{ DB::table('trackings')->count() }}</span>
                    </a>
                    <a href="{{ url('trackings/new') }}" class="list-group-item">
                        Add New Tracking
                    </a>
                    <a href="{{ url('trackings/register') }}" class="list-group-item">
                        Create New User
                    </a>
                    <a href="{{ url('trackings/invoice') }}" class="list-group-item ">
                        Invoice
                    </a>
                </div>
            </div>
            <div class="col-md-9 col-lg-9">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4>Dashboard</h4>
                    </div>
                    <div class="panel-body">
                        {{-- <div class="container"> --}}
                            <div class="row">
                                <div class="col-md-6 col-sm-6">
                                    <a href="{{ url('trackings') }}">
                                        <div class="panel panel-primary text-center">
                                            <div class="panel-heading">ALL TRACKINGS</div>
                                            <div class="panel-body"><h1>{{ DB::table('trackings')->count() }}</h1></div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <a href="{{ url('trackings/new') }}">
                                        <div class="panel panel-default text-center">
                                            <div class="panel-heading">ADD NEW TRACKING</div>
                                            <div class="panel-body">
                                                <h1><i class="glyphicon glyphicon-plus"></i></h1>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <a href="{{ url('trackings/register') }}">
                                        <div class="panel panel-default text-center">
                                            <div class="panel-heading">ADD NEW USER</div>
                                            <div class="panel-body">
                                                <h1><i class="glyphicon glyphicon-plus"></i></h1>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <a href="{{ url('trackings/invoice') }}">
                                        <div class="panel panel-default text-center">
                                            <div class="panel-heading">GENERATE INVOICE</div>
                                            <div class="panel-body">
                                                <h1><i class="glyphicon glyphicon-plus"></i></h1>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        {{-- </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
