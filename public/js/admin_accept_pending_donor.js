function f_color() {

    if (document.getElementById('status_cl').innerHTML  == 'qualified') { 
       document.getElementById('status_cl').style.color = "Green";
    }
    else(document.getElementById('status_cl').innerHTML == 'qualified') {
       document.getElementById('status_cl').style.color = "Orange";
    }
};
f_color();
