
const nav_btns = document.getElementsByClassName("nav-btns");
const menu_section = document.getElementsByClassName("menu-part-details");
// chat view 
function scrollview() {
  document.getElementsByClassName('chat-conversation-list')[0].lastElementChild.scrollIntoView()
}

// if (document.getElementsByClassName('chat-conversation-list').childNodes) {
//    scrollview();
   
// }







function classFree_navLinks() {
  Array.from(nav_btns).forEach((e) => {
    e.classList.remove("active");
  });
}

function classFree_menuSection() {
  Array.from(menu_section).forEach((e) => {
    e.classList.remove("active");
  });
}

Array.from(nav_btns).forEach((e) => {
  e.addEventListener("click", () => {
    classFree_navLinks();
    classFree_menuSection();
    e.classList.toggle("active");
    var ids = e.getAttribute("data-id");
    document.querySelector(ids).classList.add("active");
  });
});



// chat section js //


let welcome_chat = document.getElementsByClassName('chat-welcome-section')[0];
let chat_part = document.getElementsByClassName('chat-content')[0];
let chat_massege_list = document.querySelectorAll('.chat-massage-list li');

function chat_welcome() {
  welcome_chat.classList.remove('d-none')
  chat_part.classList.remove('d-lg-flex')
  chat_part.classList.add('d-none')
}
function chat_welcome_remove() {
  welcome_chat.classList.add('d-none')
  chat_part.classList.remove('d-none')
  chat_part.classList.add('d-lg-flex')
}

chat_welcome();
chat_massege_list.forEach((e) => {
  e.addEventListener('click', chat_welcome_remove)
})


var chat_list = document.querySelectorAll(".chat-user-list li");

function class_free_list() {
  Array.from(chat_list).forEach((e) => {
    e.classList.remove("active");
  });
}

Array.from(chat_list).forEach((e) => {
  e.addEventListener("click", () => {
    class_free_list();
    e.classList.add("active");
  });
});

// unread class add //
var unread_msg_user = document.querySelectorAll(".chat-user-list li .badge");
var add_unread_msg_user = document.querySelectorAll(".chat-user-list li a");

Array.from(unread_msg_user).forEach((element) => {
  unread_msgs = element.innerText;
  sd = element.parentNode.parentNode.parentNode;
  if (unread_msgs != "") {
    sd.classList.add("unread-msg-user");
  }
});

// chat search //

var chat_content = document.querySelectorAll(".chat-list li");
var chat_search = document.getElementById("chat_search");
var chat_search_icon = document.getElementById("chat-search-icon");
var chat_rc = document.getElementsByClassName("chat-room-content")[0];

chat_search.addEventListener("focusin", () => {
  chat_search_icon.classList.remove("bx-search");
  chat_search_icon.classList.add("bx-x");
  chat_search_icon.style.fontSize = "22px";
});
chat_search_icon.parentElement.addEventListener("click", () => {
  chat_search_icon.classList.remove("bx-x");
  chat_search_icon.classList.add("bx-search");
  chat_search.value = "";
  //   console.log(chat_search_icon.parentElement);
  chat_search_icon.style.fontSize = "16px";
  Array.from(chat_content).forEach((e) => {
    e.style.display = "";
    chat_rc.children[0].style.display = "";
    chat_rc.children[2].style.display = "";
    chat_rc.children[4].style.display = "";
  });
});
chat_search.addEventListener("keyup", () => {
  filter = chat_search.value.toUpperCase();

  Array.from(chat_content).forEach((e) => {
    li_content = e.firstElementChild.firstElementChild.children[1].innerText;
    if (li_content.toUpperCase().indexOf(filter) > -1) {
      e.style.display = "";
      chat_rc.children[0].style.display = "none";
      chat_rc.children[2].style.display = "none";
      chat_rc.children[4].style.display = "none";
    } else {
      e.style.display = "none";
    }
  });
});

// chat search end //

// contact search //

var contact_box = document.getElementsByClassName("contact-list");
var contact_search = document.getElementById("contact_search");
var contact_search_icon = document.getElementById("contact-search-icon");

contact_search.addEventListener("focusin", () => {
  contact_search_icon.classList.remove("bx-search");
  contact_search_icon.classList.add("bx-x");
  contact_search_icon.style.fontSize = "22px";
});

