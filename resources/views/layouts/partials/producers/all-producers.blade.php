@foreach($producers as $producer)
    <tr>
        <td>{{$producer->id}}</td>
        <td>{{$producer->firstName}}</td>
        <td>{{$producer->lastName}}</td>
        <td>{{$producer->dateOfBirth}}</td>
        <td>{{$producer->notableWork}}</td>
        <td><a class="btn btn-primary" href="{{ url('producers/'.$producer->id) }}" > View More</a></td>
    </tr>
@endforeach