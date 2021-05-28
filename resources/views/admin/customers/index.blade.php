@extends('layouts.adminlayout')
@section('content')
<h3>Customers List</h3>
<table class="table table-hover">
    <thead>
        <tr>
            <th scope="col">XX</th>
            <th scope="col">Name</th>
            <th scope="col">Phone</th>
            <th scope="col">Email</th>
            <th scope="col">Opertions</th>
        </tr>
    </thead>
    <tbody>
    @foreach ($customers as $customer)
        <tr>
            <th scope="row">{{$customer->id}}</th>
            <td scope="row">{{$customer->firstname}}</td>
          
            <td scope="row">{{$customer->phone}}</td>
            <td scope="row">{{$customer->Email}}</td>
            <td>
                <a href="{{route("customers.show",["customer"=>$customer->id])}}" class="btn btn-outline-info"><i class="far fa-eye"></i></a>
                <a href="{{route("customers.edit",["customer"=>$customer->id])}}" class="btn btn-outline-warning"><i class="fas fa-edit"></i></a>
                
                <a href="#" 
                class="btn btn-danger" title="Delete user {{ $customer->firstname.' '.$customer->lastname  }}"
                    onclick="event.preventDefault(); document.querySelector('#delete-customer-form').submit()"
                    ><i class="fas fa-user-slash"></i>
                </a>
                <form action="{{ route('customers.destroy', ['customer' => $customer->id]) }}" 
                    method="post" id="delete-customer-form">
                    @csrf
                     @method('DELETE')</form>
            </div>
        </tr>
    @endforeach   
</tbody> 
</table>
<div class="float-right mr-3">
    {{$customers->links()}} </div>
@endsection