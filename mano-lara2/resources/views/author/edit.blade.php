

 @extends('layouts.app')

@section('content')
<div class="container">
   <div class="row justify-content-center">
       <div class="col-md-8">
           <div class="card">
               <div class="card-header">Redagavimas</div>

               <div class="card-body">
                <form method="POST" action="{{route('author.update',$author)}}">
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" name="name"  class="form-control" value="{{$author->name}}">
                        <small class="form-text text-muted">Name.</small>
                    </div>
                    <div class="form-group">
                        <label>surname</label>
                        <input type="text" name="surname"  class="form-control" value="{{$author->surname}}">
                        <small class="form-text text-muted">surname.</small>
                    </div>
                    @csrf
                    <button class="btn btn-primary" type="submit">EDIT</button>
                 </form>
               </div>
           </div>
       </div>
   </div>
</div>
@endsection
