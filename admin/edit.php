<?php 
session_start();
include "../conn.php";

if (isset($_POST['update'])) {
    $tupv_id = mysqli_real_escape_string($con, $_POST['tupv_id']);
    $fname = mysqli_real_escape_string($con, $_POST['fname']);
    $lname = mysqli_real_escape_string($con, $_POST['lname']);
    $mi = mysqli_real_escape_string($con, $_POST['MI']);
    $bdate = mysqli_real_escape_string($con, $_POST['birthdate']);
    $cv = mysqli_real_escape_string($con, $_POST['cv']);
    $sex = mysqli_real_escape_string($con, $_POST['sex']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $pnum = mysqli_real_escape_string($con, $_POST['pnumber']);
    $add = mysqli_real_escape_string($con, $_POST['add']);
    $ygrad = mysqli_real_escape_string($con, $_POST['year-graduated']);
    $pgrad = mysqli_real_escape_string($con, $_POST['program-graduated']);
    $cprof = mysqli_real_escape_string($con, $_POST['c-prof']);
    $cname = mysqli_real_escape_string($con, $_POST['c-name']);
    $p_emp_status = mysqli_real_escape_string($con, $_POST['p-emp-status']);


    $sql = "UPDATE alumni_tbl SET lastname = '$lname', firstname = '$fname', mi = '$mi', birthdate = '$bdate', civil_status = '$cv', sex = '$sex', address = '$add', pnumber = '$pnum', email_address = '$email', year_graduated = '$ygrad', program_graduated = '$pgrad', current_profession = '$cprof', company_name = '$cname', present_employment_status = '$p_emp_status' WHERE tupv_id = '$tupv_id'";

    $query_run = mysqli_query($con, $sql);
    if($query_run) {
        $_SESSION['message_update'] = "Record Updated Successfully";
        header("Location: alumni-list.php"); 
        exit(0);
    } else {
        $_SESSION['message_update'] = "Update Record Failed";
        header("Location: alumni-list.php"); 
        exit(0); 
    }
}

?>


<div class="modal fade" id="exampleModalEdit" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content bg-light">
            <div class="modal-header bg-info align-items-center">
                <h1 class="modal-title fs-5 text-light" id="exampleModalLabel">Edit</h1>
                            
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="form mt-3">   
                    <form action="edit.php" method="POST" class="form-main">

                        <div class="tupv"> 
                            <label class="label fw-qs" for="tupv_id">TUPV-ID</label>
                            <input class="form-control" id="tupv-id-edit" name="tupv_id" type="text" aria-label="default input example" readonly>
                        </div>
                        <div class="names">
                                        <div class="fname me-1"> 
                                            <label class="label fw-qs" for="first-name">First Name</label>
                                            <input class="form-control" id="first-name-edit" name="fname" type="text" aria-label="default input example">
                                        </div>
                                        <div class="lname">
                                            <label class="label fw-qs" for="last-name">Last Name</label>
                                            <input class="form-control" id="last-name-edit" name="lname" type="text" aria-label="default input example">
                                        </div>
                                        <div class="mi ms-1"> 
                                            <label class="label fw-qs" for="MI">MI</label>
                                            <input class="form-control" id="MI-edit" name="MI" type="text" aria-label="default input example">
                                        </div>
                        </div>
                        <div class="status">
                                        <div class="form-group bdate mb-0 me-1">
                                            <label for="date" class="label fw-qs">Birthdate</label>
                                            <div class="">
                                                <div class="input-group date" id="datepicker-edit">
                                                    <input type="text" class="form-control" name="birthdate" id="birthdate-edit">
                                                    <span class="input-group-append">
                                                        <span class="input-group-text bg-white" style="cursor: pointer;">
                                                            <i class="fa-solid fa-calendar"></i>
                                                        </span>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="cv me-1">
                                            <label class="label fw-qs" for="cv">Civil Status</label>
                                            <select class="form-select" aria-label="Default select example" id="cv-edit" name="cv">
                                                <option selected hidden disabled>Select Civil Status</option>
                                                <option value="Single">Single</option>
                                                <option value="Married">Married</option>
                                                <option value="Widow/er">Widow/er</option>
                                                <option value="Seperated">Seperated</option>
                                            </select>
                                        </div>
                                        <div class="sex">
                                            <label class="label fw-qs" for="sex">Sex</label>
                                            <select class="form-select" aria-label="Default select example" id="sex-edit" name="sex">
                                                <option selected hidden disabled>Select Sex</option>
                                                <option value="Male">Male</option>
                                                <option value="Female">Female</option>
                                            </select>
                                        </div>
                        </div>
                                    
                        <div class="email mt-2">
                                        <label class="label fw-qs" for="email" class="form-label">Email Address</label>
                                        <input type="email" class="form-control" id="email-edit" name="email" required>
                        </div>
                        <div class="pnumber mt-2">
                                        <label class="label fw-qs" for="phone-number">Contact Number</label>
                                        <input class="form-control" id="phone-number-edit" name="pnumber" type="tel" aria-label="default input example" required>
                        </div>
                        <div class="address mt-2">
                                        <label class="label fw-qs" for="address">Permanent Address</label>
                                        <input class="form-control" id="address-edit" name="add" type="tel" aria-label="default input example" placeholder=>
                        </div>
                        <div class="form-group y-grad mb-0 me-1">
                        <label for="y-grad" class="label fw-qs">Year-Graduated</label>
                                        <div class="">
                                            <div class="input-group date" id="yearpicker-edit">
                                                <input type="text" class="form-control" name="year-graduated" id="year-graduated-edit"required>
                                                <span class="input-group-append">
                                                    <span class="input-group-text bg-white" style="cursor: pointer;">
                                                        <i class="fa-solid fa-calendar"></i>
                                                    </span>
                                                </span>
                                            </div>
                                        </div>
                        </div>
                        <div class="p-grad">
                        <label for="p-grad" class="label fw-qs">Program Graduated</label>
                                        <select class="form-select" aria-label="Default select example" name="program-graduated" id="program-graduated-edit">
                                            <option selected hidden disabled>Select Program</option>
                                            <option value="BS in Electronics Engineering">BS in Electronics Engineering</option>
                                            <option value="BS in Mechanical Engineering">BS in Mechanical Engineering</option>
                                            <option value="BS in Computer Engineering">BS in Computer Engineering</option>
                                            <option value="BS in Chemistry">BS in Chemistry</option>
                                            <option value="BS in Electrical Engineering">BS in Electrical Engineering</option>
                                            <option value="BS in Mechatronics Engineering">BS in Mechatronics Engineering</option>
                                            <option value="BS in Instrumentation and Control Engineering">BS in Instrumentation and Control Engineering</option>
                                            <option value="BET Major in Computer Engineering Technology">BET Major in Computer Engineering Technology</option>
                                            <option value="BET Major in Manufacturing Engineering Technology">BET Major in Manufacturing Engineering Technology</option>
                                            <option value="BET Major in Automotive Engineering Technology">BET Major in Automotive Engineering Technology</option>
                                            <option value="BET Major in Chemical Engineering Technology">BET Major in Chemical Engineering Technology</option>
                                            <option value="BET Major in Electrical Engineering Technology">BET Major in Electrical Engineering Technology</option>
                                            <option value="BET Major in Electronics Engineering Technology">BET Major in Electronics Engineering Technology</option>
                                        </select>
                        </div>
                        <div class="p-em me-1">
                        <label for="p-emp-status" class="label fw-qs">Present Employment Status</label>
                                        <select class="form-select" aria-label="Default select example" name="p-emp-status" id="p-emp-status-edit">
                                        <option selected hidden disabled>Select Employment Status</option>
                                        <option value="Permanent">Permanent</option>
                                        <option value="Temporary">Temporary</option>
                                        <option value="Contractual">Contractual</option>
                                        <option value="Casual">Casual</option>
                                        <option value="Self-Employed">Self-Employed</option>
                                        </select>
                        </div>
                        <div class="c-name">
                                        <label class="label fw-qs" for="c-name">Company Name</label>
                                        <input class="form-control" id="c-name-edit" name="c-name" type="text" aria-label="default input example">
                        </div>
                        <div class="c-prof"> 
                                        <label class="label fw-qs" for="c-prof">Job Description</label>
                                        <input class="form-control" id="c-prof-edit" name="c-prof" type="text" aria-label="default input example">
                        </div>
                        <div class="button-div ">
                                        <button type="submit" class="btn btn-info mt-3 w-100 rounded-3" name="update" value="Update">Update</button>
                        </div>            
                    </form>
                </div>
            </div>
            <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
            </div>
        </div>
    </div>
</div>

