@extends('layouts.layout')

@section('content')
<style>
    .row{
        margin-bottom: 15px;
    }
</style>
<div class="row">
    <div class="col-md-12">
        
        <!-- Default panel -->
        <div class="panel panel-default">
            
            <div class="panel-body">
            	<div class="row">
	            	<div class="col-sm-12">
		                <table class="table table-hover">
		                	<thead>
		                		<tr>
		                			<th>流程id</th>
		                			<th>流程名</th>
		                		</tr>
		                	</thead>
		                	<tbody>
		                		@if(!empty($list))
		                			@foreach($list as $value)
		                				<tr>
		                					<td>{{$value->id}}</td>
		                					<td>{{$value->process_engine_name}}</td>
		                				</tr>
		                			@endforeach
		                		@endif
		                	</tbody>
		                </table>
		                @if(!empty($list))
		                	{{$list->links()}}
		                @endif
	                </div>
                </div>
            </div>
        </div>
        
    </div>
</div>


@endsection
