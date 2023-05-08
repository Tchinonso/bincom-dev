@extends('layouts.app')

@section('content')

<h1>All Summed Results</h1>

@if(count($polls) > 1)
<div class="card">
    <ul class="list-group list-group-flush">
    @foreach($polls as $poll)
            <li class="list-group-item">
                <h4><a href="http://localhost:8080/bincom-dev/public/results/{{$poll->polling_unit_id}}">{{$poll->polling_unit_name}}</a></h4>
               
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

            </li>
            @endforeach
        </ul>
    </div>
@else

@endif

@endsection