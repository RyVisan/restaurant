@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @if (Session::has('message'))
                <div class="alert alert-success">{{ Session::get('message') }}</div>
            @endif
            <div class="card">
                <div class="card-header">All Categories <a href="{{ route('category.create') }}"><span class="float-right btn btn-outline-secondary">Add Category</span></a></div>
                <div class="card-body">
                    <table class="table table-striped">
                        <thead class="table-dark">
                            <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Edit</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if (count($categories)>0)
                                @foreach ($categories as $key=>$category)
                                <tr>
                                    <th scope="row">{{ $key+1 }}</th>
                                    <td>{{ $category->name }}</td>
                                    <td>
                                        <a href="{{ route('category.edit', $category->id) }}"><button class="btn btn-outline-success">Edit</button></a>
                                    </td>
                                </tr>
                                @endforeach
                            @else
                                <tr>
                                    <td colspan="4" class="text-center">No data to display</td>
                                </tr>
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
