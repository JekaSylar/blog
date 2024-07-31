import { createInertiaApp } from '@inertiajs/vue3'
import createServer from '@inertiajs/vue3/server'
import { renderToString } from '@vue/server-renderer'
import { createSSRApp, h } from 'vue'
import { ZiggyVue } from '../../vendor/tightenco/ziggy';
import AdminLayout from "@/Layouts/AdminLayout.vue";
import {resolvePageComponent} from "laravel-vite-plugin/inertia-helpers";

createServer(page =>
    createInertiaApp({
        page,
        render: renderToString,
        resolve: (name) =>
            resolvePageComponent(`./Pages/${name}.vue`, import.meta.glob("./Pages/**/*.vue")).then((module) => {
                const page = module.default;

                if (name.startsWith('Admin/')) {
                    page.layout ??= [AdminLayout];
                }
                //else {
                //     page.layout ??= [FrontLayout];
                // }
                return page;
            }),
        setup({ App, props, plugin }) {
            return createSSRApp({
                render: () => h(App, props),
            })
                .use(plugin)
                .use(ZiggyVue, {
                    ...page.props.ziggy,
                    location: new URL(page.props.ziggy.location),
                });
        },
    }),
)
