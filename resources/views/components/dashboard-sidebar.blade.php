<link href="{{ asset('css/dash-side-bar.css') }}" rel="stylesheet">
{{-- TODO: FIX FONT AWESOME --}}


<aside class="dash-side-container">
    <nav class="dash-side">
        {{-- Go Home --}}
        <a href="/dashboard">
            <x-tabler-home />Home
        </a>
        {{-- Quick Message --}}
        <a href="#"><i class="fa-solid fa-messages"></i>Quick Message</a>
        {{-- Contact Section --}}
        <a href="/contacts"><i class="fa-solid fa-messages"></i> Contacts</a>
        {{-- Group Section --}}
        <a href="/groups"><i class="fa-solid fa-messages"></i>Groups</a>
    </nav>
    <div class="logout">
        <a href="logout">Logout</a>
    </div>
</aside>
