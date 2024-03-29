@extends('admin.blank')

@section('css_script_bottom')
<link rel="stylesheet" href="{{ asset('admin-assets/plugins/toastr/toastr.min.css') }}">
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
          var passwordField = $("#password");
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
        <h1> ADMIN &nbsp;</h1>
      </div>


      <div class="col-sm-6">
    
      </div><!-- /.col -->
      <div class="col-sm-10">

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
            <form method="POST" action="{{ route('save.super') }}">
              @csrf <!-- Untuk CSRF protection -->
              {{-- NAMA --}}
              <div class="form-group">
                  <label for="name">Nama Pengurus</label>
                  <input type="text" name="name" class="form-control" required placeholder="Masukkan Nama Pengurus">
                  @error('name')
                    <input type="text" name="name" class="form-control"required>
                    <p class="error">{{ $message }}</p>
                  @enderror
              </div>

        
                <div class="form-group">
                  <label for="username">Username</label> 
                  <input type="text" autocomplete="on" class="form-control @error('username') is-invalid @enderror" name="username" required  placeholder="Masukkan Username">
                  @if($errors->has('username'))
                    <span id="username-username-error" class="error invalid-feedback">{{ $errors->first('username') }}</span>
                  @endif
                </div>
        
                {{-- Password --}}
              <label for="password">Password</label>
              <div class="input-group mb-3">
                <input type="password" name="password" id="password" class="form-control" required>
                <div class="input-group-append">
                  <div class="input-group-text">
                      <span class="password-toggle fa fa-eye"></span>
                  </div>
                </div>
                @error('password')
                  <div class="error">{{ $message }}</div>
                @enderror
              </div>

              {{-- Kepengurusan --}}
              <div class="form-group">
                <label for="role">Role</label>
                  <select class="form-control select2" style="width: 100%;" name="role" placeholder="Pilih">
                    <option value="user" {{ old('role') == 'user' ? 'selected' : '' }}>User</option>
                    <option value="anggota" {{ old('role') == 'anggota' ? 'selected' : '' }}>Anggota</option>
                  </select>
                  @error('role')
                    <div class="error">{{ $message }}</div>
                  @enderror
            </div>

                  <button type="submit" class="btn btn-primary">Submit</button>
                  <a href="{{ url('/super') }}" class="btn btn-danger">Cancel</a>            
            </form>
          </div>
      </div>
  </div>
</div>

@endsection
