@props([
    'theme' => null,
])
<div>
    <th
        scope="col"
        class="{{ $theme->thClass }}"
        style="{{ $theme->thStyle }}"
        wire:key="{{ md5('checkbox-all') }}"
    >
        <div class="{{ $theme->divClass }}">
            <label class="{{ $theme->labelClass }}">
                <input
                    class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-blue-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-blue-600 dark:ring-offset-gray-800 {{ $theme->inputClass }}"
                    type="checkbox"
                    wire:click="selectCheckboxAll"
                    wire:model.defer="checkboxAll"
                >
            </label>
        </div>
    </th>
</div>
