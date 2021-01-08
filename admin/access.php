<?php

    if($_SESSION['role'] != 1){
        echo "<script>alert('Akses ditolak'); window.location = '../index.php'</script>";
    }

?>