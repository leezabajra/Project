@extends('admin.master')

 

@section('content')

    <div class="row">

        <div class="col-lg-12 margin-tb">

            <div class="pull-left">

                <h2>Medicines types</h2>

            </div>

            <div class="pull-right">

                <a class="btn btn-success" href="{{ route('types.create') }}"> Create New type</a>

            </div>

        </div>

    </div>

   

    @if ($message = Session::get('success'))

        <div class="alert alert-success">

            <p>{{ $message }}</p>

        </div>

    @endif

   

    <table class="table table-bordered">

        <tr>

            <th>No</th>

            <th>Type</th>

            <th width="280px">Action</th>

        </tr>

        @foreach ($types as $type)

        <tr>

            <td>{{ ++$i }}</td>

            <td>{{ $type->type }}</td>

            <td>

                <form action="{{ route('types.destroy',$type->id) }}" method="POST">

   

                    <a class="btn btn-info" href="{{ route('types.show',$type->id) }}">Show</a>

    

                    <a class="btn btn-primary" href="{{ route('types.edit',$type->id) }}">Edit</a>

   

                    @csrf

                    @method('DELETE')

      

                    <button type="submit" class="btn btn-danger">Delete</button>

                </form>

            </td>

        </tr>

        @endforeach

    </table>

  

    {!! $types->links() !!}

      

@endsection