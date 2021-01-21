<div class="antialiased sans-serif container  mb-2">
    <div x-data="datepicker.init()" x-init="[initDate('{{ 'dt-' . $attributes['field'] }}'), getNoOfDays()]" x-cloak>

        <div class="relative">
            <input type="hidden" name="{{ $attributes['field'] }}" x-ref="dt-{{ $attributes['field'] }}">
            <x-dry-input
                    type="text"
                    readonly
                    x-model="datepickerValue"
                    @click="showDatepicker = !showDatepicker"
                    @keydown.escape="showDatepicker = false"
                    placeholder="Seleziona data"
                    {{ $attributes }}
            />

            <div
                    class="bg-white {{ isset($attributes['label']) ? 'mt-20' : 'mt-12' }} rounded-lg shadow-lg p-4 absolute top-0 left-0 z-40"
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
                                :class="{'cursor-not-allowed opacity-25': isMinDate() }"
                                :disabled="isMinDate() ? true : false"
                                @click="prevMonth(); getNoOfDays()">
                            <svg class="h-6 w-6 text-neutral-500 inline-flex" fill="none" viewBox="0 0 24 24"
                                 stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M15 19l-7-7 7-7"/>
                            </svg>
                        </button>
                        <button
                                type="button"
                                class="transition ease-in-out duration-100 inline-flex cursor-pointer hover:bg-neutral-200 p-1 rounded"
                                :class="{'cursor-not-allowed opacity-25': isMaxDate() }"
                                :disabled="isMaxDate() ? true : false"
                                @click="nextMonth(); getNoOfDays()">
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
