
<?php
require_once('../../config/connection.php');

$user_id = 1;

if (isset($_GET['table'])) {
    $table = $_GET['table'];
    switch ($table) {
        case 'donor':
            $count = getUnseenDonorRows();
            break;
        case 'match_requests':
            $count = getUnseenMatchRequestsRows();
            break;
        default:
            $count = 0;
            break;
    }
    echo $count;
}

function getUnseenDonorRows() {
    require('../../config/connection.php');
    $sql = "SELECT * FROM donor WHERE status='unseen' ";
    $result = $connection->query($sql);
    if ($result->num_rows > 0) {
        
    }
    return $result->num_rows;
}

function getUnseenMatchRequestsRows() {
    require('../../config/connection.php');
    $sql = "SELECT * FROM match_requests WHERE status='unseen'";
    $result = $connection->query($sql);
    return $result->num_rows;
}
?>
