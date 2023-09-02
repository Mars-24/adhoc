@extends('backend.layouts.master')

@section('content')
<div class="content-wrapper">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Ajouter Administrateur</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{route('admin')}}">Accueil</a></li>
                    <li class="breadcrumb-item"><a href="{{route('admin.index')}}">Administrateur</a></li>
                    <li class="breadcrumb-item active">Ajouter Administrateur</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{$error}}</li>
                            @endforeach
                        </ul>
                    </div>

                    @endif

                </div>
                <div class="col-md-12">
                    <!-- general form elements -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Ajouter Administrateur</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="{{route('admin.store')}}" method="POST">
                            @csrf
                            <div class="card-body">
                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group">
                                        <label>Nom complet <span class="text-danger">*</span></label>
                                        <input class="form-control" type="text" name="full_name" placeholder="Full name"
                                            value="{{old('full_name')}}">
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input class="form-control" type="email" name="email"
                                            placeholder="Email Address" value="{{old('email')}}">
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group">
                                        <label>Phone</label>
                                        <input class="form-control" type="text" name="phone" placeholder="Phone"
                                            value="{{old('phone')}}">
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group">
                                        <label>Adresse</label>
                                        <input class="form-control" type="text" name="address" placeholder="Address"
                                            value="{{old('address')}}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div id="parent_cat_div" class="col-lg-12 col-md-12 col-sm-12 " >
                                        <label for="parent_id">Role</label>
                                        <select name="role" id="role" class="form-control show-tick">
                                            <option value="">-- Role de l'Administrateur --</option>
                                                <option value="super_utilisateur" >Super_utilisateur</option>
                                                <option value="limité" >Limité</option>
                                       </select>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group">
                                        <label>Mot de passe</label>
                                        <input class="form-control" type="password" name="password"
                                            placeholder="Password" value="{{old('password')}}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                        <label for="status">Status</label>
                                        <select name="status" id="" class="form-control show-tick">
                                            <option value="">-- Status --</option>
                                            <option value="active" {{old('status')=='active' ? 'selected' :''}}>Active
                                            </option>
                                            <option value="inactive" {{old('status')=='inactive' ? 'selected' :''}}>
                                                Inactive</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Creer</button>
                            </div>
                        </form>
                    </div>

                </div>

            </div>
        </div><!-- /.container-fluid -->
    </section>
    @endsection

    @section('script')
    <script src="{{asset('vendor/laravel-filemanager/js/stand-alone-button.js')}}"></script>

    <script>
        $('#lfm').filemanager('image');
    </script>

    <script src="{{asset('plugins/jquery/jquery.min.js')}}"></script>

    <!-- Bootstrap 4 -->
    <script src="{{asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    <!-- bs-custom-file-input -->
    <script src="{{asset('plugins/bs-custom-file-input/bs-custom-file-input.min.js')}}"></script>
    <!-- AdminLTE App -->
    <script src="{{asset('backend/dist/js/adminlte.min.js')}}"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="{{asset('backend/dist/js/demo.js')}}"></script>
    <!-- Page specific script -->
    <script>
        <!-- Page specific script
        -->
    <script>
        $(function () {
  bsCustomFileInput.init();
});
    </script>
    @endsection
