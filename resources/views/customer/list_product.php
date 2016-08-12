
@extends('master')
@section('content')

<section class="panel panel-primary">
<div class="panel-body">

<table class="table table-hover table-bordered dt-responsive nowrap display product_customer" cellspacing="0" width="100%">
  <thead>
  		<tr>
  			<th>رقم المسلسل</th>
			<th>اسم العميل</th>
			<th>منتجات العميل</th>	
		</tr>
	</thead>

	<tbody id="tbody">
		<?php $i=1; ?>
		<tr>
		    <td>{{$i++}}</td>
		@foreach($customers as $customer)
			<td>{{$customer->name}}</td>
			<td>
			@foreach($customer->GetProduct as $product)
				{{$product->type}}
				<br/>
			@endforeach
			</td>
		</tr>
		@endforeach
	</tbody>

	<tfoot>
 		<tr>
			<th>رقم المسلسل</th>
			<th>اسم العميل</th>
			<th>منتجات العميل</th>	 	
		</tr>
	</tfoot>

</table>

<script type="text/javascript">

  $(document).ready(function(){
    var table= $('.product_customer').DataTable({ 
    select:true,
    responsive: true,
    "order":[[0,"asc"]],
    'searchable':true,
   	"scrollCollapse":true,
   	"paging":true,
});


$('.product_customer tfoot th').each(function () {
    var title = $('.product_customer thead th').eq($(this).index()).text();
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