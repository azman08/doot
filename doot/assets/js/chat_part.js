
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


function load_chat(contact_id,userid,profile) {
  $.ajax({
    url: "/doot/chat_ajax.php",
    type: "post",
    data: {
      work: "chat_get",
      contact_id: contact_id
    },
    success: function (ps) {
      let data = JSON.parse(ps);
      
      function chat_gotten(data) {
        let d = [];
        if (data.length > 1) {
          for (let i = 0; i < data.length; i++) {
            const e = data[i];
            var r;
            var t;
            if (i < data.length - 1) {
              r = data[i + 1];
              t = new Date(r.message_send_time)
            }

            const s = new Date(e.message_send_time)

            if (s.getTime() > t.getTime()) {
              d.push(e)
            } else {
              d.push(e);

            }
          }
        } else {
          d.push(data[0])
        }
        return d;
      }
         let chat= chat_gotten(data)
     

      // <ul class="list-unstyled chat-conversation-list" id="users-conversation">

      let chat_ul=document.createElement('ul');
      chat_ul.classList.add("list-unstyled","chat-conversation-list")
       chat_ul.id="users-conversation";

        $('.chat-conversation').html(chat_ul);

      chat.forEach(e => {
       sender=e.sender_userid;
       receiver= e.receiver_userid
       time = e.message_send_time
       message =e.message_text;

       let d=new Date(time);
       let main_time;
        if (d.getHours()<12) {
          main_time=d.getHours()+":"+d.getMinutes()+"  AM";
        }else if (d.getHours()==12){
          main_time=(d.getHours())+":"+d.getMinutes()+"  PM";
        }else {
          main_time=(d.getHours()-12)+":"+d.getMinutes()+"  PM";
        }


      let chat_list=document.createElement('li')
        if (sender==userid && receiver==contact_id) {
          chat_list.classList.add("chat-list", "right");
          chat_list.innerHTML=`
          <div class="conversation-list">
           
            <div class="user-chat-content">
              <div class="ctext-wrap">
                <div class="ctext-wrap-content" id="1">
                  <p class="mb-0 ctext-content">${message} </p>
                </div>
                <div class="nav-items dropdown align-self-start message-box-drop">
                  <a class="toggle-message-menu" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="bx bx-dots-vertical-rounded"></i>
                  </a>
                  <div class="dropdown-menu" data-popper-placement="bottom-end">
                    <!-- reply massage  -->
                    <a class="dropdown-item d-flex align-items-center justify-content-between reply-message"
                      id="reply-message-1">Reply
                      <i class="bx bx-share ms-2 text-muted"></i>
                    </a>
                    <!-- forword massage -->
                    <a class="dropdown-item d-flex align-items-center justify-content-between"
                      data-bs-toggle="modal" data-bs-target=".forwardModal">Forward
                      <i class="bx bx-share-alt ms-2 text-muted"></i>
                    </a>
                    <!-- copy massage -->
                    <a class="dropdown-item d-flex align-items-center justify-content-between copy-message"
                      id="copy-message-0">Copy
                      <i class="bx bx-copy text-muted ms-2"></i>
                    </a>
   
                    <!-- bookmark massage  -->
                    <a class="dropdown-item d-flex align-items-center justify-content-between">Bookmark
                      <i class="bx bx-bookmarks text-muted ms-2"></i>
                    </a>
   
                    <!-- mark as unread  -->
                    <a class="dropdown-item d-flex align-items-center justify-content-between">Mark
                      as Unread
                      <i class="bx bx-message-error text-muted ms-2"></i>
                    </a>
   
                    <!-- delete massage  -->
                    <a class="dropdown-item d-flex align-items-center justify-content-between delete-item">Delete
                      <i class="bx bx-trash text-muted ms-2"></i>
                    </a>
   
                  </div>
                </div>
              </div>
              <div class="conversation-name">
                <small class="text-muted time">${main_time}</small>
                <span class="text-success check-message-icon"><i class="bx bx-check-double"></i></span>
              </div>
            </div>
          </div>`;

        }else if (sender==contact_id && receiver==userid) {
          chat_list.classList.add("chat-list", "left")
           chat_list.innerHTML=`
       <div class="conversation-list">
         <div class="chat-avatar">
           <img src="assets/user_img/${profile}">
         </div>
         <div class="user-chat-content">
           <div class="ctext-wrap">
             <div class="ctext-wrap-content" id="1">
               <p class="mb-0 ctext-content">${message} </p>
             </div>
             <div class="nav-items dropdown align-self-start message-box-drop">
               <a class="toggle-message-menu" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                 <i class="bx bx-dots-vertical-rounded"></i>
               </a>
               <div class="dropdown-menu" data-popper-placement="bottom-end">
                 <!-- reply massage  -->
                 <a class="dropdown-item d-flex align-items-center justify-content-between reply-message"
                   id="reply-message-1">Reply
                   <i class="bx bx-share ms-2 text-muted"></i>
                 </a>
                 <!-- forword massage -->
                 <a class="dropdown-item d-flex align-items-center justify-content-between"
                   data-bs-toggle="modal" data-bs-target=".forwardModal">Forward
                   <i class="bx bx-share-alt ms-2 text-muted"></i>
                 </a>
                 <!-- copy massage -->
                 <a class="dropdown-item d-flex align-items-center justify-content-between copy-message"
                   id="copy-message-0">Copy
                   <i class="bx bx-copy text-muted ms-2"></i>
                 </a>

                 <!-- bookmark massage  -->
                 <a class="dropdown-item d-flex align-items-center justify-content-between">Bookmark
                   <i class="bx bx-bookmarks text-muted ms-2"></i>
                 </a>

                 <!-- mark as unread  -->
                 <a class="dropdown-item d-flex align-items-center justify-content-between">Mark
                   as Unread
                   <i class="bx bx-message-error text-muted ms-2"></i>
                 </a>

                 <!-- delete massage  -->
                 <a class="dropdown-item d-flex align-items-center justify-content-between delete-item">Delete
                   <i class="bx bx-trash text-muted ms-2"></i>
                 </a>

               </div>
             </div>
           </div>
           <div class="conversation-name">
             <small class="text-muted time">${main_time}</small>
             <span class="text-success check-message-icon"><i class="bx bx-check-double"></i></span>
           </div>
         </div>
       </div>`;
        }

        

        $('#users-conversation').append(chat_list);
        


        scrollview();
      });

    }
  })


}


