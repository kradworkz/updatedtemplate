<template>
     <FullCalendar ref="fullCalendar" :options="calendarOptions" />
     <Create ref="create" />
</template>
<script>
    import Create from './Modals/Create.vue';
    import '@fullcalendar/core';
    import FullCalendar from '@fullcalendar/vue3';
    import dayGridPlugin from '@fullcalendar/daygrid';
    import listPlugin from '@fullcalendar/list';
    import timeGridPlugin from '@fullcalendar/timegrid';
    import interactionPlugin from '@fullcalendar/interaction';
    import resourceTimelinePlugin from '@fullcalendar/resource-timeline';

    export default {
        components : { FullCalendar, Create },
        data(){
            return {
                calendarOptions: {
                    height: "auto",
                    // expandRows: true,
                    headerToolbar: {
                        left:   'title',
                        center: '',
                        right:  'today prev,next dayGridMonth,timeGridDay'
                    },
                    plugins: [ dayGridPlugin, interactionPlugin, listPlugin, timeGridPlugin, resourceTimelinePlugin],
                    initialView: 'dayGridMonth',
                    eventDisplay: 'block',
                    selectable: true,
                    slotMinTime: "08:00:00",
			        slotMaxTime: "18:00:00",
                    nextDayThreshold: '00:00',
                    allDay: false,
                    timeFormat: 'H(:mm)',
                    dateClick: this.handleEvent,
                    select: this.handleSelect,
                    fixedWeekCount: true,
                    events: [],
                    eventOverlap: false,
                    // editable: true,
                    // droppable: true,
                    validRange: {
                        start: new Date()
                    },
                    
                },
            }
        },

        methods : {
            handleEvent(event){
               this.$refs.create.set();
            },
            
            handleSelect(selectionInfo)
            {    
                let type = selectionInfo.view.type; //this.$refs.fullCalendar.getApi().currentData.currentViewType;
    
                switch(type){ //timeGridDay , timeGridWeek, dayGridMonth
                    case 'timeGridDay':
                        let y = (new Date(selectionInfo.endStr));
                        let z = (new Date(selectionInfo.startStr));
                        selectionInfo.endStr = z.toISOString().split('T')[0];
                        selectionInfo.startStr = z.toISOString().split('T')[0];
                        this.$refs.create.set(selectionInfo);
                    break;
                    case 'dayGridWeek':
                        this.$refs.create.set(selectionInfo);
                    break;
                    case 'dayGridMonth':
                        let a = (new Date(selectionInfo.endStr));
                        let b = (new Date(selectionInfo.end));
                        a.setDate(a.getDate() - 1);
                        b.setDate(b.getDate() - 1);
                        selectionInfo.endStr = a.toISOString().split('T')[0];
                        selectionInfo.end = b;

                        if(selectionInfo.startStr == selectionInfo.endStr ){
                            this.$refs.fullCalendar.getApi().changeView('timeGridDay',selectionInfo.startStr);
                        }else{
                            this.$refs.create.set(selectionInfo);
                        }
                    break;
                }
                // console.log(selectionInfo);
            }
        }
    }
</script>

<style>
    .fc-license-message {
        display: none;
    }
</style>