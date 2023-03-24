
<?php
	//include connection file 
	include_once("connection.php");
	 
	// initilize all variable
	$params = $columns = $totalRecords = $data = array();

	$params = $_REQUEST;

	//define index of column
	$columns = array( 
		0 =>'userid',
		1 =>'complaintNumber', 
		2 => 'complaintType',
		3 => 'regDate'
	);

	$where = $sqlTot = $sqlRec = "";

	// getting total number records without any search
	$sql = "SELECT tblcomplaints.complaintType, users.fullName, users.userEmail, tblcomplaints.complaintDetails, tblcomplaints.category, tblcomplaints.regDate, tblcomplaints.subcategory, tblcomplaints.complaintNumber 
        FROM tblcomplaints 
        INNER JOIN users 
        ON tblcomplaints.userId = users.id";
$sqlTot = $sql;
$sqlRec = $sql;



	$sqlRec .=  " ORDER BY 	fullName";

	$queryTot = mysqli_query($conn, $sqlTot) or die("database error:". mysqli_error($conn));


	$totalRecords = mysqli_num_rows($queryTot);

	$queryRecords = mysqli_query($conn, $sqlRec) or die("error to fetch employees data");

	//iterate on results row and create new index array of data
	while( $row = mysqli_fetch_row($queryRecords) ) { 
		$data[] = $row;
	}	

	$json_data = array(
			"draw"            => 1,   
			"recordsTotal"    => intval( $totalRecords ),  
			"recordsFiltered" => intval($totalRecords),
			"data"            => $data   // total data array
			);

	echo json_encode($json_data);  // send data as json format
?>
	