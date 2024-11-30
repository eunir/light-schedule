<button {{ $attributes->merge(['type' => 'button', 'class' => 'flex flex-row text-gray-900 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700']) }}>
    <svg class="text-gray-800 dark:text-white" aria-hidden="true"
         xmlns="http://www.w3.org/2000/svg" width="23" height="23" fill="currentColor"
         viewBox="0 0 24 24">
        <path fill-rule="evenodd"
              d="M8.586 2.586A2 2 0 0 1 10 2h4a2 2 0 0 1 2 2v2h3a1 1 0 1 1 0 2v12a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V8a1 1 0 0 1 0-2h3V4a2 2 0 0 1 .586-1.414ZM10 6h4V4h-4v2Zm1 4a1 1 0 1 0-2 0v8a1 1 0 1 0 2 0v-8Zm4 0a1 1 0 1 0-2 0v8a1 1 0 1 0 2 0v-8Z"
              clip-rule="evenodd"/>
    </svg>
    <span class="mt-1">Remover</span>
</button>
