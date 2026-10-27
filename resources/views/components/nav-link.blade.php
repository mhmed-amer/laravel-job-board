    @php
        $current = 'bg-gray-900 px-3 py-2 text-white';
        $default = ' text-gray-300 hover:bg-gray-700 hover:text-white';
    @endphp

    <a class="rounded-md text-sm font-medium px-3 py-2 {{ $active ? $current : $default }}"
        {{ $attributes }}>
        {{ $slot }}
    </a>
