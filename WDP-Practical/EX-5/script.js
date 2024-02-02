let i1 = document.getElementById("i1");
let i2 = document.getElementById("i2");
let s1 = document.getElementById("s1");

s1.onclick = () => {
    let user = "light";
    let pass = "light77";
    if(i1.value === user)
    {
        if(i2.value === pass)
        {
            window.alert("Verified Successfully");
        }
        else
        {
            window.alert("Incorrect Password");
        }
    }
    else
    {
        window.alert("Incorrect Username and Password");
    }
}
