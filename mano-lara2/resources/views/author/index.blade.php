



@extends('layouts.app')

@section('content')
<div class="container">
   <div class="row justify-content-center">
       <div class="col-md-8">
           <div class="card">
               <div class="card-header">Autoriai</div>

               <div class="card-body">
                <table class="table">
                    <tr>
                        <th>name</th>
                        <th>surname</th>
                        <th>edit</th>
                        <th>delete</th>
                    </tr>
                    @foreach ($authors as $author)
                    <tr>
                        <td>{{$author->name}} </td>
                        <td>{{$author->surname}} </td>
                        <td>
                            <a href="{{route('author.edit',[$author])}}"><button class="btn btn-primary">Edit</button></a>
                        </td>
                        <td>
                            <form method="POST" action="{{route('author.destroy', $author)}}">
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
