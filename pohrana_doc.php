
<?php

$name = 'name.zip';
    $file = '/app/files/name.zip';

    $header = array(
        'Content-Type' => 'application/octet-stream',
        'Content-Disposition' => 'attachment', 
        'Content-lenght' => filesize($file),
        'filename' => $name,
    );

    // auth code
    return Response::download($file, $name, $header);
	?>