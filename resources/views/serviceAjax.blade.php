<!DOCTYPE html>
<html>
<head>
    <title>Architech.com</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
    <link href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
</head>
<body>
    
<div class="container">
    <h1>Form Layanan</h1>
    <a class="btn btn-success" href="javascript:void(0)" id="createNewService"> Create New Layanan</a>
    <table class="table table-bordered data-table">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Layanan</th>
                <th>Biaya</th>
                <th>ID Arsitek</th>
                <th>ID Layanan</th>
                <th>Details</th>
                <th width="280px">Action</th>
            </tr>
        </thead>
        <tbody>
        </tbody>
    </table>
</div>
   
<div class="modal fade" id="ajaxModel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="modelHeading"></h4>
            </div>
            <div class="modal-body">
                <form id="serviceForm" name="serviceForm" class="form-horizontal">
                   <input type="hidden" name="service_id" id="service_id">
                <div class="form-row">
                 
                    <div class="form-group col-md-6">
                        <label for="nama">Nama Layanan</label>
                            <input type="text" class="form-control" id="nama" name="nama" placeholder="Input Nama Layanan" value="" maxlength="50" required="">
                    </div>

                    <div class="form-group col-md-6">
                        <label for="biaya" class="col-sm-2 control-label">Biaya</label>
                            <input type="number" class="form-control" id="biaya" name="biaya" placeholder="Input Biaya" value="" maxlength="11" required="">
                    </div>
                    
                    <div class="form-group col-md-6">
                        <label for="id_arsitek">ID Arsitek</label>
                            <input type="text" class="form-control" id="id_arsitek" name="id_arsitek" placeholder="Input ID Arsitek" value="" maxlength="5" required="">
                    </div>
     
                    <div class="form-group col-md-6">
                        <label for="id_projekmanager">ID Projek Manager</label>
                            <input type="text" class="form-control" id="id_projekmanager" name="id_projekmanager" placeholder="Input ID Projek Manager" value="" maxlength="5" required="">
                    </div>


                    <div class="form-group">
                        <label>Details</label>
                        <div class="col-sm-12">
                            <textarea id="detail" name="detail" required="" placeholder="Input Details" class="form-control"></textarea>
                        </div>
                    </div>

                 </div>
                    <div class="col-sm-offset-2 col-sm-10">
                     <button type="submit" class="btn btn-primary" id="saveBtn" value="create">Save changes
                     </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
    
</body>
    
<script type="text/javascript">
  $(function () {
     
      $.ajaxSetup({
          headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
    });
    
    var table = $('.data-table').DataTable({
        processing: true,
        serverSide: true,
        ajax: "{{ route('services.index') }}",
        columns: [
            {data: 'DT_RowIndex', name: 'DT_RowIndex'},
            {data: 'nama', name: 'nama'},
            {data: 'biaya', name: 'biaya'},
            {data: 'id_arsitek', name: 'id_arsitek'},
            {data: 'id_projekmanager', name: 'id_projekmanager'},
            {data: 'detail', name: 'detail'},
            {data: 'action', name: 'action', orderable: false, searchable: false},
        ]
    });
     
    $('#createNewService').click(function () {
        $('#saveBtn').val("create-service");
        $('#service_id').val('');
        $('#serviceForm').trigger("reset");
        $('#modelHeading').html("Create New Layanan");
        $('#ajaxModel').modal('show');
    });
    
    $('body').on('click', '.editService', function () {
      var service_id = $(this).data('id');
      $.get("{{ route('services.index') }}" +'/' + service_id +'/edit', function (data) {
          $('#modelHeading').html("Edit Layanan");
          $('#saveBtn').val("edit-user");
          $('#ajaxModel').modal('show');
          $('#service_id').val(data.id);
          $('#nama').val(data.nama);
          $('#biaya').val(data.biaya);
          $('#id_arsitek').val(data.id_arsitek);
          $('#id_projekmanager').val(data.id_projekmanager);
          $('#detail').val(data.detail);
      })
   });
    
    $('#saveBtn').click(function (e) {
        e.preventDefault();
        $(this).html('Sending..');
    
        $.ajax({
          data: $('#serviceForm').serialize(),
          url: "{{ route('services.store') }}",
          type: "POST",
          dataType: 'json',
          success: function (data) {
     
              $('#serviceForm').trigger("reset");
              $('#ajaxModel').modal('hide');
              table.draw();
         
          },
          error: function (data) {
              console.log('Error:', data);
              $('#saveBtn').html('Save Changes');
          }
      });
    });
    
    $('body').on('click', '.deleteService', function () {
     
        var service_id = $(this).data("id");
       if( confirm("Are You sure want to delete !")){
      
        $.ajax({
            type: "DELETE",
            url: "{{ route('services.store') }}"+'/'+service_id,
            success: function (data) {
                table.draw();
            },
            error: function (data) {
                console.log('Error:', data);
            }
        });
    }
    });
     
  });
</script>
</html>