//Edit Script education
$(document).ready(function() {
    $(".kirimAdd").click(function(_idEdu){
        var data = $("#edu").serialize();
        $.ajax({
            type: 'POST',
            data : data,
            url : "edit_proses.php",
            success: function(){
                location.href="education.php";
            }
        });
    });
});

//Script Tambah
$(document).ready(function(){
    $(".kirimEdit").click(function(){
        var data = $("#edu").serialize();
        $.ajax({
            type : 'POST',
            data : data,
            url  : "tambah_proses.php",
            success: function(){
                location.href="education.php";
            }
        });
    });
});

// Tambah employent
$(document).ready(function() {
    $(".kirim_add").click(function(){
        var data = $("#emp").serialize();
        $.ajax({
            type: 'POST',
            data : data,
            url : "tambahEmp_proses.php",
            success: function(){
                location.href="employment.php";
            }
        });
    });
});

//Edit employment
$(document).ready(function() {
    $(".kirim_edit").click(function(_id){
        var data = $("#emp").serialize();
        $.ajax({
            type: 'POST',
            data : data,
            url : "editEmp_proses.php",
            success: function(){
                location.href="employment.php";
            }
        });
    });
});