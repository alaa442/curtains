@extends('master')
@section('content')

<h4>اضافة عميل جديد</h4>

<table class="table table-striped table-bordered table-hover">
{!! Form::open( ['route'=>'customer.store', 'method' => 'post','files'=>true] ) !!}


<tr>
    <td>اسم العميل</td>
    <td><input type="text" name="name" id="name"/> 
    <span type="hidden" class="label label-danger">{{ $errors->first('name') }}</span>
    </td>
</tr>

<tr>
    <td>تليفون العميل</td>
    <td><input type="text" name="phone" id="phone"/> 
    <span type="hidden" class="label label-danger">{{ $errors->first('phone') }}</span>
    </td>
</tr>

<tr>
    <td>عنوان العميل</td>
    <td><input type="text" name="address" id="address"/> 
    <span type="hidden" class="label label-danger">{{ $errors->first('address') }}</span>
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
