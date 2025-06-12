<?php
    $file = "SmartMeterPPT.pptx";

    if (file_exists($file)) {
        header("Content-Description: File Transfer");
        header("Content-Type: application/vnd.openxmlformats-officedocument.presentationml.presentation");
        header("Content-Disposition: attachment; filename=\"" . basename($file) . "\"");
        header("Expires: 0");
        header("Cache-Control: must-revalidate");
        header("Pragma: public");
        header("Content-Length: " . filesize($file));
        flush();
        readfile($file);
        exit;
    } else {
        die("Error: File not found.");
    }
} else {
    die("Invalid access.");
}
?>
