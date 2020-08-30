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
        customers_page: 1,
        transactions_page: 1,
        transactions: [],
        customer: {
            id: 0,
            ccustname: '',
            email: '',
            ccuststate: '',
            ccustcc: '',
            transactions: []
        },
        transaction: {
            id: 0,
            customer_id: 0,
            cproditem: '',
            cprodtitle: '',
            cprodtype: '',
            ctransaction: '',
            ctransaffiliate: '',
            ctransamount: 0,
            ctranspaymentmethod: '',
            ctransvendor: '',
            ctransreceipt: '',
            cupsellreceipt: '',
            caffitid: '',
            cvendthru: '',
            cverify: '',
            ctranstime: '',
            customer: {
                id: 0,
                ccustname: '',
                email: '',
                ccuststate: '',
                ccustcc: '',
            }
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
            let customer = this.customer;
            this.update(
                `/api/v1/customers/${customer.id}`,
                customer,
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
            let transaction = this.transaction;
            this.update(
                `/api/v1/transactions/${transaction.id}`,
                transaction,
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

        deleteCustomer()
        {
            let customer = this.customer;
            this.delete(
                `/api/v1/customers/${customer.id}`,
                function (data, error, vueApp) {
                    if(error)
                    {

                    }
                    else
                    {
                        vueApp.customers = vueApp.customers.filter(function (c) {
                            return c.id !== customer.id;
                        });
                    }
                },
                this
            );
        },

        deleteTransaction()
        {
            let transaction = this.transaction;
            this.delete(
                `/api/v1/transactions/${transaction.id}`,
                function (data, error, vueApp) {
                    if(error)
                    {

                    }
                    else
                    {
                        vueApp.transactions = vueApp.transactions.filter(function (t) {
                            return t.id !== transaction.id;
                        });
                    }
                },
                this
            );
        },

        increase_cust_page()
        {
            this.customers_page += 1;
            if(this.total_cust_pages < this.customers_page) this.customers_page = this.total_cust_pages;
        },

        decrease_cust_page()
        {
            this.customers_page -= 1;
            if(0 > this.customers_page) this.customers_page = 1;
        },

        increase_trans_page()
        {
            this.transactions_page += 1;
            if(this.total_trans_pages < this.transactions_page) this.transactions_page = this.total_cust_pages;
        },

        decrease_trans_page()
        {
            this.transactions_page -= 1;
            if(0 > this.customers_page) this.transactions_page = 1;
        }
    },

    computed: {
        filtered_transactions()
        {
            return this.transactions;
        },

        filtered_customers()
        {
            return this.customers
        },

        total_cust_pages()
        {
            return Math.ceil(this.filtered_customers.length / 10);
        },

        total_trans_pages()
        {
            return Math.ceil(this.filtered_transactions.length / 10);
        }
    },

    mounted()
    {
        if(window.location.pathname === '/customers')
        {
            this.loadCustomers();
        }
        else if(window.location.pathname === '/transactions')
        {
            this.loadTransactions();
        }
    }
});
