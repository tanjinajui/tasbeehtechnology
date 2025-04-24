<x-layouts.app>
    <div class="flex flex-col gap-6">
        <x-auth-header title="Update Board Of Director Messages" description="" />

        <!-- Session Status -->
        <x-auth-session-status class="text-center" :status="session('status')" />

        <form method="POST" action="{{ route('board_of_director.update', $board_of_director->id) }}" class="flex flex-col gap-6"
            enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <flux:input id="no_of_director" :label="__('No of Director')" type="text" name="no_of_director" value="{{ old('no_of_director', $board_of_director->no_of_director) }}"/>
                <div class="">
                    <img id="photo" class="img-thumbnail img-fluid" src="{{asset('/storage/'. $board_of_director->photo)}}" alt="" width="100px">
                    <flux:input id="photo"  type="file" name="photo" onchange="document.querySelector('#photo').src=window.URL.createObjectURL(this.files[0])"
                        accept="image/*"  />
                </div>
                
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <flux:input id="name" :label="__('Director name')" type="text" name="name" value="{{ old('name', $board_of_director->name) }}"/>
                     <flux:input id="email" :label="__('Director Email')" type="text" name="email" value="{{ old('email', $board_of_director->email) }}"/>
            </div>
            <div class="">
                {{-- <flux:textarea id="message" class="message" :label="__('Principal Message')" type="text" name="message" 
                    placeholder="Principal Message" value="{{ old('message', $board_of_director->message) }}" /> --}}
                    <textarea  class="message"  name="message" placeholder="Board of Director Message">{{ old('message', $board_of_director->message) }}</textarea>
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
