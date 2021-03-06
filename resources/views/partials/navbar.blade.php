<nav role="navigation" class="bg-white" aria-label="main navigation">
    <div class="container flex justify-between align-center h-16 relative px-2 sm:px-4 max-w-6xl mx-auto">
        <div>
            <a href="{{ home_url('/') }}" class="block h-16">
                {{-- {{ get_bloginfo('name', 'display') }} --}}
                <img class="h-full object-contain mr-0 py-1" src="/wp-content/uploads/2020/10/logo.png"
                    alt="GAP logo">
            </a>
        </div>
        @if (has_nav_menu('primary_navigation')) 
        <navbar-menu :items='@json($navbar_menu_items)'/>
        {{-- {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'px-4 py-2 text-lg font-bold'])
            !!} --}}
        @endif
    </div>
</nav>