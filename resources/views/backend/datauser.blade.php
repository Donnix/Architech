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
 
<div class="row">
    <div class="col-md-12 ">
        <div class="m-portlet m-portlet--mobile delbot">
            <div class="m-portlet__head">
                <div class="m-portlet__head-caption">
                    <div class="m-portlet__head-title">
                        <span class="m-portlet__head-icon">
                            <i class="flaticon-signs"></i>
                        </span>
                        <h3 class="m-portlet__head-text">
                           Data User
                        </h3>
                    </div>
                </div>
            </div>
            <div class="m-portlet__body">
               

                <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#m_tabs_1_1" id="tab_1" aria-expanded="true">
                            Architect
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#m_tabs_1_2" id="tab_2" aria-expanded="false">
                           Constructor
                        </a>
                    </li>
                </ul>
                
                <!-- Table Pending -->
                <div class="tab-content">
                    <div class="tab-pane active" id="m_tabs_1_1" role="tabpanel" aria-expanded="true">
                        <table id="table-pending" class="table table-striped table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Name</th>
                                    <th>Address</th>
                                    <th>Phone Number</th>
                                    <th>Email</th>
                                    </tr>
                            </thead>
                        </table> 

                    </div>


                    <!-- Table Approval -->
                    <div class="tab-pane" id="m_tabs_1_2" role="tabpanel" aria-expanded="false">
                    <table id="table-approval" class="table table-striped table-bordered table-hover">
                            <thead>
                                <tr>
                                <th>No</th>
                                <th>Name</th>
                                <th>Address</th>
                                <th>Phone Number</th>
                                <th>Total Cosntructor</th>
                                <th>Email</th>
                                </tr>
                            </thead>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>


    
</body>
    
<script type="text/javascript">
    var loadTablePending  = "{{ route('datauser.loadTablePending') }}";
    var loadTableApproval = "{{ route('datauser.loadTableApproval') }}";
    var msg               = "{{ Session::get('message') }}";
    var exist             = "{{ Session::has('alert') }}";
</script>
<script type="text/javascript" src="{{ asset('js/datatables.bundle.js') }}"></script>
<script type="text/javascript" charset="utf-8" async defer>
   var DatatableRemoteAjax = function() {

var demo = function() {

    var pTable = $('#table-pending').dataTable({

        "processing": true,
        "serverSide": true,
        "pagingType": "full_numbers",
        "ajax": {
            "url"  : loadTablePending,
            "type" : "GET",
        },

        "language": {
            "aria": {
                "sortAscending": ": activate to sort column ascending",
                "sortDescending": ": activate to sort column descending"
            },
            "emptyTable": "No data available in table",
            "info": "Showing _START_ to _END_ of _TOTAL_ entries",
            "infoEmpty": "No entries found",
            "infoFiltered": "",
            "lengthMenu": "_MENU_ entries",
            "search": "Search:",
            "zeroRecords": "No matching records found"
        },

        "buttons": [],

        "responsive": true,

        "paging": true,

        "order": [
            [1, 'desc']
        ],
        
        "lengthMenu": [
            [5, 10, 15, 20, -1],
            [5, 10, 15, 20, "All"]
        ],

        "pageLength": 10,

        "bProcessing": true,

        "oLanguage": {
            "sProcessing": "Loading, please wait..."
        },

        "dom": "<'row' <'col-md-12'B>><'row'<'col-md-6 col-sm-12'l><'col-md-6 col-sm-12'f>r><'table-scrollable't><'row'<'col-md-5 col-sm-12'i><'col-md-7 col-sm-12'p>>", // horizobtal scrollable datatable

        "columns": [
            {
                "render": function(data, type, row) {
                    return row[0];
                },
                "visible": true,
                "class": 'text-center',
                "orderable": false,
                "width": '50px'
            },
           
            {
                "render": function(data, type, row) {
                    return row[2];
                },
                "visible": true
            },
            {
                "render": function(data, type, row) {
                    return row[3];
                },
                "visible": true
            },
            {
                "render": function(data, type, row) {
                    return row[4];
                },
                "visible": true
            },
            {
                "render": function(data, type, row) {
                    return row[5];
                },
                "visible": true
            },
           
        ]
    });

    
    var aTable = $('#table-approval').dataTable({

        "processing": true,
        "serverSide": true,
        "pagingType": "full_numbers",
        "ajax": {
            "url"  : loadTableApproval,
            "type" : "GET",
        },

        "language": {
            "aria": {
                "sortAscending": ": activate to sort column ascending",
                "sortDescending": ": activate to sort column descending"
            },
            "emptyTable": "No data available in table",
            "info": "Showing _START_ to _END_ of _TOTAL_ entries",
            "infoEmpty": "No entries found",
            "infoFiltered": "",
            "lengthMenu": "_MENU_ entries",
            "search": "Search:",
            "zeroRecords": "No matching records found"
        },

        "buttons": [],

        "responsive": true,

        "paging": true,

        "order": [
            [1, 'desc']
        ],
        
        "lengthMenu": [
            [5, 10, 15, 20, -1],
            [5, 10, 15, 20, "All"]
        ],

        "pageLength": 10,

        "bProcessing": true,

        "oLanguage": {
            "sProcessing": "Loading, please wait..."
        },

        "dom": "<'row' <'col-md-12'B>><'row'<'col-md-6 col-sm-12'l><'col-md-6 col-sm-12'f>r><'table-scrollable't><'row'<'col-md-5 col-sm-12'i><'col-md-7 col-sm-12'p>>", // horizobtal scrollable datatable

        "columns": [
            {
                "render": function(data, type, row) {
                    return row[0];
                },
                "visible": true,
                "class": 'text-center',
                "orderable": false,
                "width": '50px'
            },
            {
                "render": function(data, type, row) {
                    return row[1];
                },
                "visible": true
            },
            {
                "render": function(data, type, row) {
                    return row[2];
                },
                "visible": true
            },
            {
                "render": function(data, type, row) {
                    return row[3];
                },
                "visible": true
            },
            {
                "render": function(data, type, row) {
                    return row[4];
                },
                "visible": true
            },
            {
                "render": function(data, type, row) {
                    return row[5];
                },
                "visible": true
            },
            {
                "render": function(data, type, row) {
                    return row[6];
                },
                "visible": true
            },
           
        ]
    });

    
   
};

return {
    // public functions
    init: function() {
        demo();
    },
};
}();

jQuery(document).ready(function() {
DatatableRemoteAjax.init();
});

</script>
</html>