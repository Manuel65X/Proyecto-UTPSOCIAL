<x-layout title="Registrate">
    <x-card-main text="Registrate para ver fotos y videos de tus compañeros">
            <x-forms.form route="{{ route('register') }}" method="POST" status="warning">
                <x-forms.input name="nombre" title="Nombre" placeholder="Ingresa tu Nombre" type="text" :value="old('name') ?? old('name')"/>
                <x-forms.input name="usuario" title="Nombre de Usuario" placeholder="Ingresa tu Nombre de Usuario" type="text" :value="old('username') ?? old('username')"/>
                <x-forms.input name="email" title="Email" placeholder="Ingresa tu Correo electronico" type="email" :value="old('email') ?? old('email')"/>
                <x-forms.input name="password" title="Contraseña" placeholder="Ingresa tu Contraseña" type="password"/>
                <x-forms.input name="repeat-password" title="Repetir Contraseña" placeholder="Vuelve a Ingresar tu Contraseña" type="password"/>
                <x-forms.input-button value="Registrarse" type="submit"/>
            </x-forms.form>
                <hr class="mt-5 mb-5">
                <h2 class="text-center"><a class=" text-blue-600" href="{{ route('register') }}">¿Olvidaste tu contraseña?</a></h2>
    </x-card-main> 
    <x-card-footer text="¿Tienes una cuenta?" route="{{ route('login') }}" textSecondary="Inicia Sesion"/>
</x-layout>