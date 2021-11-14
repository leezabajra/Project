@extends('admin.master')

 

@section('content')

    <div class="row">

        <div class="col-lg-12 margin-tb">

            <div class="pull-left">

                <h2>Stock List</h2>

            </div>

            <div class="pull-right">

                <a class="btn btn-success" href="{{ route('stocks.create') }}"> Create New stock</a>

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

            <th>Product_Name</th>

            <th>Stock_In</th>

            <th>Stock_Out</th>

            <th>Expired</th>

            <th>Stock_Available</th>

            <th width="280px">Action</th>

        </tr>

        @foreach ($stocks as $stock)

        <tr>

            <td>{{ ++$i }}</td>

            <td>{{ $stock->product_name }}</td>

            <td>{{ $stock->stock_in }}</td>

            <td>{{ $stock->stock_out }}</td>

            <td>{{ $stock->expired }}</td>

            <td>{{ $stock->stock_available }}</td>

            <td>

                <form action="{{ route('stocks.destroy',$stock->id) }}" method="POST">

   

                    <a class="btn btn-info" href="{{ route('stocks.show',$stock->id) }}">Show</a>

    

                    <a class="btn btn-primary" href="{{ route('stocks.edit',$stock->id) }}">Edit</a>

   

                    @csrf

                    @method('DELETE')

      

                    <button type="submit" class="btn btn-danger">Delete</button>

                </form>

            </td>

        </tr>

        @endforeach

    </table>

  

    {!! $stocks->links() !!}

      

@endsection