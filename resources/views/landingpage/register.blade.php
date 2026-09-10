
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.3.1/css/all.min.css" integrity="sha512-QeR2VH+lsBE5LSAe1Q5EnTBbe7XTBubt8dG93Y7gidSgdMCr8nVqKcfKAMyN96SV8KDbZVTDXChatu5G2KQGzg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <title>FlowTrack - Create Account</title>

</head>

<body class="font-[Arial,sans-serif] min-h-screen flex items-center justify-center py-[30px] px-[15px] bg-gradient-to-br from-slate-900 to-blue-800">

    <div class="container    w-full max-w-[950px] grid grid-cols-1 md:grid-cols-2 bg-white rounded-[20px] overflow-hidden shadow-[0_20px_50px_rgba(0,0,0,0.2)]">

        <!-- Registration Form -->

        <section class="form-section p-[45px]">

            <div class="logo  text-[1.8rem] font-bold text-blue-600 mb-[30px]">
                FlowTrack
            </div>

            <h1 class="text-[2rem] mb-2 text-gray-900">Create Your Account</h1>

            <p class="subtitle text-gray-500 mb-[25px]">
                Start tracking your productivity and reaching your goals.
            </p>

            <form method="POST" action="">
                @csrf
                <!-- First and Last Name -->

                <div class="form-row  grid grid-cols-2 gap-[15px]">

                    
                    <div class="form-group mb-[16px]">
                          <x-form-input
                        labelClass="block text-[0.9rem] font-semibold mb-[7px] text-gray-700"
                        inputClass="w-full py-[13px] px-[14px] border border-gray-300 rounded-[10px] text-base outline-none focus:border-blue-600 focus:ring-[3px] focus:ring-blue-600/10"
                        type="text"
                        name="first_name"
                        placeholder="John"
                        for="first-name"
                    >
                        First Name
                    </x-form-input>
                     
                    </div>
                    <div class="form-group mb-[16px]">
                          <x-form-input
                        labelClass="block text-[0.9rem] font-semibold mb-[7px] text-gray-700"
                        inputClass="w-full py-[13px] px-[14px] border border-gray-300 rounded-[10px] text-base outline-none focus:border-blue-600 focus:ring-[3px] focus:ring-blue-600/10"
                        type="text"
                        name="last_name"
                        placeholder="Doe"
                        for="last-name"
                    >
                        last Name
                    </x-form-input>
                     
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
               
                 <x-button  class="w-full py-3 px-4 rounded-lg bg-blue-600 text-white font-semibold hover:bg-blue-700" type="submit">
                    Create Account
                </x-button>

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

