function changePolice(e)
{
    var x = e.clientX;
    var y = e.clientY;

    var wx = window.innerWidth;
    var wy = window.innerHeight;

    if(wx - x < 200 && wy - y < 200)
    {
        document.getElementById('body').style.fontFamily = 'Comic Sans MS';
    }
    else
    {
        document.getElementById('body').style.fontFamily = 
            '"Roboto", Helvetica, Arial, sans-serif';
    }
}
