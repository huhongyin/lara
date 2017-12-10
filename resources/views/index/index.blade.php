@extends('layouts.layout')
@section('content')
<audio autoplay="autoplay" loop="-1" >
	<source src="/js/music_two.mp3">
</audio>
<div class="row">
    <div class="col-md-12">
        
	    <section class="gallery-env">
			
			<div class="row">
			
				<!-- Gallery Album Optipns and Images -->
				<div class="col-sm-12 gallery-right">
				
					<!-- Album Images -->
					<div class="album-images row ui-sortable"">
						
						<!-- Album Image -->
						@if(!empty($photoes))
							@foreach($photoes as $key => $value)
								<div class="col-md-3 col-sm-4 col-xs-6 ui-sortable-handle">
									<div class="album-image">
										<a href="#" class="thumb" data-action="edit">
											<img src="{{$value->path}}" class="img-responsive" />
										</a>
										
										<a href="#" class="name">
											<span>IMG_007.jpg</span><br/>
											<em>{{ date('Y-m-d', strtotime($value['created_at'])) }}</em>
										</a>
										
										<!-- <div class="image-options">
											<a href="#" data-action="edit"><i class="fa-pencil"></i></a>
											<a href="#" data-action="trash"><i class="fa-trash"></i></a>
										</div>
										
										<div class="image-checkbox">
											<input type="checkbox" class="cbr" />
										</div> -->
									</div>
								</div>
							@endforeach
					    @endif 
					</div>
					
					
					<button class="btn btn-white btn-block">
						<i class="fa-bars"></i>
						加载更多
					</button>
					
				</div>
			</div>
				
		</section>
	</div>
</div>
<script src="/js/index/index.js"></script>
@endsection
