@extends('layouts.admin.index')

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="card " style="border: none">
                <div class="button p-3">
                    <a class="btn btn-primary float-right my-auto" href="{{ route('harga.create') }}">Create</a>
                </div>
                <div class="container">
                    <table class="table table-hover">
                        <thead>
                            <tr class=" ">
                                <th scope="col">No</th>
                                <th scope="col">Image</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody style="color: black; ">
                            @forelse ($items as $no => $item)
                                <tr>
                                    <th scope="row">{{ $no + 1 }}</th>
                                    <td>
                                        <img src="{{ Storage::url($item->image) }}" alt="image" style="width: 150px"
                                            class=" ">
                                    </td>
                                    <td>{{ $item->text }}</td>
                                    <td>
                                        <a href="{{ route('harga.edit', $item->id) }}"
                                            class="btn btn-outline-warning">Edit</a>
                                        <a onclick="return confirm('Apakah Anda yakin untuk mengahpus ini?')">
                                            <form action="{{ route('harga.destroy', $item->id) }}" method="post"
                                                class="d-inline">
                                                @csrf
                                                @method('delete')
                                                <button class="btn btn-outline-danger">
                                                    Delete
                                                </button>
                                            </form>
                                        </a>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="4" class="text-center">Data Belum Ada</td>
                                </tr>
                            @endforelse


                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
