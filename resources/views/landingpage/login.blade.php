<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.3.1/css/all.min.css" integrity="sha512-QeR2VH+lsBE5LSAe1Q5EnTBbe7XTBubt8dG93Y7gidSgdMCr8nVqKcfKAMyN96SV8KDbZVTDXChatu5G2KQGzg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

@vite(['resources/css/app.css', 'resources/js/app.js'])
<title>FlowTrack Login</title>

</head>
<body class="min-h-screen flex items-center justify-center bg-gradient-to-br from-slate-900 to-blue-800">
<div class="w-[92%] max-w-[950px] grid grid-cols-1 md:grid-cols-2 bg-white rounded-[20px] overflow-hidden shadow-[0_20px_50px_rgba(0,0,0,0.2)]">
<div class="left p-[50px]">
<div class="logo  text-[1.8rem] font-bold text-blue-600 mb-10">FlowTrack</div>
<h1 class="mb-2 font-bold text-[2rem]">Welcome Back</h1>
<p class="subtitle text-gray-500 mb-[25px]">Sign in to continue tracking your productivity.</p>
<form action="" method="post" class="form">

    <div class="form-group mb-[18px]">
    <label class="block mb-2">Email Address</label>
    <input type="email" placeholder="you@example.com" class="w-full p-[14px] border border-gray-300 rounded-[10px]">
    </div>
    
    <div class="form-group mb-[18px]">
    <label class="block mb-2">Password</label>
    <input type="password" placeholder="••••••••" class="w-full p-[14px] border border-gray-300 rounded-[10px]">
    </div>
    
    <div class="options flex justify-between my-[15px] mb-[25px] text-[0.9rem]">
    <span>Remember Me</span>
    <x-button-link url="#">Forgot Password?</x-button-link>
    </div>
    
    <x-button class="w-full p-[14px] border-0 rounded-[10px] bg-blue-600 text-white cursor-pointer">Sign In</x-button>
    
    <div class="signup text-center mt-5">Don't have an account? <x-button-link>Create Account</x-button-link></div>
    </div>
</form>

<div class="right hidden md:flex bg-slate-900 text-white p-[50px] flex-col justify-center">
<h2 class="font-bold text-[1.5rem]">Stay Focused. Stay Consistent.</h2>
<p>Manage tasks, track focus sessions, and build productive habits with FlowTrack.</p>
<div class="feature mt-[12px]">✓ Track daily tasks</div>
<div class="feature mt-[12px]">✓ Monitor focus sessions</div>
<div class="feature mt-[12px]">✓ View analytics</div>
<div class="feature mt-[12px]">✓ Build productivity streaks</div>
</div>
</div>
</body>
</html>