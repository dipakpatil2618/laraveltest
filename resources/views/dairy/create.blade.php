@extends('dairy.main')

@section('dairy')
                <div>
                    {!! Form::open(['action' => 'DairyController@store', 'method' => 'post', 'class' => 'form']) !!}
                        {!! Form::token(); !!}
                        <div class="form-group">
                            {!! Form::label('Title', 'Title') !!}
                            {!! Form::text('dairy_title','',array('class'=>'form-control','required'=>'required') ) !!}
                        </div >
                        <div class="form-group">
                            {!! Form::label('Description', 'Description') !!}
                    {!! Form::textarea('dairy_description','',array('class' => 'form-control','required'=>'required')) !!}
                        </div>
                        <div class="form-actions">
           				 <button type="submit" class="btn btn-success btn-large">Save</button>
        			</div>
                    
                    {!! Form::close() !!}

                    <form>

                </div>

@endsection
