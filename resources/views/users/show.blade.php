@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card my-3">
                <div class="card-header">tweets </div>
                <div class="card-body">twitter api </div>

            </div>
        </div>
        <div class="col-md-8">
            <div class="card my-3">
                <div class="card-header">{{$user->name}} </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <p>ultimas publicaciones</p>

                    <ul>
                        @foreach($entries as $e)
                        <li> <a href=" {{url('entries',$e->id )}} ">{{ $e->title }}</a> </li>    
                        @endforeach
                        
                    </ul>
                   
                   
                  
                </div>
            </div>
        </div>
    </div>
</div>
@endsection