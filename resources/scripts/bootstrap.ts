import _ from 'lodash';
import axios from 'axios';

(window as any)._ = _;

axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';
axios.defaults.baseURL = import.meta.env.VITE_APP_URL;
(window as any).axios = axios;