<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stadium Registration</title>
    <link href="{{ asset('bootstrap-5.0.2-dist/css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('css/form.css') }}" rel="stylesheet">
</head>
<body>
<section class="vh-100 gradient-custom">
  <div class="container py-5 h-100">
    <div class="row justify-content-center align-items-center h-100">
      <div class="col-12 col-lg-9 col-xl-7">
        <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
          <div class="card-body p-4 p-md-5">
            <h3 class="mb-4 pb-2 pb-md-0 mb-md-5 text-center">Add New Stadium</h3>
            <form method="POST" action="{{ route('stadium.store') }}" enctype="multipart/form-data">
              @csrf
              <div class="row">
                <div class="col-md-6 mb-4">
                  <div class="form-outline">
                    <input type="text" name="stadium_name" id="StadiumName" class="form-control form-control-lg" required />
                    <label class="form-label" for="StadiumName">Stadium Name</label>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6 mb-4 d-flex align-items-center">
                  <div class="form-outline datepicker w-100">
                    <input type="date" name="establishment" class="form-control form-control-lg" id="Establishment" required />
                    <label for="Establishment" class="form-label">Establishment Date</label>
                  </div>
                </div>
              </div>
              
              <div class="row">
                <div class="col-md-6 mb-4">
                  <div class="form-outline">
                    <input type="text" name="location" id="Location" class="form-control form-control-lg" required />
                    <label class="form-label" for="Location">Location</label>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6 mb-4">
                  <div class="form-outline">
                    <input type="number" name="capacity" id="Capacity" class="form-control form-control-lg" required />
                    <label class="form-label" for="Capacity">Total Capacity</label>
                  </div>
                </div>
              </div>

              <div class="mb-4">
                <label for="stadium_history" class="form-label">Stadium History</label>
                <textarea class="form-control" id="stadium_history" name="stadium_history" rows="3" placeholder="Enter stadium history"></textarea>
              </div>

              <div class="mb-4">
                <label for="picture" class="form-label">Stadium Picture</label>
                <input class="form-control" type="file" id="picture" name="picture">
              </div>

              <div class="mt-4 pt-2 text-center">
                <input class="btn btn-primary btn-lg" type="submit" value="Add" />
              </div>

            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<script src="{{ asset('bootstrap-5.0.2-dist/js/bootstrap.bundle.js') }}"></script>
</body>
</html>
