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
    }

    .div_center {
        background-color: #ffffff;
        padding: 40px 30px;
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
        font-weight: bold;
        margin-bottom: 30px;
    }

    table.table {
        background-color: #fff;
        color: #1E1F29;
        border-radius: 12px;
        width: 100%;
        overflow: hidden;
        box-shadow: 0 4px 16px rgba(0, 0, 0, 0.04);
    }

    table.table th {
        background-color: #f0f0f0;
        font-weight: 600;
        color: #1E1F29;
        text-align: center;
        vertical-align: middle;
        padding: 12px;
    }

    table.table td {
        vertical-align: middle;
        text-align: center;
        padding: 12px;
    }

    .btn-success {
        background-color: #4CAF50;
        border: none;
        padding: 8px 18px;
        font-weight: 600;
        border-radius: 8px;
        transition: 0.3s;
        color: white;
    }

    .btn-success:hover {
        background-color: #43A047;
    }

    .btn-danger {
        background-color: #D10024;
        border: none;
        padding: 8px 18px;
        font-weight: 600;
        border-radius: 8px;
        transition: 0.3s;
        color: white;
    }

    .btn-danger:hover {
        background-color: #a8001c;
    }

    .alert-success {
        background-color: #e7f0ff;
        border-left: 4px solid #D10024;
        color: #1E1F29;
        font-weight: 500;
    }

    .img_size {
        width: 100px;
        height: auto;
        border-radius: 8px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
    }

    .content-wrapper {
        background-color: #f5f5f5 !important;
    }

    @media (max-width: 768px) {
        .div_center {
            padding: 30px 15px;
        }

        .h2_font {
            font-size: 28px;
        }

        table.table {
            font-size: 14px;
        }

        table.table th, table.table td {
            padding: 10px;
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
            <h2 class="h2_font">Manage Product</h2>
            <table class="table table-striped">
            <tr>
                <th>Image</th>
                <th>ID</th>
                <th>Product Name</th>
                <th>Description</th>
                <th>Price</th>
                <th>Discounted Price</th>
                <th>Action</th>
            </tr>
            @foreach($product as $product)
            <tr>  
                <td style="text-align: center;">
                    <img src="product/{{$product->image}}" alt="{{$product->product_name}}" style="width: 100px; height: auto; display: block; margin: 0 auto;">
                </td>
                <td>{{$product->id}}</td>
                <td>{{$product->product_name}}</td>
                <td>{{$product->description}}</td>
                <td>{{$product->price}}</td>
                <td>{{$product->discounted_price}}</td>
                <td>
                    <a href="{{url('update_product', $product->id)}}" class="btn btn-success">Update</a>
                    <a href="{{url('delete_product', $product->id)}}" onclick="return confirm('Are you sure you want to delete this product?')" class="btn btn-danger">Delete</a>
                </td>
            </tr>

            @endforeach
        </table>

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