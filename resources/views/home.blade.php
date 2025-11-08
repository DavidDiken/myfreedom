@extends('layouts.app')
@section('title', 'Головна - MYFREEDOM')
@section('content')
<section class="hero">
    <div class="hero_left">
        <div class="hero_tag"><p>#РемонтПідОренду</p></div>
        <br>
        <h1 class="h1">Курс <span style="color: #E1CF95;">"Як зробити ремонт так, щоб квартира здавалася з першого дня"</span></h1>
        <br>
        <h3 style="color: white">Як підготувати квартиру до здачі в оренду з максимальним доходом</h3>
        <br>
        <br>
        <div class="flex20">
            <a href="#consultation-form"><button>Замовити консультацію</button></a>
            <!--<p class="sub">Отримай перевірені стандарти від <br>найбільшої управляючої компанії в Україні <span style="color:#E1CF95;">MYFREEDOM</span></p>-->
        </div>
    </div>
    <div class="hero_right">
        {{-- <div class="hero_video">
            <div class="play-button"></div>
        </div> --}}
        <img src="/images/intro_photo.png">
    </div>
</section>
<br>
<br>
<section class="course-benefits">
  <div class="container" style="display: flex; flex-direction: column; align-items: center;">
    <div class="section-header">
      <h2>Для кого буде корисним цей курс?</h2>
      <p class="subtitle">Для всіх, хто робить ремонт у квартирі під здачу</p>
      <p class="description">Ми вже знаємо, що працює, а що ні — ви просто повторюєте готову схему</p>
    </div>

    <div class="warning-block">
      <div class="icon">❌</div>
      <h3 style="color: white;">Типові проблеми власників квартир, які з'їдають прибуток і час</h3>
    </div>

    <div class="problems-list">

      <div class="problem-item">
        <div class="icon">💸</div>
        <div class="content">
          <h4>Переплата за ремонт</h4>
          <p>Без досвіду ви легко витрачаєте 20–30% зайвих грошей на матеріали та меблі, які не впливають на дохід.</p>
          <p class="solution">👉 У курсі ви отримуєте готові списки матеріалів і техніки, що працюють для оренди.</p>
        </div>
      </div>

      <div class="problem-item">
        <div class="icon">📐</div>
        <div class="content">
          <h4>Неправильне планування</h4>
          <p>Орієнтація на власні смаки, а не на попит орендарів → квартира може простоювати місяцями.</p>
          <p class="solution">👉 Ми даємо готові планувальні рішення, перевірені на 330+ квартирах.</p>
        </div>
      </div>

      <div class="problem-item">
        <div class="icon">🛠️</div>
        <div class="content">
          <h4>Майстри роблять “як звикли”</h4>
          <p>Без чіткого ТЗ підрядники приймають рішення за вас, що веде до переробок і додаткових витрат.</p>
          <p class="solution">👉 Курс включає шаблони технічних завдань і аудит ключових етапів.</p>
        </div>
      </div>

      <div class="problem-item">
        <div class="icon">⏳</div>
        <div class="content">
          <h4>Втрата часу і нервів</h4>
          <p>Щоденний контроль ремонту, прийом меблів, суперечки з майстрами — усе це може тривати тижнями.</p>
          <p class="solution">👉 У вас буде автоматизований план і зрозумілий порядок дій, що економить до 80% вашого часу.</p>
        </div>
      </div>

      <div class="problem-item">
        <div class="icon">📊</div>
        <div class="content">
          <h4>Невідомо, коли окупляться вкладення</h4>
          <p>Без системи розрахунків ви не бачите реальної окупності квартири.</p>
          <p class="solution">👉 Ви отримаєте ROI-калькулятор і чітко знатимете, коли ремонт окупиться.</p>
        </div>
      </div>

    </div>
    <br>
    <br>
      <a href=""><button>Подивитись пакети курсу</button></a>
  </div>
