@if (session()->has('notification'))
    <div class="fixed top-10 right-10 bg-white border-t-8 border-success-500 rounded-md shadow-xl text-neutral-700 px-4 py-6">
        {{ session('notification') }}
    </div>
@endif

@if (session()->has('success'))
    <div class="fixed top-10 right-10 bg-white border-t-8 border-success-500 rounded-md shadow-xl text-neutral-700 px-4 py-6">
        {{ session('success') }}
    </div>
@endif

@if (session()->has('error'))
    <div class="fixed top-10 right-10 bg-white border-t-8 border-alert-500 rounded-md shadow-xl text-neutral-700 px-4 py-6">
        {{ session('error') }}
    </div>
@endif
