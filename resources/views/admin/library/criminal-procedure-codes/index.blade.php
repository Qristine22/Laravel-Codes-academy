@extends('layouts.admin-main')

@section('content')
    <div class="admin__sections">
        <section class="admin-section">
            <div class="admin__head">
                <h2 class="admin__title">Տեսանյութեր</h2>
            </div>
            <a class="admin-item__create admin-item__add" href="{{ route('admin.library.criminal-procedure-codes.create') }}">
                <span class="admin-item__plus">+</span>
            </a>
            <a class="admin-item__create admin-item__trash" href="{{ route('admin.library.criminal-procedure-codes.recycleBin') }}">
                <span class="admin-item__plus admin-item__trash_plus">
                    <i class="fas fa-trash-alt"></i>
                </span>
            </a>
            <h3 class="text-20 mass-media__link">
                <a class="about__date"
                   href="{{route('admin.library.criminal-procedure-codes.show', ['criminal_procedure_code' => 1])}}"> {{ __('criminal-procedure-codes.new_ra_criminal_code') }}</a>
            </h3>
            <h3 class="text-20 mass-media__link">
                <a class="about__date"
                   href="{{route('admin.library.criminal-procedure-codes.show', ['criminal_procedure_code' => 2])}}"> {{ __('criminal-procedure-codes.new_ra_criminal_procedure_code') }}</a>
            </h3>
            <h3 class="text-20 mass-media__link">
                <a class="about__date"
                   href="{{route('admin.library.criminal-procedure-codes.show', ['criminal_procedure_code' => 3])}}"> {{ __('criminal-procedure-codes.new_codes') }}</a>
            </h3>
            <table class="table">
                <tr>
                    <th class="th text-18" style="width: 5%">#id</th>
                    <th class="th text-18">text</th>
                    <th class="th text-18" style="width: 10%">Subtitle</th>
                    <th class="th text-18" style="width: 10%">Pdf name</th>
                    <th class="th text-18" style="width: 10%">video</th>
                    <th class="th text-18" style="width: 5%">Panel</th>
                </tr>
                @foreach ($criminalProcedureCodes as $criminalProcedureCode)
                    <tr>
                        <td class="td text-18">{{ $criminalProcedureCode->id }}</td>
                        <td class="td">{{ $criminalProcedureCode->text_am }}</td>
                        <td class="td">
                            @if($criminalProcedureCode->type == 1)
                                {{ __('criminal-procedure-codes.new_ra_criminal_code') }}
                            @elseif($criminalProcedureCode->type == 2)
                               {{ __('criminal-procedure-codes.new_ra_criminal_procedure_code') }}
                            @else
                               {{ __('criminal-procedure-codes.new_codes') }}
                            @endif
                        </td>
                        <td class="td">{{ $criminalProcedureCode->syllabus_pdf_name_am }}</td>
                        <td class="td">{!! $criminalProcedureCode->link !!}</td>
                        <td class="td text-18">
                            <div class="table__panel flex">
                                <a class="table__panel_item"
                                    href="{{ route('admin.library.criminal-procedure-codes.edit', ['criminal_procedure_code' => $criminalProcedureCode]) }}">
                                    <img class="img" src="/media/img/icons/edit.png" alt="edit">
                                </a>
                                <form action="{{ route('admin.library.criminal-procedure-codes.destroy',
                                    ['criminal_procedure_code' => $criminalProcedureCode]) }}" method="POST">
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

        {{ $criminalProcedureCodes->appends(['criminal-procedure-codes' => $criminalProcedureCodes->currentPage()])->links('includes.pagination.paginate') }}
    </div>
@endsection
