

@extends('layouts.app')

@section('content')
<div class="container">
   <div class="row justify-content-center">
       <div class="col-md-8">
           <div class="card">
               <div class="card-header">Redagavimas</div>

               <div class="card-body">
                <form method="POST" action="{{route('book.update',[$book])}}">
               
                   


                    <div class="form-group">
                        <label>Title</label>
                        <input type="text" name="book_title"  class="form-control" value="{{$book->title}}">
                        <small class="form-text text-muted">Knygos pavadinimas.</small>
                    </div>
                    <div class="form-group">
                        <label>ISBN</label>
                        <input type="text" name="book_isbn"  class="form-control" value="{{$book->isbn}}">
                        <small class="form-text text-muted">Knygos ISBN.</small>
                    </div>
                    <div class="form-group">
                        <label>Puslapiai</label>
                        <input type="number" name="book_pages"  class="form-control" value="{{$book->pages}}">
                        <small class="form-text text-muted">Knygos puslapių kiekis.</small>
                    </div>
                    <div class="form-group">
                        <label for="summernote">Apie</label>
                        <textarea name="book_about" class="form-control" id="summernote" rows="3">{!!$book->about!!}</textarea>  
                        <small class="form-text text-muted">Knygos aprašymas.</small>
                    </div>

                    <select name="author_id" class="form-control form-control-lg">
                        @foreach ($authors as $author)
                            <option value="{{$author->id}}">{{$author->name}} {{$author->surname}}</option>
                        @endforeach
                    </select>
                    @csrf
                    <br>
                    <button class="btn btn-success" type="submit">EDIT</button> 
                </form>
               </div>
           </div>
       </div>
   </div>
</div>
<script>
    $(document).ready(function() {
       $('#summernote').summernote();
     });
    </script>
@endsection
