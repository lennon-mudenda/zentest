const axios = window.axios;

module.exports = {

    async get(path, callback, vueApp)
    {
        await axios.get(path)
            .then(function (result) {
                callback(result.data, null, vueApp);
            })
            .catch(function (error) {
                callback(null, error, vueApp);
            });
    },

    async post(path, data, callback, vueApp)
    {
        await axios.post(path, data)
            .then(function (result) {
                callback(result.data, null, vueApp);
            })
            .catch(function (error) {
                callback(null, error, vueApp);
            });
    },

    async update(path, data, callback, vueApp)
    {
        await axios.patch(path, data)
            .then(function (result) {
                callback(result.data, null, vueApp);
            })
            .catch(function (error) {
                callback(null, error, vueApp);
            });
    },

    async delete(path, callback, vueApp)
    {
        await axios.get(path)
            .then(function (result) {
                callback(result.data, null, vueApp);
            })
            .catch(function (error) {
                callback(null, error, vueApp);
            });
    }

};
