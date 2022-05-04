<script>
    

    Vue.component('select2', {
        data: function () {
            return {
                items: []
            }
        },
        props: ['multiple', 'placeholder', 'value', 'multipleselect', 'search', 'modal'],
        template: `<select class="form-select form-select-solid"  :multiple="(this.multiple ? true : false)">
                        <slot></slot>
                    </select>`,
        mounted() {
            var vm = this
            let options = {
                placeholder: vm.placeholder,
                // allowClear: true,
                
            };

            if (vm.multiple) {
                options = {
                    placeholder: vm.placeholder,
                    // allowClear: true,
                };
            }

            if(this.modal)  options['dropdownParent'] = $('#'+this.modal);
            if (!this.search) options['dropdownCssClass'] = 'noclass';
            $(this.$el)
                .select2(options)
                .val(this.value)
                .trigger('change')
                .on('change', function () {
                    vm.$emit('input', $(this).val())
                })
        },

        watch: {
            value: function (value) {
                if (this.multiple != "true") return;
                if ([...value].sort().join(",") !== [...$(this.$el).val()].sort().join(","))
                    $(this.$el).val(value).trigger('change');
            }
        },
        destroyed: function () {
            $(this.$el).off().select2('destroy')
        },

        methods: {



        },
    })
</script>