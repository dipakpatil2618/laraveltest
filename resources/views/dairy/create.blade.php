@extends('dairy.main')

@section('dairy')
                <div>
                    {!! Form::open(['action' => 'DairyController@store', 'method' => 'post', 'class' => 'form']) !!}
                    	{!! Form::token(); !!}
                    	<div>
                    		{!! Form::label('Title', 'Title') !!}
                    		{!! Form::text('dairy_title','',array('required'=>'required')) !!}
                    	</div>
                    	<div>
                    		{!! Form::label('Description', 'Description') !!}
                    		{!! Form::textarea('dairy_description','',array('required'=>'required')) !!}
                    	</div>
                    	<div>
                    		{!! Form::submit('Save') !!}
                    	</div>	
                    {!! Form::close() !!}

                    <form>

                </div>

@endsection
