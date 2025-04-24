<x-layout>
    {{-- heading text --}}
    <x-slot:heading>
        Create Job
    </x-slot:heading>
    
    <form method="POST" action="/jobs">
        @csrf
          <div class="space-y-12">
            <div class="pb-12 border-b border-gray-900/10">
              <h2 class="text-base/7 font-semibold text-gray-900">Create a new job</h2>
              <p class="mt-1 text-sm/6 text-gray-600">We just need a handful of details from you.</p>
              <div class="grid grid-cols-1 mt-10 gap-x-6 gap-y-8 sm:grid-cols-6">
                <x-form-field >
                  <x-form-label for="title">Title</x-form-label>
                  <div class="mt-2">
                    <x-form-input name="title" id="title" placeholder="Please write the job title" required/>
                    {{-- error message --}}
                    <x-form-error name="title"/>
                  </div>
                </x-form-field>
                <x-form-field >
                  <x-form-label for="salary">Salary</x-form-label>
                  <div class="mt-2">
                    <x-form-input name="salary" id="salary" placeholder="Please write the job salary" required/>
                    {{-- error message --}}
                    <x-form-error name="salary"/>
                  </div>
                  <div>
                    <flux:textarea id="mission" class="mission w-full" :label="__('Mission')" type="text" name="mission" placeholder="Enter The Mission" value="{{ old('mission') }}" />
                <flux:textarea id="vision" class="mission w-full" :label="__('Vision')" type="text" name="vision" placeholder="Enter The Vision" value="{{ old('vision') }}" />
                  </div>
                </x-form-field>
              </div>
            </div>
  
          </div>
        
          <div class="flex items-center justify-end mt-6 gap-x-6">
            <button type="button" class="font-semibold text-gray-900 text-sm/6">Cancel</button>
            <x-form-button>Save</x-form-button>
          </div>
      </form>

      <script src="https://cdnjs.cloudflare.com/ajax/libs/tinymce/7.6.1/tinymce.min.js"></script>
    <script type="text/javascript">
        tinymce.init({
        // selector: '.mission',
        selector: '#mission, #vision',
        plugins: 'lists link image preview code',
        toolbar: 'undo redo | styles | bold italic | alignleft aligncenter alignright alignjustify | outdent indent | code',
        height: 300
        });     
    </script>
</x-layout>