@extends('master')
@section('content')

<section class="panel panel-primary">
<div class="panel-body">

<a href="/product/create" class="btn btn-primary" style="margin-bottom: 20px;"> أضافة منتج جديد</a>

<table class="table table-hover table-bordered dt-responsive nowrap display product" cellspacing="0" width="100%">
  <thead>
  		<tr>
			<th>رقم المسلسل</th>
			<th>صورة المنتج</th>
			<th>نوع المنتج</th>
			<th>مكان المنتج</th> 
			<th>سعر المنتج</th>
			<th>حالة المنتج</th>		
		    <th>عمليات</th>
		</tr>
	</thead>

	<tbody id="tbody">
		<?php $i=1; ?>
		@foreach($products as $product)
		    <tr>
		    <td>{{$i++}}</td>
		    <td> 
				<img src="data:image/jpeg;base64,<?php echo base64_encode($product->img); ?>" width="70" height="70"/>
		    </td>
		    <td>{{$product->type}}</td>
		    <td>{{$product->place}}</td>
		    <td>{{$product->price}}</td>
		    <td>{{$product->availablty}}</td>
		    				
		<td> 
		<nobr>  
       		<a href="/product/destroy/{{$product->id}}"class="btn btn-default btn-sm"><span class="glyphicon glyphicon-trash"></span></a>
       		<a href="/product/{{$product->id}}/edit"class="btn btn-default btn-sm" ><span class="glyphicon glyphicon-edit"></span></a>
  		</nobr>
		</td>
</tr>
@endforeach
</tbody>

	<tfoot>
 		<tr>
			<th>رقم المسلسل</th>
			<th>صورة المنتج</th>
			<th>نوع المنتج</th>
			<th>مكان المنتج</th> 
			<th>سعر المنتج</th>
			<th>حالة المنتج</th>		
		    <th>عمليات</th>
		</tr>
	</tfoot>

</table>

<script type="text/javascript">

  $(document).ready(function(){
    var table= $('.product').DataTable({ 
    select:true,
    responsive: true,
    "order":[[0,"asc"]],
    'searchable':true,
   	"scrollCollapse":true,
   	"paging":true,
});


$('.product tfoot th').each(function () {
    var title = $('.product thead th').eq($(this).index()).text();
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