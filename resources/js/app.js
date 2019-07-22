import Vue from 'vue';

import Modal from './plugins/modal/ModalPlugin';

import ScrollLink from './components/ScrollLink';
import Dropdown from './components/Dropdown';
import Visible from './components/Visible';
import ConfirmButton from './components/ConfirmButton';
import ConfirmDialog from './components/ConfirmDialog';
import Tabs from './components/Tabs';
import Tab from './components/Tab';

window.Vue = Vue;

Vue.use(Modal);

Vue.component('scroll-link', ScrollLink);
Vue.component('dropdown', Dropdown);
Vue.component('visible', Visible);
Vue.component('confirm-button', ConfirmButton);
Vue.component('confirm-dialog', ConfirmDialog);
Vue.component('tabs', Tabs);
Vue.component('tab', Tab);

new Vue({
    el: '#app',

    methods: {
        confirm(message) {
            this.$modal.dialog(message)
                .then(confirmed => {
                    if (confirmed) {
                        // Proceed. Submit ajax request, etc.
                        alert('Proceed');
                    } else {
                        // Optionally override the button visibility and labels.
                        this.$modal.dialog('Okay, canceled', {
                            cancelButton: 'Close',
                            confirmButton: false
                        });
                    }
                });
        }
    }
});
