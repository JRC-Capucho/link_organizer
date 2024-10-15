<x-layout.app>
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-4 min-h-screen">

        <img class="hidden lg:block h-full object-cover p-4 rounded-3xl" src="/storage/imgs/thumbnail.svg"
            alt="sun tornado" />

        <div class="flex flex-col w-full items-center justify-center gap-12 lg:gap-24">

            <img src="/storage/imgs/logo.svg" alt="logo" />
            <div class="w-full px-4 lg:px-0 pb-4">
                {{ $slot }}
            </div>

        </div>

    </div>
</x-layout.app>
