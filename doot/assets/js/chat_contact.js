function load_chat_contact(){
  $.ajax({
    url:"/doot/chat_contact.php",
    type:"post",
     data:{
      work:"chat_con_load",
     },
     success:function(ps) {
        console.log(ps);
        
     }
  })
}

$("#chrt").click(()=>{
  load_chat_contact()
})