<?php
require "includes/dbh.inc.php";
?>


// page sign in

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body>
<section id="signin-page" class="bg-gray-50 dark:bg-gray-900">
  <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
      <a href="#" class="flex items-center mb-6 text-2xl font-semibold text-gray-900 dark:text-white">
          <img class="w-8 h-8 mr-2" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/logo.svg" alt="logo">
          Flowbite    
      </a>
      <div class="w-full bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0 dark:bg-gray-800 dark:border-gray-700">
          <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
              <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white">
                  Sign in to your account
              </h1>
              <form class="space-y-4 md:space-y-6" action="#" method="post">
                  <div class="py-[10px] ">
                      <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your email</label>
                      <input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="name@company.com" required="">
                  </div>
                  <div>
                      <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
                      <input type="password" name="password" id="password" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required="">
                  </div>
                  <div class="flex items-center justify-between">
                      <div class="flex items-start">
                          <div class="flex items-center h-5">
                            <input id="remember" aria-describedby="remember" type="checkbox" class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-primary-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-primary-600 dark:ring-offset-gray-800" required="">
                          </div>
                          <div class="ml-3 text-sm">
                            <label for="remember" class="text-gray-500 dark:text-gray-300">Remember me</label>
                          </div>
                      </div>
                      <a href="#" class="text-sm font-medium text-primary-600 hover:underline dark:text-primary-500">Forgot password?</a>
                  </div>
                  <button type="submit" class="w-full text-white bg-primary-600 hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">Sign in</button>
                  <p class="text-sm font-light text-gray-500 dark:text-gray-400">
                      Don’t have an account yet? <a href="#" id="first" class="font-medium text-primary-600 hover:underline dark:text-primary-500">Sign up</a>
                  </p>
              </form>
          </div>
      </div>
  </div>
</section>




// page sign up





<div id="signup-page" class="hidden bg-gradient-to-r from-[#d8810f] to-[#cc380b] mt-[3%] p-[3%]">
    <div class="flex flex-wrap">
        <div class="w-full md:w-1/4 text-center text-white mt-[4%]">
            <img src="https://image.ibb.co/n7oTvU/logo_white.png" alt="" class="mt-[15%] mb-[5%] w-1/4 mx-auto animate-[mover_1s_infinite_alternate]"/>
            <h3 class="text-2xl font-bold">Welcome</h3>
            <p class="font-light px-[12%] -mt-[9%]">You are 30 seconds away from earning your own money!</p>
            <input id="second" type="submit" name="" value="Login" class="border-none rounded-3xl py-[2%] px-[2%] w-3/5 bg-[#f8f9fa] font-bold text-[#b63a29] mt-[30%] mb-[3%] cursor-pointer"/><br/>
        </div>
        
        <div class="w-full md:w-3/4 bg-[#f8f9fa] rounded-tl-[10%_50%] rounded-bl-[10%_50%]">
            <div class="tab-content clear-both" id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                    <h3 class="text-center mt-[8%] -mb-[15%] text-[#495057] text-2xl">Apply as an Employee</h3>
                    
                    <form action="scripts/authprocess.php" method="POST">
                        <div class="flex flex-wrap p-[10%] mt-[10%]">
                            <div class="w-full md:w-1/2">
                                <div class="mb-4">
                                    <input type="text" name="first_name" class="w-full border border-gray-300 rounded p-2" placeholder="First Name *" required />
                                </div>
                                <div class="mb-4">
                                    <input type="text" name="last_name" class="w-full border border-gray-300 rounded p-2" placeholder="Last Name *" required />
                                </div>
                                <div class="mb-4">
                                    <input type="password" name="password" class="w-full border border-gray-300 rounded p-2" placeholder="Password *" required />
                                </div>
                                <div class="mb-4">
                                    <input type="password" name="confirm_password" class="w-full border border-gray-300 rounded p-2" placeholder="Confirm Password *" required />
                                </div>
                            </div>

                            <div class="w-full md:w-1/2">
                                <div class="mb-4">
                                    <input type="email" name="email" class="w-full border border-gray-300 rounded p-2" placeholder="Your Email *" required />
                                </div>
                                <div class="mb-4">
                                    <input type="text" minlength="10" maxlength="10" name="txtEmpPhone" class="w-full border border-gray-300 rounded p-2" placeholder="Your Phone *" required />
                                </div>
                                
                                <input type="submit" name="singup" class="float-right mt-[10%] border-none rounded-3xl py-[2%] px-[2%] bg-[#b63a29] text-white font-semibold w-1/2 cursor-pointer" value="Register"/>
                            </div>
                        </div>
                    </form>
                    </div>
            </div>
        </div>
    </div>
</div>

<style>
    @keyframes mover {
        0% { transform: translateY(0); }
        100% { transform: translateY(-20px); }
    }
</style>

    <script src="public/assets/navigation.js"></script>
</body>
</html>