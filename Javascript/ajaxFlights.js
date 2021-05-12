$.ajax({url: "../Php/dbFlights.php",
        success: function(data) {
            for (i=0; i < data; i++ ){
                var div = document.getElementById('div');
                var tag = document.createElement('button');
                tag.classList.add("volo_btn");
                tag.onclick = function() {
                    $.ajax({url: "../Php/dbTable.php",
                    success: function(data) {
                        data = JSON.parse(data);
                        document.getElementById('aeroportopartenza').value = data[0];
                        document.getElementById('aeroportodestinazione').value = data[1];
                        document.getElementById('orariopartenza').value = data[2];
                        document.getElementById('tipovolo').value = data[3];
                        document.getElementById('tempodivolo').value = data[4];
                        document.getElementById('carburantevolo').value = data[5];
                        document.getElementById('quota').value = data[6];
                        }
                    });
                }
                var br = document.createElement('br');
                tag.innerHTML = 'Volo N°'+(i+1);
                div.appendChild(tag);
                div.appendChild(br);
            }
            }
});