<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login - {{env('APP_NAME')}}</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-zinc-800  h-screen  w-full flex items-center justify-center">
    <div class="text-white font-light text-lg p-4 md:p-0 sm:w-2/4 md:w-2/4 lg:w-1/4 ">

        <x-auth-logo>
            <x-icon-menu/>
            {{env('APP_NAME')}}
        </x-auth-logo>

        <div>
            <form action="{{route('register')}}" method="get" class="w-full">
                <p class="text-center text-emerald-500 border border-emerald-500 border-opacity-5 mb-10 rounded shadow-lg shadow-emerald-500">Um token foi enviado para o e-mail cadastrado!</p>
                <label for="token">Token</label>
                <div class="text-black mb-4 mt-1">
                    <x-input-form type="text" name="token" id="token" placeholder="Informe o token..."
                    class="text-base py-2"/>
                </div>
                

                <div class="text-black mb-4 mt-1" >
                    <x-input-button type="submit" value="Registrar" />

                </div>
            </form>


        </div> 
    </div>

</body>
</html>

