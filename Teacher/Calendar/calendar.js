$(document).ready(function() {
    // Initialize FullCalendar
    $('#calendar').fullCalendar({
      editable: true,
      header: {
        left: 'prev,next today',
        center: 'title',
        right: 'month,agendaWeek'
      },
      events: [
        {
          title: 'Event 1',
          start: '2023-12-13T10:00:00',
          end: '2023-12-13T12:00:00'
        },
        // Add more events as needed
      ],
      eventClick: function(event, element) {
        // Handle event click for editing
        // You can add your custom code here to handle event editing
        alert('Event clicked: ' + event.title);
      },
      dayClick: function(date, jsEvent, view) {
        // Handle day click for adding new events
        // You can add your custom code here to handle adding new events
        alert('Clicked on: ' + date.format());
      }
    });
  });