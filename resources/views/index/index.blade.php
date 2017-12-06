@extends('layouts.layout')
@section('content')
<div class="row">
    <div class="col-md-12">
        
        <!-- Default panel -->
        <div class="panel panel-default">
            
            <div class="panel-body">
				<div id="waterfall">
				    @if(!empty($photoes))
					@foreach($photoes as $key => $value)
					    <div class="cell">
					    <a href="#"><img style="width: 180px;" src="{{$value->path}}" /></a><p><a href="#"></a></p></div>
					@endforeach
				    @endif    
				</div>
			</div>
		</div>
	</div>
</div>
<script src="/js/index/index.js"></script>
@endsection
