<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>coreXtech Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="admin/assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="admin/assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="admin/assets/vendors/jvectormap/jquery-jvectormap.css">
    <link rel="stylesheet" href="admin/assets/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="admin/assets/vendors/owl-carousel-2/owl.carousel.min.css">
    <link rel="stylesheet" href="admin/assets/vendors/owl-carousel-2/owl.theme.default.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="admin/assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="admin/assets/images/favicon.png" />
    <style type="text/css">
        body {
            background-color: #f5f5f5;
            color: #1E1F29;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            line-height: 1.6;
        }

        .div_center {
            background-color: #ffffff;
            padding: 50px 30px;
            border-radius: 20px;
            box-shadow: 0 8px 24px rgba(0, 0, 0, 0.05);
            margin: 40px auto;
            width: 90%;
            max-width: 1000px;
            text-align: center;
        }

        .h2_font {
            font-size: 32px;
            color: #D10024;
            margin-bottom: 30px;
            font-weight: bold;
        }

        label {
            font-weight: 600;
            color: #1E1F29;
            margin-bottom: 8px;
            display: block;
        }

        .input_color,
        select {
            background-color: #fff;
            border: 1px solid #ccc;
            border-radius: 10px;
            padding: 10px 15px;
            width: 100%;
            color: #1E1F29;
            transition: 0.2s;
        }

        .input_color:focus,
        select:focus {
            border-color: #D10024;
            box-shadow: 0 0 0 2px rgba(209, 0, 36, 0.2);
            outline: none;
        }

        input[type="file"] {
            background-color: #fff;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 10px;
            width: 100%;
        }

        .btn-primary {
            background-color: #D10024;
            border: none;
            padding: 12px 36px;
            border-radius: 8px;
            font-weight: 600;
            color: #fff;
            font-size: 16px;
            margin-top: 20px;
            transition: background-color 0.3s ease;
            text-align: center;
        }

        .btn-primary:hover {
            background-color: #a8001c;
        }

        .alert-success {
            background-color: #e7f0ff;
            border-left: 4px solid #D10024;
            color: #1E1F29;
            font-weight: 500;
        }

        .content-wrapper {
            background-color: #f5f5f5 !important;
        }


        @media (max-width: 768px) {
            label {
            width: 100%;
            margin-bottom: 6px;
            }

            .row .col-md-6 {
            flex: 0 0 100%;
            max-width: 100%;
            }

            .div_center {
            padding: 30px 20px;
            }
        }
        </style>

</head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
        @include('admin.sidebar')
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_navbar.html -->
        @include('admin.header')
        <!-- partial -->
        <div class="main-panel">
            <div class="content-wrapper">
                @if(session()->has('message'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{session()->get('message')}}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif

                    <div class="div_center">
            <h2 class="h2_font">Add Product</h2>
            <form action="{{url('add_product')}}" method="POST" enctype="multipart/form-data">
                @csrf
            <div class="row justify-content-center">
            <div class="col-md-6 mb-3">
                <label for="name" >Product Name</label>
                <input type="text" class="input_color" name="name" id="name" placeholder="Name of the Product">
            </div>
            <div class="col-md-6 mb-3">
                <label for="price" >Product Price</label>
                <input type="number" class="input_color" name="price" id="price" placeholder="Price of the Product">
            </div>
            <div class="col-md-6 mb-3">
                <label for="discount" >Product Discount</label>
                <input type="number" class="input_color" name="discount" id="discount" placeholder="Discount of the Product">
            </div>
            <div class="col-md-6 mb-3">
                <label for="description" >Product Description</label>
                <input type="text" class="input_color" name="description" id="description" placeholder="Description of the Product">
            </div>
            <div class="col-md-6 mb-3">
            <label for="category">Product Category</label>
            <select name="category" id="category" class="input_color">
                <option value="" disabled selected>Select a Category</option>
                @foreach($category as $cat)
                    <option value="{{ $cat->id }}">{{ $cat->category_name }}</option>
                @endforeach
            </select>
                </select>
            </div>
            <div class="col-md-6 mb-3">
                <label for="image" >Product Image</label>
                <input type="file" name="image" id="image">
            </div>
            </div>
            <input type="submit" class = "btn btn-primary" value="Add Product">
        </form>
        </div>

                </form> 
                </div>
            </div>
         </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
        @include('admin.script')
  </body>
</html>