contact_search_icon.parentElement.addEventListener("click", () => {
  contact_search_icon.classList.remove("bx-x");
  contact_search_icon.classList.add("bx-search");
  contact_search.value = "";

  contact_search_icon.style.fontSize = "16px";

  Array.from(contact_box).forEach((e) => {
    e.parentElement.style.display = "";
  });
});

contact_search.addEventListener("keyup", () => {
  filter = contact_search.value.toUpperCase();
  reg = filter.charAt(0);

  Array.from(contact_box).forEach((e) => {
    var contact_ = e.previousElementSibling.textContent;
    var contact_short = e.parentElement;
    if (contact_.toUpperCase().indexOf(reg) > -1) {
      contact_short.style.display = "";
      Array.from(e.children).forEach((el) => {
        var contact_list = el.firstElementChild.children[1];

        if (contact_list.textContent.toUpperCase().indexOf(filter) > -1) {
          el.style.display = "";
        } else {
          el.style.display = "none";
        }
      });
    } else {
      contact_short.style.display = "none";
    }
  });
});
// contact search end //


let cols = document.getElementById("chatinputmorecollapse")
let cols_btn = document.getElementById("col_btn")
let all_slides = document.querySelectorAll(".swiper-slide div")
Array.from(all_slides).forEach((e) => {
  e.addEventListener("click", () => {
    cols.classList.remove("show");
    cols_btn.classList.add("collapsed");
    cols_btn.ariaExpanded = "false";
  })
})


// file show details //


let file_show = document.getElementsByClassName("file_Upload")[0];
let pre_img = document.getElementById("galleryfile-input")
let pre_doc = document.getElementById("attachedfile-input")
let pre_audio = document.getElementById("audiofile-input")


let image_pre = document.createElement('div')
image_pre.classList.add("image_pre", "profile-media-img");


var image_pr = "";
function img_p(img_id) {
  file_show.appendChild(image_pre)
  image_pr = document.createElement('div')
  image_pr.classList.add("media-img-list");
  image_pr.id = `remove-image-${img_id}`

  image_pr.innerHTML = `<a href="#"><img src"></a><i class="bx bx-x" onclick="removeImage('remove-image-${img_id}')"></i>`

  image_pre.append(image_pr)
}

let img_id = 0
var targeted_files = {
  images: "",
  attachment: "",
  audio: ""
};
pre_img.addEventListener("change", (e) => {

  // all files are looped with length of file object  and id genreted with `increment of loop lenth` // 

  file_show.classList.add("show")
  Array.from(e.target.files).forEach((el) => {
    if (el.type.slice(0, el.type.indexOf('/')) == 'image') {
      targeted_files.images = e.target.files;
      img_id = ++img_id
      img_p(img_id)
      img_src = document.querySelector(`#remove-image-${img_id} a img`)
      img = URL.createObjectURL(el);
      img_src.src = img

    }
  })


})

pre_doc.addEventListener("change", (e) => {

  file_show.classList.add("show")
  Array.from(e.target.files).forEach((el) => {
    targeted_files.attachment = e.target.files;
    img_id = ++img_id
    img_p(img_id)
    img_src = document.querySelector(`#remove-image-${img_id} a img`)
    img = URL.createObjectURL(el);
    img = el.name
    img_src.src = "assets/img/docs.jpg"
  })
})

pre_audio.addEventListener("change", (e) => {

  file_show.classList.add("show")
  Array.from(e.target.files).forEach((el) => {
    targeted_files.audio = e.target.files;
    img_id = ++img_id
    img_p(img_id)
    img_src = document.querySelector(`#remove-image-${img_id} a img`)
    img = URL.createObjectURL(el);
    img = el.name
    img_src.src = "assets/img/audio_p.webp"

  })


})

// this is called from event attributes  //
function removeImage(id) {
  sw = document.getElementById(`${id}`)
  sw.remove()
  if (file_show.firstElementChild.childNodes.length == 0) {
    file_show.classList.remove('show')
  }
}

function removeAllImages() {
  Array.from(document.querySelectorAll(".profile-media-img .media-img-list")).forEach((e) => {
    e.remove();
    file_show.classList.remove('show')
  })
}

remove_img_pre_list = () => {
  Array.from(document.querySelectorAll(".image_pre .media-img-list")).forEach((e) => {
    e.remove()
  })
  file_show.classList.remove('show')

}


// chat more input collapse function 

function remove_chatinputmorecollapse() {
  document.getElementById("chatinputmorecollapse").classList.remove("show");
}


// file show details end //


// chat list############################ 



// #########################

