// user chat topbar nav //

let user_profile_show = document.getElementsByClassName("user-profile-show");
let user_profile_hide = document.getElementsByClassName("user-profile-hide");
let user_profile_sidebar = document.getElementsByClassName("user-profile-sidebar")[0];



Array.from(user_profile_show).forEach((e) => {
  pr = 1;
  e.addEventListener("click", (el) => {
    let contact_id = $(".user_profile_id").attr('id')
    //  console.log(contact_id);

    function side_detail_get() {
      $.ajax({
        url: "/doot/contact_profile.php",
        type: "post",
        data: {
          work: "contact_profile",
          contact_id: contact_id
        },
        success: function (ps) {
          let profile_data = JSON.parse(ps)
          // console.log(profile_data);
          let contact_name = profile_data[0].name;
          let contact_email = profile_data[0].email;
          let contact_mobile = profile_data[0].mobile;
          let check_online=profile_data[0].online_check;
          let contact_about = profile_data[1].about;
          let contact_status = profile_data[1].online_status;
          let contact_profile = profile_data[1].profile_photo;
          let contact_favourite = profile_data[2].favourite;
          
          

          // sild bar profile selectors
          let side_name = document.querySelectorAll(".side_name")[0].innerText = contact_name;
          document.querySelectorAll(".side_name")[1].innerText = contact_name;
          let side_email = document.querySelector(".side_email").innerText = contact_email
          let side_mobile = document.querySelector(".side_mobile").innerText = contact_mobile;
          let side_about = document.querySelector(".side_about").innerText = contact_about;
          let side_status = document.querySelector(".side_status");
          side_status.lastChild.nodeValue = contact_status

          if (check_online==1) {
            side_status.classList.add('d-block')
            side_status.classList.remove('d-none')
          }else{
            side_status.classList.remove('d-block')
            side_status.classList.add('d-none')
           
          }

          if (contact_status == 'online') {
            side_status.classList.remove("away")
            side_status.classList.remove("dnd")
            side_status.classList.add("online")
          } else if (contact_status == 'away') {
            side_status.classList.remove("online")
            side_status.classList.remove("dnd")
            side_status.classList.add("away")
            console.log(side_status);
          }
          else if (contact_status == 'do not disturb') {
            side_status.classList.remove("online")
            side_status.classList.remove("away")
            side_status.classList.add("dnd")
          }

          let side_profile = document.querySelector(".side_profile").src = '/doot/assets/user_img/' + contact_profile;
          let side_favourite = document.querySelector(".side_favourite");



        }
      })
    }
    // ajax end 
    if (pr == 1) {
      side_detail_get()


      user_profile_sidebar.classList.remove("d-none")
      user_profile_sidebar.classList.add("d-block")
      pr = 0
    }
    else {
      if ((user_profile_sidebar.getAttribute("class")).includes('d-block')) {
        side_detail_get()
        user_profile_sidebar.classList.add("d-none")
        user_profile_sidebar.classList.remove("d-block")
      } else {
        side_detail_get()
        user_profile_sidebar.classList.remove("d-none")
        user_profile_sidebar.classList.add("d-block")
      }

      pr = 1
    }
  })
})
Array.from(user_profile_hide).forEach((e) => {
  e.addEventListener("click", () => {
    user_profile_sidebar.classList.add("d-none")
    user_profile_sidebar.classList.remove("d-block")
  })
})
