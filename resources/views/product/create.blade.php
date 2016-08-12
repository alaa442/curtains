@extends('master')
@section('content')

<h4>اضافة منتج جديد</h4>

<table class="table table-striped table-bordered table-hover">
{!! Form::open( ['route'=>'product.store', 'method' => 'post','files'=>true] ) !!}

<!-- image -->
<tr>
  <td>صورة المنتج</td>
  <td><input type="file" name="img" id="img" />
</tr>

<tr>
    <td> نوع المنتج</td>
    <td><input type="text" name="type" id="type"/> 
    <span type="hidden" class="label label-danger">{{ $errors->first('type') }}</span>
    </td>
</tr>

<tr>
    <td> مكان المنتج</td>
    <td><input type="text" name="place" id="place"/> 
    <span type="hidden" class="label label-danger">{{ $errors->first('place') }}</span>
    </td>
</tr>


<tr>
    <td>سعر المنتج</td>
    <td><input type="number" min="0" name="price" id="price"/> 
    <span type="hidden" class="label label-danger">{{ $errors->first('price') }}</span>
    </td>
</tr>

<tr>
  <td>الحالة</td>
  <td>
  <select id="availablty" name="availablty" class = "chosen-select chosen-rtl" >
    <option value=" ">اختر الحالة</option>
    <option value ="متوفر">متوفر</option>
    <option value ="غير متوفر">غير متوفر</option>
  </select> 
  </td>
</tr>

<tr>
  <td><input type="submit" class="btn btn-primary" value="حفظ" ></td>
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
