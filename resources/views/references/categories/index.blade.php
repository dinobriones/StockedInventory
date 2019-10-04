@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-8">
            <div class="card">
                <div class="card-body">
                                <h5 class="card-title"><strong>Category List</strong></h5>
                                <div class="table-responsive">
                                    <table id="zero_config" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Position</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($categories as $category)
                                            <tr>
                                            <td>{{ $category->name }} </td>
                                            <td>{{ $category->description }}</td>
                                            </tr>
                                        @endforeach
                                            
                                        </tbody>
                                    </table>
                                </div>
                </div>
            </div>
        </div>
        <div class="col-4">
            <div class="card">
                <div class="card-body">
                    <form class="form-horizontal" method="post" action="{{ url('categories') }}">
                    @csrf
                        <h5 class="card-title"><strong>New Category</strong></h5>
                        <div class="form-group row">
                            <input type="text" class="form-control" name="name" id="name" placeholder="Name" autocomplete="off"/>
                        </div>
                        <div class="form-group row">
                            <input type="text" class="form-control" name="description" id="description" placeholder="Description" autocomplete="off"/>
                        </div>
                        <div class="form-group row">
                            <input type="submit" class="btn btn-primary" name="Submit" id="Submit" placeholder="Description"/>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('scripts')
<script>
$('#zero_config').DataTable();
</script>
@endsection