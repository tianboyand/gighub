@extends('layouts.app')

@section('content')
<div class="container">
@if (Session::has('message'))
    <div class="alert alert-info">{{ Session::get('message') }}</div>
@endif
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
        @if(!$gigs->isEmpty())  
            @foreach($gigs as $gig)
                <div class="panel panel-default">
                    <div class="panel-heading"><a href={{ url('/gig/'.$gig->slug) }}>{{$gig->nama_gig}}</a>
                    </div>
                    <div class="panel-body">
                        {{$gig->deskripsi}}
                    </div>
                </div>
            @endforeach
        @else
            <p class="center">Tidak ada Gig</p>
        @endif
        </div>
    </div>
</div>
@endsection