@props(['type' => 'submit', 'color' => 'blue'])

@php
    if ($color == 'blue') {
        $class = 'w-full text-white bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800';
    } elseif ($color == 'green') {
        $class = 'w-full text-white bg-green-600 hover:bg-green-700 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800';
    }
@endphp

<button type="{{ $type }}" {!! $attributes->merge([
    'class' => $class,
]) !!}>{{ $slot }}</button>
