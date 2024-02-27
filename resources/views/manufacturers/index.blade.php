<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <table border="1" width="100%">
            <tr>
                <td>#</td>
                <td>Name and Short Name</td>
                <td>Image</td>
                <td>Created At</td>
            </tr>
            @foreach ($manufacturers as $manufacturer)
                <tr>
                    <td>{{ $manufacturer->id }}</td>
                    <td>{{ $manufacturer->full_name }}</td>
                    <td><img src="{{ $manufacturer->image }}" alt="" height="200" width="200"></td>
                    <td>{{ $manufacturer->created_at }}</td>
                </tr>
            @endforeach
        </table>
    </div>

    <div>
        <a href="{{ route('create') }}">Add new Manufacturer</a>
    </div>
</body>
</html>