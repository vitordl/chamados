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
            <form action="{{route('authLogin')}}" method="get" class="w-full">
                <label for="user">Usuário</label>
                <div class="text-black mb-4 mt-1">
                    <x-input-form type="text" name="user" id="user" />
                </div>
                <label for="password">Senha</label>
                <div class="text-black mb-8 mt-1" >
                    <x-input-form type="password" name="password" id="password"  />
                </div>

                <div class="text-black mb-4 mt-1" >
                    <x-input-button type="submit" value="Logar" />

                </div>
            </form>

            <div>
                <x-input-link href="{{route('register')}}">Ainda não é registrado?</x-input-link>
            </div>
        </div> 
    </div>

</body>
</html>

