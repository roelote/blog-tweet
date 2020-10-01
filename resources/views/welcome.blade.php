@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
       
        <div class="col-md-8">
            @foreach($entries as $ent)
            <div class="card my-3">
                <div class="card-header">{{$ent->id}}.  {{$ent->title}} </div>

                    <div class="card-body">
                        {{$ent->content}}
                    
                    </div>
                    <div class="card-footer">
                        <span>Autor: <a href="{{url('users',$ent->user->id)}}">{{$ent->user->name}}</a></span>
                    </div>
                </div>
            @endforeach

            {{ $entries->links() }}
        </div>
    </div>
</div>
@endsection
