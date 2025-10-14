<section class="consultation" id="consultation-form">
    <div class="container">
        <div class="consultation__header">
            <h2>Заявка на безкоштовну консультацію</h2>
            <p class="subtitle">Заповніть обов'язкові поля — менеджер зв'яжеться з вами найближчим часом.</p>
        </div>

        @if ($errors->any())
            <div class="consultation__errors">
                <strong>Перевірте помилки у формі:</strong>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="post" action="{{ route('consultation.store') }}" class="consultation__form">
            @csrf

            <div class="consultation__grid">
                <div class="cust_date">
                <div class="form-field">
                    <label for="name">Ім'я*</label>
                    <input id="name" type="text" name="name" value="{{ old('name') }}" required class="form-input">
                </div>

                <div class="form-field">
                    <label for="contact">Телефон / Telegram / Viber / WhatsApp*</label>
                    <input id="contact" type="text" name="contact" value="{{ old('contact') }}" required class="form-input">
                </div>

                <div class="form-field">
                    <label for="email">E-mail (необов'язково)</label>
                    <input id="email" type="email" name="email" value="{{ old('email') }}" class="form-input">
                </div>
                </div>

                <fieldset class="form-fieldset">
                    <legend>Чи вже маєте квартиру, яку плануєте під здачу в оренду?*</legend>
                    <div class="radio-group radio-group--inline">
                        <label class="radio-option">
                            <input type="radio" name="has_apartment" value="yes" {{ old('has_apartment') === 'yes' ? 'checked' : '' }} required>
                            <span>Так</span>
                        </label>
                        <label class="radio-option">
                            <input type="radio" name="has_apartment" value="no" {{ old('has_apartment') === 'no' ? 'checked' : '' }}>
                            <span>Ні, шукаю варіант</span>
                        </label>
                    </div>
                </fieldset>

                <fieldset class="form-fieldset">
                    <legend>Який рівень залученості у процес вам підходить?*</legend>
                    <div class="radio-group">
                        <label class="radio-option">
                            <input type="radio" name="involvement" value="full" {{ old('involvement') === 'full' ? 'checked' : '' }} required>
                            <span>Хочу повне ведення під ключ (з куратором)</span>
                        </label>
                        <label class="radio-option">
                            <input type="radio" name="involvement" value="self" {{ old('involvement') === 'self' ? 'checked' : '' }}>
                            <span>Хочу діяти самостійно, але з перевіреними стандартами</span>
                        </label>
                        <label class="radio-option">
                            <input type="radio" name="involvement" value="unsure" {{ old('involvement') === 'unsure' ? 'checked' : '' }}>
                            <span>Ще не вирішив/вирішила, хочу порадитись</span>
                        </label>
                    </div>
                </fieldset>

                <div class="form-field form-field--full">
                    <label for="preferred">Зручний спосіб зв'язку / час дзвінка</label>
                    <textarea id="preferred" name="preferred" rows="3" class="form-input form-textarea">{{ old('preferred') }}</textarea>
                </div>

                <div class="form-actions">
                    <button class="btn" type="submit">Замовити консультацію</button>
                </div>
            </div>
        </form>
    </div>
</section>
