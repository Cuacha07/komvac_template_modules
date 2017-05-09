<!-- Vue Components & Mixins -->
@include('components.vue.vuePagination')
@include('components.vue.vueHelperFunctions')
@include('components.vue.vueFormErrors')
@include('components.vue.vueNotifications')
<!-- Vue Components & Mixins -->

<script>
//Laravel's Token
Vue.http.headers.common['X-CSRF-TOKEN'] = document.querySelector('#token').getAttribute('content');

var app = new Vue ({
    mounted: function () {

    },

    el: "#app",

    mixins: [helperFunctions, notifications],

    data: {

    },

    methods: {

    }
});
</script>