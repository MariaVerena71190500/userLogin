

@extends('admin.blank')

@section('css_script_bottom')
<link rel="stylesheet" href="{{ asset('admin-assets/plugins/toastr/toastr.min.css') }}">
<link rel="stylesheet" href="{{ asset('admin-assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ asset('admin-assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ asset('admin-assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
@endsection
<style>
    table.dataTable th {
    font-size: 14px;
    text-align: center;
    font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
  }
  table.dataTable td {
    font-size: 14px;
    text-align: center;
    font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
  }
</style>
@section('js_script')
<script>
    var successMsg = "{{ session()->get('success') }}";
    var deleteMsg = "{{ session()->get('deleted') }}";
    var addSuccess = "{{ session()->get('Success') }}";
</script>
<script src="{{ asset('admin-assets/plugins/toastr/toastr.min.js') }}"></script>
<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script src="{{ asset('admin-assets/plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('admin-assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('admin-assets/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('admin-assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
<script src="{{ asset('admin-assets/plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('admin-assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
<script src="{{asset('js/password/index.js')}}"></script>
@endsection

@section('content-header')
<div class="content-header">
  <div class="container-fluid">
    <div class="card">
      <div class="card-body">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">{{ $title }} &nbsp;</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item active">Pengurus</li>
            </ol>
          </div><!-- /.col -->
          <div class="col-sm-5">
            <a href="{{ route('add.super')  }}">
                <button type="button" class="btn btn-outline-primary btn-block col-3" style="margin-top: 10px">
                    <i class="fa fa-plus">
                        </i> Tambah
                </button>
            </a>
          </div>
        </div>
      </div>
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->
@endsection

@section('body')
    <div class="row" >
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <table class="table password order-column" style="width: 100%;">
          
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Pengurus</th>
                                <th>Username</th>
                                <th>Kepengurusan</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection
