<x-layout.app>
    <div>
        <h1>Register a link<h1>

                @if ($message = session()->get('message'))
                    <div>
                        {{ $message }}
                    </div>
                @endif

                <form action="{{ route('links.create') }}" method="post" enctype="multipart/form-data">
                    @csrf


                    <div>
                        <input type="file" name="photo" />
                        @error('photo')
                            <span>{{ $message }}</span>
                        @enderror
                    </div>
                    <br>

                    <div>
                        <input name="title" placeholder="title" />
                        @error('title')
                            <span>{{ $message }}</span>
                        @enderror
                    </div>
                    <br>

                    <div>
                        <input name="platform_name" placeholder="platform name" />
                        @error('platform_name')
                            <span>{{ $message }}</span>
                        @enderror
                    </div>
                    <br>

                    <div>
                        <input name="url" placeholder="url" value="{{ old('url') }}" />
                        @error('url')
                            <span>{{ $message }}</span>
                        @enderror
                    </div>
                    <br>


                    <button>Register</button>

                    <div>
                        <a href="{{ route('dashboard') }}">Back</a>
                    </div>

                </form>
    </div>
</x-layout.app>
