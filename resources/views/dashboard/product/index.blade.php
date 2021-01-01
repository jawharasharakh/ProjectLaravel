@extends('dashboard.layouts.master')
@section('contact')
<section class="content">
    @include('dashboard.layouts.messages')

    <!-- Default box -->
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Products</h3>

        <div class="card-tools">
          <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
            <i class="fas fa-minus"></i></button>
          <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
            <i class="fas fa-times"></i></button>
        </div>
      </div>
      <div class="card-body p-0">
        <table class="table table-striped product">
            <thead>
                <tr>
                    <th style="width: 1%">
                        #
                    </th>
                    <th style="width: 20%">
                        Tittle
                    </th>
                   
                    <th style="width: 20">
                        image product
                    </th>
                    <th>
                        product Progress
                    </th>
                    <th style="width: 20%">
                        company
                    </th>
                    <th style="width: 20%">
                        catigories
                    </th>
                    <th style="width: 8%" class="text-center">
                        Status
                    </th>
                    <th style="width: 20%">
                    </th>
                    
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                <tr>

                    <td>
                        {{@$loop->iteration}}
                    </td>
                    <td>
                        <a>
                            {{$product->tittle}}
                        </a>
                        <br/>
                        <small>
                            {{$product->creat_at}}
                        </small>
                    </td>
                    <td>
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <img alt="Avatar" class="table-avatar" src="{{asset('image/'.$product->image)}}" style="width: 100px">
                            </li>
                           
                        </ul>
                    </td>
                    <td class="project_progress">
                        <div class="progress progress-sm">
                            <div class="progress-bar bg-green" role="progressbar" aria-volumenow="57" aria-volumemin="0" aria-volumemax="100" style="width: 57%">
                            </div>
                        </div>
                        <small>
                            57% Complete
                        </small>
                    </td>
                    <td class="project-company">
                        {{$product->company}}
                     </td>
                     <td class="project-catigories">
                         {{$product->category}}
                     </td>
                    <td class="project-state">
                        <span class="badge badge-success">Success</span>
                    </td>
                   
                    <td class="project-actions text-right">
                        <form action="{{route ('product.destroy',$product )}}"method="POST">
                        <a class="btn btn-primary btn-sm" href="{{route('product.show',$product ?? '')}}"> 
                            <i class="fas fa-folder">
                            </i>
                            View
                        </a>
                        <a class="btn btn-info btn-sm" href="{{route('product.update',$product ?? '')}}">
                            <i class="fas fa-pencil-alt">
                            </i>
                            Edit
                        </a>
                       @method('DELETE')
                       @csrf
                       <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                        </form>


                    </td>
                    
                </tr>  
                @endforeach
                
                
               
              
            </tbody>
        </table>
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
    {{$products->Links()}}

  </section>
@endsection