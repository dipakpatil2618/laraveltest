@extends('dairy.main')

@section('dairy')
                <div>
                    {!! Form::open(['url' => '/dairy/'.$dairyData->id.'/update', 'method' => 'put']) !!}
                    	{!! Form::token(); !!}
                        {!! Form::hidden('dairy_user_id',$dairyData->user_id) !!}
                    	<div>
                    		{!! Form::label('Title', 'Title') !!}
                    		{!! Form::text('dairy_title',$dairyData->title,array('required'=>'required')) !!}
                    	</div>
                    	<div>
                    		{!! Form::label('Description', 'Description') !!}
                    		{!! Form::textarea('dairy_description',$dairyData->description,array('required'=>'required')) !!}
                    	</div>
                    	<div>
                    		{!! Form::submit('Save') !!}
                    	</div>	
                    {!! Form::close() !!}
                </div>

@endsection
