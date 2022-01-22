@extends('dashboard')

@section('links')
<table class="table">
    <thead>
      <tr>
        <th scope="col">id</th>
        <th scope="col">url</th>
        <th scope="col">short url</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($links as $link )
        <tr>
          <td>{{ $link->id }}</td>
          <td><a href="{{ url($link->url_short) }}">{{ url($link->url_short) }}</a></td>
          <td><a href="{{ url($link->url_user) }}">{{ url($link->url_user) }}</a></td>
        </tr>
        @endforeach
    </tbody>
  </table>



@endsection
