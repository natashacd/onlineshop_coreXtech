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
            padding: 40px 30px;
            border-radius: 20px;
            box-shadow: 0 8px 24px rgba(0, 0, 0, 0.05);
            margin: 40px auto;
            width: 80%;
            max-width: 800px;
            text-align: center;
        }

        .h2_font {
            font-size: 32px;
            color: #D10024;
            margin-bottom: 30px;
            font-weight: bold;
        }

        .input_color {
            color: black;
            background-color: #fff;
            border: 1px solid #ccc;
            border-radius: 10px;
            padding: 12px;
            width: 40%;
            margin-bottom: 15px;
        }

        .btn-primary {
            background-color: #D10024;
            border: none;
            padding: 12px 36px;
            border-radius: 8px;
            font-weight: 600;
            color: #fff;
            font-size: 16px;

            transition: background-color 0.3s ease;
            text-align: center;
        }

        .btn-primary:hover {
            background-color: #a8001c;
        }

    table.table {
        background-color: #fff;
        color: #1E1F29;
        border-radius: 12px;
        width: 100%;
        overflow: hidden;
        box-shadow: 0 4px 16px rgba(0, 0, 0, 0.04);
        text-align:center;
        margin-top: 20px;
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

        .btn-danger {
            background-color: #D10024;
            border: none;
            padding: 8px 16px;
            border-radius: 8px;
            font-weight: 600;
            color: white;
            font-size: 14px;
            transition: background-color 0.3s ease;
        }

        .btn-danger:hover {
            background-color: #a8001c;
        }

        .content-wrapper {
            background-color: #f5f5f5 !important;
        }

        @media (max-width: 768px) {
            .div_center {
                padding: 30px 20px;
            }

            .h2_font {
                font-size: 28px;
            }

            .table {
                width: 90%;
            }

            .input_color {
                font-size: 14px;
            }

            .btn-primary {
                padding: 10px 20px;
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
                <h2 class="h2_font">Add Category</h2>
                <form action="{{url('/add_category')}}" method="POST">
                    @csrf
                    <input type="text" name="category" class="input_color" id="category" placeholder="Input Product Category">
                    <input type="submit" value="Add Category" name="submit" class="btn btn-primary">
                </form>
                <table class="table table-striped">
                    <tr>
                        <th>Category Name</th>
                        <th>Action</th>
                    </tr>
                    <tr>
                    @foreach ($data as $data)
                    <td>{{$data->category_name}}</td>
                    <td ><a href="{{url('delete_category', $data->id)}}" onclick= "return confirm('Are you sure you want to delete this data?')"class="btn btn-danger">Delete</a></td>
                    </tr>
                    @endforeach
                </table>
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