</section>
<section class="stats-section">
    <div class="container statistic-block">
        <h2>Цей курс - не теорія, а реальний досвід <span>MYFREEDOM</span></h2>
        <div class="stats-grid">
            <div class="statistic-item card">
                <h3>25000</h3>
                <p>гостей заселено минулого року</p>
            </div>
            <div class="statistic-item card">
                <h3>330+</h3>
                <p>квартир під управлінням</p>
            </div>
            <div class="statistic-item card">
                <h3>7 років</h3>
                <p>досвіду на ринку</p>
            </div>
            <div class="statistic-item card">
                <h3>Найбільша</h3>
                <p>управляюча компанія в Україні</p>
            </div>
            <div class="statistic-item card">
                <h3>Ми знаємо</h3>
                <p>як зробити квартиру прибутковою</p>
            </div>
        </div>
    </div>
</section>

<section class="multi-before-after">
  <div class="container">
    <h2><span>Готові інтер'єри</span></h2>
    <p class="description">Три реальні кейси, де MYFREEDOM підготував квартири до прибуткової оренди</p>

    <div class="project-slider-grid">

      <article class="project-slider" data-slider>
        <div class="project-slider__viewport">
          <img src="/images/after1.png" alt="Інтер'єр у ЖК «Паркові Озера» — нова кухня" class="project-slider__image is-active" data-slide>
          <img src="/images/before1.png" alt="Інтер'єр у ЖК «Паркові Озера» — загальний вигляд" class="project-slider__image" data-slide>
          <img src="/images/after2.png" alt="Інтер'єр у ЖК «Паркові Озера» — зона вітальні" class="project-slider__image" data-slide>
          <img src="/images/before2.png" alt="Інтер'єр у ЖК «Паркові Озера» — санвузол" class="project-slider__image" data-slide>
          <button type="button" class="project-slider__control project-slider__control--prev" data-slider-prev aria-label="Попереднє фото">‹</button>
          <button type="button" class="project-slider__control project-slider__control--next" data-slider-next aria-label="Наступне фото">›</button>
        </div>
        <div class="project-slider__dots">
          <button type="button" class="project-slider__dot is-active" data-slider-dot aria-label="Фото 1"></button>
          <button type="button" class="project-slider__dot" data-slider-dot aria-label="Фото 2"></button>
          <button type="button" class="project-slider__dot" data-slider-dot aria-label="Фото 3"></button>
          <button type="button" class="project-slider__dot" data-slider-dot aria-label="Фото 4"></button>
        </div>
        <p class="project-slider__caption">ЖК «Паркові Озера»</p>
      </article>

      <article class="project-slider" data-slider>
        <div class="project-slider__viewport">
          <img src="/images/after2.png" alt="Інтер'єр у ЖК «Нова Англія» — простора студія" class="project-slider__image is-active" data-slide>
          <img src="/images/before2.png" alt="Інтер'єр у ЖК «Нова Англія» — ванна кімната" class="project-slider__image" data-slide>
          <img src="/images/after3.png" alt="Інтер'єр у ЖК «Нова Англія» — спальня" class="project-slider__image" data-slide>
          <img src="/images/before3.png" alt="Інтер'єр у ЖК «Нова Англія» — кухня" class="project-slider__image" data-slide>
          <button type="button" class="project-slider__control project-slider__control--prev" data-slider-prev aria-label="Попереднє фото">‹</button>
          <button type="button" class="project-slider__control project-slider__control--next" data-slider-next aria-label="Наступне фото">›</button>
        </div>
        <div class="project-slider__dots">
          <button type="button" class="project-slider__dot is-active" data-slider-dot aria-label="Фото 1"></button>
          <button type="button" class="project-slider__dot" data-slider-dot aria-label="Фото 2"></button>
          <button type="button" class="project-slider__dot" data-slider-dot aria-label="Фото 3"></button>
          <button type="button" class="project-slider__dot" data-slider-dot aria-label="Фото 4"></button>
        </div>
        <p class="project-slider__caption">ЖК «Нова Англія»</p>
      </article>

      <article class="project-slider" data-slider>
        <div class="project-slider__viewport">
          <img src="/images/after3.png" alt="Інтер'єр у ЖК «Квітневий Сад» — оновлений простір" class="project-slider__image is-active" data-slide>
          <img src="/images/before3.png" alt="Інтер'єр у ЖК «Квітневий Сад» — коридор" class="project-slider__image" data-slide>
          <img src="/images/after1.png" alt="Інтер'єр у ЖК «Квітневий Сад» — кухня" class="project-slider__image" data-slide>
          <img src="/images/before1.png" alt="Інтер'єр у ЖК «Квітневий Сад» — зона відпочинку" class="project-slider__image" data-slide>
          <button type="button" class="project-slider__control project-slider__control--prev" data-slider-prev aria-label="Попереднє фото">‹</button>
          <button type="button" class="project-slider__control project-slider__control--next" data-slider-next aria-label="Наступне фото">›</button>
        </div>
        <div class="project-slider__dots">
          <button type="button" class="project-slider__dot is-active" data-slider-dot aria-label="Фото 1"></button>
          <button type="button" class="project-slider__dot" data-slider-dot aria-label="Фото 2"></button>
          <button type="button" class="project-slider__dot" data-slider-dot aria-label="Фото 3"></button>
          <button type="button" class="project-slider__dot" data-slider-dot aria-label="Фото 4"></button>
        </div>
        <p class="project-slider__caption">ЖК «Квітневий Сад»</p>
      </article>

    </div>
  </div>
