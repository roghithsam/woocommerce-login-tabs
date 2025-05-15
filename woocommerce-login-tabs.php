<?php 
add_action( 'woocommerce_before_customer_login_form', 'custom_login_register_tabs' );
function custom_login_register_tabs() {
    if ( is_user_logged_in() ) return; ?>
    <div class="custom-login-tabs">
      <div class="slider"></div>
      <div class="btn">
        <button class="login">Login</button>
        <button class="signup">Register</button>
      </div>
    </div>
    <style>
      .custom-login-tabs {
      	position: relative;
      	width: 300px;
      	margin: 0 auto;
      }
      
      .btn {
      	height: 60px;
      	width: 100%;
      	box-shadow: 10px 10px 30px rgb(214 200 237);
      	border-radius: 50px;
      	display: flex;
      	justify-content: space-around;
      	align-items: center;
      	position: relative;
      	z-index: 2;
      }
      
      .login,.signup {
      	color: black;
      	font-size: 22px;
      	border: none;
      	background: 0 0;
      	cursor: pointer;
      	z-index: 2;
      }
      
      .login:hover,.signup:hover {
      	border: none;
      	background: 0 0!important;
      }
      
      .slider {
      	height: 60px;
      	width: 50%;
      	border-radius: 50px;
      	background-image: linear-gradient(to right,rgb(171 154 200),rgb(153 133 187));
      	position: absolute;
      	top: 0;
      	left: 0;
      	transition: .3s ease-in-out;
      	z-index: 1;
      }
      
      #customer_login .u-column1,#customer_login .u-column2 {
      	display: none;
      }
      
      #customer_login.show-login .u-column1,#customer_login.show-register .u-column2 {
      	margin: 0 auto;
      	display: block;
      	float: none;
      }
      
      @media screen and (max-width:650px) {
      	.btn,.slider {
      		height: 50px;
      	}
      
      	.login,.signup {
      		font-size: 19px;
      	}
      
      	.slider {
      		width: 50%;
      	}
      }
    </style>
    <script>
      document.addEventListener("DOMContentLoaded", (function() {
        const e = document.querySelector(".signup"),
            s = document.querySelector(".login"),
            t = document.querySelector(".slider"),
            o = document.querySelector("#customer_login");
        o.classList.add("show-login"), e.addEventListener("click", (() => {
            t.style.left = "150px", o.classList.remove("show-login"), o.classList.add("show-register")
        })), s.addEventListener("click", (() => {
            t.style.left = "0", o.classList.remove("show-register"), o.classList.add("show-login")
        }))
    }));
    </script>
    <?php }
