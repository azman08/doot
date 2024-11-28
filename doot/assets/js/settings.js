// settings section details
let confirm_settings = document.getElementById("confirm-settings");
let details_val = document.getElementsByClassName('set_val')


function get_val() {
    let all_vals = { name: "", mail: "", mobile: "", about: "" };
    Array.from(details_val).forEach((e, i) => {
        all_vals.name = details_val[0].innerText;
        all_vals.mail = details_val[1].innerText;
        all_vals.mobile = details_val[2].innerText;
        all_vals.about = details_val[3].innerText;
    })
    return all_vals;
}

function change_val(name, mail, mobile, about) {
    Array.from(details_val).forEach((e, i) => {
        details_val[0].innerHTML = `<input  type="text" value="${name}" id="name" autofocus> <i class="bx bx-x"></i>`;
        details_val[1].innerHTML = `<input type="text" value="${mail}" id="mail"> <i class="bx bx-x"></i>`;
        details_val[2].innerHTML = `<input type="text" readonly value="${mobile}" id="mobile"> `;
        details_val[3].innerHTML = `<textarea id="about">${about}</textarea> <i class="bx bx-x"></i>`;
    })
}

function after_change_val(name, mail, mobile, about) {
    Array.from(details_val).forEach(() => {
        details_val[0].innerHTML = name;
        details_val[1].innerHTML = mail;
        details_val[2].innerHTML = mobile;
        details_val[3].innerHTML = about;
    })
}


function emty_input_val() {
    Array.from(document.querySelectorAll(".set_val i")).forEach((e) => {
        e.addEventListener("click", () => {
            e.previousElementSibling.value = "";
        })
    })
}

// get input value with id // 

function input_val(id) {
    val = document.getElementById(id).value
    return val;
}


var ok_setting = 0
confirm_settings.addEventListener("click", (e) => {
    if (ok_setting == 0) {
        let all_vals = get_val();
        change_val(all_vals.name, all_vals.mail, all_vals.mobile, all_vals.about)
        emty_input_val()
        e.target.classList.remove("bxs-pencil")
        e.target.classList.add("bx-check-double")
        ok_setting = 1
    } else { 
         $.ajax({
            url:"/doot/settings.php",
            type:"post",
            data:{
                work:"data-update",
                name:input_val("name"),
                email:input_val("mail"),
                mobile: input_val("mobile"),
                about:input_val("about")
            },
            success:function(ps){
                console.log(ps);
                
            }
        })
        after_change_val(input_val("name"), input_val("mail"), input_val("mobile"), input_val("about"))
        e.target.classList.remove("bx-check-double")
        e.target.classList.add("bxs-pencil");
      
        ok_setting = 0
    }
})



// settings section details end



var active_staus = document.getElementsByClassName('active_status');
Array.from(active_staus).forEach((e) => {
    e.addEventListener('click', (es) => {
        var work_val = es.target.dataset.work;
        $.ajax({
            url: "/doot/settings.php",
            type: 'post',
            data: {
                work: "satatus_change",
                val: work_val
            },
            success: function (ps) {
                let asb=document.getElementsByClassName('active_status_badge')[0];
                if (ps=='online') {
                    asb.classList.remove('pr-away')
                    asb.classList.remove('pr-dnd')
                    asb.classList.add('pr-active')
                }else if (ps=='away') {
                    asb.classList.remove('pr-dnd')
                    asb.classList.remove('pr-active')
                    asb.classList.add('pr-away')
                } else if (ps=='do not disturb') {
                    asb.classList.remove('pr-away')
                    asb.classList.remove('pr-active')
                    asb.classList.add('pr-dnd')
                }
                asb.nextSibling.nodeValue=" "+ps+" ";
               
                

            }
        })

    })

})

