
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


                     <form  enctype="multipart/form-data"  method="POST" action="{{route('post.store')}}">
                        @csrf
                        <div class="row mb-4">
                            <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Titre</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" name="titre" required>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">auteur</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" name="auteur" required>
                            </div>
                        </div>

                        <div class="row mb-4">
                            <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">categorie</label>
                            <div class="col-sm-9">
                              <select class="form-control" name="categorie">
                                @foreach ($datas as $data )
                                <option value="{{$data->id}}">{{$data->libelle}}</option>
                                @endforeach
                              </select>
                            </div>
                        </div>

                        <div class="row mb-4">
                            <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">image</label>
                            <div class="col-sm-9">
                                <input class="form-control form-control-lg"  name="image" type="file" accept=".jpg,.png" required>
                            </div>
                        </div>

                        <div class="row mb-4">
                            <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Content</label>
                            <div class="col-sm-9">
                                <textarea rows="10" cols="50" class="form-control" name="content"></textarea>
                            </div>
                        </div>



                     <div class="row justify-content-end">
                            <div class="col-sm-9">
                                <div>
                                    <button type="submit" class="btn btn-lg btn-primary w-md">Enregistrer</button>
                                </div>
                            </div>
                        </div>
                    </form>



@endsection

