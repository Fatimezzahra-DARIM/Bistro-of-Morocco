@extends('profil.layout')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">
                        <h2>Change Role</h2>
  
                    </div> 

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Role</th>
                                       
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($profils as $item)
                                
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->email }}</td>
                                       
                                        {{-- <td>{{ $item->price }}</td> --}}
                                        <td>
                                            
                                            @if($item->role==0)
                                            <a href="{{url("role/$item->id")}}" title="Change Role">
                                                <button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Admin Role</button>
                                                @elseif($item->role==1)
                                                <a href="{{url("role/$item->id")}}" title="Change Role">
                                                <button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> User Role</button>
                                                @else
                                                 {{-- <button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Super Admin</button> --}}
                                                 <label for="">Super Admin</label>
                                                @endif
                                            </a>
                                             @if($item->role!==3)
                                             {{-- <button  class="btn btn-danger btn-sm" title="Delete profil" ><i class="fa fa-trash-o" aria-hidden="true"></i> Can't Delete</button> --}}
                                             
                                            <form method="POST" action="{{ url('/profil' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete profil" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                            </form>
                                            @endif
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection