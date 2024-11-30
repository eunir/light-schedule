<a {{ $attributes->merge([
    'type' => 'button',
    'href' => '#',
    'class' => 'text-white bg-[#24292F] hover:bg-[#24292F]/90 focus:ring-4 focus:outline-none focus:ring-[#24292F]/50 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:focus:ring-gray-500 dark:hover:bg-[#050708]/30 w-full md:w-4/12 xl:w-2/12']) }}>
    <svg class="w-4 h-4 me-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 12h14m-7 7V5"/>
    </svg>
    {{ $slot }}
</a>

