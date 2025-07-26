<x-layout :title=$title>

    <!-- Your content -->

    {{-- hero --}}
    <x-home.hero  />

    {{-- end hero --}}

    {{-- about --}}
    <x-home.about />
    {{-- end about --}}

    {{-- blog --}}
    <x-home.blog :posts=$posts />
    {{-- end blog --}}

    {{-- contacts --}}
    <x-home.contacts />


    {{-- end contacts --}}

    {{-- foooter --}}
    <x-footer />
    {{-- end footer --}}



</x-layout>
