export const MONTH_NAMES = ['Gennaio', 'Febbraio', 'Marzo', 'Aprile', 'Maggio', 'Giugno', 'Luglio', 'Agosto', 'Settembre', 'Ottobre', 'Novembre', 'Dicembre'];
export const DAYS = ['Dom', 'Lun', 'Mar', 'Mer', 'Gio', 'Ven', 'Sab'];

export function init() {
    return {
        showDatepicker: false,
        datepickerValue: '',

        month: '',
        year: '',
        no_of_days: [],
        blankdays: [],
        days: DAYS,
        ref_name: '',
        max: '', //Set in format yyyy-mm-dd
        min: '', //Set in format yyyy-mm-dd

        options: { weekday: 'short', year: 'numeric', month: 'short', day: 'numeric' },

        initDate(ref_name, max, min) {
            this.ref_name = ref_name;
            let today = new Date();
            this.month = today.getMonth();
            this.year = today.getFullYear();

            this.max = new Date(max ?? '2100-12-31');
            this.min = new Date(min ?? '1900-01-01');
            // this.datepickerValue = new Date(this.year, this.month, today.getDate()).toLocaleDateString('it-IT', this.options);
        },

        isToday(date) {
            const today = new Date();
            const d = new Date(this.year, this.month, date);

            return today.toLocaleDateString('it-IT', this.options) === d.toLocaleDateString('it-IT', this.options);
        },

        getDateValue(date) {
            let selectedDate = new Date(this.year, this.month, date);
            this.datepickerValue = selectedDate.toLocaleDateString('it-IT', this.options);


            this.$refs[this.ref_name].value = selectedDate.getFullYear() + "-" + ('0' + (selectedDate.getMonth() + 1)).slice(-2) + "-" + ('0' + selectedDate.getDate()).slice(-2);

            console.log(this.$refs[this.ref_name].value);

            this.showDatepicker = false;
        },

        getNoOfDays() {
            let daysInMonth = new Date(this.year, this.month + 1, 0).getDate();

            // find where to start calendar day of week
            let dayOfWeek = new Date(this.year, this.month).getDay();
            let blankdaysArray = [];
            for (var i = 1; i <= dayOfWeek; i++) {
                blankdaysArray.push(i);
            }

            let daysArray = [];
            for (var i = 1; i <= daysInMonth; i++) {
                daysArray.push(i);
            }

            this.blankdays = blankdaysArray;
            this.no_of_days = daysArray;
        },

        prevMonth() {
          if (this.month > 0) {
              this.month--;
          } else {
              this.month = 11;
              this.year--;
          }
        },

        nextMonth() {
            if (this.month < 11) {
                this.month++;
            } else {
                this.month = 0;
                this.year++;
            }
        },

        isMinDate() {
            if (this.min === '') return false;
            return (
                this.month <= this.min.getMonth()
                && this.year <= this.min.getFullYear()
            )
        },

        isMaxDate() {
            if (this.max === '') return false;
            return (
                this.month >= this.max.getMonth()
                && this.year >= this.max.getFullYear()
            )
        }
    }
}
