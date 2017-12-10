@extends('layouts.layout')
@section('content')
<div class="row">
    <div class="col-md-12">
        
        <!-- Default panel -->
        <div class="panel panel-default">
            
            <div class="panel-body">
				<audio autoplay="autoplay" loop="-1" >
		    			<source src="/js/music_two.mp3">
				</audio>
				<script type="text/javascript">
			// Sample Javascript code for this page
			jQuery(document).ready(function($)
			{
				// Sample Select all images
				$("#select-all").on('change', function(ev)
				{
					var is_checked = $(this).is(':checked');
					
					$(".album-image input[type='checkbox']").prop('checked', is_checked).trigger('change');
				});
				
				// Edit Modal
				$('.gallery-env a[data-action="edit"]').on('click', function(ev)
				{
					ev.preventDefault();
					$("#gallery-image-modal").modal('show');
				});
				
				// Delete Modal
				$('.gallery-env a[data-action="trash"]').on('click', function(ev)
				{
					ev.preventDefault();
					$("#gallery-image-delete-modal").modal('show');
				});
				
				
				// Sortable
				
				$('.gallery-env a[data-action="sort"]').on('click', function(ev)
				{
					ev.preventDefault();
					
					var is_sortable = $(".album-images").sortable('instance');
					
					if( ! is_sortable)
					{
						$(".gallery-env .album-images").sortable({
							items: '> div'
						});
						
						$(".album-sorting-info").stop().slideDown(300);
					}
					else
					{
						$(".album-images").sortable('destroy');
						$(".album-sorting-info").stop().slideUp(300);
					}
				});
			});
			</script>
			
			<section class="gallery-env">
			
				<div class="row">
				
					<!-- Gallery Album Optipns and Images -->
					<div class="col-sm-9 gallery-right">
					
						<!-- Album Images -->
						<div class="album-images row">
							
							<!-- Album Image -->
							@if(!empty($photoes))
								@foreach($photoes as $key => $value)
									<div class="col-md-3 col-sm-4 col-xs-6">
										<div class="album-image">
											<a href="#" class="thumb" data-action="edit">
												<img src="{{$value->path}}" class="img-responsive" />
											</a>
											
											<a href="#" class="name">
												<span>IMG_007.jpg</span>
												<em>28 September 2014</em>
											</a>
											
											<div class="image-options">
												<a href="#" data-action="edit"><i class="fa-pencil"></i></a>
												<a href="#" data-action="trash"><i class="fa-trash"></i></a>
											</div>
											
											<div class="image-checkbox">
												<input type="checkbox" class="cbr" />
											</div>
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
	</div>
</div>
<script src="/js/index/index.js"></script>
@endsection
