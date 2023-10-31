"use strict"; 

const body = document.body;
const bgColorsBody = ["#ffb457", "#ff96bd", "#9999fb", "#ffe797", "#cffff1"];
const tabs = body.querySelector(".tabs");
const tabsItems = tabs.querySelectorAll(".tabs__item");
const tabsBorder = tabs.querySelector(".tabs__border");
let activeItem = tabs.querySelector(".active");

function clickItem(item, index) {

    tabs.style.removeProperty("--timeOut");
    
    if (activeItem == item) return;
    
    if (activeItem) {
        activeItem.classList.remove("active");
    }

    
    item.classList.add("active");
    body.style.backgroundColor = bgColorsBody[index];
    activeItem = item;
    offsettabsBorder(activeItem, tabsBorder);
    
    
}

function offsettabsBorder(element, tabsBorder) {

    const offsetActiveItem = element.getBoundingClientRect();
    const left = Math.floor(offsetActiveItem.left - tabs.offsetLeft - (tabsBorder.offsetWidth  - offsetActiveItem.width) / 2) +  "px";
    tabsBorder.style.transform = `translate3d(${left}, 0 , 0)`;

}

offsettabsBorder(activeItem, tabsBorder);

tabsItems.forEach((item, index) => {

    item.addEventListener("click", () => clickItem(item, index));
    
})

window.addEventListener("resize", () => {
    offsettabsBorder(activeItem, tabsBorder);
    tabs.style.setProperty("--timeOut", "none");
});

function openTab(tabName) {
  var i;
  var x = document.getElementsByClassName("tab");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  document.getElementById(tabName).style.display = "block";
}
