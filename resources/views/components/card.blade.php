    @props(['link', 'loop'])
    <div class="flex gap-4">
        <div class="grid grid-cols-2 gap-4 items-center">

            <div>
                @if (!$loop->first)
                    <form action="{{ route('links.up', $link) }}", method="post">
                        @csrf
                        @method('PATCH')
                        <button>
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 21V3M12 3L20.5 11.5M12 3L3.5 11.5" stroke="white" stroke-width="1.5"
                                    stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </button>
                    </form>
                @endif
            </div>

            <div>
                @if (!$loop->last)
                    <form action="{{ route('links.down', $link) }}", method="post">
                        @csrf
                        @method('PATCH')
                        <button>
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 3V21M12 21L20.5 12.5M12 21L3.5 12.5" stroke="white" stroke-width="1.5"
                                    stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </button>
                    </form>
                @endif
            </div>
        </div>

        <div class="flex rounded-2xl bg-b_secondary border-bo_primary p-4 w-full">

            <div class="flex border-bo_primary rounded items-center min-w-full justify-between">

                <img class="max-h-16 rounded-2xl" src="/storage/{{ $link->photo }}" alt="movie" />

                <div class="grid text-white p-4 w-full">
                    <div class="flex gap-4">
                        <p class="font-bold">{{ $link->title }}</p>
                        <p class="bg-a_blue rounded">{{ $link->platform_name }}</p>
                    </div>

                    <p class="text-[#919191]">{{ $link->url }}</p>
                </div>

                <div class="flex gap-4 place-self-center">
                    <form action="{{ route('links.destroy', $link) }}" method="post"
                        onsubmit="return confirm('Are sure?')">
                        @csrf
                        @method('DELETE')
                        <button>
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M20 9L18.005 20.3463C17.8369 21.3026 17.0062 22 16.0353 22H7.96474C6.99379 22 6.1631 21.3026 5.99496 20.3463L4 9"
                                    stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                <path
                                    d="M21 6H15.375M15.375 6V4C15.375 2.89543 14.4796 2 13.375 2H10.625C9.52043 2 8.625 2.89543 8.625 4V6M15.375 6H8.625M3 6H8.625"
                                    stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </button>
                    </form>
                    <a href="{{ route('links.edit', $link) }}">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M14.3631 5.65147L15.843 4.17148C16.6241 3.39043 17.8904 3.39043 18.6715 4.17148L20.0857 5.5857C20.8667 6.36674 20.8667 7.63307 20.0857 8.41412L18.6057 9.89411M14.3631 5.65147L4.74742 15.2671C4.41535 15.5992 4.21072 16.0375 4.1694 16.5053L3.92731 19.2458C3.87254 19.8658 4.39141 20.3847 5.01143 20.3299L7.75184 20.0878C8.21965 20.0465 8.658 19.8418 8.99007 19.5098L18.6057 9.89411M14.3631 5.65147L18.6057 9.89411"
                                stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </a>
                </div>

            </div>

        </div>
    </div>
