<x-layout.app>
    <div>
        <h1>login<h1>

                @if ($message = session()->get('message'))
                    <div>
                        {{ $message }}
                    </div>
                @endif

                <form action="{{ route('login') }}" method="post">
                    @csrf

                    <div>
                        <input name="email" placeholder="email" value="{{ old('email') }}" />
                        @error('email')
                            <span>{{ $message }}</span>
                        @enderror
                    </div>
                    <br>
                    <div>
                        <input type="password" name="password" placeholder="password" />
                        @error('password')
                            <span>{{ $message }}</span>
                        @enderror
                    </div>
                    <br>

                    <button>Login</button>

                </form>
    </div>
</x-layout.app>
