import './bootstrap';
import { createSSRApp, h } from 'vue'
import { createInertiaApp } from '@inertiajs/vue3'
import { ZiggyVue } from '../../vendor/tightenco/ziggy';

createInertiaApp({
    resolve: name => {
        const pages = import.meta.glob('./Pages/**/*.vue', { eager: true })
        return pages[`./Pages/${name}.vue`]
    },
    setup({ el, App, props, plugin }) {
        createSSRApp({render: () => h(App, props)})
            .use(ZiggyVue)
            .use(plugin)
            .mount(el)
    },
})
