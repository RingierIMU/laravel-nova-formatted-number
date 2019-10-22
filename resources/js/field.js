Nova.booting((Vue, router, store) => {
    Vue.component('index-formatted-number', require('./components/IndexField'))
    Vue.component('detail-formatted-number', require('./components/DetailField'))
    Vue.component('form-formatted-number', require('./components/FormField'))
})
