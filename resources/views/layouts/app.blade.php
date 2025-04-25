@props(['title' => '', 'footerLinks' => ''])
<x-base-layout :$title>
    <x-layouts.header />
    {{ $slot }}
    <footer>
        {{-- @yield('footerLinks') --}}
    </footer>
</x-base-layout>
