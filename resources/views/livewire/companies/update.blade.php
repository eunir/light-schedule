<div>
    <livewire:layout.breadcrumb view="companies-update"/>


    <div class="w-full bg-white border border-gray-100 shadow dark:bg-gray-400 dark:border-gray-300 mt-5">
        <ul class="flex flex-wrap text-sm font-medium text-center text-gray-500 border-b border-gray-200 rounded-t-lg bg-gray-50 dark:border-gray-700 dark:text-gray-400 dark:bg-gray-800"
            id="defaultTab" data-tabs-toggle="#company-tabs" role="tablist">
            <li class="me-2">
                <button id="company-tab" data-tabs-target="#company" type="button" role="tab" aria-controls="company"
                        aria-selected="true"
                        class="inline-block p-4 text-blue-600 rounded-ss-lg hover:bg-gray-100 dark:bg-gray-800 dark:hover:bg-gray-700 dark:text-blue-500">
                    Cadastro
                </button>
            </li>
            <li class="me-2">
                <button id="myuser-tab" data-tabs-target="#myuser" type="button" role="tab" aria-controls="myuser"
                        aria-selected="false"
                        class="inline-block p-4 hover:text-gray-600 hover:bg-gray-100 dark:hover:bg-gray-700 dark:hover:text-gray-300">
                    Usuário
                </button>
            </li>
            <li class="me-2">
                <button id="myplan-tab" data-tabs-target="#myplan" type="button" role="tab"
                        aria-controls="myplan" aria-selected="false"
                        class="inline-block p-4 hover:text-gray-600 hover:bg-gray-100 dark:hover:bg-gray-700 dark:hover:text-gray-300">
                    Plano
                </button>
            </li>
        </ul>
        <div id="company-tabs">
            <div class="hidden p-4 bg-white rounded-lg md:p-8 dark:bg-gray-800" id="company" role="tabpanel"
                 aria-labelledby="company-tab">

                <form class="max-w-sm mx-auto">

                    <label for="input-group-1" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nome</label>
                    <div class="relative mb-6">
                        <div class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none">
                            <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M10 0a10 10 0 1 0 10 10A10.011 10.011 0 0 0 10 0Zm0 5a3 3 0 1 1 0 6 3 3 0 0 1 0-6Zm0 13a8.949 8.949 0 0 1-4.951-1.488A3.987 3.987 0 0 1 9 13h2a3.987 3.987 0 0 1 3.951 3.512A8.949 8.949 0 0 1 10 18Z"/>
                            </svg>
                        </div>
                        <input type="text" id="input-group-1" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="name@flowbite.com" disabled>
                    </div>

                    <label for="input-group-1" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">E-mail</label>
                    <div class="relative mb-6">
                        <div class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none">
                            <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 16">
                                <path d="m10.036 8.278 9.258-7.79A1.979 1.979 0 0 0 18 0H2A1.987 1.987 0 0 0 .641.541l9.395 7.737Z"/>
                                <path d="M11.241 9.817c-.36.275-.801.425-1.255.427-.428 0-.845-.138-1.187-.395L0 2.6V14a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V2.5l-8.759 7.317Z"/>
                            </svg>
                        </div>
                        <input type="text" id="input-group-1" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="name@flowbite.com" disabled>
                    </div>

                    <label for="phone-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Telefone:</label>
                    <div class="relative mb-6">
                        <div class="absolute inset-y-0 start-0 top-0 flex items-center ps-3.5 pointer-events-none">
                            <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 19 18">
                                <path d="M18 13.446a3.02 3.02 0 0 0-.946-1.985l-1.4-1.4a3.054 3.054 0 0 0-4.218 0l-.7.7a.983.983 0 0 1-1.39 0l-2.1-2.1a.983.983 0 0 1 0-1.389l.7-.7a2.98 2.98 0 0 0 0-4.217l-1.4-1.4a2.824 2.824 0 0 0-4.218 0c-3.619 3.619-3 8.229 1.752 12.979C6.785 16.639 9.45 18 11.912 18a7.175 7.175 0 0 0 5.139-2.325A2.9 2.9 0 0 0 18 13.446Z"/>
                            </svg>
                        </div>
                        <input type="text" id="phone-input" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" placeholder="123-456-7890" disabled />
                    </div>

                    <label for="input-group-1" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Documento</label>
                    <div class="relative mb-6">
                        <div class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none">
                            <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M11.644 3.066a1 1 0 0 1 .712 0l7 2.666A1 1 0 0 1 20 6.68a17.694 17.694 0 0 1-2.023 7.98 17.406 17.406 0 0 1-5.402 6.158 1 1 0 0 1-1.15 0 17.405 17.405 0 0 1-5.403-6.157A17.695 17.695 0 0 1 4 6.68a1 1 0 0 1 .644-.949l7-2.666Zm4.014 7.187a1 1 0 0 0-1.316-1.506l-3.296 2.884-.839-.838a1 1 0 0 0-1.414 1.414l1.5 1.5a1 1 0 0 0 1.366.046l4-3.5Z" clip-rule="evenodd"/>
                            </svg>
                        </div>
                        <input type="text" id="input-group-1" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="name@flowbite.com" disabled>
                    </div>
                </form>
            </div>
            <div class="hidden p-4 bg-white rounded-lg md:p-8 dark:bg-gray-800" id="myuser" role="tabpanel"
                 aria-labelledby="myuser-tab">
                <h2 class="mb-5 text-2xl font-extrabold tracking-tight text-gray-900 dark:text-white">We invest in the
                    world’s potential</h2>
                <!-- List -->
                <ul role="list" class="space-y-4 text-gray-500 dark:text-gray-400">
                    <li class="flex space-x-2 rtl:space-x-reverse items-center">
                        <svg class="flex-shrink-0 w-3.5 h-3.5 text-blue-600 dark:text-blue-500" aria-hidden="true"
                             xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"/>
                        </svg>
                        <span class="leading-tight">Dynamic reports and dashboards</span>
                    </li>
                    <li class="flex space-x-2 rtl:space-x-reverse items-center">
                        <svg class="flex-shrink-0 w-3.5 h-3.5 text-blue-600 dark:text-blue-500" aria-hidden="true"
                             xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"/>
                        </svg>
                        <span class="leading-tight">Templates for everyone</span>
                    </li>
                    <li class="flex space-x-2 rtl:space-x-reverse items-center">
                        <svg class="flex-shrink-0 w-3.5 h-3.5 text-blue-600 dark:text-blue-500" aria-hidden="true"
                             xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"/>
                        </svg>
                        <span class="leading-tight">Development workflow</span>
                    </li>
                    <li class="flex space-x-2 rtl:space-x-reverse items-center">
                        <svg class="flex-shrink-0 w-3.5 h-3.5 text-blue-600 dark:text-blue-500" aria-hidden="true"
                             xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"/>
                        </svg>
                        <span class="leading-tight">Limitless business automation</span>
                    </li>
                </ul>
            </div>
            <div class="hidden p-4 bg-white rounded-lg md:p-8 dark:bg-gray-800" id="myplan" role="tabpanel"
                 aria-labelledby="myplan-tab">
                <dl class="grid max-w-screen-xl grid-cols-2 gap-8 p-4 mx-auto text-gray-900 sm:grid-cols-3 xl:grid-cols-6 dark:text-white sm:p-8">
                    <div class="flex flex-col">
                        <dt class="mb-2 text-3xl font-extrabold">73M+</dt>
                        <dd class="text-gray-500 dark:text-gray-400">Developers</dd>
                    </div>
                    <div class="flex flex-col">
                        <dt class="mb-2 text-3xl font-extrabold">100M+</dt>
                        <dd class="text-gray-500 dark:text-gray-400">Public repositories</dd>
                    </div>
                    <div class="flex flex-col">
                        <dt class="mb-2 text-3xl font-extrabold">1000s</dt>
                        <dd class="text-gray-500 dark:text-gray-400">Open source projects</dd>
                    </div>
                </dl>
            </div>
        </div>
    </div>

</div>
