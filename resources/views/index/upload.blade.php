@extends('layouts.layout')

@section('content')
<script src="/js/jquery.js"></script>
<script src="/js/jquery.min.js"></script>
	<form id="form"  action="/doUpload" method="post" enctype="multipart/form-data" class="form-inline">
		<div class="row">
			<label class="col-sm-3 control-label">请选择</label>
			<div class="col-sm-9"><input type="file" id="img" name="img" required="required"></div>
		</div>

		<div class="row">
			<div class="col-sm-12">
				<button onclick="upload()"  type="button" class="btn btn-info">提交</button>
			</div>
		</div>
	</form>

@endsection
<script src="/js/jquery.js"></script>
<script src="/js/jquery.min.js"></script>
<script src="/js/jquery-ui-1.12.1/jquery-ui.js" ></script>
<script src="/js/jquery-ui-1.12.1/jquery-ui.min.js" ></script>
<script src="/js/jquery-form.js"></script>
<script>
	
	function upload()
	{
	    $("#form").ajaxSubmit({
                dataType : 'json',
                success : function(res){
		console.log(res);
                        if(res.code == 200){

                                layer.confirm(
                                                '成功',
                                                {
                                                        icon : 3,
                                                        title : '提醒',
                                                        yes : function(index, layero){
                                                                window.location.href = '/';
                                                        }
                                                }
                                );

                        }else{
                                layer.msg(res.msg, {
                                        'icon' : 3
                                });
                        }
                },
                error : function(err){
                        layer.msg('服务器异常', {
                                'icon' : 3,
                        });
                }
        });

	}

</script>
