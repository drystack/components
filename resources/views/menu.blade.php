<aside class="w-80 h-screen shadow-md hidden sm:block">
    <div class="flex flex-col justify-between h-screen p-4 bg-primary-600">
        <div class="">
            <div class="flex flex-row gap-2.5 text-white items-center">
                <div class="flex justify-center items-center rounded-full h-16 w-16 text-3xl bg-primary-800 p-1">
                    MR
                </div>
                <div>
                    <h3>Mario</h3>
                    <h3>Rossi</h3>
                </div>
            </div>
            <div class="text-sm mt-10">
                <x-dry-nav-link route="home" icon="fas fa-home">Home</x-dry-nav-link>
            </div>
        </div>
        <div class="flex p-3 text-white bg-secondary-500 rounded cursor-pointer text-center text-sm">
            <x-dry-button custom class="text-white bg-primary-700">
                <svg class="w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"><path fillRule="evenodd" d="M3 3a1 1 0 00-1 1v12a1 1 0 102 0V4a1 1 0 00-1-1zm10.293 9.293a1 1 0 001.414 1.414l3-3a1 1 0 000-1.414l-3-3a1 1 0 10-1.414 1.414L14.586 9H7a1 1 0 100 2h7.586l-1.293 1.293z" clipRule="evenodd" /></svg>
                <span class="font-semibold">Logout</span>
            </x-dry-button>
        </div>
    </div>
</aside>
