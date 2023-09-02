@extends('backend.layouts.master')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
    
                    <div class="col-sm-6">
                        <h1 class="m-0">Messages</h1>
    
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route('admin')}}">Accueil</a></li>
                            <li class="breadcrumb-item active">Messages</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <div class="col-lg-12">
            @include('backend.layouts.notification')
        </div>
        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class=" ">
                            <div class="card-header">
                                <h3 class="card-title">Messages avec des fonctionnalités minimales et un style de survol
                                </h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="example2" class="table table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>$.N.</th>
                                            <th>Nom Client</th>
                                            <th>Prenoms</th>
                                            <th>Telephone</th>
                                            <th>Message</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($messages as $item)
                                           

                                            <tr>
                                                <td>{{$loop->iteration}}</td>
                                                <td>{{ $item->name }}</td>
                                                <td>{{ $item->prenoms }} </td>
                                                <td>{{ $item->phone }} </td>
                                                <td>{{ $item->message }} </td>
                                                <td>
                                                    <form class="float-left"
                                                        action="{{ route('message.destroy', $item->id) }}" method="POST">
                                                        @csrf
                                                        @method('delete')
                                                        <a href="" data-toggle="tooltip" title="delete"
                                                            data-id="{{ $item->id }}" data-placement="bottom"
                                                            class="dltBtn btn btn-sm btn-outline-danger"><i
                                                                class="fas fa-trash-alt"></i></a>
                                                    </form>
                                                </td>

                                            </tr>
                                        @endforeach

                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>$.N.</th>
                                            <th>Nom Client</th>
                                            <th>Email</th>
                                            <th>Sujet</th>
                                            <th>Message</th>
                                            <th>Action</th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->

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
        <script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
        <!-- Bootstrap 4 -->
        <script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        <!-- DataTables  & Plugins -->
        <script src="{{ asset('plugins/datatables/jquery.dataTables.min.js') }}"></script>
        <script src="{{ asset('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
        <script src="{{ asset('plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
        <script src="{{ asset('plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
        <script src="{{ asset('plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
        <script src="{{ asset('plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
        <script src="{{ asset('plugins/jszip/jszip.min.js') }}"></script>
        <script src="{{ asset('plugins/pdfmake/pdfmake.min.js') }}"></script>
        <script src="{{ asset('plugins/pdfmake/vfs_fonts.js') }}"></script>
        <script src="{{ asset('plugins/datatables-buttons/js/buttons.html5.min.js') }}"></script>
        <script src="{{ asset('plugins/datatables-buttons/js/buttons.print.min.js') }}"></script>
        <script src="{{ asset('plugins/datatables-buttons/js/buttons.colVis.min.js') }}"></script>
        <script src="{{ asset('backend/assets/vendor/switch-button-bootstrap/src/bootstrap-switch-button.js') }}"></script>

        <!-- AdminLTE App -->
        <script src="{{ asset('backend/dist/js/adminlte.min.js') }}"></script>
        <!-- AdminLTE for demo purposes -->
        <script src="{{ asset('backend/dist/js/demo.js') }}"></script>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <script>
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $('.dltBtn').click(function(e) {
                var form = $(this).closest('form');
                var dataID = $(this).data('id');
                e.preventDefault();
                swal({
                        title: "Etes-vous sure?",
                        text: "Une fois supprimé, vous ne pourrez plus recuperer ce bon de commande!",
                        icon: "warning",
                        buttons: true,
                        dangerMode: true,
                    })
                    .then((willDelete) => {
                        if (willDelete) {
                            form.submit();
                            swal("Poof! votre commande a été supprimée!", {
                                icon: "success",
                            });
                        } else {
                            swal("Votre fichier est sauvé!");
                        }
                    });
            });
        </script>
        <script>
            $('#deliver').change(function() {
                var deliver = $(this).val();
                var id = $(this).attr('data-id');
                $.ajax({
                    url: ' ',
                    method: 'POST',
                    data: {
                        _token: '{{ csrf_token() }}',
                        id: id,
                        deliver: deliver,
                    },
                    success: function(response) {
                        if (response.status) {
                            alert(response.msg);
                            location.reload();
                        } else {
                            alert('Veuillez recommencer!')
                        }
                    }
                });

            })
        </script>

        <script>
            $('input[name=options]').change(function() {
                var mode = $(this).prop('checked');
                var id = $(this).val();
                var condition = $(this).attr("data-condition");
                $.ajax({
                    url: '',
                    type: 'POST',
                    data: {
                        _token: '{{ csrf_token() }}',
                        mode: mode,
                        id: id,
                        condition: condition,
                    },
                    success: function(response) {
                        if (response.status) {
                            alert(response.msg);
                            location.reload();
                        } else {
                            alert('Veuillez recommencer!')
                        }
                    }
                })
            })
        </script>
        <script>
            $('#print').click(function(e) {
                window.print();
            });
        </script>
        <script>
            setTimeout(function() {
                $('#alert').slideUp();
            }, 4000);
        </script>
        <!-- Page specific script -->
        <script>
            $(document).ready(function() {
                $('#example2').DataTable({
                    "scrollX": true,
                    dom: 'Bfrtip',
                    buttons: [{
                        "extend": 'print',
                        "text": 'Imprimer',
                        'className': 'btn btn-info'
                    }]
                });
                $('.dataTables_length').addClass('bs-select');
            });
        </script>
    @endsection
