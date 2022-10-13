<?php defined('BASEPATH') or exit('No direct script access allowed');


function upper_case($param_name=NULL)
{
    return ucwords(strtolower($param_name));
};
