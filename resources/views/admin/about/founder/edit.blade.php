<x-layouts.app>
    <div class="flex flex-col gap-6">
        <x-auth-header title="Update Founder Messages" description="" />

        <!-- Session Status -->
        <x-auth-session-status class="text-center" :status="session('status')" />

        <form method="POST" action="{{ route('founder.update', $founder->id) }}" class="flex flex-col gap-6"
            enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="">
                <img id="photo" class="img-thumbnail img-fluid" src="{{asset('/storage/'. $founder->photo)}}" alt="" width="100px">
                <flux:input id="photo"  type="file" name="photo" onchange="document.querySelector('#photo').src=window.URL.createObjectURL(this.files[0])"
                    accept="image/*"  />
            </div>
            <div>
                {{-- <flux:textarea class="message" :label="__('Principal Message')" name="message" 
                     value="{{ old('message', $principal_message->message) }}" /> --}}
                    <textarea  class="message"  name="message" placeholder="Founder Message">{{ old('message', $founder->message) }}</textarea>
            </div>
            
            <div class="flex items-center justify-end">
                <flux:button type="submit" variant="primary" class="w-full">
                    {{ __('Update') }}
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
