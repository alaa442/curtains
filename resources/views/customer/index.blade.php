@extends('master')
@section('content')

<section class="panel panel-primary">
<div class="panel-body">

<a href="/customer/create" class="btn btn-primary" style="margin-bottom: 20px;"> أضافة عميل جديد</a>

<table class="table table-hover table-bordered dt-responsive nowrap display customer" cellspacing="0" width="100%">
  <thead>
  		<tr>
  			<th>رقم المسلسل</th>
			<th>اسم العميل</th>
			<th>كود العميل</th>
			<th>منتجات العميل</th>
			<th>تليفون العميل</th>
			<th>عنوان العميل</th> 	
			<th>العمليات</th> 		
		</tr>
	</thead>

	<tbody id="tbody">
		<?php $i=1; ?>
		@foreach($customers as $customer)
		    <tr>
		    <td>{{$i++}}</td>
		    <td>{{$customer->name}}</td>
		    <td>{{$customer->code}}</td>
		    <td>
		    	@foreach($customer->GetProduct as $product)
		    	{{$product->type}}  {{$product->place}}
		    	<br/>
		    	@endforeach
		    </td>
		    <td>{{$customer->phone}}</td>
		    <td>{{$customer->address}}</td>
		    				
		<td> 
		<nobr>  
       		<a href="/customer/destroy/{{$customer->id}}"class="btn btn-default btn-sm"><span class="glyphicon glyphicon-trash"></span></a>
       		<a href="/customer/{{$customer->id}}/edit"class="btn btn-default btn-sm" ><span class="glyphicon glyphicon-edit"></span></a>
  		</nobr>
		</td>
</tr>
@endforeach
</tbody>

	<tfoot>
 		<tr>
			<th>رقم المسلسل</th>
			<th>اسم العميل</th>
			<th>كود العميل</th>
			<th>منتجات العميل</th>
			<th>تليفون العميل</th>
			<th>عنوان العميل</th> 	
			<th>العمليات</th> 	
		</tr>
	</tfoot>

</table>

<script type="text/javascript">

  $(document).ready(function(){
    var table= $('.customer').DataTable({ 
    select:true,
    responsive: true,
    "order":[[0,"asc"]],
    'searchable':true,
   	"scrollCollapse":true,
   	"paging":true,
});


$('.customer tfoot th').each(function () {
    var title = $('.customer thead th').eq($(this).index()).text();
	$(this).html( '<input type="text" placeholder="بحث '+title+'" />' );
});

table.columns().every( function () {
  	var that = this;
	$(this.footer()).find('input').on('keyup change', function () {
		that.search(this.value).draw();
		    if (that.search(this.value) ) {
		        that.search(this.value).draw();
		    }
		});     
    });
});
</script>


</div>


</section>
@stop