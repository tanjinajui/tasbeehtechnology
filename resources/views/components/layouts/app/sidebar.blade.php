<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">

<head>
    @include('partials.head')
</head>

<body class="min-h-screen bg-white dark:bg-zinc-800">
    <flux:sidebar sticky stashable class="border-r border-zinc-200 bg-zinc-50 dark:border-zinc-700 dark:bg-zinc-900">
        <flux:sidebar.toggle class="lg:hidden" icon="x-mark" />

        <a href="{{ route('dashboard') }}" class="mr-5 flex items-center space-x-2" wire:navigate>
            <x-app-logo />
        </a>
        <div id="google_translate_element"></div>
        {{-- dropdown start --}}
        {{-- <flux:dropdown position="" align="start">
            <flux:profile icon="building-storefront" name="Language" icon-trailing="chevrons-up-down" />  
            <flux:menu class="w-[220px]">
                <flux:menu.radio.group>
                    <flux:menu.item :href="route('mission_vision')"
                    :current="request()->routeIs('mission_vision')" wire:navigate>{{ __('English') }}
                    </flux:menu.item>
                </flux:menu.radio.group>
                <flux:menu.separator />
                <flux:menu.radio.group>
                    <flux:menu.item :href="route('principal_message')"
                    :current="request()->routeIs('principal_message')" wire:navigate>{{ __('Bangla') }}
                    </flux:menu.item>
                </flux:menu.radio.group>               
            </flux:menu>
        </flux:dropdown> --}}
        {{-- dropdown end --}}
        <flux:navlist variant="outline">
            <flux:navlist.group heading="Platform" class="grid">
                <flux:navlist.item icon="home" :href="route('dashboard')" :current="request()->routeIs('dashboard')"
                    wire:navigate>{{ __('Dashboard') }}</flux:navlist.item>
            </flux:navlist.group>
            {{-- single menu item start --}}
            <flux:navlist.group class="grid">
                <flux:navlist.item icon="building-office-2" :href="route('institutes')"
                    :current="request()->routeIs('institutes')" wire:navigate>{{ __('Institutes') }}</flux:navlist.item>
            </flux:navlist.group>
            {{-- single menu item end --}}
            {{-- dropdown start --}}
            <flux:dropdown position="" align="start">
                <flux:profile icon="building-storefront" name="About" icon-trailing="chevrons-up-down" />  
                <flux:menu class="w-[220px]">
                    <flux:menu.radio.group>
                        <flux:menu.item :href="route('mission_vision')"
                        :current="request()->routeIs('mission_vision')" wire:navigate>{{ __('Mission & Vision') }}
                        </flux:menu.item>
                    </flux:menu.radio.group>

                    <flux:menu.separator />

                    <flux:menu.radio.group>
                        <flux:menu.item :href="route('principal_message')"
                        :current="request()->routeIs('principal_message')" wire:navigate>{{ __('Principal Messages') }}
                        </flux:menu.item>
                    </flux:menu.radio.group>
                    <flux:menu.separator />

                    <flux:menu.radio.group>
                        <flux:menu.item :href="route('vice_principal_message')"
                        :current="request()->routeIs('vice_principal_message')" wire:navigate>{{ __('Vice Principal Messages') }}
                        </flux:menu.item>
                    </flux:menu.radio.group>
                    <flux:menu.separator />

                    <flux:menu.radio.group>
                        <flux:menu.item :href="route('founder')"
                        :current="request()->routeIs('founder')" wire:navigate>{{ __('Founder') }}
                        </flux:menu.item>
                    </flux:menu.radio.group>
                </flux:menu>
            </flux:dropdown>
            {{-- dropdown end --}}
            {{-- dropdown start --}}
            <flux:dropdown position="" align="start">
                <flux:profile icon="building-storefront" name="Our Campus" icon-trailing="chevrons-up-down" />
                    
                <flux:menu class="w-[220px]">
                    <flux:menu.radio.group>
                        <flux:menu.item :href="route('mission_vision.create')"
                        :current="request()->routeIs('mission_vision.create')" wire:navigate>{{ __('Branchs Info') }}
                        </flux:menu.item>
                    </flux:menu.radio.group>
                </flux:menu>
            </flux:dropdown>
            {{-- dropdown end --}}
            {{-- dropdown start --}}
            <flux:dropdown position="" align="start">
                <flux:profile icon="building-storefront" name="Admission" icon-trailing="chevrons-up-down" />
                    
                <flux:menu class="w-[220px]">
                    <flux:menu.radio.group>
                        <flux:menu.item :href="route('mission_vision.create')"
                        :current="request()->routeIs('mission_vision.create')" wire:navigate>{{ __('Admission Info') }}
                        </flux:menu.item>
                    </flux:menu.radio.group>
                    <flux:menu.radio.group>
                        <flux:menu.item :href="route('mission_vision.create')"
                        :current="request()->routeIs('mission_vision.create')" wire:navigate>{{ __('Apply Online') }}
                        </flux:menu.item>
                    </flux:menu.radio.group>
                </flux:menu>
            </flux:dropdown>
            {{-- dropdown end --}}
            {{-- dropdown start --}}
            <flux:dropdown position="" align="start">
                <flux:profile icon="building-storefront" name="Management " icon-trailing="chevrons-up-down" />
                    
                <flux:menu class="w-[220px]">
                    <flux:menu.radio.group>
                        <flux:menu.item :href="route('board_of_director')"
                        :current="request()->routeIs('board_of_director')" wire:navigate>{{ __('Board of Director') }}
                        </flux:menu.item>
                    </flux:menu.radio.group>
                    <flux:menu.radio.group>
                        <flux:menu.item :href="route('branch_responsibles')"
                        :current="request()->routeIs('branch_responsibles')" wire:navigate>{{ __('Branch Responsibles') }}
                        </flux:menu.item>
                    </flux:menu.radio.group>
                    <flux:menu.radio.group>
                        <flux:menu.item :href="route('department_responsibles')"
                        :current="request()->routeIs('department_responsibles')" wire:navigate>{{ __('Department Responsibles') }}
                        </flux:menu.item>
                    </flux:menu.radio.group>
                </flux:menu>
            </flux:dropdown>
            {{-- dropdown end --}}
            {{-- dropdown start --}}
            <flux:dropdown position="" align="start">
                <flux:profile icon="building-storefront" name="Gallery" icon-trailing="chevrons-up-down" />
                    
                <flux:menu class="w-[220px]">
                    <flux:menu.radio.group>
                        <flux:menu.item :href="route('mission_vision.create')"
                        :current="request()->routeIs('mission_vision.create')" wire:navigate>{{ __('Photo Gallery') }}
                        </flux:menu.item>
                    </flux:menu.radio.group>
                    <flux:menu.radio.group>
                        <flux:menu.item :href="route('mission_vision.create')"
                        :current="request()->routeIs('mission_vision.create')" wire:navigate>{{ __('Video Gallery') }}
                        </flux:menu.item>
                    </flux:menu.radio.group>
                </flux:menu>
            </flux:dropdown>
            {{-- dropdown end --}}
            {{-- dropdown start --}}
            <flux:dropdown position="" align="start">
                <flux:profile icon="building-storefront" name="Notice" icon-trailing="chevrons-up-down" />
                    
                <flux:menu class="w-[220px]">
                    <flux:menu.radio.group>
                        <flux:menu.item :href="route('mission_vision.create')"
                        :current="request()->routeIs('mission_vision.create')" wire:navigate>{{ __('All Notice') }}
                        </flux:menu.item>
                    </flux:menu.radio.group>
                </flux:menu>
            </flux:dropdown>
            {{-- dropdown end --}}
            {{-- dropdown start --}}
            <flux:dropdown position="" align="start">
                <flux:profile icon="building-storefront" name="Careers" icon-trailing="chevrons-up-down" />
                    
                <flux:menu class="w-[220px]">
                    <flux:menu.radio.group>
                        <flux:menu.item :href="route('mission_vision.create')"
                        :current="request()->routeIs('mission_vision.create')" wire:navigate>{{ __('Jobs') }}
                        </flux:menu.item>
                    </flux:menu.radio.group>
                    <flux:menu.radio.group>
                        <flux:menu.item :href="route('mission_vision.create')"
                        :current="request()->routeIs('mission_vision.create')" wire:navigate>{{ __('CV') }}
                        </flux:menu.item>
                    </flux:menu.radio.group>
                </flux:menu>
            </flux:dropdown>
            {{-- dropdown end --}}
            {{-- dropdown start --}}
            <flux:dropdown position="" align="start">
                <flux:profile icon="building-storefront" name="Our Campus" icon-trailing="chevrons-up-down" />   
                <flux:menu class="w-[220px]">
                    <flux:menu.radio.group>
                        <flux:menu.item :href="route('mission_vision.create')"
                        :current="request()->routeIs('mission_vision.create')" wire:navigate>{{ __('Branchs Info') }}
                        </flux:menu.item>
                    </flux:menu.radio.group>
                </flux:menu>
            </flux:dropdown>
            {{-- dropdown end --}}
            {{-- single menu item start --}}
            <flux:navlist.group class="grid">
                <flux:navlist.item icon="building-office-2" :href="route('institutes')"
                    :current="request()->routeIs('institutes')" wire:navigate>{{ __('Contact Us') }}</flux:navlist.item>
            </flux:navlist.group>
            {{-- single menu item end --}}
            
        </flux:navlist>

        <flux:spacer />


        <!-- Desktop User Menu -->
        <flux:dropdown position="bottom" align="start">
            <flux:profile avatar="/img/demo/user.png" :name="auth()->user()->first_name" :initials="auth()->user()->initials()"
                icon-trailing="chevrons-up-down" />

            <flux:menu class="w-[220px]">
                <flux:menu.radio.group>
                    <div class="p-0 text-sm font-normal">
                        <div class="flex items-center gap-2 px-1 py-1.5 text-left text-sm">
                            <span class="relative flex h-8 w-8 shrink-0 overflow-hidden rounded-lg">
                                <span
                                    class="flex h-full w-full items-center justify-center rounded-lg bg-neutral-200 text-black dark:bg-neutral-700 dark:text-white">
                                    {{ auth()->user()->initials() }}
                                </span>
                            </span>

                            <div class="grid flex-1 text-left text-sm leading-tight">
                                <span class="truncate font-semibold">{{ auth()->user()->first_name }}</span>
                                <span class="truncate text-xs">{{ auth()->user()->email }}</span>
                            </div>
                        </div>
                    </div>
                </flux:menu.radio.group>

                <flux:menu.separator />

                <flux:menu.radio.group>
                    <flux:menu.item href="/settings/profile" icon="cog" wire:navigate>{{ __('Settings') }}
                    </flux:menu.item>
                </flux:menu.radio.group>

                <flux:menu.separator />

                <form method="POST" action="{{ route('logout') }}" class="w-full">
                    @csrf
                    <flux:menu.item as="button" type="submit" icon="arrow-right-start-on-rectangle" class="w-full">
                        {{ __('Log Out') }}
                    </flux:menu.item>
                </form>
            </flux:menu>
        </flux:dropdown>
    </flux:sidebar>

    <!-- Mobile User Menu -->
    <flux:header class="lg:hidden">
        <flux:sidebar.toggle class="lg:hidden" icon="bars-2" inset="left" />

        <flux:spacer />

        <flux:dropdown position="top" align="end">
            <flux:profile :initials="auth()->user()->initials()" icon-trailing="chevron-down" />

            <flux:menu>
                <flux:menu.radio.group>
                    <div class="p-0 text-sm font-normal">
                        <div class="flex items-center gap-2 px-1 py-1.5 text-left text-sm">
                            <span class="relative flex h-8 w-8 shrink-0 overflow-hidden rounded-lg">
                                <span
                                    class="flex h-full w-full items-center justify-center rounded-lg bg-neutral-200 text-black dark:bg-neutral-700 dark:text-white">
                                    {{ auth()->user()->initials() }}
                                </span>
                            </span>

                            <div class="grid flex-1 text-left text-sm leading-tight">
                                <span class="truncate font-semibold">{{ auth()->user()->first_name }}</span>
                                <span class="truncate text-xs">{{ auth()->user()->email }}</span>
                            </div>
                        </div>
                    </div>
                </flux:menu.radio.group>

                <flux:menu.separator />

                <flux:menu.radio.group>
                    <flux:menu.item href="/settings/profile" icon="cog" wire:navigate>Settings</flux:menu.item>
                </flux:menu.radio.group>

                <flux:menu.separator />

                <form method="POST" action="{{ route('logout') }}" class="w-full">
                    @csrf
                    <flux:menu.item as="button" type="submit" icon="arrow-right-start-on-rectangle" class="w-full">
                        {{ __('Log Out') }}
                    </flux:menu.item>
                </form>
            </flux:menu>
        </flux:dropdown>
    </flux:header>

    {{ $slot }}

    @fluxScripts

    

<script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
}
</script>

<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

{{-- <p>You can translate the content of this page by selecting a language in the select box.</p> --}}
</body>

</html>