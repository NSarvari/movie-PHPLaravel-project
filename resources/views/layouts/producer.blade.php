<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>
    <body class="d-flex justify-content-center">
        <div class="w-50 pt-3">
            <table class="table  table-striped table-primary align-middle">
                <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">First Name</th>
                    <th scope="col">Last Name</th>
                    <th scope="col">Date of birth</th>
                    <th scope="col">Notable work</th>
                    <th scope="col">View More</th>
                </tr>
                </thead>
                <tbody>
                    @include('layouts.partials.producers.all-producers')
                </tbody>
            </table>
            <a class="btn btn-secondary" href="{{ url('/')}}" > Home</a>
        </div>
    </body>
</html>