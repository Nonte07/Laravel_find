<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar bg-light">
        <div class="container-fluid">
            <a class="navbar-brand">Form Submit</a>
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </div>
    </nav>
    <div class="text-center my-4">
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
            Add Your Details
        </button>
    </div>
    <!-- Modal -->
    <div class="modal fade " id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <form action="formsubmit" method="post" enctype="multipart/form-data">
                        @csrf
                        {{-- Form --}}

                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Enter Your Name</label>
                            <input type="name" class="form-control" name="name">

                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Email address</label>
                            <input type="email" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp" name="email">

                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Image</label>
                            <input type="file" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp" name="img">

                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>

                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <div class="container text-center">
        <table class="table table-dark table-striped">



            <div class="container" style="max-width: 40%;">
                <div class="input-group mb-3">
                    <button type="button" class="btn btn-info">
                        <a href="{{ url('/') }}" style="color: white;text-decoration:none;">Reset</a>
                    </button>

                    <form action="filter" method="get">
                        <input type="text" class="form-control" placeholder="Search..."
                            aria-label="Example text with two button addons" name="filter">
                        <button type="submit" class="btn btn-secondary" name="find"> Find</button>
                    </form>
                </div>
            </div>



            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">IMAGE</th>
                    <th scope="col">NAME</th>
                    <th scope="col">EMAIL</th>
                    <th scope="col">OPORATION</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($userdata as $list)
                    <tr>
                        <th scope="row">{{ $list->id }}</th>
                        <td>
                            <img src="{{ asset('storage/app/' . $list->image) }}" alt="" srcset=""
                                style="height: 50px;width:50px;">
                        </td>
                        <td>{{ $list->name }}</td>
                        <td>{{ $list->email }}</td>
                        <td>
                            <button type="button" class="btn btn-warning">
                                <a href="editdata/{{ $list->id }}"
                                    style="color: white;text-decoration:none;">Edit</a>
                            </button>
                            <button type="button" class="btn btn-danger">
                                <a href="datetedata/{{ $list->id }}"
                                    style="color: white;text-decoration:none;">Delete</a>
                            </button>
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
    </script>
</body>

</html>
