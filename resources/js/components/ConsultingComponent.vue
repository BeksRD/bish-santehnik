<template>
  <div class="consulting" id="consulting">
    <div class="container">
      <div class="consulting-inner">
        <div class="consulting-block">
          <h2>Бесплатная консультация</h2>
          <div class="consulting-content">
            <div class="cons-description">
              Оставьте нам свои данные и с Вами свяжется наш специалист
            </div>
            <form @submit.prevent="saveData" class="cons-form" action="" method="post">
              <label>
                <div>Имя:</div>
                <input v-model="name" type="text" placeholder="Имя" name="name">
              </label>
              <label>
                <div>Телефон:</div>
                <input v-model="mobile" type="text" placeholder="Телефон" name="phone">
              </label>
              <button :disabled="!enableButton" type="submit">Заказать звонок</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script setup>
import {computed, ref} from "vue";
import { useToast } from "vue-toastification";

const toast = useToast();
const name = ref();
const mobile = ref();
const enableButton = computed(() =>{
    return !!(name.value && mobile.value);
})

async function saveData() {

    await axios.post('/api/save/mobile', {name: name.value, mobile: mobile.value}).then(()=>{
        toast.success("Ваш номер отправлен специалисту", {
            position: "top-right",
            timeout: 5000,
            closeOnClick: true,
            pauseOnFocusLoss: true,
            pauseOnHover: true,
            draggable: true,
            draggablePercent: 0.6,
            showCloseButtonOnHover: false,
            hideProgressBar: true,
            closeButton: "button",
            icon: true,
            rtl: false
        });
    }).catch(()=>{
        toast.error("Вы уже отправляли и рассматривается специалистом", {
            position: "top-right",
            timeout: 5000,
            closeOnClick: true,
            pauseOnFocusLoss: true,
            pauseOnHover: true,
            draggable: true,
            draggablePercent: 0.6,
            showCloseButtonOnHover: false,
            hideProgressBar: true,
            closeButton: "button",
            icon: true,
            rtl: false
        });
    })
}

</script>

<style scoped>

</style>
