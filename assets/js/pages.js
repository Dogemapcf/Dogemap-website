$(window).on('load',function() {

    if(!getCookie("L")){
        document.getElementById("dm").href = "/assets/css/bs-l.css";
        //dark mode btn change
        document.getElementById("dmlm").innerHTML = `Moon Mode`;
        setCookie("burntbiscuit", "L", 690);
    }
    document.getElementById("loader").style.display = "none";
    var load = function (url) {
        $.get(url).done(function (data) {
            $("#application").html(data);
        document.getElementById("loader").style.display = "none";
        })
    };

  $(document).on('click', 'a:not(.n-o)', function (e) {
      
        if($(this).attr("href") === undefined) {return true;}else{
        e.preventDefault();
        document.getElementById("loader").style.display = "block";

        var $this = $(this),
            url = $this.attr("href"),
            title = $this.text();

        history.pushState({
            url:  url,
            title: title,
        }, title, url);

        document.title = title;

        load(url, function(){
           
        });
    }

    });

    $(window).on('popstate', function (e) {

        var state = e.originalEvent.state;
        if (state !== null) {
            document.title = state.title;
            if(state.title.includes("dogemap.cf/")){document.title = "Dogemap (BETA)";}
            load(state.url);
        } else {
            if(state.title.includes("dogemap.cf/")){document.title = "Dogemap (BETA)";}
            load("/");
            
            history.pushState({
                url: "homepage",
                title: "Dogemap"
            }, title, url);
            
        }
    });
});



function rickroll(){
    console.log("NEVER GONNA GIVE YOU UP NEVER GONNA LET YOU DOWN.");
    document.location = "https://www.youtube.com/watch?v=dQw4w9WgXcQ";
}