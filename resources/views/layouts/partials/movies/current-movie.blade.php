<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    </head>
    <body class="d-flex justify-content-center">
        <div class="w-50 pt-3">
            <table class="table  table-striped table-primary align-middle">
                <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Name</th>
                    <th scope="col">Release Year</th>
                    <th scope="col">Language</th>
                    <th scope="col">Image</th>
                    @if(!empty($producers))
                        <th scope="col">Producer</th>
                    @endif
                    @if(!empty($genres))
                    <th scope="col">Genre</th>
                @endif
                </tr>
                </thead>
                <tbody>
                    <td>{{$movie->id}}</td>
                    <td>{{$movie->name}}</td>
                    <td>{{$movie->releaseYear}}</td>
                    <td>{{$movie->language}}</td>
                    <td> <img style="width:10rem;10rem" src="{{$movie->image}}" alt="Image"> </td>
                    @if(!empty($producers))
                    <td>
                        @foreach($producers as $producer)
                                @foreach($producer as $currentProducer)
                                    {{$currentProducer['firstName']}} {{$currentProducer['lastName']}}
                                    <br>
                                @endforeach
                        @endforeach
                    </td>
                    @endif
                    {{-- Send Help --}}
                    @if(!empty($genres))
                    <td>
                        @foreach($genres as $genre)
                                @foreach($genre as $currentGenre)
                                    Type: {{$currentGenre['type']}} | Note: {{$currentGenre['note']}}
                                    <br>
                                @endforeach
                        @endforeach
                    </td>
                    @endif
                </tbody>
            </table>
            <a class="btn btn-secondary" href="{{ url('/')}}" > Home</a>
        </div>
    </body>
</html>