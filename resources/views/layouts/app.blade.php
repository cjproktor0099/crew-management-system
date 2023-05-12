<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
        <link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet">
         <!-- Icon -->
         <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">


        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100 dark:bg-gray-900">
            @include('layouts.navigation')

            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white dark:bg-gray-800 shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                    
                </header>
            @endif

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
        <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>


        <script>
        $(document).ready(function() {
            $('#users-table').DataTable({
                processing: true,
                serverSide: true,
                ajax: '{{ route("users.index") }}',
                columns: [
                    { data: 'DT_RowIndex', name: 'DT_RowIndex', orderable: false, searchable: false },
                    { data: 'name', name: 'name' },
                    { data: 'email', name: 'email' },
                    { data: 'action', name: 'action', orderable: false, searchable: false },
                ]
            });
        });



            $(document).ready(function() {
                $('#documents-table').DataTable({
                    processing: true,
                    serverSide: true,
                    ajax: '{{ route("documents.index") }}',
                    columns: [
                        { data: 'DT_RowIndex', name: 'DT_RowIndex', orderable: false, searchable: false },
                        { data: 'code', name: 'code' },
                        { data: 'name', name: 'name' },
                        { data: 'document_number', name: 'document_number' },
                        { data: 'date_issued', name: 'date_issued' },
                        { data: 'date_expiry', name: 'date_expiry' },
                        { data: 'remarks', name: 'remarks' },
                        { data: 'crew_name', name: 'crew_name' },
                        { data: 'action', name: 'action', orderable: false, searchable: false },
                    ]
                });
            });
        </script>

        <script type="text/javascript">
                $(function () {
                    var table = $('.data-table').DataTable({
                        processing: true,
                        serverSide: true,
                        ajax: "{{ route('crews.index') }}",
                        columns: [
                            {data: 'first_name', name: 'first_name'},
                            {data: 'last_name', name: 'last_name'},
                            {data: 'middle_name', name: 'middle_name'},
                            {data: 'email', name: 'email'},
                            {data: 'address', name: 'address'},
                            {data: 'education', name: 'education'},
                            {data: 'action', name: 'action', orderable: false, searchable: false},
                        ]
                    });
                });


                        $(document).ready(function() {
                $('#confirm-delete').on('show.bs.modal', function(e) {
                    $(this).find('.btn-ok').attr('form', $(e.relatedTarget).closest('form').attr('id'));
                });
            });



                        $(document).on('click', '.view-docs', function(){
            var crew_id = $(this).data('id');
            var documents = $(this).data('documents');
            var rows = '';
            $.each(documents, function(index, document){
                rows += '<tr>' +
                        '<td>' + document.code + '</td>' +
                        '<td>' + document.name + '</td>' +
                        '<td>' + document.document_number + '</td>' +
                        '<td>' + document.date_issued + '</td>' +
                        '<td>' + document.date_expiry + '</td>' +
                        '<td>' + document.remarks + '</td>' +
                        '</tr>';
            });
            $('#document-list').html(rows);
            $('#view-documents').modal('show');
            });

            </script>

    </body>
</html>
