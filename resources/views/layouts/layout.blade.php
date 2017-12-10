<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
   
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Xenon Boostrap Admin Panel" />
    <meta name="author" content="" />

    <title>HHY'S WEBSITE</title>


    <link rel="stylesheet" href="/assets/css/fonts/linecons/css/linecons.css">
    <link rel="stylesheet" href="/assets/css/fonts/fontawesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="/assets/css/bootstrap.css">
    <link rel="stylesheet" href="/assets/css/xenon-core.css">
    <link rel="stylesheet" href="/assets/css/xenon-forms.css">
    <link rel="stylesheet" href="/assets/css/xenon-components.css">
    <link rel="stylesheet" href="/assets/css/xenon-skins.css">
    <link rel="stylesheet" href="/assets/css/custom.css">

    <script src="/js/jquery.js"></script>
    <script src="/js/jquery.min.js"></script>
    <script src="/js/jquery-ui-1.12.1/jquery-ui.js" ></script>
    <script src="/js/jquery-ui-1.12.1/jquery-ui.min.js" ></script>
    <script src="/js/jquery-form.js"></script>

  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
  
  
</head>
<body class="page-body">
  
  @include('layouts.header')
  
  <div class="page-container">

    <div class="main-content">
      
      @yield('content')   
      
      @include('layouts.footer')
    </div>
    
  </div>
  
  

<div class="modal fade" id="progressModal">
    <div class="modal-dialog">
        <div class="modal-content">
            
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Dynamic Content</h4>
            </div>
            
            <div class="modal-body">
            
                <div class="row">     
                    <div class="col-md-12">
                        <div class="progress progress-striped active" style="height: 1.5em;">
                            <div class="progress-bar progress-bar-info" style="width: 0%;height: 100%">
                                <span class=""></span>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</div>


  <!-- Bottom Scripts -->
  <script src="/assets/js/bootstrap.min.js"></script>
  <script src="/assets/js/TweenMax.min.js"></script>
  <script src="/assets/js/resizeable.js"></script>
  <script src="/assets/js/joinable.js"></script>
  <script src="/assets/js/xenon-api.js"></script>
  <script src="/assets/js/xenon-toggles.js"></script>


  <!-- JavaScripts initializations and stuff -->
  <script src="/assets/js/xenon-custom.js"></script>
  <script src="/js/layer-v3.1.0/layer/layer.js"></script>

</body>
</html>
