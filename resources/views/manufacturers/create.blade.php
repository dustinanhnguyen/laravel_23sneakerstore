<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create new Manufacturer</title>
</head>
<body>
    <div>
        <form action="{{route('create')}}" method="post">
            @csrf
            <label for="">
                <span>Name</span>
                <input type="text" name="name" id="">
            </label>
            <label for="">
                <span>Short Name</span>
                <input type="text" name="short_name" id="">
            </label>
            <label for="">
                <span>Image</span>
                <input type="text" name="image" id="">
            </label>

            <button>Submit</button>
        </form>
    </div>
</body>
</html>