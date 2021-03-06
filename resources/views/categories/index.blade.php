@extends('layouts.master')

@section('content')

    {{--<div class="index-container">--}}
        {{--<select>--}}
            {{--<option value="" selected>Choose a Category</option>--}}
            {{--@foreach($categories as $category)--}}
                {{--<option value="{{$category->id}}">{{$category->name}}</option>--}}
            {{--@endforeach--}}
        {{--</select>--}}
        {{--@if($category->id==$category->id)--}}
            {{--@if($category->name==$channel->)--}}
            {{--<div class="index-category">--}}

            {{--</div>--}}
        {{--@endif--}}
    {{--</div>--}}


    <h1>Categories</h1>

    <table class="normaltabel">
        <tr class="normaltr">
            <th>Id</th>
            <th>Name</th>
            <th>Description</th>
            <th></th>
            <th></th>
        </tr>
        @foreach($categories as $category)
            <tr class="normaltr">
                <td>{{$category->id, 'DESC'}}</td>
                <td><a href="categories/{{$category->id}}">{{$category->name}}</a></td>
                <td> {{$category->description}}</td>
                <td><a href="{{URL::to('categories/'.$category->id.'/edit')}}"><button class="tablebutton" type="submit">Edit</button></a></td>
                <td>{{ Form::open(array('url' => 'categories/'.$category->id,  'class' => 'pull-right')) }}
                {{ Form::hidden('_method', 'DELETE') }}
                {{ Form::submit('Delete', array('class' => 'tablebutton')) }}
                    {{ Form::close() }}</td>

            </tr>
        @endforeach
    </table>
<a href="{{URL::to('categories/create')}}"><button class="tablebutton" type="submit">Make new category</button></a>

@endsection
