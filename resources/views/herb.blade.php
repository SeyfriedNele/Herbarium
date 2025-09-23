<x-layout>
    <x-slot:heading>
        {{ $herb['name'] }}
    </x-slot:heading>

    <p> usage: {{$herb['usage']}}</p>
    <p> description: {{$herb['description']}}</p>
</x-layout>