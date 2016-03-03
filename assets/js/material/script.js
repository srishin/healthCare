(function () {
	$.material.init();
	$.material.ripples();
	$.material.input();
	$.material.checkbox();
	$.material.radio();
	
//Board Menu
$('.menu li').click(function(){
	if (!$(this).data("target")) return;
	if ($(this).is(".active")) return;
	$(".menu li").not($(this)).removeClass("active");
	$(this).addClass('active');
	$('canvas.canvas').css({'cursor':'url("icons/'+$(this).data('target')+'.svg"),auto'});
});

//Chat
$('a.close-chat').click(function(){
	$('.chat-box').addClass('closed');
});


$('.chat-btn').click(function(){
	$('.chat-box').removeClass('closed');
	var chatList = $('.dl-chat');
	chatList.scrollTop(chatList.prop('scrollHeight'));
});
//Profile
// Datepicker
$('#datetimepicker1').datetimepicker({
	viewMode: 'years',
	format: 'YYYY',
	maxDate: new Date()
});
$('.datetime').datetimepicker();
// Academics
$('.timeline-add,.save-item').click(function(){
	$(this).toggleClass('btn-open');
	$('div.timeline-form').fadeToggle('slow');
});

$('a.delete-event').click(function(e){
	$(this).parent().fadeOut("slow");
});
// Fullcalendar
// $('#calendar').fullCalendar({
// 	defaultDate: new Date(),
// 	selectable: true,
// 	selectConstraint : { dow: [ 1, 2, 3, 4 ] },
// 	businessHours:{
// 	    start: '00:00', // a start time (10am in this example)
// 	    end: '23:59', // an end time (6pm in this example)
// 	    dow: [ 1, 2, 3, 4 ]    // days of week. an array of zero-based day of week integers (0=Sunday)
// 	    // (Monday-Thursday in this example)
// 	},
// 	select: function(start, end) {
// 		var eventData;
// 		if (typeof(title) != null && start > new Date()) {
// 			eventData = {
// 				title: 'Day choosen',
// 				start: start,
// 				end: end
// 			};
// 					$('#calendar').fullCalendar('renderEvent', eventData, true); // stick? = true
// 				}
// 				$('#calendar').fullCalendar('unselect');
// 			}

// 		});

})();