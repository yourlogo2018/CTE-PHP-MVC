<?php 
//**Inicia uma sessao */
if (session_status() !== PHP_SESSION_ACTIVE) {
  session_start();
}
?>
<!DOCTYPE html>

<html
  lang="en"
  class="light-style customizer-hide"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="<?php echo $base ?>/template/assets/"
  data-template="horizontal-menu-template"
>
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"
    />

    <title>Cadastre-se</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="<?php echo $base ?>/template/assets/img/favicon/favicon.ico" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet"
    />

    <!-- Icons -->
    <link rel="stylesheet" href="<?php echo $base ?>/template/assets/vendor/fonts/boxicons.css" />
    <link rel="stylesheet" href="<?php echo $base ?>/template/assets/vendor/fonts/fontawesome.css" />
    <link rel="stylesheet" href="<?php echo $base ?>/template/assets/vendor/fonts/flag-icons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="<?php echo $base ?>/template/assets/vendor/css/rtl/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="<?php echo $base ?>/template/assets/vendor/css/rtl/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="<?php echo $base ?>/template/assets/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="<?php echo $base ?>/template/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
    <link rel="stylesheet" href="<?php echo $base ?>/template/assets/vendor/libs/typeahead-js/typeahead.css" />
    <!-- Vendor -->
    <link rel="stylesheet" href="<?php echo $base ?>/template/assets/vendor/libs/formvalidation/dist/css/formValidation.min.css" />

    <!-- Page CSS -->
    <!-- Page -->
    <link rel="stylesheet" href="<?php echo $base ?>/template/assets/vendor/css/pages/page-auth.css" />
    <!-- Helpers -->
    <script src="<?php echo $base ?>/template/assets/vendor/js/helpers.js"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Template customizer: To hide customizer set displayCustomizer value false in config.js.  -->
    <script src="<?php echo $base ?>/template/assets/vendor/js/template-customizer.js"></script>
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="<?php echo $base ?>/template/assets/js/config.js"></script>
    <link rel="stylesheet" href="<?php echo $base ?>/template/assets/vendor/libs/sweetalert2/sweetalert2.css" />
  </head>

  <body>
    <!-- Content -->

    <div class="authentication-wrapper authentication-cover">
      <div class="authentication-inner row m-0">
        <!-- /Left Text -->
        <div class="d-none d-lg-flex col-lg-7 col-xl-8 align-items-center">
          <div class="flex-row text-center mx-auto">
            <img
              src="<?php echo $base ?>/template/assets/img/pages/register-light.png"
              alt="Auth Cover Bg color"
              width="520"
              class="img-fluid authentication-cover-img"
              data-app-light-img="pages/register-light.png"
              data-app-dark-img="pages/register-dark.png"
            />
            <div class="mx-auto">
              <h3>A few clicks to get started 🚀</h3>
              <p>
                Let’s get started with your 14 days free trial and <br />
                start building your application today.
              </p>
            </div>
          </div>
        </div>
        <!-- /Left Text -->

        <!-- Register -->
        <div class="d-flex col-12 col-lg-5 col-xl-4 align-items-center authentication-bg p-sm-5 p-4">
          <div class="w-px-400 mx-auto">
            <!-- Logo -->
            <div class="app-brand mb-4">
              <a href="index.html" class="app-brand-link gap-2 mb-2">
                <span class="app-brand-logo demo">
                  <svg
                    width="26px"
                    height="26px"
                    viewBox="0 0 26 26"
                    version="1.1"
                    xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink"
                  >
                    <title>icon</title>
                    <defs>
                      <linearGradient x1="50%" y1="0%" x2="50%" y2="100%" id="linearGradient-1">
                        <stop stop-color="#5A8DEE" offset="0%"></stop>
                        <stop stop-color="#699AF9" offset="100%"></stop>
                      </linearGradient>
                      <linearGradient x1="0%" y1="0%" x2="100%" y2="100%" id="linearGradient-2">
                        <stop stop-color="#FDAC41" offset="0%"></stop>
                        <stop stop-color="#E38100" offset="100%"></stop>
                      </linearGradient>
                    </defs>
                    <g id="Pages" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                      <g id="Login---V2" transform="translate(-667.000000, -290.000000)">
                        <g id="Login" transform="translate(519.000000, 244.000000)">
                          <g id="Logo" transform="translate(148.000000, 42.000000)">
                            <g id="icon" transform="translate(0.000000, 4.000000)">
                              <path
                                d="M13.8863636,4.72727273 C18.9447899,4.72727273 23.0454545,8.82793741 23.0454545,13.8863636 C23.0454545,18.9447899 18.9447899,23.0454545 13.8863636,23.0454545 C8.82793741,23.0454545 4.72727273,18.9447899 4.72727273,13.8863636 C4.72727273,13.5423509 4.74623858,13.2027679 4.78318172,12.8686032 L8.54810407,12.8689442 C8.48567157,13.19852 8.45300462,13.5386269 8.45300462,13.8863636 C8.45300462,16.887125 10.8856023,19.3197227 13.8863636,19.3197227 C16.887125,19.3197227 19.3197227,16.887125 19.3197227,13.8863636 C19.3197227,10.8856023 16.887125,8.45300462 13.8863636,8.45300462 C13.5386269,8.45300462 13.19852,8.48567157 12.8689442,8.54810407 L12.8686032,4.78318172 C13.2027679,4.74623858 13.5423509,4.72727273 13.8863636,4.72727273 Z"
                                id="Combined-Shape"
                                fill="#4880EA"
                              ></path>
                              <path
                                d="M13.5909091,1.77272727 C20.4442608,1.77272727 26,7.19618701 26,13.8863636 C26,20.5765403 20.4442608,26 13.5909091,26 C6.73755742,26 1.18181818,20.5765403 1.18181818,13.8863636 C1.18181818,13.540626 1.19665566,13.1982714 1.22574292,12.8598734 L6.30410592,12.859962 C6.25499466,13.1951893 6.22958398,13.5378796 6.22958398,13.8863636 C6.22958398,17.8551125 9.52536149,21.0724191 13.5909091,21.0724191 C17.6564567,21.0724191 20.9522342,17.8551125 20.9522342,13.8863636 C20.9522342,9.91761479 17.6564567,6.70030817 13.5909091,6.70030817 C13.2336969,6.70030817 12.8824272,6.72514561 12.5388136,6.77314791 L12.5392575,1.81561642 C12.8859498,1.78721495 13.2366963,1.77272727 13.5909091,1.77272727 Z"
                                id="Combined-Shape2"
                                fill="url(#linearGradient-1)"
                              ></path>
                              <rect
                                id="Rectangle"
                                fill="url(#linearGradient-2)"
                                x="0"
                                y="0"
                                width="7.68181818"
                                height="7.68181818"
                              ></rect>
                            </g>
                          </g>
                        </g>
                      </g>
                    </g>
                  </svg>
                </span>
                <span class="app-brand-text demo h3 mb-0 fw-bold">Frest</span>
              </a>
            </div>
            <!-- /Logo -->
            <h4 class="mb-2">Adventure starts here 🚀</h4>
            <p class="mb-4">Make your app management easy and fun!</p>

            <form  class="mb-3" action="<?php echo $base ?>/action_register" method="POST">
              <div class="mb-3">
                <label for="username" class="form-label">Nome</label>
                <input
                  type="text"
                  class="form-control"
                  id="username"
                  name="username"
                  autofocus
                />
              </div>
              <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="text" class="form-control" id="email" name="email" placeholder="E-mail" />
              </div>
              <div class="mb-3 form-password-toggle">
                <label class="form-label" for="password">Senha</label>
                <div class="input-group input-group-merge">
                  <input
                    type="password"
                    id="password"
                    class="form-control"
                    name="password"
                    aria-describedby="password"
                  />
                  <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                </div>
              </div>

             
              <button class="btn btn-primary d-grid w-100">Cadastrar</button>
            </form>

            <p class="text-center">
              <span>Já tem uma conta?</span>
              <a href="<?php echo $base ?>/login">
                <span>Faça login</span>
              </a>
            </p>

            <div class="divider my-4">
              <div class="divider-text">or</div>
            </div>

            <div class="d-flex justify-content-center">
              <a href="javascript:;" class="btn btn-icon btn-label-facebook me-3">
                <i class="tf-icons bx bxl-facebook"></i>
              </a>

              <a href="javascript:;" class="btn btn-icon btn-label-google-plus me-3">
                <i class="tf-icons bx bxl-google-plus"></i>
              </a>

              <a href="javascript:;" class="btn btn-icon btn-label-twitter">
                <i class="tf-icons bx bxl-twitter"></i>
              </a>
            </div>
          </div>
        </div>
        <!-- /Register -->
      </div>
    </div>

    <!-- / Content -->

    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="<?php echo $base ?>/template/assets/vendor/libs/jquery/jquery.js"></script>
    <script src="<?php echo $base ?>/template/assets/vendor/libs/popper/popper.js"></script>
    <script src="<?php echo $base ?>/template/assets/vendor/js/bootstrap.js"></script>
    <script src="<?php echo $base ?>/template/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

    <script src="<?php echo $base ?>/template/assets/vendor/libs/hammer/hammer.js"></script>

    <script src="<?php echo $base ?>/template/assets/vendor/libs/i18n/i18n.js"></script>
    <script src="<?php echo $base ?>/template/assets/vendor/libs/typeahead-js/typeahead.js"></script>

    <script src="<?php echo $base ?>/template/assets/vendor/js/menu.js"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src="<?php echo $base ?>/template/assets/vendor/libs/formvalidation/dist/js/FormValidation.min.js"></script>
    <script src="<?php echo $base ?>/template/assets/vendor/libs/formvalidation/dist/js/plugins/Bootstrap5.min.js"></script>
    <script src="<?php echo $base ?>/template/assets/vendor/libs/formvalidation/dist/js/plugins/AutoFocus.min.js"></script>

    <!-- Main JS -->
    <script src="<?php echo $base ?>/template/assets/js/main.js"></script>

    <!-- Page JS -->
    <script src="<?php echo $base ?>/template/assets/js/pages-auth.js"></script>
    <script src="<?php echo $base ?>/template/assets/vendor/libs/sweetalert2/sweetalert2.js"></script>

<?php

//Validação da sessao
if( !empty($_SESSION["error"]) ){

  if( $_SESSION["error"] == "true" ){

    echo "
    <script>
    Swal.fire(
      'Error',
      '".$_SESSION["message"]."',
      'error'
    )
    </script>";
    $_SESSION["error"] = "";
    $_SESSION["message"] = "";

  }

}

?>

  </body>
</html>
