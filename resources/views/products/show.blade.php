@extends('layouts.app')
@section('main')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-8">
          <div class="card p-4">
          <p> Name : <b> {{$product->name}}</b>  </p>
         <p> Description : <b> {{$product->description}} </b> </p>
         Image:
            <img src="/products/{{$product->image}}" class="rounded" height="20%" width="20%"/>    
          </div>
        </div>
    </div>
</div>
@endsection