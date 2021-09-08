



@extends('layouts.app')

@section('content')
<div class="container">
   <div class="row justify-content-center">
       <div class="col-md-8">
           <div class="card">
               <div class="card-header">Knygos</div>

               <div class="card-body">
             

              <table class="table">
                <tr>
                    <th>title</th>
                    <th>edit</th>
                    <th>delete</th>
                </tr>
                @foreach ($books as $book)
                <tr>
                    <td>{{$book->title}} </td>
                    <td>
                        <a href="{{route('book.edit',[$book])}}"><button class="btn btn-primary">Edit</button></a>
                    </td>
                    <td>
                        <form method="POST" action="{{route('book.destroy', $book)}}">
                        @csrf
                        <button class=" btn btn-danger" type="submit" disabled>DELETE</button>
                        </form>
                    </td>

                </tr>
                @endforeach
            </table>




               </div>
           </div>
       </div>
   </div>
</div>
@endsection
