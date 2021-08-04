{{-- <x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div>
                <x-jet-label for="name" value="{{ __('Name') }}" />
                <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            </div>

            <div class="mt-4">
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>

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

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-jet-button class="ml-4">
                    {{ __('Register') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout> --}}

<x-guest-layout>
    <div class="page-content">
        <div class="holder breadcrumbs-wrap mt-0">
            <div class="container">
                <ul class="breadcrumbs">
                    <li><a href="/">Home</a></li>
                    <li><span>Create account</span></li>
                </ul>
            </div>
        </div>
        <div class="holder">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-18 col-lg-12">
                        <h2 class="text-center">Create an Account</h2>
                        <div class="form-wrapper">
                            <p>To access your whishlist, address book and contact preferences and to take advantage of our speedy checkout, create an account with us now.</p>
                            <x-jet-validation-errors class="mb-4" />
                            <form method="POST" action="{{ route('register')}}">
                                @csrf
                                
                                <div class="form-group">
                                    <input type="text" class="form-control" name="name" placeholder="Your name" :value="old('name')" autocomplete="name" required />
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" name="email" placeholder="E-mail" :value="old('email')" autofocus required />
                                </div>
                                <div class="row">
                                    <div class="col-sm-9">
                                        <div class="form-group">
                                            <input type="password" class="form-control" name="password" placeholder="Password" autocomplete="new-password" required />
                                        </div>
                                    </div>
                                    <div class="col-sm-9">
                                        <div class="form-group">
                                            <input type="password" class="form-control" name="password_confirmation" placeholder="Confirm Password" autocomplete="new-password" required />
                                        </div>
                                    </div>
                                </div>
                                <div class="clearfix">
                                    <input id="checkbox1" name="checkbox1" type="checkbox" checked="checked" />
                                    <label for="checkbox1">
                                        By registering your details you agree to our <a href="#" class="custom-color" data-fancybox data-src="#modalTerms">Terms and Conditions</a> and
                                        <a href="#" class="custom-color" data-fancybox data-src="#modalCookies">Cookie Policy</a>
                                    </label>
                                </div>
                                <div class="text-center">
                                    <button type="submit" name="submit" class="btn">create an account</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="modalTerms" style="display: none;" class="modal-info-content modal-info-content-lg">
        <div class="modal-info-heading">
            <h2>Terms and Conditions</h2>
        </div>
        <p>
            This website is operated by a.season. Throughout the site, the terms “we”, “us” and “our” refer to a.season. a.season offers this website, including all information, tools and services available from this site to you, the
            user, conditioned upon your acceptance of all terms, conditions, policies and notices stated here.
        </p>
        <p>
            By visiting our site and/ or purchasing something from us, you engage in our “Service” and agree to be bound by the following terms and conditions (“Terms of Service”, “Terms”), including those additional terms and
            conditions and policies referenced herein and/or available by hyperlink. These Terms of Service apply to all users of the site, including without limitation users who are browsers, vendors, customers, merchants, and/ or
            contributors of content.
        </p>
        <p>
            Please read these Terms of Service carefully before accessing or using our website. By accessing or using any part of the site, you agree to be bound by these Terms of Service. If you do not agree to all the terms and
            conditions of this agreement, then you may not access the website or use any services. If these Terms of Service are considered an offer, acceptance is expressly limited to these Terms of Service.
        </p>
        <p>
            Any new features or tools which are added to the current store shall also be subject to the Terms of Service. You can review the most current version of the Terms of Service at any time on this page. We reserve the right to
            update, change or replace any part of these Terms of Service by posting updates and/or changes to our website. It is your responsibility to check this page periodically for changes. Your continued use of or access to the
            website following the posting of any changes constitutes acceptance of those changes.
        </p>
        <p>Our store is hosted on Shopify Inc. They provide us with the online e-commerce platform that allows us to sell our products and services to you.</p>
    </div>
    <div id="modalCookies" style="display: none;" class="modal-info-content modal-info-content-lg">
        <div class="modal-info-heading">
            <h2>Cookie Policy</h2>
        </div>
        <p>
            This website is operated by a.season. Throughout the site, the terms “we”, “us” and “our” refer to a.season. a.season offers this website, including all information, tools and services available from this site to you, the
            user, conditioned upon your acceptance of all terms, conditions, policies and notices stated here.
        </p>
        <p>
            By visiting our site and/ or purchasing something from us, you engage in our “Service” and agree to be bound by the following terms and conditions (“Terms of Service”, “Terms”), including those additional terms and
            conditions and policies referenced herein and/or available by hyperlink. These Terms of Service apply to all users of the site, including without limitation users who are browsers, vendors, customers, merchants, and/ or
            contributors of content.
        </p>
        <p>
            Please read these Terms of Service carefully before accessing or using our website. By accessing or using any part of the site, you agree to be bound by these Terms of Service. If you do not agree to all the terms and
            conditions of this agreement, then you may not access the website or use any services. If these Terms of Service are considered an offer, acceptance is expressly limited to these Terms of Service.
        </p>
        <p>
            Any new features or tools which are added to the current store shall also be subject to the Terms of Service. You can review the most current version of the Terms of Service at any time on this page. We reserve the right to
            update, change or replace any part of these Terms of Service by posting updates and/or changes to our website. It is your responsibility to check this page periodically for changes. Your continued use of or access to the
            website following the posting of any changes constitutes acceptance of those changes.
        </p>
        <p>Our store is hosted on Shopify Inc. They provide us with the online e-commerce platform that allows us to sell our products and services to you.</p>
    </div>
</x-guest-layout>
