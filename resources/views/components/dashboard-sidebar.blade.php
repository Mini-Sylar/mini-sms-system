<link href="{{ asset('css/dash-side-bar.css') }}" rel="stylesheet">
{{-- TODO: FIX FONT AWESOME --}}


<aside class="dash-side-container">
    <nav class="dash-side">
        {{-- Go Home --}}
        <a href="/dashboard">
            <x-tabler-home class="dash-icon" />
        </a>
        {{-- Quick Message --}}
        <a href="/quick-message">
            <x-tabler-message-circle class="dash-icon" />
        </a>
        {{-- Contact Section --}}
        <a href="/contacts">
            <x-tabler-address-book />
        </a>
        {{-- Group Section --}}
        <a href="/groups">
            <x-tabler-user-plus class="dash-icon" />
        </a>
    </nav>
    <div class="logout">
        <a href="logout">
            <x-tabler-logout />
        </a>
    </div>
</aside>
