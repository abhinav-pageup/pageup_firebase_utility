<x-layout.guest title="Login">
    <section class="bg-gray-50 dark:bg-gray-900 min-h-[100vh]">
        <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
            <a href="#" class="flex items-center mb-6 text-2xl font-semibold text-gray-900 dark:text-white">
                <img class="w-32" src="{{ asset('assets/pageup.png') }}" alt="logo">
            </a>
            <div
                class="w-full bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0 dark:bg-gray-800 dark:border-gray-700">
                <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                    <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white">
                        Sign in to your account
                    </h1>
                    <form class="space-y-4 md:space-y-6" action="{{ route('auth.login') }}" method="POST">
                        @csrf
                        <div>
                            <x-form.label for="email" value="Email" />
                            <x-form.input type="email" name="email" id="email" placeholder="name@company.com"
                                required />
                        </div>
                        <div>
                            <x-form.label for="password" value="Password" />
                            <x-form.input type="password" name="password" id="password" placeholder="••••••••"
                                required />
                        </div>
                        <div class="flex items-center justify-between">
                            <div class="flex items-start">
                                <div class="flex items-center h-5">
                                    <x-form.input type="hidden" name="remember" value="0" />
                                    <x-form.checkbox id="remember" name="remember" value="1" />
                                </div>
                                <div class="ml-3 text-sm">
                                    <x-form.label for="remember" value="Remember me" />
                                </div>
                            </div>
                        </div>
                        <x-form.button color="blue">Submit</x-form.button>
                    </form>
                </div>
            </div>
        </div>
    </section>
</x-layout.guest>
