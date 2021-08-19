<x-layout>
    <section class="px-6 py-8">
        <main class="max-w-lg mx-auto mt-20">
            <h1 class="font-bold text-center mb-6 text-xl"><b>Sign In</b></h1>

            <form method="POST" action="/sessions" class="mt-10">

            @csrf
               
                <div class="mb-6">
                    <lable class="block mb-2 uppercase font-bold text-xs text-gray-700"
                            for="email"
                    >Email
                    </lable>

                    <input class="bg-blue-50 border border-gray-400 p-2 w-full"
                           type="text" 
                           name="email" 
                           id="email"
                           value="{{ old('email') }}"
                           required
                    >
                    @error('email')
                        <p class="text-red-500 text-xs mt-1"> {{ $message }}</p>

                    @enderror
                </div>

                 <div class="mb-6">
                    <lable class="block mb-2 uppercase font-bold text-xs text-gray-700"
                            for="password"
                    >Password
                    </lable>

                    <input class="bg-blue-50 border border-gray-400 p-2 w-full"
                           type="password" 
                           name="password" 
                           id="password"
                           required
                    >
                    @error('password')
                        <p class="text-red-500 text-xs mt-1"> {{ $message }}</p>

                    @enderror
                </div>

                 <div class="mb-6">
                    <button class="mx-auto bg-blue-400 border border-gray-300 text-white py-2 px-4 rounded hover:bg-blue-500"
                            type="submit"
                    >Login
                    </lable>
                 </div>


            </form>
        </main>
    </section>
</x-layout>