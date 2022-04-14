require('./bootstrap');
import {createApp} from 'Vue'
import ExampleComponent from './components/ExampleComponent.vue'

const appx =createApp({});
appx.component("test",ExampleComponent);
appx.mount('#app')
