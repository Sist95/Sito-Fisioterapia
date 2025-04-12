<x-layout>
    @if (session()->has('errorMessage'))
        <div class="alert alert-danger text-center">
        {{ session('errorMessage') }}
        </div>
    @endif


    <div id="carouselExample" class="carousel slide mt-3" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="images/carosello1.jpg" class="d-block w-100" alt="Terapia strumentale">
          <div class="carousel-caption">
            <h2>Studio Fisioterapia Armonia</h2>
            <a href="{{ route('article.index') }}"><button class="button rounded-pill">Tutti i trattamenti</button></a>
          </div>
        </div>
      </div>
    </div>
    


    <div class="container-fluid w-100">
      <div class="row rounded overflow-hidden mt-4 align-items-stretch">
        <!-- Colonna immagine -->
        <div class="col-12 col-md-6 p-0">
          <img src="/images/chisiamo1.jpg" alt="Chi Siamo" class="img-fluid w-100 h-100 object-fit-cover rounded-start">
        </div>
    
        <!-- Colonna descrizione -->
        <div class="col-12 col-md-6 primary-bg d-flex align-items-center text-white rounded-end">
          <div class="p-4 w-100">
            <h1 class="mb-4 text-center">CHI SIAMO</h1>
            <p id="descrizione-breve-chi-siamo" class="d-sm-block d-md-none">
              Benvenuti presso lo studio <strong>ARMONIA</strong>, un centro specializzato nella prevenzione e trattamento dei disturbi muscoloscheletrici.
            </p>
            
            <div id="descrizione-completa-chi-siamo" class="collapse d-md-block">
              <p>Il nostro obiettivo è migliorare la qualità della vita dei nostri pazienti e donare benessere a corpo e mente ricercando armonia ed equilibrio attraverso un approccio personalizzato e basato su tecniche fisioterapiche all'avanguardia.</p>
              <p>Il nostro team è composto da fisioterapisti qualificati e costantemente aggiornati sulle migliori metodologie di riabilitazione.</p>
              <p>Crediamo nell'importanza di un trattamento su misura, adatto alle esigenze di ogni paziente, per garantire risultati efficaci e duraturi.</p>
              <p>Ogni percorso riabilitativo inizia con una valutazione approfondita, per individuare le cause del problema e definire il trattamento più efficace.</p>
              <p>Utilizziamo un approccio combinato tra terapia manuale, esercizio terapeutico e tecnologie innovative, con l'obiettivo di ristabilire il benessere del paziente.</p>
              <strong>Perché sceglierci?</strong>
              <ul>
                <li>Professionalità e competenza</li>
                <li>Trattamenti personalizzati</li>
                <li>Tecnologie innovative</li>
                <li>Approccio multidisciplinare</li>
                <li>Ambiente accogliente e moderno</li>
              </ul>
              <p>Se stai cercando un centro di fisioterapia che metta al primo posto la tua salute e il tuo recupero, <strong>ARMONIA</strong> è la scelta giusta per te!</p>
            </div>
    
            <div class="text-center mt-4">
              <a href="{{route('chisiamo')}}" class="btn button">Chi Siamo</a>
            </div>
    
            <div class="text-center mt-4 d-sm-block d-md-none">
              <button class="btn button" data-bs-toggle="collapse" data-bs-target="#descrizione-completa-chi-siamo">Scopri di più</button>
            </div>
          </div>
        </div>
      </div>
    
      <div class="row g-0 align-items-center mt-4">
        <!-- Descrizione con sfondo -->
        <div class="col-12 col-md-6 order-2 text-white order-md-1 primary-bg d-flex flex-column justify-content-center p-4">
          <h3 class="text-center">ARMONIA E SALUTE</h3>
          <p id="descrizione-breve-armonia" class="d-sm-block d-md-none">
            Ippocrate enfatizzava l'importanza dell'armonia tra corpo e mente per il mantenimento della salute.
          </p>
          
          <div id="descrizione-completa-armonia" class="collapse d-md-block">
           
            <p>"La salute è il risultato dell'armonia tra corpo, mente e spirito."</p>
            <p>Questa idea suggerisce che la salute non dipenda solo da trattamenti medici, ma anche da uno stile di vita equilibrato, che includa una dieta sana, l'esercizio fisico, il benessere emotivo e la cura della propria mente.</p>
            <p>Cambiare le abitudini di vita come chiave per una salute migliore: se un individuo non è pronto ad assumersi la responsabilità della propria salute e del proprio stile di vita, nessun aiuto esterno potrà realmente aiutarlo.</p>
            <p>Ippocrate sottolineava che senza una decisione personale di migliorare la propria vita, non ci si può aspettare un progresso. L'idea di "armonia" nella salute, quindi, si riferisce a un approccio globale, dove ogni aspetto dell'individuo — fisico, mentale ed emotivo — deve essere curato per raggiungere un equilibrio ottimale.</p>
          </div>
    
          <div class="text-center mt-4 d-sm-block d-md-none">
            <button class="btn button" data-bs-toggle="collapse" data-bs-target="#descrizione-completa-armonia">Scopri di più</button>
          </div>
        </div>
    
        <!-- Immagine -->
        <div class="col-12 col-md-6 order-1 order-md-2 d-flex">
          <img src="/images/Logo.png" class="img-fluid w-100 h-auto d-block rounded" alt="Osteopata">
        </div>
      </div>
    </div>
    
    
    
    
    <div class="container-fluid text-center mt-5">
      <div class="row justify-content-center mb-4">
        <div class="col-12">
          @auth
            <a class="btn button" href="{{ route('create.article') }}">Pubblica un articolo</a>
          @endauth
        </div>
      </div>
    
      <div class="row justify-content-center align-items-center">
        @forelse ($articles->take(6) as $article)
          <div class="col-12 col-sm-6 col-md-4 col-lg-4 mb-4">
            <x-card :article="$article" />
          </div>
        @empty
          <div class="col-12">
            <h3 class="text-center">
              Non sono ancora stati creati articoli.
            </h3>
          </div>
        @endforelse
      </div>
    </div>
    </x-layout>
    