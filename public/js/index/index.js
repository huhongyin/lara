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

//delete picture
function deletePicture(id, objId)
{
	if(id == 0 || id == '' || id == null || typeof(id) == 'undefined'){
		//询问框
		layer.confirm('您还没有选择图片哟', {
		    btn: ['确认'] //按钮
		}, function(index){
		    layer.close(index);
		});
		return false;
	}

	$.ajax({
		url : '/deletePictureById',
		data : { id : id },
		dataType : 'json',
		method : 'post',
		success : function(res){
			if(res.code == 200){
				$("#" + objId).remove();
			}else{
				layer.msg(res.msg);
			}
		},
		error : function(){
			layer.msg('服务器开小差了~');
		}
	});
}

function getPhotoesByPage()
{
	var page = $("#loadMoreBtn").attr('data-current-page');
	var uid = 0;
	var photoesStr = '';
	$.ajax({
		method : 'get',
		dataType : 'json',
		data : {page : page, uid : uid},
		url : '/getPhotoesByPage',
		success : function(res){
			if(res.data.data.lenght <= 0){
				$("#loadMoreBtn i").html('没有更多了');
				return;
			}

			$("#loadMoreBtn").attr('data-current-page', res.data.nextPage);
			var photoes = res.data.data;
			for(var i in photoes){
				photoesStr += '<div onclick="bigImg('photoes[i]['realPath']')" class="col-md-3 col-sm-4 col-xs-6 ui-sortable-handle" id="'+photoes[i]['id']+'_div">' +
									'<div class="album-image">'+
										'<a href="#" class="thumb" data-action="edit">'+
											'<img src="'+photoes[i]['path']+'" class="img-responsive" />'+
										'</a>'+
										'<a href="#" class="name">'+
											'<em>'+photoes[i]['created_at']+'</em>'+
										'</a>'+
										
										'<div class="image-options">'+
											'<a onclick="deletePicture('+photoes[i]['id']+', 'photoes[i]['id']'_div)" href="#" data-action="trash"><i class="fa-trash"></i></a>'+
										'</div>'+
									'</div>'+
								'</div>';
			}
			$("#photoesDiv").html(photoesStr);
		},
		error : function(err){
			layer.msg('获取数据失败，请联系胡洪印');
		}
	});
}