<?php

require "tests.php";
require "callback.php";
// In 2.0.6 and earlier, the constant was misnamed.
if (gettype(callback::FOO_I_Cb_Ptr) !== 'resource') die("callback::foo_T<int> not a resource\n");

check::done();
?>
