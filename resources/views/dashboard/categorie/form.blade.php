
@extends("dashboard.layout")

@section("section")

@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>

@endif
<div class="card-body col-6">

                     @if (isset($data))
                     <form method="POST" action="{{route('categorie.update',$data->id)}}">
                        @csrf
                        @method('put')

                        <div class="row mb-4">
                            <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Libelle</label>

                            <div class="col-sm-9">
                              <input type="text" class="form-control" name="libelle" value="{{$data->libelle}}" required>
                            </div>
                        </div>

                     <div class="row justify-content-end">
                            <div class="col-sm-9">
                                <div>
                                    <button type="submit" class="btn btn-primary w-md">Submit</button>
                                </div>
                            </div>
                        </div>
                    </form>
                     @else
                     <form method="POST" action="{{route('categorie.store')}}">
                        @csrf
                        <div class="row mb-4">
                            <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Libelle</label>

                            <div class="col-sm-9">
                              <input type="text" class="form-control" name="libelle" required>
                            </div>
                        </div>

                     <div class="row justify-content-end">
                            <div class="col-sm-9">
                                <div>
                                    <button type="submit" class="btn btn-primary w-md">Submit</button>
                                </div>
                            </div>
                        </div>
                    </form>
                     @endif
                  </div>

@endsection

