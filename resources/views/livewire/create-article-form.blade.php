@if (session()->has('success'))
    <div class="alert alert-success" role="alert">
        {{ session('success') }}
    </div>
@endif


<form class="shadow rounded p-5 my-5 cardMorph-inner" wire:submit="store">
    <div class="mb-3">
        <label for="title" class="form-label">Titolo</label>
        <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" wire:model.blur="title">
        @error('title')
            <p class="fst-italic text-danger">{{ $message }}</p>
        @enderror
    </div>

    <div class="mb-3">
        <label for="description" class="form-label">Descrizione:</label>
        <textarea id="description" cols="30" rows="10" class="form-control @error('description') is-invalid @enderror"  wire:model.blur="description"></textarea>
        @error('description')
        <p class="fst-italic text-danger">{{ $message }}</p>
        @enderror
    </div>

   

    <div class="mb-3">
        <select class="form-control @error('service') is-invalid @enderror" id="service" wire:model.blur="service">
            <option label>Seleziona una categoria</option>
            @foreach ($services as $service)
                <option value="{{ $service->id }}">{{ $service->name }}</option>
            @endforeach
        </select>
        @error('service')
            <p class="fst-italic text-danger">{{ $message }}</p>
        @enderror
    </div>


    <div class="mb-3">
        <input type="file" wire:model.live="temporary_images" multiple
         class="form-control cardInputMorph shadow @error('temporary_images.*') is-invalid @enderror" placeholder="Img/">
        @error('temporary_images.*')
            <p class="fst-italic text-danger">{{ $message }}</p>
        @enderror
        @error('temporary_images')
            <p class="fst-italic text-danger">{{ $message }}</p>
        @enderror
    </div>

    @if(!empty($images))
        <div class="row">
            <div class="col-12">
                <p>Photo preview:</p>
                <div class="row border border-4 border-info rounded shadow py-4">
                    @foreach ($images as $key => $image)
                        <div class="col d-flex flex-column align-items-center my-3">
                            <div class="img-preview mx-auto shadow rounded"
                                 style="background-image: url({{ $image->temporaryUrl() }});">
                            </div>
                            <button type="button" class="buttonCustomDanger mt-1" wire:click="removeImage({{ $key }})">
                                    X
                            </button>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    @endif

    <div class="d-flex justify-content-center pt-3">
        <button type="submit" class="btn btn-dark">Crea</button>
    </div>
</form>