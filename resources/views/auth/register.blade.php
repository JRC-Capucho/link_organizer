<x-layout.app>
    <div class="p-5 flex bg-b_primary gap-10">
        @if ($message = session()->get('message'))
            <div>
                {{ $message }}
            </div>
        @endif

        <img src="/storage/imgs/thumbnail.svg" alt="sun tornado" />

        <div class="grid gap-16 px-20">
            <img src="/storage/imgs/logo.svg" alt="sun tornado" />


            <div class="grid gap-10">
                <h1 class="text-white text-xl">Register a account</h1>

                <form action="{{ route('register') }}" method="post" class="text-white">
                    @csrf

                    <div class="flex justify-between gap-5">
                        <div class="grid">
                            <labe>Name</labe>
                            <input name="name" placeholder="name" />
                            @error('name')
                                <span>{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="grid">
                            <label>Last name</label>
                            <input name="lastname" placeholder="last name" />
                            @error('lastname')
                                <span>{{ $message }}</span>
                            @enderror
                        </div>

                    </div>
                    <div class="grid">
                        <label>Email</label>
                        <input name="email" placeholder="email" value="{{ old('email') }}" />
                        @error('email')
                            <span>{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="grid">
                        <label>Password</label>
                        <input type="password" name="password" placeholder="password" />
                        @error('password')
                            <span>{{ $message }}</span>
                        @enderror
                    </div>

            </div>
            <button class="bg-a_orange">Register</button>

            </button>

        </div>
    </div>
</x-layout.app>
