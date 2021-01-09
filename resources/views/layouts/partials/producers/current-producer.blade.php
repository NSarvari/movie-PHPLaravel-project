<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<div class="w-50 pt-3">
            <table class="table  table-striped table-primary align-middle">
                <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">First Name</th>
                    <th scope="col">Last Name</th>
                    <th scope="col">Date Of Birth</th>
                    <th scope="col">Notable Work</th>
                    @if(!empty($movies))
                        <th scope="col">Name</th>
                        <th scope="col">Language</th>
                    @endif
                </tr>
                </thead>
                <tbody>
                    <td>{{$producer->id}}</td>
                    <td>{{$producer->firstName}}</td>
                    <td>{{$producer->lastName}}</td>
                    <td>{{$producer->dateOfBirth}}</td>
                    <td>{{$producer->notableWork}}</td>
                    @if(!empty($movies))
                    <td>
                        @foreach($movies as $movie)
                                @foreach($movie as $currentMovie)
                                    {{$currentMovie['name']}}
                                    <br>
                                @endforeach
                        @endforeach
                    </td>
                    <td>
                        @foreach($movies as $movie)
                                @foreach($movie as $currentMovie)
                                    {{$currentMovie['language']}}
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