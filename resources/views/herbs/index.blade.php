<x-layout>
    <x-slot:heading>
        Herbarium
    </x-slot:heading>

    <h1> Here you will find a collection of herbs. </h1>
     <div class="mt-4">  
    <a href ='/herbs/create' class="rounded-md px-3 py-2 font-medium bg-green-700">
        Create Herb
    <a>
         <div class="mt-4">  
    <ul>
        @foreach ($herbs as $herb)
            <li>
                <a href="/herbs/{{ $herb['id'] }}" class= text-green-500 hover:underline>
                    <strong>{{ $herb['name'] }}</strong></li>
                </a>
        @endforeach       
    </ul>
    
</x-layout>