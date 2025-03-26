<x-layout>
    <div class="container py-4 top">
        <div class="row justify-content-center align-items-center text-center">
            <div class="col-12">
                <h1 class="display-4 text-break">{{ $article->title }}</h1>
            </div>
        </div>

        <div class="row justify-content-center align-items-center py-5">
            <!-- Sezione Immagine -->
            <div class="col-12 col-sm-10 col-md-6 mb-3">
                @if($article->images->count() > 0)
                <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        @foreach($article->images as $key => $image)
                        <div class="carousel-item @if($loop->first) active @endif">
                            <img src="{{ $image->getUrl(400, 400) }}" class="d-block w-100 img-fluid rounded-4"
                                alt="Immagine {{$key + 1}} dell'articolo {{$article->title}}">
                        </div>
                        @endforeach
                    </div>

                    @if($article->images->count() > 1)
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                    @endif
                </div>
                @else
                <img src="https://picsum.photos/400" alt="Nessuna foto inserita dall'utente" class="img-fluid rounded-4 w-100">
                @endif
            </div>

            <!-- Sezione Testo -->
            <div class="col-12 col-sm-10 col-md-6 mt-2 mb-3 text-center d-flex flex-column justify-content-center">
                <p class="text-break px-3">{{ $article->description }}</p>
            </div>
        </div>
    </div>
</x-layout>