@props([
    'method' => 'POST',   // POST by default
    'action' => '#',      // route/url
])

<form action="{{ $action }}" method="{{ strtoupper($method) === 'GET' ? 'GET' : 'POST' }}" {{ $attributes }}>
    @csrf

    @if(!in_array(strtoupper($method), ['GET', 'POST']))
        @method($method) {{-- supports PUT/PATCH/DELETE --}}
    @endif

    {{ $slot }}
</form>
