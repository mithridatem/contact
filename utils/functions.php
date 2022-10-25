<?php
    function cleanInput(?string $input):?string{
        return htmlspecialchars(strip_tags(trim($input)));
    }
?>