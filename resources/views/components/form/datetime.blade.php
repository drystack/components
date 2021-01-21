{{--<input--}}
{{--        type="text"--}}
{{--        wire:model.lazy="{{ $attributes['field'] }}"--}}
{{--        id="{{ "input" . $attributes['field'] }}"--}}
{{--        x-data--}}
{{--        x-init="flatpickr('{{ "#input" . $attributes['field'] }}', {})"--}}
{{--/>--}}
{{--@error($attributes['field'])--}}
{{--<span class="error">{{ $message ?? '' }}</span>--}}
{{--@enderror--}}

<div class="antialiased sans-serif container  mb-2">
    <div x-data="datepicker.init()" x-init="[initDate(), getNoOfDays()]" x-cloak>
{{--        <div class="container mx-auto px-4 py-2 md:py-10">--}}
{{--            <div class="mb-5 w-64">--}}

                <label for="{{ $attributes['field'] }}" class="font-semibold mb-1 text-neutral-700 block">{{ $attributes['label'] ?? '' }}</label>
                <div class="relative">
                    <input type="hidden" name="{{ $attributes['field'] }}" x-ref="date">
                    <input
                            type="text"
                            readonly
                            x-model="datepickerValue"
                            @click="showDatepicker = !showDatepicker"
                            @keydown.escape="showDatepicker = false"
                            class="w-full pl-4 pr-10 py-3 leading-none rounded-lg shadow-sm focus:outline-none focus:shadow-outline text-neutral-700 bg-neutral-100 font-medium"
                            placeholder="Select date">

                    <div class="absolute top-0 right-0 px-3 py-2">
                        <svg class="h-6 w-6 text-neutral-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                        </svg>
                    </div>


                    <!-- <div x-text="no_of_days.length"></div>
                    <div x-text="32 - new Date(year, month, 32).getDate()"></div>
                    <div x-text="new Date(year, month).getDay()"></div> -->

                    <div
                            class="bg-white mt-12 rounded-lg shadow-lg p-4 absolute top-0 left-0 z-50"
                            style="width: 17rem"
                            x-show.transition="showDatepicker"
                            @click.away="showDatepicker = false">

                        <div class="flex justify-between items-center mb-2">
                            <div>
                                <span x-text="datepicker.MONTH_NAMES[month]" class="text-lg font-bold text-neutral-800"></span>
                                <span x-text="year" class="ml-1 text-lg text-neutral-600 font-normal"></span>
                            </div>
                            <div>
                                <button
                                        type="button"
                                        class="transition ease-in-out duration-100 inline-flex cursor-pointer hover:bg-neutral-200 p-1 rounded"
                                        :class="{'cursor-not-allowed opacity-25': month == 0 }"
                                        :disabled="month == 0 ? true : false"
                                        @click="month--; getNoOfDays()">
                                    <svg class="h-6 w-6 text-neutral-500 inline-flex" fill="none" viewBox="0 0 24 24"
                                         stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                              d="M15 19l-7-7 7-7"/>
                                    </svg>
                                </button>
                                <button
                                        type="button"
                                        class="transition ease-in-out duration-100 inline-flex cursor-pointer hover:bg-neutral-200 p-1 rounded"
                                        :class="{'cursor-not-allowed opacity-25': month == 11 }"
                                        :disabled="month == 11 ? true : false"
                                        @click="month++; getNoOfDays()">
                                    <svg class="h-6 w-6 text-neutral-500 inline-flex" fill="none" viewBox="0 0 24 24"
                                         stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                              d="M9 5l7 7-7 7"/>
                                    </svg>
                                </button>
                            </div>
                        </div>

                        <div class="flex flex-wrap mb-3 -mx-1">
                            <template x-for="(day, index) in datepicker.DAYS" :key="index">
                                <div style="width: 14.26%" class="px-1">
                                    <div
                                            x-text="day"
                                            class="text-neutral-800 font-medium text-center text-xs"></div>
                                </div>
                            </template>
                        </div>

                        <div class="flex flex-wrap -mx-1">
                            <template x-for="blankday in blankdays">
                                <div
                                        style="width: 14.28%"
                                        class="text-center border p-1 border-transparent text-sm"
                                ></div>
                            </template>
                            <template x-for="(date, dateIndex) in no_of_days" :key="dateIndex">
                                <div style="width: 14.28%" class="px-1 mb-1">
                                    <div
                                            @click="getDateValue(date)"
                                            x-text="date"
                                            class="cursor-pointer text-center text-sm leading-none rounded leading-loose transition ease-in-out duration-100"
                                            :class="{'bg-blue-500 text-white': isToday(date) == true, 'text-neutral-700 hover:bg-blue-200': isToday(date) == false }"
                                    ></div>
                                </div>
                            </template>
                        </div>
                    </div>

                </div>
{{--            </div>--}}

{{--        </div>--}}
    </div>
</div>
