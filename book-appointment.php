<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $inputPatientName = $_POST['inputPatientName'];
    $inputDoctorName = $_POST['inputDoctorName'];
    $inputDepartmentName = $_POST['inputDepartmentName'];
    $inputPhone = $_POST['inputPhone'];
    $inputSymptoms = $_POST['inputSymptoms'];
    $inputDate = $_POST['inputDate'];
    echo "Patient Name: $inputPatientName<br>";
    echo "Doctor's Name: $inputDoctorName<br>";
    echo "Department's Name: $inputDepartmentName<br>";
    echo "Phone Number: $inputPhone<br>";
    echo "Symptoms: $inputSymptoms<br>";
    echo "Date: $inputDate<br>";
    echo "Appointment booked successfully!<br>";
}
?>


<section class="book_section layout_padding">
    <div class="container">
      <div class="row">
        <div class="col">
          <form action ="book-appointment.php" method="POST" >
            <h4>
              BOOK <span>APPOINTMENT</span>
            </h4>
            <div class="form-row ">
              <div class="form-group col-lg-4">
                <label for="inputPatientName">Patient Name </label>
                <input type="text" class="form-control" id="inputPatientName" name="inputPatientName" placeholder="">
              </div>
              <div class="form-group col-lg-4">
                <label for="inputDoctorName">Doctor's Name</label>
                <select name="inputDoctorName" class="form-control wide" id="inputDoctorName">
                  <option value="Normal distribution">Normal distribution </option>
                  <option value="Normal distribution">Normal distribution </option>
                  <option value="Normal distribution">Normal distribution </option>
                </select>
              </div>
              <div class="form-group col-lg-4">
                <label for="inputDepartmentName">Department's Name</label>
                <select name="inputDepartmentName" class="form-control wide" id="inputDepartmentName">
                  <option value="Normal distribution">Normal distribution </option>
                  <option value="Normal distribution">Normal distribution </option>
                  <option value="Normal distribution">Normal distribution </option>
                </select>
              </div>
            </div>
            <div class="form-row ">
              <div class="form-group col-lg-4">
                <label for="inputPhone">Phone Number</label>
                <input type="number" class="form-control" id="inputPhone" name="inputPhone" placeholder="XXXXXXXXXX">
              </div>
              <div class="form-group col-lg-4">
                <label for="inputSymptoms">Symptoms</label>
                <input type="text" class="form-control" id="inputSymptoms" name="inputSymptoms" placeholder="">
              </div>
              <div class="form-group col-lg-4">
                <label for="inputDate">Choose Date </label>
                <div class="input-group date" id="inputDate" data-date-format="mm-dd-yyyy">
                  <input type="text" class="form-control" readonly name="inputDate">
                  <span class="input-group-addon date_icon">
                    <i class="fa fa-calendar" aria-hidden="true"></i>
                  </span>
                </div>
              </div>
            </div>
            <div class="btn-box">
              <button type="submit" class="btn">Submit Now</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>