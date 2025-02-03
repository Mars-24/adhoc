@extends('backend.layouts.master')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Ajouter un Sujet</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('admin')}}">Accueil</a></li>
                        <li class="breadcrumb-item active">Blog</li>
                        <li class="breadcrumb-item active">Ajouter un Sujet</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </div>


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
                            <h3 class="card-title">Ajouter un Sujet</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="{{route('blog.store')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group">
                                        <label>Titre</label>
                                        <input class="form-control" type="text" name="title" placeholder="Title"
                                           >
                                    </div>
                                </div>

                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group">
                                        <label class="custom-file-upload">Photo</label>
                                        <div class="input-group">
                                            <input id="thumbnail" class="form-control" type="file" name="image">
                                        </div>
                                        <div id="holder" style="margin-top:15px;max-height:100px;"></div>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group">
                                        <label>Message</label>
                                        <textarea id="compose-textarea" style="height: 2000px" class="form-control" rows="4" name="message"
                                            placeholder="Write some text ..."></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                        <label for="" class="form-label select-label">Tags <span class="text-danger">*</span></label>
                                        <select name="tags[]" id="" class="select form-control show-tick" multiple>
                                            @foreach ($tags as $tag )
                                            <option value="{{$tag->id}}" >{{$tag->title}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                        <label for="">Category <span class="text-danger">*</span></label>
                                        <select name="category_id" id="" class="form-control show-tick">
                                            <option value="">-- Category --</option>
                                            @foreach ($categories as $categorie )
                                            <option value="{{$categorie->id}}">{{$categorie->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                             
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Enregistrer</button>
                            </div>
                        </form>
                    </div>

                </div>

            </div>
        </div><!-- /.container-fluid -->
    </section>
</div>
@endsection

@section('script')



<script src="{{asset('plugins/jquery/jquery.min.js')}}"></script>

<!-- Bootstrap 4 -->
<script src="{{asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

<!-- bs-custom-file-input -->
<script src="{{asset('plugins/bs-custom-file-input/bs-custom-file-input.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('backend/dist/js/adminlte.min.js')}}"></script>
<script src="{{asset('plugins/summernote/summernote-bs4.min.js')}}"></script>

<!-- AdminLTE for demo purposes -->
<script src="{{asset('backend/dist/js/demo.js')}}"></script>
<!-- Page specific script -->
<script>
    $(function () {
      //Add text editor
      $('#compose-textarea').summernote({
  height: 150,   //set editable area's height
})
    })
  </script>
<script>
    $(function () {
        bsCustomFileInput.init();
    });
</script>
@endsection
