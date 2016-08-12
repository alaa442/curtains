@extends('master')
@section('content')

<h4>اضافة منتجات للعميل</h4>

<table class="table table-striped table-bordered table-hover">
{!! Form::open(array('url' => '/StoreProduct')) !!}

<tr>
    <td>العميل</td>
    <td>
        <select id="customer" name="customer" class = "chosen-select chosen-rtl" >
            <option value=" ">اختر العميل</option>
            @foreach($customers as $customer)
                <option value="{{$customer->id}}">{{$customer->name}}</option>
            @endforeach
        </select>     
    </td>

</tr>
</table> 

<a href="#" id="attach_box">اضافة منتج للعميل</a>

<div id="add_product" hidden="true">
<table class="table table-striped table-bordered table-hover">
    <tr>
        <td>المنتج</td>
        <td>
            <select id="product" name="product" class = "chosen-select chosen-rtl" >
                <option value=" ">اختر نوع المنتج</option>
                @foreach($products as $product)
                    <option value="{{$product->id}}">{{$product->type}}</option>
                @endforeach
            </select>     
        </td>
    </tr>

    <tr>
        <td>المدفوع من السعر</td>
        <td>
            <input type="number" id="paid" name="paid"></input>    
        </td>

    </tr>

    <tr>
        <td>الباقي من السعر</td>
        <td>
            <input type="number" id="rental" name="rental"></input>    
        </td>

    </tr>

    <tr>
        <td>حالة التسليم</td>
        <td>
            <select id="delivery" name="delivery" class = "chosen-select chosen-rtl" >
                <option value=" ">اختر حالة التسليم</option>
                <option value="delivered">تم التسليم</option>
                <option value="not yet">لم يتم التسليم</option>
            </select>     
        </td>

    </tr>

    <tr>
        <td><input type="submit" class="btn btn-primary" value="حفظ" ></td>
    </tr>  
</div>




 {!! Form::close() !!}
 </table> 

<script type="text/javascript"> 
   $(function() {
       $('#attach_box').click(function() {
           $('#add_product').show();
           return false;
       });        
   });
</script>

<script type="text/javascript">       
    $(document).ready(function() {     
        $('#customer').chosen({
              width: '100%',
              no_results_text: 'لا توجد نتيجة',
              search_contains:true,
        }); 
        $('#product').chosen({
              width: '100%',
              no_results_text: 'لا توجد نتيجة',
              search_contains:true,
        });
        $('#delivery').chosen({
              width: '100%',
              no_results_text: 'لا توجد نتيجة',
              search_contains:true,
        });

    });
</script>


@stop