</section>


<section class="testimonials">
    <div class="testimonials__intro">
    <div class="testimonials__intro_left">
        <img src="/images/testimonials_intro.png" alt="" style="max-width: 450px">
    </div>
    <div class="testimonials__intro_right">
            <h2>Відгуки клієнтів</h2>
            <p class="subtitle">Реальні результати інвесторів, що обрали стандарти MYFREEDOM</p>
            <p>Ми супроводжуємо кожен об'єкт від концепції до заселення. Завдяки чітким регламентам і команді кураторів наші клієнти швидше виходять на окупність і піднімають середній чек оренди.</p>
        </div>
        </div>
    <div class="container testimonials__content">

        <div class="testimonials__cards">
            <article class="testimonial-card">
                <div class="testimonial-rating">
                    <span>★</span><span>★</span><span>★</span><span>★</span><span>★</span>
                </div>
                <blockquote>“Здав квартиру вже через 2 тижні після ремонту”</blockquote>
                <p class="testimonial-text">"MYFREEDOM допомогли сформувати чітке ТЗ для майстрів та підібрати меблі. Після здачі об'єкта ми одразу отримали кілька заявок і заселили першого орендаря без простою."</p>
                <div class="testimonial-author">
                    <p class="name">Андрій, власник квартири у ЖК «Сирецькі Сади»</p>
                </div>
            </article>

            <article class="testimonial-card">
                <div class="testimonial-rating">
                    <span>★</span><span>★</span><span>★</span><span>★</span><span>★</span>
                </div>
                <blockquote>“Зекономив 25% бюджету завдяки стандартам”</blockquote>
                <p class="testimonial-text">"Команда одразу вказала, де можна оптимізувати матеріали й техніку без втрати якості. У клієнтів захоплення від планування, а ми зберегли бюджет на ще один проєкт."</p>
                <div class="testimonial-author">
                    <p class="name">Марина, інвесторка з Києва</p>
                </div>
            </article>

            <article class="testimonial-card">
                <div class="testimonial-rating">
                    <span>★</span><span>★</span><span>★</span><span>★</span><span>★</span>
                </div>
                <blockquote>“Квартира виглядає краще за 90% на ринку”</blockquote>
                <p class="testimonial-text">"Дизайнери MYFREEDOM створили концепт, що виділяється серед інших оголошень. Підбір декору та фото після здачі привели більше відгуків, ніж будь-які платні просування."</p>
                <div class="testimonial-author">
                    <p class="name">Олексій, власник апартаментів у Львові</p>
                </div>
            </article>
        </div>
    </div>
