<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <div id="root">
<ul>
  <li v-for="name in names" v-text="name"></li>
</ul>
<input id="input" type="text" v-model="newName" >
<button @click="addName">Add name</button>
  </div>

<script src="https://unpkg.com/vue@2.4.4/dist/vue.js"></script>
  <script>

let app =
new Vue({
  el: '#root',
  data: {
    newName : '',
    names : ['Joe', 'Marry', 'Jane', 'Jack']
  },
methods: {
  addName(){
    this.names.push(this.newName);
    this.newName = '';
  }
}
});


  </script>
  <script>document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1"></' + 'script>')</script></html>

</body>
