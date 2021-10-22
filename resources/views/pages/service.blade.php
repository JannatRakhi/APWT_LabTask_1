@extends('layouts.custom')
@section('content')
<div class="container text-center">
    <h2> <a class="nav-item nav-link text-success fw-bold"> This is Service page</h2>
    <div>
    <a href="{{route ('service/products')}}"  class="btn btn-danger">See Products</a>
    </div> 
</div>
@endsection
