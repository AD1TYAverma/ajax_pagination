<?php

$conn = mysqli_connect("localhost","root","","ajax_db")
        or die("Connection Failed");

$limit = 3;

$page = isset($_POST['page_no']) ? (int)$_POST['page_no'] : 1;

$offset = ($page - 1) * $limit;

$sql = "SELECT * FROM students LIMIT {$offset}, {$limit}";
$result = mysqli_query($conn, $sql);

$output = "";

if(mysqli_num_rows($result) > 0){

    $output .= '
    <table border="1" width="100%" cellpadding="10">
        <tr>
            <th>ID</th>
            <th>Name</th>
        </tr>';

    while($row = mysqli_fetch_assoc($result)){

        $output .= "
        <tr>
            <td>{$row['id']}</td>
            <td>{$row['first_name']} {$row['last_name']}</td>
        </tr>";
    }

    $output .= '</table>';

    // Total Records Count
    $sql_total = "SELECT COUNT(*) AS total FROM students";
    $record = mysqli_query($conn, $sql_total);
    $row_total = mysqli_fetch_assoc($record);

    $total_record = $row_total['total'];
    $total_pages = ceil($total_record / $limit);

    // Pagination Start
    $output .= '<div id="pagination">';

    for($i = 1; $i <= $total_pages; $i++){

        $class_name = ($i == $page) ? "active" : "";

        $output .= "<a class='{$class_name}' id='{$i}' href='#'>{$i}</a>";
    }

    $output .= '</div>';

    echo $output;

}else{

    echo "<h3>No Records Found</h3>";
}

mysqli_close($conn);

?>