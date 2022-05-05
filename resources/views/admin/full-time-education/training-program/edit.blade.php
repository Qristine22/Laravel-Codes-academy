@extends('layouts.admin-main')

@section('content')
    <div class="admin__sections">
        <section class="admin-section">
            <div class="admin__head">
                <h2 class="admin__title">Ուսուցման ծրագրեր</h2>
            </div>

            <form class="admin__form"
                action="{{ route('admin.full-time-education.training-program.update',
                ['training_program' => $trainingProgram]) }}"
                method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                @if ($errors->any())
                    @foreach ($errors->all() as $e)
                        <p class="error">{{ $e }}</p>
                    @endforeach
                @endif
                <div class="form__text">
                    <div class="flex inputs__group">
                        <div class="form__item form__item-inp">
                            <label class="text-20 form__item_name" for="name__en">Name (English)</label>
                            <input class="admin-inp" type="text" id="name__en" name="name_en"
                                placeholder="Enter your text here" value="{{ $trainingProgram->name_en }}">
                        </div>
                        <div class="form__item form__item-inp">
                            <label class="text-20 form__item_name" for="name__am">Name (Armenian)</label>
                            <input class="admin-inp" type="text" id="name__am" name="name_am"
                                placeholder="Enter your text here" value="{{ $trainingProgram->name_am }}">
                        </div>
                        <div class="form__item form__item-inp">
                            <label class="text-20 form__item_name" for="name__ru">Name (Russian)</label>
                            <input class="admin-inp" type="text" id="name__ru" name="name_ru"
                                placeholder="Enter your text here" value="{{ $trainingProgram->name_ru }}">
                        </div>
                    </div>
                    <div class="flex inputs__group">
                        <div class="form__item form__item-inp">
                            <label class="text-20 form__item_name" for="category">Category</label>
                            <select class="admin-inp" name="category" id="category">
                                <option value="judge"
                                    @if($trainingProgram->category == 'judge') selected @endif>
                                    Դատական համակարգի ունկնդիրների ուսուցում
                                </option>
                                <option value="prosecutor"
                                    @if($trainingProgram->category == 'prosecutor') selected @endif>
                                    Դատախազության համակարգի ունկնդիրների ուսուցում
                                </option>
                                <option value="investigator"
                                    @if($trainingProgram->category == 'investigator') selected @endif>
                                    Քննչական համակարգի ունկնդիրների ուսուցում
                                </option>
                            </select>
                        </div>
                        <div class="form__item form__item-inp">
                            <label class="text-20 form__item_name" for="year">year</label>
                            <input class="admin-inp" type="text" id="year" name="year"
                                placeholder="Enter your text here" value="{{ $trainingProgram->year }}">
                        </div>
                        <div class="form__item form__item-inp">
                            <span class="text-20 form__item_name">file</span>
                            <label class="text-20 admin-inp admin-inp-file admin-inp-pdf" for="pdf">Attach your File</label>
                            <input class="admin-file admin-file-pdf" type="file" id="pdf" name="pdf" accept=".pdf">
                        </div>
                    </div>
                    <div class="form__text">
                        <div class="form__item">
                            <label class="text-20 form__item_name" for="description">Text (English)</label>
                            <textarea class="ckeditor" name="description" id="description" placeholder="Enter Your Text Here">
                                {{ $trainingProgram->description }}
                            </textarea>
                        </div>
                    </div>
                </div>


                <input type="hidden" name="pdfHidden" value="{{ $trainingProgram->pdf }}">
                <button class="form__btn">Save</button>
            </form>
        </section>
    </div>
@endsection


@section('scripts')
    <script src="/ckeditor/ckeditor.js"></script>
    <script src="/js/admin/inputsFileReader/pdfReader.js"></script>
@endsection
