import axios from 'axios';

const apiClient = axios.create({
    baseURL: 'http://'+ location.host +'/api',
    withCredentials: false,
    headers: {
        Accept: 'application/json',
        'Content-Type': 'application/json',
    }
});

export default apiClient;
