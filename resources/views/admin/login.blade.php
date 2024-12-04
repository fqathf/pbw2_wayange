<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>WAYANGE</title>
</head>
<body>
    <div class="container">
        <h2>WAYANGE</h2>
        
        <form action="{{ route('admin.login') }}" method="POST">
            @csrf
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" required value="{{ old('email') }}">

            <label for="password">Password:</label>
            <input type="password" name="password" id="password" required>

            <button type="submit">Login</button>
        </form>
    </div>
</body>
</html>