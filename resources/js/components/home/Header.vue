<template>
   <header class="tophny-header">
      <div class="container-fluid">
        <div class="top-right-strip row">
          <!--/left-->
          <div class="top-hny-left-content col-lg-6 pl-lg-0">
            <h6>Upto 30% off on All styles , <a href="#" target="_blank"> Click here for <span
                  class="fa fa-hand-o-right hand-icon" aria-hidden="true"></span> <span class="hignlaite">More
                  details</span></a></h6>
          </div>
          <!--//left-->
          <!--/right-->
          <ul class="top-hnt-right-content col-lg-6">
            <li class="button-log usernhy">
              <a class="btn-open"  @click="openSignin" href="javascript:void(0);">
                <span>
                  <font-icon class="mt-2" icon="fa-user" />
                </span>
              </a>
            </li>
            <li class="transmitvcart galssescart2 cart cart box_1">
              <form action="#" method="post" class="last">
                <input type="hidden" name="cmd" value="_cart">
                <input type="hidden" name="display" value="1">
                <button class="top_transmitv_cart" type="submit" name="submit" value="">
                  My Cart
                  <span class="fa fa-shopping-cart"></span>
                </button>
              </form>
            </li>
          </ul>
          <!--//right-->
             <SignIn :isshow="isshow" @overlayClose1="overlayClose1" />
        </div>
      </div>
      <!--/nav-->
        <Nav />
      <!--//nav-->
    </header>
</template>

<style>
</style>
<script>
import  SignIn  from '../../inc/SignIn.vue';
import Nav from '../../static/Nav.vue'
export default {
  name: 'Header',
  data() {
    return {
      isshow:false
    }
  },
  components: {
    Nav,
    SignIn
},
methods: {
  openSignin(){
    this.isshow = true;
  },
  overlayClose1(close){
    this.isshow = close;
  }
},
}
</script>