<x-layout>
    <x-slot:heading>
        Job Listing
    </x-slot:heading>
    <h1 class="mb-4">Welcome to Job Listing Page</h1>
    <div class="space-y-4">
        @foreach ($job as $jobs)
        
            <a href="/jobs/{{$jobs['id']}}" class="block px-4 py-6 border border-gray-200 rounded-lg">
                <div class="font-bold text-blue-500"></div>
                <div class="font-bold text-blue-500">{{$jobs->employer->name}}</div>
                <div><strong>{{$jobs['title']}}</strong> Pays {{$jobs['salary']}} per year</div>
            </a>
           
    @endforeach
    <div>
        {{$job->links()}}
    </div>
    </div>
</x-layout>