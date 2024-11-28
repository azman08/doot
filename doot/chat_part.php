<div class="chat-part w-100">
  <div class="chat-welcome-section d-none">
    <div class="w-100 justify-content-center row">
      <div class="col-md-7 col-xxl-5">
        <div class="p-4 text-center">
          <div class="avatar-xl mx-auto mb-4">
            <div class="avatar-title rounded-circle">
              <i class="bx bxs-message-alt-detail display-4 m-0"></i>
            </div>
          </div>
          <h4>Welcome to Doot Chat App</h4>
          <p class="text-muted mb-4">
            Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean
            commodo ligula eget dolor. cum sociis natoque penatibus et
          </p>
          <button type="button" class="btn btn-primary ">
            Get Started
          </button>

        </div>
      </div>
    </div>
  </div>

  <!-- chat welcome section-end  -->
  <div class="chat-content d-lg-flex">
    <div class="w-100 overflow-hidden position-relative">
      <div id="user-chat" class="position-relative" style="display: block;">
        <div class="p-3 p-lg-4 user-chat-topbar">
          <div class="align-items-center row chat-user-content">
            <div class="col-8 col-sm-4">

              <div class="d-flex align-items-center">
                <div class="flex-shrink-0 d-lg-none me-2 d-block">

                  <a class="user-chat-remove p-1 text-decoration-none"><i
                      class="bx bx-chevron-left align-middle"></i></a>

                </div>
                <div class="flex-grow-1 overflow-hidden">
                  <div class="d-flex align-items-center">
                    <div class="user-contact flex-shrink-0 me-3 ms-0 chat-user-img">
                      <img src="/doot/assets/img/akshay.webp" class="rounded-circle avatar-sm">
                      <span class="user-status" id=""></span>
                    </div>
                    <div class="flex-grow-1 overflow-hidden">
                      <h6 class="text-truncate text-capitalize mb-0 user-profile-show"><a class="user_profile_id"> name
                        </a>
                      </h6>
                      <p class="text-truncate text-muted mb-0">
                        <small class="text-capitalize"> </small>
                      </p>
                    </div>
                  </div>
                </div>
              </div>

            </div>
            <div class="col-4 col-sm-8">
              <ul class="list-inline user-chat-nav text-end mb-0">
                <li class="list-inline-item d-none d-sm-inline-block">
                  <button type="button" class="nav-btn chat-search-box"><i class="bx bx-search"></i></button>
                </li>
                <li class="list-inline-item d-none d-lg-inline-block me-2 ms-0">
                  <button type="button" class="nav-btn audio-call" data-bs-toggle="modal"
                    data-bs-target="#audio-call"><i class="bx bxs-phone-call"></i></button>
                </li>
                <li class="list-inline-item d-none d-lg-inline-block me-2 ms-0">
                  <button type="button" class="nav-btn video-call" data-bs-toggle="modal"
                    data-bs-target="#video-call"><i class="bx bx-video"></i></button>
                </li>
                <li class="list-inline-item d-none d-lg-inline-block me-2 ms-0">
                  <button type="button" class="nav-btn user-profile-show"><i class="bx bxs-info-circle"></i></button>
                </li>
                <li class="list-inline-item d-lg-inline-block text-center me-2 ms-0">
                  <div class="nav-items m-0 flex-shrink-0">
                    <a class="nav-btn" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                      <i class="bx bx-dots-vertical-rounded"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end">
                      <li class="d-block d-sm-none"><a class="dropdown-item">Search<i class="bx bx-search ms-1"></i></a>
                      </li>
                      <li class="d-block d-lg-none user-profile-show"><a class="dropdown-item">Profile<i
                            class="bx bx-user ms-1"></i></a>
                      </li>
                      <li class="d-block d-lg-none" data-bs-toggle="modal" data-bs-target="#video-call"><a
                          class="dropdown-item">Video <i class="bx bx-video ms-1"></i></a>
                      </li>
                      <li class="d-block d-lg-none" data-bs-toggle="modal" data-bs-target="#audio-call"><a
                          class="dropdown-item">Audio <i class="bx bxs-phone-call ms-1"></i></a>
                      </li>
                      <li><a class="dropdown-item">Archive <i class="bx bx-archive ms-1"></i></a>
                      </li>
                      <li><a class="dropdown-item">Muted <i class="bx bx-microphone-off ms-1"></i></a>
                      </li>
                      <li><a class="dropdown-item">Settings <i class="bx bx-cog ms-1"></i></a>
                      </li>
                    </ul>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <!-- user chat box-->
        <div class="user-chat-mid">
          <div class="chat-conversation p-3 p-lg-4" id="">
            <ul class="list-unstyled chat-conversation-list" id="users-conversation">
           
            </ul>
          </div>
        </div>
      </div>

      <!-- user chat bottom -->
      <div class="user-chat-bottom">
        <form id="chat-input-section" enctype="multipart/form-data">
          <div class="chat-input-section p-3 p-lg-4">
            <div class="row g-0 align-items-center">
              <div class="file_Upload">

              </div>
              <!-- <div class="remove_all" onclick="removeAllImages()">Cancle</div> -->

              <div class="col-auto">
                <div class="chat-input-links me-md-2">
                  <div class="links-list-item" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top"
                    aria-label="More" data-bs-original-title="More">
                    <button type="button" id="col_btn"
                      class="btn btn-link text-decoration-none btn-lg waves-effect collapsed" data-bs-toggle="collapse"
                      data-bs-target="#chatinputmorecollapse" aria-expanded="false"
                      aria-controls="chatinputmorecollapse">
                      <i class="bx bx-dots-horizontal-rounded align-middle"></i>
                    </button>
                  </div>
                  <div class="links-list-item" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top"
                    aria-label="Emoji" data-bs-original-title="Emoji">
                    <button type="button" class="btn btn-link text-decoration-none btn-lg waves-effect emoji-btn"
                      id="emoji-btn">
                      <i class="bx bx-smile align-middle"></i>
                    </button>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="position-relative">
                  <div class="chat-input-feedback">
                    Please Enter a Message
                  </div>
                  <input autocomplete="off" type="text" class="form-control form-control-lg chat-input" autofocus
                    id="chat-input" placeholder="Type your message...">
                </div>
              </div>
              <div class="col-auto">
                <div class="chat-input-links ms-2 gap-md-1">
                  <div class="links-list-item d-none d-sm-block" data-bs-container=".chat-input-links"
                    data-bs-toggle="popover" data-bs-trigger="focus" data-bs-html="true" data-bs-placement="top"
                    data-bs-content="listing">
                    <button type="button" class="btn btn-link text-decoration-none btn-lg waves-effect">
                      <i class="bx bx-microphone align-middle"></i>
                    </button>
                  </div>
                  <div class="links-list-item">
                    <button type="submit" class="btn btn-primary send-btn btn-lg chat-send waves-effect waves-light"
                      data-bs-toggle="collapse" data-bs-target=".chat-input-collapse1.show">
                      <i class="bx bxs-send align-middle" id="msg-submit-btn"></i>
                    </button>
                  </div>
                </div>
              </div>
            </div>


            <div class="chat-input-collapse chat-input-collapse1 collapse" id="chatinputmorecollapse">
              <div class="card mb-0">
                <div class="card-body py-3">
                  <div class="chat-input-links swiper">
                    <div class="swiper-wrapper">
                      <div class="swiper-slide">
                        <div class="text-center px-2 position-relative">
                          <div>
                            <input id="attachedfile-input" type="file" class="d-none" accept="" multiple>
                            <label for="attachedfile-input" class="avatar-sm mx-auto">
                              <span class="avatar-title rounded-circle">
                                <i class="bx bx-paperclip"></i>
                              </span>
                            </label>
                          </div>
                          <h5 class="text-uppercase mt-3 mb-0 text-body text-truncate">
                            Attached</h5>
                        </div>
                      </div>
                      <div class="swiper-slide">
                        <div class="text-center px-2">
                          <div class="avatar-sm mx-auto">
                            <div class="avatar-title rounded-circle">
                              <i class="bx bxs-camera"></i>
                            </div>
                          </div>
                          <h5 class="text-uppercase text-truncate mt-3 mb-0"><a href="#"
                              class="text-body text-decoration-none">Camera</a>
                          </h5>
                        </div>
                      </div>
                      <div class="swiper-slide">
                        <div class="text-center px-2 position-relative">
                          <div>
                            <input id="galleryfile-input" type="file" class="d-none" accept="image/*" multiple>
                            <label for="galleryfile-input" class="avatar-sm mx-auto">
                              <span class="avatar-title rounded-circle">
                                <i class="bx bx-images"></i>
                              </span>
                            </label>
                          </div>
                          <h5 class="text-uppercase text-truncate mt-3 mb-0">
                            Gallery</h5>
                        </div>
                      </div>

                      <div class="swiper-slide">
                        <div class="text-center px-2">
                          <div>
                            <input id="audiofile-input" type="file" class="d-none" accept="audio/*" multiple>
                            <label for="audiofile-input" class="avatar-sm mx-auto">
                              <span class="avatar-title rounded-circle">
                                <i class="bx bx-headphone"></i>
                              </span>
                            </label>
                          </div>
                          <h5 class="text-uppercase text-truncate mt-3 mb-0">Audio</h5>
                        </div>
                      </div>
                      <div class="swiper-slide">
                        <div class="text-center px-2">
                          <div class="avatar-sm mx-auto">
                            <div class="avatar-title rounded-circle">
                              <i class="bx bx-current-location"></i>
                            </div>
                          </div>

                          <h5 class="text-uppercase text-truncate mt-3 mb-0"><a href="#"
                              class="text-body text-decoration-none">Location</a>
                          </h5>
                        </div>
                      </div>
                      <div class="swiper-slide">
                        <div class="text-center px-2">
                          <div class="avatar-sm mx-auto">
                            <div class="avatar-title rounded-circle">
                              <i class="bx bxs-user-circle"></i>
                            </div>
                          </div>
                          <h5 class="text-uppercase text-truncate mt-3 mb-0"><a href="#"
                              class="text-body text-decoration-none" data-bs-toggle="modal"
                              data-bs-target=".contactModal">Contacts</a>
                          </h5>
                        </div>
                      </div>
                    </div>

                  </div>
                </div>
              </div>

            </div>

          </div>
        </form>

        <!-- reply card -->
        <div class="replyCard collapse">
          <div class="card mb-0">
            <div class="card-body py-3">
              <div class="replymessage-block mb-0 d-flex align-items-start">
                <div class="flex-grow-1">
                  <h5 class="conversation-name"></h5>
                  <p class="mb-0"></p>
                </div>
                <div class="flex-shrink-0">
                  <button type="button" id="cancle_reply_btn" class="btn btn-sm btn-link mt-n2 me-n3">
                    <i class="bx bx-x align-middle"></i>
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- user profile sidebar -->
    <div class="user-profile-sidebar d-none">
      <div class="position-relative">
        <div class="p-3 border-bottom">
          <div class="user-profile-img">
            <img src="assets/img/akshay.webp" class="profile-img rounded side_profile">
            <div class="overlay-content rounded">
              <div class="user-chat-nav p-2">
                <div class="d-flex w-100">
                  <div class="flex-grow-1">
                    <button type="button"
                      class="btn nav-btn text-white user-profile-hide d-none d-lg-block btn btn-none">
                      <i class="bx bx-x"></i>
                    </button>
                    <button type="button"
                      class="btn nav-btn text-white user-profile-hide d-block d-lg-none btn btn-none">
                      <i class="bx bx-left-arrow-alt"></i>
                    </button>

                  </div>
                  <div class="flex-shrink-0">
                    <div class="nav-items m-0 flex-shrink-0">
                      <a class="nav-btn text-white" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="bx bx-dots-vertical-rounded"></i>
                      </a>
                      <ul class="dropdown-menu dropdown-menu-end">
                        <li><a class="dropdown-item">Archive <i class="bx bx-archive ms-1"></i></a>
                        </li>
                        <li><a class="dropdown-item">Muted <i class="bx bx-microphone-off ms-1"></i></a>
                        </li>
                        <li><a class="dropdown-item">Delete <i class="bx bx-trash ms-1"></i></a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
              <div class="mt-auto p-3">
                <h5 class="user-name mb-1 text-truncate text-capitalize side_name">
                  Akshay singh
                </h5>
                <p class="chat-user-img text-truncate mb-0 side_status">
                  <i class="bx bxs-circle user-profile-status me-1 ms-0"></i>
                  Active
                </p>
              </div>
            </div>
          </div>

        </div>
        <div class="p-4 profile-desc user-profile-desc">
          <div class="text-center border-bottom">
            <div class="row">
              <div class="col-sm col-4">
                <div class="mb-4"><button type="button" class="btn avatar-sm p-0"><span
                      class="avatar-title rounded bg-light"><i class="bx bxs-message-alt-detail"></i></span></button>
                  <h5 class="text-uppercase text-muted mt-2">Message</h5>
                </div>
              </div>
              <div class="col-sm col-4">
                <div class="mb-4"><button type="button" class="btn avatar-sm p-0 favourite-btn side_favourite"><span
                      class="avatar-title rounded bg-light"><i class="bx bx-heart"></i></span></button>
                  <h5 class="text-uppercase text-muted mt-2">Favourite</h5>
                </div>
              </div>
              <div class="col-sm col-4">
                <div class="mb-4"><button type="button" class="btn avatar-sm p-0" data-bs-toggle="modal"
                    data-bs-target="#audio-call"><span class="avatar-title rounded bg-light"><i
                        class="bx bxs-phone-call"></i></span></button>
                  <h5 class="text-uppercase text-muted mt-2">Audio</h5>
                </div>
              </div>
              <div class="col-sm col-4">
                <div class="mb-4"><button type="button" class="btn avatar-sm p-0" data-bs-toggle="modal"
                    data-bs-target="#video-call"><span class="avatar-title rounded bg-light"><i
                        class="bx bx-video"></i></span></button>
                  <h5 class="text-uppercase text-muted mt-2">Video</h5>
                </div>
              </div>
              <div class="col-sm col-4">
                <div class="mb-4 nav-items">
                  <button type="button" class="btn avatar-sm p-0" data-bs-toggle="dropdown" aria-expanded="false">
                    <span class="avatar-title rounded bg-light">
                      <i class="bx bx-dots-horizontal-rounded"></i>
                    </span>
                  </button>
                  <ul class="dropdown-menu dropdown-menu-end">
                    <li><a class="dropdown-item">Archive <i class="bx bx-archive ms-1"></i></a>
                    </li>
                    <li><a class="dropdown-item">Muted <i class="bx bx-microphone-off ms-1"></i></a>
                    </li>
                  </ul>

                  <h5 class="text-uppercase text-muted mt-2">More</h5>
                </div>
              </div>

            </div>
          </div>
          <div class="text-muted pt-4">
            <h5 class="text-uppercase">About :</h5>
            <p class="mb-4 side_about">If several languages coalesce, the grammar of the resulting.</p>
          </div>
          <div class="pb-2">
            <h5 class="text-uppercase mb-2">Info :</h5>
            <div>
              <div class="d-flex align-items-end">
                <div class="flex-grow-1">
                  <p class="text-muted mb-1">Name</p>
                </div>
                <!-- <div class="flex-shrink-0">
                  <button type="button" class="btn btn-sm user-name-edit">
                    Edit
                  </button>
                </div> -->
              </div>
              <h5 class="font-size-15 side_name"></h5>
            </div>
            <div class="mt-4">
              <p class="text-muted mb-1">Email</p>
              <h5 class="font-size-15 side_email"></h5>
            </div>
            <div class="mt-4">
              <p class="text-muted mb-1">Mobile</p>
              <h5 class="font-size-15 mb-0 side_mobile"></h5>
            </div>
          </div>
          <hr class="my-4">
          <div>
            <div class="d-flex">
              <div class="flex-grow-1">
                <h5 class="text-muted text-uppercase">Group in common</h5>
              </div>
            </div>
            <ul class="list-unstyled chat-list mx-n4">
              <li>
                <a href="">
                  <div class="d-flex align-items-center">
                    <div class="flex-shrink-0 avatar-xs me-2">
                      <span class="avatar-title rounded-circle">#</span>
                    </div>
                    <div class="flex-grow-1 overflow-hidden">
                      <p class="text-truncate mb-0">Livaithan Group</p>
                    </div>
                  </div>
                </a>
              </li>
            </ul>
          </div>
          <hr class="my-4">
          <div>
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
          </div>
          <hr class="my-4">
          <div>
            <div class="attached-file profile-media">

              <div>
                <h5 class="font-size-11 text-muted text-uppercase mb-3">Attached Files</h5>
              </div>
              <!-- attached file header end -->

              <div class="attached-file-list p-2 d-flex mb-2">
                <div class="attached-file-details flex-shrink-0 me-3 ms-1">
                  <div class="attached-file-avatar rounded-circle ">
                    <i class="bx bx-paperclip"></i>
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
                      <li><a class="dropdown-item">Share <i class="bx bx-share-alt ms-1"></i></a>
                      </li>
                      <li><a class="dropdown-item">Bookmark <i class="bx bx-bookmarks ms-1"></i></a>
                      </li>

                      <hr class="dropdown-divider">

                      <li><a class="dropdown-item">Delete <i class="bx bx-trash ms-1"></i></a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>

              <div class="attached-file-list p-2 d-flex mb-2">
                <div class="attached-file-details flex-shrink-0 me-3 ms-1">
                  <div class="attached-file-avatar rounded-circle ">
                    <i class="bx bx-paperclip"></i>
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
                      <li><a class="dropdown-item">Share <i class="bx bx-share-alt ms-1"></i></a>
                      </li>
                      <li><a class="dropdown-item">Bookmark <i class="bx bx-bookmarks ms-1"></i></a>
                      </li>

                      <hr class="dropdown-divider">

                      <li><a class="dropdown-item">Delete <i class="bx bx-trash ms-1"></i></a>
                      </li>
                    </ul>
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