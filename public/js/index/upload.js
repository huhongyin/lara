//上传
function upload()
	{
        $("#progressModal").modal('show', {backdrop: 'static', keyboard: false});
        $("#progressModal .modal-title").html('文件上传中，请勿刷新页面');
	    $("#uploadForm").ajaxSubmit({
                dataType : 'json',
		xhr: function(){
                	var xhr = $.ajaxSettings.xhr();
                	if(onprogress && xhr.upload) {
                    	    xhr.upload.addEventListener("progress" , onprogress, false);
                    	    return xhr;
                	}
            	},
                success : function(res){
			$("#progressModal").modal('hide');
                        if(res.code == 200){

                                                                window.location.href = '/';

                        }else{
                                layer.msg(res.msg, {
                                        'icon' : 3
                                });
                        }
                },
                error : function(err){
			$("#progressModal").modal('hide');
                        layer.msg('服务器异常', {
                                'icon' : 3,
                        });
                }
        });

	}
	
	function onprogress(evt){
        	var loaded = evt.loaded;
        	var tot = evt.total;
        	var per = Math.floor(100*loaded/tot);  //已经上传的百分比
		$("#progressModal .progress-bar-info").css('width', per + '%');
		$("#progressModal .progress-bar-info .sr-only").html('已经传 ' + per + '%');
    	}
