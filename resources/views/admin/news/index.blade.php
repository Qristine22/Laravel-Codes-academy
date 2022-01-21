@extends('layouts.admin-main')

@section('content')
    <div class="admin__sections">
        <section class="admin-section">
            <div class="admin__head">
                <h2 class="admin__title">Նորություններ</h2>
            </div>
            <a class="admin-item__create" href="{{ route('admin.news.create') }}">
                <span class="admin-item__plus">+</span>
            </a>
            <table class="table">
                <tr>
                    <th class="th text-18" style="width: 5%">#id</th>
                    <th class="th text-18">title</th>
                    <th class="th text-18">date</th>
                    <th class="th text-18" style="width: 8%">bg</th>
                    <th class="th text-18" style="width: 5%">Panel</th>
                </tr>
                @foreach ($news as $item)
                    <tr>
                        <td class="td text-18">{{ $item->id }}</td>
                        <td class="td">{{ $item->title_am }}</td>
                        <td class="td">{{ $item->date }}</td>
                        <td class="td">
                            <img class="img" src="{{ Storage::url($item->bg) }}" alt="bg">
                        </td>
                        <td class="td text-18">
                            <div class="table__panel flex">
                                <a class="table__panel_item" href="{{ route('admin.news.edit', ['news' => $item]) }}">
                                    <img class="img" src="/media/img/icons/edit.png" alt="edit">
                                </a>
                                <form action="{{ route('admin.news.destroy', ['news' => $item]) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="table__panel_item table__panel_delete">
                                        <img class="img" src="/media/img/icons/delete.png" alt="edit">
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </table>

            {{ $news->links('includes.pagination.paginate') }}
        </section>
    </div>
@endsection
