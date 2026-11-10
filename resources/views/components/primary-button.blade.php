
<button
    {{ $attributes->merge([
        'type' => 'submit',
        'class' => 'w-full inline-flex items-center justify-center
        px-6 py-3.5
        bg-gray-950 border border-yellow-500
        rounded-lg
        font-extrabold text-sm text-white
        uppercase tracking-widest
        hover:bg-yellow-600 hover:border-yellow-600
        hover:text-gray-950
        focus:outline-none focus:ring-2
        focus:ring-yellow-500 focus:ring-offset-2
        active:bg-yellow-700
        transition-all duration-300 ease-in-out
        shadow-lg hover:shadow-xl
        cursor-pointer'
    ]) }}
>
    {{ $slot }}
</button>
