@extends('layouts.master')
@section('title')
Welcome!
@endsection

@section('content')
 <div class="row">
 <div class="col-6">
     <form action="#" method="post">
     <div class="form-group">
     <label for="email">Your Email</label>
     <input class="form-control" type="text" name="email" id="email">
     </div>
   <div class="form-group">
     <label for="first_name">Your First Name</label>
     <input class="form-control" type="text" name="first_name" id="first_name">
     </div>
        <div class="form-group">
     <label for="password">Your Password</label>
     <input class="form-control" type="password" name="password" id="password">
     </div>
<button type="submit" class="btn btn-primary">Submit</button>
     </form>
 </div>
 </div>
@endsection