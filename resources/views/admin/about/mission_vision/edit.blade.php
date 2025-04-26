<x-layouts.app>
    <div class="flex flex-col gap-6">
        <x-auth-header title="Update Mission & Vision" description="" />

        <!-- Session Status -->
        <x-auth-session-status class="text-center" :status="session('status')" />

        <form method="POST" action="{{ route('mission_vision.update', $mission_vision->id) }}" class="flex flex-col gap-6">
            @csrf
            @method('PUT')
            <div class="w-full">
                <textarea  id="mission" class="mission w-full" name="mission" placeholder="Mission">{{ old('mission', $mission_vision->mission) }}</textarea>
                {{-- <flux:textarea id="mission" class="mission w-full" :label="__('Mission')" type="text" name="mission" placeholder="Enter The Mission" value="{{ old('mission') }}" /> --}}
            </div>
            <div class="w-full">
                {{-- <textarea  id="vision" class="mission w-full" name="vision" placeholder="Vision">{{ old('vision', $mission_vision->vision) }}</textarea> --}}
                <flux:textarea id="vision" class="mission w-full" :label="__('Vision')"  name="vision" placeholder="Enter The Vision" value="{{ old('vision', $mission_vision->vision) }}" />
            </div>
            {{-- <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <flux:input id="name" :label="__('Name')" type="text" name="name" required
                    placeholder="Name" value="{{ old('name') }}" />

                <flux:select name="type" :label="__('Institute Type')" required>
                    <option value="dakhil">Dakhil Madrasa</option>
                    <option value="alim">Alim Madrasa</option>
                    <option value="kamil">Kamil Madrasa</option>
                    <option value="fazil">Fazil Madrasa</option>
                </flux:select>

                <flux:select name="division_id" :label="__('Division')">
                    @foreach ($divisions as $division)
                        <option value="{{ $division->id }}">
                            {{ $division->name }}
                        </option>
                    @endforeach
                </flux:select>

                <flux:select name="district_id" :label="__('District')">
                    @foreach ($districts as $district)
                        <option value="{{ $district->id }}">
                            {{ $district->name }}
                        </option>
                    @endforeach
                </flux:select>

                <flux:select name="upazila_id" :label="__('Upazila')">
                    @foreach ($upazilas as $upazila)
                        <option value="{{ $upazila->id }}">
                            {{ $upazila->name }}
                        </option>
                    @endforeach
                </flux:select>

                <flux:input id="address" :label="__('Institute Address')" type="text" name="address"
                    placeholder="Institute Address" value="{{ old('address') }}" />

                <flux:input id="phone_number" :label="__('Phone number')" type="text" name="phone_number"
                    placeholder="Phone number" value="{{ old('phone_number') }}" />

                <flux:input id="email" :label="__('Institute email')" type="email" name="email"
                    placeholder="Institute email" value="{{ old('email') }}" />

                <flux:input id="website" :label="__('Institute website')" type="text" name="website"
                    placeholder="Institute website" value="{{ old('website') }}" />

                <flux:input id="established" :label="__('Institute established')" type="text" name="established"
                    placeholder="Institute established" value="{{ old('established') }}" />

                <flux:input id="education_level" :label="__('Education level')" type="text" name="education_level"
                    placeholder="Education level" value="{{ old('education_level') }}" />

                <flux:input id="education_medium" :label="__('Education medium')" type="text"
                    name="education_medium" placeholder="Education medium" value="{{ old('education_medium') }}" />

                <flux:input id="logo" :label="__('Institute logo')" type="file" name="logo"
                    accept="image/*" />

                <flux:select name="status" :label="__('Institute Status')" required>
                    <option value="pending">Pending</option>
                    <option value="approved">Approved</option>
                </flux:select>
            </div> --}}
            <div class="flex items-center justify-end">
                <flux:button type="submit" variant="primary" class="w-full">
                    {{ __('Update') }}
                </flux:button>
            </div>
        </form>
    </div>
</x-layouts.app>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tinymce/7.6.1/tinymce.min.js"></script>
<script type="text/javascript">
    tinymce.init({
    // selector: '.mission',
    selector: '#mission',
    plugins: 'lists link image preview code',
    toolbar: 'undo redo | styles | bold italic | alignleft aligncenter alignright alignjustify | outdent indent | code',
    height: 300
    });     
</script>