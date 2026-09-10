
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.3.1/css/all.min.css" integrity="sha512-QeR2VH+lsBE5LSAe1Q5EnTBbe7XTBubt8dG93Y7gidSgdMCr8nVqKcfKAMyN96SV8KDbZVTDXChatu5G2KQGzg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <title>FlowTrack - Create Account</title>

</head>

<body>

    <div class="container">

        <!-- Registration Form -->

        <section class="form-section">

            <div class="logo">
                FlowTrack
            </div>

            <h1>Create Your Account</h1>

            <p class="subtitle">
                Start tracking your productivity and reaching your goals.
            </p>

            <form>

                <!-- First and Last Name -->

                <div class="form-row">

                    <div class="form-group">
                        <label for="first-name">
                            First Name
                        </label>

                        <input
                            type="text"
                            id="first-name"
                            name="first_name"
                            placeholder="John"
                        >
                    </div>

                    <div class="form-group">
                        <label for="last-name">
                            Last Name
                        </label>

                        <input
                            type="text"
                            id="last-name"
                            name="last_name"
                            placeholder="Doe"
                        >
                    </div>

                </div>

                <!-- Email -->

                <div class="form-group">

                    <label for="email">
                        Email Address
                    </label>

                    <input
                        type="email"
                        id="email"
                        name="email"
                        placeholder="you@example.com"
                    >

                </div>

                <!-- Password -->

                <div class="form-group">

                    <label for="password">
                        Password
                    </label>

                    <input
                        type="password"
                        id="password"
                        name="password"
                        placeholder="Create a password"
                    >

                </div>

                <!-- Confirm Password -->

                <div class="form-group">

                    <label for="password-confirmation">
                        Confirm Password
                    </label>

                    <input
                        type="password"
                        id="password-confirmation"
                        name="password_confirmation"
                        placeholder="Confirm your password"
                    >

                </div>

                <!-- Terms -->

                <p class="terms">
                    By creating an account, you agree to our
                    <a href="#">
                        Terms of Service
                    </a>
                    and
                    <a href="#">
                        Privacy Policy
                    </a>.
                </p>

                <!-- Submit -->
               
                {{-- <x-button  class="w-full py-3 px-4 rounded-lg bg-blue-600 text-white font-semibold hover:bg-blue-700" type="submit">
                    Create Account
                </x-button> --}}

            </form>

            <!-- Login -->

            <p class="login">
                Already have an account?
                <a href="#">
                    Sign In
                </a>
            </p>

        </section>


        <!-- Information Section -->

        <section class="info-section">

            <h2>
                Build Better Habits.
            </h2>

            <p>
                FlowTrack gives you a simple place to organize
                your work, track your focus, and understand
                your productivity.
            </p>

            <div class="feature">
                <span class="check">✓</span>
                <span>Organize your daily tasks</span>
            </div>

            <div class="feature">
                <span class="check">✓</span>
                <span>Track focused work sessions</span>
            </div>

            <div class="feature">
                <span class="check">✓</span>
                <span>Monitor your productivity</span>
            </div>

            <div class="feature">
                <span class="check">✓</span>
                <span>Build consistent habits</span>
            </div>

        </section>

    </div>

</body>
</html>

