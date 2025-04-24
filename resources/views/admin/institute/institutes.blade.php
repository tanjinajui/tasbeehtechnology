<x-layouts.app>

    <div class="flex justify-between items-center my-5">
        <flux:heading size="lg">All Institutes</flux:heading>
        <a href="{{ route('institutes.create') }}"
            class="relative items-center font-medium justify-center gap-2 whitespace-nowrap disabled:opacity-75 dark:disabled:opacity-75 disabled:cursor-default disabled:pointer-events-none h-10 text-sm rounded-lg px-4 inline-flex  bg-white hover:bg-zinc-50 dark:bg-zinc-700 dark:hover:bg-zinc-600/75 text-zinc-800 dark:text-white border border-zinc-200 hover:border-zinc-200 border-b-zinc-300/80 dark:border-zinc-600 dark:hover:border-zinc-600 shadow-xs [[data-flux-button-group]_&]:border-l-0 [:is([data-flux-button-group]>&:first-child,_[data-flux-button-group]_:first-child>&)]:border-l-[1px]">
            Add new
        </a>
    </div>
    <div x-data="{ selectedId:'' }" class="overflow-hidden w-full overflow-x-auto rounded-xl border border-slate-300 dark:border-slate-700">

        <table class="w-full text-left text-sm text-slate-700 dark:text-slate-300">
            <thead
                class="border-b border-slate-300 bg-slate-100 text-sm text-black dark:border-slate-700 dark:bg-slate-800 dark:text-white">
                <tr>
                    <th scope="col" class="p-4">Sl</th>
                    <th scope="col" class="p-4">User</th>
                    <th scope="col" class="p-4">Institute</th>
                    <th scope="col" class="p-4">Address</th>
                    <th scope="col" class="p-4">Contacts</th>
                    <th scope="col" class="p-4">Established</th>
                    <th scope="col" class="p-4">Education level</th>
                    <th scope="col" class="p-4">Medium</th>
                    <th scope="col" class="p-4">Status</th>
                    <th scope="col" class="p-4">Action</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-slate-200 dark:divide-zinc-800">
                
                @foreach ($institutes as $item)
                    <tr class="even:bg-slate-50 dark:even:bg-zinc-700">
                        {{-- <td class="p-4">{{ ++$i }}</td> --}}
                        <td class="p-4">
                            <div class="flex items-center gap-2">
                                <div class="grid flex-1 text-left text-sm leading-tight">
                                    <span class="truncate font-medium">
                                        {{ $item->user->name }}
                                    </span>
                                    <span class="truncate text-xs">
                                        {{ $item->user->email }}
                                    </span>
                                </div>
                            </div>
                        </td>
                        <td class="p-4">
                            <div class="flex items-center gap-2">
                                <div class="border border-gray-100 rounded-sm overflow-hidden size-10">
                                    <img src="{{ asset('storage/' . $item->logo) }}" alt="" class="">
                                </div>
                                <div class="">
                                    <p>{{ $item->name }}</p>
                                    <p class="text-xs capitalize">{{ $item->type }}</p>
                                </div>
                            </div>
                        </td>
                        <td class="p-4">
                            <p>{{ $item->address }}</p>
                        </td>
                        <td class="p-4">
                            <p class="text-xs">{{ $item->phone_number }}</p>
                            <p class="text-xs">{{ $item->email }}</p>
                            <p class="text-xs">{{ $item->website }}</p>
                        </td>
                        <td class="p-4">{{ $item->established }}</td>
                        <td class="p-4">{{ $item->education_level }}</td>
                        <td class="p-4">{{ $item->education_medium }}</td>

                        <td class="p-4">
                            @if ($item->status == 'pending')
                                <span
                                    class="inline-flex overflow-hidden rounded-xl border border-red-600 px-1 py-0.5 text-xs font-medium text-red-600 bg-red-600/10">
                                    Pending
                                </span>
                            @elseif($item->status == 'Inactive')
                                <span
                                    class="inline-flex overflow-hidden rounded-xl border border-blue-600 px-1 py-0.5 text-xs font-medium text-blue-600 bg-blue-600/10">
                                    Inactive
                                </span>
                                @else
                                <span
                                    class="inline-flex overflow-hidden rounded-xl border border-green-600 px-1 py-0.5 text-xs font-medium text-green-600 bg-green-600/10">
                                    Approved
                                </span>
                            @endif
                        </td>

                        <td class="p-4">
                            <div class="flex gap-2">
                                {{-- <a href="{{ route('institutes.edit', $item->id) }}" variant="primary"
                                    class="whitespace-nowrap rounded-xl bg-transparent p-0.5 font-semibold text-blue-700 outline-blue-700 hover:underline hover:opacity-75 focus-visible:outline-2 focus-visible:outline-offset-2 active:opacity-100 active:outline-offset-0 dark:text-blue-600 dark:outline-blue-600">
                                    Edit
                                </a> --}}
                                <flux:button href="{{ route('institutes.edit', $item->id) }}" variant="primary">Edit</flux:button>
                                {{-- <form action="{{ route('institutes.destroy', $item->id) }}" method="post"
                                    class="inline-block">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" onclick="return confirm('Are you sure?')"
                                        class="whitespace-nowrap rounded-xl bg-transparent p-0.5 font-semibold text-red-700 outline-red-700 hover:underline hover:opacity-75 focus-visible:outline-2 focus-visible:outline-offset-2 active:opacity-100 active:outline-offset-0 dark:text-red-600 dark:outline-red-600">
                                        Delete
                                    </button>
                                    
                                </form> --}}
                                {{-- button popup  --}}
                                <flux:modal.trigger name="confirmMadrasaDeletion">
                                    <flux:button variant="danger" x-data="" x-on:click.prevent="$dispatch('open-modal', 'confirmMadrasaDeletion'); selectedId={{$item->id}}">
                                        {{ __('Delete') }}
                                    </flux:button>
                                </flux:modal.trigger>
                            
                                
                               
                            </div>

                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <flux:modal name="confirmMadrasaDeletion" :show="$errors->isNotEmpty()" focusable class="max-w-lg">
            <form action="{{ route('institutes.destroy') }}" method="POST" class="space-y-6">
                @csrf
                @method('post')
                <input type="hidden" name="id" x-bind:value="selectedId">
                <div>
                    <flux:heading size="lg">{{ __('Are you sure you want to delete your Madrasa?') }}</flux:heading>
    
                    <flux:subheading>
                        {{ __('Once your madrasa is deleted, all of its resources and data will be permanently deleted. Please enter your nip no to confirm you would like to permanently delete your madrasa.') }}
                    </flux:subheading>
                </div>
    
                <flux:input  id="nip_no" :label="__('Nip No')" type="password" name="nip_no" />
    
                <div class="flex justify-end space-x-2">
                    <flux:modal.close>
                        <flux:button variant="filled">{{ __('Cancel') }}</flux:button>
                    </flux:modal.close>
    
                    <flux:button variant="danger" type="submit">{{ __('Delete madrasa') }}</flux:button>
                </div>
            </form>
        </flux:modal>
    </div>
    {{-- popup modal --}}
    <!-- Script -->
  
    <div class="">
        {{ $institutes->links() }}
    </div>

</x-layouts.app>
