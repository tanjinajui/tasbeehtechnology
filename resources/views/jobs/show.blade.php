<x-layout>
    <x-slot:heading>
        job Details
    </x-slot:heading>
    <h1 class="text-lg font-bold text-green-500">{{$jobs['title']}}</h1>
    <p>This job pays {{$jobs['salary']}} per year.</p>
    <p class="mt-6">
        <x-button href="/jobs/{{$jobs->id}}/edit">Edit Job</x-button>
    </p>
</x-layout>