jQuery(document).ready(function($)
	{
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
function bigImg(url)
{
    layer.open({
  	type: 1,
  	title: false,
  	closeBtn: 0,
  	area: ['300px', '400px'],
  	skin: 'layui-layer-nobg', //没有背景色
  	shadeClose: true,
        content: '<img style="height:100%;width:100%;" src="'+url+'">'
    });
}
