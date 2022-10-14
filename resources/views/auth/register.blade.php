<x-guest-layout>
    <div class="min-w-screen min-h-screen bg-gradient-to-r from-indigo-500 to-indigo-900 flex items-center justify-center px-5 py-5">
        <div class="bg-gray-100 text-gray-500 rounded-3xl shadow-xl w-full overflow-hidden" style="max-width:1000px">
            <div class="md:flex w-full">


                {{-- Image --}}
                <div class="hidden bg-cover bg-no-repeat bg-center md:block w-1/2 bg-indigo-500 py-10 px-10" style="background-image: url({{asset('/storage/images/saving.jpg')}})">
                </div>

                {{-- Form to Register --}}
                <div class="w-full md:w-4/5 py-10 px-5 md:px-10">
                {{-- <div class="w-full md:w-1/2 py-10 px-5 md:px-10"> --}}

                    {{-- Title and description --}}
                    <div class="text-center mb-10">
                        <h1 class="font-bold text-3xl text-indigo-600">REGISTRARSE</h1>
                        <p>Ingrese su informacion para registrarse</p>
                    </div>

                    <x-jet-validation-errors class="mb-4" />
                    {{-- Form to register --}}
                    <div>
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            
                            {{-- Inputs 1/2 name and username--}}
                            <div class="flex -mx-3">
                                <div class="w-1/2 px-3 mb-5">
                                    <x-jet-label for="name" value="{{ __('Nombre') }}" />
                                    <x-jet-input id="name"  type="text" name="name" :value="old('name')" required  placeholder="Santiago Cortes" autofocus autocomplete="name" />
                                </div>
                                {{-- <div class="w-1/2 px-3 mb-5">
                                    <x-jet-label for="username" value="{{ __('Usuario') }}" />
                                    <x-jet-input id="username"  type="text" name="username" :value="old('username')" required  placeholder="Smith101" autofocus autocomplete="username" />
                                </div> --}}
                            </div>

                            {{-- Inputs 1/2 identification and amount_saved--}}
                            {{-- <div class="flex -mx-3">
                                <div class="w-1/2 px-3 mb-5">
                                    <x-jet-label for="identification" value="{{ __('Identificación') }}" />
                                    <x-jet-input id="identification"  type="number" name="identification" :value="old('identification')" required  placeholder="52759624" autofocus autocomplete="identification" />
                                </div>
                                <div class="w-1/2 px-3 mb-5">
                                    <x-jet-label for="amount_saved" value="{{ __('Ahorro Quincenal') }}" />
                                    <x-jet-input id="amount_saved"  type="number" name="amount_saved" :value="old('amount_saved')" required  placeholder="50000" autofocus autocomplete="amount_saved" />
                                </div>
                            </div> --}}

                            {{-- Inputs w-full email--}}
                            <div class="flex -mx-3">
                                <div class="w-full px-3 mb-5">
                                    <x-jet-label for="email" value="{{ __('Correo Electrónico') }}" />
                                    <x-jet-input id="email"  type="email" name="email" :value="old('email')" required  placeholder="johnsmith@example.com"/>
                                </div>
                            </div>
                            
                            {{-- Inputs 1/2 password and confirm_password--}}
                            <div class="flex -mx-3">
                                <div class="w-1/2 px-3 mb-5">
                                    <x-jet-label for="password" value="{{ __('Contraseña') }}" />
                                    <x-jet-input id="password"  type="password" name="password" :value="old('password')" required  placeholder="*********"/>
                                </div>
                                <div class="w-1/2 px-3 mb-5">
                                    <x-jet-label for="password_confirmation" value="{{ __('Confirmar contraseña') }}" />
                                    <x-jet-input id="password_confirmation"  type="password" name="password_confirmation" :value="old('password_confirmation')" required  placeholder="*********"/>
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
                            <div class="flex -mx-3">
                                <div class="w-full px-3 mb-3">
                                    <button type="submit" class="block w-full max-w-xs mx-auto bg-indigo-600 transition-all duration-500 hover:bg-indigo-700 focus:bg-indigo-700 text-white rounded-lg px-3 py-3 font-semibold">REGÍSTRATE AHORA</button>
                                </div>
                            </div>

                            {{-- Register? href to login --}}
                            <p class="text-sm text-center text-gray-400">¿Ya registrado? <a href="{{ route('login') }}" class="text-indigo-500 focus:outline-none focus:underline hover:underline">Iniciar Sesion</a></p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>

