<x-layout.app>
    <div>
        <h1>Profile<h1>

                @if ($message = session()->get('message'))
                    <div>
                        {{ $message }}
                    </div>
                @endif

                <form action="{{ route('profile.update') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div>
                        <img src="/storage/{{ $user->photo }}" alt="profile photo" />
                        <input type="file" name="photo" />
                        @error('photo')
                            <span>{{ $message }}</span>
                        @enderror
                    </div>
                    <br>

                    <div>
                        <input name="name" placeholder="name" value="{{ old('name', $user->name) }}" />
                        @error('name')
                            <span>{{ $message }}</span>
                        @enderror
                    </div>
                    <br>

                    <div>
                        <input name="lastname" placeholder="last name" value="{{ old('lastname', $user->lastname) }}" />
                        @error('lastname')
                            <span>{{ $message }}</span>
                        @enderror
                    </div>
                    <br>

                    <div>
                        <input name="email" placeholder="email" value="{{ old('email', $user->email) }}" />
                        @error('email')
                            <span>{{ $message }}</span>
                        @enderror
                    </div>
                    <br>

                    <div>
                        <input type="bio" name="bio" placeholder="bio" value="{{ old('bio', $user->bio) }}" />
                        @error('password')
                            <span>{{ $message }}</span>
                        @enderror
                    </div>
                    <br>

                    <button>Register</button>

                </form>
    </div>
</x-layout.app>
