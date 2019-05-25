function updateTime(){
    var currentTime = new Date();
    var day = currentTime.getDay();
    var dates = currentTime.getDate();
    var month = currentTime.getMonth();
    var year = currentTime.getFullYear();
    var hours = currentTime.getHours();
    var minutes = currentTime.getMinutes();
    var seconds = currentTime.getSeconds();
    var day_name="";
    var months=0;

    switch (day) {
        case 0:
            day_name = "Chủ nhật";
            break;
        case 1:
            day_name = "Thứ hai";
            break;
        case 2:
            day_name = "Thứ ba";
            break;
        case 3:
            day_name = "Thứ tư";
            break;
        case 4:
            day_name = "Thứ năm";
            break;
        case 5:
            day_name = "Thứ sáu";
            break;
        case 6:
            day_name = "Thứ bảy";
    }
    switch (month) {
        case 0:
            months="01";
            break;
        case 1:
            months="02";
            break;
        case 2:
            months="03";
            break;
        case 3:
            months="04";
            break;
        case 4:
            months="05";
            break;
        case 5:
            months="06";
            break;
        case 6:
            months="07";
            break;
        case 7:
            months="08";
            break;
        case 8:
            months="09";
            break;
        case 9:
            months="10";
            break;
        case 10:
            months="11";
            break;
        case 11:
            months="12";
            break;
    }
    
    if (minutes < 10){
        minutes = "0" + minutes
    }
    if (seconds < 10){
        seconds = "0" + seconds
    }
    if (day < 10){
        day = "0" + day
    }
    if (dates < 10){
        dates = "0" + dates
    }
    if (month < 10){
        month = "0" + month
    }
    if(hours > 11){
        var t_str =hours + ":" + minutes + ":" + seconds + " PM | " + day_name + ", " + dates + "/" + months + "/" + year;
    } 
    else {
        var t_str =hours + ":" + minutes + ":" + seconds + " AM | " + day_name + ", " + dates + "/" + months + "/" + year;
    }
    document.getElementById('date_time').innerHTML = t_str;
}
setInterval(updateTime, 1000);