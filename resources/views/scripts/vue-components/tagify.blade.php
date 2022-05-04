<script>
    Vue.component('tagify', {
        data: function () {
            return {
                items: [],
            }
        },
        props: ['value', 'detach'],
        template: `<input class="form-control form-control-solid customLook" :value="value"/>`,
        computed: {

        },
        mounted() {
            var self = this;
            new Tagify(this.$el, {
                userInput: false
            }).on('change', function (val) {
                var map = [];
                if (val.detail.tagify.value) {
                    map = val.detail.tagify.value.map(d => {
                        return d.value;
                    });
                }

                self.$emit('input', map)
            }).on('remove', function (val, kal) {

                self.$emit('update:detach', val.detail.data.value)

            });
        },

        watch: {

        },
        destroyed: function () {
            // $(this.$el).off().select2('destroy')
        },

        methods: {



        },
    })

</script>
