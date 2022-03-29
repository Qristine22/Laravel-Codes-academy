let inputs = document.querySelectorAll('.admin-file-pdf');
let labels = document.querySelectorAll('.admin-inp-file');


function imgReader(inputs){
    inputs.forEach((item, i) => {

        item.onchange = function (evt) {
            console.log(evt.target)
            var tgt = evt.target || window.event.srcElement,
                files = tgt.files;
        
            if (FileReader && files && files.length) {
                var fr = new FileReader();
                fr.onload = function () {
                    labels[i].innerHTML = evt.target.files[i].name;
                }
                fr.readAsDataURL(files[0]);
            }
        }
    });
}

imgReader(inputs);