@extends('layouts.layout')

@section('content')
<style>
    .row{
        margin-bottom: 15px;
    }
</style>
<div class="row">
    <div class="col-md-12">
        
        <!-- Default panel -->
        <div class="panel panel-default">

            <div class="panel-body">
				<form role="form" id="form1" method="post" class="validate">

					<div class="form-group">
						<label class="control-label">流程名</label>

						<input type="text" class="form-control" name="data[process_engine_name]" data-validate="required" data-message-required="流程名不能为空" placeholder="请输入流程名" />
					</div>

					<div class="form-group">
						<button class="btn btn-success" type="submit">提交</button>
						<a role="button" class="btn btn-white" href="/processEngineList">返回</a>
					</div>

				</form>
            </div>
        </div>
        
    </div>
</div>


@endsection
