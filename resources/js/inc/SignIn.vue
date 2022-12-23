<template>
     <div v-if="isshow" class="overlay-login text-left">
            <button type="button" @click="$emit('overlayClose1',false)" class="overlay-close1">
              <i class="fa fa-times" aria-hidden="true"></i>
            </button>
            <div class="wrap">
              <h5 class="text-center mb-4">Login Now</h5>
              <div class="login-bghny p-md-5 p-4 mx-auto mw-100">
                <!--/login-form-->
                <form action="#" method="post">
                  <div class="form-group">
                    <p class="login-texthny mb-2">Email address</p>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                      placeholder="">
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email
                      with anyone else.</small>
                  </div>
                  <div class="form-group">
                    <p class="login-texthny mb-2">Password</p>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="" required="">
                  </div>
                  <div class="form-check mb-2">
                    <div class="userhny-check">
                      <label class="check-remember container">
                        <input type="checkbox" class="form-check"> <span class="checkmark"></span>
                        <p class="privacy-policy">Remember me</p>
                      </label>
                      <div class="clearfix"></div>
                    </div>
                  </div>
                  <button type="submit" class="submit-login btn mb-4">Sign In</button>

                </form>
                <!--//login-form-->
              </div>
              <!---->
            </div>
          </div>
</template>

<script>
export default {
    name:"SignIn",
    props:['isshow'],
    mounted() {
    
    },
    data() {
       return {
        
       }
    },   
    
    methods: {
     
    },
    
}
</script>