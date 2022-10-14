<?php
    $page = ($_GET['page']??'login').'.view';
    Controller::render($page);
