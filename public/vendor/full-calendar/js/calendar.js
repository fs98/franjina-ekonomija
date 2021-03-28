$(function() {
    "use strict"; 

    $(document).ready(function() {

        $('#calendar1').fullCalendar({
            header: {
                left: 'prev,next today',
                center: 'title',
                right: 'month,agendaWeek,agendaDay,listWeek'
            },
            defaultDate: '2018-03-12',
            navLinks: true, // can click day/week names to navigate views 
            eventLimit: true, // allow "more" link when too many events
            events: [{
                    title: 'All Day Event',
                    start: '2018-03-01',
                }, 
            ]
        });

    });

 });