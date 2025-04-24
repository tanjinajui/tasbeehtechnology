<x-layout>
    {{-- heading text --}}
    <x-slot:heading>
        Edit Job: {{$jobs->title}}
    </x-slot:heading>
    
    <form method="POST" action="/jobs/{{$jobs->id}}">
        @csrf
        @method('PATCH')
          <div class="space-y-12">
            <div class="pb-12 border-b border-gray-900/10">
              
              <div class="grid grid-cols-1 mt-10 gap-x-6 gap-y-8 sm:grid-cols-6">
                <div class="sm:col-span-4">
                  <label for="title" class="block font-medium text-gray-900 text-sm/6">Job Title</label>
                  <div class="mt-2">
                    <div class="flex items-center pl-3 bg-white rounded-md outline-1 -outline-offset-1 outline-gray-300 focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-600">
                      <div class="text-base text-gray-500 select-none shrink-0 sm:text-sm/6"></div>
                      <input type="text" name="title" id="title" class="block min-w-0 grow py-1.5 pr-3 pl-1 text-base text-gray-900 placeholder:text-gray-400 focus:outline-none sm:text-sm/6" placeholder="Enter job title" value="{{$jobs->title}}">
                    </div>
                    @error('title')
                        <p class="text-xs text-red-500 font-semibold mt-1">{{$message}}</p>
                    @enderror
                  </div>
                </div>
                <div class="sm:col-span-4">
                  <label for="salary" class="block font-medium text-gray-900 text-sm/6">Job Salary</label>
                  <div class="mt-2">
                    <div class="flex items-center pl-3 bg-white rounded-md outline-1 -outline-offset-1 outline-gray-300 focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-600">
                      <div class="text-base text-gray-500 select-none shrink-0 sm:text-sm/6"></div>
                      
                      <input type="text" name="salary" id="salary" class="block min-w-0 grow py-1.5 pr-3 pl-1 text-base text-gray-900 placeholder:text-gray-400 focus:outline-none sm:text-sm/6" placeholder="Enter job salary" value="{{$jobs->salary}}"required>
                    </div>
                    @error('salary')
                        <p class="text-xs text-red-500 font-semibold mt-1">{{$message}}</p>
                    @enderror
                  </div>
                </div>
              </div>
            </div>
  
          </div>
        
          <div class="flex items-center justify-between mt-6 gap-x-6">
            <div class="flex items-center">
              <button form="delete-form" class="text-red-500 text-sm font-bold">Delete</button>
            </div>
            <div class="flex items-center gap-x-6">
              <a href="/jobs/{{$jobs->id}}" type="button" class="font-semibold text-gray-900 text-sm/6">Cancel</a>
                <div>
                  <button type="submit" class="px-3 py-2 text-sm font-semibold text-white bg-indigo-600 rounded-md shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Update</button>
                </div>
            </div>
          </div>
      </form>
      <form method="POST" action="/jobs/{{$jobs->id}}" id="delete-form" class="hidden">
      @csrf
      @method('DELETE')
    </form>
</x-layout>