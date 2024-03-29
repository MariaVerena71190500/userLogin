@extends('admin.blank')

@section('css_script_bottom')
<link rel="stylesheet" href="{{ asset('admin-assets/plugins/select2/css/select2.min.css') }}">
<link rel="stylesheet" href="{{ asset( 'admin-assets/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css') }}">
@endsection
@section('js_script')
<script>
  var successMsg = "{{ session()->get('success') }}";
  var deleteMsg = "{{ session()->get('deleted') }}";
  var addSuccess = "{{ session()->get('Success') }}";
</script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
  $(document).ready(function() {
      $(".password-toggle").on("click", function() {
          var toggleValue = $(this).data("toggle");
          var passwordField = $("input[data-toggle='" + toggleValue + "']");
          var fieldType = passwordField.attr("type");
          if (fieldType === "password") {
              passwordField.attr("type", "text");
              $(this).removeClass("fa-eye").addClass("fa-eye-slash");
          } else {
              passwordField.attr("type", "password");
              $(this).removeClass("fa-eye-slash").addClass("fa-eye");
          }
      });
  });
</script>

@endsection

@section('content-header')
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1> ADMIN EDIT &nbsp;</h1>
      </div>


      <div class="col-sm-6">
    
      </div><!-- /.col -->
      <div class="col-sm-10">
        

              {{-- <button type="button" class="btn btn-outline-danger col-3" style="margin-top: 10px; font-size:20px;margin-right:2px; float: right;">
                <i class="fas fa-sign-out-alt">
                  </i> Keluar
            </button> --}}
        </a>
      </div>
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->
@endsection

@section('body')
<div class="row justify-content-md-center" >
  <div class="col-10 col-sm-6">
      <div class="card">
          <div class="card-body">
       {{-- @if($errors->any())
                {{ implode('', $errors->all('<div>:message</div>')) }}
            @endif --}}
            <form method="POST" action="{{ route('update.super') }}">
              {{-- @csrf <!-- Untuk CSRF protection --> --}}
              <input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />
              <input type="hidden" name="id_user"   value="{{ $data->id }}" />
              {{-- NAMA --}}
              <div class="form-group">
                  <label for="name">Nama Pengurus</label>
                  <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ isset($data->name) ? $data->name : old('name') }}"  required>
                  @if($errors->has('name'))
                    <span id="name-error" class="error invalid-feedback">{{ $errors->first('name') }}</span>
                  @endif
              </div>

              {{-- username --}}
              <div class="form-group">
                <label for="username">Username</label>
                <input type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ isset($data->username) ? $data->username : old('username') }}" required  placeholder="Masukkan Username">
                @if($errors->has('username'))
                  <span id="username-username-error" class="error invalid-feedback">{{ $errors->first('username') }}</span>
                @endif
              </div>
            
              <label for="current_password">Password</label>
              <div class="input-group mb-3">
                <input type="password" name="current_password" id="current_password" class="form-control  @error('current_password') is-invalid @enderror" placeholder="Masukkan Password Lama" data-toggle="form1" required>
                <div class="input-group-append">
                  <span class="input-group-text">
                      <i class="password-toggle fa fa-eye" data-toggle="form1"></i>
                  </span>
                </div>
                @if($errors->has('current_password'))
                  <span id="current_password-error" class="error invalid-feedback">{{ $errors->first('current_password') }}</span>
                @endif
              </div>
       

              <label for="new_password">Password Baru</label>
              <div class="input-group mb-3">
                <input type="password" name="new_password" id="new_password" class="form-control  @error('new_password') is-invalid @enderror" placeholder="Masukkan Password Baru" data-toggle="form2" required>
                <div class="input-group-append">
                  <span class="input-group-text">
                      <i class="password-toggle fa fa-eye " data-toggle="form2"></i>
                  </span>
                </div>
                @if($errors->has('new_password'))
                  <span id="new_password-error" class="error invalid-feedback">{{ $errors->first('new_password') }}</span>
                @endif
              </div>

                  <button type="submit" class="btn btn-primary">Submit</button>
                  <a href="{{ url('/super') }}" class="btn btn-danger">Cancel</a>            
            </form>
          </div>
      </div>
  </div>
</div>

@endsection
