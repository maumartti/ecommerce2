/*
 * Slim v4.17.1 - Image Cropping Made Easy
 * Copyright (c) 2018 Rik Schennink - http://slimimagecropper.com
 */
<template>
    <div class="slim">
        <slot></slot>
    </div>
</template>

<script>
  // Slim (place slim CSS and slim.module.js file in same folder as this file)
  import Slim from './slim.module.js'

  var instance = null

  export default {
    props: ['options','initialimage'],
    name: 'slim-cropper',
    mounted: function () {

      //agregado 
      var imgName = "null";
      if(typeof this.initialimage !== 'undefined'){
          this.options.initialImage = this.initialimage;//inicial imagen colocada en el conponent 
          var imgName = this.initialimage.split('/').pop();
      }
      //end agregado

      if (this.options.initialImage && imgName != "undefined" && imgName != "null") {
        var img = document.createElement('img')
        img.setAttribute('alt', '')
        img.src = this.options.initialImage
        this.$el.appendChild(img)
      }
      instance = new Slim(this.$el, this.options, this.initialimage)
    },
    beforeDestroy: function () {
      instance.destroy()
    }
  }
</script>
<style lang="css">
    @import "./slim.min.css";
</style>
