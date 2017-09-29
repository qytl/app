<template>

  <div id="app">
  <Iheader></Iheader>
   
    <Ileft></Ileft>
    <router-view></router-view>
   <Ifooter></Ifooter>
  </div>

</template>

<script>
import Iheader from './components/Header'
import Ifooter from './components/Footer'
import Ileft from './components/Left'
export default {
  name: 'app',
  components: {
    Iheader,Ileft,Ifooter
  }
  
  
}
</script>

<style>
#app {
  font-family: 'Avenir', Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;

}
</style>
