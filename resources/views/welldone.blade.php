<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<style>
.titleheader{
  color:red;
}
.is-loading{
  background:blue;
}
</style>
<body>
<div id="root">
  <h1 :class="className">Button below</h1>
<button :disabled="isDisabled" @click="isDisabledfunc">Click on me</button>
</div>

  <script src="https://unpkg.com/vue@2.4.4/dist/vue.js"></script>
    <script>

  let app =
  new Vue({
    el: '#root',
    data: {
      
      title: 'Title via JS',
      className: 'titleheader',
      isDisabled: false
    },
    methods: {
      ahtung() {
        alert('TREVOGA');

      },
      isDisabledfunc() {
        this.isDisabled = true;
      }
    },
    mounted(){

  }


    });


      </script>
      <script>document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1"></' + 'script>')</script></html>


</body>
</html>
