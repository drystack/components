@props([
    'name',
    'emptyText',
    'options' => [],
    'selected' => null
])
@php($json = json_encode($options))

<div class="mt-1 relative w-full" x-data="{selected: {{$selected}}, open:false, options: {{$json}} }" x-cloak>
    <select class="hidden" name="{{$name}}">
        <template x-for="(text, index) in options" :key="index">
            <option value="index" x-text="text" x-bind:selected="selected === index"></option>
        </template>
    </select>
    <button @click="open = !open" type="button" aria-haspopup="listbox" aria-expanded="true" aria-labelledby="listbox-label" class="relative w-full pl-2 py-2 bg-neutral-100 text-neutral-800 rounded-lg focus:shadow-inner focus:outline-none">
          <span class="flex items-center">
              <span class="ml-3 block truncate" x-text="options[selected] || '{{$emptyText}}'"></span>
          </span>
          <span class="ml-3 absolute inset-y-0 right-0 flex items-center pr-2 pointer-events-none">
              <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true"><path fill-rule="evenodd" d="M10 3a1 1 0 01.707.293l3 3a1 1 0 01-1.414 1.414L10 5.414 7.707 7.707a1 1 0 01-1.414-1.414l3-3A1 1 0 0110 3zm-3.707 9.293a1 1 0 011.414 0L10 14.586l2.293-2.293a1 1 0 011.414 1.414l-3 3a1 1 0 01-1.414 0l-3-3a1 1 0 010-1.414z" clip-rule="evenodd"/></svg>
          </span>
    </button>

    <!--
      Select popover, show/hide based on select state.

      Entering: ""
        From: ""
        To: ""
      Leaving: "transition ease-in duration-100"
        From: "opacity-100"
        To: "opacity-0"
    -->
    <div x-show="open" class="absolute mt-1 w-full rounded-md bg-white shadow-lg">
        <ul tabindex="-1" role="listbox" aria-labelledby="listbox-label" aria-activedescendant="listbox-item-3"
            class="max-h-56 rounded-md py-1 text-base ring-1 ring-black ring-opacity-5 overflow-auto focus:outline-none sm:text-sm">

            <template x-for="(text, index) in options" :key="index">
                <li @click="selected = index; open = false;" role="option" class="text-gray-900 cursor-default select-none relative py-2 pl-3 pr-9 hover:text-white hover:bg-primary-700">
                    <div class="flex items-center">
                        <span class="ml-3 block font-normal truncate" x-text="text"></span>
                    </div>
                    <span x-show="selected === index" class="absolute inset-y-0 right-0 flex items-center pr-4">
                        <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                    </span>
                </li>
            </template>
        </ul>
    </div>
</div>

