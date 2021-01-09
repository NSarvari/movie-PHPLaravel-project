@foreach($genres as $genre)
    <tr>
        <td>{{$genre->id}}</td>
        <td>{{$genre->type}}</td>
        <td>{{$genre->note}}</td>
        <td><a class="btn btn-primary" href="{{ url('genres/'.$genre->id) }}" > View More</a></td>
    </tr>
@endforeach