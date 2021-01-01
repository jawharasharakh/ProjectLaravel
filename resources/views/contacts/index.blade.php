@extends('base')

@section('main')
<div class="row">
<div class="col-sm-12">
    <h1 class="display-3"></h1>    
  <table class="table table-striped">
    <div class="card-tools">
          
            <i class="fas fa-times"></i></button>
        </div>
    <thead>
        <tr>
          <td>ID</td>
          <td>Name</td>
          <td>Email</td>
          
          <td>company_title</td>
          <td>product</td>
          <td>Country</td>
          <td>Categories</td>
          <td colspan = 2>Actions</td>
        </tr>
    </thead>
    <div>
        <a style="margin: 19px;" href="{{ route('contacts.create')}}" class="btn btn-primary">New Add</a>
        </div>  
    <tbody>
        @foreach($contacts as $contact)
        <tr>
            <td>{{$contact->id}}</td>
            <td>{{$contact->first_name}} {{$contact->last_name}}</td>
            <td>{{$contact->email}}</td>
            <td>{{$contact->company_title}}</td>
            <td>{{$contact->product}}</td>
            <td>{{$contact->country}}</td>
            <td>{{$contact->Categories}}</td>
            <td>
                <a href="{{ route('contacts.edit',$contact->id)}}" class="btn btn-primary">Edit</a>
            </td>
            <td>
                <form action="{{ route('contacts.destroy', $contact->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
<div>
</div>

<div class="col-sm-12">

    @if(session()->get('success'))
      <div class="alert alert-success">
        {{ session()->get('success') }}  
      </div>
    @endif
  </div>
@endsection