let chat_user_list = Array.from(document.querySelectorAll(".chat-user-list li"));
let contact_list = Array.from(document.querySelectorAll(".contact-list li"));

chat_user_list.forEach((e) => {
  e.addEventListener("click", (el) => {
    document.querySelector(".chat-part").classList.add("user-chat-show")
  })
})
contact_list.forEach((e) => {
  e.firstElementChild.children[1].addEventListener("click", (el) => {
    document.querySelector(".chat-part").classList.add("user-chat-show")
  })

})



document.getElementsByClassName("user-chat-remove")[0].addEventListener("click", () => {
  document.querySelector(".chat-part").classList.remove("user-chat-show")
})



// window chat bottom //


// console.log(window.innerWidth)/  
let msg_submit_btn = document.getElementById("msg-submit-btn");
let msg_input = document.getElementById("chat-input");

if (window.innerWidth <= 575) {
  msg_submit_btn.classList.remove("bxs-send");
  msg_submit_btn.classList.add("bxs-microphone")

  msg_input.addEventListener("focusin", (e) => {
    msg_submit_btn.classList.remove("bxs-microphone")
    msg_submit_btn.classList.add("bxs-send");

  })

  let submit_btn_cgr = (change) => {
    change.addEventListener("change", () => {
      msg_submit_btn.classList.remove("bxs-microphone")
      msg_submit_btn.classList.add("bxs-send");
    })
  }
  submit_btn_cgr(pre_audio);
  submit_btn_cgr(pre_doc);
  submit_btn_cgr(pre_img);

  msg_input.addEventListener("focusout", (e) => {
    msg_submit_btn.classList.remove("bxs-send");
    msg_submit_btn.classList.add("bxs-microphone")

  })
}



// ** message send data ** //

// msg_input
// msg_submit_btn




// reply card //

let cancle_reply_btn = document.getElementById("cancle_reply_btn");

reply_card_remove = () => {
  document.getElementsByClassName('replyCard')[0].classList.remove("show");
}
cancle_reply_btn.addEventListener("click", reply_card_remove)

let replyCard_val = document.querySelector(".replyCard div div div div");

var conversation_val = replyCard_val.lastElementChild
var conversation_name = replyCard_val.firstElementChild;

// reply message 
var reply_msg_val = "";
var conversater = "";

{
  $(document).on("click", ".reply-message", (e) => {
    remove_chatinputmorecollapse()
    a = e.target
    $(".replyCard").addClass("show")
    reply_msg_val = $(a).parentsUntil(".ctext-wrap").eq(1).prev().find("p.ctext-content").text();
    conversation_val.innerText = reply_msg_val

    let left_check = $(a).parentsUntil(".chat-list").parent().eq(0).attr("class");
    let return_val = left_check.includes("left");
    if (return_val) {
      conversater = "Akshay";
    } else {
      conversater = "you"
    }
  })




}


function class_check(selector, classname) {
  let replyCard = document.getElementsByClassName(selector)[0];
  replyCard = replyCard.classList.value.includes(classname);
  return replyCard;
}

function size_checker(number) {
  let bu = "";
  if (number < 1024) {
    let numb = number;
    bu = numb + "bytes";
  }
  if (1023 < number < 1048576) {
    let nu = number / 1024;
    bu = nu.toFixed(2) + "KB";
  }
  if (number >= 1048576) {
    num = number / 1048576;
    bu = num.toFixed(2) + "MB";
  }
  return bu;
}



let users_conversation = document.getElementById("users-conversation");
var list_id = 0;

