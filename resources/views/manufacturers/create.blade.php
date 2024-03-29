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
        <form action="{{ route('manufacturer.create') }}" method="post">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            @csrf
            <label for="">
                <span>Name</span>
                <input type="text" name="name" id="" value="{{ old('name') }}">
            </label>
            <label for="">
                <span>Short Name</span>
                <input type="text" name="short_name" id="" value="{{ old('short_name') }}">
            </label>
            <label for="">
                <span>Image</span>
                <input type="text" name="image" id="" value="{{ old('image') }}">
            </label>

            <button>Submit</button>
        </form>
    </div>
</body>

</html>
