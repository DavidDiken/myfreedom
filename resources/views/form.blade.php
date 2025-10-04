<section id="consultation-form" class="consultation section">
    <div class="container">
        <header class="section-header section-header--center">
            <span class="eyebrow">Консультація</span>
            <h2>Заявка на безкоштовну консультацію</h2>
            <p class="section-description">Заповніть обов'язкові поля — менеджер MYFREEDOM сконтактує з вами, щоб підібрати оптимальний тариф та пакет супроводу.</p>
        </header>

        @if ($errors->any())
            <div class="alert" role="alert">
                <strong>Перевірте поля форми:</strong>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="post" id="consultation-form-request" action="{{ route('consultation.store') }}" class="consultation-form">
            @csrf
            <div class="form-grid">
                <label class="form-field" for="name">
                    <span>Ім'я*</span>
                    <input id="name" type="text" name="name" value="{{ old('name') }}" required class="input">
                </label>

                <label class="form-field" for="contact">
                    <span>Телефон / Telegram / Viber / WhatsApp*</span>
                    <input id="contact" type="text" name="contact" value="{{ old('contact') }}" required class="input">
                </label>

                <label class="form-field" for="email">
                    <span>E-mail (необов'язково)</span>
                    <input id="email" type="email" name="email" value="{{ old('email') }}" class="input">
                </label>
            </div>

            <fieldset class="radio-group">
                <legend>Чи вже маєте квартиру, яку плануєте під здачу в оренду?*</legend>
                <div class="radio-options">
                    <label class="radio-option">
                        <input type="radio" name="has_apartment" value="yes" {{ old('has_apartment') === 'yes' ? 'checked' : '' }} required>
                        <span>Так, квартира вже придбана</span>
                    </label>
                    <label class="radio-option">
                        <input type="radio" name="has_apartment" value="no" {{ old('has_apartment') === 'no' ? 'checked' : '' }}>
                        <span>Ще обираю варіант та розглядаю інвестицію</span>
                    </label>
                </div>
            </fieldset>

            <fieldset class="radio-group">
                <legend>Який рівень залученості у процес вам підходить?*</legend>
                <div class="radio-options">
                    <label class="radio-option">
                        <input type="radio" name="involvement" value="full" {{ old('involvement') === 'full' ? 'checked' : '' }} required>
                        <span>Хочу повне ведення під ключ з куратором</span>
                    </label>
                    <label class="radio-option">
                        <input type="radio" name="involvement" value="self" {{ old('involvement') === 'self' ? 'checked' : '' }}>
                        <span>Планую діяти самостійно, але з перевіреними стандартами</span>
                    </label>
                    <label class="radio-option">
                        <input type="radio" name="involvement" value="unsure" {{ old('involvement') === 'unsure' ? 'checked' : '' }}>
                        <span>Ще не вирішив/вирішила — хочу порадитись</span>
                    </label>
                </div>
            </fieldset>

            <label class="form-field" for="preferred">
                <span>Зручний спосіб зв'язку / бажаний час дзвінка</span>
                <textarea id="preferred" name="preferred" rows="3" class="textarea">{{ old('preferred') }}</textarea>
            </label>

            <div class="form-actions">
                <button class="btn btn--primary" type="submit">Замовити консультацію</button>
            </div>
        </form>
    </div>
</section>
