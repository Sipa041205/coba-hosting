<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PEOPLE DATA</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <style>
        /* Custom styles for the table */
        .table-bordered {
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: box-shadow 0.3s ease;
            border-radius: 10px; /* Rounded corners */
            width: 100%; /* Set the width of the table to be wider */
            margin: auto; /* Center the table horizontally */
        }

        .table-bordered:hover {
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }

        .table-bordered tbody tr:hover {
            background-color: rgba(128, 0, 128, 0.2); /* Set the background color to purple on hover */
            cursor: pointer;
            transform: scale(1.02); /* Slightly increase the size */
        }

        /* Custom styles for the buttons */
        .btn {
            background-color: transparent;
            border: 2px solid #5ec3f1; /* Purple border */
            color: #5ec3f1; /* Purple text color */
            border-radius: 5px;
            transition: background-color 0.3s ease, color 0.3s ease;
        }

        .btn:hover {
            background-color: #5ec3f1; /* Purple background on hover */
            color: #ffffff; /* White text color on hover */
        }

        /* Custom styles for the delete button */
        .btn-danger {
            border-color: #c62828; /* Darker purple border for delete button */
            color: #c62828; /* Darker purple text color for delete button */
        }

        .btn-danger:hover {
            background-color: #c62828; /* Darker purple background on hover for delete button */
            color: #ffffff; /* White text color on hover for delete button */
        }

        /* Custom style for the left-aligned button */
        .btn-left {
            margin-right: 10px;
        }

        /* Custom styles for the table body */
        .table-bordered tbody {
            background-color: #fff; /* White background for the table body */
        }
    </style>
</head>

<body>
    <br><br><br><br>
    <div class="container-fluid">
        <div class="d-flex justify-content-start mb-3">
            <a href="/a/tambah">
                <button type="button" class="btn btn-success btn-left"><i class="fas fa-plus"></i> Add Data</button>
            </a>
        </div>
        <table class="table table-bordered">
            <thead>
                <tr class=" table-info">
                    <th scope="col">ID</th>
                    <th scope="col">NAME</th>
                    <th scope="col">GENDER</th>
                    <th scope="col">BIRTH PLACE</th>
                    <th scope="col">BIRTH DATE</th>
                    <th scope="col">ADDRESS</th>
                    <th scope="col">EMAIL</th>
                    <th scope="col">PHONE</th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody class="table-group-divider">
                @foreach ($jennie as $j)
                    <tr>
                        <td>{{ $j->ID }}</td>
                        <td>{{ $j->NAME }}</td>
                        <td>{{ $j->GENDER }}</td>
                        <td>{{ $j->BIRTH_PLACE }}</td>
                        <td>{{ $j->BIRTH_DATE }}</td>
                        <td>{{ $j->ADDRESS }}</td>
                        <td>{{ $j->EMAIL }}</td>
                        <td>{{ $j->PHONE }}</td>
                        <td> <a href="/a/edit/{{ $j->ID }}"><button type="button"
                                    class="btn btn-warning"><i class="fas fa-edit"></i></button></a></td>
                        <td><a href="/a/hapus/{{ $j->ID }}"><button type="button"
                                    class="btn btn-danger"><i class="fas fa-trash-alt"></i></button></a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
    integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js"
    integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous">
</script>
</body>

</html>





