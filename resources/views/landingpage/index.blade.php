<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.3.1/css/all.min.css" integrity="sha512-QeR2VH+lsBE5LSAe1Q5EnTBbe7XTBubt8dG93Y7gidSgdMCr8nVqKcfKAMyN96SV8KDbZVTDXChatu5G2KQGzg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
@vite(['resources/css/app.css', 'resources/js/app.js'])

<title>FlowTrack - Focus Better. Achieve More.</title>

</head>
<body>
   <x-header />
    <x-hero />

<section class="py-20">
    <div class="w-[92%] max-w-[1100px] mx-auto">
        <div class="text-center mb-10 text-3xl font-bold">
            <h2>Everything You Need To Stay Productive</h2>
        </div>

        <div class="grid gap-5  grid-cols-1 md:grid-cols-3">
           <x-card
                title="Task Management"
                text="Create, organize, and complete tasks with ease."
                class="p-[25px] border border-gray-200 rounded-2xl "
          />
           <x-card
                title="Focus Sessions"
                text="Track deep work sessions and monitor your progress."
                class="p-[25px] border border-gray-200 rounded-2xl "
          />
           <x-card
                title="Analytics"
                text="Visualize productivity trends and improve performance."
                class="p-[25px] border border-gray-200 rounded-2xl "
          />
           <x-card
                title="Goals"
                text="Set daily and weekly productivity targets."
                class="p-[25px] border border-gray-200 rounded-2xl "
          />
           <x-card
                title="Streak Tracking"
                text="Build consistency and maintain momentum."
                class="p-[25px] border border-gray-200 rounded-2xl "
          />
           <x-card
                title="Responsive Design"
                text="Access FlowTrack on desktop, tablet, or mobile."
                class="p-[25px] border border-gray-200 rounded-2xl "
          />
        </div>
    </div>
</section>

<section class="py-20 bg-slate-50">
<div class="container w-[92%] max-w-[1100px] mx-auto">
<h2 class="text-center mb-10 text-3xl font-bold">Product Preview</h2>

<div class="bg-white p-[25px] rounded-2xl shadow-lg">
<h3 class=" mb-10 text-2xl font-bold">Dashboard Overview</h3>

<div class="grid gap-5 grid-cols-2 md:grid-cols-4">

         <x-card
                title="4.5h"
                text="Focus Time"
                class="bg-blue-50 p-5 rounded-xl text-center"
          />
         <x-card
                title="12"
                text="Tasks Done"
                class="bg-blue-50 p-5 rounded-xl text-center"
          />
         <x-card
                title="9 Days"
                text="Streak"
                class="bg-blue-50 p-5 rounded-xl text-center"
          />
         <x-card
                title="78%"
                text="Weekly Goal"
                class="bg-blue-50 p-5 rounded-xl text-center"
          />

</div>
</div>
</div>
</section>

<section class="cta py-20 text-center bg-slate-900 text-white">
<div class="container w-[92%] max-w-[1100px] mx-auto">
<h2 class="text-3xl font-bold mb-5">Ready to Take Control of Your Time?</h2>
<p class="max-w-[700px] mx-auto mb-[30px] text-lg">Join FlowTrack and start building better habits today.</p>
<br>
<x-button-link url="/login" class="inline-block px-6 py-3.5 bg-blue-600 text-white rounded-[10px] no-underline">Get Started</x-button-link>
</div>
</section>
<footer class="p-[30px] text-center bg-gray-900 text-slate-300">
   <p>&copy; {{ date('Y') }} FlowTrack. All rights reserved.</p>
</footer>

</body>
</html>