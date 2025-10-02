<x-layout>
    <x-slot:heading>
        Create Herb
    </x-slot:heading>

    <a href='/herbs' class="rounded-md px-3 py-2 font-medium bg-green-700">
        Herbs
    </a> 
 <div class="mt-4">  
    <h1> Here you can add to your collection of Herbs. </h1>
  
<form method="POST" action="/herbs">
  @csrf 
  <div class="space-y-12">
    <div class="border-b border-white/10 pb-12">

      <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
        <div class="sm:col-span-4">
          <label for="name" class="block text-sm/6 font-medium text-white">Name</label>
          <div class="mt-2">
            <div class="flex items-center rounded-md bg-white/5 pl-3 outline-1 -outline-offset-1 outline-white/10 focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-500">
              <input id="name" type="text" name="name" placeholder="your herb" class="block min-w-0 grow bg-transparent py-1.5 pr-3 pL-1 text-base text-white placeholder:text-gray-500 focus:outline-none sm:text-sm/6" />
            </div>
          </div>
        </div>

        <div class="col-span-full">
          <label for="usage" class="block text-sm/6 font-medium text-white">Usage</label>
          <div class="mt-2">
            <textarea id="usage" name="usage" rows="3" class="block w-full rounded-md bg-white/5 px-3 py-1.5 text-base text-white outline-1 -outline-offset-1 outline-white/10 placeholder:text-gray-500 focus:outline-2 focus:-outline-offset-2 focus:outline-green-700 sm:text-sm/6"></textarea>
          </div>
        </div>

                <div class="col-span-full">
          <label for="description" class="block text-sm/6 font-medium text-white">Description</label>
          <div class="mt-2">
            <textarea id="description" name="description" rows="3" class="block w-full rounded-md bg-white/5 px-3 py-1.5 text-base text-white outline-1 -outline-offset-1 outline-white/10 placeholder:text-gray-500 focus:outline-2 focus:-outline-offset-2 focus:outline-green-700 sm:text-sm/6"></textarea>
          </div>
        </div>

  <div class="mt-6 flex items-center gap-x-6">
    <button type="button" class="text-sm/6 font-semibold text-white">Cancel</button>
    <button type="submit" class="rounded-md bg-green-700 px-3 py-2 text-sm font-semibold text-white focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500">Save</button>
  </div>
</form>

</x-layout>

