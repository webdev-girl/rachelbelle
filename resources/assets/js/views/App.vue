<template>
     <div>
         <nav class="navbar navbar-expand-md navbar-light navbar-laravel links">
             <div class="container">
                 <router-link :to="{name: 'home'}" class="navbar-brand">Rachel Belle</router-link>
                 <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                     <span class="navbar-toggler-icon"></span>
                 </button>
                 <div class="collapse navbar-collapse" id="navbarSupportedContent">
                     <!-- Left Side Of Navbar -->
                     <div class="links">
                          <div class="dropdown links">
                              <button class="dropbtn">New arrivals</button>
                              <div class="dropdown-content">
                                  <div class="container">
                                      <div class="row">
                                          <div class="col-sm">
                                              <a href="https://nova.laravel.com">Blouses</a>
                                              <a href="https://nova.laravel.com">Bottoms</a>
                                              <a href="https://nova.laravel.com">Dresses</a>
                                          </div>
                                          <div class="col-sm">
                                              <p>Recieve new stock daily</p>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              <button class="dropbtn">Clearance</button>
                              <div class="dropdown-content">
                                  <div class="container">
                                      <div class="row">
                                          <div class="col-sm">
                                              <a href="https://nova.laravel.com">Blouses</a>
                                              <a href="https://nova.laravel.com">Bottoms</a>
                                              <a href="https://nova.laravel.com">Dresses</a>
                                          </div>
                                          <div class="col-sm">
                                                  <p>Up to 30%</p>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              <button class="dropbtn">Point rewards</button>
                              <div class="dropdown-content">
                                  <div class="container">
                                      <div class="row">
                                          <div class="col-sm">
                                              <a href="https://nova.laravel.com">Sign up</a>
                                              <a href="https://nova.laravel.com">Rewards</a>
                                          </div>
                                          <div class="col-sm">
                                                  <p>Recieve 10% off when you reach 500 points</p>
                                                  <p> for more details on how you save</p>
                                                  <p> sign up to become a VIP and start collecting today</p>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                     <ul class="navbar-nav mr-auto"></ul>
                     <!-- Right Side Of Navbar -->
                     <ul class="navbar-nav ml-auto">
                         <router-link :to="{ name: 'login' }" class="nav-link" v-if="!isLoggedIn">Login</router-link>
                         <router-link :to="{ name: 'register' }" class="nav-link" v-if="!isLoggedIn">Register</router-link>
                         <span v-if="isLoggedIn">
                             <router-link :to="{ name: 'userboard' }" class="nav-link" v-if="user_type == 0"> Hi, {{name}}</router-link>
                             <router-link :to="{ name: 'admin' }" class="nav-link" v-if="user_type == 1"> Hi, {{name}}</router-link>
                         </span>
                         <li class="nav-link" v-if="isLoggedIn" @click="logout"> Logout</li>
                     </ul>
                 </div>
             </div>
         </nav>
         <main class="py-4">
             <router-view @loggedIn="change"></router-view>
         </main>
     </div>
 </template>
 <script>
 export default {
     data() {
         return {
             name: null,
             user_type: 0,
             isLoggedIn: localStorage.getItem('bigStore.jwt') != null
         }
     },
     mounted() {
         this.setDefaults()
     },
     methods : {
         setDefaults() {
             if (this.isLoggedIn) {
                 let user = JSON.parse(localStorage.getItem('bigStore.user'))
                 this.name = user.name
                 this.user_type = user.is_admin
             }
         },
         change() {
             this.isLoggedIn = localStorage.getItem('bigStore.jwt') != null
             this.setDefaults()
         },
         logout(){
             localStorage.removeItem('bigStore.jwt')
             localStorage.removeItem('bigStore.user')
             this.change()
             this.$router.push('/')
         }
     }
 }
 </script>
