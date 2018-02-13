@extends('dairy.main')

@section('dairy')
                <div >
                    {!! Form::open(['url' => '/dairy/'.$dairyData->id.'/update', 'method' => 'put']) !!}
                    	{!! Form::token(); !!}
                        {!! Form::hidden('dairy_user_id',$dairyData->user_id) !!}
                    	<div class="form-group">
                    		{!! Form::label('Title', 'Title') !!}
                    		{!! Form::text('dairy_title',$dairyData->title,array('class'=>'form-control','required'=>'required')) !!}
                    	</div>
                    	<div class="form-group">
                    		{!! Form::label('Description', 'Description') !!}
                    		{!! Form::textarea('dairy_description',$dairyData->description,array('class'=>'form-control','required'=>'required')) !!}
                    	</div>
                    	<div class="form-actions">
                         <button type="submit" class="btn btn-success btn-large">Update Data</button>
                        </div>
                    	
                    {!! Form::close() !!}
                </div>

@endsection
