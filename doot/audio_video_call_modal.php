  <!-- Modal audio call -->
  <div class="modal fade audioCall" id="audio-call" tabindex="-1" aria-labelledby="audio-callLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content shadow-lg border-0">
        <div class="modal-body p-0">
          <div class="text-center p-4 pb-0">
            <div class="avatar-xl mx-auto mb-4">
              <img src="assets/img/akshay.webp" alt="" class="img-thumbnail rounded-circle">
            </div>

            <div class="mid-fun-icon d-flex justify-content-center align-items-center mt-4" style="gap: 15px;">
              <div class="avatar-md h-auto">
                <button type="button" class="btn btn-light avatar-sm rounded-circle">
                  <span class="avatar-title bg-transparent text-muted">
                    <i class="bx bx-microphone-off"></i>
                  </span>
                </button>
                <h5 class="text-uppercase text-muted mt-2">Mute</h5>
              </div>
              <div class="avatar-md h-auto">
                <button type="button" class="btn btn-light avatar-sm rounded-circle">
                  <span class="avatar-title bg-transparent text-muted">
                    <i class="bx bx-volume-full"></i>
                  </span>
                </button>
                <h5 class="text-uppercase text-muted mt-2">Speaker</h5>
              </div>
              <div class="avatar-md h-auto">
                <button type="button" class="btn btn-light avatar-sm rounded-circle">
                  <span class="avatar-title bg-transparent text-muted">
                    <i class="bx bx-user-plus"></i>
                  </span>
                </button>
                <h5 class="text-uppercase text-muted mt-2">Add New</h5>
              </div>
            </div>

            <div class="mt-4">
              <button type="button" class="btn btn-danger avatar-md call-close-btn rounded-circle"
                data-bs-dismiss="modal">
                <span class="avatar-title bg-transparent">
                  <i class="mdi mdi-phone-hangup"></i>
                </span>
              </button>
            </div>
          </div>

          <div class="p-4 modal-user-name">
            <div class="mt-4 text-center">
              <h5 class="mb-0 text-truncate text-capitalize">Akshay Singh</h5>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Modal audio call  end-->
  <!-- Modal video call -->

  <div class="modal fade videoCall" id="video-call" tabindex="-1" aria-labelledby="audio-callLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content shadow-lg border-0">
        <div class="modal-body p-0">
          <img src="assets/img/vivek.jpg" alt="" class="videocallModal-bg">
          <div class="position-absolute start-0 end-0 bottom-0">
            <div class="text-center">
              <div class="mid-fun-icon video-call d-flex justify-content-center align-items-center text-center">
                <div class="avatar-md h-auto">
                  <button type="button" class="btn btn-light avatar-sm rounded-circle">
                    <span class="avatar-title bg-transparent text-muted">
                      <i class="bx bx-microphone-off"></i>
                    </span>
                  </button>
                </div>
                <div class="avatar-md h-auto">
                  <button type="button" class="btn btn-light avatar-sm rounded-circle">
                    <span class="avatar-title bg-transparent text-muted">
                      <i class="bx bx-volume-full"></i>
                    </span>
                  </button>
                </div>
                <div class="avatar-md h-auto">
                  <button type="button" class="btn btn-light avatar-sm rounded-circle">
                    <span class="avatar-title bg-transparent text-muted">
                      <i class="bx bx-video-off"></i>
                    </span>
                  </button>
                </div>
                <div class="avatar-md h-auto">
                  <button type="button" class="btn btn-light avatar-sm rounded-circle">
                    <span class="avatar-title bg-transparent text-muted">
                      <i class="bx bx-refresh"></i>
                    </span>
                  </button>
                </div>
              </div>

              <div class="mt-4">
                <button type="button" class="btn btn-danger avatar-md call-close-btn rounded-circle"
                  data-bs-dismiss="modal">
                  <span class="avatar-title bg-transparent font-size-24">
                    <i class="mdi mdi-phone-hangup"></i>
                  </span>
                </button>
              </div>
            </div>

            <div class="p-4 modal-user-name video-call">
              <div class="text-white mt-4 text-center">
                <h5 class="text-truncate mb-0 text-white text-capitalize">Akshay singh</h5>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
  <!-- Modal video call  end-->