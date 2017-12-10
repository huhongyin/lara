//上传
function upload()
	{
        $("#progressModal").modal('show', {backdrop: 'static', keyboard: false});
        $("#progressModal .modal-title").html('文件上传中，请勿刷新页面');
	    $("#uploadForm").ajaxSubmit({
                dataType : 'json',
                xhr:xhrOnProgress(function(e){
                    var percent = e.loaded / e.total;//计算百分比
                    $("#progressModal .modal-body .progress-bar-info").css('width', percent+'%');
                    $("#progressModal .modal-body .sr-only").html(percent + '% 已完成');
                })
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

	}

        var xhr=new XMLHttpRequest(); xhr.upload.onprogress=function(e){}
        var xhrOnProgress=function(fun) {
            xhrOnProgress.onprogress = fun; //绑定监听
            //使用闭包实现监听绑
            return function() {
                //通过$.ajaxSettings.xhr();获得XMLHttpRequest对象
                var xhr = $.ajaxSettings.xhr();
                //判断监听函数是否为函数
                if (typeof xhrOnProgress.onprogress !== 'function')
                    return xhr;
                //如果有监听函数并且xhr对象支持绑定时就把监听函数绑定上去
                if (xhrOnProgress.onprogress && xhr.upload) {
                    xhr.upload.onprogress = xhrOnProgress.onprogress;
                }
                return xhr;
            }
        }