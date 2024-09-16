var x;
function hidebutton(){
    if(x==1){
        document.getElementById('pimpinansmk').style='display:none';
        document.getElementById('tu').style='display:none';
        document.getElementById('kakomli').style='display:none';
        document.getElementById('gurus').style='display:none';
        return x=0;
    }
    else
    {
        document.getElementById('pimpinansmk').style='display:none';
        document.getElementById('tu').style='display:none';
        document.getElementById('kakomli').style='display:none';
        document.getElementById('gurus').style='display:none';
        return x=1;
    }
}