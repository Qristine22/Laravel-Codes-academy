@extends('layouts.admin-main')
@section('styles')
    <style>
        .dropdown {
            position: relative;
        }
        .btn {
            display: inline-block;
            font-weight: 400;
            line-height: 1.5;
            color: #212529;
            text-align: center;
            text-decoration: none;
            vertical-align: middle;
            cursor: pointer;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
            background-color: transparent;
            border: 1px solid transparent;
            padding: 0.375rem 0.75rem;
            font-size: 1rem;
            border-radius: 0.25rem;
            transition: color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out;
        }
        .btn-secondary {
            color: #fff;
            background-color: #c9b695;
            border-color: #c9b695;
        }
        .dropdown-toggle {
            white-space: nowrap;
        }
        .dropdown-menu {
            position: absolute;
            z-index: 1000;
            display: none;
            min-width: 10rem;
            padding: 0.5rem 0;
            margin: 0;
            font-size: 1rem;
            color: #212529;
            text-align: left;
            list-style: none;
            background-color: #fff;
            background-clip: padding-box;
            border: 1px solid rgba(0,0,0,.15);
            border-radius: 0.25rem;
        }
        .dropdown-item {
            display: block;
            width: 100%;
            padding: 0.25rem 1rem;
            clear: both;
            font-weight: 400;
            color: #212529;
            text-align: inherit;
            text-decoration: none;
            white-space: nowrap;
            background-color: transparent;
            border: 0;
        }
        .dropdown-menu.show {
            display: block;
        }
    </style>
@endsection
@section('content')
    <div class="admin__sections">
        <section class="admin-section">
            <div class="admin__head">
                <h2 class="admin__title">Ակադեմիայի շրջանավարտներ</h2>
            </div>
            <a class="admin-item__create admin-item__add" href="{{ route('admin.about.graduates.create') }}">
                <span class="admin-item__plus">+</span>
            </a>
            <a class="admin-item__create admin-item__trash" href="{{ route('admin.about.graduates.recycleBin') }}">
                <span class="admin-item__plus admin-item__trash_plus">
                    <i class="fas fa-trash-alt"></i>
                </span>
            </a>
            <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                    @if(isset($selected_year))
                        {{$selected_year}}
                    @else
                        Ընտրեք տարեթիվը
                    @endif
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                    @foreach($years as $year)
                        <hr>
                        <a class="dropdown-item" href="{{ route('admin.about.graduates.filter', [$year]) }}">{{$year}}</a>
                    @endforeach
                </ul>
            </div>
            <table class="table">
                <tr>
                    <th class="th text-18" style="width: 5%">#id</th>
                    <th class="th text-18" style="width: 20%">Name</th>
                    <th class="th text-18">Info</th>
                    <th class="th text-18" style="width: 10%">Position</th>
                    <th class="th text-18" style="width: 5%">year</th>
                    <th class="th text-18" style="width: 10%">Photo</th>
                    <th class="th text-18" style="width: 5%">Panel</th>
                </tr>
                @foreach ($graduates as $item)
                    <tr>
                        <td class="td text-18">{{ $item->id }}</td>
                        <td class="td">{{ $item->name }}</td>
                        <td class="td">{{ $item->info }}</td>
                        <td class="td">{{ $item->position }}</td>
                        <td class="td">{{ $item->year }}</td>
                        <td class="td">
                            <img class="img" src="{{ Storage::url($item->img) }}" alt="{{ $item->name }}">
                        </td>
                        <td class="td text-18">
                            <div class="table__panel flex">
                                <a class="table__panel_item" href="{{ route('admin.about.graduates.edit', ['graduate' => $item]) }}">
                                    <img class="img" src="/media/img/icons/edit.png" alt="edit">
                                </a>
                                <form action="{{ route('admin.about.graduates.destroy', ['graduate' => $item]) }}" method="POST">
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

            {{ $graduates->links('includes.pagination.paginate') }}
        </section>
    </div>
@endsection
