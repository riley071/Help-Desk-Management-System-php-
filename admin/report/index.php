<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Reports</title>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/r/dt/jq-2.1.4,jszip-2.5.0,pdfmake-0.1.18,dt-1.10.9,af-2.0.0,b-1.0.3,b-colvis-1.0.3,b-html5-1.0.3,b-print-1.0.3,se-1.0.1/datatables.min.css"/>
 
<script type="text/javascript" src="https://cdn.datatables.net/r/dt/jq-2.1.4,jszip-2.5.0,pdfmake-0.1.18,dt-1.10.9,af-2.0.0,b-1.0.3,b-colvis-1.0.3,b-html5-1.0.3,b-print-1.0.3,se-1.0.1/datatables.min.js"></script>

</head>
	<div class="container" style="padding:20px;20px;">
      <div class="">
        <h1> User Complaints Report</h1>
        <div class="">
		<table id="employee_id" class="display" width="100%" cellspacing="0">
        <thead>
            <tr>
            <th>Complaint  type</th>
            <th>User name</th>
                <th>User email </th>
				<th>Complaint details</th>
                <th>Complaint Number</th>
            </tr>
        </thead>
 
        <tfoot>
            <tr>
            <th>Complaint  type</th>
            <th>User name</th>
                <th>User email </th>
				<th>Complaint details</th>
                <th>Complaint Number</th>
                
            </tr>
        </tfoot>
    </table>
    </div>
      </div>

    </div>
    <!-- <button>Client reports</button> -->

    <script type="text/javascript">
$( document ).ready(function() {
$('#employee_id').DataTable({
		 "processing": true,
         "sAjaxSource":"response.php",
		 "dom": 'lBfrtip',
		 "buttons": [
            {
                extend: 'collection',
                text: 'Export',
                buttons: [
                    'copy',
                    'excel',
                    'csv',
                    'print'
                ]
            }
        ]
        });
});
</script>

