@entends('layouts.layout')

@section('content')

	<from id="form" action="/doUpload" method="post" enctype="multipart/form-data" class="form-inline">
		<div class="row">
			<label class="col-sm-3 control-label">请选择</label>
			<div class="col-sm-9"><input type="file" id="img" name="img" required="required"></div>
		</div>

		<div class="row">
			<div class="col-sm-12">
				<button type="submit" class="btn btn-info">提交</button>
			</div>
		</div>
	</from>

@endsection
<script>
	$("#form").ajaxSubmit({
		success : function(res){
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
</script>