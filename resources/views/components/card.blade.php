<div class="card shadow text-center mb-3 h-100 d-flex flex-column">
  <img src="{{ $article->images->isNotEmpty() ? $article->images->first()->getUrl(400, 400) : 'https://picsum.photos/400' }}"
       class="card-img-top img-fluid" alt="Cover dell'articolo {{$article->title}}">
  <div class="card-body d-flex flex-column">
    <h4 class="card-title text-truncate" title="{{ $article->title }}">
      {{ Str::limit($article->title, 15, '...') }}
    </h4>
    
    <!-- Descrizione con margine e troncamento -->
    <h4 class="card-subtitle text-body-secondary mb-3 text-truncate" title="{{ $article->description }}">
      {{ Str::limit($article->description, 50, '...') }}
    </h4>
    
    <!-- Pulsanti con larghezza fissa e responsivi -->
    <div class="mt-auto d-flex flex-column flex-md-row gap-2">
      <a href="{{ route('article.show', compact('article')) }}" class="btn button w-100 text-truncate">Dettaglio</a>
      <a href="{{ route('byService', ['service' => $article->service]) }}" class="btn button w-100 text-truncate">{{ $article->service->name }}</a>
    </div>
  </div>
</div>