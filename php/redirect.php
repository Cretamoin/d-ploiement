<?php
    $cv = __DIR__."/../Portfolio/cv.pdf";
    if(isset($_GET['lien'])){
        $choice = $_GET['lien'];
        if($choice == "projet 1"){
            header('Location: ../Projects/Chat/Html/sign_up.html');
            exit;
        }
        else if($choice == "download"){
            header('Content-Type: application/pdf');
            header('Content-Disposition: attachment; filename="cv.pdf"');
            header('Content-Length: ' . filesize($cv));
            readfile($cv);
            exit;
        }
    }