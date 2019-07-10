<script type="text/javascript">
    $(function () {
        $('.table-datatables').DataTable({
            processing: true,
            serverSide: true,
            ajax: '{!! route($route.".datatables") !!}',
            columns: [
                {data: 'no', searchable: false, width: '5%', className: 'center'},
                {data: 'title'},
                {data: 'content'},
                {data: 'posted_by'},
                {data: 'action', orderable: false, searchable: false, width: '15%', className: 'center action'},
            ],
            drawCallback: function () {
                INIT.tooltip();
            },
        });
    });
</script>