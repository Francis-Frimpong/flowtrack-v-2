<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
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

<div class="grid gap-5  grid-cols-2 md:grid-cols-4">

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

</body>
</html>