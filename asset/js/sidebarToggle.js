let sidebarDiv = document.querySelectorAll("#staticBackdrop div")
let a = document.querySelectorAll("#staticBackdrop div a")

console.log(sidebarDiv);
console.log(a)

function clickSidebar (parameterIndex) {
    sidebarDiv[parameterIndex].classList.add("border", "border-5", "border-bottom-0", "border-top-0", "border-end-0", "border-primary")
    a[parameterIndex].classList.replace("text-grey-custom", "text-secondary")
    a[parameterIndex].classList.add("fw-bold")

    for(let index = 0; index < sidebarDiv.length; index++) {
        if (index != parameterIndex && (a[index].classList.contains("text-secondary") == true)) {
            sidebarDiv[index].classList.remove("border-5", "border-start", "border-primary");
            a[index].classList.replace("text-secondary", "text-grey-custom")
            a[index].classList.remove("fw-bold")
        }
    }
}

