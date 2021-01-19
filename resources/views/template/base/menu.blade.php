<aside class="w-80 h-screen shadow-md hidden sm:block">
    <div class="flex flex-col justify-between h-screen p-4 bg-primary-600">
        <div class="">
            @include('drystack::template.base.menu-header')
            <div class="text-sm mt-10">
                <div class="text-white p-2 mt-2 rounded cursor-pointer hover:bg-primary-700 hover:text-blue-50">Backlog</div>
                <div class="text-white p-2 mt-2 rounded cursor-pointer hover:bg-primary-700 hover:text-blue-50">Board</div>
                <div class="text-white p-2 mt-2 rounded cursor-pointer hover:bg-primary-700 hover:text-blue-50">Reports</div>
                <div class="text-white p-2 mt-2 rounded cursor-pointer hover:bg-primary-700 hover:text-blue-50">Users</div>
                <div class="bg-neutral-500 flex justify-between items-center text-white p-2 rounded mt-2 cursor-pointer hover:bg-neutral-700 hover:text-blue-300">
                    <span>Reports</span>
                    <span class="w-4 h-4 bg-blue-600 rounded-full text-white text-center font-normal text-xs">5</span>
                </div>
            </div>
        </div>
        <div class="flex p-3 text-white bg-red-500 rounded cursor-pointer text-center text-sm">
            <button class="rounded inline-flex items-center">
                <svg class="w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"><path fillRule="evenodd" d="M3 3a1 1 0 00-1 1v12a1 1 0 102 0V4a1 1 0 00-1-1zm10.293 9.293a1 1 0 001.414 1.414l3-3a1 1 0 000-1.414l-3-3a1 1 0 10-1.414 1.414L14.586 9H7a1 1 0 100 2h7.586l-1.293 1.293z" clipRule="evenodd" /></svg>
                <span class="font-semibold">Logout</span>
            </button>
        </div>
    </div>
</aside>
