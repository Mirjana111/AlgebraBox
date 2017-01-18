<?php
$extension = $file->getClientOriginalExtension();

$directory = Storage::makeDirectory($this->objProperty->id); #create new directory using property id.
 
 Storage::disk('local')->put(
$file->getFilename().'.'.$extension,  File::get($file));#put method generate unique file id and saves path
 
 
 
 
 
 
 
 
 ?>