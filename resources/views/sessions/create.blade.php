<x-layout>


    <section class="px-6 py-8">
        <main class="max-w-lg mx-auto mt-10 ">
            <x-panel>
            <h1 class="text-center font-bold text-xl ">Login to your account Or <a href="/register" class="bg-blue-500 text-white rounded px-2 py-2">Create a new one!</a> </h1>

            <form method="POST" action="/login" class="mt-10">
                @csrf

<x-form.input type="email"  name="email" autocomplete="username" required/>
<x-form.input type="password"  name="password" autocomplete="new-password" required/>
                <x-form.button>Log in</x-form.button>



            </form>
            </x-panel>
        </main>

        </section>





</x-layout>
