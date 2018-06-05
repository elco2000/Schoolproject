@extends('layouts.master')

@section('content')

<h1>notification</h1>



    <p>Name: {{$notification->name}}</p>
    <p>Text: {{$notification->text}}</p>


<a href="{{URL::to('/notifications')}}"><button class="tablebutton" type="submit">go back to notifications</button></a>
    @endsection