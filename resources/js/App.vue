<template>
  <div>
    <up-header />
    <up-header-2 />
    <up-header-menu />
    <!-- 77777 -->
    <div class="container mx-auto" style="min-height:60vh;">
      <div class="flex flex-row w-full justify-around">
        <div class="basis-1/4">01</div>
        <div class="basis-1/4">02</div>
        <div class="basis-1/4">02</div>
        <div class="basis-1/4">02</div>
        <div class="basis-1/2">03</div>
      </div>
    </div>
    <app-footer />
  </div>
</template>

<script setup>
import UpHeader from './view/UpHeader.vue'
import UpHeader2 from './view/UpHeader2.vue'
import UpHeaderMenu from './view/UpHeaderMenu.vue'
import AppFooter from './view/app/Footer.vue'
</script>

<style lang="scss" scoped></style>
