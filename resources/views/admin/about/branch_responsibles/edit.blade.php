<x-layouts.app>
    <div class="flex flex-col gap-6">
        <x-auth-header title="Update Branch Responsibles" description="" />

        <!-- Session Status -->
        <x-auth-session-status class="text-center" :status="session('status')" />

        <form method="POST" action="{{ route('branch_responsibles.update', $branch_responsibles->id) }}" class="flex flex-col gap-6"
            enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <flux:input id="branch_name" :label="__('Branch Name')" type="text" name="branch_name" value="{{ old('branch_name', $branch_responsibles->branch_name) }}"/>
                <div class="">
                    <img id="photo" class="img-thumbnail img-fluid" src="{{asset('/storage/'. $branch_responsibles->photo)}}" alt="" width="100px">
                    <flux:input id="photo"  type="file" name="photo" onchange="document.querySelector('#photo').src=window.URL.createObjectURL(this.files[0])"
                        accept="image/*"  />
                </div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <flux:input id="name" :label="__('Name')" type="text" name="name" value="{{ old('name', $branch_responsibles->name) }}"/>
                 <flux:input id="email" :label="__('Branch Email')" type="text" name="email" value="{{ old('email', $branch_responsibles->email) }}"/>
            </div>
           <div>
            <flux:input id="contact_no" :label="__('Branch Contact No')" type="text" name="contact_no" value="{{ old('email', $branch_responsibles->contact_no) }}" />
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
