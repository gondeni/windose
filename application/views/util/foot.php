</div>
</body>
<!--JavaScript JQuery-->
<script src="<?php echo base_url(); ?>lib/jquery/jquery.min.js"></script>
<script src="<?php echo base_url(); ?>lib/jquery/jquery-migrate.min.js"></script>
<!--Fullcalendar-->
<script src='<?= base_url(); ?>plugins/fullcalendar-3.4.0/lib/moment.min.js'></script>
<script src='<?= base_url(); ?>plugins/fullcalendar-3.4.0/fullcalendar.js'></script>
<script src='<?= base_url(); ?>plugins/fullcalendar-3.4.0/locale/es.js'></script>

<script>
    /**
     *Inicializar fullcalendar
     * */
    $(document).ready(function () {
        $("#calendar").fullCalendar({
            timezone: 'local'
        });
//        $('#calendar').fullCalendar('option', 'timezone', 'local');
    })

    /*
     $(document).ready(function() {

     $('#calendar').fullCalendar({
     header: {
     left: 'prev,next today',
     center: 'title',
     right: 'month,agendaWeek,agendaDay,listWeek'
     },
     defaultDate: '2017-05-12',
     navLinks: true, // can click day/week names to navigate views
     editable: true,
     selectable: true,
     eventLimit: true, // allow "more" link when too many events
     events: {
     url: 'php/get-events.php',
     error: function() {
     $('#script-warning').show();
     }
     },
     loading: function(bool) {
     $('#loading').toggle(bool);
     },
     eventRender: function(event, el) {
     // render the timezone offset below the event title
     if (event.start.hasZone()) {
     el.find('.fc-title').after(
     $('<div class="tzo"/>').text(event.start.format('Z'))
     );
     }
     },
     dayClick: function(date) {
     console.log('dayClick', date.format());
     },
     select: function(startDate, endDate) {
     console.log('select', startDate.format(), endDate.format());
     }
     });

     // load the list of available timezones, build the <select> options
     $.getJSON('php/get-timezones.php', function(timezones) {
     $.each(timezones, function(i, timezone) {
     if (timezone != 'UTC') { // UTC is already in the list
     $('#timezone-selector').append(
     $("<option/>").text(timezone).attr('value', timezone)
     );
     }
     });
     });

     // when the timezone selector changes, dynamically change the calendar option
     $('#timezone-selector').on('change', function() {
     $('#calendar').fullCalendar('option', 'timezone', this.value || false);
     });
     });
     */

</script>
</html>