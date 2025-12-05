@props([
    'label' => null,
    'name',
    'type' => 'text',
])

<div class="mb-4">
    {{-- Label --}}
    @if ($label)
        <label for="{{ $name }}" class="block text-sm/6 font-medium text-gray-900">
            {{ $label }}
        </label>
    @endif

    {{-- Input --}}
    <input
        id="{{ $name }}"
        name="{{ $name }}"
        type="{{ $type }}"
        {{ $attributes->merge([
            'class' => 'block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6'
        ]) }}
        value="{{ old($name) }}"
    >

    {{-- Error --}}
    @error($name)
        <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
    @enderror
</div>
