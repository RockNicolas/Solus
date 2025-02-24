<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <p>Você está logado com sucesso!</p>
                </div>
            </div>
        </div>
    </div>

    <div id="loginMessage" class="fixed top-5 right-5 bg-green-500 text-white p-4 rounded-lg shadow-lg opacity-0 transform translate-x-10">
        <p>Login bem-sucedido!</p>
    </div>

    <script>
        window.addEventListener('load', function () {
            const loginMessage = document.getElementById('loginMessage');
            loginMessage.classList.remove('opacity-0', 'translate-x-10');
            loginMessage.classList.add('opacity-100', 'translate-x-0');
            
            setTimeout(() => {
                loginMessage.classList.add('translate-x-10');
                loginMessage.classList.remove('translate-x-0');
                setTimeout(() => {
                    loginMessage.classList.add('opacity-0');
                    loginMessage.classList.remove('opacity-100');
                }, 1000); 
            }, 2000); 
        });
    </script>
</x-app-layout>
