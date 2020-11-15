import Vue from 'vue'
import VueRouter from "vue-router"

import PhotoList from "./pages/PhotoList"
import Login from "./pages/Login"

Vue.use(VueRouter)

const routes = [
  {
    path: '/',
    component: PhotoList
  },
  {
    path: '/login',
    component: Login
  }
]

// VueRouterインスタンスを作成する
const router = new VueRouter({
  mode: 'history',
  routes
})

// app.jsでインポートするためVueRouterインスタンスエクスポート→別ファイルでも参照可能になる
export default router