</section>


<section class="invest-plans">
    <div class="container">
        <div class="invest-plans__intro">
            <h2>Пакети участі</h2>
            <p style="color: #fff">Три пакети участі, в залежності від вашого запиту</p>
        </div>

        <div class="invest-plans__grid">
            <article class="invest-card invest-card--basic">
                <div class="invest-card__head">
                    <p class="eyebrow">STANDART</p>
                    <h3>STANDART</h3>
                    <span class="invest-card__tag">Базовий набір матеріалів</span>
                    <p class="invest-card__price">$800</p>
                </div>
                <div class="invest-card__body">
                    <p>Для тих, хто вже має досвід у ремонтах і хоче зробити все сам, але по системі. Ми надаємо стандарти та шаблони, щоб квартира була готова до здачі швидше та якісніше.</p>
                    <a href="" class="link">→ Робите самі, але не наосліп</a>
                    <a href="#consultation-form" class="btn btn-outline">Обрати STANDART</a>
                </div>
            </article>

            <article class="invest-card invest-card--gold">
                <div class="invest-card__head">
                    <p class="eyebrow">INVEST Smart</p>
                    <h3>SMART</h3>
                    <span class="invest-card__tag">Автоматизований курс із підтримкою</span>
                    <p class="invest-card__price">$1500</p>
                </div>
                <div class="invest-card__body">
                    <p>Для тих, хто хоче пройти шлях самостійно, але за перевіреною системою. Отримуєте чеклісти, інструкції, калькулятори, приклади та технічний аудит ключових етапів.</p>
                    <a href="" class="link">→ Власний досвід — без зайвих помилок</a>
                    <a href="#consultation-form" class="btn">Обрати SMART</a>
                </div>
            </article>

            <article class="invest-card invest-card--Premium">
                <div class="invest-card__head">
                    <p class="eyebrow">PREMIUM</p>
                    <h3>PREMIUM</h3>
                    <span class="invest-card__tag">Повний супровід “під ключ” із куратором</span>
                    <p class="invest-card__price">3%</p>
                </div>
                <div class="invest-card__body">
                    <p>Для тих, хто хоче максимально зекономити час: ми допомагаємо від підбору квартири / ремонту до заселення першого орендаря.</p>
                    <a href="" class="link">→ Мінімум ризиків, максимум спокою</a>
                    <a href="#consultation-form" class="btn" style="margin-top: 54px;">Обрати PREMIUM</a>
                </div>
            </article>
        </div>
    </div>
</section>


