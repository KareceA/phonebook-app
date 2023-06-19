<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!-- phone_users.blade.php -->

    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }

        table thead {
            background-color: #f5f5f5;
        }

        table th,
        table td {
            padding: 10px;
            text-align: left;
            border: 1px solid #ccc;
        }
    </style>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone Number</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($phoneUsers as $phoneUser)
            <tr>
                <td>{{ $phoneUser->id }}</td>
                <td>{{ $phoneUser->name }}</td>
                <td>{{ $phoneUser->email }}</td>
                <td>{{ $phoneUser->phone_number }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>


</body>

</html>