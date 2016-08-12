@extends('master')
@section('content')

{!! Form::open(['route'=> ['product.update',$product->id ], 'method' => 'put','files'=>true]) !!}
	
<table class="table table-striped table-bordered table-hover">

<tr>
	<td>صورة المنتج</td>
    <td><input type="file" name="img" id="img" />
<tr/>

<tr>
  <td>نوع النتج</td>
  <td>
    <input type="text" name="type"  value="{{$product->type}}" />
    <span class="label label-danger">{{ $errors->first('type') }}</span>
  </td>
</tr>

<tr>
	<td>مكان المنتج</td>
	<td>
    <input type="text" name="place"  value="{{$product->place}}" />
	  <span class="label label-danger">{{ $errors->first('place') }}</span>
  </td>
</tr>

<tr>
  <td>سعر المنتج</td>
  <td>
    <input type="text" name="price"  value="{{$product->price}}" />
    <span class="label label-danger">{{ $errors->first('price') }}</span>
  </td>
</tr>

<tr>
  <td>الحالة</td>
  <td>
  <select id="availablty" name="availablty" class = "chosen-select chosen-rtl" >
    <option value="{{$product->availablty}}">{{$product->availablty}}</option>
    <option value ="متوفر">متوفر</option>
    <option value ="غير متوفر">غير متوفر</option>
  </select> 
  </td>
</tr>

<tr>
    <td><input type="submit" id="submit" class="btn btn-primary" value="حفظ">
</tr>	

	{!! Form::close() !!} 
</table>

<script type="text/javascript">       
    $(document).ready(function() {     
        $('#availablty').chosen({
              width: '100%',
              no_results_text: 'لا توجد نتيجة',
              search_contains:true,
        }); 
    });
</script>

@stop

 