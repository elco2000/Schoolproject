@extends('layouts.master')

@section('content')
    <h1>Genres</h1>

    <table class="normaltabel">
        <tr class="normaltr">
            <th>Id</th>
            <th>Name</th>
            <th></th>
            <th></th>
        </tr>

        @foreach($genres as $genre)
            <tr class="normaltr">
                <td>{{$genre->id}}</td>
                <td><a href="genres/{{$genre->id}}">{{$genre->name}}</a></td>
                <td><a href="{{URL::to('genres/'.$genre->id.'/edit')}}"><button class="tablebutton" type="submit">Edit</button></a></td>
                <td>{{ Form::open(array('url' => 'genres/'.$genre->id,  'class' => 'pull-right')) }}
                    {{ Form::hidden('_method', 'DELETE') }}
                    {{ Form::submit('Delete', array('class' => 'tablebutton')) }}
                    {{ Form::close() }}</td>
            </tr>

        @endforeach

    </table>
    <a href="{{URL::to('genres/create')}}"><button class="tablebutton" type="submit">Make a new Genre</button></a>


@endsection
