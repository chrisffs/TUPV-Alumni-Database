<?php 
include "../conn.php";

if(isset($_POST['update_event'])) {
    $id = mysqli_real_escape_string($con, $_POST['id']);
    $event_date = mysqli_real_escape_string($con, $_POST['date_of_event']);
    $event_name = mysqli_real_escape_string($con, $_POST['event_name']);
    $start_time = mysqli_real_escape_string($con, $_POST['start_time']);
    $end_time = mysqli_real_escape_string($con, $_POST['end_time']);
    $venue = mysqli_real_escape_string($con, $_POST['venue_name']);

    $sql = "UPDATE events SET event_date = '$event_date', event_name = '$event_name', time_start = '$start_time', time_end = '$end_time', event_location = '$venue' WHERE id = '$id'";

    $query_run = mysqli_query($con, $sql);
    if($query_run) {
        echo '<script> alert("Data Updated")</script>';
        header("Location: events.php"); 
    } else {
        echo '<script> alert("Data Not Updated")</script>';
    }
}
?>


<!-- Modal -->
<div class="modal fade" id="editEventModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header bg-info text-light">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Event</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form class="" action="editEvent.php" method="post">
            <input type="hidden" name="id" id="id">
            <div class="row mb-3">
                <div class="col-12">
                <input type="text" class="py-4 form-control rounded-3 border-0 filter-input" onfocus="(this.type='date')" name="date_of_event" placeholder="Input Date of Event" id="event-edit-date" required>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-12">
                <input class="py-4 form-control fw-pp rounded-3 border-0 filter-input" type="text" placeholder="Event Name" aria-label="default input example" name="event_name" id="event-edit-name"  required>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-6">
                    <input type="text" id="start-edit-time" class="py-4 form-control fw-pp rounded-3 border-0 start_time" name="start_time" placeholder="Select start time" autocomplete="off"  required/>
                </div>
                <div class="col-6">
                    <input type="text" id="end-edit-time" class="py-4 form-control fw-pp rounded-3 border-0 end_time" name="end_time" placeholder="Select end time" autocomplete="off"  required/>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <input class="py-4 form-control fw-pp rounded-3 border-0 filter-input" id="event-edit-venue" type="text" placeholder="Location" aria-label="default input example" name="venue_name" maxlength="30" required>
                </div>
            </div>
        
      </div>
      <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-info" name="update_event">Update Event</button>
        </form>
      </div>
    </div>
  </div>
</div>

