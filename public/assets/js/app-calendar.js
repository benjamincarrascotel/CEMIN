(()=>{function e(e,t,n){return t in e?Object.defineProperty(e,t,{value:n,enumerable:!0,configurable:!0,writable:!0}):e[t]=n,e}document.addEventListener("DOMContentLoaded",(function(){var t,n=document.getElementById("external-events-list");new FullCalendar.Draggable(n,{itemSelector:".fc-event",eventData:function(t){var n;return e(n={title:t.innerText.trim()},"title",t.innerText),e(n,"className",t.className+" overflow-hidden "),n}});var a=document.getElementById("calendar"),r=moment().format("YYYY"),s=moment().format("MM"),i={id:1,events:[{id:"1",start:r+"-"+s+"-04T10:00:00",end:r+"-"+s+"-06T15:00:00",title:"Music Festival",description:"All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary",className:"bg-info-transparent"},{id:"2",start:r+"-"+s+"-15T10:00:00",end:r+"-"+s+"-17T15:00:00",title:"Rocho Party",description:"the Internet tend to repeat predefined chunks as necessary",className:"bg-info-transparent"}]},d={id:2,events:[{id:"2",start:r+"-"+s+"-01",end:r+"-"+s+"-03",title:"Birthday Celebrations",description:"the Internet tend to repeat predefined chunks as necessary",className:"bg-success-transparent"},{id:"2",start:r+"-"+s+"-20",end:r+"-"+s+"-22",title:"Spruko Birthday",description:"the Internet tend to repeat predefined chunks as necessary",className:"bg-success-transparent"},{id:"3",start:r+"-"+s+"-13",end:r+"-"+s+"-14",title:"RC Birthday",description:"the Internet tend to repeat predefined chunks as necessary",className:"bg-success-transparent"}]},l={id:3,events:[{id:"1",start:r+"-"+s+"-05",end:r+"-"+s+"-08",title:"Festival Day",className:"bg-danger-transparent"},{id:"2",start:r+"-"+s+"-18",end:r+"-"+s+"-19",title:"Memorial Day",className:"bg-danger-transparent"},{id:"3",start:r+"-"+s+"-25",end:r+"-"+s+"-26",title:"Diwali",className:"bg-danger-transparent"}]},c={id:4,events:[{id:"1",start:r+"-"+s+"-07",end:r+"-"+s+"-09",title:"My Rest Day",className:"bg-warning-transparent"},{id:"2",start:r+"-"+s+"-29",end:r+"-"+s+"-31",title:"My Rest Day",className:"bg-warning-transparent"}]},o=new FullCalendar.Calendar(a,(e(t={headerToolbar:{left:"prev,next today",center:"title",right:"dayGridMonth,timeGridWeek,timeGridDay"},navLinks:!0,businessHours:!0,editable:!0,selectable:!0,selectMirror:!0,droppable:!0,select:function(e){var t=prompt("Event Title:");t&&o.addEvent({title:t,start:e.start,end:e.end,allDay:e.allDay}),o.unselect()},eventClick:function(e){confirm("Are you sure you want to delete this event?")&&e.event.remove()}},"editable",!0),e(t,"eventSources",[i,d,l,c]),t));o.render()}))})();