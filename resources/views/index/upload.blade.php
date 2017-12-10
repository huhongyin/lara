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
                
                <form id="uploadForm"  action="/doUpload" method="post" enctype="multipart/form-data" class="form-inline">
                    <div class="row">
                        <label class="col-sm-2 control-label" for="field-4">请选择</label>
                        
                        <div class="col-sm-10">
                            <input type="file" class="form-control" id="img" name="img" accept="image/*" required="required" multiple="multiple">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <button onclick="upload()" type="button" class="btn btn-info">提交</button>
                        </div>
                    </div>
                </form>
                
            </div>
        </div>
        
    </div>
</div>


@endsection

<script src="/js/index/upload.js"></script>
