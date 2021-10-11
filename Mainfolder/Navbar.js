window.onload=(()=>{var types = "contractor";
var fig=document.getElementById('checker');
if(fig.innerHTML=="user"){
    types="user";
}



var log = document.getElementById('fa-user')

log.addEventListener("click",(()=>{
    
    var x=document.createElement('div')
    var profile=document.createElement('a')
    profile.href=`../${types}/viewProfile.php`
    profile.text="View profile"
    var logout= document.createElement('a')
    var pendingreq= document.createElement('a')
    pendingreq.text="See pending request"
    pendingreq.href="Footer.php"
    var bre= document.createElement('br')
    var bre1= document.createElement('br')
    var bre2= document.createElement('br')
    var lab = document.createElement('label')
    lab.textContent="close"
    
    logout.href="../user/logout.php"
    logout.text="Logout"
    x.className="contain"
    x.appendChild(logout)
    x.appendChild(bre)
    x.appendChild(profile)
    x.appendChild(bre1)
    x.appendChild(pendingreq)
    x.appendChild(bre2)
    x.appendChild(lab)
    lab.addEventListener("click",()=>{
        document.getElementById('make-contain').innerHTML=""
    })
    document.getElementById('make-contain').appendChild(x)

}))
})