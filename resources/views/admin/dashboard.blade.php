<x-layouts.app>
    <div class="flex h-full w-full flex-1 flex-col gap-4 rounded-xl">
        <div class="grid auto-rows-min gap-4 md:grid-cols-3">
            <div
                class="relative aspect-video overflow-hidden rounded-xl border border-neutral-200 dark:border-neutral-700">
                <div class="p-5 flex flex-col gap-4">
                    <p class="text-base text-neutral-700 dark:text-neutral-300">
                        Total Institutes
                    </p>
                    <span class="font-medium text-6xl">
                        {{ $totalInstitutes }}
                    </span>
                </div>
            </div>
            <div
                class="relative aspect-video overflow-hidden rounded-xl border border-neutral-200 dark:border-neutral-700">
                <div class="p-5 flex flex-col gap-4">
                    <p class="text-base text-neutral-700 dark:text-neutral-300">
                        Total Pending Institutes
                    </p>
                    <span class="font-medium text-6xl">
                        {{ $totalPendingInstitutes }}
                    </span>
                </div>
            </div>
            <div
                class="relative aspect-video overflow-hidden rounded-xl border border-neutral-200 dark:border-neutral-700">
                <div class="p-5 flex flex-col gap-4">
                    <p class="text-base text-neutral-700 dark:text-neutral-300">
                        Total Approved Institutes
                    </p>
                    <span class="font-medium text-6xl">
                        {{ $totalApprovedInstitutes }}
                    </span>
                </div>
            </div>
        </div>
        <div
            class="relative h-full flex-1 overflow-hidden rounded-xl border border-neutral-200 dark:border-neutral-700">
            <x-placeholder-pattern class="absolute inset-0 size-full stroke-gray-900/20 dark:stroke-neutral-100/20" />
        </div>
    </div>
</x-layouts.app>
