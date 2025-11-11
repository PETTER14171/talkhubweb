<?php
function sanitize($val){
return trim(filter_var($val, FILTER_SANITIZE_SPECIAL_CHARS));
}
function valid_email($email){
return filter_var($email, FILTER_VALIDATE_EMAIL);
}
?>