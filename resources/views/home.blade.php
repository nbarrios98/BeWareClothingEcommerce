@extends('layouts.app')
<br> 
<br>
<br>
<br>
<br>
@section('content')
<div class="container">
    <div class="row justify-content-center" >
        <div class="col-md-8">
            
                

                
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="alert alert-success" role="alert">

                    {{ __('You are logged in!') }}
                    </div>
                
            
        </div>
    </div>
</div>
@endsection
