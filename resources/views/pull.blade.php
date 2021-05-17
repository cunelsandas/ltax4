<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/abutton.css') }}">
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css"/>

    <!-- Styles -->

    <style>

        .fa-file-export {
            color: #e2e1dd;
        }
        h1 {
            color: white;
            alignment: center;
        }
    </style>

    <style>
        body {

        }
    </style>

</head>
<body>
<div id="app">

    <div v-for="dateget in allData">
        <h1>
      ข้อมูลของคุณอัพเดทล่าสุดเมือ  @{{ dateget }}
        </h1>
    </div>

    <div class="button" v-on:click="update">
        <input id="button" type="checkbox" >
        <label for="button">
            <div class='button_inner q' >
                <i class='l ion-log-in'></i>
                <span class='t' >อัพเดทข้อมูล</span>
                <span>
        <i class="tick ion-checkmark-round" ></i>
      </span>
                <div class='b_l_quad'>
                    <div class='button_spots'></div>
                    <div class='button_spots'></div>
                    <div class='button_spots'></div>
                    <div class='button_spots'></div>
                    <div class='button_spots'></div>
                    <div class='button_spots'></div>
                    <div class='button_spots'></div>
                    <div class='button_spots'></div>
                    <div class='button_spots'></div>
                    <div class='button_spots'></div>
                    <div class='button_spots'></div>
                    <div class='button_spots'></div>
                    <div class='button_spots'></div>
                    <div class='button_spots'></div>
                    <div class='button_spots'></div>
                    <div class='button_spots'></div>
                    <div class='button_spots'></div>
                    <div class='button_spots'></div>
                    <div class='button_spots'></div>
                    <div class='button_spots'></div>
                    <div class='button_spots'></div>
                    <div class='button_spots'></div>
                    <div class='button_spots'></div>
                    <div class='button_spots'></div>
                    <div class='button_spots'></div>
                    <div class='button_spots'></div>
                    <div class='button_spots'></div>
                    <div class='button_spots'></div>
                    <div class='button_spots'></div>
                    <div class='button_spots'></div>
                    <div class='button_spots'></div>
                    <div class='button_spots'></div>
                    <div class='button_spots'></div>
                    <div class='button_spots'></div>
                    <div class='button_spots'></div>
                    <div class='button_spots'></div>
                    <div class='button_spots'></div>
                    <div class='button_spots'></div>
                    <div class='button_spots'></div>
                    <div class='button_spots'></div>
                    <div class='button_spots'></div>
                    <div class='button_spots'></div>
                    <div class='button_spots'></div>
                    <div class='button_spots'></div>
                    <div class='button_spots'></div>
                    <div class='button_spots'></div>
                    <div class='button_spots'></div>
                    <div class='button_spots'></div>
                    <div class='button_spots'></div>
                    <div class='button_spots'></div>
                    <div class='button_spots'></div>
                    <div class='button_spots'></div>
                </div>
            </div>
        </label>
    </div>
</div>
</body>
</html>
<script>
    var app = new Vue({
        el: '#app',
        data: {
            allData: {},
        },

        created: function () {
            this.getData()
        },

        methods: {
            getData: function () {
                axios.get('./pull/show')
                    .then(response => {
                        this.allData = response.data;
                    });
            },

            update:  function (){
                axios.get('./pull/create')
                    .then(response => {
                        this.allData = response.data;
                    });
            }
        }
    })
</script>