document.getElementById("chat-input-section").addEventListener("submit", (e) => {
  e.preventDefault()

  let massege = msg_input.value;
  let contact_id = document.getElementsByClassName('chat-conversation')[0].getAttribute('id');
  // console.log(contact_id);
  e.preventDefault()
  $.ajax({
    url: "/doot/chat_ajax.php",
    type: "POST",
    data: {
      work: "msg_send",
      massege: massege,
      contact_id: contact_id
    },
    success: function (asd) {
      let data = JSON.parse(asd);
      load_chat(data.contact_id,data.userid,data.profile);

    }
  });



  list_id = ++list_id;
  let chat_list_right = document.createElement('li');
  chat_list_right.classList.add("chat-list", "right");
  chat_list_right.id = `list-id-${list_id}`;



  if (class_check("replyCard", "show")) {
    chat_list_right.innerHTML = `<div class="conversation-list">
    <div class="user-chat-content">
       <div class="ctext-wrap">
           <div class="ctext-wrap-content" id="">
             <div class="replymessage-block mb-0 d-flex align-items-start">
               <div class="flex-grow-1">
                 <h5 class="conversation-name mb-0">${conversater}</h5>

                  <p class="mb-0">${reply_msg_val}</p>
                </div>
             </div>
             <p class="ctext-content pt-1">${msg_input.value}</p>
           </div>
           <div class="nav-items dropdown align-self-start message-box-drop">
               <a class="toggle-message-menu" role="button"
                   data-bs-toggle="dropdown" aria-expanded="false">
                   <i class="bx bx-dots-vertical-rounded"></i>
               </a>
               <div class="dropdown-menu" data-popper-placement="bottom-start">
                   <!-- reply massage  -->
                   <a class="dropdown-item d-flex align-items-center justify-content-between reply-message"
                    id="reply-message-9">Reply
                    <i class="bx bx-share ms-2 text-muted"></i>
                   </a>
                   <!-- forword massage -->
                   <a class="dropdown-item d-flex align-items-center justify-content-between"
                       data-bs-toggle="modal"
                       data-bs-target=".forwardModal">Forward
                       <i class="bx bx-share-alt ms-2 text-muted"></i>
                   </a>
                   <!-- copy massage -->
                   <a class="dropdown-item d-flex align-items-center justify-content-between copy-message"
                       id="copy-message-0">Copy
                       <i class="bx bx-copy text-muted ms-2"></i>
                   </a>
 
                   <!-- bookmark massage  -->
                   <a
                       class="dropdown-item d-flex align-items-center justify-content-between">Bookmark
                       <i class="bx bx-bookmarks text-muted ms-2"></i>
                   </a>
 
                   <!-- mark as unread  -->
                   <a
                       class="dropdown-item d-flex align-items-center justify-content-between">Mark
                       as Unread
                       <i class="bx bx-message-error text-muted ms-2"></i>
                   </a>
 
                   <!-- delete massage  -->
                   <a
                       class="dropdown-item d-flex align-items-center justify-content-between delete-item">Delete
                       <i class="bx bx-trash text-muted ms-2"></i></a>
 
 
               </div>
 
           </div>
       </div>
       <div class="conversation-name">
           <small class="text-muted time">10:14 AM</small>
           <span class="text-success check-message-icon">
               <i class="bx bx-check-double"></i></span>
       </div>
   </div>
     </div>`;
  } else {
    chat_list_right.innerHTML = `<div class="conversation-list">
   <div class="user-chat-content">
      <div class="ctext-wrap">
          <div class="ctext-wrap-content" id="">
              <p class="mb-0 ctext-content">${msg_input.value}</p>
          </div>
          <div class="nav-items dropdown align-self-start message-box-drop">
              <a class="toggle-message-menu" role="button"
                  data-bs-toggle="dropdown" aria-expanded="false">
                  <i class="bx bx-dots-vertical-rounded"></i>
              </a>
              <div class="dropdown-menu" data-popper-placement="bottom-start">
                  <!-- reply massage  -->
                  <a class="dropdown-item d-flex align-items-center justify-content-between reply-message"
                   id="reply-message-9">Reply
                   <i class="bx bx-share ms-2 text-muted"></i>
                  </a>
                  <!-- forword massage -->
                  <a class="dropdown-item d-flex align-items-center justify-content-between"
                      data-bs-toggle="modal"
                      data-bs-target=".forwardModal">Forward
                      <i class="bx bx-share-alt ms-2 text-muted"></i>
                  </a>
                  <!-- copy massage -->
                  <a class="dropdown-item d-flex align-items-center justify-content-between copy-message"
                      id="copy-message-0">Copy
                      <i class="bx bx-copy text-muted ms-2"></i>
                  </a>

                  <!-- bookmark massage  -->
                  <a
                      class="dropdown-item d-flex align-items-center justify-content-between">Bookmark
                      <i class="bx bx-bookmarks text-muted ms-2"></i>
                  </a>

                  <!-- mark as unread  -->
                  <a
                      class="dropdown-item d-flex align-items-center justify-content-between">Mark
                      as Unread
                      <i class="bx bx-message-error text-muted ms-2"></i>
                  </a>

                  <!-- delete massage  -->
                  <a
                      class="dropdown-item d-flex align-items-center justify-content-between delete-item">Delete
                      <i class="bx bx-trash text-muted ms-2"></i></a>


              </div>

          </div>
      </div>
      <div class="conversation-name">
          <small class="text-muted time">10:14 AM</small>
          <span class="text-success check-message-icon">
              <i class="bx bx-check-double"></i></span>
      </div>
  </div>
    </div>`;
  }

  var image_data = "";
  if (targeted_files.images.length > 0) {

    image_data += ` <div class="conversation-list">
                                                <div class="user-chat-content">
                                                    <div class="ctext-wrap position-relative">
                                                    <div class="ctext-wrap-content image">`

    Array.from(targeted_files.images).forEach((e) => {
      img_src = URL.createObjectURL(e);
      img_name = e.name;
      img_size = e.size;

      image_data += `
      <div class="position-relative">
          <a class="popup-img d-block">
              <img src="${img_src}"
                  class="rounded border">
          </a>

           <div class="nav-items dropdown align-self-start image-box-drop">
        <a class="toggle-message-menu image" role="button"
            data-bs-toggle="dropdown" aria-expanded="false" id="sdf">
            <i class="bx bx-dots-horizontal-rounded"></i>
        </a>
        <div class="dropdown-menu" data-popper-placement="bottom-start">
            <!-- reply massage  -->
            <a class="dropdown-item d-flex align-items-center justify-content-between reply-message"
                id="reply-message-2" data-bs-show="collapse"
                data-bs-target=".replyCard">Reply
                <i class="bx bx-share ms-2 text-muted"></i>
            </a>
            <!-- forword massage -->
            <a class="dropdown-item d-flex align-items-center justify-content-between"
                data-bs-toggle="modal"
                data-bs-target=".forwardModal">Forward
                <i class="bx bx-share-alt ms-2 text-muted"></i>
            </a>
            <!-- download massage -->
            <a class="dropdown-item d-flex align-items-center justify-content-between copy-message"
                id="copy-message-0">Download
                <i class="bx bx-download text-muted ms-2"></i>
            </a>

            <!-- bookmark massage  -->
            <a
                class="dropdown-item d-flex align-items-center justify-content-between">Bookmark
                <i class="bx bx-bookmarks text-muted ms-2"></i>
            </a>

            <!-- delete massage  -->
            <a
                class="dropdown-item d-flex align-items-center justify-content-between delete-item">Delete
                <i class="bx bx-trash text-muted ms-2"></i></a>


        </div>

    </div>
      </div>
      <p class="mb-0 ctext-content">${msg_input.value}</p>
     `
    })


    image_data += ` </div>
   
</div>
<div class="conversation-name">
    <small class="text-muted time">10:14 AM</small>
    <span class="text-success check-message-icon">
        <i class="bx bx-check-double"></i></span>
</div>
</div>
</div>`;



    chat_list_right.innerHTML = image_data;
  }
  var audio_data = "";
  if (targeted_files.audio.length > 0) {

    audio_data += `<div class="conversation-list">
         <div class="user-chat-content">
      <div class="ctext-wrap">
          <div class="ctext-wrap-content attach-ment">
          `;

    Array.from(targeted_files.audio).forEach((e) => {

      _name = e.name;
      _size = e.size;


      // chat_list_audio //

      audio_data += ` <div class="attached-file-list p-2 d-flex">
      <div class="attached-file-details flex-shrink-0 me-3 ms-1">
          <div class="attached-file-avatar rounded-circle ">
              <i class="bx bx-headphone"></i>
          </div>
      </div>
      <div class="flex-grow-1 d-flex overflow-hidden">
          <h5 class="text-truncate mb-1">
              ${_name}
          </h5>
          <p class="mb-0">${size_checker(_size)}</p>
      </div>
      <div class="attached-icon ms-3 flex-shrink-0">
          <a class="px-1"><i class="bx bxs-download"></i></a>
      </div>
  </div>`
    })


    audio_data += `
<p class="mb-0 ctext-content">${msg_input.value}</p>
</div>
<div class="nav-items dropdown align-self-start message-box-drop">
<a class="toggle-message-menu" role="button"
    data-bs-toggle="dropdown" aria-expanded="false" id="sdf">
    <i class="bx bx-dots-vertical-rounded"></i>
</a>
<div class="dropdown-menu" data-popper-placement="bottom-start">
    <!-- reply massage  -->
    <a class="dropdown-item d-flex align-items-center justify-content-between reply-message"
        id="reply-message-2" data-bs-show="collapse"
        data-bs-target=".replyCard">Reply
        <i class="bx bx-share ms-2 text-muted"></i>
    </a>
    <!-- forword massage -->
    <a class="dropdown-item d-flex align-items-center justify-content-between"
        data-bs-toggle="modal"
        data-bs-target=".forwardModal">Forward
        <i class="bx bx-share-alt ms-2 text-muted"></i>
    </a>
    <!-- download massage -->
    <a class="dropdown-item d-flex align-items-center justify-content-between copy-message"
        id="copy-message-0">Download
        <i class="bx bx-download text-muted ms-2"></i>
    </a>

    <!-- bookmark massage  -->
    <a
        class="dropdown-item d-flex align-items-center justify-content-between">Bookmark
        <i class="bx bx-bookmarks text-muted ms-2"></i>
    </a>

    <!-- delete massage  -->
    <a
        class="dropdown-item d-flex align-items-center justify-content-between delete-item">Delete
        <i class="bx bx-trash text-muted ms-2"></i></a>


</div>

</div>
</div>
<div class="conversation-name">
<small class="text-muted time">10:14 AM</small>
<span class="text-success check-message-icon">
<i class="bx bx-check-double"></i></span>
</div>
</div>
                  </div>`;



    chat_list_right.innerHTML = audio_data;
  }
  var attachment_data = "";

  if (targeted_files.attachment.length > 0) {

    attachment_data += `<div class="conversation-list">
         <div class="user-chat-content">
      <div class="ctext-wrap">
          <div class="ctext-wrap-content attach-ment">
          `;

    Array.from(targeted_files.attachment).forEach((e) => {
      // img_src = URL.createObjectURL(e);
      _name = e.name;
      _size = e.size;

      // chat_list_attached //

      attachment_data += `   <div class="attached-file-list p-2 d-flex">
      <div class="attached-file-details flex-shrink-0 me-3 ms-1">
          <div class="attached-file-avatar rounded-circle ">
              <i class="bx bx-paperclip rotate"></i>
          </div>
      </div>
      <div class="flex-grow-1 d-flex overflow-hidden">
          <h5 class="text-truncate mb-1">
             ${_name}
          </h5>
          <p class="mb-0">${size_checker(_size)}</p>
      </div>
      <div class="attached-icon ms-3 flex-shrink-0">
          <a class="px-1"><i class="bx bxs-download"></i></a>
      </div>
  </div>`
    })


    attachment_data += `
<p class="mb-0 ctext-content">${msg_input.value}</p>
</div>
<div class="nav-items dropdown align-self-start message-box-drop">
<a class="toggle-message-menu" role="button"
    data-bs-toggle="dropdown" aria-expanded="false" id="sdf">
    <i class="bx bx-dots-vertical-rounded"></i>
</a>
<div class="dropdown-menu" data-popper-placement="bottom-start">
    <!-- reply massage  -->
    <a class="dropdown-item d-flex align-items-center justify-content-between reply-message"
        id="reply-message-2" data-bs-show="collapse"
        data-bs-target=".replyCard">Reply
        <i class="bx bx-share ms-2 text-muted"></i>
    </a>
    <!-- forword massage -->
    <a class="dropdown-item d-flex align-items-center justify-content-between"
        data-bs-toggle="modal"
        data-bs-target=".forwardModal">Forward
        <i class="bx bx-share-alt ms-2 text-muted"></i>
    </a>
    <!-- download massage -->
    <a class="dropdown-item d-flex align-items-center justify-content-between copy-message"
        id="copy-message-0">Download
        <i class="bx bx-download text-muted ms-2"></i>
    </a>

    <!-- bookmark massage  -->
    <a
        class="dropdown-item d-flex align-items-center justify-content-between">Bookmark
        <i class="bx bx-bookmarks text-muted ms-2"></i>
    </a>

    <!-- delete massage  -->
    <a
        class="dropdown-item d-flex align-items-center justify-content-between delete-item">Delete
        <i class="bx bx-trash text-muted ms-2"></i></a>


</div>

</div>
</div>
<div class="conversation-name">
<small class="text-muted time">10:14 AM</small>
<span class="text-success check-message-icon">
<i class="bx bx-check-double"></i></span>
</div>
</div>
                  </div>`;



    chat_list_right.innerHTML = attachment_data;
  }
  users_conversation.append(chat_list_right)

  msg_input.value = "";
  reply_card_remove();
  remove_img_pre_list();
  scrollview();
  pre_doc.value = "";
  pre_audio.value = "";
  pre_img.value = "";


})


document.getElementsByClassName('chat-search-box')[0].addEventListener("click", () => {


})











