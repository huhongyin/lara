@extends('layouts.layout')
@section('content')
<div id="waterfall">
    @if(!empty($photoes))
	@foreach($photoes as $key => $value)
	    <div class="cell">
	    <a href="#"><img style="width: 180px;" src="{{$value->path}}" /></a><p><a href="#"></a></p></div>
	@endforeach
    @endif    
</div>
<script src="/js/index/index.js"></script>
@endsection