<section class="package-compare">
    <div class="container">
        <div class="package-compare__intro">
            <h2>Порівняння пакетів</h2>
            <p class="sub">Бачите, який обсяг підтримки отримаєте з кожним рівнем співпраці.</p>
        </div>

        <div class="package-table-wrapper glass">
            <table class="package-table">
                <thead>
                    <tr>
                        <th style="color: transparent">Послуга / Перевага</th>
                        <th>PREMIUM</th>
                        <th>SMART</th>
                        <th>STANDART</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Стратегічна консультація</td>
                        <td data-label="INVEST PREMIUM">
                            <span class="sr-only">Включено</span>
                            <span class="package-note" style="color: #E1CF95;">від 3% від загальної суми інвестиції</span>
                        </td>
                        <td data-label="SMART"><span class="package-dash">—</span></td>
                        <td data-label="SELF"><span class="package-dash">—</span></td>
                    </tr>
                    <tr>
                        <td>Юридичний супровід</td>
                        <td data-label="INVEST PREMIUM">
                            <span class="package-icon package-icon--check" aria-hidden="true">✓</span>
                            <span class="sr-only">Включено</span>
                        </td>
                        <td data-label="SMART"><span class="package-dash">—</span></td>
                        <td data-label="SELF"><span class="package-dash">—</span></td>
                    </tr>
                    <tr>
                        <td>Технагляд</td>
                        <td data-label="INVEST PREMIUM">
                            <span class="sr-only">Включено</span>
                            <span class="package-note" style="color: #E1CF95;">4 виїзди</span>
                        </td>
                        <td data-label="SMART">
                            <span class="sr-only">Включено</span>
                            <span class="package-note" style="color: #E1CF95;">1 виїзд</span>
                        </td>
                        <td data-label="SELF">
                            <span class="sr-only">Включено</span>
                            <span class="package-note" style="color: #E1CF95;">Додатково</span>
                        </td>
                    </tr>
                    <tr>
                        <td>ТЗ та комплектація</td>
                        <td data-label="INVEST PREMIUM">
                            <span class="sr-only">Включено</span>
                            <span class="package-note" style="color: #E1CF95;">індивідуально</span>
                        </td>
                        <td data-label="SMART">
                            <span class="sr-only">Включено</span>
                            <span class="package-note" style="color: #E1CF95;">шаблони</span>
                        </td>
                        <td data-label="SELF">
                            <span class="sr-only">Включено</span>
                            <span class="package-note" style="color: #E1CF95;">інструкція</span>
                        </td>
                    </tr>
                    <tr>
                        <td>Персональний куратор</td>
                        <td data-label="INVEST PREMIUM">
                            <span class="package-icon package-icon--check" aria-hidden="true">✓</span>
                            <span class="sr-only">Включено</span>
                        </td>
                        <td data-label="SMART"><span class="package-dash">—</span></td>
                        <td data-label="SELF"><span class="package-dash">—</span></td>
                    </tr>
                    <tr>
                        <td>Фінальний контроль якості</td>
                        <td data-label="INVEST PREMIUM">
                            <span class="package-icon package-icon--check" aria-hidden="true">✓</span>
                            <span class="sr-only">Включено</span>
                        </td>
                        <td data-label="SMART">
                            <span class="package-icon package-icon--check" aria-hidden="true">✓</span>
                            <span class="sr-only">Включено</span>
                        </td>
                        <td data-label="SELF"><span class="package-note" style="color: #E1CF95;">самостійно</span></td>
                    </tr>
                    <tr>
                        <td>ROI-калькулятор і чек-листи</td>
                        <td data-label="INVEST PREMIUM">
                            <span class="package-icon package-icon--check" aria-hidden="true">✓</span>
                            <span class="sr-only">Включено</span>
                        </td>
                        <td data-label="SMART">
                            <span class="package-icon package-icon--check" aria-hidden="true">✓</span>
                            <span class="sr-only">Включено</span>
                        </td>
                        <td data-label="SELF">
                            <span class="package-icon package-icon--check" aria-hidden="true">✓</span>
                            <span class="sr-only">Включено</span>
                        </td>
                    </tr>
                    <tr>
                        <td>Можливість консультації</td>
                        <td data-label="INVEST PREMIUM">
                            <span class="sr-only">Включено</span>
                            <span class="package-note" style="color: #E1CF95;">у пакеті</span>
                        </td>
                        <td data-label="SMART">
                            <span class="sr-only">Включено</span>
                            <span class="package-note" style="color: #E1CF95;">1 год</span>
                        </td>
                        <td data-label="SELF"><span class="package-note" style="color: #E1CF95;">додатково</span></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <br>
    <div style="width: 100%; text-align: center;">
        <h2>Не експериментуйте з грошима</h2>
        <p style="color: white">Зробіть ремонт за стандартами, які працюють вже в <span style="color: #E1CF95;">330+ квартирах</span></p>
        <br>
        <a href="#consultation-form"><button>Дізнатись, як це працює</button></a>
    </div>
</section>



