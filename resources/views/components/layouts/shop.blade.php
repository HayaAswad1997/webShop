<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('_partials.html_head')
    {!! SEOMeta::generate() !!}
{{--    {!! OpenGraph::generate() !!}--}}
{{--    {!! Twitter::generate() !!}--}}
{{--    {!! JsonLd::generate() !!}--}}
</head>
<body>
<div id="app">

    <x-shop.header/>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 ">
        {{$slot ?? '' }}
    </div>
    <div class="mt-10">
        <x-shop.footer/>
    </div>
</div>

</body>
{{--@livewire('livewire-ui-modal')--}}
{{--@livewireUIScripts--}}
@livewireScripts

<script src="{{ asset('js/app.js') }}" defer></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>

<x-livewire-alert::scripts/>
</html>

git
