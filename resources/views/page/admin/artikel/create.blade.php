@extends('layouts.admin.index')

@section('content')
    <div class="content">
        <div class="container-fluid text-black">
            <div class="card">
                <div class="card-header  ">
                    <div class="card-tittle">
                        <h5 class="text-white my-auto">Create Artikel</h5>
                    </div>
                </div>
                <div class="card-body p-2">

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form method="post" action="{{ route('artikel.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class=" ">
                            <label for="image">Image</label>
                            <input type="file" class="form-control" id="image" name="image" placeholder="Enter Image">
                        </div>
                        <div class="form-group">
                            <label for="text">Text</label>
                            <input type="text" class="form-control" id="text" name="text" placeholder="Enter text">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
