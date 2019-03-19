

var domain = window.location.origin;
var container = document.getElementById('ajaxcontainer');
var defaultpath = "http://localhost";
var path = window.location.pathname;
var search = window.location.search;
var isanyfunction = "";
var body = $("body#body");

$( document ).ready(function() {
    OnCustomLoad();     
   
    swRegister();


    $(window).on('popstate',function(){
        loadback(location.pathname); 
    });


    $(document.body).find('a').on('click',function(e) 
    {
    e.preventDefault(); 
    url = $(this).attr('href');
    clickload(url);
    });
    


    $('#ajaxcontainer').on('click' ,'a',function(e){
        e.preventDefault();
        url = $(this).attr('href');
        clickload(url);
        
    })
 


    $(document.body).on('submit', 'form' ,function(e){
        e.preventDefault();
        var goform = $(this).attr('name');
        window[goform](e);
    })
   



   
    
});

    

function clickload(url)
{

    var ch1 = "http://";
    var ch2 = "www";
    var ch3 = ".";
    var str = url;
    if(str.includes(ch1) || str.includes(ch2) || str.includes(ch3))
    {

       // history.pushState(null,null,url);
        loadback(url,true);
    }
    else
    {
        
        history.pushState(null,null,url);
        loadback(url);
    }
}

    

function OnCustomLoad()
{
    loadback(location.pathname);
}


function loadback(url,fullLoad=false)
{
    if(fullLoad)
    {
        window.location.assign(url);
    }
    else
    {
        
        if(url != "#"){

            $('html,body').animate({
                scrollTop: $(container).offset().top
            }, 600);
            container.innerHTML = `<div id="wait" style="width:400px;height:300px;margin-top:10%;margin-left:30%;padding:2px;"><img src='http://localhost/lib/images/loading.gif' width="400" height="300" /><br></div>`;
           

        if(url[0] != "/")
        {
            url = "/"+url;
        }

         url = location.origin+"/ajax"+url;
        console.log(url);
        setTimeout(function(){
            fetch(url, {headers:{'I_AM_AJAX': 'YES'} })
        .then(response => response.text())
        .then(data => {
            
            container.innerHTML = data;
            
        })
        .catch(error => {container.innerHTML = error;})
        }, 1000);
    }
    }
}


    function loginform(e){

        var action = e.target.action;
        var method = e.target.method;
        var data = new FormData(e.target);

        fetch(action, {
        headers:{'I_AM_AJAX': 'YES'},
        method:method,
        body:data 
        })
        .then(response => response.json())
        .then(data => {
        if (data !==200) {
            alertify.error("Invalid Username Or Password");    
        }else
        {
            window.location.assign(defaultpath+"/home")
        }
        
        })
        .catch(error => {
        console.log(error);
        })
    }
    
    function logmeout()
    {
        alertify.confirm("Do you realy want to logout ?", function (e) {
            if (e) 
            {
             
                container.innerHTML = `<div id="wait" style="width:400px;height:300px;margin-top:10%;margin-left:30%;padding:2px;"><img src='http://localhost/lib/images/loading.gif' width="400" height="300" /><br><h1>Loging out..</h1></div>`;
                fetch(defaultpath+"/ajax/logout", 
                {
                    headers:{'I_AM_AJAX': 'YES'},
                    method:"get" 
                });
                setTimeout(function()
                {
                    window.location.reload();
                }, 9000);
                    
                   
                    
            }
        });
    }
    async function swRegister()
    {
        
        if ('serviceWorker' in navigator) {
            console.log("sw if");
            try {
                navigator.serviceWorker.register('/lib/js/sw.js');
          
            } catch (error) {
                
            }
        }else{
            console.log("sw not");
        }
    }
        