<section class="faq" id="faq">
    <div class="container">
        <div class="faq__intro">
            <h2>FAQ</h2>
            <p class="subtitle">Відповіді, щоб ви одразу розуміли формат і можливості курсу</p>
        </div>

        <div class="faq__grid">
            <article class="faq-item">
                <header class="faq-item__header">
                    <span class="faq-item__icon" aria-hidden="true">❓</span>
                    <h3>Чи підійде курс, якщо я не з Києва?</h3>
                </header>
                <p>👉 Так. Курс створений у дистанційному форматі — ви отримуєте доступ до матеріалів онлайн і можете навчатися у будь-якому місті. Усі стандарти універсальні й підходять для квартир під оренду в будь-якому регіоні України.</p>
            </article>

            <article class="faq-item">
                <header class="faq-item__header">
                    <span class="faq-item__icon" aria-hidden="true">❓</span>
                    <h3>Якщо квартира вже є, чи можу приєднатись?</h3>
                </header>
                <p>👉 Звісно. Наш курс підходить як тим, хто тільки планує покупку, так і власникам готової квартири. Якщо житло вже є, ви отримаєте алгоритм ремонту, облаштування та підготовки до здачі з мінімумом ризиків і зайвих витрат.</p>
                <ul class="faq-sublist">
                    <li><strong>SMART</strong> — якщо хочете керувати процесом самостійно, але за чіткими стандартами.</li>
                    <li><strong>PREMIUM</strong> — якщо хочете передати нам усе: від аналізу стану квартири до здачі в оренду.</li>
                </ul>
            </article>

            <article class="faq-item">
                <header class="faq-item__header">
                    <span class="faq-item__icon" aria-hidden="true">❓</span>
                    <h3>Чи можна розбити оплату?</h3>
                </header>
                <p>👉 Так. Ми надаємо можливість поетапної оплати:</p>
                <ul class="faq-sublist">
                    <li>Перший платіж — після консультації та старту проєкту.</li>
                    <li>Другий — після затвердження технічного завдання чи початку ремонту.</li>
                    <li>Третій — на фінальному етапі перед здачею в оренду.</li>
                </ul>
                <p>Ви бачите прозорий прогрес і оплачуєте по факту.</p>
            </article>

            <article class="faq-item">
                <header class="faq-item__header">
                    <span class="faq-item__icon" aria-hidden="true">❓</span>
                    <h3>А якщо захочу змінити пакет?</h3>
                </header>
                <p>👉 Так, перехід між пакетами можливий. Якщо ви почали, наприклад, зі SMART, але вирішили придбати більше функцій — можна перейти на PREMIUM, просто сплативши різницю. І навпаки — теж можливо.</p>
                <p>Гнучкість — одна з наших переваг.</p>
            </article>

            <article class="faq-item">
                <header class="faq-item__header">
                    <span class="faq-item__icon" aria-hidden="true">❓</span>
                    <h3>Скільки часу треба на проходження курсу?</h3>
                </header>
                <p>👉 Курс побудований модульно, ви можете проходити його у власному темпі. В середньому, для опрацювання всіх матеріалів потрібно 2–3 тижні, але вони залишаються у вас назавжди. Ви можете повертатися до них у будь-який момент, коли будете робити ремонт або готувати нову квартиру.</p>
            </article>

            <article class="faq-item">
                <header class="faq-item__header">
                    <span class="faq-item__icon" aria-hidden="true">❓</span>
                    <h3>Хто займається пошуком орендарів?</h3>
                </header>
                <p>👉 Наша компанія має досвід у здачі 330+ квартир і роботи з понад 25&nbsp;000 гостей. У пакеті PREMIUM ми допомагаємо з пошуком і управлінням орендарями. У пакетах SMART та STANDART ви отримаєте інструкції та стандарти, які допоможуть вам самостійно залучати перевірених орендарів.</p>
            </article>
        </div>
    </div>
</section>



    @include('form')
@endsection

<script>
  document.addEventListener("DOMContentLoaded", function () {
    document.querySelectorAll(".ba-item").forEach(function (item) {
      const slider = item.querySelector(".ba-slider");
      const overlay = item.querySelector(".ba-overlay");

      slider.addEventListener("input", function () {
        overlay.style.width = `${this.value}%`;
      });
    });
  });
</script>
