<x-page-layout>
    <x-slot name="title">Homepage</x-slot>
    <x-navbar />

    <div class="container px-4 px-lg-5">
        <!-- Heading Row-->
        <div class="row gx-4 gx-lg-5 align-items-center my-5">
            <div class="col-lg-7"><img class="img-fluid rounded mb-4 mb-lg-0" src="images/11436087_4709729.jpg"
                    alt="..." /></div>
            <!-- Form -->
            <div class="col-lg-5 div-form">

                @auth
                    <!--user-->
                    <div class="">
                        <img src="{{Auth::user()->image_profile}}" class="rounded mx-auto d-block mb-3" alt="..." height="200px">
                        <div class="mt-5">
                            <h4 class="mb-4">
                                {{Auth::user()->name}}
                            </h4>
                            <div>
                                <h5>Biografia</h5>
                                <p>
                                    {{Auth::user()->biography}}
                                </p>
                            </div>
                            <div class="d-flex justify-content-around mt-4">
                                <button class="btn btn-form text-uppercase text-black fw-bold shadow-sm" type="submit"><svg
                                        class="mb-1" xmlns="http://www.w3.org/2000/svg" height="1em"
                                        viewBox="0 0 512 512">
                                        <style>
                                            svg {
                                                fill: #000000
                                            }
                                        </style>
                                        <path
                                            d="M362.7 19.3L314.3 67.7 444.3 197.7l48.4-48.4c25-25 25-65.5 0-90.5L453.3 19.3c-25-25-65.5-25-90.5 0zm-71 71L58.6 323.5c-10.4 10.4-18 23.3-22.2 37.4L1 481.2C-1.5 489.7 .8 498.8 7 505s15.3 8.5 23.7 6.1l120.3-35.4c14.1-4.2 27-11.8 37.4-22.2L421.7 220.3 291.7 90.3z" />
                                    </svg>
                                    <span class="ps-1">Nuovo articolo</span></button>
                                    <a href="{{route('auth.index')}}"><button class="btn btn-form text-uppercase text-black fw-bold shadow-sm" type="submit"><svg class="mb-1" xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512"><style>svg{fill:#000000}</style><path d="M217.9 105.9L340.7 228.7c7.2 7.2 11.3 17.1 11.3 27.3s-4.1 20.1-11.3 27.3L217.9 406.1c-6.4 6.4-15 9.9-24 9.9c-18.7 0-33.9-15.2-33.9-33.9l0-62.1L32 320c-17.7 0-32-14.3-32-32l0-64c0-17.7 14.3-32 32-32l128 0 0-62.1c0-18.7 15.2-33.9 33.9-33.9c9 0 17.6 3.6 24 9.9zM352 416l64 0c17.7 0 32-14.3 32-32l0-256c0-17.7-14.3-32-32-32l-64 0c-17.7 0-32-14.3-32-32s14.3-32 32-32l64 0c53 0 96 43 96 96l0 256c0 53-43 96-96 96l-64 0c-17.7 0-32-14.3-32-32s14.3-32 32-32z"/></svg>
                                    <span class="ps-1">AREA RISERVATA</span></button></a>
                            </div>
                        </div>
                    </div>
                @else
                    <div class="card border-0 shadow rounded-3 my-5">
                        <div class="card-body p-4 p-sm-5">
                            <div class="mb-5">
                                <div class="d-flex justify-content-center mb-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="5em" viewBox="0 0 640 512">
                                        <style>
                                            svg {
                                                fill: #ffb703
                                            }
                                        </style>
                                        <path
                                            d="M208 352c114.9 0 208-78.8 208-176S322.9 0 208 0S0 78.8 0 176c0 38.6 14.7 74.3 39.6 103.4c-3.5 9.4-8.7 17.7-14.2 24.7c-4.8 6.2-9.7 11-13.3 14.3c-1.8 1.6-3.3 2.9-4.3 3.7c-.5 .4-.9 .7-1.1 .8l-.2 .2 0 0 0 0C1 327.2-1.4 334.4 .8 340.9S9.1 352 16 352c21.8 0 43.8-5.6 62.1-12.5c9.2-3.5 17.8-7.4 25.3-11.4C134.1 343.3 169.8 352 208 352zM448 176c0 112.3-99.1 196.9-216.5 207C255.8 457.4 336.4 512 432 512c38.2 0 73.9-8.7 104.7-23.9c7.5 4 16 7.9 25.2 11.4c18.3 6.9 40.3 12.5 62.1 12.5c6.9 0 13.1-4.5 15.2-11.1c2.1-6.6-.2-13.8-5.8-17.9l0 0 0 0-.2-.2c-.2-.2-.6-.4-1.1-.8c-1-.8-2.5-2-4.3-3.7c-3.6-3.3-8.5-8.1-13.3-14.3c-5.5-7-10.7-15.4-14.2-24.7c24.9-29 39.6-64.7 39.6-103.4c0-92.8-84.9-168.9-192.6-175.5c.4 5.1 .6 10.3 .6 15.5z" />
                                    </svg>
                                </div>
                                <h5 class="card-title text-center fw-bold text-uppercase">Entra a far parte della <br>
                                    nostra Community</h5>
                                <p class="text-center">Registrati e pubblica il tuo primo articolo</p>
                            </div>
                            <form action="{{ route('register') }}" method="POST">
                                @csrf
                                @method('POST')
                                <!--name-->
                                <div class="form-floating mb-3">
                                    <input required type="text" name="name" value="{{ old('name') }}"
                                        class="form-control @error('name')
                                is invalid
                              @enderror"
                                        id="floatingInput" placeholder="Nome">
                                    <label for="floatingInput" class="mb-1">Nome</label>
                                    @error('name')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <!--email-->
                                <div class="form-floating mb-3">
                                    <input required type="email" name="email" value="{{ old('email') }}"
                                        class="form-control @error('email')
                                is invalid
                              @enderror"
                                        id="floatingInput" placeholder="name@example.com">
                                    <label for="floatingInput" class="mb-1">Indirizzo email</label>
                                    @error('email')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <!--password-->
                                <div class="form-floating mb-3">
                                    <input required type="password" name="password" value="{{ old('password') }}"
                                        class="form-control @error('password')
                                is invalid
                              @enderror"
                                        id="floatingPassword" placeholder="Password">
                                    <label for="floatingPassword" class="mb-1">Password</label>
                                    @error('password')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <!--password confirmation-->
                                <div class="form-floating mb-3">
                                    <input required type="password" name="password_confirmation"
                                        class="form-control @error('password_confirmation')
                                is invalid
                              @enderror"
                                        id="floatingPassword" placeholder="Conferma Password">
                                    <label for="floatingPassword" class="mb-1">Conferma Password</label>
                                    @error('password_confirmation')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="d-grid">
                                    <button class="btn btn-form text-uppercase text-black fw-bold shadow-sm"
                                        type="submit">Registrati</button>
                                </div>
                                <hr class="my-4">
                                <div class="text-center">
                                    <span class="me-1">Già Registrato?</span><a data-bs-target="#exampleModalToggle"
                                        data-bs-toggle="modal" href="#!">Accedi</a>
                                </div>
                            </form>
                        </div>
                    </div>
                @endauth







            </div>
        </div>
        <!-- Call to Action-->
        <div class="card text-white bg-orange my-5 py-4 text-center">
            <div class="card-body">
                <p class="text-white m-0">This call to action card is a great place to showcase some important
                    information or display a clever tagline!</p>
            </div>
        </div>
    </div>

    <!--login modal-->
    <div class="modal fade" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel"
        tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalToggleLabel">Accedi all'area riservata</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <!--modal body - form-->
                <div class="modal-body">
                    <div class="modal-body">
                        <form action="{{ route('login') }}" method="POST">
                            @csrf
                            @method('POST')
                            <!-- Email input -->
                            <div class="form-outline mb-4">
                                <label for="form2Example1" class="mb-1">Indirizzo Email</label>
                                <input type="email" name="email" id="form2Example1"
                                    class="form-control @error('email')
                                    is invalid
                                @enderror" />

                            </div>

                            <!-- Password input -->
                            <div class="form-outline mb-4">
                                <label for="form2Example2" class="mb-1">Password</label>
                                <input type="password" name="password" id="form2Example2" class="form-control" />
                            </div>

                            <!-- 2 column grid layout for inline styling -->
                            <div class="row mb-4">
                                <div class="col">
                                    <div class="d-flex flex-column">
                                        <!-- Checkbox -->
                                        <button class="btn btn-form text-uppercase text-black fw-bold shadow-sm mb-2"
                                            type="submit">ACCEDI</button>
                                        <div class="d-flex justify-content-center">
                                            <a href="#!">Ho dimenticato la password</a>
                                        </div>
                                    </div>
                                </div>

                            </div>



                            <!-- Register buttons -->
                            <div class="text-center">
                                <span class="me-1">Non ancora registrato?</span><a
                                    data-bs-target="#exampleModalToggle2" data-bs-toggle="modal"
                                    href="#!">Registrati subito</a>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--register modal-->
    <div class="modal fade" id="exampleModalToggle2" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2"
        tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalToggleLabel2">Registrati</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <!--modal body - form-->
                <div class="modal-body">
                    <div class="modal-body">
                        <form action="{{ route('register') }}" method="POST">
                            @csrf
                            @method('POST')

                            <!-- name -->
                            <div class="form-outline mb-4">
                                <label for="form2Example1" class="mb-1">Nome</label>
                                <input type="email" name="name" value="{{ old('name') }}" id="form2Example1"
                                    class="form-control @error('name')
                                    is invalid
                                @enderror" />
                                @error('name')
                                    <div class="alert alert-danger mt-1">{{ $message }}</div>
                                @enderror

                            </div>

                            <!-- Email -->
                            <div class="form-outline mb-4">
                                <label for="form2Example1" class="mb-1">Indirizzo Email</label>
                                <input type="email" name="email" value="{{ old('email') }}" id="form2Example1"
                                    class="form-control @error('email')
                                    is invalid
                                @enderror" />
                                @error('email')
                                    <div class="alert alert-danger mt-1">{{ $message }}</div>
                                @enderror

                            </div>

                            <!-- Password-->
                            <div class="form-outline mb-4">
                                <label for="form2Example2" class="mb-1">Password</label>
                                <input type="password" name="password" id="form2Example2"
                                    class="form-control @error('password')
                                 is invalid                                       
                                @enderror" />
                                @error('password')
                                    <div class="alert alert-danger mt-1">{{ $message }}</div>
                                @enderror
                            </div>


                            <!-- Password confirmation-->
                            <div class="form-outline mb-4">
                                <label for="form2Example2" class="mb-1">Conferma Password</label>
                                <input type="password" name="password_confirmation" id="form2Example2"
                                    class="form-control @error('password_confirmation')
                                 is invalid                                       
                                @enderror" />
                                @error('password_confirmation')
                                    <div class="alert alert-danger mt-1">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- 2 column grid layout for inline styling -->
                            <div class="row mb-4">
                                <div class="col">
                                    <div class="d-flex flex-column">
                                        <!-- Checkbox -->
                                        <button class="btn btn-form text-uppercase text-black fw-bold shadow-sm mb-3"
                                            type="submit">REGISTRATI</button>
                                        <div class="d-flex justify-content-center">
                                            <span class="me-1">Già Registrato?</span><a
                                                data-bs-target="#exampleModalToggle" data-bs-toggle="modal"
                                                href="#!">Accedi</a>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-page-layout>
