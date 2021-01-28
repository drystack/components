@php( $class = "fixed flex items-center gap-16 font-bold top-10 right-10 bg-white  rounded-md shadow-lg text-neutral-700 px-4 py-3 border border-neutral-200" )

@if (session()->has('notification') || session()->has('success') || session()->has('error'))
    <div class="{{$class}}" x-data="{show: true}" x-show="show" x-init="() => setTimeout(() => { show = false}, 5000)">
        <div class="font-bold flex items-center gap-2.5">
            @if(session()->has('notification'))
                <div class="text-primary-500">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                </div>
            @elseif(session()->has('success'))
                <div class="text-success-500">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                </div>
            @elseif(session()->has('error'))
                <div class="text-alert-500">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                </div>
            @endif
            {{ session('notification') ?? session('success') ?? session('error') }}
        </div>

        <svg @click="show = false" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
    </div>
@endif
