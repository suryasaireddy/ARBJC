function showAlumni()
{
    document.getElementById("student").style.display = "none";
    document.getElementById("alumni").style.display = "block";
    document.getElementById("studentTab").style.border = "none";
    document.getElementById("alumniTab").style.borderBottomColor = "#2196F3";
    document.getElementById("alumniTab").style.borderBottomWidth = "2px";
    document.getElementById("alumniTab").style.borderBottomStyle = "solid";
}

function showStudent()
{
    document.getElementById("alumni").style.display = "none";
    document.getElementById("student").style.display = "block";
    document.getElementById("alumniTab").style.border = "none";
    document.getElementById("studentTab").style.borderBottomColor = "#2196F3";
    document.getElementById("studentTab").style.borderBottomWidth = "2px";
    document.getElementById("studentTab").style.borderBottomStyle = "solid";
}

function login()
{
    
    // document.getElementById("signup-Modal").style.display = "none";
    document.getElementById("login-Modal").style.display = "block";
}
function close()
{
    document.getElementById("login-Modal").style.display = "none";
}

function signup()
{
    document.getElementById("signup-modal").style.display = "block";
}
