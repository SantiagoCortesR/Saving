<x-guest-layout>
    <div class="min-w-screen min-h-screen bg-gradient-to-r from-indigo-500 to-indigo-900 flex items-center justify-center px-5 py-5">
        <div class="bg-gray-100 text-gray-500 rounded-3xl shadow-xl w-full overflow-hidden" style="max-width:1000px">
            <div class="md:flex w-full">
                {{-- Image --}}
                <div class="hidden bg-cover bg-no-repeat bg-center md:block w-1/2 bg-indigo-500 py-10 px-10" style="background-image: url({{asset('/storage/images/saving.jpg')}})">
                </div>
                {{-- Form to Register --}}
                <div class="w-full md:w-1/2 py-10 px-5 md:px-10">

                    {{-- Title and description --}}
                    <div class="text-center mb-10">
                        <h1 class="font-bold text-3xl text-indigo-600">HOLA DE NUEVO!</h1>
                        <p>Ingrese su informacion para iniciar sesión</p>
                    </div>

                    {{-- Form to register --}}
                    <div>
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="flex">
                                <div class="w-full px-3 mb-5">
                                    <x-jet-label for="email" value="{{ __('Correo Electrónico') }}" />
                                    <x-jet-input id="email"  type="email" name="email" :value="old('email')" placeholder="johnsmith@example.com" required />
                                </div>
                            </div>
                            <div class="flex">
                                <div class="w-full px-3 mb-5">
                                    <x-jet-label for="password" value="{{ __('Contraseña') }}" />
                                    <x-jet-input id="password"  type="password" name="password" :value="old('password')" placeholder="*********" required  />
                                    <a href="{{ route('password.request') }}" class="text-sm text-gray-400 focus:text-blue-500 hover:text-blue-500 hover:underline">¿Se te olvidó tu contraseña?</a>
                                </div>
                            </div>

                            {{-- Terms and Conditions --}}
                            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                                <div class="mt-4">
                                    <x-jet-label for="terms">
                                        <div class="flex items-center">
                                            <x-jet-checkbox name="terms" id="terms"/>
                                            <div class="ml-2">
                                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms of Service').'</a>',
                                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy Policy').'</a>',
                                                ]) !!}
                                            </div>
                                        </div>
                                    </x-jet-label>
                                </div>
                            @endif

                            {{-- Button to submit form --}}
                            <div class="flex -mx-3 mt-5">
                                <div class="w-full px-3 mb-3">
                                    <button type="submit" class="block w-full max-w-xs mx-auto bg-indigo-600 transition-all duration-500 hover:bg-indigo-700 focus:bg-indigo-700 text-white rounded-lg px-3 py-3 font-semibold">INICIAR SESIÓN</button>
                                </div>
                            </div>

                            {{-- Register? href to login --}}
                            <p class="text-sm text-center text-gray-400">¿Aún no tienes una cuenta? <a href="{{ route('register') }}" class="text-indigo-500 focus:outline-none focus:underline hover:underline">Registrarse</a>.</p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>

