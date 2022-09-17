<script setup>
import BannerComponent from "@/js/components/BannerComponent.vue";
import BenefitsComponent from "@/js/components/BenefitsComponent.vue";
import ServicesComponent from "@/js/components/ServicesComponent.vue";
import ConsultingComponent from "@/js/components/ConsultingComponent.vue";
import FooterComponent from "@/js/components/FooterComponent.vue";
const goto = (navEl) => {
  let element = document.querySelector(`#${navEl}`);
  element.scrollIntoView({ behavior: "smooth" });
  toggleMenu();
};

const toggleMenu = () => {
  const iconMenu = document.querySelector(".menu-icon");
  if (iconMenu) {
    const menuBody = document.querySelector(".navbar");
    menuBody.classList.toggle("active");
    iconMenu.classList.toggle("active");
  }
};
</script>

<template>
  <header class="header">
    <div class="container">
      <div class="header-inner">
        <div class="logo">
          <div class="logo-img">
            <img src="@/images/logo.jpg" alt="image" />
          </div>
          <div class="logo-title">
            <p>BISH</p>
            <p>Santehnik</p>
          </div>
        </div>
        <div class="header-menu">
          <div class="menu-icon" @click="toggleMenu">
            <span></span>
          </div>
          <div class="navbar">
            <a @click.prevent="goto('benefits')" href="#">Наши преимущества</a>
            <a @click.prevent="goto('services')" href="#">Услуги</a>
            <a @click.prevent="goto('consulting')" href="#"
              >Бесплатная консультация</a
            >
          </div>
        </div>
      </div>
    </div>
  </header>
  <banner-component />
  <benefits-component />
  <services-component />
  <consulting-component />
  <footer-component />
</template>

<style scoped></style>
