$(document).ready(function () {

    $('#sidebarCollapse').on('click', function () {
        $('#sidebar').toggleClass('active');
    });

});
var month_name = function(dt){
    mlist = [ "January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December" ];
      return mlist[dt.getMonth()];
};
$(document).ready(function(){
    $("#event-date").change(function(){
        var eventDateIn = $(this).val();
        // var month = eventDate.toLocaleString('default', { month: 'long' });
        eventMonth = month_name(new Date(eventDateIn));
        eventDay = eventDateIn.slice(3,5);
        eventYear = eventDateIn.slice(6,10);

        $('#yearr').text(eventYear);
        $('#day').text(eventDay);
        $('#month').text(eventMonth);
        
    })
    $('#event-name').keyup(function() {
        let eventName = $('#event-name').val();
        $('#event_name').text(eventName);
    });
    $("#start_time").change(function(){
        var startTime = $(this).val();
        $('#timeFrom').text(startTime);
    });
    $("#end_time").change(function(){
        var endTime = $(this).val();
        $('#timeEnd').text(endTime);
    });
    $('#event_venue').keyup(function() {
        let eventName = $('#event_venue').val();
        $('#venue').text(eventName);
    });

})



