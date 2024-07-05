<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Product</title>
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
            <h3 class="mb-4 pb-2 pb-md-0 mb-md-5 text-center">Add New Product</h3>
            <form method="POST" action="{{ route('product.store') }}" enctype="multipart/form-data">
              @csrf
              <div class="row">
                <div class="col-md-6 mb-4">
                  <div class="form-outline">
                    <input type="text" name="product_name" id="ProductName" class="form-control form-control-lg" required />
                    <label class="form-label" for="ProductName">Product Name</label>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6 mb-4">
                  <div class="form-outline">
                    <input type="text" name="brand" id="Brand" class="form-control form-control-lg" required />
                    <label class="form-label" for="Brand">Brand</label>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-12 mb-4">
                  <select class="form-select form-select-lg mb-3" name="product_type" aria-label="Product Type" required>
                    <option value="" disabled selected>Product Type</option>
                    <option value="Bat">Bat</option>
                    <option value="Ball">Ball</option>
                    <option value="Batting Gloves">Batting Gloves</option>
                    <option value="WK Gloves">WK Gloves</option>
                    <option value="Batting Pads">Batting Pads</option>
                    <option value="Helmet">Helmet</option>
                    <option value="Jursey">Jursey</option>
                    <option value="Guard">Guard</option>
                    <option value="Bag">Bag</option>
                  </select>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6 mb-4">
                  <div class="form-outline">
                    <input type="number" name="price" id="Price" class="form-control form-control-lg" required />
                    <label class="form-label" for="Price">Price</label>
                  </div>
                </div>
              </div>

              <div class="mb-4">
                <label for="product_details" class="form-label">Product Details</label>
                <textarea class="form-control" id="ProductDetails" name="product_details" rows="3" placeholder="Enter Product Details"></textarea>
              </div>

              <div class="mb-4">
                <label for="picture" class="form-label">Product Picture</label>
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
