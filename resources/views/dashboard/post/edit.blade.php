
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


                     <form method="POST" action="{{route('post.update',$data->id)}}">
                        @csrf
                        @method('put')
                        <div class="row mb-4">
                            <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Titre</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" value="{{$data->titre}}" name="titre" required>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">auteur</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" value="{{$data->auteur}}" name="auteur" required>
                            </div>
                        </div>


                        <div class="row mb-4">
                            <label for="horizontal-firstname-input"  class="col-sm-3 col-form-label">Content</label>
                            <div class="col-sm-9">
                                <textarea rows="10" cols="50" class="form-control"  name="content">
                                    {{$data->content}}
                                </textarea>
                            </div>
                        </div>



                     <div class="row justify-content-end">
                            <div class="col-sm-9">
                                <div>
                                    <button type="submit" class="btn btn-lg btn-primary w-md">Modifier</button>
                                </div>
                            </div>
                        </div>
                    </form>



@endsection

