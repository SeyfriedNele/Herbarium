<x-layout>
    <x-slot:heading>
        {{ $herb['name'] }}
    </x-slot:heading>
    <a href='/herbs' class="rounded-md px-3 py-2 font-medium bg-green-700"> 
        Herbs
    </a mb-15>
 <div class="mt-4">  
    <p> usage: {{$herb['usage']}}</p>
    <p> description: {{$herb['description']}}</p>
</x-layout>