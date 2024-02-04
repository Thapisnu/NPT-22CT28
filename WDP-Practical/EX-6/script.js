let f = document.getElementsByTagName("iframe");
let s = document.getElementsByTagName("button");

s[0].onclick = () => {

    if(f[0].src.includes("fr2.html"))
    {
        f[0].src = "fr1.html";
    }
    else
    {
        f[0].src = "fr2.html";
    }

}
