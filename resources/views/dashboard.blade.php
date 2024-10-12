<x-layout.app>
    <div>
        <h1>Dashboard</h1>

        @if ($message = session()->get('message'))
            <div>{{ $message }}</div>
        @endif


        <a href="{{ route('links.create') }}">Create a new link</a>


        <ul>

            @foreach ($links as $link)
                <li style="display:flex; gap:4px;">
                    @if (!$loop->last)
                        <form action="{{ route('links.down', $link) }}", method="post">
                            @csrf
                            @method('PATCH')
                            <button>⬇️</button>
                        </form>
                    @endif

                    @if (!$loop->first)
                        <form action="{{ route('links.up', $link) }}", method="post">
                            @csrf
                            @method('PATCH')
                            <button>⬆️</button>
                        </form>
                    @endif

                    {{ $link->order }}

                    <a href="{{ route('links.edit', $link) }}">
                        {{ $link->title }}
                    </a>
                    <div>
                        {{ $link->platform_name }}
                    </div>
                    <div>
                        {{ $link->url }}
                    </div>
                    <form action="{{ route('links.destroy', $link) }}" method="post"
                        onsubmit="return confirm('Are sure?')">
                        @csrf
                        @method('DELETE')
                        <button>Delete</button>
                    </form>

                </li>
            @endforeach
        </ul>
    </div>
</x-layout.app>
