<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>comp</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.5.3/css/bulma.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<style>
body{
  padding-top:40px;
}
</style>
<body>

  <div id="root" class="container">


    <tabs>
      <tab name="Message" :selected="true">
        <message title="Hello World" body="Lorem ipsum dolor sit amet." >
        </message>
      </tab>

      <tab name="Modal test">

        <modal v-if="showModal" @close="showModal = false">
        Hi.
          Lorem ipsum dolor sit amet.
        </modal>
        <button @click="showModal = true" > Show Modal</button>
      </tab>

      <tab name="About Vision">
        <h1>Content about vision</h1>
      </tab>
      </tabs>
    </div>



  <script src="https://unpkg.com/vue@2.4.4/dist/vue.js"></script>
  <script src="{{URL::asset('/js/main.js')}}"></script>

</body>
</html>
