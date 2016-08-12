<!DOCTYPE html>
<html dir="rtl" lang="ar">
<head>
    <meta charset="UTF-8">
    <title>محلات رفعت للستائر</title>
    <html xmlns="http://www.w3.org/1999/xhtml" dir="rtl">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

<!-- jquery -->
<script type="text/javascript" src="https://code.jquery.com/jquery-1.12.0.min.js"></script>

<!-- chosen -->
<script src="http://cdnjs.cloudflare.com/ajax/libs/chosen/1.1.0/chosen.jquery.min.js"></script>
<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/chosen/1.1.0/chosen.min.css" />

<!-- datatable -->
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.11/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.11/js/dataTables.bootstrap.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/responsive/2.0.2/js/dataTables.responsive.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/responsive/2.0.2/js/responsive.bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/t/dt/jq-2.2.0,dt-1.10.11/datatables.min.css"/>
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"/>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.11/css/dataTables.bootstrap.min.css"/>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.11/css/jquery.dataTables.min.css"/>
<link rel="stylesheet prefetch" href="http://cdn.datatables.net/responsive/1.0.4/css/dataTables.responsive.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.0.2/css/responsive.bootstrap.min.css"/>

<!-- date picker -->
<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker.min.css" />
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker3.min.css"/>
<script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.min.js"></script>

<!-- editabe -->
<link rel="stylesheet" type="text/css" href="/assets/css/query-builder.default.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap3-dialog/1.34.7/css/bootstrap-dialog.min.css">
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap3-dialog/1.34.7/js/bootstrap-dialog.min.js"></script>
<link href="http://cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.0/bootstrap3-editable/css/bootstrap-editable.css" rel="stylesheet"/>
<script src="http://cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.0/bootstrap3-editable/js/bootstrap-editable.min.js"></script>
<script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.12.0/jquery.validate.js"></script>
<script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.12.0/additional-methods.js"></script>
<script type="text/javascript" src="http://cdn.datatables.net/plug-ins/1.10.12/api/fnReloadAjax.js"></script>


<!-- bootstrap -->
<link rel="stylesheet" type="text/css" href="/assets/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="/assets/css/bootstrap-horizon.css"> 

<style type="text/css">
body{
      font-family: 'zocial', sans-serif;
    }

.chosen-choices {
    border: 1px solid #ccc;
    border-radius: 4px;
    min-height: 34px;
    padding: 6px 12px;
}
.chosenContainer .form-control-feedback {
    /* Adjust feedback icon position */
    right: -15px;
}
   tfoot input {
        width: 100%;
        padding: 3px;
        box-sizing: border-box;
    }
 thead input {
        width: 100%;
        padding: 2px;
        box-sizing: border-box;
    }
.footer {
            position: absolute;
            text-align: center;
            bottom: 0;
            width: 100%;
            /* Set the fixed height of the footer here */
            height: 5%;
            background-color: #f5f5f5;
        }
        .wrapper{
          width:75%;
          margin: 0 auto;
          background: #ffc229;
        }
</style>

</head>


</head>


<body class="rtl">
<nav class="navbar navbar-inverse">
  <div class="container-fluid">

  <div class="collapse navbar-collapse" id="myNavbar"> 
  <div class="col-md-3"> 
    <ul class="nav navbar-nav">   
          <li><a href="/index">رفعت العناني</a></li>
      </ul>
  </div>
    <div class="col-md-3"> 
      <ul class="nav navbar-nav">   
     	    <li><a href="/product">المنتجات</a></li>
      </ul>
    </div>
    <div class="col-md-3"> 
      <ul class="nav navbar-nav">   
          <li><a href="/customer">العملاء</a></li>
      </ul>
    </div>
    <div class="col-md-3"> 
      <ul class="nav navbar-nav">   
          <li><a href="/CreateProduct">منتجات العملاء</a></li>
      </ul>
    </div>
      
  </div>
  </div>
</nav>

	  	<div class="container-fluid">
	  		<main>
	  			@yield('content')
	  		</main>
	  	</div>

	</div>


</body>

</html>