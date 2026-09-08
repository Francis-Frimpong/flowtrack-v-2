<header  class=" w-full p-4 py-8 bg-slate-900 text-white py-[18px] sticky top-0 z-50">
    <div class="container mx-auto flex justify-between items-center px-8">
        <h1 class="text-[2rem] md:text-5xl text-3xl font-semibold">FlowTrack</h1>
        <nav class="hidden md:flex items- space-x-4 flex gap-5">
            <div class="nav-links space-x-4">
                <x-nav-link url="/">Features</x-nav-link>
                <x-nav-link url="/">Pricing</x-nav-link>
                <x-nav-link url="/">About</x-nav-link>
                <x-nav-link url="/login">Login</x-nav-link>
              
            </div>
        </nav>
            <button id="hamburger" class="text-white md:hidden flex items-center">
        <i class="fa fa-bars text-2xl"></i>
        </button>
    </div>
    <!-- Mobile Menu -->
    <div
        id="mobile-menu"
        class="hidden md:hidden text-white mt-5 pb-4 space-y-2"
    >
        <x-nav-link url="/" :mobile="true"> Features</x-nav-link>
        <x-nav-link url="/" :mobile="true"> Price</x-nav-link>
        <x-nav-link url="/" :mobile="true"> About</x-nav-link>
        <x-nav-link url="login" :mobile="true">Login</x-nav-link>
    
    </div>
    </div>
</header>