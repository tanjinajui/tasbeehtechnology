<x-layouts.app>
    <div class="flex flex-col gap-6">
        <x-auth-header title="Create Board of Director Message" description="" />

        <!-- Session Status -->
        <x-auth-session-status class="text-center" :status="session('status')" />

        <form method="POST" action="{{ route('board_of_director.store') }}" class="flex flex-col gap-6"
            enctype="multipart/form-data">
            @csrf
            @method('POST')
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <flux:input id="no_of_director" :label="__('No of Director')" type="text" name="no_of_director" required placeholder="No of Director" value="{{ old('no_of_director') }}" />
                <flux:input id="photo" :label="__('Board of Director Photo')" type="file" name="photo"
                    accept="image/*" />
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <flux:input id="name" :label="__('Director name')" type="text" name="name" required placeholder="Director name" value="{{ old('name') }}" />
                 <flux:input id="email" :label="__('Director Email')" type="text" name="email" required
                    placeholder="Director Email" value="{{ old('email') }}" />
            </div>
            <div>
                <flux:textarea class="message" :label="__('Board of Director Message')" type="text" name="message" placeholder="Board of Director Message" value="{{ old('message') }}" />
                {{-- <textarea  class="message"  name="message" placeholder="Principal Message">{{ old('message') }}</textarea> --}}
            </div>

            <div class="flex items-center justify-end">
                <flux:button type="submit" variant="primary" class="w-full">
                    {{ __('Create') }}
                </flux:button>
            </div>
        </form>
    </div>

    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tinymce/7.6.1/tinymce.min.js"></script>
    <script type="text/javascript">
        tinymce.init({
        selector: '.message',
        plugins: 'lists link image preview code',
            toolbar: 'undo redo | styles | bold italic | alignleft aligncenter alignright alignjustify | outdent indent | code',
            height: 300
        });    
    </script>
    
</x-layouts.app>
