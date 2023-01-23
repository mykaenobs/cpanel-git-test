<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Email Testing</title>
</head>
<body>
  <h1>Testing email</h1>
  <form action="{{ route('test') }}" method="post">
    @csrf

    <input type="text" name="email">
    <input type="submit" value="Test email">

    @error('email') <p>{{ $message }}</p> @enderror

  </form>
</body>
</html>
