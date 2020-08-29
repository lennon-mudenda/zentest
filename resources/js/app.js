require('./bootstrap');

const axiosMethods = require('./core/axiosMethods');

window.Vue = require('vue');

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('example-component', require('./components/ExampleComponent.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({

    el: '#app',

    data: {
        customers: [],
        transactions: [],
        customer: {

        },
        transaction: {

        }
    },

    methods: {

        ...axiosMethods,

        getIndex(list, id)
        {
            let i = 0;
            while(i < list.length && list[i].id !== id) i += 1;
            return i;
        },

        loadCustomers()
        {
            this.get(
                '/api/v1/customers',
                function (data, error, vueApp) {
                    if(error)
                    {

                    }
                    else
                    {
                        vueApp.customers = data.data;
                    }
                },
                this
            );
        },

        loadTransactions()
        {
            this.get(
                '/api/v1/transactions',
                function (data, error, vueApp) {
                    if(error)
                    {

                    }
                    else
                    {
                        vueApp.transactions = data.data;
                    }
                },
                this
            );
        },

        loadCustomer(id)
        {
            this.get(
                `/api/v1/customers/${id}`,
                function (data, error, vueApp) {
                    if(error)
                    {

                    }
                    else
                    {
                        vueApp.customer = data.data;
                    }
                },
                this
            );
        },

        loadTransaction(id)
        {
            this.get(
                `/api/v1/transactions/${id}`,
                function (data, error, vueApp) {
                    if(error)
                    {

                    }
                    else
                    {
                        vueApp.transaction = data.data;
                    }
                },
                this
            );
        },

        updateCustomer()
        {
            this.update(
                `/api/v1/customers/${this.customer.id}`,
                this.customer,
                function (data, error, vueApp) {
                    if(error)
                    {

                    }
                    else
                    {

                    }
                },
                this
            );
        },

        updateTransaction()
        {
            this.update(
                `/api/v1/transactions/${this.transaction.id}`,
                this.transaction,
                function (data, error, vueApp) {
                    if(error)
                    {

                    }
                    else
                    {

                    }
                },
                this
            );
        },

        deleteCustomer(id)
        {
            this.delete(
                `/api/v1/customers/${id}`,
                function (data, error, vueApp) {
                    if(error)
                    {

                    }
                    else
                    {

                    }
                },
                this
            );
        },

        deleteTransaction(id)
        {
            this.delete(
                `/api/v1/transactions/${id}`,
                function (data, error, vueApp) {
                    if(error)
                    {

                    }
                    else
                    {

                    }
                },
                this
            );
        }
    },

    computed: {

    },

    mounted()
    {

    }
});
