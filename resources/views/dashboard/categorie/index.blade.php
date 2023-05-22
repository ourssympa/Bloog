@extends("dashboard.layout")

@section("section")
<div class="col-12">
    <div class="card">
        <div class="card-body">

            <h4 class="card-title">Catégorie  </h4>
            <div class="d-flex justify-content-between">
                <h3 class="card-title"> </h3>
                <div class="float-right ">

                    <a href="{{route('categorie.create')}}" class="btn btn-primary">Ajouter un Catégorie </a>

                <br>
                <br>
            </div>
           </div>

            <table id="datatable" class="table table-bordered dt-responsive  nowrap w-100">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>libelle</th>
                        <th>Ajouté le</th>
                        <th>Modifier</th>
                        <th>Supprimer</th>
                     </tr>
                </thead>


                <tbody>

                    @foreach ($datas as $data)
                        <tr>
                            <td>{{$data->id}}</td>
                            <td>{{$data->libelle}}</td>
                            <td>{{\Carbon\Carbon::parse($data->created_at)->format('d F Y')}}</td>
                           <td>
                                <a href="{{route('categorie.edit',$data->id)}}" class="btn btn-primary">Modifier</a>
                            </td>

                            <td>
                                <form action="{{route('categorie.delete',$data->id)}}" method="POST">
                                    @csrf
                                <input type="submit" value="delete" class="btn btn-danger">
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

