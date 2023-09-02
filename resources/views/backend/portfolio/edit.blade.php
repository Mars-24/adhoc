@extends('backend.layouts.master')

@section('content')


<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Editer Banniere</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('admin')}}">Accueil</a></li>
                        <li class="breadcrumb-item"><a href="{{route('banner.index')}}">Banniere</a></li>
                        <li class="breadcrumb-item active">Editer Bannieres</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.container-fluid -->

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
                            <h3 class="card-title">Edit Banniere</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="{{route('banner.update',$banner->id)}}" method="POST">
                            @csrf
                            @method('patch')
                            <div class="card-body">
                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group">
                                        <label>Titre</label>
                                        <input class="form-control" type="text" name="title" placeholder="Title"
                                            value="{{$banner->title}}">
                                    </div>
                                </div>

                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group">
                                        <label>Photo</label>

                                        <div class="input-group">
                                            <span class="input-group-btn">
                                                <a id="lfm" data-input="thumbnail" data-preview="holder"
                                                    class="btn btn-primary">
                                                    <i class="fa fa-picture-o"></i> Choose
                                                </a>
                                            </span>
                                            <input id="thumbnail" class="form-control" type="text" name="photo"
                                                value="{{$banner->photo}}">
                                        </div>
                                        <div id="holder" style="margin-top:15px;max-height:100px;"></div>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group">
                                        <label>Description</label>
                                        <textarea class="form-control" rows="4" name="description"
                                            placeholder="Write some text ...">{{$banner->description}}</textarea>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                        <label for="">Condition <span class="text-danger">*</span></label>
                                        <select name="condition" id="" class="form-control show-tick">
                                            <option value="">-- Conditions --</option>
                                            <option value="banner" {{$banner->condition=='banner' ?
                                                'selected':''}}>Banner</option>
                                            <option value="promo" {{$banner->condition=='promo' ?
                                                'selected':''}}>Promote</option>
                                        </select>
                                    </div>
                                </div>

                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Update</button>
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

    <script src="{{asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <!-- bs-custom-file-input -->
    <script src="{{asset('plugins/bs-custom-file-input/bs-custom-file-input.min.js')}}"></script>
    <!-- AdminLTE App -->
    <script src="{{asset('backend/dist/js/adminlte.min.js')}}"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="{{asset('backend/dist/js/demo.js')}}"></script>
    <!-- Page specific script -->
    <script>
        $(function () {
            bsCustomFileInput.init();
        });
    </script>

    @endsection
