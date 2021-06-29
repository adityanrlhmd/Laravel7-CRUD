@extends('layouts.admin.index')

@section('content')
    <div class="content">
        <div class="container-fluid text-black">
            <div class="card">
                <div class="card-header ">
                    <div class="card-tittle">
                        <h5 class="text-white my-auto">Edit Penawaran</h5>
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

                    <form method="post" action="{{ route('penawaran.update', $item->id) }}" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <div class="mb-4 ">
                            <label for="image">Image</label>
                            <input type="file" class="form-control" name="image" id="image" placeholder="Enter Image">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
