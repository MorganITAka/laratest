@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    Liste du livre d'or
                    <ul>
                      @foreach($guestbooks as $guestbook)
                        <li>{{ $guestbook->name}} : {{ $guestbook->content}}</li>
                      @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
