@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                   <p>my entries</p>
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
