let contact_mobile=document.getElementById('addcontactmobile-input');
let contact_name=document.getElementById('addcontactname-input');
let contact_add=document.getElementById('contact_add');

function name_check(){
  if (contact_name.value.length>30 || contact_name.value=="") {
    contact_name.style.borderColor="red";    
    contact_name.nextElementSibling.style.color="red";
    contact_name.nextElementSibling.style.opacity=1;
    if (contact_name.value.length>30) {
      contact_name.parentElement.lastElementChild.innerHTML="Contact name lenght is not allowed more than 30";
    }else if ( contact_name.value=="") {    
      contact_name.parentElement.lastElementChild.innerHTML="you must enter the contact name";
    }
    contact_add.classList.add("disabled");
    return false; 
  }else if (contact_name.value.length<=30) {
    contact_name.style.borderColor="";
    contact_name.nextElementSibling.style.color="";
    contact_name.nextElementSibling.style.opacity=0;
    contact_name.parentElement.lastElementChild.innerHTML="";
    contact_add.classList.remove("disabled");   
    return true; 
  } 

}
contact_name.addEventListener("keyup",(e)=>{
name_check();
})


function load_contact() {
 
  let contact_short=['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L',
  'M', 'N', 'O', 'P', 'Q', 'R',  'S', 'T', 'U', 'V', 'W', 'X',
  'Y', 'Z'];
  var contact="";
  for (let i = 0; i < contact_short.length; i++) {
    const el = contact_short[i];
    
     
      $.ajax({
    url:"/doot/contact.php",
    type:"post",
    data:{
      work:"get_contact",
      contact_short:el
    },
    success:function (ps) {
     Contact_array=JSON.parse(ps) ;
     if (Object.keys(Contact_array[0])[0] != 'error'){
     contact+= `<div class="mt-3">
     <div class="contact-list-title">${el} </div>
     <ul id="contact-short-${el}" class="list-unstyled contact-list">`;    
    //  console.log(Object.keys(Contact_array[0])[0])
      Contact_array.forEach(e => {
          //  console.log(e.contact_name+" "+e.contact_id+" "+e.profile_photo);
        
              contact+=`<li id="${e.contact_id}" class="contact-l">
                  <div class="d-flex align-items-center">
                    <div class="flex-shrink-0 me-2">
                      <img src="assets/user_img/${e.profile_photo}" class="chat-avtar rounded-circle">
                    </div>
            
                    <div class="flex-grow-1">
                      <div class="fw-5 text-muted text-capitalize text-truncate">${e.contact_name}
                      </div>
                    </div>
                    <div class="flex-shrink-0">
                      <div class="nav-items">
                        <a class="text-muted" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <i class="bx bx-dots-vertical-rounded align-middle"> </i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end">
                          <a class="dropdown-item" href="#">Edit <i class="bx bx-pencil ms-2 text-muted"></i></a>
                          <a class="dropdown-item" href="#">Block <i class="bx bx-block ms-2  text-muted"></i></a>
                          <a class="dropdown-item" href="#">Remove <i class="bx bx-trash ms-2 text-muted"></i></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>`;   
     
      });
            contact+=`</ul>
            </div>`;
          $(".contact-box").html(contact);  
         }
    }
  })
}
}

window.addEventListener("load",load_contact);
// document.getElementById('asdf').addEventListener('click',load_contact)/

let contact_check_btn=document.getElementById('contact_check');

contact_check_btn.addEventListener('click',()=>{
      if (contact_mobile.value.length == 10 && !/[^0-9]/.test(contact_mobile.value)) {
            $.ajax({
              url:"/doot/contact.php",
              type:"post",
              data:{
                work:"contact_check",
                contact_mobile:contact_mobile.value
              },
              success:function(ps){                
                 contact_mobile.style.borderColor="#4eac6d";
                  contact_mobile.nextElementSibling.firstElementChild.classList.remove("bx-check-double");
                  contact_mobile.nextElementSibling.firstElementChild.classList.add("bxs-check-shield");
                  contact_mobile.nextElementSibling.firstElementChild.style.color="#4eac6d";
                if (ps==true) { 
                 contact_add.innerHTML="Add";

                }else if (ps==false) {             
                  contact_name.parentElement.style.display="none"
                 contact_add.innerHTML="Invite";
                 contact_add.classList.remove("disabled");  
                }
              }
            })
        }
        else{
          contact_mobile.style.borderColor="red";
          contact_mobile.parentElement.lastElementChild.innerHTML="Enter A valid mobile";
          contact_mobile.nextElementSibling.firstElementChild.classList.remove("bx-check-double");
         
          contact_mobile.nextElementSibling.firstElementChild.classList.add("bxs-error-circle");
          contact_mobile.nextElementSibling.firstElementChild.style.color="red"    
        }
     


});

contact_add.addEventListener('click',(e)=>{
  if (name_check()) {
    $.ajax({
      url:"/doot/contact.php",
      type:"post",
      data:{
        work:"add_contact",
        contact_mobile:contact_mobile.value,
        contact_name:contact_name.value
      },
      success:function(ps){ 
          contact_mobile.value="";
        contact_name.value="";
      load_contact()
     
      }
    })   
  }
   })

// function remove_err() 
  
contact_mobile.addEventListener('keyup',()=>{
  contact_mobile.style.borderColor="";
  contact_mobile.parentElement.lastElementChild.innerHTML="";
  contact_mobile.nextElementSibling.firstElementChild.classList.remove("bxs-error-circle");
  contact_mobile.nextElementSibling.firstElementChild.classList.remove("bxs-check-shield");
  contact_mobile.nextElementSibling.firstElementChild.classList.add("bx-check-double");
  contact_mobile.nextElementSibling.firstElementChild.style.color="";
  contact_name.parentElement.style.display="";
  contact_add.classList.add("disabled");  
})

