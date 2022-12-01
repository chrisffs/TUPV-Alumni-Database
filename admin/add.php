<?php 
require '../conn.php';
include "session.php";

if(isset($_POST['submit']))
{
    $tupv_id = mysqli_real_escape_string($con, $_POST['tupv-id']);
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


    $sql = "SELECT * FROM alumni_tbl WHERE tupv_id = '$tupv_id'";
    $data = mysqli_query($con, $sql) or die('error');

    if(mysqli_num_rows($data) > 0) {
        // $_SESSION['tupv_dup'] = "TUPV-ID has already been used!";
        echo "<script>alert('TUPV-ID has been already been used.')</script>";
        header("location: alumni-list.php"); 
    } else {
    
    


    $query = "INSERT INTO alumni_tbl (tupv_id,lastname,firstname,mi,birthdate,civil_status,sex,address,pnumber,email_address,year_graduated,program_graduated,current_profession,company_name,present_employment_status) VALUES ('$tupv_id','$lname','$fname','$mi','$bdate','$cv','$sex','$add','$pnum','$email','$ygrad','$pgrad','$cprof','$cname','$p_emp_status')";

    // echo $query_run = mysqli_query($con, $query);
    if($con->query($query) === TRUE) {
        // echo '<script> alert("Data Updated")</script>';
        // // $_SESSION['message'] = "Record Created Successfully";
        header("location: alumni-list.php"); 
    } else {
        echo '<script> alert("Data Not Updated")</script>';
        // $_SESSION['message'] = "Record Not Created";
        // header("Location: alumni-list.php"); 
        // exit(0); 
    }

}
}
?>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content bg-light">
            <div class="modal-header bg-tup align-items-center">
                            <h1 class="modal-title fs-5 text-light" id="exampleModalLabel">Add</h1>
                            
                            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="form mt-3">
                    <form action="alumni-list.php" method="POST" class="form-main">
                    <?php
            // if(isset($_SESSION['tupv_dup'])){
            //     $warn = $_SESSION['tupv_dup'];
            //     echo "<script>alert($warn)</script>";
            //     unset($_SESSION['tupv_dup']);
            // }
        ?>
                        <div class="tupv"> 
                            <label class="label fw-qs" for="tupv-id">TUPV-ID</label>
                            <input class="form-control" id="tupv-id" name="tupv-id" type="text" aria-label="default input example" required>
                        </div>
                        <div class="names">
                            <div class="fname me-1"> 
                                <label class="label fw-qs" for="first-name">First Name</label>
                                <input class="form-control" id="first-name" name="fname" type="text" aria-label="default input example">
                            </div>
                            <div class="lname">
                                <label class="label fw-qs" for="last-name">Last Name</label>
                                <input class="form-control" id="last-name" name="lname" type="text" aria-label="default input example">
                            </div>
                            <div class="mi ms-1"> 
                                <label class="label fw-qs" for="MI">MI</label>
                                <input class="form-control" id="MI" name="MI" type="text" aria-label="default input example">
                            </div>
                        </div>
                        <div class="status">
                            <div class="form-group bdate mb-0 me-1">
                                <label for="date" class="label fw-qs">Birthdate</label>
                                <div class="">
                                    <div class="input-group date" id="datepicker">
                                        <input type="text" class="form-control" name="birthdate">
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
                                <select class="form-select" aria-label="Default select example" id="cv" name="cv">
                                    <option selected hidden disabled>Select Civil Status</option>
                                    <option value="Single">Single</option>
                                    <option value="Married">Married</option>
                                    <option value="Widow/er">Widow/er</option>
                                    <option value="Seperated">Seperated</option>
                                </select>
                                </div>
                            <div class="sex">
                                <label class="label fw-qs" for="sex">Sex</label>
                                <select class="form-select" aria-label="Default select example" id="sex" name="sex">
                                    <option selected hidden disabled>Select Sex</option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                </select>
                            </div>
                        </div>
                        <div class="email mt-2">
                            <label class="label fw-qs" for="email" class="form-label">Email Address</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                        <div class="pnumber mt-2">
                            <label class="label fw-qs" for="phone-number">Contact Number</label>
                            <input class="form-control" id="phone-number" name="pnumber" type="tel" aria-label="default input example" required>
                        </div>
                        <div class="address mt-2">
                            <label class="label fw-qs" for="address">Permanent Address</label>
                            <input class="form-control" id="address" name="add" type="tel" aria-label="default input example" placeholder=>
                        </div>
                        <div class="form-group y-grad mb-0 me-1">
                            <label for="y-grad" class="label fw-qs">Year-Graduated</label>
                                <div class="">
                                    <div class="input-group date" id="yearpicker">
                                        <input type="text" class="form-control" name="year-graduated" required>
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
                                <select class="form-select" aria-label="Default select example" name="program-graduated">
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
                            <select class="form-select" aria-label="Default select example" name="p-emp-status">
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
                            <input class="form-control" id="c-name" name="c-name" type="text" aria-label="default input example">
                        </div>
                        <div class="c-prof"> 
                            <label class="label fw-qs" for="c-prof">Job Description</label>
                            <input class="form-control" id="c-prof" name="c-prof" type="text" aria-label="default input example">
                        </div>
                        <div class="button-div ">
                            <button type="submit" class="btn btn-success mt-3 w-100 rounded-3" name="submit">Submit Form</button>
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

