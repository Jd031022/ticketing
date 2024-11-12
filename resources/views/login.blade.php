<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ticketing System</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
    <div class="container">
        <div class="hero-card">
            <h1>TICKETING SYSTEM</h1>
            <p>
                This Ticketing System allows you to manage support tickets efficiently.
                Track issues, prioritize tasks, and streamline customer support with ease.
                Stay updated on progress and resolutions with real-time notifications and reporting.
            </p>
        </div>
        <div class="login-box">
            <header class="login-header">
                <h1>Login</h1>
                <p>Access your ticketing dashboard, create and view tickets, and keep track of updates.</p>
            </header>
            <main class="login">
                <form action="/login" method="POST"> 
                    @csrf
                    <div>
                        <input
                            type="text"
                            id="username"
                            name="username"
                            placeholder="Email"
                            required
                        />
                    </div>
                    <div>
                        <input
                            type="password"
                            id="password"
                            name="password"
                            placeholder="Password"
                            required
                        />
                    </div>
                    <button type="submit" class="form-button">Login</button>
                </form>
            </main>
            <footer class="signup-footer">
                <p><a href="#">Don't have an account?</a></p>
            </footer>
        </div>
    </div>
</body>
</html>