<x-layout>

    <div class="container-fluid top">
        <div class="row justify-content-center align-items-center text-center">
            <div class="col-12 pt-5 ">
                <h1 class="diplay-2"><span class="fw-bold">{{$service->name}}</span></h1>
            </div>
        </div>
        <div class="row justify-content-center align-items-center py-5">
            @forelse($articles as $article)
             <div class="col-12 col-md-6 col-xl-6 col-xxl-4">
                <x-card :article="$article"/>
             </div>
            @empty
            <div class="col-12 text-center">
               <h3>Non sono ancora stati creati articoli con questo servizio!</h3>
               @auth
                <a class="btn btn-dark my-5" href="{{route('create.article')}}">Pubblica un articolo</a>
                @endauth
            </div>
             @endforelse
        </div>
     </div>
</x-layout>