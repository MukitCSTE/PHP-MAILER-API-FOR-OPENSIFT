<?php 
$dbh = new PDO("mysql:host=localhost;dbname=notice", $username=root, $password=31);

$sql = "SELECT notice_date,notice_name,notice_details,notice_content FROM 
( SELECT notices.dept_id,notices.notice_id,notices.notice_status,
	notices.notice_name,notices.notice_date,notices.notice_details,
	notices.notice_content,dept_name,dept_type  FROM notices INNER JOIN departments ON departments.dept_id = notices.dept_id ) 
AS a WHERE dept_type = 0";
$result = $dbh->query($sql)->fetchAll(PDO::FETCH_ASSOC);
//To output as-is json data result
//header('Content-type: application/json');
//echo json_encode($result);

//Or if you need to edit/manipulate the result before output
$android = array();
foreach ($result as $row) {
	array_push($android,
    array(
        'notice_date' => $row['notice_date'],
        'notice_name' => $row['notice_name'],
        'notice_details' => $row['notice_details'],
        'notice_content' => $row['notice_content']
    ));
}
$dbh = null;

header('Content-type: application/json');
echo json_encode(array("android"=>$android));
?>