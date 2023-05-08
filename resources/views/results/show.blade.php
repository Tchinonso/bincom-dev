@extends('layouts.app')

@section('content')

<a href="http://localhost:8080/bincom-dev/public/results/" class="btn btn-default">Back</a>

<h1>Individual result</h1>

        <h1>{{$poll->polling_unit_name}}</h1>
        <small>UniqueId: {{$poll->uniqueid}}</small>,
        <small>PollingId: {{$poll->polling_unit_id}}</small>,
        <small>WardId: {{$poll->ward_id}}</small>,
        <small>LGAId: {{$poll->lga_id}}</small>,
        <small>UniqueWardId: {{$poll->uniquewardid}}</small>,
        <small>PollingNumber: {{$poll->polling_unit_number}}</small>,
        {{-- <small>{{$poll->polling_unit_name}}</small>, --}}
        <small>Description: {{$poll->polling_unit_description}}</small>,
        <small>Lat: {{$poll->lat}}</small>,
        <small>Long: {{$poll->long}}</small>
        <br>
        <small>{{$poll->created_at}}</small>
@endsection