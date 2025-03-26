<x-layout>

    <div class="container top">
        <h1 class="mt-5">Modifica Articolo</h1>
        <form action="{{ route('revisor.update', $article->id) }}" method="POST">
            @csrf
    
            <!-- Titolo -->
            <div class="row mb-3">
                <label for="title" class="form-label col-md-2">Titolo</label>
                <div class="col-md-10">
                    <input type="text" class="form-control" id="title" name="title" value="{{ $article->title }}">
                </div>
            </div>
    
            <!-- Descrizione -->
            <div class="row mb-3">
                <label for="description" class="form-label col-md-2">Descrizione</label>
                <div class="col-md-10">
                    <textarea class="form-control" id="description" name="description">{{ $article->description }}</textarea>
                </div>
            </div>
    
            <!-- Servizio -->
            <div class="row mb-3">
                <label for="service" class="form-label col-md-2">Servizio</label>
                <div class="col-md-10">
                    <select class="form-control" id="service" name="service">
                        @foreach($services as $service)
                            <option value="{{ $service->id }}" 
                                {{ $article->service_id == $service->id ? 'selected' : '' }}>
                                {{ $service->name }}
                            </option>
                        @endforeach
                    </select>
                </div>
            </div>
    
            <!-- Bottone di invio -->
            <div class="row">
                <div class="col-md-10 offset-md-2">
                    <button type="submit" class="button">Salva Modifiche</button>
                </div>
            </div>
    
        </form>
    </div>
    
    </x-layout>