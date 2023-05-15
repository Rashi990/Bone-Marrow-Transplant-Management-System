
<?php
require_once('../../config/connection.php');

$user_id = 1;

if (isset($_GET['table'])) {
    $table = $_GET['table'];
    switch ($table) {
        case 'pending_donor':
            $count = getseenDonorRows();
            break;
        case 'match_requests':
            $count = getseenMatchRequestsRows();
            break;
        default:
            $count = 0;
            break;
    }
    echo $count;
}

function getseenDonorRows() {
    require('../../config/connection.php');
    $sql = "UPDATE pending_donor SET status='seen' WHERE status='unseen'";
    
    $result = $connection->query($sql);
    return $result->num_rows;
}

function getseenMatchRequestsRows() {
    require('../../config/connection.php');
    $sql = "UPDATE match_requests SET status='seen' WHERE status='unseen'";
    $result = $connection->query($sql);
    return $result->num_rows;
}
?>
