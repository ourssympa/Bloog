@extends("dashboard.layout")

@section("section")
<div class="col-12">
    <div class="card">
        <div class="card-body">

            <h4 class="card-title">Post  </h4>
            <div class="d-flex justify-content-between">
                <h3 class="card-title"> </h3>
                <div class="float-right ">

                    <a href="{{route('post.create')}}" class="btn btn-primary">Ajouter un Post </a>

                <br>
                <br>
            </div>
           </div>

            <table id="datatable" class="table table-bordered dt-responsive  nowrap w-100">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>titre</th>
                        <th>auteur</th>
                        <th>catégorie</th>
                        <th>contenu</th>
                        <th>photo</th>
                        <th>Action</th>
                     </tr>
                </thead>


                <tbody>

                    @foreach ($datas as $data)
                        <tr>
                            <td>{{$data->id}}</td>
                            <td>{{$data->titre}}</td>
                            <td>{{$data->auteur}}</td>
                            <td>{{$data->Categorie['libelle']}}</td>
                            <td>{{substr($data->content,0,100)}}</td>
                            <td><img src="{{ asset('/'.$data->image) }}" alt="image" height="100" width="100"></td>
                           <td>
                                <a href="{{route('post.edit',$data->id)}}" class="mb-2 btn btn-primary">Modifier</a>

                                <form action="{{route('post.delete',$data->id)}}" method="POST">
                                    @csrf
                                <input type="submit" value="  delete  " class="btn btn-danger">
                            </form>
                            </td>


                        </tr>
                    @endforeach



                </tbody>
            </table>

        </div>
    </div>
</div>
@endsection
@section('script')
<script src="{{ asset('dashboardassets/assets/libs/datatables.net/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('dashboardassets/assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('dashboardassets/assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js') }}">
</script>
<script src="{{ asset('dashboardassets/assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js') }}">
</script>

<!-- Datatable init js -->
<script src="{{ asset('dashboardassets/assets/js/pages/datatables.init.js') }}"></script>
@endsection

