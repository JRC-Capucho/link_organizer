<x-layout.app>
    <div>
        <h1>Update a link {{ $link->title }}<h1>

                @if ($message = session()->get('message'))
                    <div>
                        {{ $message }}
                    </div>
                @endif

                <form action="{{ route('links.edit', $link) }}" method="post">
                    @csrf
                    @method('put')

                    <div>
                        <input type="file" name="photo" />
                        @error('photo')
                            <span>{{ $message }}</span>
                        @enderror
                    </div>
                    <br>


                    <div>
                        <input name="title" placeholder="title" value="{{ old('title', $link->title) }}" />
                        @error('title')
                            <span>{{ $message }}</span>
                        @enderror
                    </div>
                    <br>

                    <div>
                        <input name="platform_name" placeholder="platform name"
                            value="{{ old('platform_name', $link->platform_name) }}" />
                        @error('platform_name')
                            <span>{{ $message }}</span>
                        @enderror
                    </div>
                    <br>

                    <div>
                        <input name="url" placeholder="url" value="{{ old('url', $link->url) }}" />
                        @error('url')
                            <span>{{ $message }}</span>
                        @enderror
                    </div>
                    <br>


                    <button>Update</button>
                </form>
    </div>
</x-layout.app>
