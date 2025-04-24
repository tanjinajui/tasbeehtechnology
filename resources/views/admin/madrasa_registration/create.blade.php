<x-layout>
    {{-- heading text --}}
    <x-slot:heading>
    Board Of Director!
    </x-slot:heading>
    <form>
        <div class="space-y-12">
          <div class="pb-12 border-b border-gray-900/10">
           
            <div class="grid grid-cols-1 mt-10 gap-x-6 gap-y-8 sm:grid-cols-6">
              <div class="sm:col-span-4">
                <label for="no_of_director" class="block font-medium text-gray-900 text-sm/6">No Of Director</label>
                <div class="mt-2">
                  <div class="flex items-center pl-3 bg-white rounded-md outline-1 -outline-offset-1 outline-gray-300 focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-600">
                    <div class="text-base text-gray-500 select-none shrink-0 sm:text-sm/6"></div>
                    <input type="text" name="no_of_director" id="no_of_director" class="block min-w-0 grow py-1.5 pr-3 pl-1 text-base text-gray-900 placeholder:text-gray-400 focus:outline-none sm:text-sm/6" placeholder="No Of Director">
                  </div>
                </div>
              </div>
              <div class="col-span-full">
                <label for="photo" class="block font-medium text-gray-900 text-sm/6">Photo</label>
                <div class="flex items-center mt-2 gap-x-3">
                  <svg class="text-gray-300 size-12" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" data-slot="icon">
                    <path fill-rule="evenodd" d="M18.685 19.097A9.723 9.723 0 0 0 21.75 12c0-5.385-4.365-9.75-9.75-9.75S2.25 6.615 2.25 12a9.723 9.723 0 0 0 3.065 7.097A9.716 9.716 0 0 0 12 21.75a9.716 9.716 0 0 0 6.685-2.653Zm-12.54-1.285A7.486 7.486 0 0 1 12 15a7.486 7.486 0 0 1 5.855 2.812A8.224 8.224 0 0 1 12 20.25a8.224 8.224 0 0 1-5.855-2.438ZM15.75 9a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0Z" clip-rule="evenodd" />
                  </svg>
                  <button type="button" class="rounded-md bg-white px-2.5 py-1.5 text-sm font-semibold text-gray-900 ring-1 shadow-xs ring-gray-300 ring-inset hover:bg-gray-50">Change</button>
                </div>
              </div>
              <div class="col-span-full">
                <label for="about" class="block font-medium text-gray-900 text-sm/6">Director Message</label>
                <div class="mt-2">
                  <textarea name="about" id="about" rows="3" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6"></textarea>
                </div>
                <p class="mt-3 text-gray-600 text-sm/6">Write a few sentences about yourself.</p>
              </div>
      
              
      
              
            </div>
          </div>
      
          <div class="pb-12 border-b border-gray-900/10">
            <h2 class="font-semibold text-gray-900 text-base/7">Personal Information</h2>
            <p class="mt-1 text-gray-600 text-sm/6">Use a permanent address where you can receive mail.</p>
      
            <div class="grid grid-cols-1 mt-10 gap-x-6 gap-y-8 sm:grid-cols-6">
              <div class="col-span-full">
                <label for="photo" class="block font-medium text-gray-900 text-sm/6">Photo</label>
                <div class="flex items-center mt-2 gap-x-3">
                  <svg class="text-gray-300 size-12" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" data-slot="icon">
                    <path fill-rule="evenodd" d="M18.685 19.097A9.723 9.723 0 0 0 21.75 12c0-5.385-4.365-9.75-9.75-9.75S2.25 6.615 2.25 12a9.723 9.723 0 0 0 3.065 7.097A9.716 9.716 0 0 0 12 21.75a9.716 9.716 0 0 0 6.685-2.653Zm-12.54-1.285A7.486 7.486 0 0 1 12 15a7.486 7.486 0 0 1 5.855 2.812A8.224 8.224 0 0 1 12 20.25a8.224 8.224 0 0 1-5.855-2.438ZM15.75 9a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0Z" clip-rule="evenodd" />
                  </svg>
                  <button type="button" class="rounded-md bg-white px-2.5 py-1.5 text-sm font-semibold text-gray-900 ring-1 shadow-xs ring-gray-300 ring-inset hover:bg-gray-50">Change</button>
                </div>
              </div>
              <div class="sm:col-span-3">
                <label for="first-name" class="block font-medium text-gray-900 text-sm/6">First name</label>
                <div class="mt-2">
                  <input type="text" name="first-name" id="first-name" autocomplete="given-name" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                </div>
              </div>
      
              <div class="sm:col-span-3">
                <label for="last-name" class="block font-medium text-gray-900 text-sm/6">Last name</label>
                <div class="mt-2">
                  <input type="text" name="last-name" id="last-name" autocomplete="family-name" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                </div>
              </div>
      
              <div class="sm:col-span-4">
                <label for="email" class="block font-medium text-gray-900 text-sm/6">Email address</label>
                <div class="mt-2">
                  <input id="email" name="email" type="email" autocomplete="email" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                </div>
              </div>
      
              <div class="sm:col-span-3">
                <label for="country" class="block font-medium text-gray-900 text-sm/6">Country</label>
                <div class="grid grid-cols-1 mt-2">
                  <select id="country" name="country" autocomplete="country-name" class="col-start-1 row-start-1 w-full appearance-none rounded-md bg-white py-1.5 pr-8 pl-3 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                    <option>United States</option>
                    <option>Canada</option>
                    <option>Mexico</option>
                  </select>
                  <svg class="self-center col-start-1 row-start-1 mr-2 text-gray-500 pointer-events-none size-5 justify-self-end sm:size-4" viewBox="0 0 16 16" fill="currentColor" aria-hidden="true" data-slot="icon">
                    <path fill-rule="evenodd" d="M4.22 6.22a.75.75 0 0 1 1.06 0L8 8.94l2.72-2.72a.75.75 0 1 1 1.06 1.06l-3.25 3.25a.75.75 0 0 1-1.06 0L4.22 7.28a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd" />
                  </svg>
                </div>
              </div>
      
              <div class="col-span-full">
                <label for="street-address" class="block font-medium text-gray-900 text-sm/6">Street address</label>
                <div class="mt-2">
                  <input type="text" name="street-address" id="street-address" autocomplete="street-address" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                </div>
              </div>
      
              <div class="sm:col-span-2 sm:col-start-1">
                <label for="city" class="block font-medium text-gray-900 text-sm/6">City</label>
                <div class="mt-2">
                  <input type="text" name="city" id="city" autocomplete="address-level2" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                </div>
              </div>
      
              <div class="sm:col-span-2">
                <label for="region" class="block font-medium text-gray-900 text-sm/6">State / Province</label>
                <div class="mt-2">
                  <input type="text" name="region" id="region" autocomplete="address-level1" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                </div>
              </div>
      
              <div class="sm:col-span-2">
                <label for="postal-code" class="block font-medium text-gray-900 text-sm/6">ZIP / Postal code</label>
                <div class="mt-2">
                  <input type="text" name="postal-code" id="postal-code" autocomplete="postal-code" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                </div>
              </div>
            </div>
          </div>
      
          <div class="pb-12 border-b border-gray-900/10">
            <h2 class="font-semibold text-gray-900 text-base/7">Notifications</h2>
            <p class="mt-1 text-gray-600 text-sm/6">We'll always let you know about important changes, but you pick what else you want to hear about.</p>
      
            <div class="mt-10 space-y-10">
              <fieldset>
                <legend class="font-semibold text-gray-900 text-sm/6">By email</legend>
                <div class="mt-6 space-y-6">
                  <div class="flex gap-3">
                    <div class="flex items-center h-6 shrink-0">
                      <div class="grid grid-cols-1 group size-4">
                        <input id="comments" aria-describedby="comments-description" name="comments" type="checkbox" checked class="col-start-1 row-start-1 bg-white border border-gray-300 rounded-sm appearance-none checked:border-indigo-600 checked:bg-indigo-600 indeterminate:border-indigo-600 indeterminate:bg-indigo-600 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 disabled:border-gray-300 disabled:bg-gray-100 disabled:checked:bg-gray-100 forced-colors:appearance-auto">
                        <svg class="pointer-events-none col-start-1 row-start-1 size-3.5 self-center justify-self-center stroke-white group-has-disabled:stroke-gray-950/25" viewBox="0 0 14 14" fill="none">
                          <path class="opacity-0 group-has-checked:opacity-100" d="M3 8L6 11L11 3.5" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                          <path class="opacity-0 group-has-indeterminate:opacity-100" d="M3 7H11" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                      </div>
                    </div>
                    <div class="text-sm/6">
                      <label for="comments" class="font-medium text-gray-900">Comments</label>
                      <p id="comments-description" class="text-gray-500">Get notified when someones posts a comment on a posting.</p>
                    </div>
                  </div>
                  <div class="flex gap-3">
                    <div class="flex items-center h-6 shrink-0">
                      <div class="grid grid-cols-1 group size-4">
                        <input id="candidates" aria-describedby="candidates-description" name="candidates" type="checkbox" class="col-start-1 row-start-1 bg-white border border-gray-300 rounded-sm appearance-none checked:border-indigo-600 checked:bg-indigo-600 indeterminate:border-indigo-600 indeterminate:bg-indigo-600 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 disabled:border-gray-300 disabled:bg-gray-100 disabled:checked:bg-gray-100 forced-colors:appearance-auto">
                        <svg class="pointer-events-none col-start-1 row-start-1 size-3.5 self-center justify-self-center stroke-white group-has-disabled:stroke-gray-950/25" viewBox="0 0 14 14" fill="none">
                          <path class="opacity-0 group-has-checked:opacity-100" d="M3 8L6 11L11 3.5" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                          <path class="opacity-0 group-has-indeterminate:opacity-100" d="M3 7H11" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                      </div>
                    </div>
                    <div class="text-sm/6">
                      <label for="candidates" class="font-medium text-gray-900">Candidates</label>
                      <p id="candidates-description" class="text-gray-500">Get notified when a candidate applies for a job.</p>
                    </div>
                  </div>
                  <div class="flex gap-3">
                    <div class="flex items-center h-6 shrink-0">
                      <div class="grid grid-cols-1 group size-4">
                        <input id="offers" aria-describedby="offers-description" name="offers" type="checkbox" class="col-start-1 row-start-1 bg-white border border-gray-300 rounded-sm appearance-none checked:border-indigo-600 checked:bg-indigo-600 indeterminate:border-indigo-600 indeterminate:bg-indigo-600 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 disabled:border-gray-300 disabled:bg-gray-100 disabled:checked:bg-gray-100 forced-colors:appearance-auto">
                        <svg class="pointer-events-none col-start-1 row-start-1 size-3.5 self-center justify-self-center stroke-white group-has-disabled:stroke-gray-950/25" viewBox="0 0 14 14" fill="none">
                          <path class="opacity-0 group-has-checked:opacity-100" d="M3 8L6 11L11 3.5" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                          <path class="opacity-0 group-has-indeterminate:opacity-100" d="M3 7H11" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                      </div>
                    </div>
                    <div class="text-sm/6">
                      <label for="offers" class="font-medium text-gray-900">Offers</label>
                      <p id="offers-description" class="text-gray-500">Get notified when a candidate accepts or rejects an offer.</p>
                    </div>
                  </div>
                </div>
              </fieldset>
      
              <fieldset>
                <legend class="font-semibold text-gray-900 text-sm/6">Push notifications</legend>
                <p class="mt-1 text-gray-600 text-sm/6">These are delivered via SMS to your mobile phone.</p>
                <div class="mt-6 space-y-6">
                  <div class="flex items-center gap-x-3">
                    <input id="push-everything" name="push-notifications" type="radio" checked class="relative bg-white border border-gray-300 rounded-full appearance-none size-4 before:absolute before:inset-1 before:rounded-full before:bg-white not-checked:before:hidden checked:border-indigo-600 checked:bg-indigo-600 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 disabled:border-gray-300 disabled:bg-gray-100 disabled:before:bg-gray-400 forced-colors:appearance-auto forced-colors:before:hidden">
                    <label for="push-everything" class="block font-medium text-gray-900 text-sm/6">Everything</label>
                  </div>
                  <div class="flex items-center gap-x-3">
                    <input id="push-email" name="push-notifications" type="radio" class="relative bg-white border border-gray-300 rounded-full appearance-none size-4 before:absolute before:inset-1 before:rounded-full before:bg-white not-checked:before:hidden checked:border-indigo-600 checked:bg-indigo-600 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 disabled:border-gray-300 disabled:bg-gray-100 disabled:before:bg-gray-400 forced-colors:appearance-auto forced-colors:before:hidden">
                    <label for="push-email" class="block font-medium text-gray-900 text-sm/6">Same as email</label>
                  </div>
                  <div class="flex items-center gap-x-3">
                    <input id="push-nothing" name="push-notifications" type="radio" class="relative bg-white border border-gray-300 rounded-full appearance-none size-4 before:absolute before:inset-1 before:rounded-full before:bg-white not-checked:before:hidden checked:border-indigo-600 checked:bg-indigo-600 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 disabled:border-gray-300 disabled:bg-gray-100 disabled:before:bg-gray-400 forced-colors:appearance-auto forced-colors:before:hidden">
                    <label for="push-nothing" class="block font-medium text-gray-900 text-sm/6">No push notifications</label>
                  </div>
                </div>
              </fieldset>
            </div>
          </div>
        </div>
      
        <div class="flex items-center justify-end mt-6 gap-x-6">
          <button type="button" class="font-semibold text-gray-900 text-sm/6">Cancel</button>
          <button type="submit" class="px-3 py-2 text-sm font-semibold text-white bg-indigo-600 rounded-md shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Save</button>
        </div>
      </form>
      
    
</x-layout>