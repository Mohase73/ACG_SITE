<div>
    {{--  <div>
        <div class="p-6" wire:ignore>
            <input wire:model="idCalendar" type="text" hidden>
            <div class="calendar"></div>
        </div>
    </div>
    @push('scripts')
    <script>
        document.addEventListener('livewire:load', () => {
            document.querySelectorAll('.calendar').forEach(element => {
                // if(element.previousElementSibling.value == @this.idCalendar) {
                    let calendar = new FullCalendar.Calendar(element, {
                        headerToolbar: {
                            left: 'prev,next today',
                            right: 'title'
                        },
                        validRange: function(nowDate) {
                            return {
                                start: nowDate.setDate(nowDate.getDate() + 1)
                            };
                        },
                        locale: '{{ config('app.locale') }}',
                        selectable: true,
                        selectOverlap: () => {
                            return false;
                        },
                        reservations: JSON.parse(@this.reservations)
                    });
                    calendar.id = @this.idCalendar;
                    calendar.render();
                };
            // });
        });


        let calendar = new FullCalendar.Calendar(element, {
            select: info => {
                calendar.event = {
                    start: info.startStr,
                    end: info.endStr,
                    allDay: info.allDay,
                    display: 'background'
                };
                Livewire.emit('openModal', 'confirm', {
                    calendarId: calendar.id,
                    dateStart: info.startStr,
                    dateEnd: info.endStr
                });
            },
        });



        calendar.id = @this.idCalendar;
        calendar.render();
        Livewire.on('eventChecked', data => {
            if(calendar.id == data.id && data.ok) {
                calendar.addEvent(calendar.reservation);
                @this.addEvent(calendar.reservation);
            }
        });
    </script>
    @endpush  --}}

    <style>
        #calendar-container {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
        }
        #calendar {
            margin: 10px auto;
            padding: 10px;
            max-width: 1100px;
            height: 700px;
        }
    </style>
    <div>
        <div id='calendar-container' wire:ignore>
            <div id='calendar'></div>
        </div>
    </div>
    @push('scripts')
    <script src='https://cdn.jsdelivr.net/npm/fullcalendar@5.6.0/main.min.js'></script>
    <script>
        document.addEventListener('livewire:load', function () {
            const Calendar = FullCalendar.Calendar;
            const calendarEl = document.getElementById('calendar');
            const calendar = new Calendar(calendarEl);
            calendar.render();
        });
    </script>
    <link href='https://cdn.jsdelivr.net/npm/fullcalendar@5.6.0/main.min.css' rel='stylesheet' />
    @endpush

</div>
