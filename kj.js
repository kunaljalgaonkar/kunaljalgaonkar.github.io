var tablinks = document.getElementsByClassName("tab-links");
var tabcontents = document.getElementsByClassName("tab-contents");

function opentab(tabname){
    for(tablink of tablinks){
        tablink.classslist.remove("active-link");
        }
        for(tabcontent of tabcontents){
        tabcontent.classslist.remove("active-tab");
        }
        Event.currentTarget.classslist.add("active-link");
        document.getElementById(tabname).classList.add("active-tab");
        }
