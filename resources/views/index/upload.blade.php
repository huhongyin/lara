@extends('layouts.layout')

@section('content')
<form id="form"  action="/doUpload" method="post" enctype="multipart/form-data" class="form-inline">
    <div class="row">
    	<label class="col-sm-3 control-label">请选择</label>
    	<div class="col-sm-9"><input type="file" id="img" name="img" required="required"></div>
    </div>

    <div class="row">
    	<div class="col-sm-12">
    		<button  type="submit" class="btn btn-info">提交</button>
    	</div>
    </div>
</form>

@endsection

<script src="/js/index/index.js"></script>
