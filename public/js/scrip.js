
    var curDate = new Date();
    var curDay = curDate.getDate();
    var curMonth = curDate.getMonth() + 1;
    var curYear = curDate.getFullYear();
    document.getElementById('current-time').innerHTML = curDay + "/" + curMonth + "/" + curYear;

setInterval(function() {
    $('#converter_clock').text((new Date()).toLocaleTimeString());
}, 1000);

function send_contact(){
            let name = $("#name_contact").val();
            let phone = $("#phone_contact").val();
            let note = $("#note_contact").val();
            if(name == ""){
                rs = 1;
                alert("Vui lòng nhập tên của bạn!")
            }
            else if(phone == ""){
                rs = 1;
                alert("Vui lòng nhập số điện thoại của bạn!")
            }
            else if(note == ""){
                rs = 1;
                alert("Vui lòng để lại lời nhắn!")
            }
            else{
                rs = 0;
            }
            if(rs == 0){
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $.ajax({
                url: "{{url('/admin_ubiz@2022/insert_contact')}}",
                data: { 
                    name: name,
                    phone: phone,
                    note: note
                },
                type: "POST",
                dataType: "jsonp", 
                });
                alert("Thông tin của bạn đã được lưu!"); 
                // location.reload() 
            }
}