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
    <h1>All tasks</h1>
<ul>
  <li v-for="task in tasks"  v-text="task.description"></li>
</ul>
    <h1>Incomplete tasks</h1>
<ul>
  <li v-for="task in IncompleteTasks" v-if="!task.completed" v-text="task.description"></li>
</ul>

</div>
<script src="https://unpkg.com/vue@2.4.4/dist/vue.js"></script>
  <script>

let app =
new Vue({
  el: '#root',
  data: {
    tasks:[
      {description: 'go to store', completed: false},
      {description: 'second task', completed: true},
      {description: 'third task', completed: true},
      {description: 'forth task', completed: false}
    ],
      },
    computed: {
      IncompleteTasks(){
        return this.tasks.filter(task => !task.completed);
      }

    }
});


  </script>
  <script>document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1"></' + 'script>')</script></html>

</body>
