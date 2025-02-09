<x-layouts.dashboard>
    <div class="w-3/4 h-100 border-2 border-gray-200 mx-auto my-5 py-5 rounded-md shadow-lg px-10">
        <h3 class="text-center text-3xl mb-4 font-sans text-gray-900">Add User Page</h3>
        @if ($errors->any())
            <div class="p-4 mb-4 text-sm text-red-900 rounded-lg bg-red-200" role="alert">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li class="mx-2">{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        
        <form action="{{ route('adduser') }}" method="POST">
            @csrf
            <div class="space-y-12">
              <div class="border-b border-gray-900/10 pb-12">
                {{-- <p class="mt-1 text-sm/6 text-gray-600"></p> --}}
          
                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    {{-- Input Nama --}}
                  <div class="sm:col-span-4">
                    <label for="nama" class="block text-sm/6 font-medium text-gray-900">Nama</label>
                    <div class="mt-2">
                      <div class="flex items-center rounded-md bg-white pl-3 outline outline-1 -outline-offset-1 outline-gray-300 focus-within:outline focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-600">
                        <input type="text" name="nama" id="nama" class="block min-w-0 grow py-1.5 pl-1 pr-3 text-base text-gray-900 placeholder:text-gray-400 focus:outline focus:outline-0 sm:text-sm/6" placeholder="Muhammad Haidar" value="{{ old('nama') }}">
                      </div>
                    </div>
                  </div>
                  {{-- Input NIM --}}
                  <div class="sm:col-span-4">
                    <label for="nim" class="block text-sm/6 font-medium text-gray-900">NIM</label>
                    <div class="mt-2">
                      <div class="flex items-center rounded-md bg-white pl-3 outline outline-1 -outline-offset-1 outline-gray-300 focus-within:outline focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-600">
                        <input type="text" name="nim" id="nim" class="block min-w-0 grow py-1.5 pl-1 pr-3 text-base text-gray-900 placeholder:text-gray-400 focus:outline focus:outline-0 sm:text-sm/6" placeholder="Z1234567890" value="{{ old('nim') }}">
                      </div>
                    </div>
                  </div>
                  <div class="sm:col-span-4">
                    <label for="divisi" class="block text-sm/6 font-medium text-gray-900">Country</label>
                    <div class="mt-2 grid grid-cols-1">
                      <select id="divisi" name="divisi" autocomplete="divisi-name" class="col-start-1 row-start-1 w-full appearance-none rounded-md bg-white py-1.5 pl-3 pr-8 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                        <option>Biro Riset Pengembangan</option>
                        <option>Biro Media dan Branding</option>
                        <option>Biro Kolaborasi dan Kemitraan</option>
                        <option>Biro Internal</option>
                        <option>Departemen Ekonomi Kreatif</option>
                        <option>Departemen Pengembangan Sumber Daya Mahasiswa</option>
                        <option>Departemen Sosial Lingkungan Hidup</option>
                        <option>Departemen Seni dan Budaya</option>
                        <option>Departemen Advokasi Kesejahteraan Mahasiswa</option>
                        <option>Departemen Pemuda Olahraga</option>
                        <option>Departemen Akademik Prestasi</option>
                        <option>Departemen Dinamika Gerakan Politik</option>
                      </select>
                      <svg class="pointer-events-none col-start-1 row-start-1 mr-2 size-5 self-center justify-self-end text-gray-500 sm:size-4" viewBox="0 0 16 16" fill="currentColor" aria-hidden="true" data-slot="icon">
                        <path fill-rule="evenodd" d="M4.22 6.22a.75.75 0 0 1 1.06 0L8 8.94l2.72-2.72a.75.75 0 1 1 1.06 1.06l-3.25 3.25a.75.75 0 0 1-1.06 0L4.22 7.28a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd" />
                      </svg>
                    </div>
                  </div>

                  <div class="sm:col-span-4">
                    <label for="password" class="block mb-2 text-sm font-medium text-gray-900">Password</label>
                    <input type="password" name="password" id="password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" required="">
                  </div>
                  
                </div>
              </div>
          
              {{-- <div class="border-b border-gray-900/10 pb-12">
                <h2 class="text-base/7 font-semibold text-gray-900">Personal Information</h2>
                <p class="mt-1 text-sm/6 text-gray-600">Use a permanent address where you can receive mail.</p>
          
                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                  <div class="sm:col-span-3">
                    <label for="first-name" class="block text-sm/6 font-medium text-gray-900">First name</label>
                    <div class="mt-2">
                      <input type="text" name="first-name" id="first-name" autocomplete="given-name" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                    </div>
                  </div>
          
                  <div class="sm:col-span-3">
                    <label for="last-name" class="block text-sm/6 font-medium text-gray-900">Last name</label>
                    <div class="mt-2">
                      <input type="text" name="last-name" id="last-name" autocomplete="family-name" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                    </div>
                  </div>
          
                  <div class="sm:col-span-4">
                    <label for="email" class="block text-sm/6 font-medium text-gray-900">Email address</label>
                    <div class="mt-2">
                      <input id="email" name="email" type="email" autocomplete="email" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                    </div>
                  </div>
          
                  
          
                  <div class="col-span-full">
                    <label for="street-address" class="block text-sm/6 font-medium text-gray-900">Street address</label>
                    <div class="mt-2">
                      <input type="text" name="street-address" id="street-address" autocomplete="street-address" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                    </div>
                  </div>
          
                  <div class="sm:col-span-2 sm:col-start-1">
                    <label for="city" class="block text-sm/6 font-medium text-gray-900">City</label>
                    <div class="mt-2">
                      <input type="text" name="city" id="city" autocomplete="address-level2" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                    </div>
                  </div>
          
                  <div class="sm:col-span-2">
                    <label for="region" class="block text-sm/6 font-medium text-gray-900">State / Province</label>
                    <div class="mt-2">
                      <input type="text" name="region" id="region" autocomplete="address-level1" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                    </div>
                  </div>
          
                  <div class="sm:col-span-2">
                    <label for="postal-code" class="block text-sm/6 font-medium text-gray-900">ZIP / Postal code</label>
                    <div class="mt-2">
                      <input type="text" name="postal-code" id="postal-code" autocomplete="postal-code" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                    </div>
                  </div>
                </div>
              </div>
          
              <div class="border-b border-gray-900/10 pb-12">
                <h2 class="text-base/7 font-semibold text-gray-900">Notifications</h2>
                <p class="mt-1 text-sm/6 text-gray-600">We'll always let you know about important changes, but you pick what else you want to hear about.</p>
          
                <div class="mt-10 space-y-10">
                  <fieldset>
                    <legend class="text-sm/6 font-semibold text-gray-900">By email</legend>
                    <div class="mt-6 space-y-6">
                      <div class="flex gap-3">
                        <div class="flex h-6 shrink-0 items-center">
                          <div class="group grid size-4 grid-cols-1">
                            <input id="comments" aria-describedby="comments-description" name="comments" type="checkbox" checked class="col-start-1 row-start-1 appearance-none rounded border border-gray-300 bg-white checked:border-indigo-600 checked:bg-indigo-600 indeterminate:border-indigo-600 indeterminate:bg-indigo-600 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 disabled:border-gray-300 disabled:bg-gray-100 disabled:checked:bg-gray-100 forced-colors:appearance-auto">
                            <svg class="pointer-events-none col-start-1 row-start-1 size-3.5 self-center justify-self-center stroke-white group-has-[:disabled]:stroke-gray-950/25" viewBox="0 0 14 14" fill="none">
                              <path class="opacity-0 group-has-[:checked]:opacity-100" d="M3 8L6 11L11 3.5" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                              <path class="opacity-0 group-has-[:indeterminate]:opacity-100" d="M3 7H11" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                          </div>
                        </div>
                        <div class="text-sm/6">
                          <label for="comments" class="font-medium text-gray-900">Comments</label>
                          <p id="comments-description" class="text-gray-500">Get notified when someones posts a comment on a posting.</p>
                        </div>
                      </div>
                      <div class="flex gap-3">
                        <div class="flex h-6 shrink-0 items-center">
                          <div class="group grid size-4 grid-cols-1">
                            <input id="candidates" aria-describedby="candidates-description" name="candidates" type="checkbox" class="col-start-1 row-start-1 appearance-none rounded border border-gray-300 bg-white checked:border-indigo-600 checked:bg-indigo-600 indeterminate:border-indigo-600 indeterminate:bg-indigo-600 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 disabled:border-gray-300 disabled:bg-gray-100 disabled:checked:bg-gray-100 forced-colors:appearance-auto">
                            <svg class="pointer-events-none col-start-1 row-start-1 size-3.5 self-center justify-self-center stroke-white group-has-[:disabled]:stroke-gray-950/25" viewBox="0 0 14 14" fill="none">
                              <path class="opacity-0 group-has-[:checked]:opacity-100" d="M3 8L6 11L11 3.5" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                              <path class="opacity-0 group-has-[:indeterminate]:opacity-100" d="M3 7H11" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                          </div>
                        </div>
                        <div class="text-sm/6">
                          <label for="candidates" class="font-medium text-gray-900">Candidates</label>
                          <p id="candidates-description" class="text-gray-500">Get notified when a candidate applies for a job.</p>
                        </div>
                      </div>
                      <div class="flex gap-3">
                        <div class="flex h-6 shrink-0 items-center">
                          <div class="group grid size-4 grid-cols-1">
                            <input id="offers" aria-describedby="offers-description" name="offers" type="checkbox" class="col-start-1 row-start-1 appearance-none rounded border border-gray-300 bg-white checked:border-indigo-600 checked:bg-indigo-600 indeterminate:border-indigo-600 indeterminate:bg-indigo-600 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 disabled:border-gray-300 disabled:bg-gray-100 disabled:checked:bg-gray-100 forced-colors:appearance-auto">
                            <svg class="pointer-events-none col-start-1 row-start-1 size-3.5 self-center justify-self-center stroke-white group-has-[:disabled]:stroke-gray-950/25" viewBox="0 0 14 14" fill="none">
                              <path class="opacity-0 group-has-[:checked]:opacity-100" d="M3 8L6 11L11 3.5" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                              <path class="opacity-0 group-has-[:indeterminate]:opacity-100" d="M3 7H11" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
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
                    <legend class="text-sm/6 font-semibold text-gray-900">Push notifications</legend>
                    <p class="mt-1 text-sm/6 text-gray-600">These are delivered via SMS to your mobile phone.</p>
                    <div class="mt-6 space-y-6">
                      <div class="flex items-center gap-x-3">
                        <input id="push-everything" name="push-notifications" type="radio" checked class="relative size-4 appearance-none rounded-full border border-gray-300 bg-white before:absolute before:inset-1 before:rounded-full before:bg-white checked:border-indigo-600 checked:bg-indigo-600 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 disabled:border-gray-300 disabled:bg-gray-100 disabled:before:bg-gray-400 forced-colors:appearance-auto forced-colors:before:hidden [&:not(:checked)]:before:hidden">
                        <label for="push-everything" class="block text-sm/6 font-medium text-gray-900">Everything</label>
                      </div>
                      <div class="flex items-center gap-x-3">
                        <input id="push-email" name="push-notifications" type="radio" class="relative size-4 appearance-none rounded-full border border-gray-300 bg-white before:absolute before:inset-1 before:rounded-full before:bg-white checked:border-indigo-600 checked:bg-indigo-600 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 disabled:border-gray-300 disabled:bg-gray-100 disabled:before:bg-gray-400 forced-colors:appearance-auto forced-colors:before:hidden [&:not(:checked)]:before:hidden">
                        <label for="push-email" class="block text-sm/6 font-medium text-gray-900">Same as email</label>
                      </div>
                      <div class="flex items-center gap-x-3">
                        <input id="push-nothing" name="push-notifications" type="radio" class="relative size-4 appearance-none rounded-full border border-gray-300 bg-white before:absolute before:inset-1 before:rounded-full before:bg-white checked:border-indigo-600 checked:bg-indigo-600 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 disabled:border-gray-300 disabled:bg-gray-100 disabled:before:bg-gray-400 forced-colors:appearance-auto forced-colors:before:hidden [&:not(:checked)]:before:hidden">
                        <label for="push-nothing" class="block text-sm/6 font-medium text-gray-900">No push notifications</label>
                      </div>
                    </div>
                  </fieldset>
                </div>
              </div> --}}
            </div>
          
            <div class="mt-6 flex items-center justify-end gap-x-6">
                    <div class="grid grid-cols-2 gap-3">
                        <a href="{{ route('userlist') }}" class="text-black-900 bg-white border border-gray-500 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 font-semibold rounded-md text-sm px-3 py-2">Cancel</a>
                        <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Save</button>
                    </div>
                    {{-- <button type="button" class="text-sm/6 font-semibold text-gray-900">Cancel</button> --}}
                    
            </div>
          </form>      
    </div>
</x-layouts.dashboard>