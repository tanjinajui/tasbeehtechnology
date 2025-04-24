<x-layouts.app>
    <div class="flex flex-col gap-6">
        <x-auth-header title="Create Vice Principal Message" description="" />

        <!-- Session Status -->
        <x-auth-session-status class="text-center" :status="session('status')" />

        <form method="POST" action="{{ route('vice_principal_message.store') }}" class="flex flex-col gap-6"
            enctype="multipart/form-data">
            @csrf
            @method('POST')

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <flux:input id="photo" :label="__('Vice Principal Photo')" type="file" name="photo"
                    accept="image/*" />
                {{-- <flux:input id="principal_message" :label="__('Principal Message')" type="text" name="principal_message" required
                    placeholder="Principal Message" value="{{ old('principal_message') }}" /> --}}
            </div>
            <div>
                <flux:textarea class="message" :label="__('Principal Message')"  name="message" placeholder="Vice Principal Message" value="{{ old('message') }}" />
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
