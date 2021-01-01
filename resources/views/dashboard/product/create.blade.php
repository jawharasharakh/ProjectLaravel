@extends('dashboard.layouts.master')
@section('contact')
<section class="content">
  @include('dashboard.layouts.messages')
 
  <form method="POST" action="{{route('product.store')}}" enctype="nultipar/form-data">
    
    @csrf
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-6">
                <h1>Product Add</h1>
              </div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active">Product Add</li>
                </ol>
              </div>
            </div>
          </div><!-- /.container-fluid -->
        </section>
    
        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-md-12">
              <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">General</h3>
    
                  <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                      <i class="fas fa-minus"></i></button>
                  </div>
                </div>
                <div class="card-body">

                  <div class="form-group">
                    <label for="code">Product code</label>
                    <input type="text" id="code" name="code" class="form-control">
                  </div> 

                  <div class="form-group">
                    <label for="tittle">tittle</label>
                    <input type="text" id="tittle" name="tittle" class="form-control">
                  </div>

                  <div class="custom-file">
                    <input type="file" class="custom-file-input" name="image">
                    <label class="custom-file-label" for="customFile">Choose file</label>
                  </div>

                  <div class="form-group">
                    <label for="inputDescription">Product Description</label>
                    <textarea id="ProductDescription" name="ProductDescription" class="form-control" rows="4"></textarea>
                  </div>
                  <div class="form-group">
                    <label for="inputcategory">category</label>
                    <select class="form-control custom-select" name="category">
                      <option selected disabled>Select one</option>
                      @foreach ($categories as $category)
                      <option value="{{$category->id}}">{{$category->name}}</option>
                      @endforeach
                      
                      
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="inputCompany"> Company</label>
                    <input type="text" id="Company" class="form-control" name="Company">
                  </div>
                  
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
            
          </div>
        
          <div class="row">
            <div class="col-12">
              <a href="#" class="btn btn-secondary">Cancel</a>
              <input type="submit" value="Create new Porject" class="btn btn-success float-right">
            </div>
          </div>
        </form>
        </section>
        <!-- /.content -->
      </div>
</section>
@endsection