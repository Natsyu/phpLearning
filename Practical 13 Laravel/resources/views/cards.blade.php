@extends('layouts.master')
@section('content')

    <div class="content">
        <div class="title m-b-md">
            <h1>All Cards</h1>

            {{--@foreach($people as $person)--}}
            {{--<li>{{$person}}</li>--}}
            {{--@endforeach--}}
        </div>
        {{--{{$content}}--}}
        @foreach($cards as $card)
            <div>
                {{$card->title}}
            </div>
        @endforeach

        <div><br/>
            Title: {{$oneCard->title}}<br/>
            Created at: {{$oneCard->created_at}}<br/>
            Updated at: {{$oneCard->updated_at}}<br/>
        </div>

    </div>
@endsection
