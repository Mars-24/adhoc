@extends('backend.layouts.master')
@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">

            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Administrateur</h1>
                    <a class="btn btn-sm btn-outline-secondary" href="{{route ('admin.create')}}"><i
                            class="fas fa-plus"></i> Creer Administrateur</a>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('admin')}}">Accueil</a></li>
                        <li class="breadcrumb-item active">Administrateur</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-12">
        @include('backend.layouts.notification')
    </div>
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Administrateur avec des fonctionnalités minimales et un style de
                                survol
                            </h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example2" class="table table-bordered table-hover" width="100%"> 
                                <thead>
                                    <tr>
                                        <th>$.N.</th>
                                        <th>Nom Complet</th>
                                        <th>Adresse</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>Role</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($admins as $item)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$item->full_name}} </td>
                                        <td>
                                            {{ $item->address }}
                                        </td>
                                        <td>{{$item->email}} </td>
                                        <td>{{$item->phone}} </td>
                                        <td>{{$item->role}} </td>
                                        <td>
                                            <input type="checkbox" name="toogle" value="{{$item->id}}"
                                                data-toggle="switchbutton" {{$item->status=='active' ? 'checked': ''}}
                                            data-onlabel="active" data-offlabel="Inactive" data-size="sm"
                                            data-onstyle="success" data-offstyle="danger">
                                        </td>
                                        <td>
                                            <a href="javascript:void(0);" data-toggle="modal"
                                                data-target="#userID{{$item->id}}" title="view" data-placement="bottom"
                                                class="float-left btn btn-sm btn-outline-secondary"><i
                                                    class="fas fa-eye"></i></a>

                                            <a href="{{route('admin.edit',$item->id)}}" data-toggle="tooltip"
                                                title="edit" data-placement="bottom"
                                                class="float-left btn btn-sm btn-outline-warning"><i
                                                    class="fas fa-edit"></i></a>
                                            <form class="float-left" action="{{route('admin.destroy',$item->id)}}"
                                                method="POST">
                                                @csrf
                                                @method('delete')
                                                <a href="" data-toggle="tooltip" title="delete" data-id="{{$item->id}}"
                                                    data-placement="bottom"
                                                    class="dltBtn btn btn-sm btn-outline-danger"><i
                                                        class="fas fa-trash-alt"></i></a>
                                            </form>
                                        </td>
                                        <!-- Modal -->
                                        <div class="modal fade" id="userID{{$item->id}}" tabindex="-1" role="dialog"
                                            aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                @php
                                                $admin = \App\Models\Admin::where('id',$item->id)->first();
                                                @endphp
                                                <div class="modal-content">

                                                    <div class="modal-header">
                                                        <h5 class="modal-title text-center" id="exampleModalLongTitle">
                                                            {{\Illuminate\Support\Str::upper($admin->full_name)}}</h5>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="row">

                                                            <div class="col-md-6">
                                                                <strong>Email :</strong>
                                                                <p>{{$admin->email}}</p>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <strong>Phone :</strong>
                                                                <p>{{$admin->phone}}</p>
                                                            </div>
                                                        </div>
                                                        <div class="row">

                                                            <div class="col-md-6">
                                                                <strong>Adresse :</strong>
                                                                <p>{{$admin->address}}</p>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <strong>Status :</strong>
                                                                <p class="badge badge-warning">{{$admin->status}}</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                            data-dismiss="modal">Close</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </tr>
                                    @endforeach

                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>$.N.</th>
                                        <th>Nom Complet</th>
                                        <th>Adresse</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>Role</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>

    @endsection

    @section('script')
    <script src="{{asset('plugins/jquery/jquery.min.js')}}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <!-- DataTables  & Plugins -->
    <script src="{{asset('plugins/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
    <script src="{{asset('plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
    <script src="{{asset('plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
    <script src="{{asset('plugins/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>
    <script src="{{asset('plugins/datatables-buttons/js/buttons.bootstrap4.min.js')}}"></script>
    <script src="{{asset('plugins/jszip/jszip.min.js')}}"></script>
    <script src="{{asset('plugins/pdfmake/pdfmake.min.js')}}"></script>
    <script src="{{asset('plugins/pdfmake/vfs_fonts.js')}}"></script>
    <script src="{{asset('plugins/datatables-buttons/js/buttons.html5.min.js')}}"></script>
    <script src="{{asset('plugins/datatables-buttons/js/buttons.print.min.js')}}"></script>
    <script src="{{asset('plugins/datatables-buttons/js/buttons.colVis.min.js')}}"></script>
    <script src="{{asset('backend/assets/vendor/switch-button-bootstrap/src/bootstrap-switch-button.js')}}"></script>

    <!-- AdminLTE App -->
    <script src="{{asset('backend/dist/js/adminlte.min.js')}}"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="{{asset('backend/dist/js/demo.js')}}"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script>
        $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $('.dltBtn').click(function (e) {
        var form = $(this).closest('form');
        var dataID = $(this).data('id');
        e.preventDefault();
        swal({
            title: "Are you sure?",
            text: "Once deleted, you will not be able to recover this imaginary file!",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        })
            .then((willDelete) => {
                if (willDelete) {
                    form.submit();
                    swal("Poof! Your imaginary file has been deleted!", {
                        icon: "success",
                    });
                } else {
                    swal("Your imaginary file is safe!");
                }
            });
    });
    </script>

    <script>
        $('input[name=toogle]').change(function () {
        var mode = $(this).prop('checked')
        var id = $(this).val();
        $.ajax({
            url: "{{route('admin.status')}}",
            type: "POST",
            data: {
                _token: '{{csrf_token()}}',
                mode: mode,
                id: id,
            },
            success: function (response) {
                if (response.status) {
                    alert(response.msg);
                    location.reload();
                } else {
                    alert('Please try again')
                }
            }
        })
    });
    </script>

    <script>
        setTimeout(function () {
        $('#alert').slideUp();
    }, 4000);
    </script>
    <!-- Page specific script -->
    <script>
        $(document).ready(function () {
        $('#example2').DataTable({
            "scrollX": true,
        });
        $('.dataTables_length').addClass('bs-select');
        });
    </script>
    @endsection
