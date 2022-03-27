function fungsihari()
{
var x;
var y=new Date().getUTCDay();
var z=new Date();
switch (y)
    {
    case 0:
        x="Hari Minggu";
    break;
    case 1:
        x="Hari Senin";
    break;
    case 2:
        x="Hari Selasa";
    break;
    case 3:
        x="Hari Rabu";
    break;
    case 4:
        x="Hari Kamis";
    break;
    case 5:
        x="Hari Jum'at";
    break;
    case 6:
        x="Hari Sabtu";
    break;
    }
    document.getElementById("hari").innerHTML=x;
    document.getElementById("tanggal").innerHTML=z;
}
