<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>post view</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-5 d-flex justify-content-center">
        <div class="col-lg-10">
            <div class="row">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th style="width: 10px">#</th>
                            <th>Image</th>
                            <th>Title</th>
                        </tr>
                    </thead>
                    @php
                        $count = 1;
                    @endphp
                    @foreach ($posts as $post)
                    <tbody>
                        <tr>
                            <td>{{ $count++ }}</td>
                            <td>
                                <img style="max-width: 70px;max-height:70px;overflow:hidden" src="{{ asset('post/' . $post->image) }}" alt=""
                                class="image-fluid">
                            </td>
                            <td>{{ $post->title }}</td>
                        </tr>
                    </tbody>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
</body>

</html>
