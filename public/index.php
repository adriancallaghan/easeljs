
<style type="text/css">
    ul {
        list-style:none;
        border:1px solid #cccccc;
        font-style: italic;
        margin:20px;
        padding:20px;
    }
    ul li {
        padding:5px 10px;
        background:#ffffee;
        margin:10px;
    }
    ul li a {
        color:#cccccc;
        text-decoration: none;
    }
    ul li a:hover {
        color:#000;
    }
</style>

<ul>
<?php
    foreach(scandir('.') as $ff){
        if($ff != '.' && $ff != '..' && is_dir($ff)){
                echo "<li><a href='/$ff/'>$ff</a></li>";
        }
    }
?>
</ul>
