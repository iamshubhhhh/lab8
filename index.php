<?php require_once './includes/header.php'; ?>

<h1 class="text-success fw-bold mb-4">CRUD OPERATIONS</h1>

<form method="post" action="receive.php" class="row g-3">
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">Email</label>
    <input type="email" class="form-control" id="inputEmail4" name="email" required>
  </div>

  <div class="col-12">
    <label for="inputAddress" class="form-label">Address</label>
    <input type="text" class="form-control" id="inputAddress" name="address" required>
  </div>

  <div class="col-md-6">
    <label for="inputCity" class="form-label">City</label>
    <input type="text" class="form-control" id="inputCity" name="city" required>
  </div>

  <div class="col-md-4">
    <label for="inputState" class="form-label">Province</label>
    <select id="inputState" class="form-select" name="province" required>
      <option selected disabled>Choose...</option>
      <option>Alberta</option>
      <option>British Columbia</option>
      <option>Manitoba</option>
      <option>New Brunswick</option>
      <option>Newfoundland and Labrador</option>
      <option>Northwest Territories</option>
      <option>Nova Scotia</option>
      <option>Nunavut</option>
      <option>Ontario</option>
      <option>Prince Edward Island</option>
      <option>Quebec</option>
      <option>Saskatchewan</option>
      <option>Yukon</option>
    </select>
  </div>

  <div class="col-md-2">
    <label for="inputZip" class="form-label">Postal Code</label>
    <input type="text" class="form-control" id="inputZip" name="postal_code" required>
  </div>

  <div class="col-12 d-flex justify-content-start mt-4">
    <button type="submit" style="background-color: #6200CC" class="btn btn-success px-5 me-3" >Submit</button>
  </div>

  <!-- View Records Button -->
  <div class="col-12">
    <a href="viewrecords.php" class="btn btn-info w-100" 
       style="background-color: #00cfff; font-weight: 500;">
       View Records
    </a>
  </div>

  <!-- Delete Record Button -->
  <div class="col-12">
    <div class="d-flex">
      <span class="bg-success text-white p-2" style="width: 25%; text-align: center; border-radius: 5px 0 0 5px;">
        Primary Key
      </span>
      <a href="deleterecord.php" class="btn w-100 text-white" 
         style="background-color: #dc3545; border-radius: 0 5px 5px 0;">
         To delete a record, click this button
      </a>
    </div>
  </div>
</form>

<?php require_once './includes/footer.php'; ?>
