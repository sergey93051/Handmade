<template >
      <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container-fluid serarc-fluid">
          <a class="navbar-brand" href="index.html">
            Spry<span class="lohny">S</span>tore</a>
          <!-- if logo is image enable this   
							<a class="navbar-brand" href="#index.html">
								<img src="image-path" alt="Your logo" title="Your logo" style="height:35px;" />
							</a> -->
          <!--/search-right-->
          <div class="search-right">
            <a href="#search" title="search">
              <span class="mr-2">
                <font-icon icon="fa fa-search" />
              </span>
              <span class="search-text">Search here</span></a>
            <!-- search popup -->
            <div id="search" class="pop-overlay">
              <div class="popup">
                <form action="#" method="post" class="search-box">
                  <input type="search" placeholder="Keyword" name="search">
                  <button type="submit" class="btn">Search</button>
                </form>
              </div>
              <a class="close" href="#">×</a>
            </div>
            <!-- /search popup -->
          </div>
          <!--//search-right-->
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon fa fa-bars"> </span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item active">
                <router-link  class="nav-link" to="/">Home</router-link>    
              </li>
              <li class="nav-item">
                <router-link class="nav-link" to="/about">About</router-link>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="about.html">What We Offer</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contact.html">Contact</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
</template>
<script>
export default {
   name:"nav",
 
   methods: {
  
   },
}
</script>