@props(['message'])

@if ($message)
    <div {{ $attributes->merge(['class' => 'p-4 m-2 rounded bg-green-100']) }}>
        {{ $message }}
    </div>
@endif