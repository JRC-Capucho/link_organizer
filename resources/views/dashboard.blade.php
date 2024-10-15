<x-layout.app>
    <div class="grid items-center">
        @if ($message = session()->get('message'))
            <div>{{ $message }}</div>
        @endif
        <div class="flex justify-between">
            <h1>Dashboard</h1>


            <a href="{{ route('links.create') }}">Create a new link</a>
        </div>

        <div class="grid items-center">
            <div class="grid gap-4 p-16 max-w-5xl">
                @foreach ($links as $link)
                    <x-card :link="$link" :loop="$loop" />
                @endforeach
            </div>
        </div>
    </div>
</x-layout.app>
