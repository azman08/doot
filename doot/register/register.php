<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Doot</title>
  <!-- faavicon  -->
  <link rel="shortcut icon" href="../assets/img/favicon.png" type="image/x-icon" />

  <!-- style css -->
  <link rel="stylesheet" href="../assets/style/style.css" />
  <link rel="stylesheet" href="../assets/style/style-for-js.css" />
  <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />

  <!-- bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
  <!-- bootstrap icon -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" />
  <!-- sweetalert style cdn  -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.10.7/dist/sweetalert2.min.css">
</head>

<body>
  <div class="log-bg">
    <div class="container-fluid p-0">
      <div class="row g-0">
        <div class="col-xl-3 col-lg-4">
          <div class="p-4 pb-0 p-lg-5 pb-lg-0 log-logo-section">
            <div class="log-head text-white-50">
              <h3>
                <a href="" class="text-white text-decoration-none">
                  <i class="bx bxs-message-alt-detail align-middle text-white h3 mb-1 me-2"></i>
                  Doot
                </a>
              </h3>
              <p class="font-size-16">
                Stay Connected with your Well Wishers
              </p>
            </div>
            <div class="mt-auto">
              <img src="../assets/img/auth-img.png" class="log-img" />
            </div>
          </div>
        </div>
        <div class="col-xl-9 col-lg-8">
          <div class="logpage-content">
            <div class="d-flex flex-column h-100 px-4 pt-4">
              <div class="row justify-content-center my-auto">
                <div class="col-sm-8 col-lg-6 col-xl-5 col-xxl-4">
                  <div class="py-md-4 py-4">
                    <div class="form-head text-center mb-5">
                      <h3>Register Account</h3>
                      <p>Get your free Doot account now.</p>
                    </div>
                    <div class="text-danger font-size-14"></div>
                    <form class="log-form" id="register_form" autocomplete="off">
                      <div class="mb-3 position-relative">
                        <label for="fullname" class="form-label">Full Name</label>
                        <input type="text" class="form-control" name="name" id="fullname"
                          placeholder="Enter Fullname" />
                        <i class="bx bxs-info-circle form-errors-icon"></i>
                        <!-- validation errors -->
                        <div class="form-errors"></div>
                      </div>
                      <div class="mb-3 position-relative">
                        <label for="mobile" class="form-label">Mobile</label>
                        <input type="text" name="mobile" class="form-control" id="mobile" placeholder="Enter Mobile" />
                        <i class="bx bxs-info-circle form-errors-icon"></i>
                        <!-- validation errors -->
                        <div class="form-errors"></div>
                      </div>
                      <div class="mb-3 position-relative">
                        <label for="email" class="form-label">Email</label>
                        <input type="text" name="email" class="form-control" id="email" placeholder="Enter Email" />
                        <i class="bx bxs-info-circle form-errors-icon"></i>
                        <!-- validation errors -->
                        <div class="form-errors"></div>
                      </div>

                      <div class="mb-3">
                        <label for="userpassword" class="form-label">Password</label>
                        <div class="position-relative mb-3">
                          <input type="password" class="form-control pe-5" placeholder="Password (8 or more characters)"
                            id="userpassword" name="password" />
                          <!-- <i class="bx bxs-info-circle form-errors-icon"></i> -->
                          <button class="btn btn-link position-absolute end-0 top-0 text-decoration-none" type="button"
                            id="password-addon">
                            <i class="bi bi-eye-fill align-middle" id="eye_icon"></i>
                          </button>

                          <!-- validation errors -->
                          <div class="form-errors position-relative"></div>
                        </div>
                      </div>

                      <div class="form-check form-check-info mt-4">
                        <input class="form-check-input p-0" type="checkbox" name="remember-check" id="remember-check" />
                        <label class="form-check-label log-term" for="remember-check">
                          <p class="mb-0">
                            By registering you agree to the Doot
                            <a href="#" class="text-decoration-none">Terms of Use</a>
                            &
                            <a href="" class="text-decoration-none">Privacy Policy</a>
                          </p>
                        </label>
                        <!-- validation errors -->
                        <div class="form-errors"></div>
                      </div>

                      <div class="text-center mt-4">
                        <button class="btn btn-primary log-submit w-100" id="register" type="submit">
                          Register
                        </button>
                      </div>
                      <div class="mt-4 text-center">
                        <div class="signin-other-title">
                          <h5 class="mb-4">Sign up with</h5>
                        </div>
                        <div class="row log-api-links">
                          <div class="col-6">
                            <div>
                              <button type="button" class="btn btn-light w-100" data-bs-toggle="tooltip"
                                data-bs-trigger="hover" data-bs-placement="top" aria-label="Facebook"
                                data-bs-original-title="Facebook">
                                <i class="bi bi-facebook"></i>
                              </button>
                            </div>
                          </div>
                          <div class="col-6">
                            <div>
                              <button type="button" class="btn btn-light w-100" data-bs-toggle="tooltip"
                                data-bs-trigger="hover" data-bs-placement="top" aria-label="Google"
                                data-bs-original-title="Google" id="google">
                                <i class="bi bi-google text-danger"></i>
                              </button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </form>

                    <div class="text-center mt-5">
                      <p class="log-end-link">
                        Already have an account ?
                        <a href="login.php" class="fw-mediam">Log in</a>
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- footter -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>

  <!-- tool tip script  -->
  <script>
    // var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
    // var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
    //     return new bootstrap.Tooltip(tooltipTriggerEl)
    // })
    const tooltipTriggerList = document.querySelectorAll(
      '[data-bs-toggle="tooltip"]'
    );
    const tooltipList = [...tooltipTriggerList].map(
      (tooltipTriggerEl) => new bootstrap.Tooltip(tooltipTriggerEl)
    );
  </script>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.10.7/dist/sweetalert2.all.min.js"></script>
  <!-- main js  -->

  <script src="../assets/js/jquery-3.7.1.js"></script>
  <script src="../assets/js/login_register.js"></script>


</body>

</html>