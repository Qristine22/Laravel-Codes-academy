@extends('layouts.admin-main')

@section('content')
    <div class="admin__sections">
        <section class="admin-section">
            <div class="admin__head">
                <h2 class="admin__title">Տեսադարան</h2>
            </div>
            <a class="admin-item__create" href="{{ route('admin.about.gallery.create') }}">
                <span class="admin-item__plus">+</span>
            </a>
            <table class="table">
                <tr>
                    <th class="th text-18" style="width: 5%">#id</th>
                    <th class="th text-18">text</th>
                    <th class="th text-18" style="width: 10%">year</th>
                    <th class="th text-18" style="width: 10%">date</th>
                    <th class="th text-18" style="width: 10%">img</th>
                    <th class="th text-18" style="width: 5%">Panel</th>
                </tr>
                @foreach ($galleries as $item)
                    <tr>
                        <td class="td text-18">{{ $item->id }}</td>
                        <td class="td">{{ $item->text_am }}</td>
                        <td class="td">{{ $item->year }}</td>
                        <td class="td">{{ $item->full_date }}</td>
                        <td class="td">
                            <img class="img" src="{{ Storage::url($item->imgs[0]->img) }}" alt="img">
                        </td>
                        <td class="td text-18">
                            <div class="table__panel flex">
                                <a class="table__panel_item"
                                    href="{{ route('admin.about.gallery.edit', ['gallery' => $item]) }}">
                                    <img class="img" src="/media/img/icons/edit.png" alt="edit">
                                </a>
                                <form action="{{ route('admin.about.gallery.destroy', ['gallery' => $item]) }}" method="POST">
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
        </section>
    </div>
@endsection
