@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <nav class="navbar navbar-toggleable-md navbar-light bg-faded">
                <a class="btn btn-primary" href="{{ route('blog.admin.categories.create') }}">Добавить</a>
            </nav>
            <div class="card">
                <div class="card-body">
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Категория</th>
                            <th>Родитель</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($paginator as $itemCategory)
                            @php /** @var \App\Models\BlogCategory $item */ @endphp {{-- для работы с сылками. что бы по клику сразу прыыгало в категории --}}
                            <tr>
                                <td>{{ $itemCategory->id }}</td>
                                <td>
                                    <a href="{{ route('blog.admin.categories.edit', $itemCategory->id) }}">
                                        {{ $itemCategory->title }}
                                    </a>
                                </td>
                                <td @if(in_array($itemCategory->parent_id, [0, 1])) style="..." @endif>
                                    {{ $itemCategory->parent_id }} {{-- $item->parentCategory->title --}}
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    @if($paginator->total() > $paginator->count())
        <br>
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        {{ $paginator->links() }}
                    </div>
                </div>
            </div>
        </div>
    @endif
</div>
@endsection