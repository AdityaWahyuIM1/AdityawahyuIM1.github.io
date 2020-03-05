<?php
session_start();
if(session_destroy())
{
header("http://localhost/pendidikan/index.php?dir=depan&link=program_keahlian");
}
?>