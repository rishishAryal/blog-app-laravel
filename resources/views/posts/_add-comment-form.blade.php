@auth
    <x-panel>
        <form method="POST" action="/posts/{{$post->slug}}/comments" >
            @csrf
            <header class="flex items-center  ">
                <img src="https://i.pravatar.cc/60?u={{ auth()->id() }}" alt="" width="40" height="40" class="rounded-full">
                <h2 class="ml-4">Want to Participate??</h2>
            </header>
            <div class="mt-6">
                            <textarea name="body"
                                      class="w-full text-sm focus:outline-none
                                      focus:ring"
                                      id=""

                                      rows="5"
                                      placeholder="Comment here"
                                      required
                            ></textarea>

                @error('body')
                <span class="text-xs text-red-500">{{$message}}</span>
                @enderror
            </div>

            <div class="flex justify-end mt-6 border-t border-gray-200 pt-6">
                <x-submit-button>Post</x-submit-button>
            </div>

        </form>

    </x-panel>
@else
    <p><a href="/login" class=" inline-block bg-blue-500 text-white
                         rounded px-2 py-2">Login</a> Or
        <a href="/register" class=" inline-block bg-blue-500 text-white rounded px-2 py-2">Register</a>
        To leave a comment!!  </p>

@endauth
