@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Blog</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}}
        </style>

        <style>
          .section05_back{ background-image: url(http://dazzlersoftware.com/testwp/munix-pro/wp-content/themes/munix-pro/img/service-bg.jpg );}
          .section05{padding: 1rem 0rem 0.3rem 0rem; color: white;}
          .section05 h2{font-size: 2.5rem; font-weight: bold;}
          .section05 h6{font-size: 0.9rem; color: rgb(219, 213, 213);}
          .section05 h2::after{
            content: "";
            width: 3rem;
            height: 0.14rem;
            background-color: #0c65ed;
            position: absolute;
            top: 42%;
            right: 35.39%;
          }
           .section05 h2::before{
            content: "";
            width: 3rem;
            height: 0.14rem;
            background-color: #0c65ed;
            position: absolute;
            top: 42%;
            left: 35.39%;

          }
          .section05 h6::after{
            content: "";
            width: 5rem;
            height: 0.14rem;
            background-color: #0c65ed;
            position: absolute;
            top: 44%;
            right: 33%;
         }
          .section05 h6::before{
            content: "";
            width: 5rem;
            height: 0.14rem;
            background-color: #0c65ed;
            position: absolute;
            top: 44%;
            left: 33%;
            justify-content: center;
    
        }
          .section05_1{
           border-radius: 5px;
           background-color: transparent;
           color:black;
           border: 1px solid rgb(199, 179, 179);
           overflow: hidden;
           text-align: center;
           padding: 3.5rem 1rem;
        }
          .card_overlay{
            width: 100%;
            height: 100%;
            color: black;
            background-color: white;
            top: 100%;
            left: 0%;
            transition: all 0.3s;
    
        }
        .section05_1:hover > .card_overlay{top: 0%;}
        .font_monospace{font-family: monospace; font-weight: bold;}
        .font_2rem{font-size: 2rem;}
        .font_3rem{font-size: 3rem;}

        #section05_color{color: black;}
        #section05_color01{color: rgb(49, 49, 49);}
        #nav_bar02{ background-color: white !important;font-weight: 100; }
        .nav_bar03{font-size: 0.9rem ;}
        .nav_bar03:hover{color: #0C65ED !important;}
        #nav-bar04{color: #0C65ED !important;}
        .card_overlay01{
           width: auto;
           top: 75%;
           left: 10%;
           right: 10%;
           color: white;
           background-color: transparent ;
           transform: scalex(0);
           transition: all 0.4s;
       }
        .section05_2{}
        .section05_2:hover > .card_overlay01{ transform: scale(1,1);}
        .shadow_card{border-radius: 7px;}
        .shadow_card:hover{box-shadow: 0px 0px 15px rgb(151 168 183);}
        .overlay_02{ width:100%; height:100%;background-color: #3150e999; position: absolute;}
        .botton02{font-size: 2rem; color: white;}
        .section05_font{font-family: initial; font-size: 1rem;}
        .section05_font01{font-family: monospace; font-size: 1.5rem;}
           
        </style>
    </head>
    <body>
       <section class="section05_back">
         <div class="overlay" id="height_overlay"></div>
         <div class="col-12 text-center py-5 px5 section05">
            <h2 class="pt-5">Our Services</h2>
            <h6 class="py-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.
                incididunt ut labore et dolore. Lorem ipsum <br>dolor sit amet, consectetur adipisicing elit, sed do
                eiusm dipisicing elit, sed do eiusmod tempor.</h6>
        </div>
        <div class="container pb-5">
            <div class="row justify-content-between px-5">
                <div class="col-4">
                    <div class="col-12 section05_1 position-relative ">
                        <div>
                            <diV class="font_3rem pt-1 pb-2"><i class="fas fa-cloud-upload-alt "></i></diV>
                            <h3 class="font-monospace font_2rem"> Online Marketting</h3>

                        </div>
                        <div class="card_overlay position-absolute">
                            <h3 class="font_monospace font_2rem pt-4"> Online Marketting</h3>
                            <p class="text-center pt-3 pb-1">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.
                                incididunt ut labore et dolore.
                            </p>
                            <a class="btn btn-outline-primary rounded-pill mx-2 my-3 botton" id="botton">Read
                                More</a>

                        </div>


                    </div>



                </div>
                <div class="col-4">
                    <div class="col-12 section05_1 position-relative ">
                        <div>
                            <diV class="font_3rem pt-1 pb-2"><i class="fas fa-tv"></i></diV>
                            <h3 class="font-monospace font_2rem"> Web Design</h3>

                        </div>
                        <div class="card_overlay position-absolute">
                            <h3 class="font_monospace font_2rem pt-4"> Web Design</h3>
                            <p class="text-center pt-3 pb-1">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.
                                incididunt ut labore et dolore.
                            </p>
                            <a class="btn btn-outline-primary rounded-pill mx-2 my-3 botton" id="botton">Read
                                More</a>

                        </div>


                    </div>



                </div>
                <div class="col-4">
                    <div class="col-12 section05_1 position-relative ">
                        <div>
                            <diV class="font_3rem pt-1 pb-2"><i class="fas fa-pencil-alt"></i></diV>
                            <h3 class="font-monospace font_2rem"> Graphic Design</h3>

                        </div>
                        <div class="card_overlay position-absolute">
                            <h3 class="font_monospace font_2rem pt-4"> Graphic Design</h3>
                            <p class="text-center pt-3 pb-1 ">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.
                                incididunt ut labore et dolore.
                            </p>
                            <a class="btn btn-outline-primary rounded-pill mx-2 my-3 botton" id="botton">Read
                                More</a>

                        </div>


                    </div>



                </div>





            </div>
            <div class="row justify-content-between px-5 my-4">
                <div class="col-4">
                    <div class="col-12 section05_1 position-relative ">
                        <div>
                          <diV class="font_3rem pt-1 pb-2"><i class="fas fa-laptop-code"></i></diV>
                          <h3 class="font-monospace font_2rem"> Web Development</h3>

                        </div>
                        <div class="card_overlay position-absolute">
                            <h3 class="font_monospace font_2rem pt-4"> Web Development</h3>
                            <p class="text-center pt-3 pb-1">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.
                                incididunt ut labore et dolore.
                            </p>
                            <a class="btn btn-outline-primary rounded-pill mx-2 my-3 botton" id="botton">Read
                                More</a>

                        </div>


                    </div>



                </div>
                <div class="col-4">
                    <div class="col-12 section05_1 position-relative ">
                        <div>
                            <diV class="font_3rem pt-1 pb-2"><i class="fas fa-network-wired"></i></diV>
                            <h3 class="font-monospace font_2rem"> Networking</h3>

                        </div>
                        <div class="card_overlay position-absolute">
                            <h3 class="font_monospace font_2rem pt-4"> Networking</h3>
                            <p class="text-center pt-3 pb-1">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.
                                incididunt ut labore et dolore.
                            </p>
                            <a class="btn btn-outline-primary rounded-pill mx-2 my-3 botton" id="botton">Read
                                More</a>

                        </div>


                    </div>



                </div>
                <div class="col-4">
                    <div class="col-12 section05_1 position-relative ">
                        <div>
                            <diV class="font_3rem pt-1 pb-2"><i class="fab fa-wordpress-simple"></i></diV>
                            <h3 class="font-monospace font_2rem"> Wordpress Theme</h3>

                        </div>
                        <div class="card_overlay position-absolute">
                            <h3 class="font_monospace font_2rem pt-4"> Wordpress Theme</h3>
                            <p class="text-center pt-3 pb-1 ">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.
                                incididunt ut labore et dolore.
                            </p>
                            <a class="btn btn-outline-primary rounded-pill mx-2 my-3 botton" id="botton">Read
                                More</a>

                        </div>


                    </div>



                </div>

            </div>
        </div>

    </section>


    </body>
    
    
</html>
@endsection


