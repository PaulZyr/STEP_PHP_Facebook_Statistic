$(document).ready(()=>{
    $('input[type="file"]').change(function(e){
        var fileName = e.target.files[0].name;
        document.getElementById('fileName').textContent = fileName;
    });

    var uploadField = document.getElementById("inputGroupFile");

    uploadField.onchange = function() {
        if(this.files[0].size > 5242880){
            alert("Завеликий файл!\n" + "Ви завантажуєте " 
                + (this.files[0].size / 1048576).toFixed(2) 
                + "Мб\nРозмір файла - не більше 5мб");
            this.value = "";
        };
    };
})