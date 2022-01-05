<?php

$value = isset($_GET['value'])
    ? $_GET['value']
    : throw new \InvalidArgumentException('value not set');
