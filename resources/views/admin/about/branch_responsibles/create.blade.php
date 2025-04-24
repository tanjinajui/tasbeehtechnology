<x-layouts.app>
    <div class="flex flex-col gap-6">
        <x-auth-header title="Create Branch Responsibles" description="" />

        <!-- Session Status -->
        <x-auth-session-status class="text-center" :status="session('status')" />

        <form method="POST" action="{{ route('branch_responsibles.store') }}" class="flex flex-col gap-6"
            enctype="multipart/form-data">
            @csrf
            @method('POST')
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <flux:input id="branch_name" :label="__('Branch Name')" type="text" name="branch_name" required placeholder="Name" value="{{ old('branch_name') }}" />
                <flux:input id="photo" :label="__('Branch Photo')" type="file" name="photo"
                    accept="image/*" />
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <flux:input id="name" :label="__('Name')" type="text" name="name" required placeholder="name" value="{{ old('name') }}" />
                 <flux:input id="email" :label="__('Branch Email')" type="email" name="email" required
                    placeholder="Email" value="{{ old('email') }}" />
            </div>
            <div>
                <flux:input id="contact_no" :label="__('Branch Contact No')" type="text" name="contact_no" required placeholder="Contact No" value="{{ old('contact_no') }}" />
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
        // tinymce.init({
        // selector: '.message',
        // plugins: 'lists link image preview code',
        //     toolbar: 'undo redo | styles | bold italic | alignleft aligncenter alignright alignjustify | outdent indent | code',
        //     height: 300
        // });    
    </script>
    
</x-layouts.app>
