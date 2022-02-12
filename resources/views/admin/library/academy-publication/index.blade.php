@extends('layouts.admin-main')

@section('content')
    <div class="admin__sections">
        <section class="admin-section">
            <div class="admin__head">
                <h2 class="admin__title">Արդարադատության ակադեմիայի հրատարակություններ</h2>
            </div>

            <a class="admin-item__create" href="{{ route('admin.library.academy-publication.create') }}">
                <span class="admin-item__plus">+</span>
            </a>
            <table class="table">
                <tr>
                    <th class="th text-18" style="width: 5%">#id</th>
                    <th class="th text-18">name</th>
                    <th class="th text-18" style="width: 15%">Img</th>
                    <th class="th text-18" style="width: 5%">file</th>
                    <th class="th text-18" style="width: 5%">Panel</th>
                </tr>
                @foreach ($academyPublications as $item)
                    <tr>
                        <td class="td text-18">{{ $item->id }}</td>
                        <td class="td text-18">
                            @if(@isset($item->name_am))
                                {{ $item->name_am }}
                            @else
                                ---
                            @endif
                        </td>
                        <td class="td">
                            <img class="img" src="{{ Storage::url($item->img) }}" alt="img">
                        </td>
                        <td class="td">
                            <img src="/media/img/icons/pdf.png" alt="pdf">    
                        </td>
                        <td class="td text-18">
                            <div class="table__panel flex">
                                <a class="table__panel_item"
                                    href="{{ route('admin.library.academy-publication.edit',
                                    ['academy_publication' => $item]) }}">
                                    <img class="img" src="/media/img/icons/edit.png" alt="edit">
                                </a>
                                <form
                                    action="{{ route('admin.library.academy-publication.destroy',
                                    ['academy_publication' => $item]) }}" method="POST">
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

            {{ $academyPublications->links('includes.pagination.paginate') }}
        </section>
    </div>
@endsection
