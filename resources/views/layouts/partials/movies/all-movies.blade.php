@foreach($movies->reverse() as $movie)
    <tr>
        <td>{{$movie->id}}</td>
        <td>{{$movie->name}}</td>
        <td>{{$movie->releaseYear}}</td>
        <td>{{$movie->language}}</td>
        <td> <img style="width:10rem;10rem" src="{{$movie->image}}" alt="Image"> </td>
        <td><a class="btn btn-primary" href="{{ url('movies/'.$movie->id) }}" > View More</a></td>
    </tr>
@endforeach