let mix = require('laravel-mix');
let BrowserSyncPlugin = require('browser-sync-webpack-plugin');

mix.webpackConfig({
    plugins: [
        new BrowserSyncPlugin({
            host: 'localhost',
            port: 3000,
            proxy: 'http://localhost:8000', // aqui você precisa informar a porta que sua aplicação esta rodando
            files: [
                'app/**/*',
                'public/**/*',
                'resources/views/**/*',
                'routes/**/*'
            ]
        })
    ]
});
