<div class="row">
    <div class="col-xl-6">
        <div class="card mb-4">

            <div class="card-body"><canvas id="myAreaChart" width="100%" height="40"></canvas>
                <!--form-->
                <form class="container" wire:submit.prevent="store">
                    @csrf
                    <!--image-->
                    <div class="mb-3">

                        @if ($image)
                            <div class="d-flex flex-column">
                                <h6 class="mb-3">Anteprima dell'immagine:</h6>
                                <img class="mb-3" src="{{ $image->temporaryUrl() }}" height="auto" width="150px">
                            </div>
                        @endif
                        <label for="exampleFormControlInput1" class="form-label">Carica un immagine</label>
                        <input type="file" class="form-control" id="image" wire:model="image">
                        @error('image')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <!--title-->
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Titolo</label>
                        <input required type="text" value=""
                            class="form-control @error('title')
                                                  is invalid
                                              @enderror"
                            id="title" wire:model="title">
                        @error('title')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <!--subtitle-->
                    <div class="mb-3">
                        <label for="exampleFormControlInput2" class="form-label">Sottotitolo</label>
                        <input type="text"
                            class="form-control @error('subtitle')
                                                  is invalid
                                              @enderror"
                            value="" id="subtitle" wire:model="subtitle">
                        @error('subtitle')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <!--body-->
                    <p class="mb-2">Corpo</p>
                    <div class="form-floating mb-3">
                        <textarea
                            class="form-control @error('body')
                                              is invalid
                                          @enderror"
                            wire:model="body" style="height: 10rem;"></textarea>
                        @error('body')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>



                    <div class="d-flex justify-content-end">
                        <button class="btn btn-form  text-black fw-bold shadow-sm" type="submit">Aggiungi
                            articolo</button>
                    </div>

                </form>

            </div>
        </div>
    </div>
    <div class="col-xl-6">
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-chart-bar me-1"></i>
                Bar Chart Example
            </div>
            <div class="card-body"><canvas id="myBarChart" width="100%" height="40"></canvas></div>
        </div>
    </div>
</div>
