@extends('dairy.main')

@section('dairy')
                <div>
                   <div>
                       <div>User</div>
                       <div>{{$dairyData->user->name}}</div>
                   </div>
                   <div>
                       <div>Title</div>
                       <div>{{$dairyData->title}}</div>
                   </div>
                   <div>
                       <div>Description</div>
                       <div>{{$dairyData->description}}</div>
                   </div>
                   <div>
                       <div>Created Date</div>
                       <div>{{$dairyData->created_at}}</div>
                   </div>
                   <div>
                       <div>Updated Date</div>
                       <div>{{$dairyData->updated_at}}</div>
                   </div>
                </div>

@endsection
