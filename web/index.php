<?php
require_once "config.php";
require_once "components.php";
$_SESSION["url"] = $_SERVER["REQUEST_URI"];
?>



<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />


    <meta name="description" content="Codesohoj is an online platform that combines the benefits of an online judge and a coding learning platform. It offers programming problems, educational content, and supports multiple programming languages to provide an engaging learning experience for users of all levels.">

        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="theme-color" content="#000000" />
    <link rel="shortcut icon" href="./assets/img/favicon.ico" />
    <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/logo.svg" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
    />


    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/gh/creativetimofficial/tailwind-starter-kit/compiled-tailwind.min.css"
    />
    <title>Codesohoj - Coding made Sohoj</title>


  </head>
  <body class="text-gray-800 antialiased">
    <nav
      class="sticky top-0 bg-blue-500 absolute z-50 w-full flex flex-wrap items-center justify-between px-2 py-3"
    >
      <div
        class="container px-4 mx-auto flex flex-wrap items-center justify-between"
      >
        <div
          class="w-full relative flex justify-between lg:w-auto lg:static lg:block lg:justify-start"
        >
          <img
            src="./assets/img/main_logo_white.svg"
            alt="Codesohoj"
            style="height: 50px"
          /><button
            class="cursor-pointer text-xl leading-none px-3 py-1 border border-solid border-transparent rounded bg-transparent block lg:hidden outline-none focus:outline-none"
            type="button"
            onclick="toggleNavbar('example-collapse-navbar')"
          >
            <i class="text-white fas fa-bars"></i>
          </button>
        </div>
        <div
          class="lg:flex flex-grow items-center bg-white lg:bg-transparent lg:shadow-none hidden"
          id="example-collapse-navbar"
        >
          <ul class="flex flex-col lg:flex-row list-none lg:ml-auto">
            <li class="p-2" data-te-nav-item-ref>
              <a
                class="text-white disabled:text-black/30 lg:px-2 [&.active]:text-black/90 dark:[&.active]:text-neutral-400"
                href="#"
                >Dashboard</a
              >
            </li>
            <li class="p-2" data-te-nav-item-ref>
              <a
                class="p-0 text-white opacity-60 hover:opacity-80 focus:opacity-80 disabled:text-black/30 lg:px-2 [&.active]:text-black/90 dark:[&.active]:text-neutral-400"
                href="/problems"
                >Problems</a
              >
            </li>
            <li class="p-2" data-te-nav-item-ref>
              <a
                class="p-0 text-white opacity-60 hover:opacity-80 focus:opacity-80 disabled:text-black/30 lg:px-2 [&.active]:text-black/90 dark:[&.active]:text-neutral-400"
                href="/contests">Contests</a
              >
            </li>

            <li class="p-2" data-te-nav-item-ref>
              <a
                class="p-0 text-white opacity-60 hover:opacity-80 focus:opacity-80 disabled:text-black/30 lg:px-2 [&.active]:text-black/90 dark:[&.active]:text-neutral-400"
                href="#"

                >Learn</a
              >
            </li>

            <li class="p-2" data-te-nav-item-ref>
              <a
                class="p-0 text-white opacity-60 hover:opacity-80 focus:opacity-80 disabled:text-black/30 lg:px-2 [&.active]:text-black/90 dark:[&.active]:text-neutral-400"
                href="#"

                >Blogs</a
              >
            </li>

            <?php if (isset($_SESSION["loggedin"])) { ?>
              <div id="account-button" class="ml-10 flex items-center justify-center text-gray-100 space-x-4">
                                      <img class="w-10 h-10 rounded-full" src="./assets/img/user.png" alt="user image">
                                      <div class="mr-3 font-medium dark:text-white">
                                          <div><?php echo $_SESSION["Users"][
                                            "username"
                                          ]; ?></div>
                                        
                                      </div>
                                  </div>

              <div id="account-modal" tabindex="-1" aria-hidden="true" class="fixed top-10 left-10 right-0 z-50 hidden w-48 p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] md:h-full">
                  <div class="relative w-full h-full max-w-md md:h-auto">
                      <!-- Modal content -->
                      <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                          <button id="close-account" type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-hide="account-modal">
                              <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                              <span class="sr-only">Close modal</span>
                          </button>
                          <!-- Modal header -->
                          <div class="px-12 py-1 border-b rounded-t dark:border-gray-600">
                              <h3 class="text-base font-semibold text-gray-900 lg:text-xl dark:text-white">
                                  Account Action
                              </h3>
                          </div>
                          <!-- Modal body -->
                          <div class="p-2">
                              <ul class="my-2 space-y-1">
                                
                                  <?php if (
                                    $_SESSION["Users"]["status"] == "Admin"
                                  ) { ?>

                                  <li>
                                  <a href='/adminjudge' class="flex items-center p-3 text-base font-bold text-gray-900 rounded-lg bg-gray-50 hover:bg-gray-100 group hover:shadow dark:bg-gray-600 dark:hover:bg-gray-500 dark:text-white">
                                          <span class="flex-1 ml-3 whitespace-nowrap">Judge Settings</span>
                                      </a>
                                  </li>
                                  <li>
                                      <a href='<?php echo SITE_URL; ?>/admin_problems.php'  class="flex items-center p-3 text-base font-bold text-gray-900 rounded-lg bg-gray-50 hover:bg-gray-100 group hover:shadow dark:bg-gray-600 dark:hover:bg-gray-500 dark:text-white">
                                          <span class="flex-1 ml-3 whitespace-nowrap">Problem Settings</span>
                                      </a>
                                  </li>

                                  <li>
                                  <a  href='/admincontest' class="flex items-center p-3 text-base font-bold text-gray-900 rounded-lg bg-gray-50 hover:bg-gray-100 group hover:shadow dark:bg-gray-600 dark:hover:bg-gray-500 dark:text-white">
                                          <span class="flex-1 ml-3 whitespace-nowrap">Contest Settings</span>
                                      </a>
                                  </li>
                                  <li>
                                      <a href='/adminteam' class="flex items-center p-3 text-base font-bold text-gray-900 rounded-lg bg-gray-50 hover:bg-gray-100 group hover:shadow dark:bg-gray-600 dark:hover:bg-gray-500 dark:text-white">
                                          <span class="flex-1 ml-3 whitespace-nowrap">Team Settings</span>
                                      </a>
                                  </li>

                                  <li>
                                  <a href='/admingroup' class="flex items-center p-3 text-base font-bold text-gray-900 rounded-lg bg-gray-50 hover:bg-gray-100 group hover:shadow dark:bg-gray-600 dark:hover:bg-gray-500 dark:text-white">
                                          <span class="flex-1 ml-3 whitespace-nowrap">Group Settings</span>
                                      </a>
                                  </li>
                                  <li>
                                      <a href='/adminclar' class="flex items-center p-3 text-base font-bold text-gray-900 rounded-lg bg-gray-50 hover:bg-gray-100 group hover:shadow dark:bg-gray-600 dark:hover:bg-gray-500 dark:text-white">
                                          <span class="flex-1 ml-3 whitespace-nowrap">Clarifications</span>
                                      </a>
                                  </li>
                                  <li>
                                      <a href='/adminbroadcast' class="flex items-center p-3 text-base font-bold text-gray-900 rounded-lg bg-gray-50 hover:bg-gray-100 group hover:shadow dark:bg-gray-600 dark:hover:bg-gray-500 dark:text-white">
                                          <span class="flex-1 ml-3 whitespace-nowrap">Notifications</span>
                                      </a>
                                  </li>

                                  <li>
                                      <a href='/adminlog' class="flex items-center p-3 text-base font-bold text-gray-900 rounded-lg bg-gray-50 hover:bg-gray-100 group hover:shadow dark:bg-gray-600 dark:hover:bg-gray-500 dark:text-white">
                                          <span class="flex-1 ml-3 whitespace-nowrap">Logs</span>
                                      </a>
                                  </li>
                                  <li>
                                      <a href='<?php echo SITE_URL; ?>/process.php?logout' class="flex items-center p-3 text-base font-bold text-gray-900 rounded-lg bg-gray-50 hover:bg-gray-100 group hover:shadow dark:bg-gray-600 dark:hover:bg-gray-500 dark:text-white">
                                          <span class="flex-1 ml-3 whitespace-nowrap">Log out</span>
                                      </a>
                                  </li>
                              
                                    <?php } else { ?>

                                    <li>
                                  <a href='/edit' class="flex items-center p-3 text-base font-bold text-gray-900 rounded-lg bg-gray-50 hover:bg-gray-100 group hover:shadow dark:bg-gray-600 dark:hover:bg-gray-500 dark:text-white">
                                          <span class="flex-1 ml-3 whitespace-nowrap">Account Setting</span>
                                      </a>
                                  </li>
                                  <li>
                                      <a href='<?php echo SITE_URL; ?>/process.php?logout' class="flex items-center p-3 text-base font-bold text-gray-900 rounded-lg bg-gray-50 hover:bg-gray-100 group hover:shadow dark:bg-gray-600 dark:hover:bg-gray-500 dark:text-white">
                                          <span class="flex-1 ml-3 whitespace-nowrap">Log out</span>
                                      </a>
                                  </li>

                            <?php } ?>

                              </ul>

                          </div>
                      </div>
                  </div>
               </div>

              <script>
                  const modalButton = document.getElementById('account-button');
                  const modal = document.getElementById('account-modal');
                  const closeModalButton = document.getElementById('close-account');

                  modalButton.addEventListener('click', () => {
                    modal.classList.remove('hidden');
                  });

                  closeModalButton.addEventListener('click', () => {
                    modal.classList.add('hidden');
                  });
               </script>
  
                      
                    <?php } else { ?>
             <li class="flex items-center">
              <button
                class="bg-white text-gray-800 active:bg-gray-100 text-xs font-bold uppercase px-4 py-2 rounded shadow hover:shadow-md outline-none focus:outline-none lg:mr-1 lg:mb-0 ml-3 mb-3"
                type="button"
                style="transition: all 0.15s ease 0s"
              >
                <a href='<?php echo SITE_URL; ?>/login.php'>
                  <i class="fas fa-regular fa-right-to-bracket"></i> Sign In
                </a>
              </button>
            </li>

            <li class="flex items-center">
              <button
                class="bg-white text-gray-800 active:bg-gray-100 text-xs font-bold uppercase px-4 py-2 rounded shadow hover:shadow-md outline-none focus:outline-none lg:mr-1 lg:mb-0 ml-3 mb-3"
                type="button"
                style="transition: all 0.15s ease 0s"
              >
              <a href='<?php echo SITE_URL; ?>/register.php'>
                  <i class="fas fa-regular fa-right-to-bracket"></i> Sign Up
                </a>
              </button>
            </li>
            <?php } ?>

                  <?php  ?>
                     </ul>
        </div>
      </div>
    </nav>
    <main>
      <div
        class="relative pt-16 pb-32 flex content-center items-center justify-center"
        style="min-height: 75vh"
      >
        <div
          class="absolute top-0 w-full h-full"
          style="background-image: url('./assets/img/back.svg')"
        >
          <span
            id="blackOverlay"
            class="w-full h-full absolute opacity-75 bg-black"
          ></span>
        </div>
        <div class="container relative mx-auto">
          <div class="items-center flex flex-wrap">
            <div class="w-full lg:w-6/12 px-4 ml-auto mr-auto text-center">
              <div class="pr-12">
                <h1 class="text-white font-semibold text-4xl">
                  Codesohoj = Code + Sohoj + OJ
                </h1>
                <p class="mt-4 text-lg text-gray-300">
                  Codesohoj is an online platform that combines the benefits of
                  an online judge and a coding learning platform. It offers
                  programming problems, educational content, and supports
                  multiple programming languages to provide an engaging learning
                  experience for users of all levels.
                </p>
              </div>
            </div>
          </div>
        </div>
        <div
          class="top-auto bottom-0 left-0 right-0 w-full absolute pointer-events-none overflow-hidden"
          style="height: 70px"
        >

        </div>
      </div>
      <section class="pb-20 bg-gray-300 -mt-24">
        <div class="container mx-auto px-4">
          <div class="flex flex-wrap">
            <div class="lg:pt-12 pt-6 w-full md:w-4/12 px-4 text-center">
              <div
                class="relative flex flex-col min-w-0 break-words bg-white w-full mb-8 shadow-lg rounded-lg"
              >
                <div class="px-4 py-5 flex-auto">
                  <div
                    class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 mb-5 shadow-lg rounded-full bg-red-400"
                  >
                    <i class="fas fa-award"></i>
                  </div>
                  <h6 class="text-xl font-semibold">Problem Solving</h6>
                  <p class="mt-2 mb-4 text-gray-600">
                    Solve various types of problems and improve your problem
                    solving skills. We have large sets of problems in many
                    topics such as Dynamic Programming, Graph Theory, Data
                    Structures, etc.
                  </p>
                </div>
              </div>
            </div>
            <div class="w-full md:w-4/12 px-4 text-center">
              <div
                class="relative flex flex-col min-w-0 break-words bg-white w-full mb-8 shadow-lg rounded-lg"
              >
                <div class="px-4 py-5 flex-auto">
                  <div
                    class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 mb-5 shadow-lg rounded-full bg-blue-400"
                  >
                    <i class="fas fa-retweet"></i>
                  </div>
                  <h6 class="text-xl font-semibold">Contest</h6>
                  <p class="mt-2 mb-4 text-gray-600">
                    You can participate in problem solving contests and get
                    rattings. You can also create your own contest and invite
                    your friends to participate.
                  </p>
                </div>
              </div>
            </div>
            <div class="lg:pt-12 pt-6 w-full md:w-4/12 px-4 text-center">
              <div
                class="relative flex flex-col min-w-0 break-words bg-white w-full mb-8 shadow-lg rounded-lg"
              >
                <div class="px-4 py-5 flex-auto">
                  <div
                    class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 mb-5 shadow-lg rounded-full bg-green-400"
                  >
                    <i class="fas fa-fingerprint"></i>
                  </div>
                  <h6 class="text-xl font-semibold">Learn</h6>
                  <p class="mt-2 mb-4 text-gray-600">
                    We have a large set of articles, videos, DSA Simulator and
                    interactive problems to help you learn. You can learn these
                    topics in a fun way.
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="flex flex-wrap items-center mt-32">
            <div class="w-full md:w-5/12 px-4 mr-auto ml-auto">

              <h3 class="text-3xl mb-2 font-semibold leading-normal">
                Improve your problem solving skills
              </h3>
              <p
                class="text-lg font-light leading-relaxed mt-4 mb-4 text-gray-700"
              >
                You can enhence your problem solving skills by solving various types of problems. If you solve problems regularly and participate in our weekly contests, Your coding, thingking and overall problem solving skill will enrich significantly. We have large sets of problems in many topics such as Dynamic Programming, Graph Theory, Data Structures, etc.
              </p>

              <a
                href="/problems.html"
                class="font-bold text-gray-800 mt-8"
                >Check Problemset!</a
              >
            </div>
            <div class="w-full md:w-4/12 px-4 mr-auto ml-auto">
              <div
                class="relative flex flex-col min-w-0 break-words "
              >

              <img src= "./assets/img/home1.svg" alt="..." />

            </div>
          </div>
        </div>
      </section>
      <section class="relative py-20">
        <div
          class="bottom-auto top-0 left-0 right-0 w-full absolute pointer-events-none overflow-hidden -mt-20"
          style="height: 80px"
        >
          <svg
            class="absolute bottom-0 overflow-hidden"
            xmlns="http://www.w3.org/2000/svg"
            preserveAspectRatio="none"
            version="1.1"
            viewBox="0 0 2560 100"
            x="0"
            y="0"
          >
            <polygon
              class="text-white fill-current"
              points="2560 0 2560 100 0 100"
            ></polygon>
          </svg>
        </div>
        <div class="container mx-auto px-4">
          <div class="items-center flex flex-wrap">
            <div class="w-full md:w-4/12 ml-auto mr-auto px-4">
              <img
                alt="..."
                class="h-48 max-h-full ..."
                src="./assets/img/home2.svg"
              />
            </div>
            <div class="w-full md:w-5/12 ml-auto mr-auto px-4">
              <div class="md:pr-12">
                <div
                  class="text-pink-600 p-3 text-center inline-flex items-center justify-center w-16 h-16 mb-6 shadow-lg rounded-full bg-pink-300"
                >
                  <i class="fas fa-rocket text-xl"></i>
                </div>
                <h3 class="text-3xl font-semibold">Codesohoj at a glance</h3>
                <p class="mt-4 text-lg leading-relaxed text-gray-600">
                  Codesohoj is a online judge and a learning platform for all the coders which
                  is a Web Programming course project by Jahangir Hossain(B190305009) and Md. Farhan Masud Shohag(B190305043)
                under the supervishon of Dr Sajeeb Saha, Associate Professor of CSE JnU </p>
                <ul class="list-none mt-6">
                  <li class="py-2">
                    <div class="flex items-center">
                      <div>
                        <span
                          class="text-xs font-semibold inline-block py-1 px-2 uppercase rounded-full text-pink-600 bg-pink-200 mr-3"
                          ><i class="fas fa-fingerprint"></i
                        ></span>
                      </div>
                      <div>
                        <h4 class="text-gray-600">
                          Online Judge with 1000+ problems
                        </h4>
                      </div>
                    </div>
                  </li>
                  <li class="py-2">
                    <div class="flex items-center">
                      <div>
                        <span
                          class="text-xs font-semibold inline-block py-1 px-2 uppercase rounded-full text-pink-600 bg-pink-200 mr-3"
                          ><i class="fab fa-html5"></i
                        ></span>
                      </div>
                      <div>
                        <h4 class="text-gray-600">Articles, Blogs, Simulations in Coding and CS topics</h4>
                      </div>
                    </div>
                  </li>
                  <li class="py-2">
                    <div class="flex items-center">
                      <div>
                        <span
                          class="text-xs font-semibold inline-block py-1 px-2 uppercase rounded-full text-pink-600 bg-pink-200 mr-3"
                          ><i class="far fa-paper-plane"></i
                        ></span>
                      </div>
                      <div>
                        <h4 class="text-gray-600">Community Building among coders of all over the world</h4>
                      </div>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </section>



    </main>
    <footer class="relative bg-gray-300 pt-8 pb-6">
      <div
        class="bottom-auto top-0 left-0 right-0 w-full absolute pointer-events-none overflow-hidden -mt-20"
        style="height: 80px"
      >
        <svg
          class="absolute bottom-0 overflow-hidden"
          xmlns="http://www.w3.org/2000/svg"
          preserveAspectRatio="none"
          version="1.1"
          viewBox="0 0 2560 100"
          x="0"
          y="0"
        >
          <polygon
            class="text-gray-300 fill-current"
            points="2560 0 2560 100 0 100"
          ></polygon>
        </svg>
      </div>
      <div class="container mx-auto px-4">
        <div class="flex flex-wrap">
          <div class="w-full lg:w-6/12 px-4">
            <h4 class="text-3xl font-semibold">Let's keep in touch!</h4>
            <h5 class="text-lg mt-0 mb-2 text-gray-700">
              Find us on any of these platforms.
            </h5>
            <div class="mt-6">
            <button
                class="bg-white text-blue-600 shadow-lg font-normal h-10 w-10 items-center justify-center align-center rounded-full outline-none focus:outline-none mr-2 p-3"
                type="button"
              >
                <i class="flex fab fa-facebook-square"></i></button
              ><button
                class="bg-white text-pink-400 shadow-lg font-normal h-10 w-10 items-center justify-center align-center rounded-full outline-none focus:outline-none mr-2 p-3"
                type="button"
              >
                <i class="flex fab fa-dribbble"></i></button
              ><button
                class="bg-white text-gray-900 shadow-lg font-normal h-10 w-10 items-center justify-center align-center rounded-full outline-none focus:outline-none mr-2 p-3"
                type="button"
              >
                <i class="flex fab fa-github"></i>
              </button>
            </div>
          </div>
          <div class="w-full lg:w-6/12 px-4">
            <div class="flex flex-wrap items-top mb-6">
              <div class="w-full lg:w-4/12 px-4 ml-auto">
                <span
                  class="block uppercase text-gray-600 text-sm font-semibold mb-2"
                  >Useful Links</span
                >
                <ul class="list-unstyled">
                  <li>
                    <a
                      class="text-gray-700 hover:text-gray-900 font-semibold block pb-2 text-sm"
                      href=""
                      >About Us</a
                    >
                  </li>
                  <li>
                    <a
                      class="text-gray-700 hover:text-gray-900 font-semibold block pb-2 text-sm"
                      href=""
                      >Blog</a
                    >
                  </li>
                  <li>
                    <a
                      class="text-gray-700 hover:text-gray-900 font-semibold block pb-2 text-sm"
                      href="https://github.com/JHM69/codesohoj"
                      >Github</a
                    >
                  </li>
                  <li>
                    <a
                      class="text-gray-700 hover:text-gray-900 font-semibold block pb-2 text-sm"
                      href=""
                      >Free Products</a
                    >
                  </li>
                </ul>
              </div>
              <div class="w-full lg:w-4/12 px-4">
                <span
                  class="block uppercase text-gray-600 text-sm font-semibold mb-2"
                  >Other Resources</span
                >
                <ul class="list-unstyled">

                  <li>
                    <a
                      class="text-gray-700 hover:text-gray-900 font-semibold block pb-2 text-sm"
                      href=""
                      >Terms &amp; Conditions</a
                    >
                  </li>
                  <li>
                    <a
                      class="text-gray-700 hover:text-gray-900 font-semibold block pb-2 text-sm"
                      href=""
                      >Privacy Policy</a
                    >
                  </li>
                  <li>
                    <a
                      class="text-gray-700 hover:text-gray-900 font-semibold block pb-2 text-sm"
                      href=""
                      >Contact Us</a
                    >
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <hr class="my-6 border-gray-400" />
        <div
          class="flex flex-wrap items-center md:justify-between justify-center"
        >
          <div class="w-full md:w-4/12 px-4 mx-auto text-center">
            <div class="text-sm text-gray-600 font-semibold py-1">
              Copyright © 2023 Codesohoj by
              <a
                href="https://www.github.com/jhm69"
                class="text-gray-600 hover:text-gray-900"
                >jhm69</a>

                and

                <a
                href="https://www.github.com/fms-bite"
                class="text-gray-600 hover:text-gray-900"
                >fms-bite</a>

            </div>
          </div>
        </div>
      </div>
    </footer>
  </body>
  <script>
    function toggleNavbar(collapseID) {
      document.getElementById(collapseID).classList.toggle("hidden");
      document.getElementById(collapseID).classList.toggle("block");
    }
  </script>
</html>
