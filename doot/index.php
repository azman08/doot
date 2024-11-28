<?php
session_start();
if (isset($_SESSION['login'])) {
  $user_id = $_SESSION['userid'];

  include 'dbcon.php';
  $obj = new dbcon('doot');
} else {
  header("location:/doot/register/login.php");
}

$name=$obj->single_data("user_data", "name", "userid='$user_id'");
$email = $obj->single_data("user_data", "email", "userid='$user_id'");
$about =$obj->single_data("user_main_dta", "about", "userid='$user_id'");
$mobile=$obj->single_data("user_data", "mobile", "userid='$user_id'");
$online_status =$obj->single_data("user_main_dta", "online_status", "userid='$user_id'");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Doot</title>
  <!-- faavicon  -->
  <link rel="shortcut icon" href="assets/img/favicon.png" type="image/x-icon" />

  <!-- style css -->
  <link rel="stylesheet" href="assets/style/style.css" />
  <link rel="stylesheet" href="assets/style/style-for-js.css">
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

  <!-- mdi font -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@mdi/font@7.4.47/css/materialdesignicons.min.css">

  <!-- bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />

  <!-- bootstrap icon -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body>
  <div class="doot">

    <!-- ## all nav parts ##  -->

    <?php
    include "./nav_part.php";
    ?>

    <!-- ## all nav parts end ## -->

    <!-- ## all menu parts ## -->

    <div class="menu-part">

      <!-- profile section  -->

      <div class="profile-section menu-part-details" id="profile-section">
        <div class="profile-img">
          <img class="profile-img-cover" src="assets/img/profile-cover.jpg" alt="profile image">

          <div class="profile-header d-flex w-100 align-items-center p-2 ps-3">
            <div class="flex-grow-1">
              <h5 class="profile-h1 text-white mb-0">My Profile</h5>
            </div>
            <div class="nav-items m-0 flex-shrink-0">
              <a class="nav-btn text-white" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="bx bx-dots-vertical-rounded"></i>
              </a>
              <ul class="dropdown-menu dropdown-menu-end">
                <li><a class="dropdown-item">info <i class='bx bx-info-circle ms-1'></i></a>
                </li>
                <li><a class="dropdown-item">Setting <i class='bx bx-cog ms-1'></i></a></li>

                <hr class="dropdown-divider">
                </li>
                <li><a class="dropdown-item">help <i class='bx bx-help-circle ms-1'></i></a>
                </li>
              </ul>
            </div>
          </div>

        </div>
        <div class="profile-name text-center p-3 p-lg-4 pt-2 pt-lg-2">
          <div class="mb-lg-3 mb-2">
            <img src="assets/img/pr.jpeg" alt="" class="main-profile rounded-circle">
          </div>
          <h5 class="name mb-1 text-truncate text-capitalize">
            <?php echo $name ?></h5>
          <p class="name-w text-truncate mb-0 text-capitalize">Front end Developer</p>
        </div>
        <div class="profile-desc p-4">
          <div>
            <p class="about mb-4">If several languages coalesce, the grammar of the resulting language is
              more simple.</p>
          </div>

          <div class="after-about">
            <div class="d-flex py-2">
              <div class="flex-shrink-0 me-3">
                <i class="bx bx-user align-middle"></i>
              </div>
              <div class="flex-grow-1">
                <p class="mb-0 text-capitalize"><?php echo $name ?></p>
              </div>
            </div>

            <div class="d-flex py-2">
              <div class="flex-shrink-0 me-3">
                <i class="bx bx-message-rounded-dots align-middle"></i>
              </div>
              <div class="flex-grow-1">
                <p class="mb-0">
                  <?php echo $email; ?></p>
              </div>
            </div>

            <!-- <div class="d-flex py-2">
              <div class="flex-shrink-0 me-3">
                <i class="bx bx-location-plus align-middle"></i>
              </div>
              <div class="flex-grow-1">
                <p class="mb-0">Prayagraj India </p>
              </div>
            </div> -->
          </div>
          <hr class="my-4">

          <!-- profile media -->

          <div class="profile-media">
            <div class="d-flex align-items-center">
              <div class="flex-grow-1">
                <h5 class="text-uppercase mb-3">Media</h5>
              </div>
              <div class="flex-shrink-0">
                <a class="d-block mb-3">Show all</a>
              </div>
            </div>
            <div class="profile-media-img">
              <div class="media-img-list">
                <a href="#">
                  <img src="assets/img/img-1.jpg" alt="media img" class="img-fluid">
                </a>
              </div>
              <div class="media-img-list">
                <a href="#">
                  <img src="assets/img/img-1.jpg" alt="media img" class="img-fluid">
                </a>
              </div>
              <div class="media-img-list">
                <a href="#">
                  <img src="assets/img/img-1.jpg" alt="media img" class="img-fluid">
                  <div class="bg-overlay">+ 15</div>
                </a>
              </div>
            </div>
          </div>

          <hr class="my-4">

          <!-- attached-media-file -->

          <div class="attached-file profile-media">

            <div>
              <h5 class="font-size-11 text-muted text-uppercase mb-3">Attached Files</h5>
            </div>
            <!-- attached file header end -->

            <div class="attached-file-list p-2 d-flex mb-2">
              <div class="attached-file-details flex-shrink-0 me-3 ms-1">
                <div class="attached-file-avatar rounded-circle ">
                  <i class="bx bx-paperclip rotate"></i>
                </div>
              </div>
              <div class="flex-grow-1 overflow-hidden">
                <h5 class="text-truncate mb-1">design-phase-1-approved.pdf</h5>
                <p class="mb-0">12.5 MB</p>
              </div>
              <div class="attached-icon ms-3 flex-shrink-0 d-flex gap-2">
                <a class="px-1" href=""><i class="bx bxs-download"></i></a>
                <div class="px-1 nav-items">
                  <a class="nav-btn text-white" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="bx bx-dots-horizontal-rounded"></i>
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item">Share <i class='bx bx-share-alt ms-1'></i></a>
                    </li>
                    <li><a class="dropdown-item">Bookmark <i class='bx bx-bookmarks ms-1'></i></a>
                    </li>

                    <hr class="dropdown-divider">
                    </li>
                    <li><a class="dropdown-item">Delete <i class='bx bx-trash ms-1'></i></a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>

            <div class="attached-file-list p-2 d-flex mb-2">
              <div class="attached-file-details flex-shrink-0 me-3 ms-1">
                <div class="attached-file-avatar rounded-circle ">
                  <i class="bx bx-paperclip rotate"></i>
                </div>
              </div>
              <div class="flex-grow-1 overflow-hidden">
                <h5 class="text-truncate mb-1">design-phase-1-approved.pdf</h5>
                <p class="mb-0">12.5 MB</p>
              </div>
              <div class="attached-icon ms-3 flex-shrink-0 d-flex gap-2">
                <a class="px-1" href=""><i class="bx bxs-download"></i></a>
                <div class="px-1 nav-items">
                  <a class="nav-btn text-white" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="bx bx-dots-horizontal-rounded"></i>
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item">Share <i class='bx bx-share-alt ms-1'></i></a>
                    </li>
                    <li><a class="dropdown-item">Bookmark <i class='bx bx-bookmarks ms-1'></i></a>
                    </li>

                    <hr class="dropdown-divider">
                    </li>
                    <li><a class="dropdown-item">Delete <i class='bx bx-trash ms-1'></i></a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>

          </div>


        </div>
      </div>
      <!-- profile section end -->

      <!-- chat contact section -->

      <div class="chat-section menu-part-details active" id="chat-section">
        <div class="chat-heading px-4 pt-4 mb-1">
          <div class="d-flex align-items-start">
            <div class="flex-grow-1">
              <h4 class="mb-4" id="chrt">Chats</h4>
            </div>
            <div class="flex-shrink-0">
              <div data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="bottom" aria-label="Add Contact"
                data-bs-original-title="Add Contact">
                <button class="btn btn-soft-primary btn-sm" data-bs-toggle="modal" data-bs-target="#add-contact">
                  <i class="bx bx-plus"></i>
                </button>
              </div>
            </div>
          </div>
          <div class="chat-search input-group mb-3">
            <input type="text" class="form-control bg-light" id="chat_search" autocomplete="off"
              placeholder="Search here..">
            <button class="btn btn-light py-2" type="button"><i class="bx bx-search align-middle"
                id="chat-search-icon"></i></button>
          </div>
        </div>

        <!-- chat room list start  -->
        <div class="chat-room-list">
          <div class="chat-room-content">
            <!-- favourite -->
            <h5 class="chat-fav mb-3 px-4 mt-4 text-uppercase">
              Favourites
            </h5>

            <!-- favourite contact -->
            <div class="chat-massage-list">
              <ul class="list-unstyled chat-list chat-user-list" id="favourite-users">

                <!-- // ## add class "active" in 'li' && add class "unread-msg-user" in 'a' @@ add class "online" with "chat-user-img" in img   ## \\ -->

                <li class="" id="contact-id-1" data-name="favourite">
                  <a class="">
                    <div class="d-flex align-items-center">
                      <div class="chat-user-img me-2 align-self-center ms-0">
                        <img src="assets/img/akshay.webp" class="chat-avtar rounded-circle">
                        <sapn class="user-status"></sapn>
                      </div>
                      <div class="text-capitalize text-truncate">akshay singh</div>
                      <div class="ms-auto">
                        <span class="badge bg-dark-subtle text-reset rounded">18</span>
                      </div>
                    </div>
                  </a>
                </li>
                <li class="" id="" data-name="favourite">
                  <a class="">
                    <div class="d-flex align-items-center">
                      <div class="online chat-user-img me-2 align-self-center ms-0"><img src="assets/img/abhi.webp"
                          class="chat-avtar rounded-circle">
                        <sapn class="user-status"></sapn>
                      </div>
                      <div class="text-capitalize text-truncate">abhishek</div>
                      <div class="ms-auto"><span class="badge bg-dark-subtle text-reset rounded"></span></div>
                    </div>
                  </a>
                </li>
                <li class="" id="" data-name="favourite">
                  <a class="">
                    <div class="d-flex align-items-center">
                      <div class="online chat-user-img me-2 align-self-center ms-0"><img src="assets/img/vivek.jpg"
                          class="chat-avtar rounded-circle">
                        <sapn class="user-status"></sapn>
                      </div>
                      <div class="text-capitalize text-truncate">vivek rai</div>
                      <div class="ms-auto"><span class="badge bg-dark-subtle text-reset rounded"></span></div>
                    </div>
                  </a>
                </li>
                <li class="" id="" data-name="favourite">
                  <a class="">
                    <div class="d-flex align-items-center">
                      <div class="online chat-user-img me-2 align-self-center ms-0"><img src="assets/img/vamika.jpg"
                          class="chat-avtar rounded-circle">
                        <sapn class="user-status"></sapn>
                      </div>
                      <div class="text-capitalize text-truncate">vamika</div>
                      <div class="ms-auto"><span class="badge bg-dark-subtle text-reset rounded"></span></div>
                    </div>
                  </a>
                </li>

                <li class="" id="" data-name="favourite">
                  <a class="">
                    <div class="d-flex align-items-center">
                      <div class="chat-user-img me-2 align-self-center ms-0"><img src="assets/img/lk.jpg"
                          class="chat-avtar rounded-circle">
                        <sapn class="user-status"></sapn>
                      </div>
                      <div class="text-capitalize text-truncate">lokendra</div>
                      <div class="ms-auto"><span class="badge bg-dark-subtle text-reset rounded">16</span></div>
                    </div>
                  </a>
                </li>

              </ul>
            </div>

            <!-- direct massage -->
            <div class="chat-heading align-items-center mb-3 px-4 mt-5">

              <div class="flex-grow-1">
                <h4 class="mb-0 chat-fav text-uppercase">Direct Messages</h4>
              </div>
              <div class="flex-shrink-0">
                <div data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="bottom"
                  data-bs-title="New Messages">
                  <button class="btn btn-soft-primary btn-sm direct-msg">
                    <i class="bx bx-plus"></i>
                  </button>
                </div>
              </div>
            </div>

            <!-- direct massage list -->

            <div class="chat-massage-list">
              <ul class="list-unstyled chat-list chat-user-list" id="user-list">

                <!-- // ## add class "active" in 'li' && add class "unread-msg-user" in 'a' @@ add class "online" with "chat-user-img" in img   ## \\ -->

                <li class="" id="" data-name="direct-massage">
                  <a class="">
                    <div class="d-flex align-items-center">
                      <div class="chat-user-img me-2 align-self-center ms-0"><img src="assets/img/akshay.webp"
                          class="chat-avtar rounded-circle">
                        <sapn class="user-status"></sapn>
                      </div>
                      <div class="text-capitalize text-truncate">abhay singh</div>
                      <div class="ms-auto"><span class="badge bg-dark-subtle text-reset rounded">8</span></div>
                    </div>
                  </a>
                </li>
                <li class="" id="" data-name="direct-massage">
                  <a class="">
                    <div class="d-flex align-items-center">
                      <div class="online chat-user-img me-2 align-self-center ms-0"><img src="assets/img/abhi.webp"
                          class="chat-avtar rounded-circle">
                        <sapn class="user-status"></sapn>
                      </div>
                      <div class="text-capitalize text-truncate">sumit</div>
                      <div class="ms-auto"><span class="badge bg-dark-subtle text-reset rounded"></span></div>
                    </div>
                  </a>
                </li>
                <li class="" id="" data-name="direct-massage">
                  <a class="">
                    <div class="d-flex align-items-center">
                      <div class="online chat-user-img me-2 align-self-center ms-0"><img src="assets/img/vamika.jpg"
                          class="chat-avtar rounded-circle">
                        <sapn class="user-status"></sapn>
                      </div>
                      <div class="text-capitalize text-truncate">lily</div>
                      <div class="ms-auto"><span class="badge bg-dark-subtle text-reset rounded"></span></div>
                    </div>
                  </a>
                </li>

                <li class="" id="" data-name="direct-massage">
                  <a class="">
                    <div class="d-flex align-items-center">
                      <div class="chat-user-img me-2 align-self-center ms-0"><img src="assets/img/ds.webp"
                          class="chat-avtar rounded-circle">
                        <sapn class="user-status"></sapn>
                      </div>
                      <div class="text-capitalize text-truncate">deependra</div>
                      <div class="ms-auto"><span class="badge bg-dark-subtle text-reset rounded">6</span></div>
                    </div>
                  </a>
                </li>

              </ul>
            </div>

            <!--    group  -->
            <div class="chat-heading align-items-center mb-3 px-4 mt-5">

              <div class="flex-grow-1">
                <h4 class="mb-0 chat-fav text-uppercase">Groups</h4>
              </div>
              <div class="flex-shrink-0">
                <div data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="bottom"
                  data-bs-title="New Group">
                  <button class="btn btn-soft-primary btn-sm direct-msg" data-bs-toggle="modal"
                    data-bs-target="#create-group">
                    <i class="bx bx-plus"></i>
                  </button>
                </div>
              </div>
            </div>

            <!-- group content -->
            <div class="chat-massage-list">
              <ul class="list-unstyled chat-list chat-user-list" id="group-list">

                <!-- // ## add class "active" in 'li' && add class "unread-msg-user" in 'a' @@ add class "online" with "chat-user-img" in img   ## \\ -->

                <li class="" id="" data-name="groups">
                  <a class="">
                    <div class="d-flex align-items-center">
                      <div class="chat-user-img me-2 align-self-center ms-0"><img src="assets/img/akshay.webp"
                          class="chat-avtar rounded-circle">
                        <sapn class="user-status"></sapn>
                      </div>
                      <div class="text-capitalize text-truncate">nexgen group</div>
                      <div class="ms-auto"><span class="badge bg-dark-subtle text-reset rounded">8</span></div>
                    </div>
                  </a>
                </li>
                <li class="" id="" data-name="groups">
                  <a class="">
                    <div class="d-flex align-items-center">
                      <div class="online chat-user-img me-2 align-self-center ms-0"><img src="assets/img/abhi.webp"
                          class="chat-avtar rounded-circle">
                        <sapn class="user-status"></sapn>
                      </div>
                      <div class="text-capitalize text-truncate">university of prayagraj</div>
                      <div class="ms-auto"><span class="badge bg-dark-subtle text-reset rounded"></span></div>
                    </div>
                  </a>
                </li>
                <li class="" id="" data-name="groups">
                  <a class="">
                    <div class="d-flex align-items-center">
                      <div class="online chat-user-img me-2 align-self-center ms-0"><img src="assets/img/vamika.jpg"
                          class="chat-avtar rounded-circle">
                        <sapn class="user-status"></sapn>
                      </div>
                      <div class="text-capitalize text-truncate">IIt guwahati</div>
                      <div class="ms-auto"><span class="badge bg-dark-subtle text-reset rounded"></span></div>
                    </div>
                  </a>
                </li>

                <li class="" id="" data-name="groups">
                  <a class="">
                    <div class="d-flex align-items-center">
                      <div class="chat-user-img me-2 align-self-center ms-0"><img src="assets/img/ann.webp"
                          class="chat-avtar rounded-circle">
                        <sapn class="user-status"></sapn>
                      </div>
                      <div class="text-capitalize text-truncate">livaithan group</div>
                      <div class="ms-auto"><span class="badge bg-dark-subtle text-reset rounded">9</span></div>
                    </div>
                  </a>
                </li>

              </ul>
            </div>


          </div>


        </div>
        <!-- chat room list end  -->
      </div>

      <!-- chat section end -->

      <!-- contact section -->

      <div class="contect-section menu-part-details" id="contact-section">
        <!-- contact heading  -->
        <div class="chat-heading px-4 pt-4 mb-4">
          <div class="d-flex align-items-start">
            <div class="flex-grow-1">
              <h4 class="mb-4" id="asdf">Contact</h4>
            </div>
            <div class="flex-shrink-0">
              <div data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="bottom" aria-label="Add Contact"
                data-bs-original-title="Add Contact">
                <button class="btn btn-soft-primary btn-sm" data-bs-toggle="modal" data-bs-target="#add-contact">
                  <i class="bx bx-plus"></i>
                </button>
              </div>
            </div>
          </div>
          <div class="chat-search input-group mb-3">
            <input type="text" class="form-control bg-light" id="contact_search" autocomplete="off"
              placeholder="Search here..">
            <button class="btn btn-light py-2" type="button">
              <i class="bx bx-search align-middle" id="contact-search-icon"></i>
            </button>
          </div>
        </div>
        <!-- contact list -->
        <div class="chat-room-list">
          <div class="contact-box">
            <!-- <div class="mt-3">
              <div class="contact-list-title">A </div>
              <ul id="contact-short-A" class="list-unstyled contact-list">
                <li id="contact-id-1">
                  <div class="d-flex align-items-center">
                    <div class="flex-shrink-0 me-2">
                      <img src="assets/img/akshay.webp" class="chat-avtar rounded-circle">
                    </div>
                    <div class="flex-grow-1">
                      <div class="fw-5 text-muted text-capitalize text-truncate">akshay singh
                      </div>
                    </div>
                    <div class="flex-shrink-0">
                      <div class="nav-items">
                        <a class="text-muted" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <i class="bx bx-dots-vertical-rounded align-middle"> </i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end">
                          <a class="dropdown-item user-profile-show" href="#">Profile <i
                              class="bx bxs-user ms-2 text-muted"></i></a>
                          <a class="dropdown-item" href="#">Edit <i class="bx bx-pencil ms-2 text-muted"></i></a>
                          <a class="dropdown-item" href="#">Block <i class="bx bx-block ms-2  text-muted"></i></a>
                          <a class="dropdown-item" href="#">Remove <i class="bx bx-trash ms-2 text-muted"></i></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
              
              </ul>
            </div> -->
          </div>
        </div>

      </div>

      <!-- contact section end-->

      <!-- call section -->

      <div class="call-section menu-part-details" id="call-section">
        <div class="chat-heading px-4 pt-4">
          <div class="d-flex align-items-start">
            <div class="flex-grow-1">
              <h4 class="mb-3">Calls</h4>
            </div>

          </div>

        </div>
        <div class="call-box">
          <ul class="call-list list-unstyled" id="callList">
            <li id="call-id-1">
              <div class="d-flex align-items-center">
                <div class="flex-shrink-0 me-2">
                  <img src="assets/img/akshay.webp" class="chat-avtar rounded-circle">
                </div>
                <div class="flex-grow-0 overflow-hidden">
                  <p class="text-truncate mb-0 me-2 text-capitalize">Akshay singh</p>
                  <div class="text-muted font-size-12 text-truncate">
                    <i class="bx bxs-phone-incoming text-success align-middle"></i>
                    <span> 13 Aug, 2024, 1:05 PM</span>
                  </div>
                </div>
                <div class="flex-shrink-0 ms-auto">
                  <div class="d-flex align-items-center gap-3">
                    <div>
                      <h5 class="mb-0 text-muted">02:34</h5>
                    </div>
                    <div>
                      <button type="button" class="btn btn-link p-0">
                        <i class="bx bx-video align-middle"></i>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </li>
            <li id="call-id-2">
              <div class="d-flex align-items-center">
                <div class="flex-shrink-0 me-2">
                  <img src="assets/img/ann.webp" class="chat-avtar rounded-circle">
                </div>
                <div class="flex-grow-0 overflow-hidden">
                  <p class="text-truncate mb-0 me-2 text-capitalize">abhishek</p>
                  <div class="text-muted font-size-12 text-truncate">
                    <i class="bx bxs-phone-outgoing text-success align-middle"></i>
                    <span> 25 Aug, 2024, 3:05 PM</span>
                  </div>
                </div>
                <div class="flex-shrink-0 ms-auto">
                  <div class="d-flex align-items-center gap-3">
                    <div>
                      <h5 class="mb-0 text-muted">02:34</h5>
                    </div>
                    <div>
                      <button type="button" class="btn btn-link p-0">
                        <i class="bx bxs-phone-call align-middle"></i>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </li>
            <li id="call-id-2">
              <div class="d-flex align-items-center">
                <div class="flex-shrink-0 me-2">
                  <img src="assets/img/ds.webp" class="chat-avtar rounded-circle">
                </div>
                <div class="flex-grow-0 overflow-hidden">
                  <p class="text-truncate mb-0 me-2 text-capitalize">rohit</p>
                  <div class="text-danger font-size-12 text-truncate">
                    <i class="bx bxs-phone-off align-middle"></i>
                    <span> 25 fab, 2024, 3:05 PM</span>
                  </div>
                </div>
                <div class="flex-shrink-0 ms-auto">
                  <div class="d-flex align-items-center gap-3">
                    <div>
                      <h5 class="mb-0 text-muted">03:56</h5>
                    </div>
                    <div>
                      <button type="button" class="btn btn-link p-0">
                        <i class="bx bxs-phone-call align-middle"></i>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </li>
            <li id="call-id-1">
              <div class="d-flex align-items-center">
                <div class="flex-shrink-0 me-2">
                  <img src="assets/img/akshay.webp" class="chat-avtar rounded-circle">
                </div>
                <div class="flex-grow-0 overflow-hidden">
                  <p class="text-truncate mb-0 me-2 text-capitalize">amit singh</p>
                  <div class="text-muted font-size-12 text-truncate">
                    <i class="bx bxs-phone-incoming text-success align-middle"></i>
                    <span> 13 Aug, 2024, 1:05 PM</span>
                  </div>
                </div>
                <div class="flex-shrink-0 ms-auto">
                  <div class="d-flex align-items-center gap-3">
                    <div>
                      <h5 class="mb-0 text-muted">02:34</h5>
                    </div>
                    <div>
                      <button type="button" class="btn btn-link p-0">
                        <i class="bx bx-video align-middle"></i>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </li>
            <li id="call-id-1">
              <div class="d-flex align-items-center">
                <div class="flex-shrink-0 me-2">
                  <img src="assets/img/akshay.webp" class="chat-avtar rounded-circle">
                </div>
                <div class="flex-grow-0 overflow-hidden">
                  <p class="text-truncate mb-0 me-2 text-capitalize">Akshay singh</p>
                  <div class="text-muted font-size-12 text-truncate">
                    <i class="bx bxs-phone-incoming text-success align-middle"></i>
                    <span> 13 Aug, 2024, 1:05 PM</span>
                  </div>
                </div>
                <div class="flex-shrink-0 ms-auto">
                  <div class="d-flex align-items-center gap-3">
                    <div>
                      <h5 class="mb-0 text-muted">02:34</h5>
                    </div>
                    <div>
                      <button type="button" class="btn btn-link p-0">
                        <i class="bx bx-video align-middle"></i>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </li>
            <li id="call-id-2">
              <div class="d-flex align-items-center">
                <div class="flex-shrink-0 me-2">
                  <img src="assets/img/ann.webp" class="chat-avtar rounded-circle">
                </div>
                <div class="flex-grow-0 overflow-hidden">
                  <p class="text-truncate mb-0 me-2 text-capitalize">abhishek</p>
                  <div class="text-muted font-size-12 text-truncate">
                    <i class="bx bxs-phone-outgoing text-success align-middle"></i>
                    <span> 25 Aug, 2024, 3:05 PM</span>
                  </div>
                </div>
                <div class="flex-shrink-0 ms-auto">
                  <div class="d-flex align-items-center gap-3">
                    <div>
                      <h5 class="mb-0 text-muted">02:34</h5>
                    </div>
                    <div>
                      <button type="button" class="btn btn-link p-0">
                        <i class="bx bxs-phone-call align-middle"></i>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </li>
            <li id="call-id-2">
              <div class="d-flex align-items-center">
                <div class="flex-shrink-0 me-2">
                  <img src="assets/img/ds.webp" class="chat-avtar rounded-circle">
                </div>
                <div class="flex-grow-0 overflow-hidden">
                  <p class="text-truncate mb-0 me-2 text-capitalize">rohit</p>
                  <div class="text-danger font-size-12 text-truncate">
                    <i class="bx bxs-phone-off align-middle"></i>
                    <span> 25 fab, 2024, 3:05 PM</span>
                  </div>
                </div>
                <div class="flex-shrink-0 ms-auto">
                  <div class="d-flex align-items-center gap-3">
                    <div>
                      <h5 class="mb-0 text-muted">03:56</h5>
                    </div>
                    <div>
                      <button type="button" class="btn btn-link p-0">
                        <i class="bx bxs-phone-call align-middle"></i>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </li>
            <li id="call-id-1">
              <div class="d-flex align-items-center">
                <div class="flex-shrink-0 me-2">
                  <img src="assets/img/akshay.webp" class="chat-avtar rounded-circle">
                </div>
                <div class="flex-grow-0 overflow-hidden">
                  <p class="text-truncate mb-0 me-2 text-capitalize">amit singh</p>
                  <div class="text-muted font-size-12 text-truncate">
                    <i class="bx bxs-phone-incoming text-success align-middle"></i>
                    <span> 13 Aug, 2024, 1:05 PM</span>
                  </div>
                </div>
                <div class="flex-shrink-0 ms-auto">
                  <div class="d-flex align-items-center gap-3">
                    <div>
                      <h5 class="mb-0 text-muted">02:34</h5>
                    </div>
                    <div>
                      <button type="button" class="btn btn-link p-0">
                        <i class="bx bx-video align-middle"></i>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </li>
            <li id="call-id-1">
              <div class="d-flex align-items-center">
                <div class="flex-shrink-0 me-2">
                  <img src="assets/img/akshay.webp" class="chat-avtar rounded-circle">
                </div>
                <div class="flex-grow-0 overflow-hidden">
                  <p class="text-truncate mb-0 me-2 text-capitalize">Akshay singh</p>
                  <div class="text-muted font-size-12 text-truncate">
                    <i class="bx bxs-phone-incoming text-success align-middle"></i>
                    <span> 13 Aug, 2024, 1:05 PM</span>
                  </div>
                </div>
                <div class="flex-shrink-0 ms-auto">
                  <div class="d-flex align-items-center gap-3">
                    <div>
                      <h5 class="mb-0 text-muted">02:34</h5>
                    </div>
                    <div>
                      <button type="button" class="btn btn-link p-0">
                        <i class="bx bx-video align-middle"></i>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </li>
            <li id="call-id-2">
              <div class="d-flex align-items-center">
                <div class="flex-shrink-0 me-2">
                  <img src="assets/img/ann.webp" class="chat-avtar rounded-circle">
                </div>
                <div class="flex-grow-0 overflow-hidden">
                  <p class="text-truncate mb-0 me-2 text-capitalize">abhishek</p>
                  <div class="text-muted font-size-12 text-truncate">
                    <i class="bx bxs-phone-outgoing text-success align-middle"></i>
                    <span> 25 Aug, 2024, 3:05 PM</span>
                  </div>
                </div>
                <div class="flex-shrink-0 ms-auto">
                  <div class="d-flex align-items-center gap-3">
                    <div>
                      <h5 class="mb-0 text-muted">02:34</h5>
                    </div>
                    <div>
                      <button type="button" class="btn btn-link p-0">
                        <i class="bx bxs-phone-call align-middle"></i>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </li>
            <li id="call-id-2">
              <div class="d-flex align-items-center">
                <div class="flex-shrink-0 me-2">
                  <img src="assets/img/ds.webp" class="chat-avtar rounded-circle">
                </div>
                <div class="flex-grow-0 overflow-hidden">
                  <p class="text-truncate mb-0 me-2 text-capitalize">rohit</p>
                  <div class="text-danger font-size-12 text-truncate">
                    <i class="bx bxs-phone-off align-middle"></i>
                    <span> 25 fab, 2024, 3:05 PM</span>
                  </div>
                </div>
                <div class="flex-shrink-0 ms-auto">
                  <div class="d-flex align-items-center gap-3">
                    <div>
                      <h5 class="mb-0 text-muted">03:56</h5>
                    </div>
                    <div>
                      <button type="button" class="btn btn-link p-0">
                        <i class="bx bxs-phone-call align-middle"></i>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </li>
            <li id="call-id-1">
              <div class="d-flex align-items-center">
                <div class="flex-shrink-0 me-2">
                  <img src="assets/img/akshay.webp" class="chat-avtar rounded-circle">
                </div>
                <div class="flex-grow-0 overflow-hidden">
                  <p class="text-truncate mb-0 me-2 text-capitalize">amit singh</p>
                  <div class="text-muted font-size-12 text-truncate">
                    <i class="bx bxs-phone-incoming text-success align-middle"></i>
                    <span> 13 Aug, 2024, 1:05 PM</span>
                  </div>
                </div>
                <div class="flex-shrink-0 ms-auto">
                  <div class="d-flex align-items-center gap-3">
                    <div>
                      <h5 class="mb-0 text-muted">02:34</h5>
                    </div>
                    <div>
                      <button type="button" class="btn btn-link p-0">
                        <i class="bx bx-video align-middle"></i>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </li>
          </ul>
        </div>

      </div>
      <!-- call section end -->


      <!-- bookmark section -->

      <div class="bookmark-section menu-part-details" id="bookmark-section">
        <div class="chat-heading px-4 pt-4">
          <div class="d-flex align-items-start">
            <div class="flex-grow-1">
              <h4 class="mb-3">Bookmarks</h4>
            </div>

          </div>

        </div>
        <div class="bookmark-box call-box">
          <ul class="bookmark-list list-unstyled" id="bookmarkList">
            <li>
              <div class="d-flex align-items-center">
                <div class="flex-shrink-0">
                  <div class="chat-avtar ms-1 me-3">
                    <div class="avatar-title rounded-circle">
                      <i class="bx bx-file"></i>
                    </div>
                  </div>
                </div>
                <div class="flex-grow-1 overflow-hidden">
                  <h5 class="mb-1 text-truncate">
                    <a href="#" class="text-truncate p-0 ">
                      desine-fase-1-pdf
                    </a>
                  </h5>
                  <p class="text-muted text-truncate mb-0">
                    15 MB
                  </p>
                </div>
                <div class="flex-shrink-0 ms-4 nav-items">
                  <a class="font-size-16 text-muted px-1 py-2" href="#" role="button" data-bs-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    <i class="bx bx-dots-horizontal-rounded text-muted"></i>
                  </a>
                  <div class="dropdown-menu dropdown-menu-end">
                    <a class="dropdown-item d-flex align-items-center justify-content-between" href="#">Open <i
                        class="bx bx-folder-open ms-2 text-muted"></i></a>
                    <a class="dropdown-item d-flex align-items-center justify-content-between" href="#">Edit <i
                        class="bx bx-pencil ms-2 text-muted"></i></a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item d-flex align-items-center justify-content-between" href="#">Delete <i
                        class="bx bx-trash ms-2 text-muted"></i></a>
                  </div>

                </div>
              </div>
            </li>
            <li>
              <div class="d-flex align-items-center">
                <div class="flex-shrink-0">
                  <div class="chat-avtar ms-1 me-3">
                    <div class="avatar-title rounded-circle">
                      <i class="bx bx-image"></i>
                    </div>
                  </div>
                </div>
                <div class="flex-grow-1 overflow-hidden">
                  <h5 class="mb-1 text-truncate">
                    <a href="#" class="text-truncate p-0 ">
                      image.2
                    </a>
                  </h5>
                  <p class="text-muted text-truncate mb-0">
                    8.4 MB
                  </p>
                </div>
                <div class="flex-shrink-0 ms-4 nav-items">
                  <a class="font-size-16 text-muted px-1 py-2" href="#" role="button" data-bs-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    <i class="bx bx-dots-horizontal-rounded text-muted"></i>
                  </a>
                  <div class="dropdown-menu dropdown-menu-end">
                    <a class="dropdown-item d-flex align-items-center justify-content-between" href="#">Open <i
                        class="bx bx-folder-open ms-2 text-muted"></i></a>
                    <a class="dropdown-item d-flex align-items-center justify-content-between" href="#">Edit <i
                        class="bx bx-pencil ms-2 text-muted"></i></a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item d-flex align-items-center justify-content-between" href="#">Delete <i
                        class="bx bx-trash ms-2 text-muted"></i></a>
                  </div>

                </div>
              </div>
            </li>
            <li>
              <div class="d-flex align-items-center">
                <div class="flex-shrink-0">
                  <div class="chat-avtar ms-1 me-3">
                    <div class="avatar-title rounded-circle">
                      <i class="bx bxs-user-circle"></i>
                    </div>
                  </div>
                </div>
                <div class="flex-grow-1 overflow-hidden">
                  <h5 class="mb-1 text-truncate">
                    <a href="#" class="text-truncate p-0 ">
                      contact-3
                    </a>
                  </h5>
                  <p class="text-muted text-truncate mb-0">
                    1.5 MB
                  </p>
                </div>
                <div class="flex-shrink-0 ms-4 nav-items">
                  <a class="font-size-16 text-muted px-1 py-2" href="#" role="button" data-bs-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    <i class="bx bx-dots-horizontal-rounded text-muted"></i>
                  </a>
                  <div class="dropdown-menu dropdown-menu-end">
                    <a class="dropdown-item d-flex align-items-center justify-content-between" href="#">Open <i
                        class="bx bx-folder-open ms-2 text-muted"></i></a>
                    <a class="dropdown-item d-flex align-items-center justify-content-between" href="#">Edit <i
                        class="bx bx-pencil ms-2 text-muted"></i></a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item d-flex align-items-center justify-content-between" href="#">Delete <i
                        class="bx bx-trash ms-2 text-muted"></i></a>
                  </div>

                </div>
              </div>
            </li>
            <li>
              <div class="d-flex align-items-center">
                <div class="flex-shrink-0">
                  <div class="chat-avtar ms-1 me-3">
                    <div class="avatar-title rounded-circle">
                      <i class="bx bx-pin"></i>
                    </div>
                  </div>
                </div>
                <div class="flex-grow-1 overflow-hidden">
                  <h5 class="mb-1 text-truncate">
                    <a href="#" class="text-truncate p-0 ">
                      chat-114
                    </a>
                  </h5>
                  <p class="text-muted text-truncate mb-0">
                    1.5 MB
                  </p>
                </div>
                <div class="flex-shrink-0 ms-4 nav-items">
                  <a class="font-size-16 text-muted px-1 py-2" href="#" role="button" data-bs-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    <i class="bx bx-dots-horizontal-rounded text-muted"></i>
                  </a>
                  <div class="dropdown-menu dropdown-menu-end">
                    <a class="dropdown-item d-flex align-items-center justify-content-between" href="#">Open <i
                        class="bx bx-folder-open ms-2 text-muted"></i></a>
                    <a class="dropdown-item d-flex align-items-center justify-content-between" href="#">Edit <i
                        class="bx bx-pencil ms-2 text-muted"></i></a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item d-flex align-items-center justify-content-between" href="#">Delete <i
                        class="bx bx-trash ms-2 text-muted"></i></a>
                  </div>

                </div>
              </div>
            </li>
          </ul>
        </div>
      </div>
      <!-- bookmark section end -->


      <!-- settings section -->

      <div class="setting-section menu-part-details" id="setting-section">
        <div class="settings-content">
          <div>
            <div class="user-cover">
              <img src="assets/img/profile-cover.jpg" class="profile-img-cover pr-cover-change">
              <div class="profile-header d-flex w-100 align-items-center p-2 ps-3">
                <div class="flex-grow-1">
                  <h5 class="profile-h1 text-white mb-0">Settings</h5>
                </div>
                <div class="p-2 flex-shrink-0">
                  <div class="chat-avtar p-0 rounded-circle profile-cover-edit" data-bs-toggle="tooltip"
                    data-bs-trigger="hover" data-bs-placement="bottom" data-bs-original-title="Change Cover">
                    <input id="pr-cover-input" type="file" class="">
                    <label for="pr-cover-input" class="profile-cover-edit  chat-avtar">
                      <span class="avatar-title rounded-circle bg-light text-muted">
                        <i class="bx bxs-pencil"></i>
                      </span>
                    </label>
                  </div>

                </div>
              </div>

            </div>
            <div class="profile-photo-edit text-center p-3 p-lg-4 pt-2 pt-lg-2">
              <div class="mb-lg-3 mb-2 pr-user">
                <img src="assets/img/pr.jpeg" alt="" class="main-profile pr-photo-change rounded-circle">

                <div class="chat-avtar p-0 rounded-circle pr-photo-edit">
                  <input id="profile-photo-input" type="file" class="profile-img-file-input">
                  <label for="profile-photo-input" class="chat-avtar">
                    <span class="avatar-title rounded-circle">
                      <i class="bx bxs-camera"></i>
                    </span>
                  </label>
                </div>
              </div>
              <p class="name mb-1 fw-medium text-muted text-truncate text-capitalize"><?php echo $name; ?></p>
              <div class="dropdown d-inline-block">
                <div class="text-muted d-block" role="button" data-bs-toggle="dropdown" aria-haspopup="true"
                  aria-expanded="false">
                  <i class="bx bxs-circle <?php if ($online_status=='online'){ echo 'pr-active';}elseif ($online_status=='away') {
                    echo 'pr-away';
                  }elseif ($online_status=='do not disturb') {
                   echo 'pr-dnd';
                  } ?> align-middle active_status_badge"></i> <?php echo $online_status; ?> <i
                    class='bx bx-chevron-down align-middle'></i>
                </div>

                <div class="dropdown-menu">
                  <a class="dropdown-item active_status" data-work="online"><i
                      class="bx bxs-circle pr-active me-1 align-middle"></i>
                    online</a>
                  <a class="dropdown-item active_status text-capitalize" data-work="away"><i
                      class="bx bxs-circle pr-away me-1 align-middle"></i>
                    Away</a>
                  <a class="dropdown-item active_status" data-work="do not disturb"><i
                      class="bx bxs-circle pr-dnd me-1 align-middle"></i>
                    Do not disturb</a>
                </div>
              </div>
            </div>
          </div>
          <div class="user-settings">
            <div id="settingprofile" class="accordion accordion-flush">
              <div class="accordion-item">
                <div class="accordion-header" id="headerpersonalinfo">
                  <button class="accordion-button fw-medium collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#personalinfo" aria-expanded="false" aria-controls="personalinfo">
                    <i class="bx bxs-user text-muted me-3"></i> Personal Info
                  </button>
                </div>
                <div id="personalinfo" class="accordion-collapse collapse" aria-labelledby="headerpersonalinfo"
                  data-bs-parent="#settingprofile">
                  <div class="accordion-body">
                    <div class="float-end">
                      <button type="button" id="confirm-settings"><i class="bx bxs-pencil"></i></button>
                    </div>

                    <div class="mt-2">
                      <p class="text-muted mb-1">Name</p>
                      <h5 class="set_val text-capitalize"><?php echo $name;  ?></h5>
                    </div>

                    <div class="mt-4">
                      <p class="text-muted mb-1">Email</p>
                      <h5 class="set_val"><?php echo $email; ?></h5>
                    </div>

                    <div class="mt-4">
                      <p class="text-muted mb-1">mobile</p>
                      <h5 class="set_val"><?php echo $mobile; ?></h5>
                    </div>

                    <div class="mt-4">
                      <p class="text-muted mb-1">About</p>
                      <h5 class="mb-1 set_val text-capitalize"> <?php echo $about; ?></h5>
                    </div>

                  </div>
                </div>
              </div>
              <!-- end personal info card -->


              <div class="accordion-item">
                <div class="accordion-header" id="privacy1">
                  <button class="accordion-button fw-medium collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#privacy" aria-expanded="false" aria-controls="privacy">
                    <i class="bx bxs-lock text-muted me-3"></i>Privacy
                  </button>
                </div>
                <div id="privacy" class="accordion-collapse collapse" aria-labelledby="privacy1"
                  data-bs-parent="#settingprofile">
                  <div class="accordion-body">
                    <ul class="list-group list-group-flush">
                      <li class="list-group-item py-3 px-0 pt-0">
                        <div class="d-flex align-items-center">
                          <div class="flex-grow-1 overflow-hidden">
                            <h5 class="font-size-13 mb-0 text-truncate">Profile photo</h5>
                          </div>
                          <div class="flex-shrink-0 ms-2">
                            <select class="form-select form-select-sm">
                              <option value="Everyone" selected="">Everyone</option>
                              <option value="Selected">Selected</option>
                              <option value="Nobody">Nobody</option>
                            </select>
                          </div>
                        </div>
                      </li>
                      <li class="list-group-item py-3 px-0">
                        <div class="d-flex align-items-center">
                          <div class="flex-grow-1 overflow-hidden">
                            <h5 class="font-size-13 mb-0 text-truncate">Last seen</h5>

                          </div>
                          <div class="flex-shrink-0 ms-2">
                            <div class="form-check form-switch">
                              <input type="checkbox" class="form-check-input" id="privacy-lastseenSwitch" checked="">
                              <label class="form-check-label" for="privacy-lastseenSwitch"></label>
                            </div>
                          </div>
                        </div>
                      </li>
                      <li class="list-group-item py-3 px-0">
                        <div class="d-flex align-items-center">
                          <div class="flex-grow-1 overflow-hidden">
                            <h5 class="font-size-13 mb-0 text-truncate">Status</h5>
                          </div>
                          <div class="flex-shrink-0 ms-2">
                            <select class="form-select form-select-sm">
                              <option value="Everyone" selected="">Everyone</option>
                              <option value="Selected">Selected</option>
                              <option value="Nobody">Nobody</option>
                            </select>
                          </div>
                        </div>
                      </li>
                      <li class="list-group-item py-3 px-0">
                        <div class="d-flex align-items-center">
                          <div class="flex-grow-1 overflow-hidden">
                            <h5 class="font-size-13 mb-0 text-truncate">Read receipts</h5>
                          </div>
                          <div class="flex-shrink-0 ms-2">
                            <div class="form-check form-switch">
                              <input type="checkbox" class="form-check-input" id="privacy-readreceiptSwitch" checked="">
                              <label class="form-check-label" for="privacy-readreceiptSwitch"></label>
                            </div>
                          </div>
                        </div>
                      </li>
                      <li class="list-group-item py-3 px-0 pb-0">
                        <div class="d-flex align-items-center">
                          <div class="flex-grow-1 overflow-hidden">
                            <h5 class="font-size-13 mb-0 text-truncate">Groups</h5>

                          </div>
                          <div class="flex-shrink-0 ms-2">
                            <select class="form-select form-select-sm">
                              <option value="Everyone" selected="">Everyone</option>
                              <option value="Selected">Selected</option>
                              <option value="Nobody">Nobody</option>
                            </select>
                          </div>
                        </div>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <!-- end privacy card -->

              <div class="accordion-item">
                <div class="accordion-header" id="headersecurity">
                  <button class="accordion-button fw-medium collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapsesecurity" aria-expanded="false" aria-controls="collapsesecurity">
                    <i class="bx bxs-check-shield text-muted me-3"></i> Security
                  </button>
                </div>
                <div id="collapsesecurity" class="accordion-collapse collapse" aria-labelledby="headersecurity"
                  data-bs-parent="#settingprofile">
                  <div class="accordion-body">
                    <ul class="list-group list-group-flush">
                      <li class="list-group-item p-0">
                        <div class="d-flex align-items-center">
                          <div class="flex-grow-1 overflow-hidden">
                            <h5 class="font-size-13 mb-0 text-truncate">Show security
                              notification</h5>

                          </div>
                          <div class="flex-shrink-0 ms-2">
                            <div class="form-check form-switch">
                              <input type="checkbox" class="form-check-input" id="security-notificationswitch">
                              <label class="form-check-label" for="security-notificationswitch"></label>
                            </div>
                          </div>
                        </div>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <!-- end security card -->



              <div class="accordion-item">
                <div class="accordion-header" id="headerhelp">
                  <button class="accordion-button fw-medium collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapsehelp" aria-expanded="false" aria-controls="collapsehelp">
                    <i class="bx bxs-help-circle text-muted me-3"></i> Help
                  </button>
                </div>
                <div id="collapsehelp" class="accordion-collapse collapse" aria-labelledby="headerhelp"
                  data-bs-parent="#settingprofile">
                  <div class="accordion-body">
                    <ul class="list-group list-group-flush">
                      <li class="list-group-item py-3 px-0 pt-0">
                        <h5 class="font-size-13 mb-0"><a href="#" class="text-body d-block">FAQs</a></h5>
                      </li>
                      <li class="list-group-item py-3 px-0">
                        <h5 class="font-size-13 mb-0"><a href="#" class="text-body d-block">Contact</a></h5>
                      </li>
                      <li class="list-group-item py-3 px-0 pb-0">
                        <h5 class="font-size-13 mb-0"><a href="#" class="text-body d-block">Terms &amp; Privacy
                            policy</a></h5>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- settings section end -->

    </div>

    <!-- ## all menu part end ## -->

    <!-- ## all chats part start ## -->


    <?php
    include "./chat_part.php";

    ?>

    <!-- ## all chats part  end## -->

  </div>
  <!-- all modals -->
  <!-- add contact modal  -->
  <div class="modal fade add-contact" id="add-contact" tabindex="-1" aria-labelledby="add-contactLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
      <div class="modal-content modal-header-colored shadow-lg border-0">
        <div class="modal-header">
          <h5 class="modal-title text-white" id="add-contactLabel">Create Contact
          </h5>
          <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close">
          </button>
        </div>
        <div class="modal-body p-4">
          <form autocomplete='off'>
            <div class="mb-3 position-relative">
              <label for="addcontactmobile-input" class="form-label">Mobile</label>
              <input type="text" class="form-control" id="addcontactmobile-input" placeholder="Enter Mobile">
              <div class="contact_check"><i class='bx bx-check-double' id="contact_check"></i></div>
              <div class=" form-errors"></div>
            </div>
            <!-- <div class=" mb-3">
                <label for="addcontactemail-input" class="form-label">Email</label>
                <input type="email" class="form-control" id="addcontactemail-input" placeholder="Enter Email">
              </div> -->
            <div class="mb-3 position-relative">
              <label for="addcontactname-input" class="form-label">Name</label>
              <input type="text" class="form-control" id="addcontactname-input" placeholder="Enter Name">
              <i class='bx bxs-error-circle contact_name_err'></i>
              <div class=" form-errors"></div>
            </div>

          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-link text-decoration-none" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary" id="contact_add" data-bs-dismiss="modal">Add</button>
          <!-- if contact exist then add  other wise invite  -->
        </div>
      </div>
    </div>

  </div>
  <!-- add contact modal  end-->



  <!-- Create group modal  -->

  <div class="modal fade create-group add-contact" id="create-group" tabindex="-1" aria-labelledby="create-groupLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
      <div class="modal-content modal-header-colored shadow-lg border-0">
        <div class="modal-header">
          <h5 class="modal-title text-white" id="create-groupLabel">Create Group
          </h5>
          <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close">
          </button>
        </div>
        <div class="modal-body p-4">
          <form>
            <div class="mb-3">
              <label for="groupname-input" class="form-label">Group Name</label>
              <input type="text" class="form-control" id="groupname-input" placeholder="Enter Name">
            </div>
            <div class="mb-3">
              <label class="form-label">Group Members</label>
              <div class="mb-4">
                <button class="btn btn-light btn-sm" type="button" data-bs-toggle="collapse"
                  data-bs-target="#groupmembercollapse" aria-expanded="true" aria-controls="groupmembercollapse">
                  Select Members
                </button>
              </div>
              <div class="collapse" id="groupmembercollapse">
                <div class="card border">
                  <div class="card-header">
                    <h5 class="mb-0">Contacts</h5>
                  </div>
                  <div class="card-body p-2">
                    <div class="contact-wrapper">
                      <div class="mt3">
                        <div class="contact-list-title">A </div>
                        <ul id="contact-short-A" class="list-unstyled contact-list">
                          <li id="contact-id-1">
                            <div class="d-flex">
                              <div class="flex-shrink-0 me-2">
                                <div class="form-check">
                                  <input type="checkbox" class="form-check-input" id="memberCheck1">

                                </div>
                              </div>
                              <div class="flex-grow-1">
                                <label class="form-check-label" for="memberCheck1">
                                  <div class="fw-5 text-muted text-capitalize text-truncate">
                                    akshay singh
                                  </div>
                                </label>
                              </div>

                            </div>
                          </li>
                          <li>
                            <div class="d-flex">
                              <div class="flex-shrink-0 me-2">
                                <div class="form-check">
                                  <input type="checkbox" class="form-check-input" id="memberCheck2">

                                </div>
                              </div>
                              <div class="flex-grow-1">
                                <label class="form-check-label" for="memberCheck2">
                                  <div class="fw-5 text-muted text-capitalize text-truncate">
                                    abhishek
                                  </div>
                                </label>
                              </div>

                            </div>
                          </li>
                          <li>
                            <div class="d-flex">
                              <div class="flex-shrink-0 me-2">
                                <div class="form-check">
                                  <input type="checkbox" class="form-check-input" id="memberCheck3">

                                </div>
                              </div>
                              <div class="flex-grow-1">
                                <label class="form-check-label" for="memberCheck3">
                                  <div class="fw-5 text-muted text-capitalize text-truncate">
                                    abhay singh
                                  </div>
                                </label>
                              </div>

                            </div>
                          </li>

                        </ul>
                      </div>
                    </div>
                  </div>

                </div>
              </div>

            </div>
            <div class="mb-0">
              <label for="group-message-input" class="form-label">Invatation Message</label>
              <textarea class="form-control" id="group-message-input" rows="3" placeholder="Enter Message"></textarea>
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-link text-decoration-none" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Create Group</button>
          <!-- if contact exist then add  other wise invite  -->
        </div>
      </div>
    </div>

  </div>


  <!-- Create group modal end -->

  <!-- audio video call modal  -->
  <?php 
  include './audio_video_call_modal.php';
  ?>

  <!-- footter -->

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
  </script>

  <!-- tool tip script  -->
  <script>
  // var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
  // var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
  //     return new bootstrap.Tooltip(tooltipTriggerEl)
  // })

  // tooltip

  const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
  const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(
    tooltipTriggerEl));
  </script>

  <script src="assets/js/jquery-3.7.1.js"></script>
  <!-- chat part js  -->
  <script src="assets/js/chat_part.js"></script>
  <!-- Contact js -->
  <script src="assets/js/contact.js"></script>
    <!-- chat contact -->
<script src="assets/js/chat_contact.js"></script>
     <!-- main js  -->
  <script src="assets/js/main.js"></script>

  <script src="assets/js/settings.js"></script>
  <script src="assets/js/contact_profile.js"></script>

</body>

</html>