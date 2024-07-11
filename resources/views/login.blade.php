<html>
<body>
        <form action="{{ route('login.post') }}" method="POST">
                @csrf
                <h1>Log In</h1>
                <input type="email" id="email" name="email" placeholder="Email Address">
                <input type="password" id="password" name="password" placeholder="Password">
                <input type="submit" value="Log In">
            </form>
            <p>New User</p>
            <button onclick="location.href='/register'">Sign Up</button>
</body>
</html>