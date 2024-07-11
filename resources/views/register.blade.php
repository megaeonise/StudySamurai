<html>
<body>
<h1>Signup</h1>
<form method="post" action="{{ route('register.post') }}">
    @csrf
    <input type="text" id="username" name="username" placeholder="Username">
    <input type="password" id="password" name="password" placeholder="Password">
    <input type="email" id="email" name="email" placeholder="Email Address">
    <input type="submit" value="Signup_Request">
</form>
</body>
</html>