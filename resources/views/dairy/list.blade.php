@extends('dairy.main')

@section('dairy')
                <div>
                    <table style="width: 100%"  class="table table-striped">
                        <thead>
                        <tr>
                            <th>Sr No</th>
                            <th>Create date</th>
                            <th>Title</th>
                            <th>Description</th>
                            <th>User</th>
                            <th>Option</th>
                        </tr>
                    </thead>
                        @if (count($dairyData) > 0)
                            @php ($i = 1)
                            @foreach ($dairyData as $dairy)
                                <tr>
                                    <td>{{$i}}</td>
                                    <td>{{date("d M Y",strtotime($dairy->created_at))}}</td>
                                    <td>{{$dairy->title}}</td>
                                    <td>{{str_limit($dairy->description, $limit = 80, $end = '...')}}</td>
                                    <td>{{$dairy->user->name}}</td>
                                    <td><a href="dairy/{{$dairy->id}}/show">Show</a> | <a href="dairy/{{$dairy->id}}/edit">Edit</a> | 
                                        <a href="javascript:void(0);" onclick="$(this).find('form').submit();" >
                                            Delete
                                            <form action="{{ url('/dairy/'.$dairy->id.'/delete') }}" method="POST">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                            </form>
                                            
                                        </a>
                                    </td>
                                </tr> 
                              <?php $i++ ?> 
                            @endforeach  
                        @else
                            <tr><td colspan="6">No data found</td></tr> 
                        @endif
                        
                    </table>
                </div>

@endsection
