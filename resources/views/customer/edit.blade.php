@extends('master')
@section('content')

{!! Form::open(['route'=> ['customer.update',$customer->id ], 'method' => 'put','files'=>true]) !!}
	
<table class="table table-striped table-bordered table-hover">

<tr>
    <td>اسم العميل</td>
    <td><input type="text" name="name" id="name" value="{{$customer->name}}" /> 
    <span type="hidden" class="label label-danger">{{ $errors->first('name') }}</span>
    </td>
</tr>

<tr>
    <td>كود العميل</td>
    <td><input type="text" name="code" id="code" value="{{$customer->code}}"/> 
    <span type="hidden" class="label label-danger">{{ $errors->first('code') }}</span>
    </td>
</tr>
<tr>
    <td>تليفون العميل</td>
    <td><input type="text" name="phone" id="phone" value="{{$customer->phone}}"/> 
    <span type="hidden" class="label label-danger">{{ $errors->first('phone') }}</span>
    </td>
</tr>

<tr>
    <td>عنوان العميل</td>
    <td><input type="text" name="address" id="address" value="{{$customer->address}}"/> 
    <span type="hidden" class="label label-danger">{{ $errors->first('address') }}</span>
    </td>
</tr>
<tr>
    <td><input type="submit" id="submit" class="btn btn-primary" value="حفظ">
</tr>	

	{!! Form::close() !!} 
</table>


@stop

 