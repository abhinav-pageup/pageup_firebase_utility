@if ($checkbox)
    @if ($ruleHide)
        <td
            class="{{ $theme->checkbox->thClass }}"
            style="{{ $theme->checkbox->thStyle }}"
        >
        </td>
    @elseif($ruleDisable)
        <td
            class="{{ $theme->checkbox->thClass }}"
            style="{{ $theme->thStyle }}"
        >
            <div class="{{ $theme->checkbox->divClass }}">
                <label class="{{ $theme->checkbox->labelClass }}">
                    <input
                        @if (isset($ruleSetAttribute['attribute'])) {{ $attributes->merge([$ruleSetAttribute['attribute'] => $ruleSetAttribute['value']])->class($theme->checkbox->inputClass) }}
                           @else
                           class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-blue-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-blue-600 dark:ring-offset-gray-800 {{ $theme->checkbox->inputClass }}" @endif
                        disabled
                        type="checkbox"
                    >
                </label>
            </div>
        </td>
    @else
        <td
            class="{{ $theme->checkbox->thClass }}"
            style="{{ $theme->checkbox->thStyle }}"
        >
            <div class="{{ $theme->checkbox->divClass }}">
                <label class="{{ $theme->checkbox->labelClass }}">
                    <input
                        @if (isset($ruleSetAttribute['attribute'])) {{ $attributes->merge([$ruleSetAttribute['attribute'] => $ruleSetAttribute['value']])->class($theme->checkbox->inputClass) }}
                           @else
                           class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-blue-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-blue-600 dark:ring-offset-gray-800 {{ $theme->checkbox->inputClass }}" @endif
                        type="checkbox"
                        x-on:click="window.Alpine.store('pgBulkActions').add($event.target.value, '{{ $tableName }}')"
                        wire:model.defer="checkboxValues"
                        value="{{ $attribute }}"
                    >
                </label>
            </div>
        </td>
    @endif
@endif
