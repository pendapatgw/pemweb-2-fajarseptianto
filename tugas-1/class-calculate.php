<?php
    $proses = $_POST['proses'];
    $nama = $_POST['nama'];
    $umur = $_POST['umur'];
    $tinggiBadan = $_POST['tb'];
    $beratBadan = $_POST['bb'];
    $gender = $_POST['gender'];
    

    $serikat1 = [$nama,$umur,$tinggiBadan,$beratBadan,$gender];
    $serikat2 = [$nama,$umur,$tinggiBadan,$beratBadan,$gender];
    $serikat3 = [$nama,$umur,$tinggiBadan,$beratBadan,$gender];
    
    $batch = [$serikat1,$serikat2,$serikat3]
?>