<section id="consultation-form" style="margin-top:32px;">
        <h2 style="font-size: clamp(22px, 4vw, 32px);">Заявка на безкоштовну консультацію</h2>
        <p class="sub">Заповніть, будь ласка, обов'язкові поля.</p>

        @if ($errors->any())
            <div class="card" style="border-color:#ef4444;">
                <strong>Перевірте помилки у формі:</strong>
                <ul style="margin:8px 0 0 18px;">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            <br>
        @endif

        <form method="post" action="{{ route('consultation.store') }}" class="card">
            @csrf

            <div style="display:grid; gap:12px;">
                <label>
                    Ім'я*<br>
                    <input type="text" name="name" value="{{ old('name') }}" required style="width:100%;padding:10px;border:1px solid #e5e7eb;border-radius:10px;">
                </label>

                <label>
                    Телефон /Telegram / Viber / WhatsApp*<br>
                    <input type="text" name="contact" value="{{ old('contact') }}" required style="width:100%;padding:10px;border:1px solid #e5e7eb;border-radius:10px;">
                </label>

                <label>
                    E-mail (необов'язково)<br>
                    <input type="email" name="email" value="{{ old('email') }}" style="width:100%;padding:10px;border:1px solid #e5e7eb;border-radius:10px;">
                </label>

                <fieldset class="card" style="padding:12px;">
                    <legend>Чи вже маєте квартиру, яку плануєте під здачу в оренду?*</legend>
                    <label style="margin-right:16px;">
                        <input type="radio" name="has_apartment" value="yes" {{ old('has_apartment') === 'yes' ? 'checked' : '' }} required>
                        так
                    </label>
                    <label>
                        <input type="radio" name="has_apartment" value="no" {{ old('has_apartment') === 'no' ? 'checked' : '' }}>
                        Ні, шукаю варіант
                    </label>
                </fieldset>

                <fieldset class="card" style="padding:12px;">
                    <legend>Який рівень залученості у процес вам підходить?*</legend>
                    <label style="display:block;margin-bottom:6px;">
                        <input type="radio" name="involvement" value="full" {{ old('involvement') === 'full' ? 'checked' : '' }} required>
                        Хочу повне ведення під ключ (з куратором)
                    </label>
                    <label style="display:block;margin-bottom:6px;">
                        <input type="radio" name="involvement" value="self" {{ old('involvement') === 'self' ? 'checked' : '' }}>
                        Хочу діяти самостійно, але з перевіреними стандартами
                    </label>
                    <label style="display:block;">
                        <input type="radio" name="involvement" value="unsure" {{ old('involvement') === 'unsure' ? 'checked' : '' }}>
                        Ще не вирішив/вирішила, хочу порадитись
                    </label>
                </fieldset>

                <label>
                    Зручний спосіб зв'язку / час дзвінка<br>
                    <textarea name="preferred" rows="3" style="width:100%;padding:10px;border:1px solid #e5e7eb;border-radius:10px;">{{ old('preferred') }}</textarea>
                </label>

                <div>
                    <button class="btn" type="submit">Замовити консультацію</button>
                </div>
            </div>
        </form>
    </section>
