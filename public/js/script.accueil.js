const page1=document.getElementById("page1");
const page2=document.getElementById("page2");
const page3=document.getElementById("page3");
const page4=document.getElementById("page4");
const tab=[
    page1,
    page2,
    page3,
    page4
];


for (let i = 0; i < tab.length; i++) {
    tab[i].addEventListener('click',function () {
        tab[i].style.backgroundColor="rgb(200, 150, 150)";
        tab[i].style.borderLeft="5px solid green";
        tab[i].style.padding="0 1rem 0 1rem";
    
    });
}
    
