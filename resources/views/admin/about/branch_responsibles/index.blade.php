<x-layouts.app>

    <div class="flex justify-between items-center my-5">
        <flux:heading size="lg">All Branch Responsibles </flux:heading>
        <a href="{{ route('branch_responsibles.create') }}"
            class="relative items-center font-medium justify-center gap-2 whitespace-nowrap disabled:opacity-75 dark:disabled:opacity-75 disabled:cursor-default disabled:pointer-events-none h-10 text-sm rounded-lg px-4 inline-flex  bg-white hover:bg-zinc-50 dark:bg-zinc-700 dark:hover:bg-zinc-600/75 text-zinc-800 dark:text-white border border-zinc-200 hover:border-zinc-200 border-b-zinc-300/80 dark:border-zinc-600 dark:hover:border-zinc-600 shadow-xs [[data-flux-button-group]_&]:border-l-0 [:is([data-flux-button-group]>&:first-child,_[data-flux-button-group]_:first-child>&)]:border-l-[1px]">
            Add new
        </a>
    </div>
    <div x-data="{ selectedId:'' }" class="overflow-hidden w-full overflow-x-auto rounded-xl border border-slate-300 dark:border-slate-700">

        <table class="w-full text-left text-sm text-slate-700 dark:text-slate-300">
            <thead
                class="border-b border-slate-300 bg-slate-100 text-sm text-black dark:border-slate-700 dark:bg-slate-800 dark:text-white">
                <tr>
                    <th scope="col" class="p-4">Branch Name</th>
                    <th scope="col" class="p-4">Photo</th>
                    <th scope="col" class="p-4">Name</th>
                    <th scope="col" class="p-4">Branch email</th>
                    <th scope="col" class="p-4">Contact No</th>
                    <th scope="col" class="p-4">Action</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-slate-200 dark:divide-zinc-800">
                @foreach ($branch_responsibles as $item)
                    <tr class="even:bg-slate-50 dark:even:bg-zinc-700">
                        {{-- <td class="p-4">
                            <div class="flex items-center gap-2">
                                <div class="border border-gray-100 rounded-sm overflow-hidden size-10">
                                    <img src="{{ asset('storage/' . $item->photo) }}" alt="" class="">
                                </div>
                                <div class="">
                                    <p>{{ $item->name }}</p>
                                    <p class="text-xs capitalize">{{ $item->type }}</p>
                                </div>
                            </div>
                        </td> --}}
                        <td class="p-4">{!! $item->branch_name !!}</td>
                        <td class="p-4 border border-gray-100 rounded-sm overflow-hidden size-10" ><img src="{{ asset('storage/' . $item->photo) }}" alt="" class=""></td>
                        <td class="p-4">{!! $item->name !!}</td>
                        <td class="p-4">{!! $item->email !!}</td>
                        <td class="p-4">{!! $item->contact_no !!}</td>
                        <td class="p-4">
                            <div class="flex gap-2">
                                <flux:button href="{{ route('branch_responsibles.edit', $item->id) }}" variant="primary">Edit</flux:button>
                                <form action="{{ route('branch_responsibles.destroy', $item->id) }}" method="post"
                                    class="inline-block">
                                    @csrf
                                    @method('DELETE')
                                    <flux:button variant="danger" type="submit" onclick="return confirm('Are you sure?')">Delete</flux:button>
                                </form>                                 
                            </div>

                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    {{-- popup modal --}}
    <!-- Script -->
  
    <div class="">
        {{ $branch_responsibles->links() }}
    </div>

</x-layouts.app>
