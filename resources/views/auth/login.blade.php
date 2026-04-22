<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Login</title>
    <link rel="stylesheet" href="{{ asset('admin/css/main.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="icon" href="{{asset('admin/images/logo/fav.png')}}" type="image/png">
</head>


<body>

    <div class="admin-login-wrapper">

        <!-- LEFT LOGIN -->
        <div class="admin-login-form-area">

            <div class="admin-login-box">

                <img class="mb-2" src="https://vidyaglobal.in/website/images/vidyaglobal-logo.png">
                <div class="admin-login-heading">Welcome back</div>
                <div class="admin-login-subtext">Please enter your details</div>

                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <div class="admin-input-group">
                        <label class="admin-input-label">Email address</label>
                        <input type="email" name="email" class="admin-text-input" placeholder="Enter Email" required>
                    </div>

                    <div class="admin-input-group">
                        <label class="admin-input-label">Password</label>
                        <input type="password" class="admin-text-input" name="password" placeholder="Enter Password"
                            required>
                    </div>

                    <div class="admin-extra-options">

                        <label>
                            <input type="checkbox" name="remember"> Remember for 30 days
                        </label>

                        <a href="{{ route('password.request') }}">Forgot password</a>

                    </div>

                    <button class="admin-signin-button" type="submit">Log In</button>



                    <div class="admin-signup-text">
                        Don't have an account? <a href="{{ route('register') }}">Register Now</a>
                    </div>

                </form>

            </div>

        </div>


        <!-- RIGHT IMAGE -->
        <div class="admin-login-image-area">

            <img src="{{ asset('admin/images/auth/02.jpg') }}">

            <div class="admin-image-text">
                <h3>Welcome back to your workspace.
                </h3>
                <p>Log in and continue where you left off.</p>
            </div>

        </div>

    </div>

    {{-- all the scripts will be placed there --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>