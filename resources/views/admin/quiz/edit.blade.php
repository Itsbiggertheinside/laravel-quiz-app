<x-app-layout>
    <x-slot name="header">Quiz Oluştur</x-slot>
    
    <div class="card-panel">
        <div class="row">
            <form action="{{ route('quiz.update', $instance->id) }}" method="POST" class="col s12">
                @csrf
                @method('PUT')
                <div class="input-field col s12">
                    <input type="text" id="quiz__form__title" name="title" placeholder="Quiz başlığı" value="{{ $instance->title }}">
                </div>
                <div class="input-field col s12">
                    <textarea name="description" id="quiz__form__description" cols="30" rows="10" class="materialize-textarea" placeholder="Quiz açıklaması">{{ $instance->description }}</textarea>
                </div>
                <div class="input-field col s12">
                    <p>
                        <label>
                            <input type="checkbox" name="quiz__form__checkbox" id="quiz__form__checkbox">
                            <span>Bitiş tarihi olacak mı?</span>
                        </label>
                    </p>
                </div>
                <div class="input-field col s12 hidden" id="quiz__form__finished_at_div">
                    <input type="datetime-local" name="finished_at" id="quiz__form__finished_at" value="{{ $instance->finished_at }}">
                </div>

                <button type="submit" value="submit" class="btn">Quiz Güncelle</button>
            </form>
        </div>
    </div>

    <x-slot name="script">
        {{-- $('#quiz__form__checkbox').attr('checked', 'checked') --}}
        $('#quiz__form__checkbox').on('change', function() {
            if($('#quiz__form__checkbox').is(':checked')) {
                $('#quiz__form__finished_at_div').removeClass('hidden');
            } else {
                $('#quiz__form__finished_at_div').addClass('hidden');
            }
        });
    </x-slot>
</x-app-layout>