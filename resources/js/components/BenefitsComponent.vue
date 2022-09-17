<template>
  <div class="benefits" id="benefits">
    <div class="container">
      <div class="benefits-inner">
        <h2>Наши преимущества</h2>
        <div class="benefits-list">
          <div class="economy b-item">
            <div class="b-img">
              <img src="@/images/economy.png" alt="image" />
            </div>
            <h5>Экономия</h5>
            <div class="b-text">
              Благодаря скидкам/акциям, действующим в нашей компании, вы можете
              сэкономить на сантехнических работах
            </div>
          </div>
          <div class="quality b-item">
            <div class="b-img">
              <img src="@/images/quality.png" alt="image" />
            </div>
            <h5>Качество</h5>
            <div class="b-text">
              Мы не используем дешёвые материалы при монтаже труб водоснабжения
              и не устанавливаем смесители китайского производства
            </div>
          </div>
          <div class="guarantee b-item">
            <div class="b-img">
              <img src="@/images/guarantee.png" alt="image" />
            </div>
            <h5>Гарантия</h5>
            <div class="b-text">
              На все виды работ мы даем гарантию 12 месяцев, кроме прочистки
              канализации. Каждому клиенту предоставляем квитанцию
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "BenefitsComponent",
};
</script>

<style scoped></style>
