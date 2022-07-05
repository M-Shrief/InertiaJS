import './bootstrap';
import { createApp, h } from 'vue';
import { createInertiaApp , Link, Head } from '@inertiajs/inertia-vue3';
import { InertiaProgress } from '@inertiajs/progress';
import Layout from './Layouts/Layout.vue';

const appName = window.document.getElementsByTagName('title')[0]?.innerText || 'Laravel';

createInertiaApp({
    title: title => `Inertia's App`,
    resolve: async name => {
        let page = (await import(`./Pages/${name}.vue`)).default;
            // logical or operator if there is no value then it's assigned to that value
            if(page.layout === undefined) {
                page.layout = Layout;

            }

        return page;
    },
    setup({ el, app, props, plugin }) {
        return createApp({ render: () => h(app, props) })
            .use(plugin)
            .component("Link", Link)
            .component("Head", Head)
            .mixin({ methods: { route } })
            .mount(el);
    },
});

InertiaProgress.init({ color: '#4B5563' });
