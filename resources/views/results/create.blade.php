@extends('layouts.app')

@section('content')

<h1>Add New Result</h1>

{!! Form::open(['action' => 'App\Http\Controllers\ResultsController@store', 'method' => 'POST']) !!}
    <div class="form-group">
        {{form::label('uniqueid', 'UniqueId')}}
        {{form::text('uniqueid', '', ['class' => 'form-control', 'placeholder' => 'UniqueId'])}}
    </div>
    <div class="form-group">
        {{form::label('polling_unit_id', 'Polling_unit_id')}}
        {{form::text('polling_unit_id', '', ['class' => 'form-control', 'placeholder' => 'poll id'])}}
    </div>
    <div class="form-group">
        {{form::label('ward_id', 'WardId')}}
        {{form::text('ward_id', '', ['class' => 'form-control', 'placeholder' => 'ward id'])}}
    </div>
    <div class="form-group">
        {{form::label('lga_id', 'LGAId')}}
        {{form::text('lga_id', '', ['class' => 'form-control', 'placeholder' => 'lga id'])}}
    </div>
    <div class="form-group">
        {{form::label('uniquewardid', 'UniqueWardId')}}
        {{form::text('uniquewardid', '', ['class' => 'form-control', 'placeholder' => 'unique ward id'])}}
    </div>
    <div class="form-group">
        {{form::label('polling_unit_number', 'Polling_unit_number')}}
        {{form::text('polling_unit_number', '', ['class' => 'form-control', 'placeholder' => 'poll number'])}}
    </div>
    <div class="form-group">
        {{form::label('polling_unit_name', 'Polling_unit_name')}}
        {{form::text('polling_unit_name', '', ['class' => 'form-control', 'placeholder' => 'polling_unit_name'])}}
    </div>
    <div class="form-group">
        {{form::label('polling_unit_description', 'Polling_unit_description')}}
        {{form::text('polling_unit_description', '', ['class' => 'form-control', 'placeholder' => 'polling_unit_description'])}}
    </div>
    <div class="form-group">
        {{form::label('lat', 'Lat')}}
        {{form::text('lat', '', ['class' => 'form-control', 'placeholder' => 'lat'])}}
    </div>
    <div class="form-group">
        {{form::label('long', 'Long')}}
        {{form::text('long', '', ['class' => 'form-control', 'placeholder' => 'long'])}}
    </div>
    {{-- <div class="form-group">
        {{form::label('entered_by_user', 'Entered_by_user')}}
        {{form::text('entered_by_user', '', ['class' => 'form-control', 'placeholder' => 'entered_by_user'])}}
    </div>
    <div class="form-group">
        {{form::label('date_entered', 'Date_entered')}}
        {{form::text('date_entered', '', ['class' => 'form-control', 'placeholder' => 'date_entered'])}}
    </div>
    <div class="form-group">
        {{form::label('user_ip_address', 'User_ip_address')}}
        {{form::text('user_ip_address', '', ['class' => 'form-control', 'placeholder' => 'user_ip_address'])}}
    </div> --}}
  

    {{form::submit('Submit', ['class' => 'btn btn-primary'])}}

{!! Form::close() !!}

@endsection