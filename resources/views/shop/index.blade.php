@extends('home')
@section('content')
<div class="album py-5 bg-light">
    <div class="container">

      <div class="row">
       @foreach($produits as $Produit)
        <div class="col-md-4">
          <div class="card mb-4 shadow-sm">
            <img class="bd-placeholder-img card-img-top" width="100%" height="225"    src="{{asset('/produitt/'.$Produit->photo_principale)}}" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"/><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/>

            <div class="card-body">{{$Produit->name}} <br> {{$Produit->description}} <br>
            <span class="badge badge-danger rounded"><a class="text-white mw-50" href="{{route('par-cat',['id'=>$Produit->Category->id])}}">{{$Produit->Category->name}} </a></span></p>
            <div class="d-flex justify-content-between align-items-center">
                                <span class="price">{{number_format($Produit->prixht,2)}}$</span>
                                <a href="{{route('voir-produit',['id'=>$Produit->id])}}" class="btn btn-sm btn-outline-secondary"><i class="fas fa-eye"></i></a>
                            
              </div>
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </div>

@endsection