$(document).on('click', '.contact-l', (e) => {
  tr = e.target
  st = $(tr).parentsUntil('.contact-list')[2];
  if ($(st).attr('class') == 'contact-l') {
    let contact_id = $(st).attr('id');
    $.ajax({
      url: "/doot/chat_ajax.php",
      type: "post",
      data: {
        work: "conatct_update",
        contact_id: contact_id
      },
      success: function (name) {
        let contact_data = JSON.parse(name);
        let user_contact_box = document.getElementsByClassName('user-contact')[0];
        //  console.log(contact_data.online_check);
        user_contact_box.firstElementChild.src = "/doot/assets/user_img/" + contact_data.contact_profile;
        user_contact_box.nextElementSibling.firstElementChild.firstElementChild.innerHTML = contact_data.contact_name;
        user_contact_box.nextElementSibling.firstElementChild.firstElementChild.id = contact_data.contact_id;
        let chat_box = document.getElementsByClassName('chat-conversation')[0];
        chat_box.id = contact_data.contact_id;

        // side bar 
        $('.chat-part').addClass('user-chat-show')
        user_profile_sidebar.classList.add("d-none")
        user_profile_sidebar.classList.remove("d-block");
        // side_status.lastChild.nodeValue=""

        // chat loading function 

        load_chat(contact_data.contact_id, contact_data.userid,contact_data.contact_profile);
    
     


        if (contact_data.online_check == 1) {
          user_contact_box.nextElementSibling.firstElementChild.nextElementSibling.firstElementChild.innerHTML = contact_data.contact_online_status;
          if (contact_data.contact_online_status=='online') {           
            user_contact_box.lastElementChild.id = "online";
          } else if(contact_data.contact_online_status=='away') {
            user_contact_box.lastElementChild.id = "away";
          }
          else if(contact_data.contact_online_status=='do not disturb'){
            user_contact_box.lastElementChild.id = "dnd";
          }
        } else if (contact_data.online_check == 0) {
          user_contact_box.nextElementSibling.firstElementChild.nextElementSibling.firstElementChild.innerHTML = contact_data.contact_last_seen;
          user_contact_box.lastElementChild.id = "";

          // time check last seen 

          // function time(time) {
          //   let d=new Date();
          //   logout_time=Date.parse(time);
          //   current_time=Date.parse(d);
          //   time_df=current_time-logout_time;
          //    minuts=Math.floor((time_df/(1000*60))%60)
          //   hours=Math.floor((time_df/(1000*60*60))%60)
          //   return hours
          // }


        }
        chat_welcome_remove()

      }
    })


  }



})



