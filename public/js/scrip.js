
    var curDate = new Date();
    var curDay = curDate.getDate();
    var curMonth = curDate.getMonth() + 1;
    var curYear = curDate.getFullYear();
    document.getElementById('current-time').innerHTML = curDay + "/" + curMonth + "/" + curYear;

setInterval(function() {
    $('#converter_clock').text((new Date()).toLocaleTimeString());
}, 1000);
