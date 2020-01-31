<!DOCTYPE html>
<html>
<head>
    <title>ArchiTech.com</title>
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
    
    <h1>Form Data Order</h1>
    
    <a class="btn btn-success" href="javascript:void(0)" id="createNewService"> Create New Order</a>
    <table class="table table-bordered data-table">
        <thead>
            <tr>
                <th>NO</th>
                <th>ID</th>
                <th>ID user</th>
                <th>ID Service</th>
                <th>Pesanan</th>
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
                <form id="orderForm" name="orderForm" class="form-horizontal">
                   <input type="hidden" name="order_id" id="order_id">
                   <form id="orderForm" name="orderForm" class="form-horizontal">
                   <input type="hidden" name="id" id="id">
                   <div class="form-row">
                        
                        <div class="form-group col-md-6">
                           <b> <label>ID User</label></b>
                           <input type="text" class="form-control" id="id_user" name="id_user" placeholder="Enter Nama Layanan"  required="">
                         </div>
                       
                      
                        <div class="form-group col-md-6">
                           <b> <label for="id_service">ID Service</label></b>
                                    <input type="text" class="form-control" id="id_service" name="id_service" placeholder="Enter ID Service" value=""  required="">
                            
                        </div>
                       
                        <div class="form-group col-md-6">
                           <b> <label for="pesan">Pesan</label></b>
                                     <input type="text" class="form-control" id="pesan" name="pesan" placeholder="ID Projek Manager" value=""  required="">
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
        ajax: "{{ route('orders.index') }}",
        columns: [
                    {data: 'DT_RowIndex', name: 'DT_RowIndex'},
                    {data: 'id', name: 'id'},
                    { data: 'id_user', name: 'id_user' },
                    { data: 'id_service', name: 'id_service' },
                    { data: 'pesan', name: 'pesan' },
                     {data: 'action', name: 'action', orderable: false, searchable: false},
        ]
    });
     
    $('#createNewService').click(function () {
        $('#saveBtn').val("create-Order");
        $('#id').val('');
        $('#order_id').val('');
        $('#orderForm').trigger("reset");
        $('#modelHeading').html("Create New Order");
        $('#ajaxModel').modal('show');
    });
    
    $('body').on('click', '.editService', function () {
      var order_id = $(this).data('id');
      $.get("{{ route('orders.index') }}" +'/' + order_id +'/edit', function (data) {
            $('#modelHeading').html("Edit Order");
            $('#saveBtn').val("edit-user");
            $('#ajaxModel').modal('show');
            $('#order_id').val(data.id_service);
            $('#id_user').val(data.id_user);
            $('#id_service').val(data.id_service);
            $('#pesan').val(data.pesan);
      })
   });
    
    $('#saveBtn').click(function (e) {
        e.preventDefault();
        $(this).html('Sending..');
    
        $.ajax({
          data: $('#orderForm').serialize(),
          url: "{{ route('orders.store') }}",
          type: "POST",
          dataType: 'json',
          success: function (data) {
     
              $('#orderForm').trigger("reset");
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
        if(confirm("Are You sure want to delete !")){
        var order_id = $(this).data("id");
        $.ajax({
            type: "DELETE",
            url: "{{ route('orders.store') }}"+'/'+order_id,
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