<?php 
	session_start();

	require_once('mysqli_connect.php');

	$numeWho = $_SESSION['username'];

	$output = '';

	if ( isset( $_POST['export_excel'] ) ) {

		if ( $numeWho == 'admin' ) {
			$sqlE = "SELECT * FROM ads ORDER BY format_id ASC";
		} else {
			$sqlE = "SELECT * FROM ads WHERE nume='$numeWho' ORDER BY format_id ASC";	
		}
		$result = @mysqli_query($dbc, $sqlE);

		if ( mysqli_num_rows( $result ) > 0 ) {
			
			$output .= '<table class="table" bordered="1">';
			$output .= '	<tr>';
			$output .= '		<th>Id</th>';
			$output .= '		<th>Name</th>';
			$output .= '		<th>Date</th>';
			$output .= '		<th>Format</th>';
			$output .= '		<th>Headline</th>';
			$output .= '		<th>Main Text</th>';
			$output .= '		<th>Link Description</th>';
			$output .= '		<th>Image</th>';
			$output .= '	</tr>';			
			
		}

		while ( $row = mysqli_fetch_array($result) ) {
			
			$output .= '<tr>';
			$output .= '	<td>';
			$output .=			$row['format_id'];
			$output .= '	</td>';
			$output .= '	<td>';
			$output .=			$row['nume'];
			$output .= '	</td>';
			$output .= '	<td>';
			$output .=			$row['datap'];
			$output .= '	</td>';
			$output .= '	<td>';
			$output .=			$row['format'];
			$output .= '	</td>';
			$output .= '	<td>';
			$output .=			$row['headline'];
			$output .= '	</td>';
			$output .= '	<td>';
			$output .=			$row['maintext'];
			$output .= '	</td>';
			$output .= '	<td>';
			$output .=			$row['linkdescription'];
			$output .= '	</td>';
			$output .= '	<td>';
//			$output .=			$row['imglink'];
			$output .=	'		<img src="'.$row['imglink'].'" style="max-width:200px;width:100%;max-height:100px;">';
			$output .= '	</td>';
			$output .= '</tr>';
			
		}
		
		$output .= '</table>';
		
		header("Content-Type: application/xls");    
		header("Content-Disposition: attachment; filename=adsPreview".date("Ymd-Hi").".xls");  
		header("Pragma: no-cache"); 
		header("Expires: 0");
		
		echo $output;

	}
?>