<?php

function getMysqli()
{
    return new mysqli('127.0.0.1', 'root', '', 'chat');
}