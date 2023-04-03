//________ FullCalendar
document.addEventListener('DOMContentLoaded', function() {
	var containerEl = document.getElementById('external-events-list');
	new FullCalendar.Draggable(containerEl, {
	  itemSelector: '.fc-event',
	  eventData: function(eventEl) {
		return {
		  title: eventEl.innerText.trim(),
		title: eventEl.innerText,
		className: eventEl.className + ' overflow-hidden '
		}
	  }
	});
	var calendarEl = document.getElementById('calendar');
	
// sample calendar events data
'use strict'
var curYear = moment().format('YYYY');
var curMonth = moment().format('MM');
// Calendar Event Source
var sptCalendarEvents = {
	id: 1,
	events: [ {
		id: '1',
		start: curYear + '-' + curMonth + '-04T10:00:00',
		end: curYear + '-' + curMonth + '-06T15:00:00',
		title: 'Music Festival',
		description: 'All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary',
		className: "bg-info-transparent"
	},{
		id: '2',
		start: curYear + '-' + curMonth + '-15T10:00:00',
		end: curYear + '-' + curMonth + '-17T15:00:00',
		title: 'Rocho Party',
		description: 'the Internet tend to repeat predefined chunks as necessary',
		className: "bg-info-transparent"
	}]
};
// Birthday Events Source
var sptBirthdayEvents = {
	id: 2,
	events: [{
		id: '2',
		start: curYear + '-' + curMonth + '-01',
		end: curYear + '-' + curMonth + '-03',
		title: 'Birthday Celebrations',
		description: 'the Internet tend to repeat predefined chunks as necessary',
		className: "bg-success-transparent"
	},{
		id: '2',
		start: curYear + '-' + curMonth + '-20',
		end: curYear + '-' + curMonth + '-22',
		title: 'Spruko Birthday',
		description: 'the Internet tend to repeat predefined chunks as necessary',
		className: "bg-success-transparent"
	},{
		id: '3',
		start: curYear + '-' + curMonth + '-13',
		end: curYear + '-' + curMonth + '-14',
		title: 'RC Birthday',
		description: 'the Internet tend to repeat predefined chunks as necessary',
		className: "bg-success-transparent"
	}]
};
var sptHolidayEvents = {
	id: 3,
	events: [{
		id: '1',
		start: curYear + '-' + curMonth + '-05',
		end: curYear + '-' + curMonth + '-08',
		title: 'Festival Day',
		className: "bg-danger-transparent"
	}, {
		id: '2',
		start: curYear + '-' + curMonth + '-18',
		end: curYear + '-' + curMonth + '-19',
		title: 'Memorial Day',
		className: "bg-danger-transparent"
	}, {
		id: '3',
		start: curYear + '-' + curMonth + '-25',
		end: curYear + '-' + curMonth + '-26',
		title: 'Diwali',
		className: "bg-danger-transparent"
	}]
};
var sptOtherEvents = {
	id: 4,
	events: [{
		id: '1',
		start: curYear + '-' + curMonth + '-07',
		end: curYear + '-' + curMonth + '-09',
		title: 'My Rest Day',
		className: "bg-warning-transparent"
	}, {
		id: '2',
		start: curYear + '-' + curMonth + '-29',
		end: curYear + '-' + curMonth + '-31',
		title: 'My Rest Day',
		className: "bg-warning-transparent"
	}]
};


	var calendar = new FullCalendar.Calendar(calendarEl, {
		headerToolbar: {
			left: 'prev,next today',
			center: 'title',
			right: 'dayGridMonth,timeGridWeek,timeGridDay'
		  },
	   navLinks: true, // can click day/week names to navigate views
	  businessHours: true, // display business hours
	  editable: true,
	  selectable: true,
	  selectMirror: true,
	  droppable: true, // this allows things to be dropped onto the calendar
		  	
	  select: function(arg) {
		var title = prompt('Event Title:');
		if (title) {
		  calendar.addEvent({
			title: title,
			start: arg.start,
			end: arg.end,
			allDay: arg.allDay
		  })
		}
		calendar.unselect()
	  },
	  eventClick: function(arg) {
		if (confirm('Are you sure you want to delete this event?')) {
		  arg.event.remove()
		}
	  },

	  editable: true,
		eventSources: [sptCalendarEvents, sptBirthdayEvents, sptHolidayEvents, sptOtherEvents,],
		
	});
	calendar.render();
});	