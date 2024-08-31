<?php
use App\Models\User;
use App\Models\City;
use App\Models\Business;
use App\Models\Category;
use App\Models\State;
use Carbon\Carbon;


function maskPhoneNumber($phoneNumber)
{
    return substr($phoneNumber, 0, 1) . str_repeat('X', 6) . substr($phoneNumber, -3);
}

