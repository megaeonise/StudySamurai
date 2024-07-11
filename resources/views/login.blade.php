<html>
<body>
        <form action="{{ url('/login') }}" method="POST">
                @csrf
                <h1>Log In</h1>
                <input type="text" id="username" name="username" placeholder="Username">
                <input type="password" id="password" name="password" placeholder="Password">
                <input type="submit" value="Log In">
            </form>
            <p>New User</p>
            <button onclick="location.href='/register'">Sign Up</button>
</body>
</html>