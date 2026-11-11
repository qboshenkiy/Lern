<div class="aside">
    <nav class="aside-menu" aria-label="Sidebar navigation">
        <details class="aside-menu__group" open>
            <summary>Pages</summary>
            <ul>
                <li><a href="{{ route('home') }}" @if (request()->is('/')) aria-current="page" @endif>Home</a></li>
                <li><a href="{{ route('about') }}" @if (request()->is('about')) aria-current="page" @endif>About</a></li>
                <li><a href="{{ route('contact') }}" @if (request()->is('contact')) aria-current="page" @endif>Contact</a></li>
                <li><a href="{{ route('messages.index') }}" @if (request()->is('messages')) aria-current="page" @endif>Messages</a></li>
            </ul>
        </details>
    </nav>
</div>