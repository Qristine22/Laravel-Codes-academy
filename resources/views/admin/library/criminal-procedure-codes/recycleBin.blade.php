@extends('layouts.admin-main')

@section('content')
    <div class="admin__sections">
        {{-- gallery video --}}
        <section class="admin-section">
            <div class="admin__head">
                <h2 class="admin__title">Տեսանյութեր</h2>
            </div>
            <a class="admin-item__create" href="{{ route('admin.library.criminal-procedure-codes.create') }}">
                <span class="admin-item__plus">+</span>
            </a>
            <table class="table">
                <tr>
                    <th class="th text-18" style="width: 5%">#id</th>
                    <th class="th text-18">text</th>
                    <th class="th text-18" style="width: 10%">year</th>
                    <th class="th text-18" style="width: 10%">date</th>
                    <th class="th text-18" style="width: 10%">video</th>
                    <th class="th text-18" style="width: 5%">Panel</th>
                </tr>
                @foreach ($criminalProcedureCodes as $criminalProcedureCode)
                    <tr>
                        <td class="td text-18">{{ $criminalProcedureCode->id }}</td>
                        <td class="td">{{ $criminalProcedureCode->text_am }}</td>
                        <td class="td">{{ $criminalProcedureCode->year }}</td>
                        <td class="td">{{ $criminalProcedureCode->full_date }}</td>
                        <td class="td">{!! $criminalProcedureCode->link !!}</td>
                        <td class="td text-18">
                            <div class="table__panel flex">
                                <a class="table__panel_item"
                                    href="{{ route('admin.library.criminal-procedure-codes.recycleBinRestore', ['id' => $criminalProcedureCode]) }}">
                                    <i class="fas fa-trash-restore"></i>
                                </a>
                                <form action="{{ route('admin.library.criminal-procedure-codes.forceDelete',
                                    ['id' => $criminalProcedureCode]) }}" method="GET">
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

{{--        {{ $criminalProcedureCodes->appends(['galleries' => $galleries->currentPage()])->links('includes.pagination.paginate') }}--}}
    </div>
@endsection
