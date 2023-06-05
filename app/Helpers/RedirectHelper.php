<?php

function redirectBack(bool $isSuccess, string $message)
{
    return back()->withErrors(['isSuccess' => $isSuccess, 'message' => $message]);
}

function redirectRoute(bool $isSuccess, string $message, string $route)
{
    return to_route($route)->withErrors(['isSuccess' => $isSuccess, 'message' => $message]);
}

function redirectTo(bool $isSuccess, string $message, string $url)
{
    return redirect($url)->withErrors(['isSuccess' => $isSuccess, 'message' => $message]);
}