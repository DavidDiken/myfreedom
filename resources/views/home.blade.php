@extends('layouts.app')
@section('title', 'Головна - MYFREEDOM')
@section('content')
<section class="hero">
    <div class="hero_left">
        <div class="hero_tag"><p>#РемонтПідОренду</p></div>
        <br>
        <h1 class="h1">Курс "Як зробити ремонт так, щоб квартира здавалася з першого дня"</h1>
        <br>
        <h3 style="color: white">Покрокові інструкції від вибору ЖК та планування квартири до здачі першому орендарю<span>...або як підготувати квартиру до здачі в оренду з максимальним доходом</span></h3>
        <br>
        <br>
        <div class="flex20">
            <a href="#consultation-form"><button>Замовити консультацію</button></a>
            <p class="sub">Отримай перевірені стандарти від <br>найбільшої управляючої компанії в Україні <span style="color:#E1CF95;">MYFREEDOM</span></p>
        </div>
    </div>
    <div class="hero_right">
        <div class="hero_video">
            <div class="play-button"></div>
        </div>
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
<section>
    <div class="statistic-block">
        <h2 style="color: #ffffff">Цей курс - не теорія, а реальний досвід <span>MYFREEDOM</span></h2>
        <div class="flex20" style="align-items: flex-start; justify-content: space-between; flex-wrap: nowrap;">
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
            <h3>найбільша</h3>
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
    <h2>Галерея <span>до / після</span></h2>
    <p class="description">Кожен приклад — реальна квартира, яку ми підготували до оренди</p>

    <div class="before-after-grid">

      <!-- Элемент 1 -->
      <div class="ba-item">
        <div class="ba-wrapper">
            
          <img src="/images/before1.png" class="ba-img before">
          <div class="ba-overlay">
            <img src="/images/after1.png" class="ba-img after">
          </div>
          <input type="range" min="0" max="100" value="50" class="ba-slider">
        </div>
        <p class="ba-caption">Кухня в ЖК “Комфорт+”</p>
      </div>

      <!-- Элемент 2 -->
      <div class="ba-item">
        <div class="ba-wrapper">
          <img src="/images/before2.png" class="ba-img before">
          <div class="ba-overlay">
            <img src="/images/after2.png" class="ba-img after">
          </div>
          <input type="range" min="0" max="100" value="50" class="ba-slider">
        </div>
        <p class="ba-caption">Санвузол у ЖК “Софія”</p>
      </div>

      <!-- Элемент 3 -->
      <div class="ba-item">
        <div class="ba-wrapper">
          <img src="/images/before3.png" class="ba-img before">
          <div class="ba-overlay">
            <img src="/images/after3.png" class="ba-img after">
          </div>
          <input type="range" min="0" max="100" value="50" class="ba-slider">
        </div>
        <p class="ba-caption">Вітальня у ЖК “Парковий”</p>
      </div>

      <!-- Добавляй больше блоков по той же структуре -->

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
