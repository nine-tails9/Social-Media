@extends('layouts.master')

@section('title')
Welcome!

@endsection

@section('content')

    <div class="row">
    <h3>Sign UP</h3>
        <div class="col-md-6">
            <form action="{{ route('signup') }}" method="post">
                <div class="form-group">
                    <label for="email">Your Email</label>
                    <input type="text" class="form-control" name="email" id="email">
                </div>
                 <div class="form-group">
                    <label for="first_name">Your Name</label>
                    <input type="text" class="form-control" name="first_name" id="first_name">
                </div>
                 <div class="form-group">
                    <label for="password">Your Password</label>
                    <input type="password" class="form-control" name="password" id="password">
                </div>
                <button class="btn btn-primary">Submit</button>
                <input type="hidden" name="_token" value="{{ Session::token()  }}">
            </form>
        </div>
    
   
    <h3>Sign IN</h3>
        <div class="col-md-6">
            <form action="" method="post">
                <div class="form-group">
                    <label for="email">Your Email</label>
                    <input type="text" class="form-control" name="email" id="email">
                </div>
               
                 <div class="form-group">
                    <label for="password">Your Password</label>
                    <input type="password" class="form-control" name="password" id="password">
                </div>
                <button class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection