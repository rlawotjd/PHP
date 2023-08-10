import axios from "axios";
import TokenController from "./TokenController";

const apiController=axios.create({
    baseURL:"http://localhost:8000"
});

apiController.interceptors.request.use(
    config=>{
        config.headers['Content-Type']="application/json; charset=utf-8";
        if (TokenController.getToken()) {
            config.headers["Authorization"]=TokenController.getToken();
        }
        return config;
    },
    error=>{
        console.log(error);
        return Promise.reject(error);
    }
)

export default {apiController};