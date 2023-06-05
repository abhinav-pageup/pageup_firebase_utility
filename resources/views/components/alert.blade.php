@props(['isSuccess' => '1'])

<div class="fixed top-4 right-4 bg-white dark:bg-gray-800 shadow-md px-5 py-3 rounded-lg">
    <div class="flex flex-row items-center gap-2">
        <i class="bx bx-x absolute top-1 right-1 text-black" id="remove-alert"></i>
        @if ($isSuccess)
            <i class='bx bx-check-double text-4xl text-green-600'></i>
        @else
            <i class='bx bx-x text-4xl text-red-600'></i>
        @endif
        {{ $slot }}
    </div>
</div>
