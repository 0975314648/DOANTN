function updateTime(){
    var currentTime = new Date();
    var day = currentTime.getDay();
    var month = currentTime.getMonth();
    var year = currentTime.getFullYear();
    var hours = currentTime.getHours();
    var minutes = currentTime.getMinutes();
    var seconds = currentTime.getSeconds();
    var day_name="";

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
    if (minutes < 10){
        minutes = "0" + minutes
    }
    if (seconds < 10){
        seconds = "0" + seconds
    }
    if (day < 10){
        day = "0" + day
    }
    if (month < 10){
        month = "0" + month
    }
    if(hours > 11){
        var t_str =hours + ":" + minutes + ":" + seconds + " PM | " + day_name + ", " + day + "/" + month + "/" + year;
    } 
    else {
        var t_str =hours + ":" + minutes + ":" + seconds + " AM | " + day_name + ", " + day + "/" + month + "/" + year;
    }
    document.getElementById('date_time').innerHTML = t_str;
}
setInterval(updateTime, 1000);