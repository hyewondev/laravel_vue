import ServiceInfo from './ApiClient';

export default {
    getPhotographer(id) {
        return ServiceInfo.get('/photographer/'+ id);
    }
}
