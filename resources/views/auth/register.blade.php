<x-guest-layout>
     <div class="container">
        <div class="row mt-10">
             <div class="col-lg-6 col-md-10 col-12 d-flex flex-column justify-content-center align-items-center">
                <x-auth-card>
                    <x-slot name="logo">
                
                            <x-icon-logo-small class="w-30 h-30" />
                            </x-slot>
            
                    <!-- Validation Errors -->
                    <x-auth-validation-errors class="mb-4" :errors="$errors" />
            
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
            
                        <!-- Name -->
                        <div>
                            <x-label for="name" :value="__('Name')" />
            
                            <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
                        </div>
            
                        <!-- Email Address -->
                        <div class="mt-4">
                            <x-label for="email" :value="__('Email')" />
            
                            <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
                        </div>
            
                        <!-- Password -->
                        <div class="mt-4">
                            <x-label for="password" :value="__('Password')" />
            
                            <x-input id="password" class="block mt-1 w-full"
                                            type="password"
                                            name="password"
                                            required autocomplete="new-password" />
                        </div>
            
                        <!-- Confirm Password -->
                        <div class="mt-4">
                            <x-label for="password_confirmation" :value="__('Confirm Password')" />
            
                            <x-input id="password_confirmation" class="block mt-1 w-full"
                                            type="password"
                                            name="password_confirmation" required />
                        </div>
            
                        <div class="flex items-center justify-end mt-4">
                            <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                                {{ __('Already registered?') }}
                            </a>
            
                            <x-button class="ml-4">
                                {{ __('Register') }}
                            </x-button>
                        </div>
                    </form>
                </x-auth-card> 
                 
                </div>
            <div class="col-lg-6 col-12d">
                  <div class=""> 
                    <div class="hero-image" data-aos="fade-up" data-aos-delay="300">

                        <img src="images/hero-image.png" class="img-fluid" alt="">
                      </div>
                    
                     
                  </div>
            </div>

           

        </div>
     </div>
</x-guest-layout>
