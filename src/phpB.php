<?php 

    if (isset($_POST['teks']) && isset($_POST['num'])) {
        $teks = $_POST['teks'];
        $num = intval($_POST['num']);

        $data = array();

        for ($i=0; $i < $num; $i++) { 
            $data[$i] = $teks;
        }

        header('Content-Type: application/json');
        echo json_encode($data);
        exit();
    }else {
        header('Content-Type: application/json');
        echo json_encode("Data tidak ditemukan");
        exit();
    }

?>