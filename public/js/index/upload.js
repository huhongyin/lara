//上传
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