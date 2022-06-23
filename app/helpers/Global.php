<?php
use App\Repositories\Carts;

if (! function_exists('idrFormat'))
{
    function idrFormat($nominal)
    {
        $value = "Rp. " . number_format($nominal,0,',','.');;
        return $value;
    }
}

if (! function_exists('getCounterChart'))
{
    function getCounterChart()
    {
        return Carts::countAllBySession();
    }
}

if (!function_exists('generateCodeTransaction'))
{function generateCodeTransaction()
{
    return "USM-TRX-" .time();
}
}

if (! function_exists('getCustSessions'))
{
    function getCustSessions()
    {
        return Session::get('customers');
    }
}

if (! function_exists('storeCustSession'))
{
    function storeCustSession($customers)
    {
        $session = new sdtClass();
        $session->id = $customers->id;
        $session->name = $customers->name;
        $session->email = $customers->email;

        session(['customer' => $session]);
    }
}