<x-layout>
    <section class="px-6 py-8">
        <main class="max-w-lg mx-auto mt-20">
            <form method="POST" action="/register">

                <div class="mb-6">
                    <lable class="block mb-2 uppercase font-bold text-xs text-gray-700"
                            for="username"
                    >Username
                    </lable>

                    <input class="border border-gray-400 p-2 w-full"
                           type="text" 
                           name="username" 
                           id="username"
                           required
                    >
                </div>

            </form>

        </main>


    </section>

</x-layout>