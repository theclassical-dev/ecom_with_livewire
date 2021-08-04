<x-guest-layout>
    <div class="page-content">
        <div class="holder breadcrumbs-wrap mt-0">
            <div class="container">
                <ul class="breadcrumbs">
                    <li><a href="/">Home</a></li>
                    <li><span>Sign In</span></li>
                </ul>
            </div>
        </div>
        <div class="holder">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-18 col-lg-12">
                        <h2 class="text-center">Sign In</h2>
                        <div class="form-wrapper">
                            <p>To access your whishlist, address book and contact preferences and to take advantage of our speedy checkout, create an account with us now.</p>
                            <x-jet-validation-errors class="md-4" />
                            <form method="POST" action="{{ route('login')}}">
                                @csrf
                                <div class="form-group">
                                    <input type="text" name="email" class="form-control" placeholder="E-mail" :value="old('email')" autofocus required/>
                                </div>
                                <div class="form-group">
                                    <input type="password" name="password" class="form-control" placeholder="Password" required autocomplete="current-password" />
                                </div>
                                <div class="row">
                                    <div class="col-sm-9">
                                        <div class="clearfix">
                                            <input id="checkbox1" name="remember" type="checkbox" checked="checked" />
                                            <label for="checkbox1">
                                                <span> Remember Me</span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-sm-9">
                                        <div class="clearfix">
                                            <label> <a href="{{ route('password.request')}}"> Forgotten Password ?</a></label>
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
</x-guest-layout>
