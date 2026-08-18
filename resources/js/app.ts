import { createInertiaApp } from '@inertiajs/vue3';
import AppLayout from './components/layouts/AppLayout.vue';
import GuestLayout from './components/layouts/GuestLayout.vue';

const appName = import.meta.env.VITE_APP_NAME || 'eCapas';

createInertiaApp({
    title: (title) => (title ? `${title} - ${appName}` : appName),
    layout(name) {
        if (name === 'Welcome') {
            return null;
        }

        if (name.startsWith('/landing')) {
            return GuestLayout;
        }

        if (name.startsWith('/auth')) {
            return AppLayout;
        }

        return GuestLayout;
    },
    progress: {
        color: '#38A3A5',
    },
});
