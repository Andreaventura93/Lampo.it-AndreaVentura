<x-layout title="Vendilo.it">

<div class="container my-2">
    <div class="row justify-content-center">
      
        
        @forelse ($announcements as $announcement)
        <div class="col-12 col-md-3 my-5">
            <div class="card">
                <img src="https://picsum.photos/200" class="card-img-top" alt="...">
                
                <div class="card-body">
                  <h5 class="card-title">{{$announcement->title}}</h5>
                  <p class="card-title fw-bold">{{$announcement->category->name}}</p>
                  <p class="card-text">{{$announcement->price}} €</p>
                  <p class="card-text">Pubblicato il :{{$announcement->created_at->format('d/m/Y')}} - Da: {{$announcement->user->name ?? ''}}</p>
                  <a href="{{route('announcement.show',compact('announcement'))}}" class="btn btn-primary">Maggiori dettagli</a>
                </div>
              </div>
            </div>
        @empty
            <div class="col-12 my-5 d-flex flex-column align-items-center">
                <h2 class="text-center">Non ci sono annunci</h2>
            </div>
        @endforelse
            <div class="col-12 my-5 d-flex flex-column align-items-center">
                
                <a href="{{route('announcement.create')}}" class="btn btn-primary my-5">Pubblica un nuovo annuncio</a>
            </div>
        </div>
    </div>
</div>

</x-layout>