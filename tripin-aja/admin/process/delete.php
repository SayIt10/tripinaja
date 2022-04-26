<?php 
    include "../../config/config.php";

    if (isset($_GET['id_user'])){
        
        $id = $_GET['id_user'];
        $sql = pg_query($db,"DELETE FROM user_tbl WHERE id_user = '$id'");
        if (!$sql)
        {
            echo "delete failed!!";
        } else {
            echo "  <script>alert('delete Success !');
                    document.location.href= '../admin_page.php';
                    </script>";
        }
    }
?>