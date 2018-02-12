@extends('dairy.main')

@section('dairy')
                <div>
                   <div>
                       <div><b>User</b>: {{$dairyData->user->name}}</div>
                       
                   </div>
                   <div>
                       <div> <b>Title </b> :  {{$dairyData->title}}</div>
                   </div>
                   <div>
                       <div><b>Description</b> : {{$dairyData->description}}</div>
                   </div>
                   <div>
                       <div><b>Created Date </b> : {{$dairyData->created_at}}</div>
                   </div>
                   <div>
                       <div> <b>Updated Date</b> : {{$dairyData->updated_at}}</div>
                   </div>
                </div>

@endsection
