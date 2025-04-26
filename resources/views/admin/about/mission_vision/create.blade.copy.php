<x-layouts.app>
    <div class="flex flex-col gap-6">
        <x-auth-header title="Create Mission" description="" />

        <!-- Session Status -->
        <x-auth-session-status class="text-center" :status="session('status')" />

        <form method="POST" action="{{ route('mission_vision.store') }}" class="flex flex-col gap-6">
            @csrf
            @method('POST')
            {{-- <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <flux:input id="mission"  :label="__('Mission')" type="text" name="mission" required
                    placeholder="Mission"  value="{{ old('mission') }}" />
                    <flux:input id="vision" :label="__('Vision')" type="text" name="vision" required
                    placeholder="Vision"  value="{{ old('vision') }}" />
            </div> --}}
            <div class="w-full">
                <flux:textarea id="mission" class="mission w-full" :label="__('Mission')" type="text" name="mission" placeholder="Enter The Mission" value="{{ old('mission') }}" />
            </div>
            <div class="w-full">
                <flux:textarea id="vision" class="mission w-full" :label="__('Vision')" type="text" name="vision" placeholder="Enter The Vision" value="{{ old('vision') }}" />
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
        // // selector: '.mission',
        // selector: '#mission, #vision',
        // plugins: 'lists link image preview code',
        // toolbar: 'undo redo | styles | bold italic | alignleft aligncenter alignright alignjustify | outdent indent | code',
        // height: 300
        // });     
    </script>
</x-layouts.app>
