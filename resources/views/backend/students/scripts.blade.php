<script type="text/javascript">
    $(function () {
        $('.table-datatables').DataTable({
            processing: true,
            serverSide: true,
            ajax: '{!! route($route.".datatables") !!}',
            columns: [
                {data: 'no', searchable: false, width: '5%', className: 'center'},
                {data: 'nim'},
                {data: 'nama'},
                {data: 'no_hp'},
                {data: 'namaKelas'},
                {data: 'semester'},
                {data: 'angkatan'},
                {data: 'action', orderable: false, searchable: false, width: '15%', className: 'center action'},
            ],
            drawCallback: function () {
                INIT.tooltip();
            },
        });

        $(document).on('change', '#image_id', function () {
            CALL.previewImage(this, '#preview-foto');
        });

        $(document).on('click', '#preview-foto', function () {
            $('#image_id').click();
        });

        $(document).on('change', '.input-file', function () {
            $('#preview-upload-wrapper').slideDown();
            var imageInfo = previewAttachment(this, '.preview-upload');
            $('.mailbox-attachment-name').html('<i class="fa fa-camera"></i> ' + trimLength(imageInfo['name'], 15));
            $('.mailbox-attachment-size').text(imageInfo['size']);
        });

    });

    function trimLength(text, maxLength) {
        var ellipsis = "...";
        text = $.trim(text);

        if (text.length > maxLength) {
            text = text.substring(0, maxLength - ellipsis.length);
            return text + ellipsis;
        } else
            return text;
    }

    function previewAttachment(input, image) {
        if (input.files && input.files[0]) {
            var imageInfo = [];
            var reader = new FileReader();
            reader.onload = function (e) {
                $(image).attr('src', e.target.result);
            };
            reader.readAsDataURL(input.files[0]);
            var sizeInKB = Math.floor(input.files[0].size / 1024);
            var size = sizeInKB + ' KB';
            if (sizeInKB >= 1024) {
                var sizeInMB = Math.floor(sizeInKB / 1024);
                size = sizeInMB + ' MB';
            }

            imageInfo['name'] = input.files[0].name;
            imageInfo['size'] = size;
            return imageInfo;
        }
    }

</script>
